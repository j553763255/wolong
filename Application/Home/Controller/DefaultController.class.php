<?php
/**
 * 分支机构
 * Class BranchController
 * @package Home\Controller
 */
namespace Home\Controller;
use Think\Controller;

class DefaultController extends Controller{

    /**我的**/
    public function header(){
        $menuBD = D("Menu");
        $menus = $menuBD->getAllMenu();
        $this->assign("menus",$menus);
        $this->display();
    }
}