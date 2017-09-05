<?php
/**
 * 分支机构
 * Class BranchController
 * @package Home\Controller
 */
namespace Home\Controller;
use Think\Controller;

class BranchController extends Controller{

    /**我的**/
    public function index(){
        $menus = getMenus();
        $this->assign("menus",$menus);
        $this->display();
    }
}