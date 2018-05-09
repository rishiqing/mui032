<met_meta page="$met_page" />
<ui name="head_nav" style="met_16_4" id="1" />
<!-- 文章详情页/服务条款/数据安全说明 不需要引入banner-->
<if value="$data['foldername'] && $data['foldername'] neq 'service' && $data['foldername'] neq 'datasafe' || $data['classnow'] eq 10001 || $data['module'] eq 6"><!-- module=6表示招聘模块 -->
<ui name="banner" style="met_16_2" id="2" />
</if>
