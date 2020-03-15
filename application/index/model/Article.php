<?php
namespace app\index\model;
use think\Model;
class Article extends Model
{
	public function getall($arr)
	{

		$list = Article::all($arr)->toarray();
		dump($list);
		exit;
		


	}
}
?>