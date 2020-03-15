<?php

	namespace app\admin\controller;

	use think\Controller;
	use think\Session;
	use think\Db;

	class Base extends Controller
	{
		public function __construct()
		{
			parent::__construct();

			//检查是否已经登录
			if(!$this->isLogin()){
				$this->error('请登录','admin/User/login');
				exit;
			}else{
				$userinfo = $this->userinfo();
				$count =$this->usercount();
				$phpvesion= PHP_VERSION;
				$sysos = $_SERVER["SERVER_SOFTWARE"];
				$filesize = get_cfg_var ("upload_max_filesize");
			    $mysql = $this->mysqlvesion();
			   
				$this->assign('userinfo',$userinfo);
				$this->assign('count',$count);
				$this->assign('phpvesion',$phpvesion);
				$this->assign('sysos',$sysos);
				$this->assign('filesize',$filesize);
				$this->assign('mysql',$mysql[0]['VERSION()']);
			}

			
		}

		function isLogin()
		{
			return session('?admin');
		}

		//查询登录用户的用户信息
		public function userinfo()
		{
			 return Session::get('admin');

		}
		//获取当前用户的总数量

		public function usercount()
		{
			return db::name('admin')->count();

		}

		public function mysqlvesion()
		{
			return db::query('select VERSION()');
		}



	}