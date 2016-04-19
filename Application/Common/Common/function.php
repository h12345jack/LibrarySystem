<?php
function myquery($term, $query) {
	$book = new \PublicUse\Model\BookModel();
	switch ($query) {
		case '1':	//1书号

			$sql = "select id from yzz_book where yzz_book.type='$term'";
			$rs1 = M()->query($sql);
			//dump($rs1);
			$rs2 = array();
			for ($i = 0; $i < count($rs1); $i++) {
				$rs = $book->getInfo($rs1[$i]['id']);
				array_push($rs2, $rs);
			}
			//dump($rs2);
			return $rs2;
			# code...
			break;
		case '2':	//标题
			$sql = "select id from yzz_book where title like '%$term%'";
			$rs1 = M()->query($sql);
			//dump($rs1);
			$rs2 = array();
			for ($i = 0; $i < count($rs1); $i++) {
				$rs = $book->getInfo($rs1[$i]['id']);
				array_push($rs2, $rs);
			}
			//dump($rs2);
			return $rs2;
			break;
		case '3':	//作者
			$sql = "select yzz_book.id from yzz_book,yzz_creator,yzz_author where yzz_book.id=yzz_author.book_id and yzz_creator.name like '$term%' and yzz_creator.id=yzz_author.author_id";
			$rs1 = M()->query($sql);
			//dump($rs1);
			$rs2 = array();
			for ($i = 0; $i < count($rs1); $i++) {
				$rs = $book->getInfo($rs1[$i]['id']);
				array_push($rs2, $rs);
			}
			//dump($rs2);
			return $rs2;
			break;
		case '4':	//出版年
			$sql = "select yzz_book.id from yzz_book where yzz_book.publish_year='$term';";
			$rs1 = M()->query($sql);
			//dump($rs1);
			$rs2 = array();
			for ($i = 0; $i < count($rs1); $i++) {
				$rs = $book->getInfo($rs1[$i]['id']);
				array_push($rs2, $rs);
			}
			//dump($rs2);
			return $rs2;
			break;
		case '5':	//出版社
			$sql = "select yzz_book.id from yzz_book where yzz_book.publisher like '%$term%';";
			$rs1 = M()->query($sql);
			//dump($rs1);
			$rs2 = array();
			for ($i = 0; $i < count($rs1); $i++) {
				$rs = $book->getInfo($rs1[$i]['id']);
				array_push($rs2, $rs);
			}
			//dump($rs2);
			return $rs2;
			break;
		case '6':	//摘要
			$sql = "select yzz_book.id from yzz_book where yzz_book.abstract like '%$term%';";
			$rs1 = M()->query($sql);
			//dump($rs1);
			$rs2 = array();
			for ($i = 0; $i < count($rs1); $i++) {
				$rs = $book->getInfo($rs1[$i]['id']);
				array_push($rs2, $rs);
			}
			//dump($rs2);
			return $rs2;
			break;
		case '7':
			//isbn
			$sql = "select yzz_book.id from yzz_book where yzz_book.isbn = '$term';";
			$rs1 = M()->query($sql);
			//dump($rs1);
			$rs2 = array();
			for ($i = 0; $i < count($rs1); $i++) {
				$rs = $book->getInfo($rs1[$i]['id']);
				array_push($rs2, $rs);
			}
			//dump($rs2);
			return $rs2;

			break;
		case '8':	//id 获得
			$sql = "select yzz_book.id from yzz_book where yzz_book.id = '$term';";
			$rs1 = M()->query($sql);
			//dump($rs1);
			$rs2 = array();
			for ($i = 0; $i < count($rs1); $i++) {
				$rs = $book->getInfo($rs1[$i]['id']);
				array_push($rs2, $rs);
			}
			//dump($rs2);
			return $rs2;
			break;
		default:
			# code...
			break;
	}
}
function hbresult($a) {
	for ($i = 0; $i < count($a); $i++) {
		for ($j = $i + 1; $j < count($a); $j++) {
			if ($a[$j]['isbn'] == $a[$i]['isbn']) {
				array_splice($a, $j, 1);
				$j--;
			}
		}
	}
	return $a;
}

