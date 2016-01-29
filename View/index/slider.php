<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>love-good</title>
    <meta name="description" content="love-journey">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" type="text/css" href="../../Public/dist/plugins/iconfont/iconfont.css">

    <!-- style -->
    <!-- <link rel="stylesheet" type="text/css" href="../../Public/dist/css/index.min.css"> -->
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box; }

        a {
        text-decoration: none; }

        li {
        list-style: none; }

        img {
        vertical-align: middle;
        border: 0; }

        html {
        font-size: 100px; }

        body {
        font-size: 16px;
        font-family: "Helvetica Microsoft YaHei";
        background: #F6F6F6; }

        /*Remove the ios bring their own style*/
        input[type="text"],
        input[type="submit"],
        input[type="botton"] {
        -webkit-appearance: none;
        outline: none; }

        /*Remove android&ios a/button/input the border&background around the label is clicked to produce*/
        a,
        button,
        input,
        div {
          -webkit-tap-highlight-color: rgba(255, 0, 0, 0); }

        .clearfix:after {
          display: block;
          content: '';
          height: 0;
          width: 0;
          overflow: hidden;
          clear: both; }

        .clearfix {
          zoom: 1; }
        html,
        body {
            overflow: hidden;
        }
        /**/

        .love-container {
            max-width: 750px;
            min-width: 320px;
            margin-left: auto;
            margin-right: auto; 
        }
        
    </style>
    <!-- According to the screen automatically set the font size -->
    <script src="../../Public/dist/js/factory/accordingScreenAutoSetFontSize.js"></script>
</head>
<body>
    <div class="love-container">
        <!-- 头部 -->
        <style>
            .love-header {
                position: fixed;
                top: 0;
                /*left: 0;*/
                z-index: 1000;
                display: -webkit-flex;
                display: -webkit-box;
                width: 100%;
                max-width: 750px;
                line-height: 1.3;
                padding: .05rem .08rem;
                background: #fff;
                border-bottom: 1px solid #e8e8e8;
                z-index: 200;

                }
            .love-header .love-menu-icon {
                display: inline-block;
                font-size: .14rem;
                color: #727272; 
                }
            .love-header .love-shopcar {
                display: inline-block;
                font-size: .14rem;
                color: #727272;
                }
            .love-header .love-header-search {
                /*display: -webkit-flex;*/
               /* display: -webkit-box;*/
                height: .2rem;
                margin: 0 .05rem;
                padding: 0 .02rem;
                color: #5e5e5e;
                width:1.9rem;
                overflow: hidden;
                text-align: center;
                line-height: .2rem;
                font-size: .13rem;
                font-weight: 800;
                 }
        </style>
        <div class="love-header clearfix">
            <span class="love-menu-icon iconfont icon-caidan" id="J_leftMenu"></span>

            <div class="love-header-search clearfix">
                红人BAZAAR
            </div>
            <span class="love-shopcar iconfont icon-gouwuche"></span>
        </div>

        <!--  -->
        <style>
            .lover-header-swiper{
                height: 1.2rem;
                width: 100%;
                overflow: hidden;
                margin-top: .3rem;
                position: relative;
            }
            .love-swiper{
                height: 1.2rem;
                width: 100%;
            }
            .love-swiper .item{
                width: 100%;
                height: 1.2rem;
            }
            .lover-header-swiper .love-icon{
                width: 100%;
                height: .25rem;
                position: absolute;
                top:.95rem;
                left:0;
            }
            .lover-header-swiper .love-icon img{
                width: 100%;
                height: .25rem;

            } 
        </style>
        <div class="lover-header-swiper">
            <div class="love-swiper swiper" style="height: 1.2rem;">
                <div class="item" >
                    <img src="../../Public/dist/images/love-silider3.jpg" width="100%">
                    <!-- <h2 class="title fadeInUp animated">它无孔不入</h2> -->
                </div>
                <div class="item" >
                    <img src="../../Public/dist/images/love-slider2.jpg" width="100%">
                    <!-- <h2 class="title fadeInUp animated">你无处可藏</h2> -->
                </div>

                <div class="item" >
                    <img src="../../Public/dist/images/love-slider1.jpg" width="100%">
                    <!-- <h2 class="title fadeInUp animated">不是它可恶</h2> -->
                </div>
            </div>
            <div class="love-icon clearfix">
                <img src="../../Public/dist/images/love-slider5.png">
            </div>
        </div>

        <!-- 周星榜 -->
        <style>
            .lover-weekstar{
                width: 100%;
                height: auto;
                margin-top: .1rem;
                position: relative;
            } 
            .lover-weekstar .lover-weekstar-weekby{
                width: 100%;

            }
            .lover-weekstar .lover-weekstar-weekby img{
                width: 100%;
                height: 1.8rem;
            }
            .lover-weekstar .lover-weekstar-swiper{
                width: .8rem;
                height: 1.2rem;
                position: absolute;
                top:.5rem;
                left:0;
            }
            .lover-weekstar .lover-weekstar-swiper .swiper-title-content {
                color: rgb(255, 255, 255);
                text-align:center;
                padding:  0 .02rem;
            }
            .lover-weekstar .lover-weekstar-swiper .swiper-title-content .mainTitle{
                font-size: .14rem;
            }
            .lover-weekstar .lover-weekstar-swiper .swiper-title-content .subTitle {
                font-size: .08rem;
                padding-top:.06rem;
                padding-bottom: .15rem;
                font-family: 'Courier NEW', Arial, sans-serif;
            }
            
            .lover-weekstar .lover-weekstar-swiper .swiper-title-content .line{
                width: .2rem;
                height: .01rem;
                background:rgb(255, 255, 255); 
                text-align: center;
                margin: 0 auto;

            }
            .lover-weekstar .lover-weekstar-swiper .swiper-title-content .describe{
                font-size: .09rem;
                margin-top: .1rem;

            }
            /**/
            .weekstar-swiper{
                width: 100%;
                height: auto;
                position: absolute;
                top:-.45rem;
                left: .8rem;
            }

            .weekstar-swiper .weekstar-swiper-img{
                width: 1.2rem;
                position: relative;
                margin-right: .1rem;
                display: block;
                float: left;
            }
            .weekstar-swiper .weekstar-swiper-img a img{
                width: 100%;
                height: 1.7rem;
            }
            .weekstar-swiper .weekstar-swiper-img .weekstar-swiper-star{
                width: 1.2rem;
                height: .7rem;
                position: absolute;
                top:1rem;
                left: 0;
                background: rgba(255, 255, 255, 0.701961);
                bottom: 0px;
            }
            .weekstar-swiper .weekstar-swiper-img .weekstar-swiper-star .star-title{
                text-align: center;
                font-size: .12rem;
                margin-top: .1rem;
                color: #7D7D7D;
            }
            .weekstar-swiper .weekstar-swiper-img .weekstar-swiper-star .star-icon{
                color: #7D7D7D;
                text-align: center;
                font-size: .08rem;
                height: .21rem;
                padding: .05rem .1rem;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
            }
            .weekstar-swiper .weekstar-swiper-img .weekstar-swiper-star .star-care{
                width: .45rem;
                height: .15rem;
                text-align: center;
                border: 1px solid #7D7D7D;
                float: left;
                margin-left: .1rem;
                margin-top: .05rem;
                line-height: .15rem;
                border-radius: 0.03rem;
                color: #7D7D7D;
            }
             .weekstar-swiper .weekstar-swiper-img .weekstar-swiper-star .star-know{
                width: .45rem;
                height: .15rem;
                text-align: center;
                border: 1px solid #7D7D7D;
                float: right;
                margin-right: .1rem;
                margin-top: .05rem;
                line-height: .15rem;
                border-radius: 0.03rem;
                color: #7D7D7D;
             }
        </style>
        <div class="lover-weekstar clearfix">
            <div class="lover-weekstar-weekby">
                <img src="../../Public/dist/images/love-weekstar1.webp">
            </div>
            <!--  -->
            <div class="lover-weekstar-swiper ">
                <div class="weekstar-swiper-title">
                    <div class="swiper-title">
                        <div class="swiper-title-content">
                            <p class="mainTitle">一周星榜</p>
                            <p class="subTitle">[Jan 29 2016]</p>
                            <div class="line"></div>
                            <p class="describe">本周推出清新女神榜，能化解寒冷的莫过于温暖的笑颜</p>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="weekstar-swiper clearfix">
                    <div class="weekstar-swiper-img">
                        <a href="javascript:;"><img src="../../Public/dist/images/love-weekstar2.jpg"></a>
                        <div class="weekstar-swiper-star">
                            <p class="star-title">白_线_流</p>
                            <p class="star-icon">满满灵气的娇俏少女感，看到她就想起校园时最单纯少女时代</p>
                            <div class="star-care">+关注</div>
                            <div class="star-know">了解他</div>
                        </div>
                    </div>

                    <div class="weekstar-swiper-img">
                        <a href="javascript:;"><img src="../../Public/dist/images/love-weekstar2.jpg"></a>
                        <div class="weekstar-swiper-star">
                            <p class="star-title">白_线_流</p>
                            <p class="star-icon">满满灵气的娇俏少女感，看到她就想起校园时最单纯少女时代</p>
                            <div class="star-care">+关注</div>
                            <div class="star-know">了解他</div>
                        </div>
                    </div>
                </div>

            </div> 
        </div>

        <!--  今日红人上新 -->
        <style>
            .love-newer{
                height: 1rem;
            }
        </style>
        <div class="love-newer">
            <p>今日红人上新</p>
        </div>


        
        
    </div>
    
    <!-- zepto -->
    <script src="../../Public/dist/plugins/zepto/zepto.min.js"></script>
    <!-- util -->
    <script src="../../Public/dist/js/factory/util.js"></script>
    
    <!-- swiper-tiny -->
    <link rel="stylesheet" href="../../Public/dist/plugins/swiper-tiny/swiper.css">
    <script src="../../Public/dist/plugins/swiper-tiny/swiper.js"></script>
    
    <script>
        $(function(){

            var index = 0;
            var swiper = new Swiper();

            setInterval(function(){
                if (index == 2) {
                    swiper.go(0);
                    index = 0;
                }else{
                    swiper.next();
                    index++;
                }
            },3000)
        })
    </script>
</body>
</html>