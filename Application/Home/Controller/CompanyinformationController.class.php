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


class CompanyinformationController extends Controller{

    /**我的**/
    public function index(){
        $this->display();
    }
}