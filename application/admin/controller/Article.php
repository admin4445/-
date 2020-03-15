<?php

	namespace app\admin\controller;

	use app\admin\controller\Base;

	use app\admin\model\Article as Art;
	use think\File;
	use think\Db;
	use think\Request;

	class Article extends Base
	{
		public function index()
		{
			return $this->fetch('artlist');
		}

		public function artDetail()
		{
			return $this->fetch('artDetail');

		}

		public function Article()
		{
			$list = Art::all();
			//获取每页显示条数
			$limit = Request::instance()->param('limit') ? Request::instance()->param('limit') : 5;
			//获取当前页数
			$page = Request::instance()->param('page') ? Request::instance()->param('page') : 1;
			//计算偏移量
			$offset = ($page-1)*$limit;
			//查询的条件
			$key = Request::instance()->param('key');
			if(isset($key)){
				 $data['title'] =  ['like',"%{$key}%"];
				 $data2['content'] = ['like',"%{$key}%"];
				 $article=Db::table('pre_article')->where($data)->whereor($data2)->limit($offset,$limit)->select();
				 $count=Db::table('pre_article')->where($data)->whereor($data2)->count();
			}else{
				//查询当前页显示的数据
				$article = Art::limit($offset,$limit)->select();
				$count = count($list);
			}

			return json(array(
				"code"=>0,
				"msg"=>"",
				"count"=> $count,
				"data"=>$article
			));
		}

		public function artadd()
		{
			return $this->fetch('artadd');
					
		}
		public function artedit()
		{
			return $this->fetch('artedit');
					
		}
		//新增数据
		public function insert()
		{
			$info = input('post.'); //接收所有post数据
			if(isset($info)){

				$info['pubtime'] = time(); //添加发布时间

				$artModel = new Art($info); //模型不能使用静态

				$res = $artModel->save();

				if($res){
					return json(array(
						'code'  => 0,
						'msg'   =>'添加文章成功!'
					));
				}else{
					return json(array(
						'code'  => 1,
						'msg'   =>'添加文章失败!'
					));
				}
			}else{
				return json(array(
					'code'  => 1,
					'msg'   =>'没有数据!'
				));
			}
		}


		//修改文章

		public function edit()
		{
			$info = input('post.'); //接收所有post数据
			$id =$info['aid'];
			//删除数组最后一个元素
		    array_pop($info);
		    $artModel = new Art();
			// save方法第二个参数为更新条件
			$res = $artModel->save($info,['aid' => $id]);
			if($res){
				return json(array(
					'code'  => 0,
					'msg'   =>'文章更新成功!'
				));
			}else{
				return json(array(
					'code'  => 1,
					'msg'   =>'文章更新失败!'
				));
			}
			

		}





		public function upload()
		{
			//文件上传和图像处理

			//接收文件
			$img = request()->file('file');

			$info = $img->move(ROOT_PATH . 'public' . DS . 'Uploads/');

			//原图路径
			$ori_img_path = 'Uploads/'.$info->getSaveName();

			//缩略图
			$thumb_url = $this->thumb($ori_img_path,$info->getFilename());

			if($info) //上传成功
			{
				return json(array(
					'code'  =>0,
					'msg'   =>'上传成功!',
					'url'   => $ori_img_path, //文件路径
					'thumb' => $thumb_url
				));
			}else{//失败
				return json(array(
					'code'  =>1,
					'msg'   =>$img->getError()

				));
			}
		}
		//缩略图
		public function thumb($thumb_source,$thumb_name,$thumb_path='thumb/')
		{
			//路径
			$path = str_replace('\\','/',$thumb_source);

			$image = \think\Image::open($path);

			//缩略图名称
			$thumb_name = 'Uploads/' . $thumb_path . 'thumb_' . $thumb_name;
			$thumb_name =  str_replace('\\','/',$thumb_name);

			//按照原图的比例生成一个最大为150*120的缩略图并保存为thumb.png
			$image->thumb(150, 120)->save($thumb_name);

			return $thumb_name;
		}
		public function del()
		{
			$request = Request::instance();
			$id = $request->get('newsId');

			$res = Art::destroy($id);
			if($res){
				$info['msg']="删除成功";
				$info['code'] = "1";
				return json($info);
			}else{
				$info['msg']="删除失败";
				$info['code'] = "1";
				return json($info);
			}
		}

		public function alldel()
		{
			$info = input('get.'); //接收所有post数据
			$res = Art::destroy($info['newsId']);
			if($res){
				$info['msg']="删除成功";
				$info['code'] = "1";
				return json($info);
			}else{
				$info['msg']="删除失败";
				$info['code'] = "1";
				return json($info);
			}
		}
		//文章类型
		public  function arttype()
		{

			$type =db::name('category')->where('pid','>',0)->select();
			if($type){
				$info['msg']="查询成功";
				$info['code'] = "1";
				$info['data'] = $type;
				return json($info);
			}else{
				$info['msg']="查询失败";
				$info['code'] = "1";
				return json($info);
			}

		}

		//layui 富文本 上传图片接口
		public function uploads()
		{
			$request = Request::instance();
			//接收文件
			$img = request()->file('file');

			
			$info = $img->move(ROOT_PATH . 'public' . DS . 'Uploads/');
			//原图路径
			$ori_img_path =  $request->domain().'/Uploads/'.$info->getSaveName();
			if($info){
				$infos['code'] = "0";
				$infos['msg'] = "上传成功";
				$infos['data']['src'] = $ori_img_path;
				$infos['data']['title'] = "test1";
			}else{
				$infos['code'] = "1";
				$infos['msg'] = "上传失败";
				
			}
			return json($infos);
		}
	}