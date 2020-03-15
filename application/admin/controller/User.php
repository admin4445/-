<?php
namespace app\admin\controller;
use  think\Controller;
use think\Db;
use think\Request;

class User extends Controller
{
    public function login()
    {
		return $this->fetch('login');
    }

     public function lists()
     {
		return $this->fetch('userList');
     }
     public function showadd()
     {
		return $this->fetch('userAdd');
     }
     public function showedit()
     {
		return $this->fetch('userEdit');
     }
     //修改密码视图
     public function editpass()
     {
     	return $this->fetch('changePwd');
     }

     //修改密码
     public function editpwd()
     {
     	    $username = trim(input('post.a_user'));
			$info['a_pass']= md5(trim(input('post.a_pass')));

			$res = db::name('admin')->where('a_user',$username)->update($info);
			if($res){
				return(json(array('code'=>0,'msg'=>'修改成功')));
			}else{
				return(json(array('code'=>1,'msg'=>'修改失败')));
			}


     }

    //登录
    public function dologin()
    {
    		$username = trim(input('post.username'));
			$pwd = trim(input('post.passwd'));
			$code = trim(input('post.code'));

			if($username == ''){
				return (json(['code'=>1,'msg'=>'用户名不能为空']));
			}
			if($pwd == ''){
				return(json(['code'=>1,'msg'=>'密码不能为空']));
			}
			if($code == ''){
				return(json(['code'=>1,'msg'=>'验证码不能为空']));
			}
			if(!captcha_check($code)){
				return(json(['code'=>1,'msg'=>'验证码错误']));
			}

			//验证用户
			$admin = Db::name('admin')
					->where(['a_user'=>$username])
					->find();
			if(!$admin){
				return(json(array('code'=>1,'msg'=>'用户不存在')));
			}
			if(md5($pwd) != $admin['a_pass']){
				return(json(array('code'=>1,'msg'=>'密码错误')));
			}


			
			//设置session
			session('admin',$admin);
			return(json(array('code'=>0,'msg'=>'登录成功','data'=>$admin['a_user'])));

    }



    //用户查询

    public  function  getlist()
    {

		$list = db::name('admin')->select();
		//获取每页显示条数
		$limit = Request::instance()->param('limit') ? Request::instance()->param('limit') : 5;
		//获取当前页数
		$page = Request::instance()->param('page') ? Request::instance()->param('page') : 1;
		//计算偏移量
		$offset = ($page-1)*$limit;
		//查询的条件
		$key = Request::instance()->param('key');
		if(isset($key)){
			 $data['a_user'] =  ['like',"%{$key}%"];
			 $userinfo=Db::table('pre_admin')->where($data)->limit($offset,$limit)->select();
			 $count=Db::table('pre_admin')->where($data)->count();
		}else{
			//查询当前页显示的数据
			 $userinfo=Db::table('pre_admin')->limit($offset,$limit)->select();
			 $count = count($list);
		}

		return json(array(
			"code"=>0,
			"msg"=>"",
			"count"=> $count,
			"data"=>$userinfo
		));

    }

    //添加用户

    public function adduser()
    {

    	    $info = input('post.'); //接收所有post数据
			if(isset($info)){
				$info['a_pass']= md5($info['a_pass']);
				$info['a_salf'] = ""; 
				//用户登录时间
				$info['a_lastlogin'] = time(); 
				//用户登录的IP
				$info['a_lastip'] =''; 
				//用户状态
				$info['a_isshow'] = 1; 

				$res =db::name('admin')->insert($info);

				if($res){
					return json(array(
						'code'  => 0,
						'msg'   =>'添加用户成功!'
					));
				}else{
					return json(array(
						'code'  => 1,
						'msg'   =>'添加用户失败!'
					));
				}
			}else{
				return json(array(
					'code'  => 1,
					'msg'   =>'没有数据!'
				));
			}

    }


    //编辑用户信息

    public function edituser()
    {

    	 $info = input('post.'); //接收所有post数据
			if(isset($info)){
				$id = $info['a_id'];
				$data['a_pass']= md5($info['a_pass']);
				$data['a_user']= $info['a_user'];

				$res =db::name('admin')->where('a_id',$id)->update($data);

				if($res){
					return json(array(
						'code'  => 0,
						'msg'   =>'编辑用户成功!'
					));
				}else{
					return json(array(
						'code'  => 1,
						'msg'   =>'编辑用户失败!'
					));
				}
			}else{
				return json(array(
					'code'  => 1,
					'msg'   =>'没有数据!'
				));
			}

    }


    //删除用户

    public function deluser()
    {

    	$id = input('get.'); //接收所有post数据

		$res = Db::table('pre_admin')->delete($id['newsId']);
		if($res){
			return json(array(
				'code'  => 0,
				'msg'   =>'删除用户成功!'
			));
		}else{
			return json(array(
				'code'  => 1,
				'msg'   =>'删除用户失败!'
			));
		}
    }
    //退出登录
	public function logout()
	{
		session(null); //清除session
		$this->success('退出成功','admin/User/login');
	}
   
    
}
