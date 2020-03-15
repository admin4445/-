<?php
namespace app\index\controller;
use app\index\controller\Common;
use think\Controller;
use app\index\model\Article as Article; 
use think\Db;
class Index extends Common
{
    public function index($category=1,$cate=0)
    {
    	//存储一级分类的id
    	$id = $category;
    	//查询对应的二级导航
    	$meu = db::name('category')->where('pid',$id)->select();
    	if($meu != null){
    		//查询对应的文章
	    	if($cate==0){
	    		foreach($meu as $item){
	    			$ids[] = $item['cid'];
	    		}
	    		$article = db::name('article')->where(['cid'=>['in',$ids]])->paginate(6);
	    		
	    		$page = $article->render();
	    	}else{
	    		$article = db::name('article')->where('cid',$cate)->paginate(2);
	    		
	    		$page = $article->render();
	    	}
    	

    	}else{
    		$article = "";
    		$page = "";
    	}
    	$this->assign('meu',$meu);
    	$this->assign('id',$id);
    	$this->assign('cate',$cate);
    	$this->assign('page',$page);
    	$this->assign('article',$article);

        return $this->fetch();
    }
}
