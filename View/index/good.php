<!DOCTYPE html>
<html>
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
    <style type="text/css">
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

        /**
         * variable
         */
        /*font color*/
        /**
         * page index 
         * author: hj;
         */
        .loveshop-container {
            max-width: 750px;
            min-width: 320px;
            margin-left: auto;
            margin-right: auto; 
        }
        /*loveshop-header*/
    
        .loveshop-header{
            width: 100%;
            height: 4.5rem;
            overflow: hidden;
            position: relative;
        }
        .loveshop-header .loveshop-header-sign{
            width: 100%;
            height: .5rem;
            position: absolute;
            top:.1rem;
            height:.5rem;

        }
        .loveshop-header .loveshop-header-icon{
            float: left;
            padding-left: .1rem;
        }
        .loveshop-header .loveshop-header-car{
            padding-right: .1rem;
            float:right;

        }
        .loveshop-header .loveshop-header-icon .header-icon-return,.loveshop-header .loveshop-header-car .header-icon-shopcar{

            height: .4rem;
            border-radius: 50%;
            color: rgb(255, 255, 255);
            font-size: .18rem;
            background: rgba(0, 0, 0, 0.4);
            float:left;
            padding: .1rem;
        }
        .loveshop-header .loveshop-header-ordina{
            width: .5rem;
            height: .2rem;
            position: absolute;
            bottom: .1rem;
            right: .1rem;
            border-radius: .4rem;
            background: rgba(0, 0, 0, 0.298039);
            color: rgb(255, 255, 255);
            line-height: .2rem;
            text-align:center;
        }

        /*loveshop-ntroduce*/
        .loveshop-ntroduce{
            width: 100%;
            height: 3.8rem;
            background: #ffffff;
        }
        .loveshop-ntroduce .loveshop-ntroduce-title{
            width: 3.2rem;
            height: .5rem;
            margin: 0 auto;
            line-height: .5rem;
            color: #444444;
            font-size: .18rem;
            text-align: center;
        }
        .loveshop-ntroduce .loveshop-ntroduce-content{
            width: 3.9rem;
            height: 2.4rem;
            margin: 0 auto;
            line-height: .24rem;
            text-align: center;
            font-size: .18rem;
            color: #999999;
            margin-top:-.05rem;
        }
        .loveshop-ntroduce .loveshop-ntroduce-price{
            width: 3.2rem;
            height: .5rem;
            margin: 0 auto;
            text-align: center;
        }

        .loveshop-ntroduce .loveshop-ntroduce-price .price-now{
            font-size: .26rem;
            font-weight: 800;
            color: #444444;
            margin-right: .05rem;
            line-height: .5rem;
        }
        .loveshop-ntroduce .loveshop-ntroduce-price .price-before{
            text-decoration: line-through;
            color: #999999;
            line-height: .1rem;
            margin-right: .05rem;
        }
        .loveshop-ntroduce .loveshop-ntroduce-price .price-sale{
            background: #F13E3A;
            color: #ffffff;
            padding: .05rem;
            font-size: .12rem;
        }
        .loveshop-ntroduce .loveshop-ntroduce-other{
            width: 2rem;
            height: .3rem;
            margin: 0 auto;
            text-align: center;
        }
        .loveshop-ntroduce .loveshop-ntroduce-other span{
            color: #A8A8A8;
            font-size: .14rem;
            padding:0 .2rem;
        }
        .loveshop-ntroduce .loveshop-ntroduce-other .other-sale{
            border-left: .01rem solid  #A8A8A8;
        } 
        /*mbanner-top*/
        .mbanner-top{
            width: 100%;
            height: .1rem;
            background: #EAEAEA;
            border:.01rem solid #E0E0E0;
        }
        /*.loveshop-download*/
        .loveshop-download {
            width: 100%;
            background:#FAFAFA;
        }
        .loveshop-download .loveshop-download-app{
            width: 100%;
            overflow: hidden;
        }
        .loveshop-download .loveshop-download-app a img{
            width: 100%;
            border-bottom: .01rem solid #E0E0E0
        }
        .loveshop-download .loveshop-download-more{
            height: .5rem;
            background:#FAFAFA;
            margin-left:.1rem;
            
        }
        .loveshop-download .loveshop-download-more span{
            line-height:.5rem;
        }
        .loveshop-download .loveshop-download-more span .download-more-fill{
            color: #E8225B;
            font-size: .2rem;

        }
        .loveshop-download .loveshop-download-more .download-more-full1{
            
            float: left;
        }
        .loveshop-download .loveshop-download-more .download-more-full2{
            float: right;
            padding-right: .2rem;

        }
        .loveshop-download .loveshop-download-more .download-more-full2 a{
            color: #676767;
        }


        
        /*loveshop-appraise*/
        .loveshop-appraise{
            background: #ffffff;
            width: 100%;

        }
        .loveshop-appraise .loveshop-appraise-total{
            width: 100%;
            height: .5rem;
            background: #ffffff;
            border-bottom: .01rem solid #E0E0E0;
        }
        .loveshop-appraise .loveshop-appraise-total .appraise-total-count{
            padding-left: .1rem;
            float: left;
        }
        .loveshop-appraise .loveshop-appraise-total .appraise-total-count a{
            line-height:.5rem;
            font-size: .16rem;
            color:#000000;
        }
        .loveshop-appraise .loveshop-appraise-total .appraise-total-more{
            float: right;
            padding-right: .2rem;
            line-height: .5rem;
        }
        .loveshop-appraise .loveshop-appraise-total .appraise-total-more a{
            color: #676767;
        }

        .loveshop-appraise .loveshop-appraise-details{
            width: 100%;
            height: auto;
            border-bottom: .01rem solid #E0E0E0;
            padding:0  .1rem;
        }
        .loveshop-appraise .loveshop-appraise-details .appraise-details{
            width: 100%;
            border-bottom: .01rem solid #E0E0E0;
            background: #ffffff;
        }
       
        /*loveshop-collect*/
        .loveshop-collect{
            width:100%;
            height: 1.3rem;
            background: #ffffff;
            border-bottom: .01rem solid #E0E0E0;
        }
        .loveshop-collect .loveshop-collect-marked{
            width: 100%;
            padding:.3rem 0;
            background: #ffffff;
            padding-bottom: .1rem;
        }

        .loveshop-collect .loveshop-collect-shop{
            float: left;
            padding:0 .2rem;
        }
        .loveshop-collect .loveshop-collect-shop a img{
            width: .6rem;
            height: .6rem;
            border: .01rem solid #E0E0E0
        }
        .loveshop-collect .loveshop-collect-evaluate{
    
            float: left;
        }
        .loveshop-collect .loveshop-collect-evaluate .collect-evaluate-name{
            font-size: .18rem;
        }
        .loveshop-collect .loveshop-collect-evaluate .collect-evaluate-num{
            padding-top: .2rem;
            font-size: .14rem;
            color: #B3B3B3;
        }
        .loveshop-collect .loveshop-collect-evaluate .collect-evaluate-num .evaluate-num{
            padding-right: .1rem;
        }
        .loveshop-collect .loveshop-collect-collect{
            padding-right: .2rem;
        }
        .loveshop-collect .loveshop-collect-collect .loveshop-collect-favorites {
            float: right;
            width: .8rem;
            height: .3rem;
            border: .01rem solid #000000;
            border-radius: 0.04rem;
        }
        .loveshop-collect .loveshop-collect-collect .loveshop-collect-favorites span{
            line-height: .3rem;
            text-align: center;
            padding-left: .13rem;
        }
        .loveshop-collect .loveshop-collect-sati{
            padding: 0 .2rem;
        }
        .loveshop-collect .loveshop-collect-sati ul li{
            display: block;
            float: left;
            width: 33%;
        }
        .loveshop-collect .loveshop-collect-sati ul li span{
            font-size: .15rem;
        }
        .loveshop-collect .loveshop-collect-sati ul li em{
            color:#F1403C;
            font-size: .14rem;
        }
        .loveshop-collect .loveshop-collect-sati ul li i{
            font-size: .13rem;
            color: #ffffff;
            background:#F1403C;
            padding: .015rem .018rem;
        }
        /*loveshop-pinkage*/
        .loveshop-pinkage{
            width: 100%;
            height: 1rem;
            background: #ffffff;
        }
        .loveshop-pinkage .loveshop-pinkage-freight{
            line-height:1rem; 
            padding: 0 .2rem;
        }
        /*.loveshop-pinkage .loveshop-pinkage-freight span{
            padding: .1rem .05rem;
            border: .01rem solid #000000;
        }*/
        .loveshop-pinkage .loveshop-pinkage-freight{
            float: left;

        }
        .loveshop-pinkage .loveshop-pinkage-freight .pinkage-freight{
            border: .01rem solid #AFAFAF;
            padding: .1rem;
        }
        .loveshop-pinkage .loveshop-pinkage-all{
            float: right;
            padding: .415rem;

        }
        .loveshop-pinkage .loveshop-pinkage-all .pinkage-all{
            border: .01rem solid #AFAFAF;
            padding: .1rem .4rem;
        }
        /*loveshop-details*/
        .loveshop-details {
            width: 100%;
            background: #ffffff;
            border-bottom: .01rem solid #E0E0E0;  

        }
        .loveshop-details .loveshop-details-title{
            width: 100%;
            position: relative;
            text-align: center;
            padding: .1rem 0rem;
        }
        .loveshop-details .loveshop-details-title a{
            display: block;
            float: left;
            width: 33%;
            height: .2rem;
            text-align: center;
        }
        .loveshop-details .loveshop-details-title a span{
            font-size: .15rem;
            color: #000000;
        }
        .loveshop-details  .loveshop-details-title .details-title2{
            border-left:.01rem solid #EAEAEA; 
            border-right:.01rem solid #EAEAEA; 

        }
        .loveshop-details .loveshop-details-line{
            position: absolute;
            top:40px;
            left: 0rem;
            background: red;
            width: 33%;
            height: .01rem;
        }
       /**/
        .loveshop-details-all{
            background: #ffffff;
            width:100%;
            height: auto;
        }
        .loveshop-details-all .details-all{
            padding:.2rem 0;
        }
        .loveshop-details-all ul li{
            display: none;
        }
        .loveshop-details-all ul li .details-all-explain{
            width: 100%;
            height: 2.3rem;
            padding: 0 .1rem;
        }

        .loveshop-details-all ul li .details-all-explain .explain-start{
            display: inline-block;
            width: 1rem;
            height: .01rem;
            background:#AFAFAF;
            float: left;
        }
        .loveshop-details-all ul li .details-all-explain .explain-text{
            display: inline-block;
            width: 4rem;
            height: 2rem;
            float: left;
            padding: 0.3rem 0px;
            color: rgb(114, 114, 114);
            font-size: 0.16rem;
        }
        .loveshop-details-all ul li .details-all-explain .explain-end{
            display: inline-block;
            width: 1rem;
            height: .01rem;
            background:#AFAFAF;
            float: right;
        }
        .loveshop-details-all ul li .details-all-dress{
            width: 100%;
           
        }
        .loveshop-details-all ul li .details-all-dress p{
            padding: .1rem .1rem;
            color:rgb(114, 114, 114); 
        }
        .loveshop-details-all ul li .details-all-dress .details-all-img img{
            width: 100%;

        }
        /**/
        .loveshop-foot-bottom{
            width: 100%;
            height: .5rem;
            background: #ffffff;
            border-top:.01rem solid  #AFAFAF;
            position: fixed;
            bottom: 0;
            z-index: 200;
            max-width: 750px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .loveshop-foot-bottom .foot-bottom{
            height: .5rem;
            padding: 0 .1rem;
        }
        .loveshop-foot-talk , .loveshop-foot-like ,.loveshop-foot-shopcar{
            display: inline-block;
            height: .5rem;
            vertical-align: middle;
            float: left;

        }
        .loveshop-foot-bottom .foot-bottom .loveshop-foot-talk,.loveshop-foot-like{
            width: .8rem;
            height: .3rem;
            line-height:.3rem;
            text-align: center;
        } 
        .loveshop-foot-bottom .foot-bottom .loveshop-foot-talk span{
            display:block;
            font-size: .25rem;
            color:rgb(114, 114, 114);  
        }
        .loveshop-foot-bottom .foot-bottom .loveshop-foot-like span{
            display:block;
            font-size: .3rem;
            color:rgb(114, 114, 114);
            border-left: .01rem solid #AFAFAF; 
        }

        .loveshop-foot-bottom .foot-bottom .loveshop-foot-talk .foot-talk{
            font-size: .13rem;
            margin-top: -.1rem;
        }
        .loveshop-foot-bottom .foot-bottom .loveshop-foot-like .foot-like{
            font-size: .13rem;
            margin-top: -.1rem;
        }
        .loveshop-foot-bottom .foot-bottom .loveshop-foot-shopcar{
            height: .6rem;
            line-height:.6rem;
            margin-bottom: .1rem;
            float: right;
        }
        .loveshop-foot-bottom .foot-bottom .loveshop-foot-shopcar span{
            border: .01rem solid red;
            padding: .1rem;
        } 
        .loveshop-foot-bottom .foot-bottom .loveshop-foot-shopcar .foot-shopcar{
            color: red;
        }
        .loveshop-foot-bottom .foot-bottom .loveshop-foot-shopcar .foot-shopping{

            margin-left: .1rem;
            background: red;
            padding: .09rem .2rem;
            color: #ffffff;
        }
    </style>
</head>
<body>
     <div class="loveshop-container">
     <!-- 商品头部 -->
        <div class="loveshop-header">
            <div class="loveshop-header-swiper">
                <div class="loveshop-header-img" >
                    <img src="../../Public/dist/images/love-changeshop.jpg"  width="100%">
                </div>
                <div class="loveshop-header-sign">
                    <div class="loveshop-header-icon">
                        <a href="javascropt:;" class="header-icon-return iconfont icon-fanhui"></a>
                    </div>
                    <div class="loveshop-header-car">
                        <a href="javascropt:;" class="header-icon-shopcar iconfont icon-gouwuche"></a>
                    </div>
                </div>
                <div class="loveshop-header-ordina">
                    <em>1</em>
                    <i>/</i>
                    9
                </div>
            </div>
        </div>
     <!-- 商品介绍 -->
        <div class="loveshop-ntroduce">
            <div class="loveshop-ntroduce-title">   『预售送围巾』 气质夹棉加厚毛呢大衣  </div>
            <div class="loveshop-ntroduce-content">
                超级推荐的一款呢大衣 简单好穿大牌感

                在颜色的选择上 其实有做很多个颜色的样衣

                然后在室外室内都试穿了

                最后选定出来的这两个洋气又好穿的颜色

                这款版型搭配深驼和正红非常有气质

                长度属于中长款 就是很大气的那种长度
                （预售前200名赠送模特同款黑色围巾噢！！！）
                简单搭配针织衫、连衣裙、打底裤、打底袜就很时髦

                面料是韩国进口的针织羊绒

                同时具备性价比和好品质

                中长款设计刚刚露出身体最瘦的小腿部分，显瘦又有女人味^^

                轻洗轻揉， 请勿机洗。
            </div>
            <div class="loveshop-ntroduce-price">
                <span class="price-now">¥235.20</span>
                <span class="price-before">¥336.00</span>
                <span class="price-sale">7折</span>
            </div>
            <div class="loveshop-ntroduce-other">
                <span>全国包邮</span>
                <span class="other-sale">销量298</span>
            </div>
        </div>
     <!--  -->
        <div class="mbanner-top"></div>
     <!-- app下载 -->
        <div class="loveshop-download">
            <div class="loveshop-download-app">
                <a href="javascript:;">
                    <img src="../../Public/dist/images/love-top.jpg">
                </a>
            </div>
            <div class="loveshop-download-more" width:"100%">
                
                <span class="download-more-full2" id="J-download-more-full2">
                    <a href="javascript:;">更多
                        <i class="download-
                        more-mark iconfont icon-fanhui"></i>
                    </a>
                </span>
                <span class="download-more-full1">
                    <i class="download-more-fill">.</i>
                    全店满279元减20元
                </span>
            </div>
            <!-- 弹出优惠券 -->
            <div>
                
            </div>
        </div>
     <!--  -->
        <div class="mbanner-top"></div>
     <!-- 累计评价 -->
        <div class="loveshop-appraise">
            <div class="loveshop-appraise-total">
                <span class="appraise-total-count">
                    <a href="javascript:;">累计评价 17</a>
                </span>
                <span class="appraise-total-more" id="J-appraise-total-more">
                    <a href="javascript:;">更多
                        <i class="download-more-mark iconfont icon-fanhui"></i>
                    </a>
                </span>
            </div>
            <div class="loveshop-appraise-details">
                <div class="appraise-details">
                11111111111111111111111111111
                11111111111111111111111111111
                11111111111111111111111111111
                11111111111111111111111111111
                </div>
                <div class="appraise-details">
                11111111111111111111111111111
                11111111111111111111111111111
                11111111111111111111111111111
                11111111111111111111111111111
                11111111111111111111111111111
                11111111111111111111111111111
                11111111111111111111111111111
                11111111111111111111111111111
                </div>
            </div>
        </div>
     <!--  -->
        <div class="mbanner-top"></div>
     <!-- 收藏 -->
        <div class="loveshop-collect">
            <div class="loveshop-collect-marked clearfix">
                <div class="loveshop-collect-shop">
                    <div class="collect-shop-logo">
                        <a href="javascript:;">
                            <img src="../../Public/dist/images/love-dianpulogo.jpg">
                        </a>
                    </div>
                </div>
                <div class="loveshop-collect-evaluate">
                    <p class="collect-evaluate-name">邂逅优品</p>
                    <p class="collect-evaluate-num">
                        <span class="evaluate-num"> 总销量78304</span>
                        <span>收藏数30658</span>
                    </p>
                </div>
                <div class="loveshop-collect-collect">
                    <div class="loveshop-collect-favorites">
                        <span>
                            + 收藏
                        </span>
                    </div>
                </div>
            </div>
            <div class="loveshop-collect-sati">
                <ul class="center">
                    <li>
                        <span>描述相符</span>
                        <em>4.7</em>
                        <i>高</i>
                    </li>
                    <li>
                        <span>描述相符</span>
                        <em>4.7</em>
                        <i>高</i>
                    </li>
                    <li>
                        <span>描述相符</span>
                        <em>4.7</em>
                        <i>高</i>
                    </li>
                </ul>
            </div>
        </div>
     <!--  -->
        <div class="loveshop-pinkage">
            <div class="loveshop-pinkage-freight">
                <span class="pinkage-freight">全部商品（197）</span>
            </div>
            <div class="loveshop-pinkage-all">
                <span class="pinkage-all">进入小店</span>
            </div>
        </div>
     <!--  -->
        <div class="mbanner-top"></div>
     <!-- 图文详情 -->
        <div class="loveshop-details">
                <div class="loveshop-details-title clearfix" id="J-details-title">
                    <a href="javascript:;" class="details-title1 " id="J-details-title1">
                        <span>图文详情</span>
                       
                    <a href="javascript:;" class="details-title2" id="J-details-title2" >
                        <span>商品参数</span>
                        
                    <a href="javascript:;" class="details-title3" id="J-details-title3">
                        <span>热卖推荐</span>
                       
                    </a>
                    <i class="loveshop-details-line" id="J-details-line" ></i>
                </div>
        </div>
    <!--  -->
        <div class="loveshop-details-all clearfix" id="J-details-all">
                <div class="details-all clearfix">
                    <ul>
                        <li style="display:block">
                            <div class="details-all-explain">
                                <p class="explain-start">
                                </p>
                                <p class="explain-text">
                                    超级推荐的一款呢大衣 简单好穿大牌感

                                    在颜色的选择上 其实有做很多个颜色的样衣

                                    然后在室外室内都试穿了

                                    最后选定出来的这两个洋气又好穿的颜色

                                    这款版型搭配深驼和正红非常有气质

                                    长度属于中长款 就是很大气的那种长度
                                    （预售前200名赠送模特同款黑色围巾噢！！！）
                                    简单搭配针织衫、连衣裙、打底裤、打底袜就很时髦

                                    面料是韩国进口的针织羊绒

                                    同时具备性价比和好品质

                                    中长款设计刚刚露出身体最瘦的小腿部分，显瘦又有女人味^^

                                    轻洗轻揉， 请勿机洗。
                                </p>
                                <p class="explain-end"></p>
                            </div>
                            <div class="details-all-dress">
                                <p>穿着效果</p>
                                <div class="details-all-img">
                                    <img src="../../Public/dist/images/love-changeshop.jpg">
                                    <img src="../../Public/dist/images/love-img1.jpg">
                                    <img src="../../Public/dist/images/love-img3.jpg">
                                    <img src="../../Public/dist/images/love-img4.jpg">
                                </div>
                            </div>
                             <div class="details-all-dress">
                                <p>整体款式</p>
                                <div class="details-all-img">
                                    <img src="../../Public/dist/images/love-img5.jpg">
                                    <img src="../../Public/dist/images/love-img6.jpg">
                                    <img src="../../Public/dist/images/love-img7.jpg">
                                    <img src="../../Public/dist/images/love-img8.jpg">
                                    <img src="../../Public/dist/images/love-img9.jpg">
                                    <img src="../../Public/dist/images/love-img10.jpg">
                                    <img src="../../Public/dist/images/love-img11.jpg">
                                    <img src="../../Public/dist/images/love-img12.jpg">
                                    <img src="../../Public/dist/images/love-img13.jpg">
                                </div>
                            </div>
                        </li>
                        <li>
                            
                        </li>
                        <li>3333</li>
                    </ul>
                </div>
        </div>
    <!--  -->
        <div class="loveshop-foot-bottom">
            <div class="foot-bottom">
                <div class="loveshop-foot-talk">
                    <span class="iconfont icon-liaotian"></span>
                    <span class="foot-talk">私聊</span>
                </div>
                <div class="loveshop-foot-like">
                    <span class="iconfont icon-xin"></span>
                    <span class="foot-like">喜欢</span>
                </div>
                <div class="loveshop-foot-shopcar">
                    <span class="foot-shopcar">加入购物车</span>
                    <span class="foot-shopping">立即购买</span>
                </div>
            </div>
        </div>
     </div>
</body>
<script type="text/javascript">
    window.onload=function() {
        var aDetailstitle = document.getElementById('J-details-title').getElementsByTagName('a');
        var aDetailsline = document.getElementById('J-details-line');
        var aDetailsall = document.getElementById('J-details-all').getElementsByTagName('li');

        for (var i = 0; i < aDetailstitle.length; i++) {
             aDetailstitle[i].index = i;
             aDetailstitle[i].onclick = function(){
                for (var i = 0; i < aDetailstitle.length; i++) {
                    if (aDetailstitle[i].className.indexOf('active')) {
                        aDetailstitle[i].className = aDetailstitle[i].className.replace('active','');
                    };
                    // aDetailstitle[i].className="";
                    aDetailsall[i].style.display="none"
                };
                aDetailsline.style.left = this.index* 33 + '%';
                // this.className = 'active';
                if (!this.className.indexOf('active')) {
                    this.className = this.className + ' active';
                };
                aDetailsall[this.index].style.display="block"

             }
        }
        
    }
</script>
</html>