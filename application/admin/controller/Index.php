<?php
namespace app\admin\controller;
use app\admin\controller\Base;

class Index extends Base
{
    public function index()
    {
		
		return $this->fetch();
    }
    public function show()
    {
		return $this->fetch();
    }
    
}
