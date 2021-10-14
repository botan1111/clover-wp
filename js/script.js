//ハンバーガー

jQuery(function () {
    jQuery(".js-hamburger_btn").click(function () {
        jQuery('.js-hamburger_btn').toggleClass('active')
        jQuery('.js-hamburger').toggleClass('active')
        jQuery('body').toggleClass('fixed')

    });
});

jQuery(function () {
    jQuery('.js-hamburger_link').click(function () {
        jQuery('.js-hamburger_btn').toggleClass('active')
        jQuery('.js-hamburger').removeClass('active')
        jQuery('.js-hamburger_link').removeClass('active')
        jQuery('body').removeClass('fixed')
    });
});

//スムーススクロール

jQuery(function(){
    jQuery('a[href^="#"]').click(function(){
        var header = jQuery(".l-header").innerHeight();  //headerの高さを定義
        var speed = 600;
        var href= jQuery(this).attr("href");
        var target = jQuery(href == "#" || href == "" ? 'html' : href);　
        var position = target.offset().top - header;  
        jQuery("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});


//トップへ戻るボタン

jQuery('.js-top').hide();
    jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 300) {  //スクロールしたら現れる
        jQuery('.js-top').fadeIn();
        } else {
        jQuery('.js-top').fadeOut();
    }
});

jQuery('.js-top').click(function () {
    jQuery('body,html').animate({
    scrollTop: 0
    }, 700);
    return false;
});