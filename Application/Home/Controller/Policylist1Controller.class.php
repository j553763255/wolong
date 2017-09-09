<?php
/**
 * 政策
 */
namespace Home\Controller;
use Think\Controller;
use Home\Controller\CommonController;

class Policylist1Controller extends Controller{
    public function Policylist1(){
        $menus = getMenus();
        $this->assign("menus",$menus);
        $this->display();
    }
}