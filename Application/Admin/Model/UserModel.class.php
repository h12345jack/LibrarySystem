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
	function credit1($id, $time) {
		$map['id'] = $id;
		$data = M('user2')->where($map)->field('credit')->find();
		$data2['credit'] = $data - ($time - 3600 * 24 * 30) / (24 * 3600 * 10); //10天扣一块
		$data2['id'] = $id;
		M('user2')->data($data2)->save();

	}
}