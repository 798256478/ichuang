/**
 * Created by shenzhaoke on 2016/4/8.
 */
$(document).ready(
    

    function () {
        

        //底部自动加载
        var number = 1;
        var t;
        $(window).scroll(function () {
            
            t && clearTimeout(t);
            t=setTimeout(autoLoad,100);

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
            t=setTimeout(easyAutoload,100);
        });
        function autoLoad(){
            var scrollTop = $(this).scrollTop();
            var scrollHeight = $(document).height();
            var windowHeight = $(this).height();

            if (!$('#no-more').length) {
                if (scrollTop + windowHeight >= scrollHeight-1) {
                    
                    //console.log(1);
                    easyAutoload();
                    //$(this).request('onScroll');
                }
            }
        }
        function easyAutoload(){
            number++;
            $(this).request('onScroll',
                {
                    data: {number: number},
                    update: {'posts::indexList': '@#autoload'},
                    complete: function () {

                        if ($('#no-more').length) {

                            $('#more').remove();
                        }
                    }
                }
            );
        }
        //底部自动加载完

        //顶部悬浮
        var fixedTop=$('#fixed-header').offset().top;

        $(window).scroll(function(){
            if($('#fixed-header').offset().top<=$(document).scrollTop()){
                $('#fixed-header').addClass('fixed-header');
                $('#fixed-header').css('height','87px');
            }
            if($(document).scrollTop()<=fixedTop){
                $('#fixed-header').removeClass('fixed-header');
            }
        });
        //顶部悬浮完
    }



);