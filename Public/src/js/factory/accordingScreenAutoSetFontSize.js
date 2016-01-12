//页面的最大宽度
var originalWidth = 750;
//页面的html{font-size:***px}
var rootFontSize = getComputedStyle(document.documentElement, null).getPropertyValue("font-size").replace('px','');
//分辨率变化时等比例缩放文字和其他元素的大小
//window.devicePixelRatio  像素比
var recalc = function(){
    var clientWidth;
    var devicePixelRatio = 3;
    if (document.documentElement.clientWidth > 750) {
        clientWidth = 750;
    }else{
        clientWidth = document.documentElement.clientWidth;
    }
    document.documentElement.style.fontSize = clientWidth * devicePixelRatio / originalWidth * rootFontSize + 'px';
}
//加载页面是运行计算函数
recalc();
//当页面的大小变化时,运行计算函数
window.onresize = recalc;