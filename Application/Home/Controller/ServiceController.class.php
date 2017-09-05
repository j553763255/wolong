<?php
/**
 * 服务
 */
namespace Home\Controller;
use Think\Controller;
use Home\Controller\CommonController;

class ServiceController extends Controller{
    public function index(){
        $menus = getMenus();
        $this->assign("menus",$menus);
        $this->display();
    }
}