<!DOCTYPE html>
<html ng-app="ubaby.h5">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="../../Public/dist/css/comment.min.css">
    <!-- According to the screen automatically set the font size -->
    <script src="../../Public/dist/js/factory/accordingScreenAutoSetFontSize.js"></script>
</head>
<body>
    <article class="uui-container uui-container-bg" ng-controller="ubabycommentController" ng-init="init()">
        <section class="uui-wrapper">
            <!-- like box -->
            <section class="uui-likebox J_like">
                <div class="uui-likebox-padding clearfix">
                    <a class="uui-pannel-bad" ng-bind="ubaby_h5.likeDatas.boringnum">0</a>
                    <a class="uui-pannel-good" ng-bind="ubaby_h5.likeDatas.likenum">0</a>
                    <a class="uui-pannel-vs"></a>
                    <input type="button" class="uui-btn-bad" ng-class="{badactive: ubaby_h5.likeDatas.isliked == 1, badbymeactive: ubaby_h5.likeDatas.isliked == 2}" 
                        ng-disabled="ubaby_h5.likeDatas.isliked != 0" ng-click="like(2)">
                    <input type="button" class="uui-btn-good" ng-class="{goodactive: ubaby_h5.likeDatas.isliked == 2, goodbymeactive: ubaby_h5.likeDatas.isliked == 1}" 
                        ng-disabled="ubaby_h5.likeDatas.isliked != 0" ng-click="like(1)">
                </div>
            </section>

            <!-- message -->
            <section class="uui-messagebox">
                <div class="uui-new-message">
                    <a ng-click="wantsend()" class="uui-newmessage-btn"></a>
                </div>

                <div class="uui-message-ranking">
                    <ul>
                        <li class="clearfix" ng-repeat="(key,data) in ubaby_h5.commentListDatas track by key">
                            <div class="uui-ranking-mark" ng-class="{'uui-ranking-mark7': $index>2}"><span ng-bind="$index+1"></span></div>
                            <div class="uui-message-main">
                                <div class="uui-message-header clearfix">
                                    <div class="uui-message-title">
                                        <span ng-if="data.user_role == 1" ng-init="val = '酷爸:'" ng-bind="val"></span>
                                        <span ng-if="data.user_role == 2" ng-init="val = '俏妈:'" ng-bind="val"></span>
                                        <span ng-if="data.user_role == 3" ng-init="val = '游客'" ng-bind="val"></span>
                                        <span ng-bind="data.user_nick"></span>
                                    </div>
                                    <div class="uui-message-like" ng-click="commentlike(data.isliked, $index, data._id.$id)">
                                        <span class="uui-message-likenum" ng-class="{numactive: data.isliked == 1}" ng-bind="data.likenum"></span>
                                        <span class="uui-message-likebtn" ng-class="{btnactive: data.isliked == 1}"></span>
                                    </div>
                                </div>
                                <div class="uui-message-content">
                                    <p ng-bind="data.content"></p>                                
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </section>

        </section>


        <section class="uui-list-wrapper">
            <!-- comment-list -->
            <section class="uui-comment-list">
                <ul>
                    <li ng-repeat="(key,data) in ubaby_h5.commentListDatas track by key">
                        <div class="uui-list-header">
                            <div class="uui-list-title">
                                <span ng-if="data.user_role == 1" ng-init="val = '酷爸'" ng-bind="val"></span>
                                <span ng-if="data.user_role == 2" ng-init="val = '俏妈'" ng-bind="val"></span>
                                <span ng-if="data.user_role == 3" ng-init="val = '游客'" ng-bind="val"></span>&nbsp;
                                <span ng-bind="data.user_nick"></span>
                            </div>
                            <div class="uui-list-like" ng-click="commentlike(data.isliked, $index, data._id.$id)">
                                <span class="uui-list-likenum" ng-class="{numactive: data.isliked == 1}" ng-bind="data.likenum"></span>
                                <span class="uui-list-likebtn" ng-class="{btnactive: data.isliked == 1}"></span>
                            </div>
                        </div>
                        <div class="uui-list-content">
                            <p ng-bind="data.content"></p>
                        </div>
                    </li>
                </ul>
            </section>

            <!-- send comment -->
            <section class="uui-comment-sendbox J_sendbtn">
                <div class="uui-comment-inputbox">
                    <input  type="text" ng-model="ubaby_h5.comment_content" id="J_input" placeholder="您的发言将在审核后显示，对所有人可见。" />
                </div>
                <div class="uui-comment-sendbtn">
                    <input type="button" ng-click="sendComment()" class="J_sendCommentBtn" value="发送">
                </div>
            </section>

            <!-- comment success modal -->
            <section class="uui-comment-successmodal J_comment_successmodal"></section>

            <!-- shade 遮罩 -->
            <section class="uui-shade J_shade" ng-click="closeShade()"></section>

            <!-- loading -->
            <section ng-if="ubaby_h5.isLoading" class="uui-loading">加载中...</section>
        </section>

    </article>

    <!-- script -->
    <!-- // <script src="../../Public/dist/js/modules/comment.min.js"></script> -->
    <script src="../../Public/dist/js/modules/angular.min.js"></script>
    <script src="../../Public/dist/js/modules/jquery-1.11.1.min.js"></script>
    <!-- controller -->
    <script src="../../Public/dist/js/controllers/ubabycommentController.js"></script>

    <!-- // <script src="http://172.17.11.61:8080/target/target-script-min.js#anonymous"></script> -->
</body>
</html>