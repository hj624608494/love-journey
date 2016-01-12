//get data by app 
var oDataByApp;
var getDataByApp = function(){
    try{
        oDataByApp = JSON.parse(JavaScriptInterface.userProperties());
    }catch(e){
        console.log(e);
    }
}();
// alert(decodeURIComponent(oDataByApp.user_nick));

/**
 * [likebox component]
 * @return {[type]}   [description]
 */
Vue.component('likebox', {
    // 声明 props
    props: ['likeNum', 'boringNum','isLiked'],
    // prop 可以用在模板内
    // 可以用 `this.likeNum` 设置
    template: '<section class="uui-likebox J_like">
                    <div class="uui-likebox-padding">
                        <a class="uui-pannel-bad">{{boringNum}}</a>
                        <a class="uui-pannel-good">{{likeNum}}</a>
                        <a class="uui-pannel-vs"></a>
                        <input type="button" class="uui-btn-bad" 
                        v-bind:class="{badactive: isLiked == 1, badbymeactive: isLiked == 2}" 
                        v-bind:disabled="!!parseInt(isLiked)" v-on:click="like(2)" >

                        <input type="button" class="uui-btn-good" 
                        v-bind:class="{goodactive: isLiked == 2, goodbymeactive: isLiked == 1}" 
                        v-bind:disabled="!!parseInt(isLiked)" v-on:click="like(1)" >
                    </div>
                </section>',
    methods: {
        ready: function (){
            var postData = { 
                user_nick: decodeURIComponent(oDataByApp.user_nick),
                channel: oDataByApp.channel, 
                baby_timestamp: oDataByApp.baby_timestamp, 
                version: oDataByApp.version, 
                user_id: oDataByApp.user_id,
                user_role: oDataByApp.user_role,
                device_id: oDataByApp.device_id,
                network: oDataByApp.network
            };
            $.ajax({
                type: 'POST',
                url: '/index.php/index/load',
                data: postData,
                dataType: 'json',
                timeout: 300,
                success: function(data){
                    alert(data);
                    if (data.ret == true) {
                        this.likeNum = data.result.likenum;
                        this.boringNum = data.result.boringnum;
                        this.isLiked = data.result.isliked;
                    }else{
                        alert(data.msg);
                    }
                },
                error: function(xhr, type){
                    alert('post user data error');
                }
            })
        }(),
        like: function(state){
            console.log(state);
            var postData = { 
                device_id: oDataByApp.device_id,
                channel: oDataByApp.channel, 
                network: oDataByApp.network, 
                baby_timestamp: oDataByApp.baby_timestamp, 
                version: oDataByApp.version, 
                likestatue: state 
            };
            $.ajax({
                type: 'POST',
                url: '/index.php/index/like',
                data: postData,
                dataType: 'json',
                timeout: 300,
                success: function(data){
                    alert(data);
                    this.isLiked = state;
                    if (state == 1) {
                        this.likeNum++;
                    }else{
                        this.boringNum++;
                    }
                },
                error: function(xhr, type){
                    alert('like error')
                }
            })
        }
    }
})

/**
 * [wantsendbtn component]
 * @return {[type]}   [description]
 */
Vue.component('wantsendbtn', {
    template: '<div class="uui-new-message">
                    <a v-on:click="wantsend()" class="uui-newmessage-btn"></a>
                </div>',
    methods: {
        wantsend: function(){
            //点击我要留言
            localStorage.setItem('isClickWantSendBtn', true);
            location.href = "/index.php/index/list";
        }
    }
})

/**
 * [messageranking component]
 * @return {[type]}   [description]
 */
Vue.component('messageranking', {
    data: function () {
        $.ajax({
            type: 'POST',
            url: '/index.php/index/ranking',
            data: {},
            dataType: 'json',
            timeout: 300,
            success: function(data){
                alert(data);
            },
            error: function(xhr, type){
                alert('get ranking list datas error!')
            }
        })
        var datatest = [
            {
              "name": "task 1",
              "likenum": 101,
              "content": "this is the body of the taskasdasdasdasdsadas",
              "isliked": 1
            },
            {
              "name": "task 2",
              "likenum": 99,
              "content": "this is the body of the task",
              "isliked": 0
            },
            {
              "name": "task 3",
              "likenum": 88,
              "content": "this is the body of the task",
              "isliked": 1
            },
            {
              "name": "task 4",
              "likenum": 20,
              "content": "this is the body of the task",
              "isliked": 0
            }
        ];
        return { listdatas: datatest }
    },
    template: '<div class="uui-message-ranking">
                    <ul>
                        <li v-for="data in listdatas">
                            <div class="uui-ranking-mark"><span>{{$index+1}}</span></div>
                            <div class="uui-message-main">
                                <div class="uui-message-header">
                                    <div class="uui-message-title">{{data.name}}</div>
                                    <div class="uui-message-like" v-on:click="commentlike(data.isliked, $index)">
                                        <span class="uui-message-likenum" v-bind:class="{numactive: parseInt(data.isliked)}">{{data.likenum}}</span>
                                        <span class="uui-message-likebtn" v-bind:class="{btnactive: parseInt(data.isliked)}"></span>
                                    </div>
                                </div>
                                <div class="uui-message-content">
                                    <p>{{data.content}}</p>                                
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>',
    methods: {
        commentlike: function(isLiked, index){
            console.log(index);

            if (!isLiked) {
                var postData = { 
                    device_id: oDataByApp.device_id,
                    channel: oDataByApp.channel, 
                    network: oDataByApp.network, 
                    baby_timestamp: oDataByApp.baby_timestamp, 
                    version: oDataByApp.version, 
                    comment_id: state 
                };
                $.ajax({
                    type: 'POST',
                    url: '/index.php/index/listlike',
                    data: postData,
                    dataType: 'json',
                    timeout: 300,
                    success: function(data){
                        alert(data);
                    },
                    error: function(xhr, type){
                        alert('Ajax error!')
                    }
                })

                this.listdatas[index].isliked = 1;
                this.listdatas[index].likenum = ++this.listdatas[index].likenum;
            }else{
                alert('您已点赞');
                return false;
            }
        }
    }
})

