<?php
namespace User\Controller;
use \PublicUse\Controller\CommonController;

class UserController extends CommonController {
	public function index() {
		$this->display();
	}
	public function update_user() {
		$user = M('user2');
		$data['id'] = I('id');
		$data['gender'] = I('gender');
		$data['name'] = I('name');
		$data['email'] = I('email');
		$data['birthday'] = I('date');
		$data['depart'] = I('depart');
		if ($user->create()) {
			if ($result = $user->save($data)) {
				$this->success('修改成功!');
			} else {

				$this->error('修改失败!');
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
	public function is_exist() {
		$id = I('id');
		$sql = "select * from yzz_user2 where id='$id'";
		$rs = M('user2')->query($sql);
		//dump($rs);
		if (!$rs) {
			echo "该用户不存在";
		} else {
			echo "1";
		}
	}
}