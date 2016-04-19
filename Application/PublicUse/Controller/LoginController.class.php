<?php
namespace PublicUse\Controller;
use Think\Controller;

class LoginController extends Controller {
	public function index() {
		if (isset($_SESSION['role'])) {
			if ($_SESSION['role'] >= 3) {
				$this->assign('jumpUrl', '../../Admin/index');
				$this->success('登录成功!');
			} else {
				$this->assign('jumpUrl', '../../User/index');
				$this->success('登录成功!');
			}
		} else {
			$this->display();
		}

	}
	public function verify() {
		import("Think.Verify");

		$verify1 = new \Think\Verify();
		$verify1->imageW = 150;
		$verify1->imageH = 40;
		$verify1->fontSize = 20;
		$verify1->length = 4;
		$verify1->entry();

	}
	function checklogin() {
		//此处多余可自行改为Model自动验证
		if (empty($_POST['ID'])) {
			$this->error('帐号错误！');
		} elseif (empty($_POST['password'])) {
			$this->error('密码必须！');
		};
		$map = array();
		$map['id'] = $_POST['ID'];
		$map['status'] = array('gt', 0);
		//echo $_SESSION['verify_code'];
		$verify1 = new \Think\Verify();

		if (!$verify1->check($_POST['verify'])) {
			$this->error("验证码错误");
		}

		//var_dump($map);
		import('Org.Util.Rbac');
		C('USER_AUTH_MODEL', 'user');
		//验证账号密码
		$myrbac = new \Org\Util\Rbac();
		$authInfo = $myrbac::authenticate($map);
		//var_dump($authInfo);
		//var_dump($authInfo);
		if (empty($authInfo)) {
			$this->error('账号或密码错误!');
		} else {
			if ($authInfo['password'] != md5($_POST['password'])) {
				//echo md5($_POST['password']);
				$this->error('账号或密码错误!');
			} else {

				$_SESSION[C('USER_AUTH_KEY')] = $authInfo['id']; //记录认证标记，必须有。其他信息根据情况取用。
				$_SESSION['email'] = $authInfo['email'];
				$_SESSION['role'] = $authInfo['role'];
				$_SESSION['username'] = $authInfo['name'];
				$_SESSION['id'] = $authInfo['id'];
				// $_SESSION['last_login_date']=$authInfo['last_login_date'];
				//$_SESSION['last_login_ip']=$authInfo['last_login_ip'];
				//判断是否为超级管理员
				$_SESSION[C('ADMIN_AUTH_KEY')] = true;
				//以下操作为记录本次登录信息
				$myrbac::saveAccessList(); //用于检测用户权限的方法,并保存到Session中
				if ($_SESSION['role'] >= 3) {
					$this->assign('jumpUrl', '../../Admin/index');
					$this->success('登录成功!');
				} else {
					$this->assign('jumpUrl', '../../User/index');
					$this->success('登录成功!');
				}

			}
		}
	}
	//退出登录操作
	function logout() {
		if (!empty($_SESSION[C('USER_AUTH_KEY')])) {
			unset($_SESSION[C('USER_AUTH_KEY')]);
			$_SESSION = array();
			session_destroy();
			$this->assign('jumpUrl', '../Login');
			$this->success('登出成功');
		} else {
			$this->error('已经登出了');
		}
	}
}