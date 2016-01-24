<?php
/**
 * 获取和设置配置参数 支持批量定义
 * 如果$key是关联型数组，则会按K-V的形式写入配置
 * 如果$key是数字索引数组，则返回对应的配置数组
 * @param string|array $key 配置变量
 * @param array|null $value 配置值
 * @return array|null
 */
function C($key, $value = null) { 
    static $_config = array();
    $args = func_num_args();
    if ($args == 1) {
        if (is_string($key)) {  //如果传入的key是字符串
            return isset($_config[$key]) ? $_config[$key] : null;
        }
        if (is_array($key)) {
            if (array_keys($key) !== range(0, count($key) - 1)) {  //如果传入的key是关联数组
                $_config = array_merge($_config, $key);
            } else {
                $ret = array();
                foreach ($key as $k) {
                    $ret[$k] = isset($_config[$k]) ? $_config[$k] : null;
                }
                return $ret;
            }
        }
    } else {
        if (is_string($key)) {
            $_config[$key] = $value;
        } else {
            halt('传入参数不正确');
        }
    }
    return null;
}

/**
 * 调用Widget
 * @param string $name widget名
 * @param array $data 传递给widget的变量列表，key为变量名，value为变量值
 * @return void
 */
function W($name, $data = array()){
    $fullName = $name.'Widget';
    if(!class_exists($fullName)){
        halt('Widget '.$name.'不存在');
    }
    $widget = new $fullName();
    $widget->invoke($data);
}

function DB(){
    $db = new Medoo(C('Mysql'));
    return $db;
}

/**
 * 终止程序运行
 * @param string $str 终止原因
 * @param bool $display 是否显示调用栈，默认不显示
 * @return void
 */
function halt($str, $display = false) {
    Log::error($str.' debug_backtrace:'.var_export(debug_backtrace(), true));
    header("Content-Type:text/html; charset=utf-8");
    if ($display) {
        echo "<pre>";
        debug_print_backtrace();
        echo "</pre>";
    }
    echo $str;
    exit;
}


class Controller {

    /**
     * 视图实例
     * @var View
     */
    private $_view;

    /**
     * 构造函数，初始化视图实例，调用hook
     */
    public function __construct(){
        $this->_view = new View();
        $this->_init();
    }

    /**
     * 前置hook
     */
    protected function _init(){}
    /**
     * 渲染模板并输出
     * @param null|string $tpl 模板文件路径
     * 参数为相对于App/View/文件的相对路径，不包含后缀名，例如index/index
     * 如果参数为空，则默认使用$controller/$action.php
     * 如果参数不包含"/"，则默认使用$controller/$tpl
     * @return void
     */
    protected function display($tpl=''){
        if($tpl === ''){
            $trace = debug_backtrace();
            $controller = substr($trace[1]['class'], 0, -10);
            $action = substr($trace[1]['function'], 0 , -6);
            $tpl = $controller . '/' . $action;
        }elseif(strpos($tpl, '/') === false){
            $trace = debug_backtrace();
            $controller = substr($trace[1]['class'], 0, -10);
            $tpl = $controller . '/' . $tpl;
        }
        $this->_view->display($tpl);
    }
    /**
     * 为视图引擎设置一个模板变量
     * @param string $name 要在模板中使用的变量名
     * @param mixed $value 模板中该变量名对应的值
     * @return void
     */
    protected function assign($name,$value){
        $this->_view->assign($name,$value);
    }
    /**
     * 将数据用json格式输出至浏览器，并停止执行代码
     * @param array $data 要输出的数据
     */
    protected function ajaxReturn($data){
        echo json_encode($data);
        exit;
    }
    /**
     * 重定向至指定url
     * @param string $url 要跳转的url
     * @param void
     */
    protected function redirect($url){
        header("Location: $url");
        exit;
    }


    /**
     * 将数据用json格式输出至浏览器，并停止执行代码
     * @param array $data 要输出的数据
     */
    protected function jsonResult($data) {
        header("Content-Type:application/json; charset=utf-8");
        echo json_encode($data);
        exit;
    }
}


/**
 * ExtException类，记录额外的异常信息
 */
class ExtException extends Exception {
    /**
     * @var array
     */
    protected $extra;

    /**
     * @param string $message
     * @param array $extra
     * @param int $code
     * @param null $previous
     */
    public function __construct($message = "", $extra = array(), $code = 0, $previous = null) {
        $this->extra = $extra;
        parent::__construct($message, $code, $previous);
    }

    /**
     * 获取额外的异常信息
     * @return array
     */
    public function getExtra() {
        return $this->extra;
    }
}

/**
 * 视图类
 */
class View {
    /**
     * 视图文件目录
     * @var string
     */
    private $_tplDir;
    /**
     * 视图文件路径
     * @var string
     */
    private $_viewPath;
    /**
     * 视图变量列表
     * @var array
     */
    private $_data = array();
    /**
     * 给tplInclude用的变量列表
     * @var array
     */
    private static $tmpData;

