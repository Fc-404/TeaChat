<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
</html>
<?php
//phpinfo();
require_once '../dataIO/DB.php';
require_once '../dataIO/DBOP.php';
$a = new DBOP(DB::create());
$result = $a->C_user('i', '111111');
if ($result)
{
    echo 'ok';
}
else
{
    echo 'no';
}

echo md5('rootrootroot16');
?>