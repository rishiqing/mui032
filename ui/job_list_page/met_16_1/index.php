<?php defined('IN_MET') or exit('No permission'); ?>
<main class="$uicss page-content" m-id='{$ui.mid}'>
<div class="container">
    <div class="row">
        <div class="job-list">
            <div class="row">
            <tag action='job.list' num="$c['met_job_list']"></tag>
            <if value="$sub">
            <div class="met-job-list met-pager-ajax" >
            	<include file='ui_ajax/job'/>
            </div>
            <div class='m-t-20 text-xs-center hidden-sm-down' m-type="nosysdata">
                <pager/>
            </div>
            <div class="met_pager met-pager-ajax-link hidden-md-up" m-type="nosysdata">
                <button type="button" class="btn btn-primary btn-block btn-squared ladda-button" id="met-pager-btn" data-plugin="ladda" data-style="slide-left" data-url="" data-page="1">
                    <i class="icon wb-chevron-down m-r-5" aria-hidden="true"></i>
                </button>
            </div>
            <else/>
            <div class='h-100 text-xs-center font-size-20 vertical-align' >{$ui.nodata}</div>
            </if>
            </div>
			</div>
		</div>
	</div>
<!-- <if value="$sub">
<div class="modal fade modal-primary" id="met-job-cv" aria-hidden="true" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title">{$ui.cvtitle}</h4>
			</div>
			<div class="modal-body">
				<tag action='job.form'></tag>
			</div>
		</div>
	</div>
</div>
</if> -->
</main>
