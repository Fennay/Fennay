<?php

/**
 * [web_title 网站title转换]
 * @date   2015-07-07
 * @author Fennay [<feng@fennay.com>]
 * @param  [string]     $title [页面title]
 * @return [string]            [组合后的title，或者默认title]
 */
function web_title($title){
    //默认title
    $default_title = C('web_title');
    if(empty($title)){
        $str = $default_title;
    }else{
        $str = $title.' | '.$default_title;
    }
    return $str;
}