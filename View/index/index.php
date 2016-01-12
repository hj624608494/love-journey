<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>love-journey</title>
    <meta name="description" content="love-journey">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    
    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="../../Public/dist/plugins/iconfont/iconfont.css">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="../../Public/dist/css/index.min.css">
    <!-- According to the screen automatically set the font size -->
    <script src="../../Public/dist/js/factory/accordingScreenAutoSetFontSize.js"></script>

    <style type="text/css">
        .love-container{
            max-width: 750px;
            min-width: 320px;
            margin-left: auto;
            margin-right: auto;
        }

        /* header */
        .love-header{
            position: fixed;
            display: -webkit-flex;
            display: -webkit-box;
            line-height: 1.3;
            padding: .05rem .08rem;
            background: #fff;
            border-bottom: 1px solid #e8e8e8;
        }
        .love-menu-icon{
            display: inline-block;
            font-size: .14rem;
            color: #727272;
        }
        .love-shopcar{
            display: inline-block;
            font-size: .14rem;
            color: #727272;
        }
        .love-header-search{
            display: -webkit-flex;
            display: -webkit-box;
            height: .2rem;
            margin: 0 .05rem;
            padding: 0 .02rem;
            background: #ECECEC;
            color: #5e5e5e;
            overflow: hidden;
        }
        .love-header-search input{
            display: inline-block;
            height: .2rem;
            width: 1.55rem;
            vertical-align: top;
            background: #ECECEC;
            border: 0;
        }
        .love-header-search span{
            font-size: .14rem;
            color: #ccc;
        }


        /* PUBLIC mask */
        .love-mask{
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,.6);
        }
        
    </style>
</head>
<body>
    <div class="love-container">
        
        <!-- header -->
        <div class="love-header clearfix">
            <span class="love-menu-icon iconfont icon-caidan" id="J_leftMenu"></span>

            <div class="love-header-search clearfix">
                <span class="iconfont icon-sousuo"></span>
                <input type="text" />
                <span class="iconfont icon-huiche"></span>
            </div>

            <span class="love-shopcar iconfont icon-gouwuche"></span>
        </div>

        <style type="text/css">
            .love-left-menu{
                display: none;
                position: absolute;
                top: 0;
                left: -2rem;
                height: 100%;
                width: 2rem;
                background-color: #fff;
                z-index: 2000;
                -webkit-transform: translate3d(-4em,0,0);
                transform: translate3d(-4em,0,0);
                -webkit-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
                overflow: hidden;
            }
        </style>
        <!-- 左侧菜单 -->
        <div class="love-left-menu" id="J_leftMenuBox">
            <ul>
                <li><a href="#">111</a></li>
                <li><a href="#">111</a></li>
                <li><a href="#">111</a></li>
                <li><a href="#">111</a></li>
                <li><a href="#">111</a></li>
                <li><a href="#">111</a></li>
                <li><a href="#">111</a></li>
            </ul>
        </div>

        <!-- mask -->
        <div class="love-mask" id="J_mask"></div>

        <!-- 顶部登录 -->
        <div class="love-top-login"></div>

        <!-- 特色市场 -->
        <div class="love-feature-market"></div>

        <!-- 限时抢购 -->

        <!-- 图片分类 -->

        <!-- 商品列表 -->

        <!-- 底部下载 -->
    </div>

    <script>
        window.onload = function(){
            function leftMenun(){
                var oLeftMenu = document.getElementById('J_leftMenu');
                var oLeftMenuBox = document.getElementById('J_leftMenuBox');
                var oMask = document.getElementById('J_mask');
                oLeftMenu.onclick = function(){
                    oMask.style.display = 'block';
                    oLeftMenuBox.style.display = 'block';
                    oLeftMenuBox.style.left = 0;
                }
            }
            leftMenun();
        }
    </script>
    <!-- // <script src="http://172.17.11.61:8080/target/target-script-min.js#anonymous"></script> -->
</body>
</html>