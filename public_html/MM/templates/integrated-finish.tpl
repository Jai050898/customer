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
			Are you finished with your survey? <br /><br />
			If so, please click the Submit My Survey below.<br />
			Otherwise your survey will not be finished and we will not be notified until completed. <br />
			This will allow you to go back into the system and review your answers or make changes if necessary. <br />
			Once you click the button below, we will contact you shortly, but the system will complete the submission of data.			
			
			<br />
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