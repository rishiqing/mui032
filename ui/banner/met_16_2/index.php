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
<div class="$uicss page-bg <if value="$data['classnow'] eq 10001">index-page</if>" data-height='' style='' m-id='{$ui.mid}' m-type='banner'>
    <tag action='banner.list' >
    <div class="slick-slide">
        <!-- <img class="cover-image" src="{$v.img_path}" srcset='{$v.img_path} 767w,{$v.img_path}' sizes="(max-width: 767px) 767px" alt="{$v.img_title}" data-height='{$v.height}|{$v.height_t}|{$v.height_m}' > -->
        <if value="$v['img_title']">
        <div class="banner-text p-{$v.img_text_position}" met-imgmask>
            <div class='container'>
                <div class='banner-text-con'>
                    <div>
                        <h4 class="animation-slide-top font-weight-500" style="color:{$v.img_title_color}">{$v.img_title}</h4>
                        <p class="animation-slide-bottom" style='color:{$v.img_des_color}'>{$v.img_des}</p>
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
                            <if value="$data['classnow'] eq 10001 && $v[_first]">
                                <if value="$ui[btn1]">
                                    <a href="{$ui.btnlink1}" target="_blank" class="btn animation-slide-bottom first-btn">{$ui.btn1}</a>
                                </if>
                                <if value="$ui[btn2]">
                                    <a href="{$ui.btnlink2}" target="_blank" class="btn animation-slide-bottom second-btn">{$ui.btn2}</a>
                                </if>
                                <div class="btn animation-slide-bottom play-btn">
                                    <i></i>
                                </div>
                            </if>
                            <else/>
                            <if value="$data['classnow'] eq 10001">
                                <if value="$ui[btn1]">
                                    <a href="{$ui.btnlink1}" target="_blank" class="btn animation-slide-bottom first-btn">{$ui.btn1}</a>
                                </if>
                                <if value="$ui[btn2]">
                                    <a href="{$ui.btnlink2}" target="_blank" class="btn animation-slide-bottom second-btn">{$ui.btn2}</a>
                                </if>
                            </if>
                        </if>
                    </div>
                    <if value="$data['classnow'] eq 10001">
                    <img src="{$lang.banner_img}">
                    </if>
                </div>
            </div>
        </div>
        </if>
        <if value="$v['img_link']">
        <a href="{$v.img_link}" title="{$v.img_des}" target='_blank' class="bannera" met-imgmask></a>
        </if>
    </div>
    </tag>
    <if value="$data['classnow'] eq 10001">
    <div class="cutting-line"></div>
    </if>
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