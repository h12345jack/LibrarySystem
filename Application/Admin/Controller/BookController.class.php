<?php
namespace Admin\Controller;
use \PublicUse\Controller\CommonController;

class BookController extends CommonController {
	public function add() {
		$this->display();
	}
	public function add_book() {
//增加书
		//dump(I('post.'));
		//这里开始进行一系列的运算过程
		$data['title'] = I('title'); //标题
		$data['isbn'] = I('isbn'); //isbn
		$data['publish_year'] = I('date'); //出版时间
		$data['publisher'] = I('publisher'); //出版社
		$data['type'] = I('type'); //分类号
		$num = I('number');
		$data['price'] = I('price');
		$data['abstract'] = I('abstract');
		$data['cover'] = I('upload');
		$book = M('book');
		$creator = M('creator');
		$book->startTrans();
		if ($book->create()) {
			if ($result = $book->add($data)) {
				$bookid = $result;
				$book->commit();
			} else {
				$book->rollback();
				$this->assign('jumpUrl', './index');
				$this->error('添加失败!');
			}
		}
		$creator->startTrans();
		$a = 0;
		$name1 = "creatorname" . $a;
		$name2 = "creatorcountry" . $a;
		$name3 = "creatordate" . $a;
		$name4 = "creatorrole" . $a;
		do {
			$a++;
			$name1 = "creatorname" . $a;
			$name2 = "creatorcountry" . $a;
			$name3 = "creatordate" . $a;
			$name4 = "creatorrole" . $a;
			$data2['name'] = I($name1);
			$data2['country'] = I($name2);
			$data2['birthday'] = I($name3);
			$role1 = I($name4); //
			$creator = M('creator');
			if ($creatorid = $creator->add($data2)) {
				if ($role1 == 1) //作者
				{
					$author = M('author');
					$data3['book_id'] = $bookid;
					$data3['author_id'] = $creatorid;
					M('author')->add($data3);
				} else {
					$author = M('translator');
					$data3['book_id'] = $bookid;
					$data3['translator_id'] = $creatorid;
					M('translator')->add($data3);
				}
			}
			if ($a > 15) {
//担心出现死循环
				break;
			}
			$next = "creatorname" . ($a + 1);
		} while (I($next));
		$creator->commit();
		$copy = M('copy');
		for ($i = 0; $i < $num; $i++) {
			$data5['bookid'] = $bookid;
			$copy->add($data5);
		}
		$this->assign('jumpUrl', './manage');
		$this->success('添加成功!');
	}
	public function delete_book() {
//删除书
		$id = I('id');
		$book = D('Book');
		if ($book->delete_book($id) == 1) {
			$this->success("删除成功");
		} else {
			$this->error("删除失败");
		}

	}
	public function update_book() {
//修改书
		//dump(I('post.'));
		$data['title'] = I('title'); //标题
		$data['isbn'] = I('isbn'); //isbn
		$data['publish_year'] = I('date'); //出版时间
		$data['publisher'] = I('publisher'); //出版社
		$data['type'] = I('type'); //分类号
		$num = 1;
		$data['id'] = I('id');
		$data['price'] = I('price');
		$data['abstract'] = I('abstract');
		$data['cover'] = I('upload');
		//dump($data);

		$book = M('book');
		$creator = M('creator');
		$a = 1;
		$name1 = "creatorname" . $a;
		$name2 = "creatorcountry" . $a;
		$name3 = "creatorbirthday" . $a;
		$name4 = "creatorrole" . $a;
		$name5 = "creatorid" . $a;
		$bookid = array();
		//dump($data);
		for ($i = 0; $i < $num; $i++) {
			if ($book->create()) {
				if ($result = $book->save($data)) {

					array_push($bookid, $result);

				}

			}
		}
		//dump($bookid);
		while (I($name1)) {
			$data2['name'] = I($name1);
			$data2['country'] = I($name2);
			$data2['birthday'] = I($name3);
			$data2['id'] = I($name5);
			$role1 = I($name4); //
			//dump($data2);
			$a++;
			$name1 = "creatorname" . $a;
			$name2 = "creatorcountry" . $a;
			$name3 = "creatorbirthday" . $a;
			$name4 = "creatorrole" . $a;
			$name5 = "creatorid" . $a;
			$creator = M('creator');
			$creatorid = $creator->save($data2);
			if ($a > 15) {
				break;
			}

		}
		$this->assign('jumpUrl', './manage');
		$this->success('修改成功!');

	}
	public function index() {
//显示首页
		$this->display();
	}
	public function query() {
		$this->display();
	}
//对于每种书的管理
	public function manage() {
		$data = M('book')->select();
		//dump($data);
		$this->assign('data', $data);
		$this->display();
	}

