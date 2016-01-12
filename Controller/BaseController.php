<?php

class BaseController extends Controller {

    protected $ISPOST = null;
    protected $ISGET = null;
    protected $aaa = null;

    /**
     * @var array respones的json响应内容
     */
    private $jr = array(
        'ret' => false,
        'msg' => 'init');


    /**
     *初始化
     */
    protected function _init() {
        if(!$this->authentication()){
            header('HTTP/1.1 401 Unauthorized');
            header('status: 401 Unauthorized');
            $this->ret_error('Unauthorized');
        }
        $this->ISPOST = ($_SERVER['REQUEST_METHOD'] === 'POST');
        $this->ISGET = ($_SERVER['REQUEST_METHOD'] === 'GET');
        header("Content-Type:text/html; charset=utf-8");
    }


    /**
     * 系统鉴权
     * @return bool
     */
    protected function authentication(){
        return true;//TODO authentication
    }

    /**
     * @param string $msg 成功响应的附加消息
     * @param array $result 成功响应的结果数据
     */
    protected function ret_success($msg = 'success', $result = null) {
        $this->jr['ret'] = true;
        $this->jr['msg'] = $msg;
        if (!empty($result)) {
            $this->jr['result'] = $result;
        }
        $this->jsonResult($this->jr);
    }




    /**
     * @param string $msg 错误响应的附加消息
     */
    protected function ret_error($msg = 'error') {
        $this->jr['ret'] = false;
        $this->jr['msg'] = $msg;
        $this->jsonResult($this->jr);
    }

    /**
     * @param $name  要获取的GET参数名称
     * @param bool $required 该参数是否是必须的
     * @param string $defaultVal 如果该参数不是必须的，且没有传递的情况下期望的默认值
     * @return null|string 返回参数值，或者直接中断http请求向客户端返回错误信息
     */
    protected function get($name, $required = true, $defaultVal = 'val') {
        $result = null;
        if (!empty($_GET[$name])) {
            $result = $_GET[$name];
        } else {
            if ($required) {
                $str = '缺少必要的GET参数'.$name.' | '.var_dump($_GET);
                log::warn($str);
                $this->ret_error($str);
            } else {
                $result = $defaultVal;
            }
        }
        return $result;
    }

    /**
     * @param $name  要获取的POST参数名称
     * @param bool $required 该参数是否是必须的
     * @param string $defaultVal 如果该参数不是必须的，且没有传递的情况下期望的默认值
     * @return null|string 返回参数值，或者直接中断http请求向客户端返回错误信息
     */
    protected function post($name, $required = true, $defaultVal = 'val') {
        $result = null;
        if (!empty($_POST)) {
            $result = $_POST[$name];
        } else {
            if ($required) {
                $str = '缺少必要的POST参数'.$name.' | '.var_dump($_POST);
                log::warn($str);
                $this->ret_error($str);
            } else {
                $result = $defaultVal;
            }
        }
        return $result;
    }


    /**
     * 从请求中获取提交的JSON串
     * @return Array 或者直接中断http请求向客户端返回错误信息
     */
    protected function reqjson() {
        $data = file_get_contents("php://input");
        $json = json_decode($data);
        if (empty($json)) {
            $str = '提交的数据不是合法的JSON格式 | '.var_dump($json);
            Log::warn($str);
            $this->ret_error($str);
        }
        return $json;
    }

    /**
     * 从请求中获取提交的JSON中获取指定的属性
     * @param $attrName  要获取的属性名称
     * @param bool $required 该属性是否是必须的
     * @param string $defaultVal 如果该参数不是必须的，且没有传递的情况下期望的默认值
     * @return null|string 返回参数值，或者直接终端http请求向客户端返回错误信息
     */
    protected function getJsonAttr($attrName, $required = true, $defaultVal = 'val') {
        $json = self::reqjson();
        $result = null;
        if (property_exists($json, $attrName)) {
            $result = $json->$attrName;
        } else {
            if ($required) {
                $str = '缺少必要的属性'.$attrName.' | '.var_dump($json);
                Log::warn($str);
                $this->ret_error($str);
            } else {
                $result = $defaultVal;
            }
        }
        return $result;
    }
}
