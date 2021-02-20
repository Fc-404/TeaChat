<?php
require_once('../function/MdIni.php');
/**
 * 单例数据库连接类
 */
class DB
{
    var $host = null;
    var $port = null;
    var $db = null;
    var $user = null;
    var $pawd = null;
    var $connect = null;

    static $object = null;

    //make this private, prevent use new word create object
    private function __construct()
    {
        //readed ini file
        $DBinfo = new MdIni('dataIO/DBinfo.ini');
        /* 测试信息
        echo $DBinfo->getKeyValue('host', 'DB') . "<br>";
        echo $DBinfo->getKeyValue('port', 'DB') . "<br>";
        echo $DBinfo->getKeyValue('db', 'DB') . "<br>";
        echo $DBinfo->getKeyValue('user', 'DB') . "<br>";
        echo $DBinfo->getKeyValue('pawd', 'DB') . "<br>";
        */
        $this->host = $DBinfo->getKeyValue('host', 'DB');
        $this->port = $DBinfo->getKeyValue('port', 'DB');
        $this->db = $DBinfo->getKeyValue('db', 'DB');
        $this->user = $DBinfo->getKeyValue('user', 'DB');
        $this->pawd = $DBinfo->getKeyValue('pawd', 'DB');

        //connect DB
        $this->connect = new mysqli($this->host, $this->user, $this->pawd, $this->db, $this->port);

        //检查数据库连接是否成功
        if ($this->connect)
        {
            //print_r($this->connect);
        }
        else
        {
            die("DB connect fail:" . mysqli_connect_error());
        }
    }
    //make this private, prevent use new word create object
    private function __clone()
    {}

    //单例模式
    static function create(){
        if (!(self::$object instanceof self))
        {
            self::$object = new self();
        }
        return self::$object;
    }

    //返回连接
    public function getConnect()
    {
        return $this->connect;
    }
}
?>