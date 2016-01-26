<?php

function checked_str($str){
    $file = 'mgc.txt';
    $content = file_get_contents($file);
    $arr = explode(",", $content);
    foreach ($arr as $item) {
        if(strpos($str,trim($item)) > -1){
            return true;
        }
    }
    return false;
    //    var_dump($arr);
    //    $blacklist="/".implode("|",$arr)."/i";
    //    if(preg_match($blacklist, $str, $matches)){
    //        return true;//found
    //    } else {
    //        return false;//not found
    //    }
}

function dict_items($p_dval)
{
    return Ucache::gd($p_dval);
}

/**
 * 获取session中的值
 * @param session的名字 (可以为数组也可以为单个值)
 * @return 对应的session的值
 */
function getSession($data){
    return $_SESSION[$data];
}

/**
 * 计算字符串的长度
 * @param null $string 需计算长度的字符串
 * @return int
 */
function utf8_strlen($string = null) {
    // 将字符串分解为单元
    preg_match_all("/./us", $string, $match);
    // 返回单元个数
    return count($match[0]);
}





function getIP()
{
    if (getenv("HTTP_CLIENT_IP"))
        $ip = getenv("HTTP_CLIENT_IP");
    else if(getenv("HTTP_X_FORWARDED_FOR"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if(getenv("REMOTE_ADDR"))
        $ip = getenv("REMOTE_ADDR");
    else
        $ip = "Unknow";

    return $ip;
}

function unicode_decode($name)
{
    //转换编码，将Unicode编码转换成可以浏览的utf-8编码
    $pattern = '/([\w]+)|(\\\u([\w]{4}))/i';
    preg_match_all($pattern, $name, $matches);
    if (!empty($matches))
    {
        $name = '';
        for ($j = 0; $j < count($matches[0]); $j++)
        {
            $str = $matches[0][$j];
            if (strpos($str, '\\u') === 0)
            {
                $code = base_convert(substr($str, 2, 2), 16, 10);
                $code2 = base_convert(substr($str, 4), 16, 10);
                $c = chr($code).chr($code2);
                $c = iconv('UCS-2', 'UTF-8', $c);
                $name .= $c;
            }
            else
            {
                $name .= $str;
            }
        }
    }
    return $name;
}

function unicode_encode($name)
{
    $name = iconv('UTF-8', 'UCS-2', $name);
    $len = strlen($name);
    $str = '';
    for ($i = 0; $i < $len - 1; $i = $i + 2)
    {
        $c = $name[$i];
        $c2 = $name[$i + 1];
        if (ord($c) > 0)
        {   //两个字节的文字
            $str .= '\u'.base_convert(ord($c), 10, 16).str_pad(base_convert(ord($c2), 10, 16), 2, 0, STR_PAD_LEFT);
        }
        else
        {
            $str .= $c2;
        }
    }
    return $str;
}