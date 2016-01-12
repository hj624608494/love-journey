<?php

/**
 * Created by PhpStorm.
 * User: nonfish
 */
class HttpAgent{

    /**
     * @desc    进行一次http的post请求
     * @param    string $url 处理请求的url地址
     * @param    hash $postDataArray 请求的数据
     * @param    hash $headers 进行请求时需要设置的header信息
     * @return    mixed                            服务器端的返回结果
     */
    static function dopost($url, $postDataArray, $headers = NULL){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        if (!empty($headers))
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postDataArray);

        $output = curl_exec($ch);

        curl_close($ch);

        return $output;
    }

    /**
     * @desc    模拟进行一次http的get请求
     * @param    string $url 请求的url
     * @return    mixed                    服务器端的返回结果
     */
    static function doget($url){
        $ch = curl_init();


        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);

        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //curl_setopt($ch, CURLOPT_USERAGENT, self::AGENT);

        $output = curl_exec($ch);

        curl_close($ch);

        return $output;
    }

    /**
     * @desc    模拟进行一次http的get请求
     * @param    string $url 请求的url
     * @return    mixed                    服务器端的返回结果
     */
    static function doget_ur($url,$headers){
        $ch = curl_init();


        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);

        if (!empty($headers))
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //curl_setopt($ch, CURLOPT_USERAGENT, self::AGENT);

        $output = curl_exec($ch);

        curl_close($ch);

        return $output;
    }

    /**
     * @desc    模拟进行一次http的get请求
     * @param    string $url 请求的url
     * @return    mixed                    服务器端的返回结果
     */
    static function doget_data($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        ob_start();
        curl_exec($ch);
        $return_content = ob_get_contents();
        ob_end_clean();

        curl_getinfo($ch, CURLINFO_HTTP_CODE);

        return $return_content;
    }


}