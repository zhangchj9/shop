$(function(){

    // 设置文章页iframe宽度
    $('.b-article iframe').width('95%');

    // 为分页类增加响应式class
    $('.b-page .first,.num,.end').addClass('hidden-xs');
    $('.b-page .rows').addClass('hidden-xs');

    // 发送 ajax 请求时添加 headers
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // 百度自动提交
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();

})

/**
 * 传递对象；获取left值和width
 * @param  {subject}  obj   html对象
 * @param  {Boolean} change  true获取left和宽；false改变left和宽；
 * @return {subject}         获取到的left和宽
 */
function getWidthLeft(obj,change){
    var mobileLeft=obj.position().left;
    var mobileWidth=obj.width();
    var widthLeft={
        'left':mobileLeft,
        'width':mobileWidth
    }
    if(!change){
        return widthLeft;
    }
    $('.b-nav-mobile').stop().animate({'left':mobileLeft,'width':mobileWidth}, 300);
}