    /**
     * @param string $tplDir
     */
    public function __construct($tplDir=''){
        if($tplDir == ''){
            $this->_tplDir = './'.C('APP_PATH').'/View/';
        }else{
            $this->_tplDir = $tplDir;
        }

    }
    /**
     * 为视图引擎设置一个模板变量
     * @param string $key 要在模板中使用的变量名
     * @param mixed $value 模板中该变量名对应的值
     * @return void
     */
    public function assign($key, $value) {
        $this->_data[$key] = $value;
    }
    /**
     * 渲染模板并输出
     * @param null|string $tplFile 模板文件路径，相对于App/View/文件的相对路径，不包含后缀名，例如index/index
     * @return void
     */
    public function display($tplFile) {
        $this->_viewPath = $this->_tplDir . $tplFile . '.php';
        unset($tplFile);
        extract($this->_data);
        include $this->_viewPath;
    }
    /**
     * 用于在模板文件中包含其他模板
     * @param string $path 相对于View目录的路径
     * @param array $data 传递给子模板的变量列表，key为变量名，value为变量值
     * @return void
     */
    public static function tplInclude($path, $data=array()){
        self::$tmpData = array(
            'path' => C('APP_FULL_PATH') . '/View/' . $path . '.php',
            'data' => $data,
        );
        unset($path);
        unset($data);
        extract(self::$tmpData['data']);
        include self::$tmpData['path'];
    }
}

/**
 * 如果文件存在就include进来
 * @param string $path 文件路径
 * @return void
 */
function includeIfExist($path) {
    if (file_exists($path)) {
        include $path;
    }
}


/**
 * Created by PhpStorm.
 * User: yuanqiang
 * Date: 2015/9/2
 * Time: 16:14
 * Widget类
 * 使用时需继承此类，重写invoke方法，并在invoke方法中调用display
 */
class Widget {
    /**
     * 视图实例
     * @var View
     */
    protected $_view;
    /**
     * Widget名
     * @var string
     */
    protected $_widgetName;

    /**
     * 构造函数，初始化视图实例
     */
    public function __construct(){
        $this->_widgetName = get_class($this);
        $dir = C('APP_FULL_PATH') . '/Widget/Tpl/';
        $this->_view = new View($dir);
    }

    /**
     * 处理逻辑
     * @param mixed $data 参数
     */
    public function invoke($data){}

    /**
     * 渲染模板
     * @param string $tpl 模板路径，如果为空则用类名作为模板名
     */
    protected function display($tpl=''){
        if($tpl == ''){
            $tpl = $this->_widgetName;
        }
        $this->_view->display($tpl);
    }

    /**
     * 为视图引擎设置一个模板变量
     * @param string $name 要在模板中使用的变量名
     * @param mixed $value 模板中该变量名对应的值
     * @return void
     */
    protected function assign($name,$value){
        $this->_view->assign($name,$value);
    }
}

/**
 * 总控类
 */
class Ubaby {
    /**
     * 控制器
     * @var string
     */
    private $c;
    /**
     * Action
     * @var string
     */
    private $a;
    /**
     * 单例
     * @var SinglePHP
     */
    private static $_instance;

    /**
     * 构造函数，初始化配置
     * @param array $conf
     */
    private function __construct($conf) {
        C($conf);
    }

    private function __clone() {
    }

    /**
     * 获取单例
     * @param array $conf
     * @return ubaby
     */
    public static function getInstance($conf) {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self($conf);
        }
        return self::$_instance;
    }

    /**
     * 运行应用实例
     * @access public
     * @return void
     */
    public function run() {
        if (C('USE_SESSION') == true) {
            session_start();
        }
        C('APP_FULL_PATH', getcwd().'/'.C('APP_PATH').'/');
        $pathMod = C('PATH_MOD');
        $pathMod = empty($pathMod) ? 'NORMAL' : $pathMod;
        spl_autoload_register(array(
            'Ubaby',
            'autoload'));
        includeIfExist( C('APP_FULL_PATH').'/common.php');
        if (strcmp(strtoupper($pathMod), 'NORMAL') === 0 || !isset($_SERVER['PATH_INFO'])) {
            $this->c = isset($_GET['c']) ? $_GET['c'] : 'index';
            $this->a = isset($_GET['a']) ? $_GET['a'] : 'index';
        } else {
            $pathInfo = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
            $pathInfoArr = explode('/', trim($pathInfo, '/'));
            if (isset($pathInfoArr[0]) && $pathInfoArr[0] !== '') {
                $this->c = $pathInfoArr[0];
            } else {
                $this->c = 'index';
            }
            if (isset($pathInfoArr[1])) {
                $this->a = $pathInfoArr[1];
            } else {
                $this->a = 'index';
            }
        }
        if (!class_exists($this->c.'Controller')) {
            halt('Controller:'.$this->c.'不存在');
        }
        $controllerClass = $this->c.'Controller';
        $controller = new $controllerClass();
        if (!method_exists($controller, $this->a.'Action')) {
            halt('Action:'.$this->a.'不存在');
        }
        call_user_func(array(
            $controller,
            $this->a.'Action'));
    }

    /**
     * 自动加载函数
     * @param string $class 类名
     */
    public static function autoload($class) {
        if (substr($class, -10) == 'Controller') {
            includeIfExist(C('APP_FULL_PATH').'/Controller/'.$class.'.php');
        }elseif(substr($class,-6)=='Widget'){
            includeIfExist(C('APP_FULL_PATH').'/Widget/'.$class.'.class.php');
        }else {
            includeIfExist(C('APP_FULL_PATH').'/Lib/'.$class.'.php');
            includeIfExist(C('APP_FULL_PATH').'/Service/'.$class.'.php');
        }
    }
}



