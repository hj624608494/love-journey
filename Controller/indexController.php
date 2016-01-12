<?php

class indexController extends BaseController{

    public function indexAction(){
        $this->display();
    }

    /**
     * 点赞和吐槽时触发
     */
    public function likeAction(){
        $data = $this->reqjson();
        $device_id = $data->device_id;
        $likestate = $data->likestate;
        Ucache::click($likestate, $device_id);
        $this->ret_success('success');

    }

    /**
     * 获取点赞和吐槽的内容
     */
    public function loadAction(){
        date_default_timezone_set('PRC'); //设置中国时区
        $data = $this->reqjson();
        $device_id = $data->device_id;
        $has = Ucache::has($device_id);
        $count = Ucache::count();
        $ret_data['likenum'] = $count['liked'];
        $ret_data['boringnum'] = $count['not_liked'];
        $ret_data['isliked'] = $has;
        $this->ret_success('success', $ret_data);
    }

    /**
     * 给留言点赞时触发
     */
    public function listlikeAction(){

        $data = $this->reqjson();
        $mongoId = new MongoId($data->id);
        $device_id = $data->device_id;
        Ucache::listlike($device_id,$data->id);
        Umongo::MDB()->message->update(["_id"=>$mongoId],['$inc'=>["likenum"=>1]]);
        $this->ret_success('点赞成功',$device_id);

    }

    public function listAction(){
        $this->display();
    }

    public function getdataAction(){
        $data = $this->post('name');
        $this->ret_success('success', $data);
    }


    public function getdatabyappAction(){
        $this->display();
    }

    public function openappAction(){
        $this->display();
    }

    /**
     * 获取留言内容
     */
    public function getCommentDatasAction(){
        $data = $this->reqjson();
        $device_id = $data->device_id;
        $curpage = $data->curpage;
        $pagenum = $data->pagenum;
        if(!(empty($data->orderby))){
            $limit = $data->orderby;
        }else{
            $limit = 'likenum';
        }
        $all = Umongo::MDB()->message->find(["approval_st_enum"=>2])->sort([$limit=>-1])->limit($pagenum)->skip(($curpage-1)*$pagenum);
        $key = 0;
        while ($all->hasNext()) {
            $allData[$key] = $all->getNext();
            $key += 1;
        }
        $own = Ucache::getUserLike($device_id);
        foreach($allData as $key=>$value){
            foreach($own as $k=>$v){
                $mongo_id = new MongoId($v);
                if($value["_id"] == $mongo_id){
                    $allData[$key]['isliked'] = 1;
                }
            }
        }
        $ret_data = $allData;
        if (!empty($ret_data)) {
            $this->ret_success('success',$ret_data);
        } else {
            $this->ret_error("无数据");
        }
    }

    /**
     * 存储留言内容
     */
    public function sendCommentAction(){
        $data = $this->reqjson();
        date_default_timezone_set('PRC'); //设置中国时区
        if (!empty($data->user_nick)) {
            $user_nick = urldecode($data->user_nick);
        } else {
            $user_nick = "";
        }
        if(isset($data->user_role)){
            if($data->user_role == 0){
                $user_role = 2;
            }else{
                $user_role = $data->user_role;
            }
        }else{
            if(!empty($data->user_id )){
                $d = HttpAgent::doget_ur('http://uaccount.ubaby.cn/uaccount/restapi/v1/currentaccount',['X-UserId:'.$data->user_id]);
                $ur = json_decode($d,true)['identity'];
                if($ur == 0){
                    $ur = 2;
                }
                $user_role = $ur;
            }else{
                $user_role = 3;
            }

        }
        $message = array(
            "device_id"        => $data->device_id,
            "content"          => $data->comment_content,
            "likenum"          => 0,
            "approval_st_enum" => 1,
            "user_nick"        => $user_nick,
            "user_role"        => $user_role,
            "user_id"        => $data->user_id,
            "channel"        => $data->channel,
            "version"        => $data->version,
            "baby_birthday"  => $data->baby_timestamp,
            "leave_date"     => date("Y-m-d H:i:s", time()),
            "leave_state"    => 2,
            "ip"             => getIP()
        );

        if(checked_str($data->comment_content)){
            Umongo::MDB()->filterkey->insert($message);
        }else{
            Umongo::MDB()->message->insert($message);
        }
        $this->ret_success('发送成功！' );
//        Ucache::addNum($message['_id']->{'$id'});

    }


    public function statisticAction(){
        $data = $this->reqjson();
        $str1 = $data->data;
        $json = json_decode($str1);
        $json->meta->ip = getIP();
        $str = json_encode($json);
        $a = HttpAgent::dopost(C('Server_url')
            ,$str
            , array('Content-Type: application/json'));
    }
}
