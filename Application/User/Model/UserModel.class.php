<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model {
	protected $tableName = 'user2';
	function getInfo($id) {
		$map['id'] = $id;
		$data = M('user2')->where($map)->field('role')->find();

		if ($data['role'] < 3) {
			return M('user2')->where($map)->select();
		} else {
			$sql = "Select * from yzz_user2 where role<=2 or id='$id'";
			return M('user2')->query($sql);
		}
	}
}