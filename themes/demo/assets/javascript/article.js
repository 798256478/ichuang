/**
 * Created by shenzhaoke on 2016/4/11.
 */
$(document).ready(
    function(){
        //顶部悬浮
        var fixedTop=$('#fixed-header').offset().top;

        $(window).scroll(function(){


            if($('#fixed-header').offset().top<=$(document).scrollTop()){
                $('#fixed-header').addClass('fixed-header');

            }
            if($(document).scrollTop()<=fixedTop){
                $('#fixed-header').removeClass('fixed-header');

            }
        });
        //顶部悬浮完
    }
);