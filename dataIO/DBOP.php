<?php
/**
 * 数据库操作层
 */
class DBOP
{
    var $conn = null;

    //构造函数，传入数据库对象
    function __construct($DB)
    {
        if ($DB instanceof DB)
        {
            $this->conn = $DB->getConnect();
        }
        else
        {
            die("Parameter not expect;");
        }
    }

    //Create of user
    public function C_user($user, $pawd)
    {
        $sql = "INSERT INTO TEA_user(user, pawd) VALUES('$user', '$pawd');";
        
        if ($this->conn->query($sql))
        {
            return true;
        }
        return false;
    }
    //Delete of user
    public function D_user($user)
    {
        $sql = "DELETE FROM TEA_user WHERE user = '$user';";

        if ($this->conn->query($sql))
        {
            return true;
        }
        return false;
    }
    //Read of user
    public function R_user($user)
    {
        $sql = "SELECT * FROM TEA_user WHERE user = '$user';";

        $result = $this->conn->query($sql);
        if ($result)
        {
            return mysqli_fetch_assoc($result);
        }
        return false;
    }
    //
}
?>