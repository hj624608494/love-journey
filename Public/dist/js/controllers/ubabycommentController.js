var ubaby = angular.module('ubaby.h5', []);
ubaby.controller('ubabycommentController', ['$scope', '$http', '$location', function($scope, $http, $location) {
    /**
     * ubaby h5
     * author: hanjie
     */
    $scope.ubaby_h5 = {};
    $scope.ubaby_h5.userDataByApp = {};
    $scope.ubaby_h5.likeDatas = {};
    $scope.ubaby_h5.commentListDatas = [];
    $scope.ubaby_h5.rankingListDatas = {};
    //page
    $scope.ubaby_h5.curpage = 1;
    $scope.ubaby_h5.pagenum = 10;
    $scope.ubaby_h5.isLoading;
    //statisticData
    $scope.ubaby_h5.statisticDataByApp = {};
    $scope.ubaby_h5.statisticDataByApp.meta = {};
    $scope.ubaby_h5.statisticDataByApp.events = [];
    $scope.ubaby_h5.statisticDataByApp.events_bak = {};
    $scope.ubaby_h5.statisticDataByApp.events_bak.type = "count";
    $scope.ubaby_h5.statisticDataByApp.subject = "active20151225";
    $scope.ubaby_h5.statisticUrl = '/index.php/index/statistic';

    /**
     * [getUserDataByApp 从app里面获取用户信息]
     * @return {[type]} [description]
     */
    $scope.getUserDataByApp = function (){
        try{
            $scope.ubaby_h5.userDataByApp = JSON.parse(JavaScriptInterface.userProperties());
            //alert(JavaScriptInterface.userProperties());
            localStorage.setItem('statisticData', JavaScriptInterface.userProperties());

        }catch(e){
            console.log(e);
        }
    }();
    // alert(JavaScriptInterface.userProperties());
    
    /**
     * [getCommentDatas 获取评论数据]
     * @param  {[type]} curpage [当前页]
     * @param  {[type]} pagenum [每页数量]
     * @param  {[type]} orderby [排序字段]
     * @return {[type]}         [data]
     */
    $scope.getCommentDatas = function(curpage, pagenum, orderby){
        var curpage = curpage ? curpage : 1;
        var pagenum = pagenum ? pagenum : 10;
        $scope.ubaby_h5.userDataByApp.curpage = curpage;
        $scope.ubaby_h5.userDataByApp.pagenum = pagenum;
        $scope.ubaby_h5.userDataByApp.orderby = orderby;

        $http.post('/index.php/index/getCommentDatas', $scope.ubaby_h5.userDataByApp).success(function(data){
            setTimeout(function(){
                if ($scope.ubaby_h5.isLoading !== false) {
                    $scope.ubaby_h5.isLoading = true;
                };
            },500);
            if (data.ret == true) {
                for (var i = 0; i < data.result.length; i++){
                    $scope.ubaby_h5.commentListDatas.push(data.result[i]);
                }
                $scope.top10();
                $scope.ubaby_h5.isLoading = false;
            }else{
                // util.artDialogHint(data.msg);
                $scope.ubaby_h5.isLoading = false;
                // alert(data.msg);
            }
        }).error(function(data,state){
            console.log(data);
        })
    };

    $scope.top10 = function (){
        if ($scope.ubaby_h5.commentListDatas.length == 10) {
            setTimeout(function(){
                $('.uui-ranking-mark').last().children('span').css({'left':'0.038rem','top':'.04rem'});
            },1000)
        };
    }

    /**
     * [init 初始化页面信息]
     * @return {[type]} [description]
     */
    $scope.init = function (){
        //keng
        if (localStorage.getItem('iponelistback')){
            var localData = JSON.parse(localStorage.getItem('statisticData'));
            $scope.ubaby_h5.userDataByApp =  localData == null ? {} : localData;
            localStorage.removeItem('iponelistback');
        }

        $http.post('/index.php/index/load', $scope.ubaby_h5.userDataByApp).success(function(data){
            if (data.ret == true) {
                $scope.ubaby_h5.likeDatas = data.result;
            }else{
                // util.artDialogHint(data.msg);
                // alert(data.msg);
            }
        }).error(function(data,state){
            console.log(data);
        })

        $scope.getCommentDatas(1, 10, 'likenum');

        //statistic data 
        statistic.load($scope.ubaby_h5.statisticUrl);
    };

    $scope.initListPage = function(){
        //keng
        var localData = JSON.parse(localStorage.getItem('statisticData'));
        $scope.ubaby_h5.userDataByApp =  localData == null ? {} : localData;
        localStorage.setItem('iponelistback', true);

        //alert(localStorage.getItem('statisticData'));

        //获取用户点击 [我要发言] 按钮的标识
        var isClickWantSendBtn = localStorage.getItem('isClickWantSendBtn');
        console.log(isClickWantSendBtn);
        if (isClickWantSendBtn) {            
            //statistic data 
            statistic.wantsendbtn($scope.ubaby_h5.statisticUrl);
            localStorage.removeItem('isClickWantSendBtn');
        };

        $scope.getCommentDatas(1, 10, 'leave_date');
    }

    /**
     * [like 点赞 or 吐槽]
     * @param  {[type]} state [点赞(1) or 吐槽(2) 的状态值]
     * @return {[type]}       [description]
     */
    $scope.like = function(state){
        $scope.ubaby_h5.userDataByApp.likestate = state;
        $http.post('/index.php/index/like', $scope.ubaby_h5.userDataByApp).success(function(data){
            if (data.ret == true) {
                if (state == 1) {
                    $scope.ubaby_h5.likeDatas.likenum++;
                    $('.uui-pannel-good').css('font-size', '.6rem');
                    setTimeout(function(){$('.uui-pannel-good').css('font-size', '.16rem');},500);                    
                }else{
                    $scope.ubaby_h5.likeDatas.boringnum++;
                    $('.uui-pannel-bad').css('font-size', '.6rem');
                    setTimeout(function(){$('.uui-pannel-bad').css('font-size', '.16rem');},500);
                }
                $scope.ubaby_h5.likeDatas.isliked = state;
            }else{
                // util.artDialogHint(data.msg);
                // alert(data.msg);
            }
        }).error(function(data,state){
            console.log(data);
        })
        
        //statistic data 
        statistic.likeOrBoring($scope.ubaby_h5.statisticUrl, state);
    }

    /**
     * [commentlike 评论点赞]
     * @param  {[type]} state [点赞状态 是否为该评论点过赞]
     * @param  {[type]} index [在数据中的顺序]
     * @param  {[type]} id    [该条评论的id]
     * @return {[type]}       [description]
     */
    $scope.commentlike = function(state, index ,id){
        if (state == 1) {
            return false;
        };

        $scope.ubaby_h5.userDataByApp.likestate = state;
        $scope.ubaby_h5.userDataByApp.id = id;

        $http.post('/index.php/index/listlike', $scope.ubaby_h5.userDataByApp).success(function(data){
            if (data.ret == true) {
                $scope.ubaby_h5.commentListDatas[index].likenum++;
                $scope.ubaby_h5.commentListDatas[index].isliked = 1;
            }else{
                // util.artDialogHint(data.msg);
                // alert(data.msg);
            }
        }).error(function(data,state){
            console.log(data);
        })

        //statistic data
        statistic.commmentlike($scope.ubaby_h5.statisticUrl, id);
    }

    $scope.wantsend = function(){
        localStorage.setItem('isClickWantSendBtn', true);
        // location.href = "/index.php/index/list";
        $('.uui-list-wrapper').show();
        $('#J_input').focus();
        $scope.getCommentDatas(1, 10, 'leave_date');
    }

    $scope.closeShade = function(){
        $('.J_shade').hide();
    }

    $scope.sendComment = function (){
        if ($scope.ubaby_h5.comment_content == undefined || $scope.ubaby_h5.comment_content == "") {
            // alert('留言内容不能为空哦!');
            return false;
        };
        $('.J_sendCommentBtn').attr('disabled', true);
        $('.J_sendCommentBtn').addClass('disabled');
        setTimeout(function(){
            $('.J_shade').show();
            // $('.J_comment_successmodal').show();
        },500);

        //keng
        var localData = JSON.parse(localStorage.getItem('statisticData'));
        $scope.ubaby_h5.userDataByApp =  localData == null ? {} : localData;

        $scope.ubaby_h5.userDataByApp.comment_content = $scope.ubaby_h5.comment_content;
        //alert(JSON.stringify($scope.ubaby_h5.userDataByApp));
        $http.post('/index.php/index/sendComment', $scope.ubaby_h5.userDataByApp).success(function(data){
            if (data.ret == true) {
                $scope.ubaby_h5.comment_content = '';
                $('.J_comment_successmodal').show();

                //statistic data 
                statistic.sendComment($scope.ubaby_h5.statisticUrl);
                setTimeout(function(){
                    $('.J_shade').hide();
                    $('.J_comment_successmodal').hide();
                    $('.J_sendCommentBtn').attr('disabled', false);
                    $('.J_sendCommentBtn').removeClass('disabled');
                },3000)
            }else{
                // util.artDialogHint(data.msg);
                alert(data.msg);
            }
        }).error(function(data,state){
            console.log(data);
            $('.J_shade').hide();
            $('.J_sendCommentBtn').attr('disabled', false);
            $('.J_sendCommentBtn').removeClass('disabled');
        })
    }

    /**
     * [statistic 数据统计]
     * @return {[type]} [description]
     */
    var statistic = function(){
        return{
            ajax: function(requestUrl){
                try{
                    var statisticDatabyLocalStorage = JSON.parse(localStorage.getItem('statisticData'));
                    $scope.ubaby_h5.statisticDataByApp.meta.version = statisticDatabyLocalStorage.version;
                    $scope.ubaby_h5.statisticDataByApp.meta.channel = statisticDatabyLocalStorage.channel;
                    $scope.ubaby_h5.statisticDataByApp.meta.deviceid = statisticDatabyLocalStorage.device_id;
                    $scope.ubaby_h5.statisticDataByApp.meta.userid = statisticDatabyLocalStorage.user_id;
                    $scope.ubaby_h5.statisticDataByApp.meta.babybirth = parseInt(statisticDatabyLocalStorage.baby_timestamp);
                    $scope.ubaby_h5.statisticDataByApp.meta.accessway = statisticDatabyLocalStorage.network;
                }catch(e){
                    console.log(e);
                }

                $scope.ubaby_h5.statisticDataByApp.events_bak.timestamp = +new Date();
                $scope.ubaby_h5.statisticDataByApp.events[0] = $scope.ubaby_h5.statisticDataByApp.events_bak;
                // delete $scope.ubaby_h5.statisticDataByApp.events_bak;
                $http.post(requestUrl, {data: JSON.stringify($scope.ubaby_h5.statisticDataByApp)}).success(function(data){
                    console.log(JSON.stringify(data));
                }).error(function(data,state){
                    console.log(data);
                })
            },
            load: function(requestUrl){
                $scope.ubaby_h5.statisticDataByApp.events_bak.eventid = "indexopen_click";
                this.ajax(requestUrl);
            },
            likeOrBoring: function(requestUrl, state){
                if (state == 1) {
                    $scope.ubaby_h5.statisticDataByApp.events_bak.eventid = "appthumbs_click";
                }else{
                    $scope.ubaby_h5.statisticDataByApp.events_bak.eventid = "appshits_click";
                }
                this.ajax(requestUrl);
            },
            wantsendbtn: function(requestUrl){
                $scope.ubaby_h5.statisticDataByApp.events_bak.eventid = "speakout_click";
                this.ajax(requestUrl);
            },
            commmentlike: function(requestUrl,id){
                $scope.ubaby_h5.statisticDataByApp.events_bak.eventid = "commentthumbs_click";
                $scope.ubaby_h5.statisticDataByApp.events_bak.commentid = id;
                this.ajax(requestUrl);
            },
            sendComment: function(requestUrl){
                $scope.ubaby_h5.statisticDataByApp.events_bak.eventid = "speaksubmit_click";
                this.ajax(requestUrl);
            }
        }
    }
    var statistic = new statistic();

    //iOS系统的移动设备中，需要在按钮元素或body/html上绑定一个touchstart事件才能激活:active状态
    document.body.addEventListener('touchstart', function () {})

    // $('.J_input').select();
    

    var fixIsoBug = function(){
        //只作用于输入框获得焦点时
        $('.J_sendbtn input').focus(function(){
            var _this = $('.J_sendbtn');
            var noInputViewHeight = $(window).height() - $(_this).height();
            var contentHeight = $(document).height() - $(_this).height();
            contentHeight = contentHeight > noInputViewHeight ? contentHeight : noInputViewHeight;

            setTimeout(function(){
                var startScrollY = $(window).scrollTop();
                var inputTopHeight = $(_this).offset().top - startScrollY;
                var inputTopPos = $(_this).offset().top + inputTopHeight;
                inputTopPos = inputTopPos > contentHeight ? contentHeight : inputTopPos;
                $(_this).css({'position':'absolute', 'top':inputTopPos });

                //给窗口对象绑定滚动事件，保证页面滚动时div能吸附软键盘
                // $(window).bind('scroll', function(){
                //     //表示此时有软键盘存在，输入框浮在页面上了
                //     if (inputTopHeight != noInputViewHeight) {
                //         //页面滑动后，输入框需跟随移动的距离
                //         var offset = $(this).scrollTop() - startScrollY;
                //         //输入框移动后位置
                //         afterScrollTopPos = inputTopPos + offset;
                //         //设置输入框位置使其紧贴输入框
                //         $(_this).css({'position':'absolute', 'top':afterScrollTopPos });
                //     }
                // });
            }, 100);
        }).blur(function(){//输入框失焦后还原初始状态
            $(".J_sendbtn").removeAttr('style');
            // $(window).unbind('scroll');
        });
    }
    
    var userAgent = navigator.userAgent.toLowerCase();
    if (userAgent.match(/iphone/i) == "iphone") {
        fixIsoBug();
    };

    var path = location.pathname.split('/').pop();
    if (path == "list") {
        $(window).scroll(function(){
        　　var scrollTop = $(this).scrollTop();
        　　var scrollHeight = $(document).height();
        　　var windowHeight = $(this).height();

        　　if(scrollTop + windowHeight == scrollHeight){
                $scope.getCommentDatas(++$scope.ubaby_h5.curpage, $scope.ubaby_h5.pagenum, 'leave_date');
        　　}
        });
    };
    
}]);