<?php
/**
 * Created by PhpStorm.
 * User: ju
 * Date: 2017/3/21
 * Time: 16:50
 */
//header("content-Type: text/html; charset=Utf-8");
//date_default_timezone_set('Asia/Shanghai');
////function getTimeWeek($time, $i = 0) {
////    $week_array = array("日","一", "二", "三", "四", "五", "六");
////    $oneDay = 24 * 60 * 60;
////    return $week = "周" . $week_array[date("w", $time + $oneDay * $i)];
////}
////echo getTimeWeek(time());
////echo strtotime(date('Y-m-d 10:00:00'));
//
//require_once 'curl.func.php';
//
//$appkey = 'ef9291ffcee010c7';//你的appkey
//$mobile = '15155498050';//手机号 超过1024请用POST
//$content = '恭喜您成功注册江西兔尔宝加盟商系统。【兔尔宝】';//utf8
//$url = "http://api.jisuapi.com/sms/send?appkey=$appkey&mobile=$mobile&content=$content";
//$result = curlOpen($url);
//$jsonarr = json_decode($result, true);
////exit(var_dump($jsonarr));
//if($jsonarr['status'] != 0)
//{
//    echo $jsonarr['msg'];
//    exit();
//}
//$result = $jsonarr['result'];
//echo $result['count'].' '.$result['accountid'].'<br>';

$arr = array(
    array('id', 'ID'),
    array('staff_name', '昵称'),
    array('staff_real', '真实姓名'),
    array('mobile', '手机号'),
    array('card_id', '身份证号'),
    array('referee', '推荐人'),
    array('game_id', '游戏ID'),
    array('money', '余额'),
    array('consume_coin', '消费币'),
    array('create_time', '注册时间'),
    array('status', '状态'),
);


//$field = 'id,staff_name,staff_real,mobile,card_id,referee,game_id,money,consume_coin,create_time,status';
$field = null;
//foreach ($arr as $key=>$value) {
//    if ($key == 0){
//        $field = $value[0];
//    }else{
//        $field = $field . "," . $value[0];
//    }
//}

for($i = 0;$i < count($arr);$i++){
    if ($i == 0){
        $field = $arr[$i][0];
    }else{
        $field = $field . "," . $arr[$i][0];
    }
}
//$field =  substr($field,1);
echo $field;