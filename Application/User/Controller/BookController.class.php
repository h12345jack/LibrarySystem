<?php
namespace User\Controller;
use \PublicUse\Controller\CommonController;

class BookController extends CommonController {
	public function now() {
		//当前借阅状态
		$id = $_SESSION['id'];
		$sql = "select * from yzz_book_borrow where userid='$id' and status=0";
		$data['borrow'] = M()->query($sql);
		$sql = "select * from yzz_book_booked where userid='$id' and status=0";
		$data['booked'] = M()->query($sql);
		//dump($data);
		for ($i = 0; $i < count($data['booked']); $i++) {
			$rs1 = myquery($data['booked'][$i]['bookid'], 8);
			$data['booked'][$i]['bookname'] = $rs1[0]['title'];
			$bookid = $data['booked'][$i]['bookid'];
			$sql2 = "select * from yzz_copy where yzz_copy.bookid=$bookid and is_borrowed=0";
			$rs2 = M()->query($sql2);
			if (count($rs2) > 0) {
				$data['booked'][$i]['can_borrowed'] = 1;
			} else {
				$data['booked'][$i]['can_borrowed'] = 0;

			}
			//如果是0就是代表仍然不能被借，否则可以背借走
			$data['booked'][$i]['num'] = $i + 1;
		}
		for ($i = 0; $i < count($data['borrow']); $i++) {
			$copyid = $data['borrow'][$i]['copyid'];
			$sql = "select * from yzz_book,yzz_copy where yzz_copy.copyid=$copyid and yzz_book.id=yzz_copy.bookid";
			$rs1 = M()->query($sql);
			$data['borrow'][$i]['bookname'] = $rs1[0]['title'];
			$data['borrow'][$i]['is_booked'] = $rs1[0]['is_booked']; //如果是1就是
			$data['borrow'][$i]['num'] = $i + 1;
			$data['borrow'][$i]['needtime'] = $data['borrow'][$i]['borrowtime'] + 3600 * 24 * 30;
		}
		//dump($data);
		$this->assign('data', $data);
		$this->display();
	}
	public function index() {
		$this->display();
	}
	public function query() {
		$this->display();
	}

	public function find_book() {
		//检索书籍，合并
		$query = I('query'); //检索项
		$term = I('term'); //检索词
		$p = I('p');
		if (!I('p')) {
			$p = 1;
		}
		$rs = myquery($term, $query);
		$data = array();
		for ($i = ($p - 1) * 10; $i < $p * 10 && $i < count($rs); $i++) {
			$rs[$i]['num'] = ($p - 1) * 10 + $i;
			array_push($data, $rs[$i]);
		}
		$num = count($rs);
		$page = new \Think\Page($num, 10);
		//dump($data);
		$page->setConfig('header', '页');
		$show = $page->show();
		$result = '"' . $term . '"的检索结果';
		$this->assign('result', $result);
		$this->assign('data', $data);
		$this->assign('page', $show);
		$this->display();
	}
	public function detail_book() {
		$id = I('id');
		$rs = myquery($id, 8);
		$data = $rs[0];
		$sql = "select * from yzz_copy where yzz_copy.bookid=$id and yzz_copy.is_borrowed=0;";
		$rs1 = M()->query($sql);
		if (count($rs1) != 0) {
//可以借
			$data['nowleft'] = count($rs1);
			$this->assign('t1', $data);
			$this->display();
		} else {
//不可解，预约把
			$data['is_borrowed'] = 1;
			$data['nowleft'] = count($rs1);
			$this->assign('t1', $data);
			$this->display();

		}

	}
	public function detail_booked123() {
//预约的控制器
		$id = I('id'); //书的id
		$userid = $_SESSION['id'];

		$data['userid'] = $userid;
		$data['bookid'] = $id;
		$data['bookedtime'] = time();
		//首先检查是否已被自己预约;
		$sql = "select * from yzz_book_booked where bookid='$id' and userid='$userid' and status=0 ";
		$rs = M()->query($sql);
		if (count($rs) == 0) {
			$sql2 = "select * from yzz_book_borrow where userid='$userid' and copyid in(select copyid from yzz_copy where bookid=$id) and status=0";
			$rss = M()->query($sql2);
			if (count($rss) == 0) {
				if (M('book_booked')->data($data)->add()) {
					$data2['id'] = $id;
					$data2['is_booked'] = 1;
					M('book')->data($data2)->save();

					$this->success("预定成功，请注意相关通知");
				} else {

					$this->error("预定失败");
				}
			} else {
				$this->error("不可以预定自己借的书哦");
			}
		} else {

			$this->error("您已经预约过了，请不要重复预约");
		}
	}
	public function borrowagain() {
		$copyid = I('copyid');
		$userid = $_SESSION['id'];
		$sql = "select * from yzz_book_borrow where copyid='$copyid' and userid='$userid' and status=0";
		$rs = M()->query($sql);
		$rs = $rs[0];
		$dllxjcs = $rs['xjcs'];
		$dlltime = $rs['borrowtime']; //借书的时间
		if (time() - $rs['borrowtime'] > 3600 * 24 * 30) {
			$this->error("对不起，您已经逾期了，不可以续借，请尽快归还");
		} else if ($rs['xjcs'] >= 3) {
			$this->error("对不起，您的续借次数超过上限了，不可再续借");
		} else {
			$data['id'] = $rs['id'];
			$data['status'] = 1;
			$data['returntime'] = time();
			if (M('book_borrow')->data($data)->save()) {
				$data2['userid'] = $userid;
				$data2['copyid'] = $copyid;
				$data2['status'] = 0;
				$data2['borrowtime'] = $dlltime + 30 * 24 * 3600;
				$data2['xjcs'] = $dllxjcs + 1;
				if (M('book_borrow')->data($data2)->add()) {
					$this->success('续借成功，请享受您的阅读把');
				} else {
					$this->error("续借失败，请联系管理员");
				}
			}
		}

	}

}