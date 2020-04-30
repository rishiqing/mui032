<?php defined('IN_MET') or exit('No permission'); ?>
<tag action='category' cid="$data['classnow']" type='current'>
<?php
$ui['listhide']=explode('|', $ui['listhide']);
$ui['detailhide']=explode('|', $ui['detailhide']);
if($data['name']){
    foreach ($ui['listhide'] as $val) {
        if($val==$data['name']){
            $hide=0;
            break;
        }else{
            $hide=1;
        }
    }
}
if($data['title']){
    foreach ($ui['detailhide'] as $val) {
        if($val==$m['name']){
            $hide=0;
            break;
        }else{
            $hide=1;
        }
    }
}
?>
</tag>
<if value="$hide">
<tag action="banner.list"></tag>
<if value="$sub || $data['classnow'] eq 10001">
<div class="$uicss <if value="$data['classnow'] eq 10001">index-page</if>" data-height='' style='' m-id='{$ui.mid}' m-type='banner'>
    <tag action='banner.list' >
    <div class="slick-slide">
        <if value="$data['classnow'] eq 10001">
            <img class="cover-image" src="{$v.img_path}" srcset='{$v.img_path} 767w,{$v.img_path}' sizes="(max-width: 767px) 767px" alt="{$v.img_title}" data-height='{$v.height}|{$v.height_t}|{$v.height_m}' >
        </if>
        <if value="$v['img_title'] || $data['classnow'] eq 10001">
        <div <if value="$data['classnow'] eq 10001"><if value="$v.btn_text_1 || $v.btn_text_2"><else/>href="{$v['img_link']}"</if></if>
        class="banner-text p-{$v.img_text_position} <if value="$data['classnow'] eq 10001"><if value="$v.btn_text_1 || $v.btn_text_2"><else/>img-link</if></if>" met-imgmask>
            <div class='container'>
                <div class='banner-text-con'>
                    <div>
                        <if value="$v.img_title">
                            <h4 class="animation-slide-top font-weight-500" style="color:{$v.img_title_color}">{$v.img_title}</h4>
                        </if>
                        <if value="$v.img_des">
                            <p class="animation-slide-bottom" style='color:{$v.img_des_color}'>{$v.img_des}</p>
                        </if>
                        <tag action="category" type="current" cid="$data['classnow']">
                            <if value="$m[index_num] eq 2">
                                <form class='help' method='get' action="{$c.met_weburl}search/search.php">
                                    <input type='hidden' name='lang' value='{$data.lang}' />
                                    <input type='hidden' name='class1' value='{$data.class1}' />
                                    <div class="form-group">
                                        <div class="input-search">
                                            <button type="submit" class="input-search-btn">
                                                <i class="icon wb-search" aria-hidden="true"></i>
                                            </button>
                                            <input type="text" class="form-control help_center" name="searchword" placeholder="{$ui.placeholder}">
                                        </div>
                                    </div>
                                </form>
                            </if>
                        </tag>
                        <if value="$ui[btn_ok]">
                            <if value="$v.btn_text_1">
                                <a href="<if value="$data['classnow'] eq 10001 && $v['img_link']">{$v.img_link}<else/>{$ui.btnlink1}</if>" class="btn animation-slide-bottom first-btn <if value="$data['classnow'] eq 10001 && ($v['_index'] eq 1 || $v['_index'] eq 2)">custom-btn</if>">{$v.btn_text_1}</a>
                            </if>
                            <if value="$v.btn_text_2">
                                <a href="{$ui.btnlink1}" class="btn animation-slide-bottom first-btn">{$v.btn_text_2}</a>
                            </if>
                            <if value="$data['foldername'] eq 'wechat'">
                                <a href="<if value="$v['img_link']">{$v.img_link}<else/>{$ui.btnlink1}</if>" class="wechat-link animation-slide-bottom" target="_blank"><img class="wechat-img" src="{$v.img_path}"></a>
                            </if>
                            <if value="$data['classnow'] eq 10001 && $v[_first]">
                                <div class="btn animation-slide-bottom play-btn" data-src="{$ui.btnlink2}">
                                    <i></i>
                                </div>
                                <div class="play-video-modal">
                                    <div class="wrapper">
                                        <video controls="" ></video>
                                        <i class="icon-close" title = '点击关闭'>×</i>
                                    </div>
                                </div>
                            </if>
                        </if>
                    </div>
                </div>
            </div>
        </div>
        </if>
    </div>
    </tag>
</div>
<else/>
    <tag action='category' type="current" cid="$data['class1']">
        <div class="$uicss-ny vertical-align text-xs-{$ui.position}" m-id='{$ui.mid}' m-type='banner'>
            <div class="container">
                <h1 class="vertical-align-middle">
                <if value="$m[description]">
                    {$m.description}
                    <else/>
                    {$m.name}
                </if>
                </h1>
                <h3>{$m.namemark}</h3>
            </div>
        </div>
    </tag>
</if>
</if>