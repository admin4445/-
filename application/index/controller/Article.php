<?php

namespace app\index\controller;
use app\index\controller\Common;
use think\Controller;
use think\Request;
use think\Db;

class Article extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($category=1,$article,$cate=0)
    {
        //存储一级分类的id
        $id = $category;
        $cate = $cate;
        //文章id
        $aid = $article;
        $finds = db::name('article')->where('aid',$aid)->find();
        if($cate==0){
             //获取一级分类下的二级分类
             $sub_id=db::name('category')->where('pid',$category)->select();
             foreach ($sub_id as $key => $value) {
                $arrid[] = $value['cid'];
             }
            //上一页
            $prevs= db::name('article')->where('cid','in',$arrid)->where('aid','<',$aid)->order('aid desc')->limit(1)->select();

            if($prevs!=null){
                $prev = $prevs[0]['aid'];
            }else{
                 $prev ="";
            }
            //下一页
          $nexts= db::name('article')->where('cid','in',$arrid)->where('aid','>',$aid)->limit(1)->select();
            if($nexts!=null){
                $next = $nexts[0]['aid'];
            }else{
                $next = "";
            }
                   
        }else{

             //上一页
            $prevs = db::name('article')->where('aid','<',$finds['aid'])->where('cid',$finds['cid'])->order('aid desc')->limit(1)->select();
            if($prevs!=null){
                $prev = $prevs[0]['aid'];
            }else{
                 $prev ="";
            }
         
            //下一页
            $nexts = db::name('article')->where('aid','>',$finds['aid'])->where('cid',$finds['cid'])->limit(1)->select();
            if($nexts!=null){
                $next = $nexts[0]['aid'];
            }else{
                 $next = "";
            }

        }
        
        
       
        

        //一级id
        $this->assign('id',$id);
        //上一页
        $this->assign('prev',$prev);
        //二级id
        $this->assign('cate',$cate);
        //下一页
        $this->assign('next',$next);
        $this->assign('find',$finds);
        return $this->fetch();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