function mydetail_book($id) {
	$sql = "select * from yzz_copy where bookid=$id";
	$rs = M('copy')->query($sql);
	return $rs;
}
function filter_mark($text) {
	if (trim($text) == '') {
		return '';
	}

	$text = preg_replace("/[[:punct:]\s]/", ' ', $text);
	$text = urlencode($text);
	$text = preg_replace("/(%7E|%60|%21|%40|%23|%24|%25|%5E|%26|%27|%2A|%28|%29|%2B|%7C|%5C|%3D|\-|_|%5B|%5D|%7D|%7B|%3B|%22|%3A|%3F|%3E|%3C|%2C|\.|%2F|%A3%BF|%A1%B7|%A1%B6|%A1%A2|%A1%A3|%A3%AC|%7D|%A1%B0|%A3%BA|%A3%BB|%A1%AE|%A1%AF|%A1%B1|%A3%FC|%A3%BD|%A1%AA|%A3%A9|%A3%A8|%A1%AD|%A3%A4|%A1%A4|%A3%A1|%E3%80%82|%EF%BC%81|%EF%BC%8C|%EF%BC%9B|%EF%BC%9F|%EF%BC%9A|%E3%80%81|%E2%80%A6%E2%80%A6|%E2%80%9D|%E2%80%9C|%E2%80%98|%E2%80%99|%EF%BD%9E|%EF%BC%8E|%EF%BC%88)+/", ' ', $text);
	$text = urldecode($text);
	return trim($text);
}
function qieci($rs) {
	$rs = htmlspecialchars_decode($rs);
	$rs = strip_tags($rs);
	$rs = filter_mark($rs);
	import('pscws4.pscws4');
	$pscws = new \PSCWS4('utf8');
	$pscws->set_dict('./Public/etc/dict.utf8.xdb');
	$pscws->set_rule('./Public/etc/rules.utf8.ini');
	$pscws->send_text($rs);
	$result = array();
	while ($some = $pscws->get_result()) {
		for ($i = 0; $i < count($some); $i++) {
			$word = $some[$i]['word'];
			$sql = "select * from stop_words where word like '$word'";
			$rs = M()->query($sql);
			if (count($rs) == 0) {
				array_push($result, $some[$i]['word']);
			}
		}

	}

	return $result;
}
function counta($a, $b) {
	$num = 0;
	for ($i = 0; $i < count($b); $i++) {
		if ($b[$i] == $a) {
			$num++;
		}
	}
	return $num;
}
function analyse($segList1, $segList2) {
	//t1
	$all = array();
	for ($i = 0; $i < count($segList1); $i++) {
		if (!array_key_exists($segList1[$i], $all)) {
			$word = $segList1[$i];
			$num = counta($segList1[$i], $segList1);
			$all[$word][0] = $num;
			$num = counta($segList1[$i], $segList2);
			$all[$word][1] = $num;

		}
	}
	for ($i = 0; $i < count($segList2); $i++) {
		if (!array_key_exists($segList2[$i], $all)) {
			$word = $segList2[$i];
			$num = counta($segList2[$i], $segList1);
			$all[$word][0] = $num;
			$num = counta($segList2[$i], $segList2);
			$all[$word][1] = $num;

		}
	}
	//dump($all);
	return $all;
}
function handle($all) {
//计算余玄
	$sum = $sumT1 = $sumT2 = 0;
	foreach ($all as $key => $value) {
		$sum += $value[0] * $value[1];
		$sumT1 += pow($value[0], 2);
		$sumT2 += pow($value[1], 2);
	}
	$rate = $sum / (sqrt($sumT1 * $sumT2));
	return $rate;

}
function dqyx($id) //获取ID雨轩
{
	$sql = "select id from yzz_book";
	$dllrs = M()->query($sql);
	$id1 = $id;
	/*for ($j = 0; $j < count($dllrs); $j++) {
	$id2 = $dllrs[$j]['id'];
	$sql = "select abstract from yzz_book where id=$id1";
	$rs = M('Book')->query($sql);
	$rs = $rs[0]['abstract'];
	$s1 = qieci($rs);
	$sql = "select abstract from yzz_book where id=$id2";
	$rs = M('Book')->query($sql);
	$rs = $rs[0]['abstract'];
	$s2 = qieci($rs);
	$tmp = analyse($s1, $s2);
	$rate = handle($tmp);
	$data['bookid1'] = $id1;
	$data['bookid2'] = $id2;
	$data['value'] = $rate;
	M('cos')->data($data)->addAll();
	}*/
	//echo $sql;
	$tmp = M('cos')->where("bookid1=%d or bookid2=%d", array($id, $id))->order('value desc')->limit('3')->select();
	return $tmp;
}

?>