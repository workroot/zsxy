<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;
class Shangping extends Controller
{   
    
    //操作说明
     public function index()
    {
      
        return $this->fetch();
    }
   
}