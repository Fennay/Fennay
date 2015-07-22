<?php


/**
 * [p 打印函数]
 * @date   2015-07-17
 * @author Fennay [<feng@fennay.com>]
 * @param  [type]     $s [description]
 * @return [type]        [description]
 */
function p($s){
    dump($s,true,'',false);
}
/**
 * [fny_array_rand 返回数组中的随机值]
 * @date   2015-07-22
 * @author Fennay [<feng@fennay.com>]
 * @param  [type]     $arr [一维数组]
 * @param  string     $num [返回一个，或者多个值]
 * @return [type]          [description]
 */
function fny_array_rand($arr,$num='1'){
    if($num == 1){
        return $arr[array_rand($arr)];
    }else{
        // 返回多个值
        $rs = array_rand($arr,$num);
        $tmp = array();
        // 遍历结果转换成对应值
        foreach ($rs as $v) {
            $tmp[] = $arr[$v];
        }
        return $tmp;
    }
}
