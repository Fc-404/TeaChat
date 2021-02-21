<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>茶聊-在线列表</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        color: white;
    }

    /* 背景 */
    #backgroundImg {
        z-index: -999999;
        position: fixed;
        width: 100%;
        height: 100%;
    }

    #backgroundImg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* 头部信息 */
    #head {
        position: fixed;
        z-index: 999999;
        width: 100vw;
        height: 10vh;
        backdrop-filter: saturate(120%) blur(20px);
        box-shadow: .2rem .2rem 1rem .1rem rgba(0, 0, 0, .5);
        background-color: rgba(255, 255, 255, .2);
    }

    #head #headIcon {
        padding: 1vh;
        display: inline-block;
    }

    #head #headIcon div {
        border-radius: 50%;
        border: 2px solid white;
        width: 8vh;
        height: 8vh;
        font-size: 4vh;
        text-align: center;
        line-height: 8vh;
    }

    #head #name {
        font-size: 3vh;
        line-height: 6vh;
        vertical-align: top;
    }

    #head #onlineIcon {
        display: inline-block;
        width: 1vh;
        height: 1vh;
        border-radius: 50%;
        background-color: green;
        margin-right: 1vh;
    }

    #head #onlineText {
        display: inline-block;
        font-size: 2vh;
        line-height: 3vh;
    }

    /* 在线信息 */
    .card {
        width: 80vw;
        height: 20vh;
        margin: 0 auto 5vh;
        border-radius: 2vh;
        overflow: hidden;
        box-shadow: .2rem .2rem 1rem .1rem rgba(0, 0, 0, .5);
        background-color: rgba(255, 255, 255, .2);
    }

    .card .cardBg {
        width: 100%;
        height: 60%;
        backdrop-filter: saturate(120%) blur(20px);
    }

    .card .cardInfo {
        width: 100%;
        height: 40%;
        background-color: white;
    }

    .card .userIcon {
        position: absolute;
        width: 12vh;
        height: 12vh;
        top: 4vh;
        left: 2vh;
        border-radius: 50%;
        border: 2px solid white;
        font-size: 8vh;
        line-height: 12vh;
        text-align: center;
    }

    .card .userIcon div {
        color: rgba(0, 0, 0, .5);
    }

    .card .userName {
        color: rgba(0, 0, 0, .5);
        font-size: 2vh;
        line-height: 4vh;
        text-align: right;
        padding: 0 2vh 0 16vh;
    }
</style>

<body>
    <!--背景-->
    <div id="backgroundImg">
        <img src="../img/bg_01.gif">
    </div>

    <!--头部信息-->
    <div id="head">
        <div id="headIcon">
            <div>茶</div>
        </div>
        <div style="display: inline-block; vertical-align: top;">
            <div id="name">茶聊</div>
            <div id="onlineIcon"></div>
            <div id="onlineText">在线</div>
        </div>
    </div>
    <div style="width: 100%; height: 10vh;"></div>

    <!--在线信息-->
    <div id="online">
        <div style="width: 100%; height: 5vh;"></div>
        <!--用户信息模板-->
        <div class="card">
            <div class="cardBg">
                <div class="userIcon">
                    <div>空</div>
                </div>
            </div>
            <div class="cardInfo">
                <div class="userName">
                    还没有人上线呢
                </div>
            </div>
        </div>
    </div>
</body>

<!--检查用户Url-->
<?php
require_once('../dataIO/DB.php');
require_once('../dataIO/DBOP.php');

$user = $_GET['user'];
$id = $_GET['id'];

if (empty($user) || empty($id))
{
    echo '<script>alert("传入参数不正确\n请重新登录");window.location.href="../index.html"</script>';
}

$DBOP = new DBOP(DB::create());

$userInfo = $DBOP->R_user($user);
if ($userInfo)
{
    $userPawd = $userInfo['pawd'];
}
else
{
    echo '<script>alert("传入参数不正确\n请重新登录");window.location.href="../index.html"</script>';
}

$hours = (int)getdate()['hours'];
$expectID = md5($user . $userPawd . ($hours < 10 ? (0 . $hours) : $hours));

if ($expectID != $id)
{
    echo '<script>alert("传入参数不正确\n请重新登录");window.location.href="../index.html"</script>';
}
?>

<script>

</script>

</html>