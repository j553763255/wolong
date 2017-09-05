<?php
/**
 * 合作伙伴.
 * User: ju
 * Date: 2017/9/4
 * Time: 22:12
 */
namespace Home\Controller;
use Think\Controller;
use Home\Controller\CommonController;

class PartnerController extends Controller
{
    public function index()
    {
        $menus = getMenus();
        $this->assign("menus",$menus);
        $this->display();
    }
}