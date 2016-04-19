<?php
namespace Admin\Model;
use Think\Model;

class BookModel extends Model {
	protected $tableName = 'book';
	function delete_book($id) {
		$Book = M('book');
		$bookid = $id;
		$Book->startTrans();
		$sql = "select  translator_id from yzz_translator where book_id= $bookid";
		$tmp = M()->query($sql);
		$idarray = array();
		//dump($tmp);
		for ($i = 0; $i < count($tmp); $i++) {
			array_push($idarray, $tmp[$i]['translator_id']);
		}
		//dump($idarray);
		$sql = "delete from yzz_translator where book_id=$bookid";
		if (!$Book->execute($sql)) {
			$Book->rollback();
		}
		$sql = "select  author_id from yzz_author where book_id= $bookid";
		$tmp = M()->query($sql);
		for ($i = 0; $i < count($tmp); $i++) {
			echo $tmp[$i]['author_id'];
			array_push($idarray, $tmp[$i]['author_id']);
		}
		$sql = "delete from yzz_author where book_id=$bookid";
		if (!$Book->execute($sql)) {
			$Book->rollback();
		}
		dump($idarray);
		for ($i = 0; $i < count($idarray); $i++) {
			$tmp = $idarray[$i];
			$sql = "delete from yzz_creator where id = $tmp";
			$Book->execute($sql);
		}
		$sql = "delete from yzz_book where id=$bookid";
		if (!$Book->execute($sql)) {
			$Book->rollback();
			return 0;
		}
		$sql = "delete from yzz_copy where bookid=$bookid";
		if (!$Book->execute($sql)) {
			$Book->rollback();
			return 0;
		}
		$Book->commit();
		return 1;
		//dump($tmp);

	}

}
