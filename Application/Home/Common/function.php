<?php
/**
 * Created by PhpStorm.
 * User: ju
 * Date: 2017/9/4
 * Time: 18:39
 */
function paging($db,$map,$numble){
    $count      = $db->where($map)->count();// 查询满足要求的总记录数
    $Page       = new \Think\Page($count,$numble);// 实例化分页类 传入总记录数和每页显示的记录数
//分页跳转的时候保证查询条件
    foreach($map as $key=>$val) {
        $Page->parameter[$key]   =   urlencode($val);
    }
    $show       = $Page->show();// 分页显示输出
}