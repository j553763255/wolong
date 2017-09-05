$(function(){
    /* 设置ul的宽 */
    var aBox = $('.con-box'),
        box = $('.con-box1'),
        aUl = box.children('ul'),
        aLi = aUl.find('li'),
        aLiW = aLi.eq(0).outerWidth(true),
        boxW = box.width(),
        iNum = 0,
        prev = $('.prev'),
        next = $('.next');
    aUl.css('width',aLi.length * aLiW);
    if((aLiW * aLi.length) < boxW){
        aUl.css({
            width : '80%',
            margin : '0 auto'
        })
    }

    //停止滚动
    aBox.hover(function(){
        clearInterval(timer);
    },function(){
        timer = setInterval(slide,3000);
    });
    //滚动
    function slide(){
        iNum++;
        if(iNum > aLi.length - 1){
            iNum = 0;
        }
        aUl.animate({
            left : -aLiW * iNum
        });
    }
    var timer = setInterval(slide,3000);
    //前一张
    prev.on('click',function(){
        if(iNum > 0){
            iNum--;
        }
        aUl.animate({
            left : -aLiW * iNum
        });
    });
    //后一张
    next.on('click',function(){
        slide();
    });
    //大图预览
    var bigShowbox = $('.big-show-box'),
        bsBox = bigShowbox.children('.big-show'),
        img1 = bsBox.find('img'),
        imgSrc1 = '',
        gb = $('.gb'),
        bInum = 0;
    aLi.on('click',function(){
        bigShowbox.show();
        bInum = $(this).index();
        //获取img的src值
        var imgSrc = $(this).find('img').attr('src');
        img1.each(function(){
            imgSrc1 = $(this).attr('src');
            if(imgSrc === imgSrc1){
                $(this).parents('li').show();
                $(this).parents('li').siblings().hide();
            }
        });
        $('html,body').css('overflow-y','hidden');
        //大图前进，后退
        var prev1 = $('.prev1'),
            next1 = $('.next1'),
            aLi1 = bsBox.find('ul').children('li');
        //后退
        prev1.on('click',function(){
            if(bInum > 0){
                bInum--;
            }else if(bInum === 0){
                bInum = aLi1.length - 1;
            }
            aLi1.eq(bInum).show().siblings().hide();
        });
        //前进
        next1.on('click',function(){
            if(bInum < aLi1.length - 1){
                bInum++;
            }else if(bInum === aLi1.length - 1){
                bInum = 0;
            }
            aLi1.eq(bInum).show().siblings().hide();
        })
    });
    //关闭大图
    gb.on('click',function(){
        bigShowbox.hide();
        $('html,body').css('overflow-y','auto');
    });
    //合作伙伴
    var section = $('.section1'),
        oH = section.children('h1'),
        oSpan = oH.children('span'),
        sectionNr = $('.section-nr');
    oSpan.eq(0).css('margin-top','-0.2rem');
    oH.on('click',function(){
        //显示当前标题下的内容隐藏其他内容
        $(this).next(sectionNr).show(500);
        $(this).parents(section).siblings().find(sectionNr).hide();
        //翻转标题中的箭头
        $(this).find(oSpan).addClass('rotate').css('margin-top','-0.2rem');
        $(this).parents(section).siblings().find(oSpan).removeClass('rotate').css('margin-top','0.5rem');
    })
});