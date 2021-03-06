<?php defined('IN_MET') or exit('No permission'); ?>
<main class="$uicss met-shownews animsition">
	<div class="container">
		<div class="row">
		<if value="$ui[has][sidebar]">			
			<div class="col-md-9 met-shownews-body" m-id='{$ui.mid}'>
			<else/>
			<div class="met-shownews-body" m-id='{$ui.mid}'>
		</if>
				<div class="row">
					<section class="details-title">
						<h1 class='m-t-10 m-b-5 text-xs-center'>{$data.title}</h1>
						<!-- <div class="info font-weight-300">
							<span>{$data.updatetime}</span>
							<span>{$data.issue}</span>
							<span>
								<i class="icon wb-eye m-r-5" aria-hidden="true"></i>
								{$data.hits}
							</span>
						</div> -->
					</section>
					<section class="met-editor clearfix">
						{$data.content}
					</section>
					<!-- <div class="tag">
						<span>{$data.tagname}</span>
						<list data="$data[taglist]" name="$tag" num="$ui[tag_num]">
							<a href="{$tag.url}" title="{$tag.name}">{$tag.name}</a>
						</list>
					</div> -->
					<pagination/>
				</div>
			</div>
<if value="!$ui[has][sidebar]">	
		</div>
	</div>
</main>
</if>