/**
 * [commentlist component page: list]
 * @return {[type]}   [description]
 */
Vue.component('commentlist', {
    data: function () {
        $.ajax({
            type: 'POST',
            url: '/index.php/index/listdata',
            data: {},
            dataType: 'json',
            timeout: 300,
            success: function(data){
                alert(data);
            },
            error: function(xhr, type){
                alert('Ajax error!')
            }
        })
        var datatest = [
            {
              "name": "task 1",
              "likenum": 101,
              "content": "this is the body of the task",
              "isliked": 1
            },
            {
              "name": "task 2",
              "likenum": 99,
              "content": "this is the body of the task",
              "isliked": 0
            },
            {
              "name": "task 3",
              "likenum": 88,
              "content": "this is the body of the task",
              "isliked": 1
            },
            {
              "name": "task 4",
              "likenum": 20,
              "content": "this is the body of the task",
              "isliked": 0
            }
        ];
        return { listdatas: datatest }
    },
    template: '<section class="uui-comment-list">
                    <ul>
                        <li v-for="data in listdatas">
                            <div class="uui-list-header">
                                <div class="uui-list-title">{{data.name}}</div>
                                <div class="uui-list-like" v-on:click="commentlike(data.isliked, $index)">
                                    <span class="uui-list-likenum" v-bind:class="{numactive: parseInt(data.isliked)}">{{data.likenum}}</span>
                                    <span class="uui-list-likebtn" v-bind:class="{btnactive: parseInt(data.isliked)}"></span>
                                </div>
                            </div>
                            <div class="uui-list-content">
                                <p>{{data.content}}</p>
                            </div>
                        </li>
                    </ul>
                </section>',
    methods: {
        commentlike: function(isLiked, index){
            console.log(index);

            if (!isLiked) {
                var postData = { 
                    device_id: oDataByApp.device_id,
                    channel: oDataByApp.channel, 
                    network: oDataByApp.network, 
                    baby_timestamp: oDataByApp.baby_timestamp, 
                    version: oDataByApp.version, 
                    comment_id: isliked 
                };
                $.ajax({
                    type: 'POST',
                    url: '/index.php/index/listlike',
                    data: postData,
                    dataType: 'json',
                    timeout: 300,
                    success: function(data){
                        alert(data);
                    },
                    error: function(xhr, type){
                        alert('Ajax error!')
                    }
                })

                this.listdatas[index].isliked = 1;
                this.listdatas[index].likenum = ++this.listdatas[index].likenum;
            }else{
                alert('您已点赞');
                return false;
            }
        }
    }
})


/**
 * [commentsend component page: list]
 * @return {[type]}   [description]
 */
Vue.component('commentsend', {
    template: '<section class="uui-comment-sendbox">
                    <div class="uui-comment-inputbox">
                        <input id="J_comment_input" v-model="content" type="text" placeholder="您的发言将在审核后显示，对所有人可见。" />
                    </div>
                    <div class="uui-comment-sendbtn">
                        <a v-on:click="sendComment()">发送</a>
                    </div>
                </section>',
    methods: {
        ready: function(){
            //获取用户点击 [我要发言] 按钮的标识
            var isClickWantSendBtn = localStorage.getItem('isClickWantSendBtn');
            console.log(isClickWantSendBtn);
            if (isClickWantSendBtn) {
                $('.J_shade').show();
                localStorage.removeItem('isClickWantSendBtn');
            };
        }(),
        sendComment: function(){
            console.log(this.content);

            var postData = { 
                device_id: oDataByApp.device_id,
                channel: oDataByApp.channel, 
                network: oDataByApp.network, 
                baby_timestamp: oDataByApp.baby_timestamp, 
                version: oDataByApp.version, 
                content: this.content 
            };

            $.ajax({
                type: 'POST',
                url: '/index.php/index/sendcomment',
                data: postData,
                dataType: 'json',
                timeout: 300,
                success: function(data){
                    alert(data.result);
                    if (data.ret == true) {
                        $('.J_shade').show();
                        $('.J_comment_successmodal').show();
                        setTimeout(function(){
                            window.history.go(0);
                        },2000)
                    }else{
                        alert(data.msg);
                    }
                },
                error: function(xhr, type){
                    alert('Ajax error!')
                }
            })
        }
    }
})

new Vue({
    el: 'body'
})


// new Vue({

//     ready: function() {

//       // GET request
//       this.$http.get('/index.php/index/getdata?id=11', function (data, status, request) {

//           alert(data);

//       }).error(function (data, status, request) {
//           // handle error
//       })

//     }()

// })