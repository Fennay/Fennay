<?php
$mysql_config = require './Application/Common/Conf/mysql_config.php';
$data =  array(
    //'配置项'=>'配置值'
    //网站默认title
    'web_title' => '这里的世界很精彩',
);
//返回组合后的配置文件
return array_merge($mysql_config,$data);