<?php

/**
 * Created by PhpStorm.
 * User: yuanqiang
 * Date: 2015/11/3
 * Time: 15:31
 */
class Ucache{

    private static function cache(){
        if (class_exists('Redis')) {
            $redis = new Redis();
            $redis->connect(C('Redis')['host'], C('Redis')['port']);
            $redis->select(10);

            return $redis;
        }
        return FALSE;
    }

    public static function gd($dval){
        $redis = self::cache();
        if ($redis) {
            $data = $redis->get('sys_dict:' . $dval);
            if ($data != FALSE) {
                return json_decode($data,true);
            }
        }
        $sql = 'SELECT `dkey`, `dval` FROM `sys_dict` WHERE `pid` = (SELECT `id` FROM  `sys_dict` WHERE `dval` = ' . DB()->quote($dval) . ')';
        $arr = DB()->query($sql)->fetchAll();
        if ($redis) {
            $redis->set('sys_dict:' . $dval, json_encode($arr));
        }

        return $arr;
    }

    public static function getCategory($cid){
        $redis = self::cache();
        if ($redis) {
            $data = $redis->get('sys_category:' . $cid);
            if ($data != FALSE) {
                return json_decode($data,true);
            }
        }

        $arr = DB()->get('sys_category', ['id', 'name'], ['id' => $cid]);
        if ($redis) {
            $redis->set('sys_category:' . $cid, json_encode($arr));
        }

        return $arr;
    }


    public static function getdkeyBydval($dpval, $dval){
        $data = self::gd($dpval);
//        return array_search($dval,$data);
        foreach ($data as $item) {
            if ($item['dval'] == $dval) {
                return $item['dkey'];
            }
        }

        return 'undefined';
    }


    /**
     * 查看该用户是否点赞或吐槽
     * @param $device_id
     * @return int
     */
    public static function has($device_id){
        $redis = self::cache();
        if($redis) {
            $hasy = $redis->sIsMember("like", $device_id);
            $hasn = $redis->sIsMember("boring", $device_id);
        }
        if($hasy){
            return 1;
        }elseif($hasn){
            return 2;
        }else{
            return 0;
        }
    }

	/**
     * 查询点赞和吐槽的总数 
     * @return array
     */
    public static function count(){
        $redis = self::cache();
        if($redis) {
            $county = $redis->sCard("like");
            $countn = $redis->sCard("boring");
        }
        $count['liked'] = $county;
        $count['not_liked'] = $countn;
        return $count;
    }

	/**
     * 将点赞或吐槽添加到redis
     * @param $device_id
     * @return bool
     */
	public static function click($likestate,$device_id){
		$redis = self::cache();
		if($redis){
			if($likestate == 1){
				$add = $redis->sAdd("like",$device_id);
			}elseif($likestate == 2){
				$add = $redis->sAdd("boring",$device_id);
			}
		}
	}

    /**
     * 用户给留言点赞
     * @param $device_id
     * @param $mongo_id
     */
    public static function listlike($device_id,$mongo_id){
        $redis = self::cache();
        if($redis){
            $redis->sAdd("device_like:".$device_id,$mongo_id);
        }
    }

    /**
     * 获取用户点赞
     */
    public static function getUserLike($device_id){
        $redis = self::cache();
        if($redis){
            $all = $redis->sMembers("device_like:".$device_id);
            return $all;
        }
    }
}