<?php
namespace PublicUse\Controller;
use Think\Controller;

class QueryController extends Controller {
	public function query() {
		$query = I('query'); //检索词
		$term = I('term'); //检索项
		$rs = myquery($term, $query);
		$rs = hbresult($rs);
		dump($rs);
	}
}
?>