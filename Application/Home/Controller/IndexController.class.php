<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function index() {
		$this->display();
	}
	public function search() {
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
		$page = new \Think\Page1($num, 10);
		//dump($data);
		$page->setConfig('header', '页');
		$show = $page->show();
		if ($term != "") {
			$result = '"' . $term . '"' . '的检索结果';
		} else {
			$result = "全部数据如下";
		}
		//dump($data);
		$this->assign('result', $result);
		$this->assign('data', $data);
		$this->assign('page', $show);
		$this->display();
	}
}