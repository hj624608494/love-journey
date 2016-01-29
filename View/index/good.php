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
        .love-container {
            max-width: 750px;
            min-width: 320px;
            margin-left: auto;
            margin-right: auto; 
        }
        

        
        /*mbanner-top*/
        .mbanner-top{
            width: 100%;
            height: .1rem;
            background: #EAEAEA;
            border:.01rem solid #E0E0E0;
        }
        

        
        
        
       
        
        
    </style>

    <!-- According to the screen automatically set the font size -->
    <script src="../../Public/dist/js/factory/accordingScreenAutoSetFontSize.js"></script>

</head>
<body>
     <div class="love-container">
        
        <style>
            /*love-header*/
            .love-header{
                width: 100%;
                height: 3rem;
                overflow: hidden;
                position: relative;
            }
            .love-header-swiper{
                width: 100%;
                height: 100%;
            }
            .love-header .love-header-sign{
                width: 100%;
                height: .5rem;
                position: absolute;
                top:.06rem;
            }
            .love-header .love-header-icon{
                float: left;
                margin-left: .06rem;
            }
            .love-header .love-header-car{
                margin-right: .06rem;
                float:right;
            }
            .love-header .love-header-icon .header-icon-return,
            .love-header .love-header-car .header-icon-shopcar{
                height: .3rem;
                width: .3rem;
                line-height: .3rem;
                text-align: center;
                border-radius: 50%;
                color: rgb(255, 255, 255);
                font-size: .16rem;
                background: rgba(0, 0, 0, 0.4);
                float: left;
            }
            .love-header .love-header-icon .header-icon-return{
                text-indent: -.04rem;
            }
            .love-header .love-header-ordina{
                width: .36rem;
                height: .16rem;
                position: absolute;
                bottom: .06rem;
                right: .06rem;
                border-radius: .3rem;
                background: rgba(0, 0, 0, 0.298039);
                color: rgb(255, 255, 255);
                line-height: .16rem;
                text-align:center;
                font-size: .1rem;
            }
        </style>
        <!-- 商品头部 -->
        <div class="love-header">
            <div class="love-header-swiper">
                <div class="love-header-img swiper J_header_swiper" >
                    <div class="item">
                        <img src="../../Public/dist/images/love-changeshop.jpg"  width="100%">
                    </div>
                    <div class="item">
                        <img src="../../Public/dist/images/love-changeshop.jpg"  width="100%">
                    </div>

                    <div class="item">
                        <img src="../../Public/dist/images/love-changeshop.jpg"  width="100%">
                    </div>
                </div>
                <div class="love-header-sign">
                    <div class="love-header-icon">
                        <a href="javascropt:;" class="header-icon-return iconfont icon-fanhui"></a>
                    </div>
                    <div class="love-header-car">
                        <a href="javascropt:;" class="header-icon-shopcar iconfont icon-gouwuche"></a>
                    </div>
                </div>
                <div class="love-header-ordina">
                    <span class="J_curOrdina">1</span>
                    <span>/</span>
                    <span class="J_ordinaLen"></span>
                </div>
            </div>
        </div>

        <style>
            /*love-ntroduce*/
            .love-ntroduce{
                width: 100%;
                height: auto;
                overflow: hidden;
                background: #ffffff;
            }
            .love-ntroduce .love-ntroduce-title{
                width: 100%;
                height: .4rem;
                line-height: .4rem;
                color: #444444;
                font-size: .14rem;
                text-align: center;
                /**/
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
            .love-ntroduce .love-ntroduce-content{
                width: 100%;
                height: 1.4rem;
                padding: 0 .06rem;
                line-height: .24rem;
                text-align: center;
                font-size: .12rem;
                color: #999999;
                /**/
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 6;
                -webkit-box-orient: vertical;
            }
            .love-ntroduce .love-ntroduce-price{
                width: 100%;
                height: .4rem;
                line-height: .4rem;
                text-align: center;
            }

            .love-ntroduce .love-ntroduce-price .price-now{
                font-size: .2rem;
                font-weight: 800;
                color: #444444;
                margin-right: .05rem;
                vertical-align: bottom;
            }
            .love-ntroduce .love-ntroduce-price .price-before{
                position: relative;
                top: .022rem;
                text-decoration: line-through;
                color: #999999;
                margin-right: .05rem;
                vertical-align: bottom;
            }
            .love-ntroduce .love-ntroduce-price .price-sale{
                background: #F13E3A;
                color: #ffffff;
                padding: .02rem .04rem;
                font-size: .1rem;
                vertical-align: bottom;
            }
            .love-ntroduce .love-ntroduce-other{
                width: 2rem;
                height: .24rem;
                margin: 0 auto;
                text-align: center;
            }
            .love-ntroduce .love-ntroduce-other span{
                color: #A8A8A8;
                font-size: .1rem;
                padding:0 .2rem;
            }
            .love-ntroduce .love-ntroduce-other .other-sale{
                border-left: .01rem solid  #A8A8A8;
            } 
        </style>
        <!-- 商品介绍 -->
        <div class="love-ntroduce">
            <div class="love-ntroduce-title">预售送围巾 气质夹棉加厚毛呢大衣</div>
            <div class="love-ntroduce-content">
                超级推荐的一款呢大衣 简单好穿大牌感 在颜色的选择上 其实有做很多个颜色的样衣 然后在室外室内都试穿了 最后选定出来的这两个洋气又好穿的颜色

                这款版型搭配深驼和正红非常有气质 长度属于中长款 就是很大气的那种长度（预售前200名赠送模特同款黑色围巾噢！！！）简单搭配针织衫、连衣裙、打底裤、打底袜就很时髦

                面料是韩国进口的针织羊绒 同时具备性价比和好品质 中长款设计刚刚露出身体最瘦的小腿部分，显瘦又有女人味^^ 轻洗轻揉， 请勿机洗。
            </div>
            <div class="love-ntroduce-price">
                <span class="price-now">¥235.20</span>
                <span class="price-before">¥336.00</span>
                <span class="price-sale">7折</span>
            </div>
            <div class="love-ntroduce-other">
                <span>全国包邮</span>
                <span class="other-sale">销量298</span>
            </div>
        </div>
        
        <!--  -->
        <div class="mbanner-top"></div>
        
        <style>
            /*.love-download*/
            .love-download {
                width: 100%;
                background:#FAFAFA;
            }
            .love-download .love-download-app{
                width: 100%;
                overflow: hidden;
            }
            .love-download .love-download-app a img{
                width: 100%;
                border-bottom: .01rem solid #E0E0E0
            }
            .love-download .love-download-more{
                width: 100%;
                height: .32rem;
                line-height: .32rem;
                background: #FAFAFA;
                padding: 0 .08rem;
                
            }
            .love-download .love-download-more .download-more-full1{
                float: left;
                font-size: .1rem;
            }
            .love-download .love-download-more .download-more-full2{
                float: right;
            }
            .love-download .love-download-more .download-more-full2 a{
                color: #676767;
                font-size: .1rem;
            }
            .love-download .download-more-mark{
                display: inline-block;
                transform: rotate(180deg);
                -webkit-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                -o-transform: rotate(180deg);
            }
        </style>
        <!-- app下载 -->
        <div class="love-download">
            <div class="love-download-app">
                <a href="javascript:;">
                    <img src="../../Public/dist/images/love-top.jpg">
                </a>
            </div>
            <div class="love-download-more" width:"100%" id="J-download-more">
                
                <span class="download-more-full2" id="J-download-more-full2">
                    <a href="javascript:;">更多
                        <i class="download-more-mark iconfont icon-fanhui"></i>
                    </a>
                </span>
                <span class="download-more-full1">
                    全店满279元减20元
                </span>
            </div>
        </div>
        <style>
            .love-coupon{
                position: fixed;
                top: 0;
                left: 0;
                z-index: -1;
                width: 100%;
                height: 100%;
                display: -webkit-box;
                -webkit-box-align: center;
                -webkit-box-pack: center;
                opacity: 0;
                transition: opacity .3s ease-out;
                -webkit-transition: opacity .3s ease-out;
                -moz-transition: opacity .3s ease-out;
                -ms-transition: opacity .3s ease-out;
                /*display: none;*/
            }
            .love-coupon .love-coupon-concessions{
                background: #ffffff;
                width: 90%;
                border-radius: .05rem;
            }
            .love-coupon .love-coupon-concessions h1{
                text-align: center;
                color: #f95578;
                font-size: .13rem;
                line-height: .3rem;
                border-bottom: .01rem solid #e1e1e1;
            }
            .love-coupon .love-coupon-concessions ul li{
                border-bottom: .01rem solid #e1e1e1;
                padding: 0 .1rem;
            }
            .love-coupon .love-coupon-concessions ul li span{
                color: #5E5E5E;
                line-height: .3rem;
                font-size: .1rem;
            }
            .love-coupon .love-coupon-concessions ul li a{
                display: inline-block;
                width: .5rem;
                height: .2rem;
                border:.01rem solid #FF5777;
                float: right;
                line-height: .2rem;
                margin-top: .07rem;
                text-align: center;
                color: #f95578;
                border-radius: .03rem;
                font-size: .1rem;
            }
            .love-coupon .love-coupon-concessions .love-coupon-ok{
                
                padding: .1rem 0;
                text-align: center;
            }
            .love-coupon .love-coupon-concessions .love-coupon-ok span{
                display: inline-block;
                /*text-decoration: none;
                vertical-align: middle;
                white-space: nowrap;*/
                border: none;
                width: 1.1rem;
                height: .3rem;
                line-height: .3rem;
                color: #ffffff;
                border-radius: .02rem;
                font-size: .13rem;
                text-align: center;
                background: #f95578;
            }
        </style>

        <!-- 弹出优惠券 -->
            <div class="love-coupon" id="J-love-coupon">
                <div class="love-coupon-concessions">
                    <h1>店铺优惠</h1>
                    <ul>
                        <li>
                            <span>全店满198元减5元</span>
                            <a href="javascript:;">点击领取</a>
                        </li>
                        <li>
                            <span>全店满198元减5元</span>
                            <a href="javascript:;">点击领取</a>
                        </li>
                        <li>
                            <span>全店满198元减5元</span>
                            <a href="javascript:;">点击领取</a>
                        </li>
                    </ul>
                    <div class="love-coupon-ok" id="J-coupon-ok">
                        <span>我知道了</span>
                    </div>
                </div>
            </div>

        <style>
            .love-mask{
                /*display:none;*/
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.6);
                z-index: -1;
                opacity: 0;
                transition: opacity .3s ease-out;
                -webkit-transition: opacity .3s ease-out;
                -moz-transition: opacity .3s ease-out;
                -ms-transition: opacity .3s ease-out;
            }
        </style>
        <!-- mask -->
        <div class="love-mask" id="J_mask"></div>
        

        <!--  -->
        <div class="mbanner-top"></div>
        
        <style>
            /*love-appraise*/
            .love-appraise{
                background: #ffffff;
                width: 100%;
            }
            .love-appraise .love-appraise-total{
                width: 100%;
                height: .4rem;
                line-height: .4rem;
                background: #ffffff;
                border-bottom: .01rem solid #E0E0E0;
                padding: 0 .08rem;
            }
            .love-appraise .love-appraise-total .appraise-total-count{
                float: left;
            }
            .love-appraise .love-appraise-total .appraise-total-count a{
                font-size: .1rem;
                color:#000000;
            }
            .love-appraise .love-appraise-total .appraise-total-more{
                float: right;
                
            }
            .love-appraise .love-appraise-total .appraise-total-more .download-more-mark{
                display: inline-block;
                transform: rotate(180deg);
                -webkit-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                -o-transform: rotate(180deg);
            }
            .love-appraise .love-appraise-total .appraise-total-more a{
                color: #676767;
                font-size: .1rem;
            }

            .love-appraise .love-appraise-details{
                width: 100%;
                height: auto;
                border-bottom: .01rem solid #E0E0E0;
                padding:0  .08rem;
            }

            .love-appraise-details .love-appraise-item1{
                width: 100%;
                border-bottom: .01rem solid #E0E0E0;
            }
        </style>
        <!-- 累计评价 -->
        <!-- <div class="love-appraise">
            <div class="love-appraise-total" id="J-appraise-total">
                <span class="appraise-total-count">
                    <a href="javascript:;">累计评价 17</a>
                </span>
                <span class="appraise-total-more" id="J-appraise-total-more">
                    <a href="javascript:;">更多
                        <i class="download-more-mark iconfont icon-fanhui"></i>
                    </a>
                </span>
            </div>

            <div class="love-appraise-details">
                <div class="love-appraise-item1">1</div>
                <div class="love-appraise-item">2</div>
            </div>
        </div> -->
        
        <!--  -->
        <!-- <div class="mbanner-top"></div> -->
        <style type="text/css">
            /*love-collect*/
            .love-collect{
                width:100%;
                height: 0.8rem;
                background: #ffffff;
                border-bottom: .01rem solid #E0E0E0;
            }
            .love-collect .love-collect-marked{
                width: 100%;
                padding:.1rem 0;
                background: #ffffff;
                padding-bottom: .1rem;
            }

            .love-collect .love-collect-shop{
                float: left;
                padding:0 .1rem;
            }
            .love-collect .love-collect-shop a img{
                width: .4rem;
                height: .4rem;
                border: .01rem solid #E0E0E0;
            }
            .love-collect .love-collect-evaluate{
        
                float: left;
            }
            .love-collect .love-collect-evaluate .collect-evaluate-name{
                font-size: .12rem;
            }
            .love-collect .love-collect-evaluate .collect-evaluate-num{
                padding-top: .2rem;
                font-size: .08rem;
                color: #B3B3B3;
            }
            .love-collect .love-collect-evaluate .collect-evaluate-num .evaluate-num{
                padding-right: .05rem;
            }
            .love-collect .love-collect-collect{
                padding-right: .2rem;
            }
            .love-collect .love-collect-collect .love-collect-favorites {
                float: right;
                width: .5rem;
                height: .2rem;
                line-height: .2rem;
                text-align: center;
                border: .01rem solid #000000;
                border-radius: 0.04rem;
                margin-top: .05rem;
            }
            
            .love-collect .love-collect-sati ul li{
                display: block;
                float: left;
                width: 33%;
                padding: 0 .05rem;
            }
            .love-collect .love-collect-sati ul li span{
                font-size: .09rem;
            }
            .love-collect .love-collect-sati ul li em{
                color:#F1403C;
                font-size: .09rem;
            }
            .love-collect .love-collect-sati ul li i{
                font-size: .09rem;
                color: #ffffff;
                background:#F1403C;
            }

        </style>
        
        <!-- 收藏 -->
        <div class="love-collect">
            <div class="love-collect-marked clearfix">
                <div class="love-collect-shop">
                    <div class="collect-shop-logo">
                        <a href="javascript:;">
                            <img src="../../Public/dist/images/love-dianpulogo.jpg">
                        </a>
                    </div>
                </div>
                <div class="love-collect-evaluate">
                    <p class="collect-evaluate-name">邂逅优品</p>
                    <p class="collect-evaluate-num">
                        <span class="evaluate-num"> 总销量78304</span>
                        <span>收藏数30658</span>
                    </p>
                </div>
                <div class="love-collect-collect">
                    <div class="love-collect-favorites">
                            + 收藏
                    </div>
                </div>
            </div>
            <div class="love-collect-sati">
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
        
        <style type="text/css">
            /*love-pinkage*/
            .love-pinkage{
                width: 100%;
                height: 1rem;
                background: #ffffff;
            }
            .love-pinkage .love-pinkage-freight,
            .love-pinkage .love-pinkage-all {
                margin-top: .3rem;
                line-height:.3rem; 
                width: 1rem;
                height: .3rem;
                border: 1px solid #AFAFAF;
                text-align: center;
                font-size: .1rem;
            }
            .love-pinkage .love-pinkage-freight{
                float: left;
               margin-left:.17rem;
            }
           
            .love-pinkage .love-pinkage-all{
                float: right;
               margin-right:.17rem;
            }
        </style>
        <!--  -->
        <div class="love-pinkage">
            <div class="love-pinkage-freight">
                全部商品(198)
            </div>
            <div class="love-pinkage-all">
                进入小店
            </div>
        </div>
        
        <!--  -->
        <div class="mbanner-top"></div>
        <style>

            /*love-details*/
            .love-details {
                width: 100%;
                background: #ffffff;
                border-bottom: .01rem solid #E0E0E0;  

            }
            .love-details .love-details-title{
                width: 100%;
                position: relative;
                text-align: center;
                padding: .1rem 0rem;
            }
            .love-details .love-details-title a{
                display: block;
                float: left;
                width: 33%;
                text-align: center;
            }
            .love-details .love-details-title a span{
                font-size: .1rem;
                color: #000000;
            }
            .love-details  .love-details-title .details-title2{
                border-left:.01rem solid #EAEAEA; 
                border-right:.01rem solid #EAEAEA; 

            }
            .love-details .love-details-line{
                position: absolute;
                top:.3rem;
                left: 0rem;
                background: red;
                width: 33%;
                height: .01rem;
            }
       
      </style>

        <!-- 图文详情 -->
        <div class="love-details">
                <div class="love-details-title clearfix" id="J-details-title">
                    <a href="javascript:;" class="details-title1 " id="J-details-title1">
                        <span>图文详情</span>
                       
                    <a href="javascript:;" class="details-title2" id="J-details-title2" >
                        <span>商品参数</span>
                        
                    <a href="javascript:;" class="details-title3" id="J-details-title3">
                        <span>热卖推荐</span>
                       
                    </a>
                    <i class="love-details-line" id="J-details-line" ></i>
                </div>
        </div>
        <style>
            /**/
            .love-details-all{
                background: #ffffff;
                width:100%;
                height: auto;
            }
            .love-details-all .details-all{
                padding:.2rem 0;
            }
            .love-details-all ul li{
                display: none;
            }
            .love-details-all ul li .details-all-explain{
                width: 100%;
                height: 1.6rem;
                padding: 0 .1rem;
            }

            .love-details-all ul li .details-all-explain .explain-start{
                display: inline-block;
                width: .5rem;
                height: .01rem;
                background:#AFAFAF;
                float: left;
            }
            .love-details-all ul li .details-all-explain .explain-text{
                display: inline-block;
                float: left;
                padding: 0.2rem 0px;
                color: rgb(114, 114, 114);
                font-size: .1rem;
            }
            .love-details-all ul li .details-all-explain .explain-end{
                display: inline-block;
                width: .5rem;
                height: .01rem;
                background:#AFAFAF;
                float: right;
            }
            .love-details-all ul li .details-all-dress{
                width: 100%;
               
            }
            .love-details-all ul li .details-all-dress p{
                padding: .1rem .1rem;
                color:rgb(114, 114, 114); 
                font-size: .12rem;
            }
            .love-details-all ul li .details-all-dress .details-all-img img{
                width: 100%;

            }
            /*产品参数*/
            .love-details-all .details-all-parameter{
                margin-bottom: .4rem;
            }
            .love-details-all .details-all-parameter .item{
                padding: 0 .1rem;
                display: block;
            }
            .love-details-all .details-all-parameter .item table{
                width: 100%;
                border-collapse: collapse;
                border-spacing: 0;
               
            }
            .love-details-all .details-all-parameter .item table tbody tr{
                display:table-row;
                vertical-align: inherit;
                border-color: inherit;
                border-bottom: .01rem solid #EAEAEA;
               
            }
            .love-details-all .details-all-parameter .item table tbody tr td{
                display:table-cell;
                vertical-align: inherit;
                font-weight: 400;
                line-height: .23rem;
                text-align: left;
                color: #727272;
                width: 33%;
                font-size: .1rem;
            }
            .love-details-all .details-all-parameter .item td:first-child{
                width: 33%;
            }
            .love-details-all .details-all-parameter .param-list{
                padding: 0 .1rem;
                clear: both;

            }
            .love-details-all .details-all-parameter .param-list div{
                border-bottom: .01rem solid #EAEAEA;
                height: .23rem;

            }

            .love-details-all .details-all-parameter .param-list div span{
                display: inline-block;
                line-height: .23rem;
                font-size: .1rem;
                color: #727272; 

            }
            .love-details-all .details-all-parameter .param-list div .param-list-other{
                color: #EB4B6A;
                width: 1rem;
                margin-left: .15rem;
            }
            .love-details-all .details-all-parameter .param-list div .param-list-specific{
                width: .5rem;
            }
            /*热门推荐*/
            .love-details-all .details-all .details-all-hot{
                padding: 0 .1rem;
                width: 100%;
                height: auto;
                margin-bottom: .4rem;

            }
            .love-details-all .details-all .details-all-hot .all-hot-img{
                height: 1.3rem;
                width: .7rem;
                overflow: hidden;
                float: left;
                margin-left: .05rem;
            }
            .love-details-all .details-all .details-all-hot .all-hot-img a img{
                height: 1rem;
                overflow: hidden;
            }
            .love-details-all .details-all .details-all-hot .all-hot-img p {
                color: #727272;
                font-size: .09rem;
            }
            .love-details-all .details-all .details-all-hot .all-hot-img span{
                color: #727272;
                font-size: .09rem;
            }
            .love-details-all .details-all .details-all-hot .all-hot-img .hot-img-price{
                margin-right: .05rem;
            }

      </style>
        
        <!--  -->
        <div class="love-details-all clearfix" id="J-details-all">
                <div class="details-all clearfix">
                    <ul>
                        <li style="display:block" id="J-details">
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
                            <!-- 产品参数 -->
                        </li>
                            
                        <li>
                            <div class="details-all-parameter">
                                 <div class="item">
                                     <table>
                                         <tbody>
                                             <tr>
                                                 <td>尺码</td>
                                                 <td>xs</td>
                                                 <td>s</td>
                                                 <td>m</td>
                                             </tr>
                                             <tr>
                                                 <td>衣长</td>
                                                 <td>88</td>
                                                 <td>89</td>
                                                 <td>90</td>
                                             </tr>
                                             <tr>
                                                 <td>袖长</td>
                                                 <td>39</td>
                                                 <td>40</td>
                                                 <td>41</td>
                                             </tr>
                                             <tr>
                                                  <td>胸围</td>
                                                  <td>110</td>
                                                  <td>114</td>
                                                  <td>118</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <div class="param-list clearfix">
                                      <div>
                                          <span class="param-list-specific">细节</span>
                                          <span class="param-list-other">其他</span>
                                      </div>
                                       <div>
                                          <span class="param-list-specific">袖型</span>
                                          <span class="param-list-other">其他袖型</span>
                                      </div>
                                       <div>
                                          <span class="param-list-specific">风格</span>
                                          <span class="param-list-other">日韩，清新，甜美</span>
                                      </div>
                                       <div>
                                          <span class="param-list-specific">材质</span>
                                          <span class="param-list-other">毛呢</span>
                                      </div>
                                      <div>
                                          <span class="param-list-specific">版型</span>
                                          <span class="param-list-other">O型(茧型)</span>
                                      </div>
                                      <div>
                                          <span class="param-list-specific">衣长</span>
                                          <span class="param-list-other">长款(81cm-100cm)</span>
                                      </div>
                                      <div>
                                          <span class="param-list-specific">衣门襟</span>
                                          <span class="param-list-other" >一粒单排扣</span>
                                      </div>
                                      <div>
                                          <span class="param-list-specific">图案</span>
                                          <span class="param-list-other">其他</span>
                                      </div>
                                      <div>
                                          <span class="param-list-specific">袖长</span>
                                          <span class="param-list-other">长袖</span>
                                      </div>
                                 </div>
                                
                            </div>

                        </li>
                        <!-- 热门推荐 -->
                        <li>
                          <div class="details-all-hot clearfix">
                              <div class="all-hot-img">
                                <a href="javascript:;"><img src="../../Public/dist/images/love-hot1.jpg"></a>
                                <p>冬日一抹阳光</p>
                                <p>
                                <span class="hot-img-price">¥198.8</span>
                                <span class="iconfont icon-xin hot-img-num">2540</span>
                                </p>
                              </div>
                              <div class="all-hot-img">
                                <a href="javascript:;"><img src="../../Public/dist/images/love-hot2.jpg"></a>
                                <p>冬日一抹阳光</p>
                                <p>
                                <span class="hot-img-price">¥198.8</span>
                                <span class="iconfont icon-xin hot-img-num">2540</span>
                                </p>
                              </div>
                              <div class="all-hot-img">
                                <a href="javascript:;"><img src="../../Public/dist/images/love-hot3.jpg"></a>
                                <p>冬日一抹阳光</p>
                                <p>
                                <span class="hot-img-price">¥198.8</span>
                                <span class="iconfont icon-xin hot-img-num">2540</span>
                                </p>
                              </div>
                              <div class="all-hot-img">
                                <a href="javascript:;"><img src="../../Public/dist/images/love-hot4.jpg"></a>
                                <p>冬日一抹阳光</p>
                                <p>
                                <span class="hot-img-price">¥198.8</span>
                                <span class="iconfont icon-xin hot-img-num">2540</span>
                                </p>
                              </div>
                              <div class="all-hot-img">
                                <a href="javascript:;"><img src="../../Public/dist/images/love-hot4.jpg"></a>
                                <p>冬日一抹阳光</p>
                                <p>
                                <span class="hot-img-price">¥198.8</span>
                                <span class="iconfont icon-xin hot-img-num">2540</span>
                                </p>
                              </div>
                              <div class="all-hot-img">
                                <a href="javascript:;"><img src="../../Public/dist/images/love-hot3.jpg"></a>
                                <p>冬日一抹阳光</p>
                                <p>
                                <span class="hot-img-price">¥198.8</span>
                                <span class="iconfont icon-xin hot-img-num">2540</span>
                                </p>
                              </div>
                              <div class="all-hot-img">
                                <a href="javascript:;"><img src="../../Public/dist/images/love-hot6.jpg"></a>
                                <p>冬日一抹阳光</p>
                                <p>
                                <span class="hot-img-price">¥198.8</span>
                                <span class="iconfont icon-xin hot-img-num">2540</span>
                                </p>
                              </div>
                              <div class="all-hot-img">
                                <a href="javascript:;"><img src="../../Public/dist/images/love-hot7.jpg"></a>
                                <p>冬日一抹阳光</p>
                                <p>
                                <span class="hot-img-price">¥198.8</span>
                                <span class="iconfont icon-xin hot-img-num">2540</span>
                                </p>
                              </div>
                              <div class="all-hot-img">
                                <a href="javascript:;"><img src="../../Public/dist/images/love-hot4.jpg"></a>
                                <p>冬日一抹阳光</p>
                                <p>
                                <span class="hot-img-price">¥198.8</span>
                                <span class="iconfont icon-xin hot-img-num">2540</span>
                                </p>
                              </div>
                          </div> 

                        </li>
                    </ul>
                </div>
        </div>
        
        <style>
            .love-foot-bottom{
                width: 100%;
                height: .35rem;
                background: #ffffff;
                /*border-top:.01rem solid  #AFAFAF;*/
                position: fixed;
                bottom: 0;
                z-index: 100;
                max-width: 750px;
                background-color: rgba(255, 255, 255, 0.8);
            }

            .love-foot-bottom .foot-bottom{
                height: .35rem;
            }
            .love-foot-talk , .love-foot-like ,.love-foot-shopcar{
                display: inline-block;
                height: .3rem;
                vertical-align: middle;
                float: left;

            }
            .love-foot-bottom .foot-bottom .love-foot-talk,.love-foot-like{
                width: .45rem;
                height: .3rem;
                line-height:.3rem;
                text-align: center;
            } 
            .love-foot-bottom .foot-bottom .love-foot-talk span{
                display:block;
                font-size: .15rem;
                color:rgb(114, 114, 114);  
            }
            .love-foot-bottom .foot-bottom .love-foot-like span{
                display:block;
                font-size: .19rem;
                color:rgb(114, 114, 114);
                border-left: .01rem solid #AFAFAF; 
            }

            .love-foot-bottom .foot-bottom .love-foot-talk .foot-talk{
                font-size: .09rem;
                margin-top: -.18rem;
            }
            .love-foot-bottom .foot-bottom .love-foot-like .foot-like{
                font-size: .09rem;
                margin-top: -.18rem;
            }
            .love-foot-bottom .foot-bottom .love-foot-shopcar{
                padding-right: .1rem;
                float: right;
                margin-top:.05rem;
            }
            .love-foot-bottom .foot-bottom .love-foot-shopcar span{
                border: .01rem solid red;
               
            } 
            .love-foot-bottom .foot-bottom .love-foot-shopcar .foot-shopcar{
                display: inline-block;
                color: red;
                float: left;
                width: .7rem;
                height: .25rem;
                text-align: center;
                line-height: .25rem;
                font-size: .1rem;

            }
            .love-foot-bottom .foot-bottom .love-foot-shopcar .foot-shopping{
                margin-left: .1rem;
                display: inline-block;
                width: .7rem;
                height: .25rem;
                line-height: .25rem;
                text-align: center;
                float: right;
                background: red;
                color: #ffffff;
                font-size: .1rem;
            }
        </style>
        <!--  -->
        <div class="love-foot-bottom">
            <div class="foot-bottom">
                <div class="love-foot-talk">
                    <span class="iconfont icon-liaotian"></span>
                    <span class="foot-talk">私聊</span>
                </div>
                <div class="love-foot-like">
                    <span class="iconfont icon-xin"></span>
                    <span class="foot-like">喜欢</span>
                </div>
                <div class="love-foot-shopcar">
                    <span class="foot-shopcar">加入购物车</span>
                    <span class="foot-shopping">立即购买</span>
                </div>
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

            function headerswiper(){

                var swiper = new Swiper();
                swiper.on('swiped', function(prev, current){
                    // console.log(prev)
                    // console.log(current)
                    var curOrdina = (current+1)
                    var ordinaLen = $('.J_header_swiper .item').length;
                    $('.J_curOrdina').html(curOrdina);
                    $('.J_ordinaLen').html(ordinaLen);
                })

                $('.J_ordinaLen').html($('.J_header_swiper .item').length);
            }
            headerswiper();
            
        })
    </script>
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
        // function Preferential(){
        //     $('#J-download-more').click(function(){
        //         $('#love-coupon').css('display', 'block');
        //         $('#love-mask').css('display', 'block');
        //     })
        //     $('#J-coupon-ok').click(function(){
        //         $('#love-coupon').css('display', 'none');
        //         $('#love-mask').css('display', 'none');
        //     })
        // }
        // Preferential();


        var oDownloadmore = document.getElementById('J-download-more');
        var oLovecoupon = document.getElementById('J-love-coupon');
        var oMask = document.getElementById('J_mask');
        var oCouponok = document.getElementById('J-coupon-ok');

            oDownloadmore.onclick=function(){
                oLovecoupon.style.zIndex="1000";
                oLovecoupon.style.opacity="1";
                // oLovecoupon.style.display="-webkit-box;"
                // oMask.style.display="block"
                oMask.style.zIndex="100";
                oMask.style.opacity="1";
            }
            oCouponok.onclick=function(){
                oLovecoupon.style.zIndex="-1";
                oLovecoupon.style.opacity="0";
                oMask.style.zIndex="-1";
                oMask.style.opacity="0";
            }
        
    }
</script>
</html>