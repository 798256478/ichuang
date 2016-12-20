/**
 * Created by shenzhaoke on 2016/4/7.
 */
$(document).ready(
    function () {
        //顶部悬浮
        var fixedTop = $('#fixed').offset().top;

        $(window).scroll(function () {


            if ($('#fixed').offset().top <= $(document).scrollTop()) {
                $('#fixed').addClass('fixed');
                $('#hot-list').addClass('hot-list-fixed');

            }
            if ($(document).scrollTop() <= fixedTop) {
                $('#fixed').removeClass('fixed');
                $('#hot-list').removeClass('hot-list-fixed');

            }
        });
        //顶部悬浮完


        //底部自动加载
        var number = 1;
        var messageNum = 0;
        var t;
        ////自动加载其他分类的标志
        //function addNum() {
        //    messageNum++;
        //}
        ////点击时自动加载
        //$('#more').on('click',function(){
        //    //if (messageNum) {
        //    //    otherAutoload();
        //    //} else if(window.location.pathname.indexOf('message') < 0){
        //    //    easyAutoload();
        //    //}else {
        //    //    messageAutoload();
        //    //}
        //
        //    t && clearTimeout(t);
        //    t=setTimeout(judgeAutoload(),100);
        //});
        ////滚动自动加载事件
        ////console.log(window.location.pathname.indexOf('message'));
        //
        //$(window).scroll(function () {
        //    t && clearTimeout(t);
        //    t=setTimeout(autoload,100);
        //
        //    }
        //);
        ////判断那个分类的自动加载
        ////function judgeAutoload(){
        ////    if (window.location.pathname.indexOf('message') >= 0) {
        ////        if (!messageNum) {
        ////            autoload();
        ////        } else {
        ////            autoload();
        ////
        ////        }
        ////    } else {
        ////        autoload();
        ////    }
        ////}
        //function autoload() {
        //
        //        var scrollTop = $(this).scrollTop();
        //        var scrollHeight = $(document).height();
        //        var windowHeight = $(this).height();
        //        //console.log($('#no-more').length);
        //        //console.log(scrollTop + windowHeight);
        //        //console.log( windowHeight);
        //        //console.log(scrollHeight);
        //
        //
        //        if (!$('#no-more').length) {
        //            if (scrollTop + windowHeight >= scrollHeight) {
        //                //console.log(1);
        //                judgeAutoload();
        //                //$(this).request('onScroll');
        //            }
        //        }
        //
        //}
        ////判断加载哪一分类
        //function judgeAutoload(){
        //    if (messageNum) {
        //        otherAutoload();
        //    } else if(window.location.pathname.indexOf('message') < 0){
        //        easyAutoload();
        //    }else {
        //        messageAutoload();
        //    }
        //}
        ////单一分类自动加载

        ////最新资讯自身加载
        //function messageAutoload() {
        //    number++;
        //    $(this).request('onScroll',
        //        {
        //            data: {number: number},
        //            update: {'posts/default': '@#autoload'},
        //            complete: function () {
        //
        //                if ($('#no-more').length) {
        //                    addNum();
        //                    $('#no-more').remove();
        //                    otherAutoload();
        //                }
        //            }
        //        }
        //    );
        //
        //}
        ////最新资讯加载其他
        //function otherAutoload() {
        //    $(this).request('onScroll',
        //        {
        //            data: {number: messageNum},
        //            update: {'posts/all': '@#autoload'},
        //            complete: function () {
        //
        //                if ($('#no-more').length) {
        //                    $('#more').remove();
        //                    $('#no-more').attr('display', 'block');
        //
        //                }
        //            }
        //
        //        }
        //    );
        //    addNum();
        //
        //
        //}
        $(window).scroll(function () {
                t && clearTimeout(t);
                t = setTimeout(autoload, 100);

            }
        );
        $('#more').on('click',function(){
            //if (messageNum) {
            //    otherAutoload();
            //} else if(window.location.pathname.indexOf('message') < 0){
            //    easyAutoload();
            //}else {
            //    messageAutoload();
            //}

            t && clearTimeout(t);
            t=setTimeout(easyAutoload(),100);
        });
        function autoload() {

            var scrollTop = $(this).scrollTop();
            var scrollHeight = $(document).height();
            var windowHeight = $(this).height();
            //console.log($('#no-more').length);
            //console.log(scrollTop + windowHeight);
            //console.log( windowHeight);
            //console.log(scrollHeight);


            if (!$('#no-more').length) {
                if (scrollTop + windowHeight >= scrollHeight-1) {
                    //console.log(1);

                    easyAutoload();
                    //$(this).request('onScroll');
                }
            }

        }

        function easyAutoload() {
            number++;
            if (window.location.pathname.indexOf('message')>=0){

                $(this).request('onScroll',
                    {
                        data: {number: number},
                        update: {'posts/default': '@#autoload'},
                        complete: function () {

                            if ($('#no-more').length) {

                                $('#more').remove();
                            }
                        }

                    });
            }else{
                console.log(2);
                $(this).request('onScroll',
                    {
                        data: {number: number},
                        update: {'posts/all': '@#autoload'},
                        complete: function () {

                            if ($('#no-more').length) {

                                $('#more').remove();
                            }
                        }

                    });
            }


        }

//底部自动加载完
//var articleImgs=$('.one-article-img ');
//console.log(articleImgs[0]);
//for(var i=0;i<articleImgs.length;i++){
//    console.log(articleImgs['i'].children('img'));
//
//}
//$('.one-article-img img:first').addClass('img-show');
    }
)
;