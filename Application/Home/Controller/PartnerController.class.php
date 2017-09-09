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
        //获取导航
        $menus = getMenus();
        $this->assign("menus",$menus);
        //获取合作企业列表
        $partnerBD = D("Partner");
        $partners = $partnerBD->getPartners();
        $this->assign("partners",$partners);
        $this->display();
    }
}