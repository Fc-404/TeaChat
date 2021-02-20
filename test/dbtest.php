<?php
require_once('../function/MdIni.php');
$host = null;
$port = null;
$db = null;
$user = null;
$pawd = null;
$connect = null;
//readed ini file
$DBinfo = new MdIni('dataIO/DBinfo.ini');
/* 测试信息 */
echo $DBinfo->getKeyValue('host', 'DB') . "<br>";
echo $DBinfo->getKeyValue('port', 'DB') . "<br>";
echo $DBinfo->getKeyValue('db', 'DB') . "<br>";
echo $DBinfo->getKeyValue('user', 'DB') . "<br>";
echo $DBinfo->getKeyValue('pawd', 'DB') . "<br>";
/**/
$host = $DBinfo->getKeyValue('host', 'DB');
$port = $DBinfo->getKeyValue('port', 'DB');
$db = $DBinfo->getKeyValue('db', 'DB');
$user = $DBinfo->getKeyValue('user', 'DB');
$pawd = $DBinfo->getKeyValue('pawd', 'DB');

//connect DB
$connect = new mysqli($host, $user, $pawd, $db, $port);

//检查数据库连接是否成功
if ($connect)
{
    print_r($connect);
}
else
{
    die("DB connect fail:" . mysqli_connect_error());
}
?>