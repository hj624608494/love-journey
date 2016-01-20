/**
 * [util js Simple Util Package]
 * @return {[type]} [description]
 */
window.util = function(){
    return {
        /**
         * [alertHint 迷你提示框]
         * @param  {[type]} msg  [提示信息]
         * @param  {[type]} time [提示时间]
         * @return {[type]}      [description]
         */
        alertHint: function(msg, time){
            var oHint = document.createElement('div');
            oHint.className = 'alertHint';
            oHint.innerHTML = msg;
            document.body.appendChild(oHint);

            var h = oHint.offsetHeight;
            var w = oHint.offsetWidth;

            oHint.style.left = "50%";
            oHint.style.top = "50%";
            oHint.style.marginTop = -(h/2)+'px';
            oHint.style.marginLeft = -(w/2)+'px';
            oHint.style.opacity = 1;

            setTimeout(function(){
                oHint.style.opacity = 0;
            },time ?  time : 2000);
        },

        /**
         * 获取url参数
         * @param  {[type]} name [参数name]
         * @return {[type]}      [返回参数name对应值]
         */
        getParams: function(name){
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
            if (r != null) return unescape(r[2]); return null;
        },

        /**
         * [unique 数组去重]
         * @return {[type]} [返回去重后的数组]
         */
        unique: function(arr) {
            var _this = arr;
            var n = [];
            var m = [];

            for(var i = 0; i < _this.length; i++){ 
                if (m.indexOf(_this[i]) == -1){
                    n.push(_this[i]);
                    m.push(_this[i]);
                } 
            }
            return n; 
        },

        /**
         * [format 时间戳格式化 将时间戳转换为 时分秒]
         * @param {[type]} timeStamp [必选 时间戳]
         */
        format: function(timeStamp){
            var oTime = {};
            var time = timeStamp/1000;

            if (null != time && "" != time) {
                if (time > 60 && time < 60 * 60) {
                    oTime.hour = '00';
                    oTime.minute = parseInt(time / 60.0)
                    oTime.second = parseInt((parseFloat(time / 60.0) - parseInt(time / 60.0)) * 60);
                } else if (time >= 60 * 60) {
                    oTime.hour = parseInt(time / 3600.0);
                    oTime.minute = parseInt((parseFloat(time / 3600.0) - parseInt(time / 3600.0)) * 60);
                    oTime.second = parseInt((parseFloat((parseFloat(time / 3600.0) - parseInt(time / 3600.0)) * 60) -
                                   parseInt((parseFloat(time / 3600.0) - parseInt(time / 3600.0)) * 60)) * 60);
                }else{
                    oTime.hour = '00';
                    oTime.minute = '00';
                    oTime.second = parseInt(time);
                }
            }

            return oTime;
        },

        /**
         * [countDown 倒计时]
         * @param  {[type]} timeStamp [必选 倒计时开始时间戳-只传此参数则返回当前时间到开始时间的时间段倒计时]
         * @return {[type]}                [description]
         */
        countDown: function(timeStamp){
            var difftime;
            var curT = +new Date();
            var countDown = {};

            difftime = timeStamp - curT;

            if (difftime > 0) {
                countDown = this.format(difftime);
            }else{
                countDown.hour = '00';
                countDown.minute = '00';
                countDown.second = '00';
            }
            return countDown;
        },

        /**
         * [fillZero 填充0]
         * @param  {[type]} str [必选 不足两位前面填充一个0]
         * @return {[type]} [description]
         */
        fillZero: function(str){
            var oStr;
            if (!isNaN(parseInt(str)) && str.toString().length == 1) {
                oStr = '0' + str;
            }else{
                oStr = str;
            }

            return oStr;
        },

        /**
         * [switchPageScroll 阻止/开启 页面滚动]
         * @param  {[type]} state [boolen 阻止(true) 开启(false)]
         * @return {[type]}       [description]
         */
        switchPageScroll: function(state){
            if (state) {
                document.body.style.overflow='hidden';
                document.body.addEventListener('touchmove', function (event) {
                    event.preventDefault();
                }, false);
            }else{
                document.body.style.overflow='auto';
                document.removeEventListener('touchmove', function (event) {
                    event.preventDefault();
                    if(event && event.preventDefault){
                        window.event.returnValue = false;
                    }
                }, false);
            }
        }
    }

}
//实例化util
var util = new util();
