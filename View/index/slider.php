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
    <!-- <link rel="stylesheet" type="text/css" href="../../Public/dist/plugins/iconfont/iconfont.css"> -->
    <!-- style -->
    <!-- <link rel="stylesheet" type="text/css" href="../../Public/dist/css/index.min.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        html,
        body {
            overflow: hidden;
        }

        .love-swiper{
            height: 150px;
            width: 100%;
            overflow: hidden;
        }
    </style>
    <!-- According to the screen automatically set the font size -->
    <script src="../../Public/dist/js/factory/accordingScreenAutoSetFontSize.js"></script>
</head>
<body>
    <div class="love-container">
        <div class="love-swiper swiper">
            <div class="item" style="background-image:url(http://s17.mogucdn.com/p1/160111/upload_ie3tgnjsg4ywmnzqgyzdambqgayde_750x250.jpg)">
                <!-- <h2 class="title fadeInUp animated">它无孔不入</h2> -->
            </div>
            <div class="item" style="background-image:url(http://s16.mogucdn.com/p1/151230/upload_ifqwimjygzrginldguzdambqgyyde_750x250.jpg)">
                <!-- <h2 class="title fadeInUp animated">你无处可藏</h2> -->
            </div>

            <div class="item" style="background-image:url(http://s18.mogucdn.com/p1/151228/upload_ie4teyjwgbqwizdcguzdambqgqyde_750x250.jpg)">
                <!-- <h2 class="title fadeInUp animated">不是它可恶</h2> -->
            </div>
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
            },5000)
        })
    </script>
</body>
</html>