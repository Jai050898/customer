{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			
			<div style="height:10px;"></div>
			<h1>Integrated Survey </h1>
			<form name="frmOthers" id="frmOthers" method="post" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step14.php">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Design Items / Other Information</u></h2>
				<table width="100%" border="0" cellspacing="1" cellpadding="5" >
				  <tr>

					<td align="center" colspan="3">&nbsp;</td>

				  </tr>

				  {if $Errormssage}

				  <tr>

					<td align="center" colspan="3"><span class="error">{$Errormssage}</span>																	</td>

				  </tr>

				  <tr>

					<td align="center" colspan="3">&nbsp;																	</td>

				  </tr>

				  {/if}

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Are there any special tips or educational information you offer, or can offer your customers ? <span class="infoText">(These would be items that could be added to your website, or other marketing materials. If you have any, please give us details.)</span><br />



					<textarea name="SpecialTips" rows="3" cols="50" class="form">{$otherInfo.SpecialTips}</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				   <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you have any website statistics or reports such as google analytics ?

<br />



					<input type="text" name="ReportForGoogle" maxlength="150" size="50" value="{$otherInfo.ReportForGoogle}" class="form"/>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you collect email addresses from your customers ? <br />



					{html_options name='CollectEmailAddress' options=$arrayYesNo selected=$otherInfo.CollectEmailAddress}

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" valign="top" style="padding-bottom:10px">

					Please checkmark the styles that best represent your company. <br />

					<p style="padding-left:25px">

					{html_checkboxes name="CompanyStyles" options=$companyStyles selected=$stylesSelected separator="<br />"}</p>

					

					<td colspan="2">&nbsp;</td>

				  </tr>

				   <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Are there any specific colors, or color matching that your marketing is desired to match / blend with ?

<br />



					<input type="text" name="SpecificColor" maxlength="240" size="50" value="{$otherInfo.SpecificColor}" class="form"/>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you prefer illustrations or photos?

<br />



					<input type="text" name="PreferIllustration" maxlength="240" size="50" value="{$otherInfo.PreferIllustration}" class="form"/>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				   <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">If possible, please list a couple of websites that you like and what features about them you like.

<br />



					<textarea name="WebSiteYouLike" rows="3" cols="50" class="form">{$otherInfo.WebSiteYouLike}</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">List what words that would describe how you would explain the layout/design of your site.<br />

<span class="infoText">(Example: retro, hot rod, vintage, Modern, high end, Fleet, RV, etc.)</span> 

<br />



					<textarea name="WordsDescribe" rows="3" cols="50" class="form">{$otherInfo.WordsDescribe}</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you prefer <br />



				   {html_radios name="FontChoice" options=$fontList selected=$otherInfo.FontChoice separator="<br />"}

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  

				   <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">After all the questions we've gone through. Is there anything else you can think of that we need to know to help with the site developement or special additions you would like to see?

<br />



					<textarea name="AnythingElse" rows="3" cols="50" class="form">{$otherInfo.AnythingElse}</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="center" colspan="3">

					<input type="hidden" name="isNew" value="{$isNew}" >		

					<input type="submit" name="btnSubmit" value="  Submit  " >								</td>

				  </tr>

				  <tr>

					<td align="center" colspan="3">&nbsp;																	</td>

				  </tr>

			  </table>
			</div>
			</form>
			
		<div class="clear"></div>
		
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/common.js"></script>