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
            z-index: 200;
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
            overflow: hidden;}
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
        /*顶部登录*/
        .love-top-login {
            padding-top: .3rem;
            position: relative;
            overflow: hidden;
        }
        .love-top-login .form-shunt{
            display: block;
            /*height: 6rem;*/
            background: #c9bafb;
        }
        .love-top-login-controller{
            position: absolute;
            top:1.3rem;
            width: 100%;
            height: 100%;
        }
        .love-top-login-controller .btn-login{
            background: #ff5777;
        }
        .love-top-login-controller .btn-download{
            color: #333;
            background: #fff;

        }
         .love-top-login-controller .btn-login,.btn-download{
            display: block;
            height: .25rem;
            line-height: .25rem;
            margin: 0 auto .08rem auto;
            color: #fff;
            -webkit-border-radius: .04rem;
            border-radius: .03rem;
            border: none;
            font-size: .1rem;
            outline: 0;
            text-align: center;
            width: 1.7rem;
         }
          .love-top-login-controller .other-login{
            text-align: center;
            padding-top: .05rem;
          }
          .other-login .iconqq{
            margin-right: .1rem;
            width: 1.42rem;
            height: .35rem;
            /*background:url('./mgj/蘑菇街 - 我的买手街！_files/qq.png') 0 0 no-repeat;*/
            background-size: 100%;
          }
           .other-login .iconweibo{
            margin-right: .1rem;
            width: 1.5rem;
            height: .35rem;
            /*background:url('./mgj/蘑菇街 - 我的买手街！_files/weibo.png') 0 0 no-repeat;*/
            background-size: 100%;
           }
           .other-login a img{
            width: .5rem;
           }

           /*特色市场*/

           .love-feature-market .buy-markets{
            background: #fff;
            /*padding: .1rem;*/
           }
          .buy-markets .makets-title{
            font-size: .12rem;
            color: #333;
            padding:.1rem 0  0 .1rem;
          }
          .makets-content .module-item{
            width: 25%;
            text-align: center;
            float: left;
          }
          .module-item .item-logo {
            margin: .1rem;
          }
          .module-item .item-logo img{
            margin: 0 auto;
            display: block;
            width: .37rem;
            height: .37rem;
          }
          .module-item .item-title{
            font-size: .1rem;
            line-height: 1;
            margin-bottom: .05rem;
            color: #424242;
          }
          .module-item .item-desc{
            font-size: .08rem;
            color: #999;
            line-height: 1;
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
                    <a href="javascript:;" class="btn-login">登录</a>
                    <a href="javascript:;" class="btn-download">下载</a>
                    <div class="other-login">
                        <a href="" class="iconqq"><img src="../../Public/dist/images/love-qq.png"></a>
                        <a href="" class="iconweibo"><img src="../../Public/dist/images/love-weibo.png"></a>
                    </div>
               </div>
            </div>
        </div>

        <!-- 特色市场 -->
        <div class="love-feature-market">
            <div class="buy-markets ">
                <div class="makets-title">特色市场</div>
                <div class="makets-content">
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