{include file="header.tpl"}
{literal}
<style type="text/css">
.error-div{color:#FF0000;}
</style>
{/literal}
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
      <li>{if $smarty.request.cat_id neq ""}Edit{else}Add{/if} Options</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">{if $smarty.request.cat_id neq ""}Edit{else}Add{/if} Options</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  <form name="CatForm" class="form" id="CatForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
							<input type="hidden" name="hid_key" id="hid_key" value="">
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							  <tr>
									<td colspan="2"><h2>{if $smarty.request.cat_id neq ""}Edit{else}Add{/if} Options</h2></td>
								</tr>
							  <tr class="Clone" id="showoptions">
								<td width="100" valign="top">Options</td>
								<td width="1000"  align="left">
									<input type="text" name="Log1[]" id="city" class="input " value=""/>
								 </td>
							  </tr>
							  <tr class="Clone" align="right"  id="showoptions1">
									<td colspan="3"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
								</tr>
							  
							  {section name=list loop=$Cat}
							  <tr>
							  <td colspan="2"><strong>{$Cat[list].name}</strong></td>
							  </tr>
							  <tr class="Clone{$Cat[list].lable_id}" id="showoptions">
								<td width="100" valign="top">Options</td>
								<td width="1000"  align="left">
									<input type="text" name="Log[{$Cat[list].lable_id}][]" id="city" class="input " value=""/>
								 </td>
							  </tr>
							  <tr class="Clone{$Cat[list].lable_id}" align="right"  id="showoptions1">
									<td colspan="3"><a href="javascript:void(0);" class="copy" rel=".Clone{$Cat[list].lable_id}">Add New</a></td>
								</tr>
							  {/section}
							  <tr>
								  <td align="right" valign="middle">&nbsp;</td>
								  <td><div id="errorDiv1" class="error-div">&nbsp;{$ErrorMsg}</div></td>
								</tr>
							  <tr>
							  <td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
							  <td bgcolor="#854141"><input id="submitBtn1" value="Submit" type="submit" class="sendBtn" /></td>
							</tr>
						 </table>
		</form></td>
		</tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  
</table>
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
        <!--end of contentpane -->
      </div>
    </div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/relCopy.jquery.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#CatForm',
		errorDiv	: '#errorDiv1'
});	
$(function(){
		var removeLink = ' <a class="remove" style="float:right;padding-right:5px;" href="#" onclick="$(this).parent().remove(); return false">Remove</a>';
		$('a.copy').relCopy({limit: 500, append: removeLink});
	});
</script>
{/literal}