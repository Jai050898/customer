{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Integrated Survey</h1>
			<div class="left_content" style="color:#2f3337;">
			{if $Successmssage neq ""}
			
			<br /><br /><br /><br /><br />
			
			<p align="center"><span class="success">{$Successmssage}</span></p>
			
			<br /><br /><br /><br />
			
			{else}
			<p align="justify" style="padding-right:15px"><br />



			First, thank you very much for your business.<br />



			<br />



			The intent of this survey is to gather a basic outline of information, so that we can begin to understand what you are currently doing within your marketing efforts. Please fill it out as detailed as you can.  If there is any question you can't answer, please let us know during the interview process. <br /><br />



			This survey is engineered so you can add data to key areas:<br /><br />

		<ul style="list-style-type:upper-roman; padding-left:50px; padding-bottom:10px;">



				<li><a href="{$siteurl}/integrated-step1.php" style="text-decoration:none">About The Company</a></li>

				

				<li><a href="{$siteurl}/integrated-step2.php" style="text-decoration:none">Your Company History</a></li>

	

				<li><a href='{$siteurl}/integrated-step3.php'>Company Profile</a></li>				

				

				<li><a href="{$siteurl}/integrated-step4.php" style="text-decoration:none">About The Stuff</a></li>

			

				<li><a href="{$siteurl}/integrated-step5.php" style="text-decoration:none">Branding</a></li>

	

				<li><a href="{$siteurl}/integrated-step6.php" style="text-decoration:none">Policies</a></li>

	

				<li><a href="{$siteurl}/integrated-step7.php" style="text-decoration:none">Notoriety</a></li>

				

				<li><a href='{$siteurl}/integrated-step8.php'>Basic Marketing Info</a></li>



				<li><a href='{$siteurl}/integrated-step9.php'>Marketing / Advertising Opportunties</a></li>



				<li><a href='{$siteurl}/integrated-step10.php'>Customer Profile</a></li>



				<li><a href='{$siteurl}/integrated-step11.php'>Service Practices</a></li>

				

				<!--<li><a href="step12.php" style="text-decoration:none">Competitive Advantages</a></li>-->



				<li><a href='{$siteurl}/integrated-step12.php'>Marketing / Advertising Elements</a></li>



				<li><a href='{$siteurl}/integrated-step13.php'>Marketing / Advertising Leaders</a></li>

				

				<li><a href="{$siteurl}/integrated-step14.php" style="text-decoration:none">Design Items / Other Information</a></li>



			</ul>




			<br />



			The survey allows you to leave and return to complete each area.  Please make sure to click submit at the bottom to save any data you have filled within a page. Please note, if you have any difficulties, there is a Questions/Problem link in the main menu that will send us an immediate notification so we can assist.



			<br /><br />



			<strong>Finished reading instructions ?</strong> <a href='{$siteurl}/integrated-step1.php'>Click here</a> and Start filling out the form now.



			<br /><br />



			</p>
			<br />
			<p align="center">

			<form name="frmComplete" method="post">



			<div style="width:500px; height:80px; background-color:#F6F4DF; margin:auto; border:1px solid #848267; padding:10px; text-align:center">



			<b>I am finished with this survey.</b><br /><br />



			<input type="submit" value="Submit My Survey" name="btnSubmit" />



			</div>



			</form>

			</p>
			{/if}
			</div>
			<div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}