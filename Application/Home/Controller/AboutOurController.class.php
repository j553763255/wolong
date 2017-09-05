<?php
/**
 * 关于我们
 */
namespace Home\Controller;
use Think\Controller;
use Home\Controller\CommonController;

class AboutOurController extends Controller{
    public function index(){
        $menus = getMenus();
        $this->assign("menus",$menus);
        $this->display();
    }
}