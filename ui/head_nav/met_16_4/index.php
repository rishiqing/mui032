<?php defined('IN_MET') or exit('No permission'); ?>
<if value="$ui['navfixed_ok']">
<tag action="banner.list"></tag>
<body class="met-navfixed <if value="$data[classnow] neq 10001 && !$sub">ny-nobanner <else/>ny-banner </if>">
</if>
<if value="$ui['navfixed_ok']">
<header class='met-head navbar-fixed-top' m-id='{$ui.mid}' m-type='head_nav' met-imgmask>
<else/>
<header class='met-head' m-id='{$ui.mid}' m-type='head_nav'>
</if>
    <nav class="navbar navbar-default box-shadow-none $uicss">
        <div class="container">
            <div class="row">
                <h1 hidden>{$c.met_webname}</h1>
                <!-- logo -->
                <div class="navbar-header pull-xs-left">
                    <a href="{$c.index_url}" class="met-logo vertical-align block pull-xs-left p-y-5" title="{$c.met_webname}">
                        <div class="vertical-align-middle">
                            <img src="{$c.met_logo}" alt="{$c.met_webname}" class="logo">
                            <img src="{$ui.logo}" alt="{$c.met_webname}" class="logo1  hidden">
                        </div>
                    </a>
                    <a href="{$lang.ding_url}" class="met-ding-logo vertical-align block pull-xs-left p-y-5" title="{$lang.met_dingname}" target="_blank">
                        <div class="vertical-align-middle">
                            <img src="{$ui.server_logo}" alt="{$lang.met_dingname}" class="logo">
                            <img src="{$ui.server_logo}" alt="{$lang.met_dingname}" class="logo1  hidden">
                        </div>
                    </a>
                </div>
                <!-- logo -->
                <button type="button" class="navbar-toggler hamburger hamburger-close collapsed p-x-5 $uicss-toggler" data-target="#$uicss-collapse" data-toggle="collapse">
                    <span class="sr-only"></span>
                    <span class="hamburger-bar"></span>
                </button>
                <!-- 会员注册登录 -->
                <if value="$c[met_member_register]&&$ui[member]">
                <button type="button" class="navbar-toggler collapsed m-0 p-x-5 met-head-user-toggler" data-target="#met-head-user-collapse" data-toggle="collapse"> <i class="icon wb-user-circle" aria-hidden="true"></i> <i class="icon wb-user" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse navbar-collapse-toolbar pull-md-right p-0" id='met-head-user-collapse' m-id='member' m-type='member'>
                <if value="$user">
                    <if value="$c['shopv2_open']">
                        <ul class="navbar-nav vertical-align p-l-0 m-b-0 met-head-user met-head-shop" m-id="member" m-type="member">
                            <li class="dropdown inline-block text-xs-center vertical-align-middle animation-slide-top">
                                <a
                                    href="javascript:;"
                                    class="navbar-avatar dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                <span class="avatar m-r-5"><img src="{$user.head}" alt="{$user.username}"/></span>
                                    {$user.username}
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right animate" role="menu">
                                    <li role="presentation">
                                        <a href="{$url.shop_profile}" class="dropdown-item" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> {$word.app_shop_personal}</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="{$url.shop_order}" class="dropdown-item" role="menuitem"><i class="icon wb-order" aria-hidden="true"></i> {$word.app_shop_myorder}</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="{$url.shop_favorite}" class="dropdown-item" role="menuitem"><i class="icon wb-heart" aria-hidden="true"></i> {$word.app_shop_myfavorite}</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="{$url.shop_discount}" class="dropdown-item" role="menuitem"><i class="icon wb-bookmark" aria-hidden="true"></i> {$word.app_shop_mydiscount}</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="{$url.shop_member_base}&nojump=1" class="dropdown-item" target="_blank" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> {$word.app_shop_settings}</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="{$url.shop_member_login_out}" class="dropdown-item" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> {$word.app_shop_out}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown inline-block shop_cart text-xs-center vertical-align-middle animation-slide-top">
                                <a
                                    href="javascript:void(0)"
                                    title="{$word.app_shop_cart}"
                                    data-toggle="dropdown"
                                    aria-expanded="false"
                                    data-animation="slide-bottom10"
                                    role="button"
                                >
                                    <i class="icon wb-shopping-cart" aria-hidden="true"></i>
                                    {$word.app_shop_cart}
                                    <span class="badge badge-danger up hide topcart-goodnum"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media topcartremove animation-slide-bottom10" role="menu">
                                    <li class="dropdown-menu-header">
                                        <h5>{$word.app_shop_cart}</h5>
                                        <span class="label label-round label-danger">{$word.app_shop_intotal} <span class="topcart-goodnum"></span> {$word.app_shop_piece}{$word.app_shop_commodity}</span>
                                    </li>
                                    <li class="list-group dropdown-scrollable" role="presentation">
                                        <div data-role="container">
                                            <div data-role="content" id="topcart-body"></div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu-footer" role="presentation">
                                        <div class="dropdown-menu-footer-btn">
                                            <a href="{$url.shop_cart}" class="btn btn-squared btn-danger margin-bottom-5 margin-right-10">{$word.app_shop_gosettlement}</a>
                                        </div>
                                        <span class="red-600 font-size-18 topcarttotal"></span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <else/>
                        <ul class="navbar-nav vertical-align p-l-0 m-b-0 met-head-user" m-id="member" m-type="member">
                            <li class="dropdown text-xs-center vertical-align-middle animation-slide-top">
                                <a
                                    href="javascript:;"
                                    class="navbar-avatar dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                <span class="avatar m-r-5"><img src="{$user.head}" alt="{$user.username}"/></span>
                                    {$user.username}
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right animate">
                                    <li role="presentation">
                                        <a href="{$c.met_weburl}member/basic.php?lang={$_M[lang]}" class="dropdown-item" title='{$word.memberIndex9}' role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> {$word.memberIndex9}</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="{$c.met_weburl}member/basic.php?lang={$_M[lang]}&a=dosafety" class="dropdown-item" title='{$word.accsafe}' role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i> {$word.accsafe}</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="{$c.met_weburl}member/login.php?lang={$_M[lang]}&a=dologout" class="dropdown-item" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> {$word.memberIndex10}</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </if>
                    <else/>
                    <ul class="navbar-nav vertical-align p-l-0 m-b-0 met-head-user" m-id="member" m-type="member">
                        <li class=" text-xs-center vertical-align-middle animation-slide-top">
                            <a href="{$c.met_weburl}member/login.php?lang={$_M[lang]}" class="btn btn-squared btn-primary btn-outline m-r-10">{$word.login}</a>
                            <a href="{$c.met_weburl}member/register_include.php?lang={$_M[lang]}" class="btn btn-squared btn-success">{$word.register}</a>
                        </li>
                    </ul>
                </if>
                </div>
                </if>

                <!-- 会员注册登录 -->

                <!-- 导航 -->
                <div class="collapse navbar-collapse navbar-collapse-toolbar pull-md-right p-0" id="$uicss-collapse">
                    <ul class="nav navbar-nav navlist">
                        <!-- <li class='nav-item'>
                            <a href="{$c.index_url}" title="{$word.home}" class="nav-link
                            <if value="$data['classnow'] eq 10001">
                            active
                            </if>
                            ">{$word.home}</a>
                        </li> -->
                        <tag action='category' type='head' class='active' hide="$ui['hide']">
                        <?php
                            $nav=explode('|', $ui[onenavlink]);
                            foreach ($nav as $value) {
                                if($value && strcmp($value, $m[name]) < -1){
                                    $m[url]='';
                                }
                            }
                            $navDropdownHide=explode('|', $ui[hide]);
                            foreach ($navDropdownHide as $value) {
                                if ($value) {
                                    if(strcmp($value, $m[name]) < -1){
                                        $m['sub']=0;
                                    }
                                }
                            }
                        ?>
                        <if value="$ui['navdropdown_ok'] && $m['sub']">
                        <li class="nav-item dropdown m-l-{$ui.nav_ml}">
                            <if value="$ui['navdropdown_type']">
                            <a
                                href="{$m.url}"
                                {$m.urlnew}
                                title="{$m.name}"
                                class="nav-link dropdown-toggle {$m.class}"
                                data-toggle="dropdown" data-hover="dropdown"
                            >
                            <else/>
                            <a
                                href="{$m.url}"
                                {$m.urlnew}
                                title="{$m.name}"
                                class="nav-link dropdown-toggle {$m.class}"
                                data-toggle="dropdown"
                            >
                            </if>
                            {$m.name}</a>
                            <if value="$ui['navbullet_ok']">
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-bullet two-menu">
                            <else/>
                            <div class="dropdown-menu dropdown-menu-right animate two-menu">
                            </if>
                                <if value="$m[module] neq 1">
                                <a href="{$m.url}" {$m.urlnew} title="{$ui.all}" class='dropdown-item nav-parent hidden-lg-up'>{$ui.all}</a>
                                </if>
                                <tag action='category' cid="$m['id']" type='son' class='active'>
                                <if value="$m['sub'] && $ui[threemenuok]">
                                <div class="dropdown-submenu border-top1 <if value='!$ui[navbullet_ok]'>animate</if>">
                                    <a href="{$m.url}" {$m.urlnew} class="dropdown-item {$m.class}">{$m.name}</a>
                                    <div class="dropdown-menu <if value='!$ui[navbullet_ok]'>animate</if>">
                                        <tag action='category' cid="$m['id']" type='son' class='active'>
                                            <a href="{$m.url}" {$m.urlnew} class="dropdown-item border-top1 {$m.class}" >{$m.name}</a>
                                        </tag>
                                    </div>
                                </div>
                                <else/>
                                <if value="$m['sub']">
                                    <?php
                                        $urlnew = $m['urlnew'];
                                        $name = $m['name'];
                                        $class = $m['class'];
                                    ?>
                                    <tag action='category' cid="$m['id']" type='son'>
                                    <if value="$m['_index'] eq 0">
                                    <?php $firstSubUrl = $m['url']; ?>
                                    </if>
                                    </tag>
                                    <a href="<?php echo $firstSubUrl; ?>" <?php echo $urlnew.'title='.$name.'" class="dropdown-item border-top1 hassub "'.$class.'>'.$name.'</a>'; ?>
                                <else/>
                                <a href="{$m.url}" {$m.urlnew} title="{$m.name}" class='dropdown-item border-top1 hassub {$m.class}'>{$m.name}</a>
                                </if>
                                </if>
                                </tag>
                            </div>
                        </li>
                        <else/>
                        <li class='nav-item m-l-{$ui.nav_ml}'>
                            <a href="{$m.url}" {$m.urlnew} title="{$m.name}" class="nav-link {$m.class}">{$m.name}</a>
                        </li>
                        </if>
                        </tag>
                        <if value="$c['met_ch_lang'] && $ui['simplified']">
                            <if value="$data[lang] eq cn">
                                <li class="met-langlist met-s2t nav-item vertical-align nav-item m-l-5" m-id="lang" m-type="lang">
                                <div class="inline-block nav-link">
                                    <button type="button" class="btn btn-outline btn-default btn-squared btn-lang btn-cntotc" data-tolang='tc'>繁体</button>
                                    <elseif value="$data[lang] eq tc"/>
                                    <button type="button" class="btn btn-outline btn-default btn-squared btn-lang btn-cntotc"  data-tolang='cn'>简体</button>
                                </div>
                            </li>
                            </if>
                        </if>
                        <lang></lang>
                        <if value="$sub gt 1">
                            <if value="$c['met_lang_mark'] && $ui[lang_ok]">
                                <li class="met-langlist nav-item vertical-align" m-id='lang' m-type='lang'>
                                    <div class="inline-block dropdown nav-link">
                                        <lang>
                                        <if value="$data['lang'] eq $v['mark']">
                                        <button type="button" data-toggle="dropdown" class="btn btn-outline btn-default btn-squared dropdown-toggle btn-lang">
                                            <if value="$ui['langlist_icon_ok']">
                                            <span class="flag-icon flag-icon-{$v.iconname}"></span>
                                            </if>
                                            <span >{$v.name}</span>
                                        </button>
                                        </if>
                                        </lang>
                                        <div class="dropdown-menu dropdown-menu-right animate animate-reverse" id="met-langlist-dropdown" role="menu">
                                            <lang>
                                            <a href="{$v.met_weburl}" title="{$v.name}" class='dropdown-item'>
                                                <if value="$ui['langlist_icon_ok']">
                                                <span class="flag-icon flag-icon-{$v.iconname}"></span>
                                                </if>
                                                {$v.name}
                                            </a>
                                            </lang>
                                        </div>
                                    </div>
                                </li>
                            </if>
                        </if>
                    </ul>
                </div>
                <!-- 导航 -->
            </div>
        </div>
    </nav>
</header>