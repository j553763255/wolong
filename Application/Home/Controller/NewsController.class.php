<?php
/**
 * 新闻
 */
namespace Home\Controller;
use Think\Controller;
use Home\Controller\CommonController;

class NewsController extends Controller{
    public function index(){
        $menus = getMenus();
        $this->assign("menus",$menus);
        $this->display();
    }
}