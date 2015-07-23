<?
echo 111;
$rs = mysql_connect('133.130.53.35','root','redhat');
var_dump($rs);
$db = mysql_select_db('blog',$rs);
$q = 'select * from fny_article limit 5';
$row = mysql_query($q, $rs);
$ss = mysql_fetch_row($row);
var_dump($ss);
?>