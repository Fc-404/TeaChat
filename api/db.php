<?php
require_once('../dataIO/DB.php');
require_once('../dataIO/DBOP.php');

if (empty($_GET['type'])) {
    return false;
}

//接口类型
$type = $_GET['type'];

//创建数据库操作对象
$dbop = new DBOP(DB::create());

switch ($type) {
    case "isuser": {
            $user = $_GET['user'];
            $result = $dbop->R_user($user);
            if ($result) {
                echo "true";
            } else {
                echo "false";
            }
            break;
        }
    case "login": {
            $user = $_GET['user'];
            $pawd = $_GET['pawd'];
            $result = $dbop->C_user($user, $pawd);
            if ($result) {
                echo "true";
            } else {
                echo "false";
            }
            break;
        }
    case "logup": {
            $user = $_GET['user'];
            $pawd = $_GET['pawd'];
            $result = $dbop->R_user($user);
            if (!empty($result)) {
                if ($result['pawd'] == $pawd) {
                    echo "true";
                } else {
                    echo "false";
                }
            }
        }
    default: {
            return false;
            break;
        }
}
