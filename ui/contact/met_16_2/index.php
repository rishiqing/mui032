<?php defined('IN_MET') or exit('No permission'); ?>
<div class="$uicss met-index-body bgcolor" m-id='{$ui.mid}' m-type='nocontent'>
    <div class="img-container">
        <div class="container text-xs-center">
            <h2 class="title invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false">{$ui.title}</h2>
            <!-- <p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">{$ui.desc}</p> -->
            <div class="btn animation-slide-bottom second-btn">
                <i></i>
            </div>
            <if value="$ui[type]">
                <div class="form text-xs-left" m-id='noset' m-type='feedback'>
                    <tag action="feedback.form" cid="$ui[id]"></tag>
                </div>
                <else/>
                    <a href="{$ui.btnlink}" title="{$ui.btntext}" target="_blank" class="btn btn-primary about_link">{$ui.btntext}</a>
            </if>
        </div>
    </div>
</div>