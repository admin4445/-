<?php

namespace app\index\controller;
use app\index\controller\Common;
use think\Request;
use think\Db;
use think\Session;
class Search extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $request = Request::instance();
        $keywork = $request->post('keywork');
        Session::set('keywork',$keywork);
        $this->redirect('Search/show');

        
    }

    public function show()
    {

        $keywork = Session::get('keywork');
        //根据搜索的内容查询到对应的内容

        $data1['title'] =  ['like',"%{$keywork}%"];
        $data2['content'] = ['like',"%{$keywork}%"];
        $count = db::name('article')->where($data1)->whereor($data2)->count();
        $info = db::name('article')->where($data1)->whereor($data2)->paginate(3);

        // 获取分页显示
        $page = $info->render();

        $id ='';
        // 模板变量赋值
        $this->assign('list', $info);
        $this->assign('count', $count);
        $this->assign('page', $page);
        $this->assign('id',$id);
        return $this->fetch('search/index');
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
