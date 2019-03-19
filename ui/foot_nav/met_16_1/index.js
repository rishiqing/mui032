/*own.js*/
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
    init: function () {
        $('body').append('<script class="online-consult" id="zhichiScript" src="https://www.sobot.com/chat/frame/js/entrance.js?sysNum=be665cd83af74ad39b48fc78a4d0d9d9" data-args="manual=true" async></script>');
        var timeThread = 500;
        const self = this;
        var initZhiManager = function () {
            if (window.getzhiSDKInstance) {
                const browserInfo = self.getClient().browser;
                const systemInfo = self.getClient().system;
                // 初始化智齿咨询组件实例
                const zhiManager = (window.getzhiSDKInstance());
                zhiManager.set('color', '4C8DCD');  // 取值为0-9a-f共六位16进制字符[主题色] | 默认取后台设置的颜色
                zhiManager.set('customBtn', 'true'); // true[自定义按钮]  false[使用系统默认咨询按钮] | 默认为系统咨询按钮
                zhiManager.set('customMargin', 4); // 自定义按钮后悬浮窗水平间距
                // 对接用户身份、预留字段、自定义字段
                const obj = {
                  customField1: '', // 用户id
                  customField2: '', // 公司id
                  customField3: '', // 行业
                  customField5: '', // 公司人数
                  customField6: '', // 公司活跃率
                  customField7: '', // 付费信息
                  customField8: '', // 付费类型
                  customField9: 'Web', // 平台
                  customField10: browserInfo.type + browserInfo[browserInfo.type], // 浏览器及其版本信息版本
                  customField11: '', // app版本，移动端需要传这个
                  customField12: systemInfo.type + systemInfo[systemInfo.type], // 操作系统
                  customField13: '', // 姓名
                  customField14: '', // 手机
                  customField15: '', // 账号
                  customField16: '未知', // 城市
                  customField17: '', // 普通客户/vip客户
                  customField18: '' // 公司名称
                };
                const objStr = JSON.stringify(obj);
                zhiManager.set('customerFields', window.encodeURIComponent(objStr));
                // 调用load方法
                zhiManager.on('load', () => {
                  zhiManager.initBtnDOM();
                });
            } else {
              setTimeout(initZhiManager, timeThread);  
            }
        };
        setTimeout(initZhiManager, timeThread);
    },
    getClient:function () {
        // 浏览器引擎
        var engine = {
          ie: 0,
          gecko: 0,
          webkit: 0,
          khtml: 0,
          opera: 0,
          type: null,
          ver: null
        };
        // 浏览器
        var browser = {
          ie: 0,
          edge: 0,
          firefox: 0,
          safari: 0,
          konq: 0,
          opera: 0,
          chrome: 0,
          type: null,
          ver: null
        };
        // platform/device/OS
        var system = {
          win: false,
          mac: false,
          x11: false,
          winPhone: false,
          winMobile: false,
          iphone: false,
          ipod: false,
          ipad: false,
          ios: false,
          android: false,
          nokiaN: false,
          type: null
        };
        var ua = navigator.userAgent;
        if (window.opera) {
          engine.opera = browser.opera = window.opera.version();
          browser.type = 'opera';
          engine.type = 'opera';
        } else if (/AppleWebKit\/(\S+)/.test(ua)) {
          engine.type = 'webkit';
          engine.webkit = RegExp.$1;
          if (/OPR\/(\S+)/.test(ua)) {// 首先排除opera，由于在新版本中使用了webkit内核
            browser.type = 'opera';
            browser.opera = RegExp.$1;
          } else if (/Edge\/(\S+)/.test(ua)) {
            browser.type = 'edge';
            browser.edge = RegExp.$1;
          } else if (/Chrome\/(\S+)/.test(ua)) {
            browser.type = 'chrome';
            browser.chrome = RegExp.$1;
          } else if (/Version\/(\S+)/.test(ua)) {
            browser.type = 'safari';
            browser.safari = RegExp.$1;
          } else {
            let safariVersion = 1;
            if (engine.webkit < 100) {
              safariVersion = 1;
            } else if (engine.webkit < 312) {
              safariVersion = 1.2;
            } else if (engine.webkit < 412) {
              safariVersion = 1.3;
            } else {
              safariVersion = 2;
            }
            browser.type = 'safari';
            browser.safari = safariVersion;
          }
        } else if (/KHTML\/(\S+)/.test(ua) || /Konqueror\/([^;]+)/.test(ua)) {
          engine.type = 'khtml';
          engine.khtml = browser.konq = RegExp.$1;
        } else if (/rv:([^\)]+)\) Gecko\/(\d{8}|\S+)/.test(ua)) {
          engine.type = 'gecko';
          engine.gecko = RegExp.$1;

          // 看看是不是firefox
          if (/Firefox\/(\S+)/.test(ua)) {
            browser.type = 'firefox';
            browser.firefox = RegExp.$1;
          }
        } else if (/MSIE ([^;]+)/.test(ua)) {
          engine.type = browser.type = 'ie';
          engine.ie = browser.ie = RegExp.$1;
        } else if (/Trident\/([^;]+)/.test(ua)) {
          if (/rv:([^\)]+)\)/.test(ua)) {
            engine.type = browser.type = 'ie';
            engine.ie = browser.ie = RegExp.$1;
          }
        }

        const p = navigator.platform;
        system.win = p.indexOf('Win') === 0;
        system.x11 = p === 'X11';
        system.mac = p.indexOf('Mac') === 0;

        if (system.win) {
          system.type = 'win';
          // detect windows operating systems
          if (/Win(?:dows )?([^do]{2})\s?(\d+\.\d+)?/.test(ua)) {
            if (RegExp.$1 === 'NT') {
              switch (RegExp.$2) {
                case '5.0':
                  system.win = '2000';
                  break;
                case '5.1':
                  system.win = 'XP';
                  break;
                case '6.0':
                  system.win = 'Vista';
                  break;
                case '6.1':
                  system.win = '7';
                  break;
                case '6.2':
                  system.win = '8';
                  break;
                case '6.3':
                  system.win = '8.1';
                  break;
                default:
                  system.win = 'NT';
                  break;
              }
            } else if (RegExp.$1 === '9x') {
              system.win = 'ME';
            } else if (RegExp.$1 === 'Ph') {
              system.type = 'winPhone';
              if (/Windows Phone OS (\d+.\d+)/.test(ua) || /Windows Phone (\d+.\d+)/.test(ua)) {
                system.winPhone = RegExp.$1;
              }
            } else {
              system.win = RegExp.$1;
            }
          }

          // windows mobile
          if (system.win === 'CE') {
            system.winMobile = system.win;
          } else if (system.win === 'Ph') {
            if (/Windows Phone OS (\d+.\d+)/.test(ua)) {
              system.type = 'winMobile';
              system.winMobile = RegExp.$1;
            }
          }
        } else if (system.x11 || p.indexOf('Linux') === 0) {
          system.type = 'x11';

          // determine android version
          if (/Android (\d+\.\d+)/.test(ua)) {
            system.type = 'android';
            system.android = RegExp.$1;
          }
        } else if (system.mac) {
          system.type = 'mac';
          // mobile devices
          system.iphone = ua.indexOf('iPhone') > -1;
          system.ipod = ua.indexOf('iPod') > -1;
          system.ipad = ua.indexOf('iPad') > -1;
          if (system.iphone) {
            system.type = 'iphone';
          } else if (system.ipod) {
            system.type = 'ipod';
          } else if (system.ipad) {
            system.type = 'ipad';
          }
          // determine iOS version
          if (system.mac && ua.indexOf('Mobile') > -1) {
            if (/CPU (?:iPhone )?OS (\d+_\d+)/.test(ua)) {
              system.ios = parseFloat(RegExp.$1.replace('_', '.'));
            } else {
              system.ios = 2;// 不准确
            }
          }
        }
        // 处理一些特殊情况
        system.nokiaN = ua.indexOf('NokiaN') > -1;
        if (system.nokiaN) {
          system.type = 'nokiaN';
        } else if (/Android; Mobile/.test(ua)) {
          system.type = 'android';
          system.android = 'Not detect';
        }
        return {
            engine: engine,
            browser: browser,
            system: system
        }
    },
    weixin:function (){
        // 底部微信
        if($('#met-weixin').length){
            var $met_weixin=$('#met-weixin');
            Breakpoints.on('xs',{
                enter:function(){
                    if($met_weixin.offset().left < 80) $met_weixin.attr({'data-placement':'right'});
                    if($(window).width()-$met_weixin.offset().left-$met_weixin.outerWidth() < 80) $met_weixin.attr({'data-placement':'left'});
                }
            })
            if($met_weixin.data('trigger')=='click'){
                $met_weixin.mouseup(function(){
                    $(this).click();
                });
            }
        }
    },
    mnav:function(){
        // 底部导航手机端处理
        var navl=METUI['$uicss'].find('.mob-masonry .masonry-item'),
            mob_masonry=METUI['$uicss'].find('.mob-masonry');
        if(navl.length){
            Breakpoints.get('xs').on({
                enter:function(){
                    mob_masonry.masonry({itemSelector:".masonry-item"});
                }
            });
        }
    }
};
var x = new metui(METUI_FUN['$uicss']);