	public function detail_view() {
		$id = I('id');
		$var = 1;
		$data['id'] = $id;
		$data = M('book')->where($data)->select();
		$data = $data[0];
		$sql1 = "select * from yzz_author,yzz_creator where book_id=$id and yzz_author.author_id=yzz_creator.id";
		$data2 = M()->query($sql1);
		for ($i = 0; $i < count($data2); $i++) {
			$data2[$i]['var'] = $var;
			$var++;
		}
		$data['author'] = $data2;
		$sql1 = "select * from yzz_translator,yzz_creator where book_id=$id and yzz_translator.translator_id=yzz_creator.id";
		$data2 = M()->query($sql1);
		for ($i = 0; $i < count($data2); $i++) {
			$data2[$i]['var'] = $var;
			$var++;
		}
		$data['num'] = $var - 1;
		$data['translator'] = $data2;
		//dump($data);
		$this->assign('data', $data);
		$this->display();
	}
	public function delete_uesr() {
//删除用户
		$id = I('id');
		if ($id != $_SESSSION['id']) {
			M('user')->delete($id);
		}
		# code...
	}
//查找书
	public function find_book() {
		$query = I('query'); //检索项
		$term = I('term'); //检索词
		$p = I('p');
		if (!I('p')) {
			$p = 1;
		}
		$rs = myquery($term, $query);

		$data = array();
		for ($i = $p - 1; $i < $p * 10 && $i < count($rs); $i++) {
			$rs[$i]['num'] = ($p - 1) * 10 + $i;
			array_push($data, $rs[$i]);
		}

		$num = count($rs);
		$page = new \Think\Page($num, 10);
		//dump($data);
		$page->setConfig('header', '页');
		$show = $page->show();
		$result = $term . '的检索结果';
		$this->assign('result', $result);
		$this->assign('data', $data);
		$this->assign('page', $show);
		$this->display();
	}

//获得具体的书 根据bookid 对于每一本的详情获取 主要包括该书是否被人借走了
	public function detail_borrow() {
		$id = I('id'); //书目的ID
		$data['copy'] = mydetail_book($id);
		$rs = myquery($id, 8);
		$data['book'] = $rs[0];
		$data['book']['can_borrow'] = 0;
		for ($i = 0; $i < count($data['copy']); $i++) {
			if ($data['copy'][$i]['is_borrowed'] == 1) {
				$copyid = $data['copy'][$i]['copyid'];
				$sql = "select * from yzz_book_borrow where copyid='$copyid' and status<>1";
				$rs = M()->query($sql);
				$rs = $rs[0];
				$data['copy'][$i]['borrowpeople'] = $rs['userid'];
				$data['copy'][$i]['borrowtime'] = $rs['borrowtime'];

			} else {
				$data['book']['can_borrow'] = 1; //存在一本书没有被借走
			}
		}
		//dump($data);
		$this->assign('data', $data);
		$this->display();
	}
	public function borrow2() {
//借书
		$userid = I('id');
		$mark = I('iid');
		$data = array();
		$data['userid'] = $userid;
		$data['bookid'] = I('bookid');
		$bookid = I('bookid');
		$data['borrowtime'] = time();
		$sql = "select * from yzz_book where yzz_book.id=$bookid and is_booked=1"; //存在一个副本没有被预约
		$rs = M()->query($sql);
		//dump($rs);
		if (count($rs) != 0) //如果被预约
		{
			$sql2 = "select * from yzz_book_booked where bookid='$bookid' and status=0 order by bookedtime ";
			$rs = M()->query($sql2);
			//获取当前可以借书的人
			$sql3 = "select * from yzz_copy where bookid=$bookid and is_borrowed=0";
			$rs3 = M()->query($sql3);
			$flag = 0;
			for ($i = 0; $i < count($rs3); $i++) {
				//遍历前可借副本个预约用户，如果没有当前用户就不能借
				if ($rs[$i]['userid'] == $userid) {
					$flag = 1;
					$dllid = $rs[$i]['id'];
				}
			}
			if ($flag == 0) {
				$this->error("对不起，有人预约了，或该预约人在您之前进行预约");
			} else {
				//如果当前预约人就是这个人的话
				//修改预约记录为1，当前预约已被满足
				$data3['status'] = 1;
				$data3['id'] = $dllid;
				M('book_booked')->data($data3)->save(); //修改预约记录了
				//判断是否还有预约人，如果没有的话，将预约is_booked改为0;
				$sql2 = "select * from yzz_book_booked where bookid='$bookid' and status=0 order by bookedtime ";
				$rs = M()->query($sql2);
				if (count($rs) == 0) {
					//如果为空的时候
					$data4['is_booked'] = 0;
					$data4['id'] = $bookid;
					M('book')->data($data4)->save();
				}
				$sql = "select * from yzz_copy where yzz_copy.bookid=$bookid and is_borrowed=0";
				//echo $sql;
				$rs = M()->query($sql);
				$data['copyid'] = $rs[0]['copyid'];
				if (M('book_borrow')->add($data)) {
					$data2['copyid'] = $rs[0]['copyid'];
					$data2['is_borrowed'] = 1;
					M('copy')->data($data2)->save();
					$this->assign('jumpUrl', './index');
					$this->success('借书成功!');
				} else {
					$this->assign('jumpUrl', './index');
					$this->error('借书失败!');
				}
			}

		} else {
			//未被预约
			$sql = "select * from yzz_copy where yzz_copy.bookid=$bookid and is_borrowed=0";
			//echo $sql;
			$rs = M()->query($sql);
			$data['copyid'] = $rs[0]['copyid'];
			if (M('book_borrow')->add($data)) {
				$data2['copyid'] = $rs[0]['copyid'];
				$data2['is_borrowed'] = 1;
				M('copy')->data($data2)->save();
				$this->assign('jumpUrl', './index');
				$this->success('借书成功!');
			} else {
				$this->assign('jumpUrl', './index');
				$this->error('借书失败!');
			}
		}

	}

