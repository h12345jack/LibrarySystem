<?php
namespace PublicUse\Controller;
use Think\Controller;

class CommonController extends Controller {

	public function _initialize() {
		if (!isset($_SESSION[C('USER_AUTH_KEY')])) {
			redirect(__APP__ . '/PublicUse/Login', 2, '还未登陆，页面跳转中...');
		}

	}

}