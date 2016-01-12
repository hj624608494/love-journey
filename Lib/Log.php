<?php
/**
 * 日志类
 * 使用方法：Log::fatal('error msg');
 * 保存路径为 App/Log，按天存放
 * error和warning会记录在.log.wf文件中
 */
class Log {
    /**
     * 打日志
     * @param string $msg 日志内容
     * @param string $level 日志等级
     * @param bool $wf 是否为错误日志
     */
    public static function write($msg, $level = 'DEBUG', $wf = false) {

        if ((!C('DEBUG')) && $level == 'DEBUG') {
            return;
        }

        $msg = date('[ Y-m-d H:i:s ]')."[{$level}]".$msg."\r\n";
        $logPath = C('APP_FULL_PATH').'/Log/'.date('Ymd').'.log';
        if ($wf) {
            $logPath .= '.wf';
        }
        file_put_contents($logPath, $msg, FILE_APPEND);
    }


    /**
     * 系统操作日志，如果向数据库写入失败，会记录文本日志
     * @param $resources 操作的资源
     * @param $operation 做了什么操作
     */
    public static function sys($resources,$operation){
        $log_data = [
            'operator' => 1,
            '#submit_time'=> 'NOW()',
            'resources' => $resources,
            'operation' => $operation
        ];
        $log_id = DB()->insert('sys_operation_log',$log_data);
        if($log_id < 0){
            Log::error('系统操作日志写入失败:'. json_encode($log_data));
        }
    }

    /**
     * 打印error日志
     * @param string $msg 日志信息
     */
    public static function error($msg) {
        self::write($msg, 'ERROR', true);
    }

    /**
     * 打印warning日志
     * @param string $msg 日志信息
     */
    public static function warn($msg) {
        self::write($msg, 'WARN', true);
    }

    /**
     * 打印info日志
     * @param string $msg 日志信息
     */
    public static function info($msg) {
        self::write($msg, 'INFO');
    }

    /**
     * 打印debug日志
     * @param string $msg 日志信息
     */
    public static function debug($msg) {
        self::write($msg, 'DEBUG');
    }
}
