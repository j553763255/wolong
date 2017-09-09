<?php
/**
 * Created by PhpStorm.
 * User: zhouhua
 * Date: 2016/12/20
 * Time: 18:01
 */
namespace Home\Model;
use Think\Model;

class PartnerModel extends Model{
    protected $pk = 'id';
    protected $tableName = 'wl_partner';

    public function getPartners()
    {
        $map['show'] = 1;
        $partner = $this->where($map)->select();
        return $partner;
    }
}