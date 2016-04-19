<?php
namespace PublicUse\Model;
use Think\Model;

class BookModel extends Model {
	protected $tableName = 'book';
	function getInfo($id) {
		$map['id'] = $id;
		$sql = "select * from yzz_book where id='$id'";
		$rs = M()->query($sql);
		$rs = $rs[0];
		$sql = "select * from yzz_creator where id in (select author_id from yzz_author where yzz_author.book_id='$id')";
		$rs1 = M()->query($sql);
		$rs['author'] = $rs1;
		$sql = "select * from yzz_creator where id in (select translator_id from yzz_translator where yzz_translator.book_id='$id')";
		$rs1 = M()->query($sql);
		$rs['tranlator'] = $rs1;
		return $rs;
	}
}
?>
