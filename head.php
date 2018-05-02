<met_meta page="$met_page" />
<ui name="head_nav" style="met_16_4" id="1" />
<!-- 文章详情页 不需要引入banner-->
<!-- 简介模块中 关于我们/产品手册 需要引入 -->
<if value="!$data['page'] || $data['classnow'] eq 10001 || $data['foldername'] eq 'company' || $data['foldername'] eq 'about'">
<ui name="banner" style="met_16_2" id="2" />
</if>
