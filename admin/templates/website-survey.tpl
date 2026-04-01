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
							  <li>Website Survey</li>
						  </ul>
						<div class="clr"></div>
					  </div>
					  <div id="admin_head"> Website Survey</div>
				  </div>
				  
				<div class="ad_textsp">
					 <p align="justify" style="padding-right:15px"><br />

		First, thank you very much for your business.<br />

		<br />

		The intent of this survey is to gather information regarding your business so that we may develop and design a website that represents your business reputation. There are also some questions to get a feel for what type/style of website design will work best. Please fill it out as detailed as you can.  If there is any question you can't answer, please let us know at <a href='mailto:info@motorheadmarketing.com'>info@motorheadmarketing.com</a><br /><br />

		This survey is engineered so you can add data to key areas:<br /><br />
		
		<ul style="list-style-type:upper-roman; padding-left:50px; padding-bottom:10px;">

			<li><a href="{$siteurl}/admin/companyDetail.php?id={$smarty.request.user_id}" style="text-decoration:none">About The Company</a></li>

			<li><a href="{$siteurl}/admin/history.php?id={$smarty.request.user_id}" style="text-decoration:none">Your Business History</a></li>

			<li><a href="{$siteurl}/admin/stuff.php?id={$smarty.request.user_id}" style="text-decoration:none">About The Stuff</a></li>

			<li><a href="{$siteurl}/admin/branding.php?id={$smarty.request.user_id}" style="text-decoration:none">Branding</a></li>

			<li><a href="{$siteurl}/admin/policy.php?id={$smarty.request.user_id}" style="text-decoration:none">Policies</a></li>

			<li><a href="{$siteurl}/admin/notoriety.php?id={$smarty.request.user_id}" style="text-decoration:none">Notoriety</a></li>

			<li><a href="{$siteurl}/admin/services.php?id={$smarty.request.user_id}" style="text-decoration:none">Services</a></li>

			<li><a href="{$siteurl}/admin/competitiveAdvantages.php?id={$smarty.request.user_id}" style="text-decoration:none">Competitive Advantages</a></li>

			<li><a href="{$siteurl}/admin/marketing.php?id={$smarty.request.user_id}" style="text-decoration:none">Marketing / Advertising</a></li>

			<li><a href="{$siteurl}/admin/other.php?id={$smarty.request.user_id}" style="text-decoration:none">Design Items / Other Information</a></li>

		</ul>		

		<br />

		The survey allows you to leave and return to complete each area.  Please make sure to click submit at the bottom to save any data you have filled within a page. Please note, if you have any difficulties, there is a Questions/Problem link in the main menu that will send us an immediate notification so we can assist.

		<br /><br />

		<strong>Finished reading instructions ?</strong> <a href='{$siteurl}/admin/companyDetail.php?id={$smarty.request.user_id}' class="new_link">Click here</a> and Start filling out the form now.

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