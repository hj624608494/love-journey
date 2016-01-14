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
    <!-- <link rel="stylesheet" type="text/css" href="../../Public/dist/css/index.min.css"> -->
    <link rel="stylesheet" type="text/css" href="../../Public/dist/css/index.css">

    <!-- According to the screen automatically set the font size -->
    <script src="../../Public/dist/js/factory/accordingScreenAutoSetFontSize.js"></script>
    <style type="text/css">
        /*登录界面*/
      .love-top-login .form-shunt .love-enter{
       position: absolute;
       top:.3rem;
       background:#ECEDEF;
       height: 2rem;
       width: 100%;
       background: rgb(236, 237, 239);
       padding: .1rem;
       display:none;
      }
      .love-enter a{
       color: rgb(51, 51, 51);
       font-size: 0.12rem;

      }
      .love-enter .enter-back{
        padding-right: 1.6rem;
      } 
      .love-enter .love-enter-controller{
        margin-top: .2rem;
      }
      .love-enter-controller .love-enter-account,.love-enter-controller .love-enter-download,.love-enter-controller .love-enter-login{
        display: block;
        height: .25rem;
        line-height: .25rem;
        margin: 0 auto .08rem auto;
        border-radius: .03rem;
        border: none;
        font-size: .1rem;
        outline: 0;
        width: 1.7rem; 
        text-indent: 0.1rem;
      }
      .love-enter-controller .love-enter-login{
        text-align: center;
        margin-top: .17rem;
      }
      .love-enter-controller .love-enter-account{
        background: #fff;
      }
      .love-enter-controller .love-enter-download{
       color: #333;
       background: #fff;
      }
      .love-enter-controller .love-enter-login{
        background: #ff5777;
        color: #fff; 
      }
      .love-enter-controller .enter-other-login{
        text-align: center;
         padding-top: .05rem; }
      .love-enter-controller .enter-other-login .love-enter-iconqq{
        margin-right: .1rem;
        width: 1.42rem;
        height: .35rem;
        background-size: 100%; }
      .love-enter-controller .enter-other-login .love-enter-iconweibo {
        margin-right: .1rem;
        width: 1.5rem;
        height: .35rem;
        background-size: 100%; }
        .love-enter-controller .enter-other-login a img{
         width: .5rem;
        }


        /*注册*/
        .love-top-login .form-shunt .love-logon{
          position: absolute;
          top:.3rem;
          background:#ECEDEF ;
          height: 2rem;
          width: 100%;
          margin-top: .02rem;
          background: rgb(236, 237, 239);
          padding: .1rem;
          display: none;
        }
        .love-logon a{
          color: rgb(51, 51, 51);
          font-size: 0.12rem;
        }
        .love-logon .logon-back{
          padding-right: 1.6rem;
        }
        .love-logon .love-logon-controller{
          margin-top: .2rem;
        }
        .love-logon .love-logon-controller .love-logon-num
        ,.love-logon-enroll, .love-logon-download{
         display: block;
         height: .25rem;
         line-height: .25rem;
         margin: 0 auto .08rem auto;
         border-radius: .03rem;
         border: none;
         font-size: .1rem;
         outline: 0;
         width: 1.7rem; 
         text-indent: 0.1rem;
        }
         .love-logon .love-logon-controller .love-logon-box{
          margin: 0 .1rem.08rem .3rem;
          height: .25rem;
          width: 1.7rem; 
          background: #fff;
          border-radius: .03rem;
         }
         .love-logon .love-logon-controller .love-logon-box .love-logon-authcode{
          height: .25rem;
          line-height: .25rem;
          border-radius: .03rem;
          border: none;
          font-size: .1rem;
          outline: 0;
          text-indent: .1rem;
          width: 1.1rem;

         }
         .love-logon .love-logon-controller .love-logon-box .love-logon-click{
          font-size: .1rem;
          border-left: 1px solid rgb(209, 209, 209);
          background: #fff;
          text-indent: .1rem;
          padding: .03rem .08rem;
          padding-right: 0;
          color: #a9a9a9;
         }
          .love-logon .love-logon-controller .love-logon-download{
            margin-bottom: .15rem;
          }
        
         .love-logon .love-logon-controller .love-logon-enroll{
         background: #ff5777;
         color:#fff;
         text-align: center;
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
        <div class="love-mask" id="J_mask">  </div>

        <!-- 顶部登录 -->
        <div class="love-top-login  clearfix">
            <div class="form-shunt">
               <img src="../../Public/dist/images/love-login-bg.jpg" width="100%">
               <div class="love-top-login-controller">
                    <a href="javascript:;" class="btn-login" id="J-btn-login">登录</a>
                    <a href="javascript:;" class="btn-download" id="J-btn-download">下载</a>
                    <div class="other-login">
                        <a href="" class="iconqq"><img src="../../Public/dist/images/love-qq.png"></a>
                        <a href="" class="iconweibo"><img src="../../Public/dist/images/love-weibo.png"></a>
                    </div>
               </div>
               <!-- 登录界面 -->
               <div class="love-enter clearfix" id="J-love-enter" > 
                     <a href="javascript:;"class="enter-back iconfont icon-fanhui" id="J-enter-back">返回</a>
                     <a href="javascript:;"class="enter-logon" id="J-enter-logon">注册</a>     
                 <div class="love-enter-controller">
                     <input type="text" class="love-enter-account" id="J-btn-account" placeholder="昵称/邮箱/手机号"/>
                     <input type="password" class="love-enter-download" id="J-enter-download" placeholder="密码"/>
                     <a href="javascript:;" class="love-enter-login" id="J-enter-login">登录</a>
                    <div class="enter-other-login">
                        <a href="" class="love-enter-iconqq"><img src="../../Public/dist/images/love-qq.png"></a>
                        <a href="" class="love-enter-iconweibo"><img src="../../Public/dist/images/love-weibo.png"></a>
                    </div>
                 </div>
               </div>
               <!--注册-->
               <div class="love-logon" id="J-love-logon">
                   <a href="javascript:;"class="logon-back iconfont icon-fanhui" id="J-logon-back">返回</a>
                   <a href="javascript:;" class="logon-login" id="J-logon-login">登录</a>

                   <div class="love-logon-controller clearfix">
                       <input type="text" class="love-logon-num" placeholder="请输入手机号">
                       <div class="love-logon-box">
                           <input type="text" class="love-logon-authcode" placeholder="验证码">
                           <a href="javascript:;" class="love-logon-click">点击获取</a>
                       </div>
                       <input type="password" class="love-logon-download" placeholder="密码"/>
                       <a href="javascript:;" class="love-logon-enroll">立即注册</a>
                   </div>
               </div>
            </div>
        </div>

        <!-- 特色市场 -->
        <div class="love-feature-market">
            <div class="buy-markets ">
                <div class="makets-title">特色市场</div>
                <div class="makets-content clearfix">
                    <ul>
                        <li class="module-item">
                            <a href="javascript:;">
                                <div class="item-logo"><img src="../../Public/dist/images/love-feature1.jpg"></div>
                                <div class="item-title">品牌</div>
                                <div class="item-desc">冬季大牌攻略</div>
                            </a>
                        </li>
                         <li class="module-item">
                            <a href="javascript:;">
                                <div class="item-logo"><img src="../../Public/dist/images/love-feature2.jpg"></div>
                                <div class="item-title">红人Bazaar</div>
                                <div class="item-desc">冬日红人热款</div>
                            </a>
                        </li>

                         <li class="module-item">
                            <a href="javascript:;">
                                <div class="item-logo"><img src="../../Public/dist/images/love-feature3.jpg"></div>
                                <div class="item-title">心水好货</div>
                                <div class="item-desc">2016开运好物</div>
                            </a>
                        </li>

                         <li class="module-item">
                            <a href="javascript:;">
                                <div class="item-logo"><img src="../../Public/dist/images/love-feature4.jpg"></div>
                                <div class="item-title">设计师</div>
                                <div class="item-desc">设计师新款来袭</div>
                            </a>
                        </li>
                         <li class="module-item">
                            <a href="javascript:;">
                                <div class="item-logo"><img src="../../Public/dist/images/love-feature5.jpg"></div>
                                <div class="item-title">轻时髦</div>
                                <div class="item-desc">时髦轻生活</div>
                            </a>
                        </li>
                         <li class="module-item">
                            <a href="javascript:;">
                                <div class="item-logo"><img src="../../Public/dist/images/love-feature6.jpg"></div>
                                <div class="item-title">享瘦</div>
                                <div class="item-desc">能让你变瘦</div>
                            </a>
                        </li>
                         <li class="module-item">
                            <a href="javascript:;">
                                <div class="item-logo"><img src="../../Public/dist/images/love-feature7.jpg"></div>
                                <div class="item-title">淘淘馆</div>
                                <div class="item-desc">全球超值好货</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 限时抢购 -->
        <div class="love-flash-sale">
            <div class="love-flash-main">
                <div class="love-flash-title">
                    <span class="iconfont icon-shijian"></span>
                    <span>限时快抢</span>
                </div>
                <div class="love-count-down">
                    <span class="love-time J_timeHours">00</span>:
                    <span class="love-time J_timeMinutes">00</span>:
                    <span class="love-time J_timeSeconds">00</span>
                </div>
                <div class="love-flash-item">
                    <a href="#"><img src="../../Public/dist/images/love-flash-main.jpg" alt=""></a>
                </div>
            </div>

            <div class="love-flash-list">
                <div class="love-list-top">
                    <a href="#"><img src="../../Public/dist/images/love-flash-top.jpg" alt=""></a>
                </div>
                <div class="love-list-bottom">
                    <div class="love-list-left">
                        <a href="#"><img src="../../Public/dist/images/love-flash-left.jpg" alt=""></a>
                    </div>
                    <div class="love-list-right">
                        <a href="#"><img src="../../Public/dist/images/love-flash-right.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

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

        <!-- 商品列表 -->
        <div class="love-item-list clearfix">
            <div class="love-item-main" style="margin-right: 2%;">
                <span class="love-item-label">母婴</span>

                <a class="love-item-img" href="#">
                    <div class="love-img-detail">
                        <img src="../../Public/dist/images/love-item1.png" width="100%" alt="">
                    </div>
                </a>

                <div class="love-item-content">
                    <a href="#">十元封顶vol.29</a>
                    <p>生活需要美好小物来搭配~</p>
                </div>
            </div>

            <div class="love-item-main">
                <span class="love-item-label">家居</span>

                <a class="love-item-img" href="#">
                    <div class="love-img-detail">
                        <img src="../../Public/dist/images/love-item1.jpg" width="100%" alt="">
                    </div>
                </a>

                <div class="love-item-content">
                    <a href="#">小小型男</a>
                    <p>小型男品味从小培养，绝对百搭必备款！</p>
                </div>
            </div>
            
            <div class="love-item-main" style="margin-right: 2%;">
                <span class="love-item-label">母婴</span>

                <a class="love-item-img" href="#">
                    <div class="love-img-detail">
                        <img src="../../Public/dist/images/love-item1.png" width="100%" alt="">
                    </div>
                </a>

                <div class="love-item-content">
                    <a href="#">十元封顶vol.29</a>
                    <p>生活需要美好小物来搭配~</p>
                </div>
            </div>

            <div class="love-item-main">
                <span class="love-item-label">家居</span>

                <a class="love-item-img" href="#">
                    <div class="love-img-detail">
                        <img src="../../Public/dist/images/love-item1.jpg" width="100%" alt="">
                    </div>
                </a>

                <div class="love-item-content">
                    <a href="#">小小型男</a>
                    <p>小型男品味从小培养，绝对百搭必备款！</p>
                </div>
            </div>

            <div class="love-item-main" style="margin-right: 2%;">
                <span class="love-item-label">母婴</span>

                <a class="love-item-img" href="#">
                    <div class="love-img-detail">
                        <img src="../../Public/dist/images/love-item1.png" width="100%" alt="">
                    </div>
                </a>

                <div class="love-item-content">
                    <a href="#">十元封顶vol.29</a>
                    <p>生活需要美好小物来搭配~</p>
                </div>
            </div>

            <div class="love-item-main">
                <span class="love-item-label">家居</span>

                <a class="love-item-img" href="#">
                    <div class="love-img-detail">
                        <img src="../../Public/dist/images/love-item1.jpg" width="100%" alt="">
                    </div>
                </a>

                <div class="love-item-content">
                    <a href="#">小小型男</a>
                    <p>小型男品味从小培养，绝对百搭必备款！</p>
                </div>
            </div>
        </div>

        <!-- 底部下载 -->
        <div class="love-footer-download">
            <!-- <span class="love-download-close iconfont icon-guanbi"></span> -->
            <img src="../../Public/dist/images/logo.png" alt="">
            <span class="love-site-slogan">更多变美妙招一学就会</span>
            <a class="love-download-btn">立即下载</a>
        </div>
    </div>
    
    <!-- zepto -->
    <script src="../../Public/dist/plugins/zepto/zepto.min.js"></script>
    <!-- util -->
    <script src="../../Public/dist/js/factory/util.js"></script>

    
    <script>
        $(function(){
            /**
             * [leftMenun 左侧菜单显示/隐藏]
             * @return {[type]} [description]
             */
            function leftMenun(){
                //显示
                $('#J_leftMenu').click(function(){
                    $('#J_mask').css('display', 'block');
                    $('#J_leftMenuBox').css({'visibility': 'visible', 'left': 0});
                    //阻止页面滚动
                    util.switchPageScroll(true);
                })
                //隐藏
                $('#J_mask, #J_leftMenuBox').click(function(){
                    $('#J_mask').css('display', 'none');
                    $('#J_leftMenuBox').css({'visibility': 'hidden', 'left': -2+'rem'});
                    //开启页面滚动
                    util.switchPageScroll(false);
                })
            }
            leftMenun();

            /**
             * [countDown 倒计时]
             * @return {[type]} [description]
             */
            function countDown(){
                // var a = +new Date('2016-01-16 16:59:11');
                var a = '1453109551000';

                setInterval(function(){
                    var o = {};
                    o = util.countDown(a);
                    
                    $('.J_timeHours').html(util.fillZero(o.hour));
                    $('.J_timeMinutes').html(util.fillZero(o.minute));
                    $('.J_timeSeconds').html(util.fillZero(o.second));
                },1000)
            }
            countDown();

            /**
             * [login login]
             * @return {[type]} [description]
             */
            function login(){
                //登录
                $('#J-btn-login').click(function(){
                    $('#J-love-enter').css('display', 'block');
                })
                //返回
                $('#J-enter-back').click(function(){
                    $('#J-love-enter').css('display', 'none');
                })
            }
            login();

            /**
             * [register register]
             * @return {[type]} [description]
             */
            function register(){
                //注册
                $('#J-enter-logon').click(function(){
                    $('#J-love-logon').css('display', 'block');
                })
                //登录
                $('#J-logon-login').click(function(){
                    $('#J-love-enter').css('display', 'block');
                    $('#J-love-logon').css('display', 'none');
                })
                //返回
                $('#J-logon-back').click(function(){
                    $('#J-love-logon, #J-love-enter').css('display', 'none');
                })
            }
            register();

        })
    </script>
</body>
</html>