<?php
/**
 * Created by PhpStorm.
 * User: zhouhua
 * Date: 2016/12/20
 * Time: 18:01
 */
namespace Home\Model;
use Think\Model;

class BannerModel extends Model{
    protected $pk = 'id';
    protected $tableName = 'wl_banner';

    public function getAllBanner()
    {
        $map['show'] = 1;
        $banners = $this->where($map)->select();
        return $banners;
    }
}