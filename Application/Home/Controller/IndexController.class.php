<?php
/**
 * 首页
 */
namespace Home\Controller;
use Think\Controller;
use Home\Controller\CommonController;

class IndexController extends Controller{
    public function index(){
        $bannerBD = D("Banner");
        $articleBD = D("Article");
        $banners = $bannerBD->getAllBanner();
        $article1 = $articleBD->getArticle(1,6);
        $article2 = $articleBD->getArticle(2,6);
        $article3 = $articleBD->getArticle(3,6);
        $this->assign("article1",$article1);
        $this->assign("article2",$article2);
        $this->assign("article3",$article3);
        $this->assign("banners",$banners);
        $menus = getMenus();
        $this->assign("menus",$menus);
        $this->display();
    }
}