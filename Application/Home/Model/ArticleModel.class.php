<?php
/**
 * Created by PhpStorm.
 * User: zhouhua
 * Date: 2016/12/20
 * Time: 18:01
 */
namespace Home\Model;
use Think\Model;

class ArticleModel extends Model{
    protected $pk = 'id';
    protected $tableName = 'wl_article';

    public function getArticle($type,$number)
    {
        if ($type != null){
            $map['type'] = $type;
        }
        $banners = $this->where($map)->order("id desc")->limit($number)->select();
        return $banners;
    }
}