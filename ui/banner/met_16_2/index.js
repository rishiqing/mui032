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
        var $metbanner=METUI['$uicss'],
        metbanner_slide='.$uicss .slick-slide';
    if($metbanner.length){
        var img = METUI['$uicss'].find('.cover-image').eq(0);
       img.imageloadFun(function(){
            var slide = METUI['$uicss'].find('.slick-slide'),
                    bh = img.data('height').split('|');
                    for (var i = 0; i<bh.length;i++) {
                        if(bh[i]==0){
                            bh[i]='auto';
                        }
                    }
                Breakpoints.on('md lg', {
                    enter: function() {
                        METUI['$uicss'].find('.cover-image').height(bh[0]);
                    }
                })
                Breakpoints.on('sm', {
                    enter: function() {
                        METUI['$uicss'].find('.cover-image').height(bh[1]);
                    }
                })
                Breakpoints.on('xs', {
                    enter: function() {
                        METUI['$uicss'].find('.cover-image').height(bh[2]);
                    }
                })
            // 开始轮播
            var metbanner_swipe=slick_arrows=true;
            if(device_type=='d' && !Breakpoints.is('xs')) metbanner_swipe=false;
            if(Breakpoints.is('xs')) slick_arrows=false;
            if($(metbanner_slide).length>1){
                $metbanner.slick({
                    // autoplay:true,
                    dots:true,
                    arrows:slick_arrows,
                    autoplaySpeed:4000,
                    pauseOnHover:false,
                    swipe:metbanner_swipe,
                    prevArrow:'<button type="button" class="slick-prev"><i class="icon fa-angle-left"></i></button>',
                    nextArrow:'<button type="button" class="slick-next"><i class="icon fa-angle-right"></i></button>',
                    lazyloadPrevNext:true,
                    adaptiveHeight: true
                }).on('setPosition',function(event,slick){
                    $(metbanner_slide+' .banner-text').hide();
                    $(metbanner_slide+'.slick-active .banner-text').show();
                });
            }
        })
       // 图片链接点击
        var $imgLink = $metbanner.find('.img-link')
        $imgLink.click(function () {
            const href = $(this).attr('href')
            window.open(href)
        })
       // 视频播放
        var $videoModal = $metbanner.find('.play-video-modal'),
        $video = $videoModal.find('video'),
        $playBtn = $metbanner.find('.play-btn'),
        $close = $metbanner.find('.icon-close');
        $playBtn.click(function () {
            var videoSrc = $(this).attr('data-src');
            $video.attr('src', videoSrc).show();
            $videoModal.addClass('show');
            $video[0].play();
        });
        $close.click(function () {
            $videoModal.removeClass('show');
            $video.attr('src', '');
        });
    }
    }
};
var banner=metui(METUI_FUN['$uicss']);

