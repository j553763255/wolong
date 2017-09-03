<?php
/**
 * 首页（我的）控制器
 * Created by PhpStorm.
 * User: ZHOU
 * Date: 2017/3/1
 * Time: 13:33
 */
namespace Home\Controller;
use Think\Controller;

//首页
class IndexController extends Controller{

    /**我的**/
    public function index(){
        $this->display();
    }
}
//