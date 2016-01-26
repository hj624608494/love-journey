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
    <script src="../../Public/dist/js/factory/accordingScreenAutoSetFontSize.js"></script>
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
		/*love-header*/
		.love-header{
			position: fixed;
		    border-bottom: 1px solid #c9c7c8;
		    width: 100%;
		    height: 45px;
		    top: 0;
		    line-height: 45px;
		    display: -webkit-flex;
		    display: -webkit-box;
		    background: #fafafa;
		    z-index: 99;
		}
		.love-header .love-menu-icon{
			display: inline-block;
		    padding: 0 15px;
		    height: 100%;
		    color: #5e5e5e;
		    font-size: 20px;
		}
		.love-header .love-title{
			-webkit-flex: 1;
		    -webkit-box-flex: 1;
		    text-align: center;
		    line-height: 45px;
		    font-size: 18px;
		    color: #5e5e5e;
		    font-weight: 800;
		    white-space: nowrap;
		    text-overflow: ellipsis;
		    overflow: hidden;
		}
		.love-header .love-shopcar{
			display: inline-block;
		    width: 50px;
		    text-align: center;
		    position: relative;
		    color: #727272!important;
		    padding-right: .2rem;
		}
	   /*love-app*/
	    .love-app{
	   		width:100%;
	   		height: auto;
	   		margin-top: .44rem;
	   }
	   /*mbanner-top*/
        .mbanner-top{
            width: 100%;
            height: .15rem;
            background: #EAEAEA;
            border:.01rem solid #E0E0E0;

        }
        /*love-flashsale*/
        .love-flashsale{
        	display:flex;
  
        }
        .love-flashsale .love-flashsale-img{
        	position: relative;
		    overflow: hidden;
		    .hot-sales-mod .flex340 {
		    -webkit-box-flex: 340;
		    flex: 340 1 0%;
		    border-right: 1px solid rgb(232, 232, 232);
        }
        .love-flashsale .love-flashsale-style {
		    -webkit-box-flex: 410;
		    flex: 410 1 0%;  
        }
        .love-flashsale .love-flashsale-style .flashsale-style1{
        	height: 1.9rem;
        	border-bottom: 1px solid rgb(232, 232, 232);
        	overflow: hidden;
        }
        .love-flashsale .love-flashsale-img a img,.love-flashsale .love-flashsale-style .flashsale-style1 a, .love-flashsale .love-flashsale-style .flashsale-style2 a{
        	display: block;
        }
        .love-flashsale .love-flashsale-style .flashsale-style1 a img, .love-flashsale .love-flashsale-style .flashsale-style2 a img{
        	 width: 100%;
        	 height: 100%;
        }
    	.love-flashsale .love-flashsale-style .flashsale-style2{
    		height: 1.9rem;
    		overflow: hidden;
    	}
    	/**/
    	.love-img-category {
		  width: 100%;
		  height: auto;
		  padding: 0.08rem;
		  background: #fff; }
		.love-img-category .love-module-title {
		    font-size: .11rem;
		    color: #333; }
		.love-img-category .love-category-list {
		    width: 100%; }
		.love-img-category .love-category-list .love-category-item {
		      float: left;
		      width: 25%;
		      text-align: center;
		      margin-top: .1rem; }
		.love-img-category .love-category-list .love-category-item  a img {
		      width: 1rem;
		      margin-bottom: .05rem; }
	    .love-img-category .love-category-list .love-category-item .love-category-name {
		        color: #333;
		        font-size: .1rem;
		        line-height: 1.5; }
		.love-img-category .love-category-list .love-category-item .love-category-description {
		        color: #666;
		        font-size: .07rem;
		        line-height: 1.5; }

    </style>

    <!-- According to the screen automatically set the font size -->
    <script src="../../Public/dist/js/factory/accordingScreenAutoSetFontSize.js"></script>

</head>
<body>
    <div class="love-container">
    	<!-- header -->
    	<header class="love-header">
    		<span class="love-menu-icon iconfont icon-caidan"></span>
    		<p class="love-title">上衣</p>
    		<span class="love-shopcar iconfont icon-gouwuche"></span>
    	</header>
        <!-- app -->
        <div class="love-app clearfix">
        	<div>
        		<a href="javascript:;"><img src="../../Public/dist/images/love-app.gif" width="100%"></a>
        		<a href="javascript:;"><img src="../../Public/dist/images/love-yurongfu.png" width="100%"></a>
        	</div>
        </div>
        <!--  -->
        <div class="mbanner-top"> </div>
        <!-- 限时抢购 -->
        <div class="love-flashsale">
        	<div class="love-flashsale-img flex340">
        		<a href="javascript:;"><img src="../../Public/dist/images/love-time.jpg" width="100%"></a>
        	</div>
        	<div class="love-flashsale-style flex410">
        	    <div class="flashsale-style1">
        			<a href="javascript:;" class="flashsale-style"><img src="../../Public/dist/images/love-time1.jpg" width="100%"></a>
        		</div>
        		<div class="flashsale-style2">
        			<a href="javascript:;"><img src="../../Public/dist/images/love-time2.jpg" width="100%"></a>
        		</div>
        	</div>
        </div>
        <!--  -->
        <div class="mbanner-top"> </div>
        <!-- 图片分类 -->
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
            </ul>
        </div>

    </div>
</body>
</html>