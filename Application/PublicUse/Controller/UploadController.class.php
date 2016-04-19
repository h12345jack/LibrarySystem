<?php
namespace PublicUse\Controller;
use Think\Controller;

class UploadController extends Controller {

	public function upload() {
		//dump($_FILES);
		if (!empty($_FILES)) {
			//图片上传设置
			$config = array(
				'maxSize' => 3145728,
				'savePath' => './Uploads/',
				'saveName' => array('uniqid', ''),
				'exts' => array('jpg', 'gif', 'png', 'jpeg'),
				'rootPath' => './Uploads/', // 设置附件上传根目录
				'autoSub' => true,
				'subName' => array('date', 'Ymd'),
			);
			$upload = new \Think\Upload($config); // 实例化上传类

			$images = $upload->upload();

			//判断是否有图
			if (!$images) {
				echo $upload->getError();
			} else {
				$info = $images['Filedata']['savepath'] . $images['Filedata']['savename'];
				//返回文件地址和名给JS作回调用
				echo $info;
			}
		}
	}

}