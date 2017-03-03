"use strict";

(function($) {
    $(document).on("ready", function() {
        var $wrap = $('#wrap');

        /* Sitemap */
        var $sitemapOpen = $('.btn-sitemap')
        var $sitemap = $('#sitemap')
        var $sitemapClose = $('.btn-close', $sitemap)
        $sitemapOpen.on('click', function(){
            $sitemap.addClass('active');
            $wrap.addClass('holding');
        });
        $sitemapClose.on('click', function(){
            $sitemap.removeClass('active');
            $wrap.removeClass('holding');
        });

        /* sub-menu */
        $('.sub-menu').each(function(){
            var $subMenu = this;
            var $btnSubMenu = $('.btn-sub-menu', $subMenu);
            var $guideAarrow = $('.guide-arrow', $btnSubMenu);
            var $menuList = $('.menu-list', $subMenu);
            var toggleText = false;
            $btnSubMenu.on('click', function(){
                $menuList.stop().slideToggle(300);
                if(toggleText == false){
                    $guideAarrow.text('업');
                    toggleText = true;
                }else{
                    $guideAarrow.text('다운');
                    toggleText = false;
                }
            });
        });

        /* User-menu */
        $('.user-info').each(function(){
            var $userInfo = this;
            var $userMenu = $('.user-menu', $userInfo);
            var $userMenuList = $('.user-menu-list', $userInfo);
            $userMenu.on('click', function(){
                $userMenuList.stop().slideToggle(300);
            });
        });

        /* Nav */
        $('#nav').each(function(){
            var $nav = this;
            var $lnb = $('.lnb', $nav);
            var $li = $('li', $lnb);
            var $ul = $('>ul', $li);
            $li.on('click','a',function(e){
                var $itsMeA = $(this);
                var $itsMeLi = $itsMeA.parent('li');

                if($itsMeA.next('ul')){
                    e.preventDefault();
                    $itsMeLi.siblings('li').removeClass('active').find('li').removeClass('active');
                    $itsMeLi.addClass('active');
                }
            });
        });





    });
})(jQuery);