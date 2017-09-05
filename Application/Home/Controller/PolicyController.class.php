<?php
/**
 * 政策
 */
namespace Home\Controller;
use Think\Controller;
use Home\Controller\CommonController;

class PolicyController extends Controller{
    public function index(){
        $menus = getMenus();
        $this->assign("menus",$menus);
        $this->display();
    }
}