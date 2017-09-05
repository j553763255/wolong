<?php
/**
 * Created by PhpStorm.
 * User: zhouhua
 * Date: 2016/12/20
 * Time: 18:01
 */
namespace Home\Model;
use Think\Model;

class MenuModel extends Model{
    protected $pk = 'id';
    protected $tableName = 'wl_menu';

    public function getAllMenu()
    {
        $map['show'] = 1;
        $menus = $this->where($map)->select();
        return $menus;
    }
}