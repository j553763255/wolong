/**
 * Created by Administrator on 2017/8/3 0003.
 */
$(function(){
    /* 文本控制 */

    var textKz = $('.text-kz');

    textHidden(textKz,186);

    function textHidden(obj,num){
        $(obj).each(function(){
            var maxNum = num;
            if($(this).text().length > maxNum){
                $(this).text($(this).text().substring(0,maxNum));
                $(this).html($(this).html() + '...');
            }
        })
    }
    /*  集团介绍header层控制高度 */
    $('.header_h').css('height','auto');
});