	public function returnbook123() {
		$id = I('id');
		$sql = "select * from yzz_book_borrow where copyid='$id' and status=0 and returntime is NULL";
		//echo $sql; //查询到借书的记录
		$rs = M()->query($sql);
		$rs = $rs[0];
		//dump($rs);
		$data['returntime'] = time();
		$data['status'] = 1;
		$data['id'] = $rs['id'];
		if (M('book_borrow')->save($data)) {
			$time = $data['returntime'] - $rs['borrowtime'];
			if ($time > 3600 * 24 * 30) {
				$userid = $rs['userid'];
				$user = new \Admin\Model\UserModel();
				$user->credit1($userid, $time); //逾期信用减少
			}
			$data2['copyid'] = $id;
			$data2['is_borrowed'] = 0;
			M('copy')->data($data2)->save();
			$this->success('还书成功!');
		} else {
			$this->error('还书失败!');
		}
	}

	public function bookandpeople() {
		//	echo "here";
		if (!I('id')) {
			$bookid = 11;
		} else {
			$bookid = I('id');
		}
		//echo $bookid;
		$sql = "select distinct userid from yzz_book_borrow where copyid in(select copyid from yzz_copy where yzz_copy.bookid=$bookid)"; //获取借过这本书的用户
		$rs = M()->query($sql);
		//dump($rs);
		$json = array();
		$sql2 = "select title from yzz_book where id=$bookid";
		$rs2 = M()->query($sql2);
		$rs2 = $rs2[0];
		$json[0]['id'] = "node0";
		$name = $rs2['title'];
		$json[0]['name'] = urlencode($rs2['title']);
		$json[0]["data"]['$dim'] = 50;
		//$json[0]["data"]['$type'] = "star";
		$json[0]['data']['$color'] = "#FF9900";
		$json[0]['adjacencies'] = array();
		for ($i = 0; $i < count($rs); $i++) {
			$tmp['nodeTo'] = "node" . ($i + 1);
			$tmp['data']['weight'] = 3;
			$tmp['data']['$color'] = "#dd99dd";
			$userid = $rs[$i]['userid'];
			$sql = "select count(*) as num from yzz_book_borrow where yzz_book_borrow.userid=$userid and copyid in(select copyid from yzz_copy where yzz_copy.bookid=$bookid) and status=1;";
			$dllrs = M()->query($sql);
			//echo $sql;
			//dump($dllrs);
			$dllrs = $dllrs[0];
			$sql2 = "select count(*) as num2 from yzz_book_booked where yzz_book_booked.bookid=$bookid and userid=$userid and status=1";
			$dllrs2 = M()->query($sql2);
			$dllrs2 = $dllrs2[0];
			$importantdu = $dllrs['num'] * 3 + $dllrs2['num2'] * 2 + 1; //对于一本书的重要度
			$tmp['data']['$lineWidth'] = $dllrs['num'] * 3 + $dllrs2['num2'] * 2 + 1;
			if ($importantdu >= 10) {
				$tmp['data']['$color'] = "#663300";
			}

			array_push($json[0]['adjacencies'], $tmp);

		}
		for ($i = 0; $i < count($rs); $i++) {
			$json[$i + 1]['id'] = "node" . ($i + 1);
			$userid = $rs[$i]['userid'];
			$dll = D('User')->getInfo($rs[$i]['userid']);
			$json[$i + 1]["name"] = urlencode($dll[0]['name']);
			$sql = "select count(*) as num from yzz_book_borrow where yzz_book_borrow.userid=$userid and copyid in(select copyid from yzz_copy where yzz_copy.bookid=$bookid) and status=1;";
			$dllrs = M()->query($sql);
			//echo $sql;
			//dump($dllrs);
			$dllrs = $dllrs[0];
			$sql2 = "select count(*) as num2 from yzz_book_booked where yzz_book_booked.bookid=$bookid and userid=$userid and status=1";
			$dllrs2 = M()->query($sql2);
			$dllrs2 = $dllrs2[0];
			$json[$i + 1]['data']['$dim'] = 15 + $dllrs['num'] * 3 + $dllrs2['num2'] * 0.5 * 4; //通过计算借阅和预约的次数计算该人物与书的紧密程度
			//$json[$i + 1]['data']['$type'] = "square";
		}
		$data = urldecode(json_encode($json));
		$result = dqyx($bookid); //三个近似的书
		for ($i = 0; $i < 3; $i++) {
			$iddd = $result[$i]['bookid2'];
			$sql = "select title from yzz_book where id=$iddd";
			//echo $sql;
			$rss = M()->query($sql);
			$rss = $rss[0];
			//dump($rss);
			$result[$i]['book2name'] = $rss['title'];
		}

		//dump($result);
		$this->assign('data', $data);
		$this->assign('name', $name);
		$this->assign('result', $result);
		$this->display();
	}

}