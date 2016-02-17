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

    	.love-container {
			max-width: 750px;
		    min-width: 320px;
	        margin-left: auto;
			margin-right: auto; 
		}
        .mbanner-top {
            width: 100%;
            height: .1rem;
            background: #EAEAEA;
           /* border: .01rem solid #E0E0E0;*/
        }

    </style>

    <!-- According to the screen automatically set the font size -->
    <script src="../../Public/dist/js/factory/accordingScreenAutoSetFontSize.js"></script>

</head>
<body>
    <div class="love-container">
    <!-- header -->
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
            z-index: 200; }
        .love-header .love-menu-icon {
            display: inline-block;
            font-size: .14rem;
            color: #727272; }
        .love-header .love-shopcar {
            display: inline-block;
            font-size: .14rem;
            color: #727272; }
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
                上衣
            </div>
            <span class="love-shopcar iconfont icon-gouwuche"></span>
        </div>
        <!-- app -->
        <style>
            .love-app{
                width:100%;
                height: auto;
                margin-top: .3rem;
            }
        </style>
        <div class="love-app clearfix">
        	<div>
        		<a href="javascript:;"><img src="../../Public/dist/images/love-app.gif" width="100%"></a>
        		<a href="javascript:;"><img src="../../Public/dist/images/love-yurongfu.png" width="100%"></a>
        	</div>
        </div>
        <!--  -->
        <div class="mbanner-top"> </div>
        <!--限时抢购 --> 
        <style>
            .love-flashsale{
                width: 100%;
                height: 1.3rem;
                overflow: hidden;
                position: relative;
            }
            .love-flashsale  .love-flashsale-down{
                position: absolute;
                top:.3rem;
                left: .05rem;
                width: 1.2rem;
                height: .1rem;
            }
            .love-flashsale  .love-flashsale-down span{
                font-size: .1rem;
            }
            .love-flashsale .love-flashsale-img{
                width: 50%;
                height: 1.3rem;
                border-right: 1px solid #F6F6F6;
                float: left;
            }
            .love-flashsale .love-flashsale-img a img{
                width: 100%;
                height: 1.3rem;
            }
            .love-flashsale .love-flashsale-style{
                width: 50%;
                height: 1.3rem;
                float: left;
            }
            .love-flashsale .love-flashsale-style .flashsale-style1{
                width: 100%;
                height: .7rem;
            }
            .love-flashsale .love-flashsale-style .flashsale-style2{
                border-top: 1px solid #F6F6F6;
            }
            .love-flashsale .love-flashsale-style .flashsale-style1 a img,
            .love-flashsale .love-flashsale-style .flashsale-style2 a img
            {
                width: 100%;
                height: .7rem;
            }
        </style>
        <div class="love-flashsale">
        	<div class="love-flashsale-img">
        		<a href="javascript:;"><img src="../../Public/dist/images/love-time.jpg"></a>
        	</div>
            <div class="love-flashsale-down">
                <span>剩余时间</span>
                <span class="love-flashsale-time J_timeHours" >00</span>
                :
                 <span class="love-flashsale-time J_timeMinutes" >00</span>
                :
                 <span class="love-flashsale-time J_timeSeconds" >00</span>
            
            </div>
        	<div class="love-flashsale-style">
        	    <div class="flashsale-style1">
        			<a href="javascript:;" class="flashsale-style"><img src="../../Public/dist/images/love-time1.jpg" ></a>
        		</div>
        		<div class="flashsale-style2">
        			<a href="javascript:;"><img src="../../Public/dist/images/love-time2.jpg" ></a>
        		</div>
        	</div>
        </div>
        <!--  -->
        <div class="mbanner-top"></div>
        <!-- 图片分类 -->
        <style>
            .love-img-category {
                width: 100%;
                height: auto;
                padding: 0.08rem;
                background: #fff; 
            }
            .love-img-category .love-module-title {
                font-size: .11rem;
                color: #333;
            }
            .love-img-category .love-category-list {
                width: 100%; 
            }
            .love-img-category .love-category-list .love-category-item {
                float: left;
                width: 25%;
                text-align: center;
                margin-top: .1rem; 
            }
            .love-img-category .love-category-list .love-category-item  a img {
                width: 100%;
                height: .55rem;
                margin-bottom: .05rem; 
            }
            .love-img-category .love-category-list .love-category-item .love-category-name {
                color: #333;
                font-size: .1rem;
                line-height: 1.5; }
            .love-img-category .love-category-list .love-category-item .love-category-description {
                color: #666;
                font-size: .07rem;
                line-height: 1.5;
             }
        </style>
        <div class="love-img-category">
            <div class="love-module-title">全部商品</div>

            <ul class="love-category-list clearfix">
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category1.jpg" alt=""></a>
                    <p class="love-category-name">上衣</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category2.jpg" alt=""></a>
                    <p class="love-category-name">裤子</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category3.jpg" alt=""></a>
                    <p class="love-category-name">裙子</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category4.jpg" alt=""></a>
                    <p class="love-category-name">内衣</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category5.jpg" alt=""></a>
                    <p class="love-category-name">鞋子</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category6.jpg" alt=""></a>
                    <p class="love-category-name">包包</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category7.jpg" alt=""></a>
                    <p class="love-category-name">男友</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category8.jpg" alt=""></a>
                    <p class="love-category-name">美妆</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category9.jpg" alt=""></a>
                    <p class="love-category-name">配饰</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category10.png" alt=""></a>
                    <p class="love-category-name">母婴</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category11.png" alt=""></a>
                    <p class="love-category-name">家居</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category12.jpg" alt=""></a>
                    <p class="love-category-name">个护</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category13.png" alt=""></a>
                    <p class="love-category-name">百货</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category14.jpg" alt=""></a>
                    <p class="love-category-name">零食</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category8.jpg" alt=""></a>
                    <p class="love-category-name">美妆</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
                 <li class="love-category-item">
                    <a href="#"><img src="../../Public/dist/images/love-category12.jpg" alt=""></a>
                    <p class="love-category-name">个护</p>
                    <p class="love-category-description">新年换新衣</p>
                </li>
            </ul>
        </div>
        <!--  -->
        <div class="mbanner-top"> </div>
        <!-- love-new -->
        <style>
            .love-new{
                margin: .1rem 0;
                width: 100%;
            }
            .love-new .love-new-cloth1{
                float: left;
                padding: 0 .1rem;
                width: 50%;
            }
            .love-new .love-new-cloth1 a img,
            .love-new .love-new-cloth2 a img{
                width: 100%;
                height:1.5rem;
            }
            .love-new .love-new-cloth2{
                width: 50%;
                float: left;
                padding-right:.1rem;
            }

        </style>
        <div class="love-new clearfix">
            <div class="love-new-cloth1">
                <a href="javascrprit:;">
                    <img src="../../Public/dist/images/love-new1.jpg">
                </a>
            </div>
            <div class="love-new-cloth2">
                <a href="javascrprit:;">
                    <img src="../../Public/dist/images/love-new2.jpg">
                </a>
            </div>
        </div>
         <!--  -->
        <div class="mbanner-top"></div>
        <!-- 图片列表题目 -->
        <style>
            .love-title{
                background: #EAEAEA;
                width: 100%;
                position: relative;
                /*z-index: 1;*/
                overflow: hidden;
            }

            .love-title .love-title-star {
                height:.4rem;
                width: 1rem;
                line-height: .4rem;
                margin: 0 auto;
                z-index: 2;
            }
            .love-title .love-title-star .title-star{
                height:.4rem;
                float: left;
                margin-left: .2rem;
            }
            .love-title .love-title-star .title-star .iconfont{
                color: #FF5778;
                font-size: .16rem;
                padding: 0 .04rem;
            }
            .love-title .love-title-star .title-choose{
                font-size: .11rem;
                color: #9C9C9C;
                position: relative;
            }
            .love-title .love-title-star .title-choose:before{
                display: block;
                content: '';
                height: 1px;
                width: 1rem;
                background: #e5e5e5;
                position: absolute;
                top: .2rem;
                left: -.8rem;
            }
            .love-title .love-title-star .title-choose:after{
                display: block;
                content: '';
                height: 1px;
                width: 1rem;
                background:  ;
                position: absolute;
                top: .2rem;
                right: -.9rem;
            }
            .love-title .love-title-list{
                width: 100%;
                height: .2rem;
                margin: 0 auto;
                border-bottom: 1px solid #e5e5e5;
            }
            .love-title .love-title-list a{
                font-size: .1rem;
                padding: 0 .16rem;
                line-height: .2rem;
                color: #000000;
            }
            .love-title .love-title-list .title-list1{
                border-left: 1px solid #e5e5e5;
                border-right: 1px solid #e5e5e5;
            }
            .love-title .love-title-list .title-list2{
                border-right: 1px solid #e5e5e5;
            }
            .love-title .love-title-list .title-list3{
                color: #FF5778;
            }
        </style>
        <div class="love-title clearfix">
            <div class="love-title-star">
                <div class="title-star">
                    <span class="iconfont icon-xingxing"></span>
                </div>
                <div class="title-choose">买家精选</div>
            </div>
            <div class="love-title-list clearfix" id="J-love-title-list">
                <a href="javascript:;" class="title-list3" id="J-title-list3" >全部</a>
                <a href="javascript:;" class="title-list1">棉衣</a>
                <a href="javascript:;" class="title-list2">毛呢外套</a>
                <a href="javascript:;">羽绒服</a>
            </div>
        </div>
        <!-- 瀑布流 -->
        <style>
            .love-imgs{
                padding-top: .1rem;
                background:#EAEAEA;
                width: 100%;
            }
            .love-imgs .J-love-li{
                display: none;
            }
            .love-imgs .love-imgs-box{
                width: 100%;
            }

            .love-imgs .love-imgs-box .imgs-box-img a img{
                height: 1.5rem;
                width: 100%;

            }
            .love-imgs .love-imgs-box ul li{
                display: block;
                float: left;
                padding-left: .1rem;
               /* margin-bottom: .1rem;*/
                width: 1.2rem;
                height: 2rem;
                /*padding-bottom: .1rem;*/
            }
            .love-imgs .love-imgs-box ul li .imgs-box-title{
              /*  color:*/ 
              font-size:.07rem;
              padding: .05rem 0;
              color: #757575;
            }
            .love-imgs .love-imgs-box ul li span{
                font-size: .07rem;
            }
            .love-imgs .love-imgs-box ul li .imgs-box-price .box-price{
                color: #FF5778;
                float: left;
            }
            .love-imgs .love-imgs-box ul li .imgs-box-price .iconfont{
                color: #757575;
                float: right;
            }


        </style>
        <div class="love-imgs clearfix" id="J-love-imgs">
            <ul>
                <li class="J-love-li" style="display:block">
                    <div class="love-imgs-box">
                      <ul>
                        <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs1.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs2.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs3.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs4.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs3.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                            <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs2.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 
                        <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs4.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs1.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 



                    </ul> 
                    </div>
                </li>
                <li class="J-love-li">
                    <div class="love-imgs-box">
                    <ul>
                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs2.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs2.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs3.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs4.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs3.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                            <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs2.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 
                        <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs4.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs1.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 



                    </ul> 
                    </div>
                </li>
                <li class="J-love-li">
                    <div class="love-imgs-box">
                    <ul>
                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs3.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs2.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs3.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs4.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs3.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                            <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs2.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 
                        <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs4.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs1.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 



                    </ul> 
                    </div>
                </li>
                <li class="J-love-li">
                    <div class="love-imgs-box">
                    <ul>
                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs4.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs2.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs3.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs4.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs3.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                            <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs2.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 
                        <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs4.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 

                       <li>
                           <div class="imgs-box-img">
                               <a><img src="../../Public/dist/images/love-imgs1.webp"></a>
                           </div>
                           <div class="imgs-box-title">
                               实拍2色夹棉厚羊毛呢大翻领大衣
                           </div>
                           <div class="imgs-box-price">
                               <span class="box-price">168.00</span>
                               <span class="iconfont icon-xin">34032</span>
                           </div>
                       </li> 



                    </ul> 
                    </div>
                </li>
            </ul>
        </div>

    </div>
    <script src="../../Public/dist/plugins/zepto/zepto.min.js"></script>
    <script src="../../Public/dist/js/factory/util.js"></script>

    <script type="text/javascript">
        //倒计时  
        function countDown(){
            var a = '1483949141293';

            setInterval(function(){
                var o = {};
                o = util.countDown(a);
                
                $('.J_timeHours').html(util.fillZero(o.hour));
                $('.J_timeMinutes').html(util.fillZero(o.minute));
                $('.J_timeSeconds').html(util.fillZero(o.second));
            },1000)
        }
        countDown();
        // 列表
        var aLovetitlelist = document.getElementById('J-love-title-list').getElementsByTagName('a');
        var aLoveimgs = document.getElementById('J-love-imgs').getElementsByClassName('J-love-li');

        for (var i = 0; i < aLovetitlelist.length; i++) {
            aLovetitlelist[i].index =i;
            aLovetitlelist[i].onclick = function(){
                for (var i = 0; i < aLovetitlelist.length; i++) {
                    aLovetitlelist[i].className = " ";
                    aLoveimgs[i].style.display = 'none';
                };
                this.className = "title-list3";
                aLoveimgs[this.index].style.display='block';
            }
        };

         


    </script>
</body>
</html>