 <?php
/**
 * 分页代码封装
 * @param $m 模型，引用传递
 * @param $where 查询条件
 * @param int $pagesize 每页查询条数
 * @return \Think\Page
 */
function getMenus()
{     
    $menuBD = D("Menu");
    $menus = $menuBD->getAllMenu();
    return $menus;
}