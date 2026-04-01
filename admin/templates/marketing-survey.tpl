{include file="header.tpl"}
<div id="bodypart">
      <div id="mainbody">
		<div id="contentpane">
			{include file="right-bar.tpl"}
		<div id="innerleft">
			<div class="admin-rightpart">
				<div class="admin_topbgnav">
					  <div id="admin_bcrumb">
						  <ul>
							  <li><a href="{$siteurl}/dashboard.php">Home</a></li>
							  <li>Marketing Survey</li>
						  </ul>
						<div class="clr"></div>
					  </div>
					  <div id="admin_head"> Marketing Survey</div>
				  </div>
				  
				<div class="ad_textsp">
					 <p align="justify" style="padding-right:15px"><br />

					First, thank you very much for your business.<br />
		
					<br />
		
					The intent of this survey is to gather a basic outline of information, so that we can begin to understand what you are currently doing within your marketing efforts. Please fill it out as detailed as you can.  If there is any question you can't answer, please let us know during the interview process. <br /><br />
		
					This survey is engineered so you can add data to key areas:<br /><br />
					<ul style="list-style-type:upper-roman; padding-left:50px; padding-bottom:10px;">
			
						<li><a href='{$siteurl}/admin/step1.php?id={$smarty.request.user_id}'>Basic Marketing Information page</a></li>
		
						<li><a href='{$siteurl}/admin/step2.php?id={$smarty.request.user_id}'>Business Profile</a></li>
		
						<li><a href='{$siteurl}/admin/step3.php?id={$smarty.request.user_id}'>Marketing / Advertising Opportunties</a></li>
		
						<li><a href='{$siteurl}/admin/step4.php?id={$smarty.request.user_id}'>Customer Profile</a></li>
		
						<li><a href='{$siteurl}/admin/step5.php?id={$smarty.request.user_id}'>Service Practices</a></li>
		
						<li><a href='{$siteurl}/admin/step6.php?id={$smarty.request.user_id}'>Marketing / Advertising Elements</a></li>
		
						<li><a href='{$siteurl}/admin/step7.php?id={$smarty.request.user_id}'>Marketing / Advertising Leaders</a></li>
			
					</ul>
		
					<br />
		
					The survey allows you to leave and return to complete each area.  Please make sure to click submit at the bottom to save any data you have filled within a page. Please note, if you have any difficulties, there is a Questions/Problem link in the main menu that will send us an immediate notification so we can assist.
		
					<br /><br />
		
					<strong>Finished reading instructions ?</strong> <a href='{$siteurl}/admin/step1.php?id={$smarty.request.user_id}'>Click here</a> and Start filling out the form now.
		
					<br /><br />
		
					</p>
				  <!--end of middle part -->
				  <!--end of right part -->
				  <div class="clr"></div>
				</div>
				<!--end of contentpane -->
			</div>
		</div>
	</div>
	</div>
</div>
{include file="footer.tpl"}