<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
class Common extends Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->header();

	}
	public function header()
	{

		//一级菜单
		$nav = db::name('category')->where('pid',0)->select();
		$request = Request::instance();
		$name = $request->baseFile();
		$this->assign('nav',$nav);
		$this->assign('name',$name);
	}
}
?>