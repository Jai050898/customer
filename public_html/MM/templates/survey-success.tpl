{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Marketing Survey</h1>
			<div class="left_content" style="color:#2f3337;">
			
			<br /><br /><br /><br /><br />
			
			<p align="center"><span class="success">Thanks for submitting the survey. We'll review it soon.</span></p>
			
			<br /><br />
			{if $nextsurvey neq 0}
				<p align="center"><a href="questionnaire.php?cat={$ncat}"><input type="button" name="submit" value="Continue to next Survey" /></a></p>
				{/if}
			
			<br /><br />
			</div>
			<div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}