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
    <link rel="stylesheet" type="text/css" href="../../Public/dist/css/slider.min.css">

    <!-- According to the screen automatically set the font size -->
    <script src="../../Public/dist/js/factory/accordingScreenAutoSetFontSize.js"></script>
</head>
<body>
    <div class="love-container">
        <!-- 头部 -->
        <div class="love-header clearfix">
            <span class="love-menu-icon iconfont icon-caidan" id="J_leftMenu"></span>

            <div class="love-header-search clearfix">
                红人BAZAAR
            </div>
            <span class="love-shopcar iconfont icon-gouwuche"></span>
        </div>

        <!--  -->
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
                margin-top: .1rem;
                position: relative;
                overflow: hidden;
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
                position: absolute;
                top:-.45rem;
                left: .8rem;
                width: 7rem;
                display: flex;
            }

            .weekstar-swiper .weekstar-swiper-img{
                width: 1.2rem;
                position: relative;
                margin-right: .1rem;
                float: left;
            }
            .weekstar-swiper .weekstar-swiper-img a img{
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
                /*text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;*/
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
            .love-rednewper{
               
                background: #ffffff;
                padding-bottom: .1rem;
                width: 100%;
                overflow: hidden;


            }
            .love-rednewper .love-newer{
                font-size: .1rem;
                font-weight: bolder;
                padding: .2rem .1rem .2rem;
                color:#7D7D7D;

            }
            .love-rednewper .love-red{
                width: 100%;
                display: flex;
                margin: 0px auto;
                transform: translate3d(-1.63rem, 0, 0);
                -webkit-transform: translate3d(-1.63rem, 0, 0);
                -moz-transform: translate3d(-1.63rem, 0, 0);
                -ms-transform: translate3d(-1.63rem, 0, 0);
                -o-transform: translate3d(-1.63rem, 0, 0);
                /*margin-left: -1.63rem;*/
            }
            .love-rednewper .love-rednewper-img{
                float: left;
                width: 1.85rem;
                height: 1.9rem;
                margin-right: .1rem;
                border: 1px solid rgb(206, 206, 206);
                border-radius: 0.05rem;
            }         
            .love-rednewper .love-rednewper-img .rednewper-img{
                width: 2rem;
                text-align: center;    
            }
            .love-rednewper .love-rednewper-img .rednewper-img a{
                display: block;
                float: left;
                height: 1.3rem;
            }
            .love-rednewper .love-rednewper-img .rednewper-img .rednewper-img-first{
                margin-right: .05rem;
            }

            .love-rednewper .love-rednewper-img .rednewper-img a img{
                width: .9rem;
                height: 1.3rem;
                
            }

            .love-rednewper .love-rednewper-img .rednewper-title{
                clear: both;
            }
            .love-rednewper .love-rednewper-img .rednewper-title p{
                width: 100%;
                height: .2rem;
                font-size: .095rem;
                color:#7D7D7D; 
                background:rgb(245, 245, 245);
                line-height: .2rem;
            }
             .love-rednewper .love-rednewper-img .rednewper-title .rednewper-name {
                width: .35rem;
                height:.2rem;
                margin: 0 auto;
             }
            .love-rednewper .love-rednewper-img .rednewper-title .rednewper-name span{
                font-size: .11rem;
                line-height: .2rem;
                color: rgb(51, 51, 51);
            }
            .love-rednewper .love-rednewper-img .rednewper-title .rednewper-sale{
                width: 1.2rem;
                height: .1rem;
                margin: 0 auto;
            }
            .love-rednewper .love-rednewper-img .rednewper-title .rednewper-sale span{
                color:#7D7D7D;
                font-size:.1rem;
            }


        </style>
        <div class="love-rednewper clearfix">
            <p class="love-newer">今日红人上新</p>
            <div class="love-red" id="J_love_red">
                <div class="love-rednewper-img">
                    <div class="rednewper-img">
                        <a href="javascript:;" class="rednewper-img-first"><img src="../../Public/dist/images/love-red1.webp" style="border-radius: 0.05rem 0 0 0;"></a>
                        <a href="javascript:;"><img src="../../Public/dist/images/love-red2.webp" style="border-radius:  0 0.05rem 0 0;"></a>
                    </div>
                    <div class="rednewper-title clearfix">
                        <p> “韩系学院派软妹，乖巧装扮亲和力爆棚” </p>
                        <div class="rednewper-name">
                            <span>汤静文</span>
                        </div>
                        <div class="rednewper-sale">
                            <span>销量 306</span>
                            <span>｜</span>
                            <span>粉丝 9067</span>
                        </div>
                    </div>

                </div>

                 <div class="love-rednewper-img">
                        <div class="rednewper-img">
                            <a href="javascript:;" class="rednewper-img-first"><img src="../../Public/dist/images/love-red1.webp" style="border-radius: 0.05rem 0 0 0;"></a>
                            <a href="javascript:;"><img src="../../Public/dist/images/love-red2.webp" style="border-radius:  0 0.05rem 0 0;"></a>
                        </div>
                        <div class="rednewper-title clearfix">
                            <p> “韩系学院派软妹，乖巧装扮亲和力爆棚” </p>
                            <div class="rednewper-name">
                                <span>汤静文</span>
                            </div>
                            <div class="rednewper-sale">
                                <span>销量 306</span>
                                <span>｜</span>
                                <span>粉丝 9067</span>
                            </div>
                        </div>
                    
                </div>

                 <div class="love-rednewper-img">
                        <div class="rednewper-img">
                            <a href="javascript:;" class="rednewper-img-first"><img src="../../Public/dist/images/love-red1.webp" style="border-radius: 0.05rem 0 0 0;"></a>
                            <a href="javascript:;"><img src="../../Public/dist/images/love-red2.webp" style="border-radius:  0 0.05rem 0 0;"></a>
                        </div>
                        <div class="rednewper-title clearfix">
                            <p> “韩系学院派软妹，乖巧装扮亲和力爆棚” </p>
                            <div class="rednewper-name">
                                <span>汤静文</span>
                            </div>
                            <div class="rednewper-sale">
                                <span>销量 306</span>
                                <span>｜</span>
                                <span>粉丝 9067</span>
                            </div>
                        </div>
                    
                </div>

                <div class="love-rednewper-img">
                        <div class="rednewper-img">
                            <a href="javascript:;" class="rednewper-img-first"><img src="../../Public/dist/images/love-red1.webp" style="border-radius: 0.05rem 0 0 0;"></a>
                            <a href="javascript:;"><img src="../../Public/dist/images/love-red2.webp" style="border-radius:  0 0.05rem 0 0;"></a>
                        </div>
                        <div class="rednewper-title clearfix">
                            <p> “韩系学院派软妹，乖巧装扮亲和力爆棚” </p>
                            <div class="rednewper-name">
                                <span>汤静文</span>
                            </div>
                            <div class="rednewper-sale">
                                <span>销量 306</span>
                                <span>｜</span>
                                <span>粉丝 9067</span>
                            </div>
                        </div>
                    
                </div>


                <div class="love-rednewper-img">
                        <div class="rednewper-img">
                            <a href="javascript:;" class="rednewper-img-first"><img src="../../Public/dist/images/love-red1.webp" style="border-radius: 0.05rem 0 0 0;"></a>
                            <a href="javascript:;"><img src="../../Public/dist/images/love-red2.webp" style="border-radius:  0 0.05rem 0 0;"></a>
                        </div>
                        <div class="rednewper-title clearfix">
                            <p> “韩系学院派软妹，乖巧装扮亲和力爆棚” </p>
                            <div class="rednewper-name">
                                <span>汤静文</span>
                            </div>
                            <div class="rednewper-sale">
                                <span>销量 306</span>
                                <span>｜</span>
                                <span>粉丝 9067</span>
                            </div>
                        </div>
                    
                </div>

                <div class="love-rednewper-img">
                        <div class="rednewper-img">
                            <a href="javascript:;" class="rednewper-img-first"><img src="../../Public/dist/images/love-red1.webp" style="border-radius: 0.05rem 0 0 0;"></a>
                            <a href="javascript:;"><img src="../../Public/dist/images/love-red2.webp" style="border-radius:  0 0.05rem 0 0;"></a>
                        </div>
                        <div class="rednewper-title clearfix">
                            <p> “韩系学院派软妹，乖巧装扮亲和力爆棚” </p>
                            <div class="rednewper-name">
                                <span>汤静文</span>
                            </div>
                            <div class="rednewper-sale">
                                <span>销量 306</span>
                                <span>｜</span>
                                <span>粉丝 9067</span>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>

        <!--  -->
         <div class="mbanner-top"></div>

        <!-- 风格红人 -->
        <div class="love-newer clearfix">
                <p class="love-newer-title">风格红人</p>
                <div class="love-newer-box" id="J_newerBox">

                    <div class="love-newer-img clearfix">
                            <a href="javascript:;">
                                <div class="love-newer-img1">
                                    <img src="../../Public/dist/images/love-hotdoor1.png">
                                    <div class="love-newer-padding"></div>
                                </div>
                                
                                <div class="love-newer-icon">
                                    <p class="newer-icon1">轻熟名媛</p>
                                    <p class="newer-icon2">修炼独有女人味</p>
                                    <span>more></span>
                                </div>
                            </a>
                    </div>


                    <div class="love-newer-img">
                            <a href="javascript:;">
                                <div class="love-newer-img1">
                                    <img src="../../Public/dist/images/love-hotdoor2.png">
                                     <div class="love-newer-padding"></div>
                                </div>
                    
                               <div class="love-newer-icon">
                                    <p class="newer-icon1">轻熟名媛</p>
                                    <p class="newer-icon2">修炼独有女人味</p>
                                    <span>more></span>
                                </div>
                            </a>
                    </div>


                    <div class="love-newer-img">
                            <a href="javascript:;">
                                <div class="love-newer-img1">
                                    <img src="../../Public/dist/images/love-hotdoor4.jpg">
                                     <div class="love-newer-padding"></div>
                                </div>
                    
                               <div class="love-newer-icon">
                                    <p class="newer-icon1">轻熟名媛</p>
                                    <p class="newer-icon2">修炼独有女人味</p>
                                    <span>more></span>
                                </div>
                            </a>
                    </div>

                    <div class="love-newer-img">
                            <a href="javascript:;">
                                <div class="love-newer-img1">
                                    <img src="../../Public/dist/images/love-hotdoor2.png">
                                     <div class="love-newer-padding"></div>
                                </div>
                    
                               <div class="love-newer-icon">
                                    <p class="newer-icon1">轻熟名媛</p>
                                    <p class="newer-icon2">修炼独有女人味</p>
                                    <span>more></span>
                                </div>
                            </a>
                    </div>

                    <div class="love-newer-img">
                            <a href="javascript:;">
                                <div class="love-newer-img1">
                                    <img src="../../Public/dist/images/love-hotdoor6.png">
                                     <div class="love-newer-padding"></div>
                                </div>
                    
                               <div class="love-newer-icon">
                                    <p class="newer-icon1">轻熟名媛</p>
                                    <p class="newer-icon2">修炼独有女人味</p>
                                    <span>more></span>
                                </div>
                            </a>
                    </div>

                    <div class="love-newer-img">
                            <a href="javascript:;">
                                <div class="love-newer-img1">
                                    <img src="../../Public/dist/images/love-hotdoor4.jpg">
                                     <div class="love-newer-padding"></div>
                                </div>
                    
                               <div class="love-newer-icon">
                                    <p class="newer-icon1">轻熟名媛</p>
                                    <p class="newer-icon2">修炼独有女人味</p>
                                    <span>more></span>
                                </div>
                            </a>
                    </div>
                </div>
        </div>


        
        <!-- 图片列表题目 -->
        <div class="love-title clearfix">
            <div class="love-title-star">
    
                <div class="title-choose">红人人气单品</div>
            </div>
             <div class="love-title-list clearfix" id="J-love-title-list">
                <a href="javascript:;"  class= "title-list3" id="J-title-list3" ><div>全部</div></a>
               
                <a href="javascript:;" ><div class="title-list">早春新品</div></a>
               
                <a href="javascript:;"><div class="title-list">毛呢外套</div></a>
                
                <a href="javascript:;"><div class="title-list">御寒棉服</div></a>
                
                <a href="javascript:;"><div class="title-list">女神裙装</div></a>
               
                <a href="javascript:;"><div class="title-list">针织毛衣</div></a>
               
                <a href="javascript:;"><div class="title-list">鞋包小物</div></a>
               
                <a href="javascript:;"><div class="title-list">万能内搭</div></a>
            </div>
        </div>

        <!-- 瀑布流 -->
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
    
    <!-- zepto -->
    <script src="../../Public/dist/plugins/zepto/zepto.min.js"></script>
    <!-- util -->
    <script src="../../Public/dist/js/factory/util.js"></script>
    
    <!-- swiper-tiny -->
    <link rel="stylesheet" href="../../Public/dist/plugins/swiper-tiny/swiper.css">
    <script src="../../Public/dist/plugins/swiper-tiny/swiper.js"></script>
    <script src="http://touch.code.baidu.com/touch-0.2.14.min.js"></script>
    
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


        // 
        function rotateY(){
            var oNewerBox = document.getElementById('J_newerBox');
            var oLoveNewerImg = oNewerBox.getElementsByClassName('love-newer-img');
            var oIndex = 0;

            setInterval(function(){                

                if (oLoveNewerImg[oIndex].className.indexOf('love-newer-rotate') < 0) {
                    oLoveNewerImg[oIndex].className = oLoveNewerImg[oIndex].className + ' love-newer-rotate';
                }else{
                    oLoveNewerImg[oIndex].className = 'love-newer-img';
                }

                if (oIndex == 5) {
                    oIndex = 0;
                }else{
                    oIndex++;
                }
                
            },3000);
        }
        rotateY();



        function touchEvent(){
            touch.on('#J_love_red', 'touchstart', function(ev){
                ev.preventDefault();
            });

            var target = document.getElementById("J_love_red");
            target.style.webkitTransition = 'all ease 0.2s';
            var oTranslate = -1.63;

            touch.on(target, 'swiperight', function(ev){
                oTranslate += 1.95;
                target.style.webkitTransform = "translate3d(" + oTranslate + "rem,0,0)";
                // alert('向右滑动');
            });

            touch.on(target, 'swipeleft', function(ev){
                // alert('向左滑动');
                oTranslate -= 1.95;
                target.style.webkitTransform = "translate3d(" + oTranslate + "rem,0,0)";
            });
        }
        touchEvent();

    


        //

        var aLovetitlelist = document.getElementById('J-love-title-list').getElementsByTagName('a');
        // var aLovetitlelistone = aLovetitlelist.getElementsByTagName('div');
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
        }

    </script>
</body>
</html>