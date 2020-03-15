<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
// 注册路由到index模块的News控制器的read操作
Route::rule('admin/index/art','admin/article/index');
Route::rule('admin/index/Article/article','admin/Article/article');
Route::rule('admin/index/artDetail','admin/Article/artDetail');
Route::rule('admin/index/artedit','admin/Article/artedit');
Route::rule('admin/index/edit','admin/Article/edit');
Route::rule('admin/index/del','admin/Article/del');
Route::rule('admin/index/alldel','admin/Article/alldel');
Route::rule('admin/index/artAdd','admin/Article/artAdd');
Route::rule('admin/index/insert','admin/Article/insert');
Route::rule('admin/index/upload','admin/Article/upload');
Route::rule('admin/index/showadd','admin/User/showadd');
Route::rule('admin/index/lists','admin/User/lists');
Route::rule('admin/index/getlist','admin/User/getlist');
Route::rule('admin/index/showedit','admin/User/showedit');
Route::rule('admin/index/edituser','admin/User/edituser');
Route::rule('admin/index/adduser','admin/User/adduser');
Route::rule('admin/index/deluser','admin/User/deluser');
Route::rule('admin/index/editpass','admin/User/editpass');
Route::rule('admin/index/editpwd','admin/User/editpwd');



return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
