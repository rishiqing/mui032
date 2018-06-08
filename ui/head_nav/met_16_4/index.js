/*!
 * M['weburl']      网站网址
 * M['lang']        网站语言
 * M['tem']         模板目录路径
 * M['classnow']    当前栏目ID
 * M['id']          当前页面ID
 * M['module']      当前页面所属模块
 * default_placeholder 开发者自定义默认图片延迟加载方式，'base64'：灰色背景；自定义背景图片路径；'blur'：图片高斯模糊；默认为'blur'
 * met_prevarrow,met_nextarrow slick插件翻页按钮自定义html
 * device_type       客户端判断（d：PC端，t：平板端，m：手机端）
 */
METUI_FUN['$uicss'] = {
    name:'$uicss',
    init: function() {
        var wh=$(window).height(),
        $metnav_fixed=$(".met-head.navbar-fixed-top .$uicss"),
        $metnav_lang=METUI['$uicss'].find('.met-langlist'),
        $metnav_member=METUI['$uicss'].find('.navbar-toggler'),
        $met_navlist=METUI['$uicss'].find('.navlist'),
        $logo=METUI['$uicss'].find('.logo'),
        $logo1=METUI['$uicss'].find('.logo1');
        // 头部固定模式
        if($metnav_fixed.length){
        // 头部阴影
            var metnavShadow=function(){
                    if($(window).width()<767){
                        if($metnav_fixed.offset().top>1){
                            $metnav_fixed.addClass("navbar-shadow");
                        }else{
                            $metnav_fixed.removeClass("navbar-shadow");
                        }
                    }else{
                        if($metnav_fixed.offset().top>35){
                            $metnav_fixed.addClass("navbar-shadow");
                            $("#tophead").slideUp(150);
                            if(M['classnow']=="10001" || $("body").hasClass('ny-banner')){
                                $logo1.removeClass('hidden');
                                $logo.addClass('hidden');
                            }
                        }else{
                            $metnav_fixed.removeClass("navbar-shadow");
                            $("#tophead").slideDown(150);
                            if(M['classnow']=="10001" || $("body").hasClass('ny-banner')){
                                $logo1.addClass('hidden');
                                $logo.removeClass('hidden');
                            }
                        }
                    }
                };
            metnavShadow();
            $(window).scroll(function(){
                metnavShadow();
            });
            // 导航下拉菜单手机端最大高度
            $metnav_fixed.find('.navbar-collapse').css({'max-height':wh-$metnav_fixed.height()});
            if(device_type!='m'){
                // 下拉菜单二级栏目过多时三级栏目展示在二级栏目下面
                var $met_navlist_dropdown=$met_navlist.find('.dropdown'),
                    dropdownMaxh=function(dom){
                        if(!dom.hasClass('oya')){
                            setTimeout(function(){
                                var mh=wh-$metnav_fixed.height();
                                if(dom.outerHeight()>mh) dom.outerHeight(mh).addClass('oya scrollbar-beautify').find('.dropdown-menu').addClass('block box-shadow-none').prev('.dropdown-item').addClass('dropdown-a');
                            },0)
                        }
                    };
                //鼠标经过展开下拉菜单
                $met_navlist_dropdown.find('>.dropdown-toggle[data-hover]').parent('.dropdown').mouseover(function() {
                    dropdownMaxh($('>.dropdown-menu',this));
                });
                // 鼠标点击展开下拉菜单
                $met_navlist_dropdown.find('>.dropdown-toggle:not([data-hover])').one('click',function() {
                    dropdownMaxh($(this).next('.dropdown-menu'));
                });
            }
            // 下拉菜单背景遮罩
            $metnav_fixed.find('.navbar-toggler').click(function() {
                if(!$('.met-mask').length) $('body').append('<div class="met-mask"></div>');
                if($($(this).data('target')).is(':visible')){
                    $('body').removeClass('cover');
                    $('.met-mask').fadeOut();
                }else if(!$('body').hasClass('cover')){
                    $('body').addClass('cover');
                    $('.met-mask').fadeIn();
                }
            });
            $(document).on('click','.met-mask',function() {
                $('body').removeClass('cover');
                $('.met-mask').fadeOut();
                $metnav_fixed.find('.navbar-collapse').collapse('hide');
            });
        }

        if($met_navlist.length){
            // 导航点击跳转处理
            $met_navlist.find('.nav-link').click(function(){
                if(device_type=='d' && !Breakpoints.is('xs') && $(this).data("hover")){
                    if($(this).attr('target')=='_blank'){
                        window.open($(this).attr('href'));
                    }else{
                        location=$(this).attr('href');
                    }
                }
                $met_navlist.find('.nav-link').removeClass('active');
                $(this).addClass('active');
            });
            // 导航下拉菜单三级栏目展开处理
            if(device_type=='d'){
                if($met_navlist.find('.dropdown-submenu').length){
                    $met_navlist.find('.dropdown-submenu').hover(function(){
                        $(this).parent('.dropdown-menu').addClass('overflow-visible');
                    },function(){
                        $(this).parent('.dropdown-menu').removeClass('overflow-visible');
                    });
                }
            }else{
                if($met_navlist.find('.dropdown-submenu').length){
                    setTimeout(function(){
                        $met_navlist.find('.dropdown-submenu .dropdown-menu').addClass('block box-shadow-none').prev('.dropdown-item').addClass('dropdown-a');
                    },0)
                }
            }
            // 导航顶级栏目过多时换行处理
            var met_navlist_position=function(){
                if(!Breakpoints.is('xs') && $met_navlist.position().top>20){
                    $met_navlist.addClass('flex').parent().addClass('flex-navlist');
                    if($('body').hasClass('met-navfixed')) $('body').addClass('met-navfixed-navclamp');
                }else{
                    $met_navlist.removeClass('flex').parent().removeClass('flex-navlist');
                    if($('body').hasClass('met-navfixed')) $('body').removeClass('met-navfixed-navclamp');
                }
            };
            met_navlist_position();
            $(window).resize(function(){
                met_navlist_position();
            });
        }
        // 手机端头部会员中心与导航下拉菜单切换
        $metnav_member.click(function() {
            $(this).toggleClass('active');
            $(this).siblings('.navbar-toggler').removeClass('active');
            var $other_collapse=$($(this).siblings('.navbar-toggler').data('target'));
            if($other_collapse.hasClass('in')) $other_collapse.collapse('hide');
        });
        // 头部语言栏
        if($metnav_lang.length){
            // 语言栏弹窗模式处理
            $(document).on('show.bs.modal', '#met-langlist-modal', function(event) {
                $('.met-nav').addClass('header-zindex');
            });
            $(document).on('hidden.bs.modal', '#met-langlist-modal', function(event) {
                $('.met-nav').removeClass('header-zindex');
            });
        }
        // 处理导航过长
        if($('.two-menu').length){
            var twoh=$(".two-menu").height(),
                wh=$(window).height();
            if(twoh>=wh){
                $('.two-menu').mousewheel(function(event,delta,deltaX,deltaY){
                    var dY=Math.ceil( $(this).position().top-deltaY*-120 );
                    if(dY>0) dY=0;
                    $(this).css({'transform':'translateY('+dY+'px)','transition':'0s'});
                    event.stopPropagation();
                    event.preventDefault();
                }).mouseleave(function(){
                    $(this).removeAttr('style');
                });
            }
        }
        if (!document.referrer) {
            var result = {},
            cookies = document.cookie ? document.cookie.split('; ') : [];
            for (var i= 0; i < cookies.length; i++) {
                var parts = cookies[i].split('=');
                result[parts[0]] = parts[1];
            }
            var userEmail = decodeURIComponent(result['userEmail']);
            var pwd = decodeURIComponent(result['pwd']);
            $.ajax({
                url: "/task/j_spring_security_check",
                type: 'POST',
                data: {
                  j_username: userEmail,
                  j_password: pwd
                },
                success : function () {
                    location.href = '/app';
                }
            });
        }
    },
    cntotc:function(){
            //简体繁体互换
            var b=$('.btn-cntotc');
        b.on('click', function(event) {
             var lang=$(this).attr('data-tolang');
  
         if (lang=='tc') {
            $('body').s2t();
            $(this).attr('data-tolang', 'cn');
            $(this).text('简体');
         } else if(lang=='cn') {
            $('body').t2s();
            $(this).attr('data-tolang', 'tc');
            $(this).text('繁體');
         }
      });
    }
};
var x = new metui(METUI_FUN['$uicss']);