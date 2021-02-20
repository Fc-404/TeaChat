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
        width: 100vw;
        height: 10vh;
        backdrop-filter: saturate(120%) blur(20px);
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
        font-size: 10vh;
        line-height: 12vh;
        text-align: center;
    }

    .card .userIcon div {
        color: rgba(0, 0, 0, .5);
    }

    .card .userName {
        color: rgba(0, 0, 0, .5);
        font-size: 4vh;
        line-height: 8vh;
        text-align: right;
        padding: 0 2vh 0 16vh;
    }
</style>

<body>
    <!--背景-->
    <div id="backgroundImg">
        <img src="./img/bg_01.jpg">
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

    <!--在线信息-->
    <div id="online">
        <div style="width: 100%; height: 5vh;"></div>
        <div class="card">
            <div class="cardBg">
                <div class="userIcon">
                    <div>U</div>
                </div>
            </div>
            <div class="cardInfo">
                <div class="userName">
                    User
                </div>
            </div>
        </div>
        <div class="card">
            <div class="cardBg">
                <div class="userIcon">
                    <div>U</div>
                </div>
            </div>
            <div class="cardInfo">
                <div class="userName">
                    User
                </div>
            </div>
        </div>
    </div>
</body>
<script>

</script>

</html>