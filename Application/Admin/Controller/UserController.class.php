<?php
namespace Admin\Controller;
use \PublicUse\Controller\CommonController;

class UserController extends CommonController {
	public function index() {
		$this->display();
	}
	public function add() {
		$this->display();
	}
	public function update_user() {
		$user = M('user2');
		$data['id'] = I('id');
		$data['gender'] = I('gender');
		$data['name'] = I('name');
		$data['email'] = I('email');
		$data['birthday'] = I('date');
		$data['role'] = I('role');
		$data['depart'] = I('depart');
		$data['book_num'] = I('book_num');
		$data['credit'] = I('credit');
		if ($user->create()) {
			if ($result = $user->save($data)) {
				$this->assign('jumpUrl', './index');
				$this->success('修改成功!');
			} else {
				$this->assign('jumpUrl', './index');
				$this->error('修改失败!');
			}

		}
	}
	public function add_user() {
		$user = M('user');
		$data['id'] = I('id');
		$data['gender'] = I('gender');
		$data['name'] = I('name');
		$data['email'] = I('email');
		$data['birthday'] = I('date');
		$data['password'] = MD5(I('password'));
		$data['role'] = I('role');
		$data['depart'] = I('depart');
		if ($data['role'] == 1) {
			$data['book_num'] = 30; //学生借书为30
		} else if ($data['role'] == 2) {
			$data['book_num'] = 40; //老师借书为40
		}
		if ($user->create()) {
			if ($result = $user->add($data)) {
				$this->assign('jumpUrl', './index');
				$this->success('添加成功!');
			} else {
				$this->assign('jumpUrl', './index');
				$this->error('添加失败!');
			}

		}

	}
	public function manage() {
		$User = new \Admin\Model\UserModel();
		$data = $User->getInfo($_SESSION['id']);
		$this->assign('data', $data);
		$this->display();

	}
	public function detail_view() {
		$id = I('id');
		$user = M('user2');
		$array = array('id' => $id);
		$data = $user->where($array)->select();
		$data = $data[0];
		$User = new \Admin\Model\UserModel();
		$u1 = $User->getInfo($_SESSION['id']);
		if ($u1['role'] >= 3) {
			$data['is_able_change'] = 1;
		} else {
			$data['is_able_change'] = 0;
		};
		//dump($data);
		$this->assign('data', $data);
		//dump($data);
		$this->display();
	}
	public function delete_user() {
//未完成
		$id = I('id');
		dump($id);

	}

	public function add_id_check() {
		return true;

	}
	public function is_exist() {
		$id = I('id');
		$sql = "select * from yzz_user2 where id='$id' and role<3";
		$rs = M('user2')->query($sql);
		//dump($rs);
		if (!$rs) {
			echo "该用户不存在或不能借书";
		} else {
			echo "1";
		}
	}
}