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
                    <if value="$data['foldername'] neq 'ding'">
                    <a href="{$ui.server1_link}" class="met-qywx-logo vertical-align block pull-xs-left p-y-5" title="{$ui.server1_name}" <if value="$ui['server1_link']">target="_blank"</if>>
                        <div class="vertical-align-middle">
                            <img src="{$ui.server1_logo}" alt="{$ui.server1_name}" class="logo">
                            <img src="{$ui.server1_logo}" alt="{$ui.server1_name}" class="logo1  hidden">
                        </div>
                    </a>
                    </if>
                    <if value="$data['foldername'] neq 'wechat'">
                    <a href="{$ui.server2_link}" class="met-ding-logo vertical-align block pull-xs-left p-y-5" title="{$ui.server2_name}" <if value="$ui['server2_link']">target="_blank"</if>>
                        <div class="vertical-align-middle">
                            <img src="{$ui.server2_logo}" alt="{$ui.server2_name}" class="logo">
                            <img src="{$ui.server2_logo}" alt="{$ui.server2_name}" class="logo1  hidden">
                        </div>
                    </a>
                    </if>
                    <a href="https://app.feishu.cn/app/cli_9f7ccafbeb2f900e" class="met-lark-logo vertical-align block pull-xs-left p-y-5" title="飞书" target="_blank">
                        <div class="vertical-align-middle">
                            <img src="data:image/png;base64,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" alt="飞书" class="logo">
                            <img src="data:image/png;base64,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" alt="飞书" class="logo1  hidden">
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
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
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
                                <ul class="dropdown-menu dropdown-menu-right">
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
                    <?php 
                        $user_info = $GLOBALS['RISHIQING_USER_INFO'];
                        $success = $user_info -> success;
                        $isBackNewVersion = $user_info -> isBackNewVersion;
                        $userId = $user_info -> id;
                        $hasAvatar = $user_info -> hasAvatar;
                        $realName = '姓名';
                        $avatarUrl = 'https://images.timetask.cn/avatar/_large_avatar1.png';
                        $isNewDefaultAvatar = false;
                        if ($isBackNewVersion) {
                            $realName = $user_info -> personRealName;
                            if ($hasAvatar) {
                                $avatarUrl = $user_info -> avatar;
                            } else {
                                $isNewDefaultAvatar = true;
                            }
                        } else {
                            $realName = $user_info -> realName;
                            if ($hasAvatar) {
                                $avatarUrl = 'https://rishiqing-avatar.oss-cn-beijing.aliyuncs.com/_middle_avatar'.$userId.'.png';
                            }
                        }
                    ?>
                    <if value="$success">
                    <div class="login-avatar">
                        <img class="user-image <if value="$isNewDefaultAvatar">new-default-avatar</if>" src="{$avatarUrl}">
                        <div class="user-name">{$realName}</div>
                    </div>
                    <else />
                    <ul class="navbar-nav vertical-align p-l-0 m-b-0 met-head-user" m-id="member" m-type="member">
                        <li class=" text-xs-center vertical-align-middle animation-slide-top">
                            <a href="{$ui.login_link}" class="btn btn-squared btn-primary btn-outline m-r-10">{$word.login}</a>
                            <a href="{$ui.register_link}" class="btn btn-squared btn-success">{$word.register}</a>
                        </li>
                    </ul>
                    </if>
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
                        <tag action='category' type='head' class='active'>
                        <?php
                            $sub_menu = 1;
                            // 如果禁止头部导航跳转，那么把$m[url]给置空
                            if ($m[disable_header_nav_jump] == '1') {
                                $m[url]='';
                            }
                            if ($m[disable_header_nav_menu] == '1') {
                                // $m['sub']=0;
                                $sub_menu=0;
                            }
                        ?>
                        <if value="$ui['navdropdown_ok'] && $sub_menu">
                        <li class="nav-item dropdown m-l-{$ui.nav_ml}">
                            <if value="$ui['navdropdown_type']">
                            <a
                                <if value="$m.url">
                                href="{$m.url}"
                                <else/>
                                href="javascript:;"
                                </if>
                                {$m.urlnew}
                                title="{$m.name}"
                                class="nav-link dropdown-toggle {$m.class}"
                                data-toggle="dropdown" data-hover="dropdown"
                            >
                            <else/>
                            <a
                                <if value="$m.url">
                                href="{$m.url}"
                                <else/>
                                href="javascript:;"
                                </if>
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
                            <div class="dropdown-menu dropdown-menu-right two-menu">
                            </if>
                                <if value="$m[module] neq 1">
                                <a 
                                    <if value="$m.url">
                                    href="{$m.url}"
                                    <else/>
                                    href="javascript:;"
                                    </if>
                                    {$m.urlnew}
                                    title="{$ui.all}"
                                    class='dropdown-item nav-parent hidden-lg-up'>{$ui.all}</a>
                                </if>
                                <tag action='category' cid="$m['id']" type='son' class='active'>
                                <if value="$m['sub'] && $ui[threemenuok]">
                                <div class="dropdown-submenu border-top1">
                                    <a 
                                        <if value="$m.url">
                                        href="{$m.url}"
                                        <else/>
                                        href="javascript:;"
                                        </if>
                                        {$m.urlnew}
                                        class="dropdown-item {$m.class}">{$m.name}</a>
                                    <div class="dropdown-menu">
                                        <tag action='category' cid="$m['id']" type='son' class='active'>
                                            <a 
                                                <if value="$m.url">
                                                href="{$m.url}"
                                                <else/>
                                                href="javascript:;"
                                                </if>
                                                {$m.urlnew}
                                                class="dropdown-item border-top1 {$m.class}" >{$m.name}</a>
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
                                <a 
                                    <if value="$m.url">
                                    href="{$m.url}"
                                    <else/>
                                    href="javascript:;"
                                    </if>
                                    {$m.urlnew}
                                    title="{$m.name}"
                                    class='dropdown-item border-top1 hassub {$m.class}'>{$m.name}</a>
                                </if>
                                </if>
                                </tag>
                            </div>
                        </li>
                        <else/>
                        <li class='<if value="$m['_index'] eq 0">first-nav</if> nav-item m-l-{$ui.nav_ml} '>
                            <a 
                                <if value="$m.url">
                                href="{$m.url}"
                                <else/>
                                href="javascript:;"
                                </if>
                                {$m.urlnew}
                                title="{$m.name}"
                                class="nav-link {$m.class}">{$m.name}</a>
                            <if value="$m['_index'] eq 0">
                                <img class="first-nav-image" src="{$m['indeximg']}">
                            </if>
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
                                        <div class="dropdown-menu dropdown-menu-right" id="met-langlist-dropdown" role="menu">
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