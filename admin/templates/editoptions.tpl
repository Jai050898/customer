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
      <li>Edit Options</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Edit Options</div>
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
									<td colspan="2"><h2>Edit Options</h2></td>
								</tr>
							  {if $smarty.request.qid neq "" && $Quest.Options|count gt "0"}
							  {foreach item=item name=item from=$Quest.Options}
							  <tr>
								<td width="100" valign="top">Options</td>
								<td width="1000"  align="left">
									<input type="text" name="Log1[{$item.option_id}]" id="city" class="input " value="{$item.option_name}"/>
								 </td>
							  </tr>
							  {/foreach}
							  <tr>
							  <td colspan="2"><a href="javascript:void(0);" onClick="ShowMore();">Add More Options</a></td>
							  </tr>
							  <tr class="Clone" style="display:none" id="newoption">
								<td width="100" valign="top">Options</td>
								<td width="1000"  align="left">
									<input type="text" name="Log_new[]" id="city" class="input " value=""/>
								 </td>
							  </tr>
							  <tr class="Clone" align="right" style="display:none" id="newoptionadd">
									<td colspan="3"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
								</tr>
							  {/if}
							  {foreach from=$Quest.OptionsLab key=key item=val}
							  <tr>
							  <td colspan="2"><strong>{$key}</strong></td>
							  </tr>
							   {foreach from=$val key=k item=v}
							   
							   {foreach item=item name=item from=$v}
							  <tr>
								<td width="100" valign="top">Options</td>
								<td width="1000"  align="left">
									<input type="text" name="Log1[{$item.option_id}]" id="city" class="input " value="{$item.option_name}"/>
								 </td>
							  </tr>
							  {/foreach}
							  <tr>
							  <td colspan="2"><a href="javascript:void(0);" onClick="ShowMoreOptions({$k});">Add More Options</a></td>
							  </tr>
							  <tr class="Clone{$k}" id="showoptions{$k}" style="display:none">
								<td width="100" valign="top">Options</td>
								<td width="1000"  align="left">
									<input type="text" name="Log[{$k}][]" id="city" class="input " value=""/>
								 </td>
							  </tr>
							  <tr class="Clone{$k}" align="right"  id="showoptionsadd{$k}" style="display:none">
									<td colspan="3"><a href="javascript:void(0);" class="copy" rel=".Clone{$k}">Add New</a></td>
								</tr>
  								{/foreach}
							  {/foreach} 
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
function ShowMore()
{
	$("#newoption").show();
	$("#newoptionadd").show();
}
function ShowMoreOptions(id)
{
	$("#showoptions"+id).show();
	$("#showoptionsadd"+id).show();
}
</script>
{/literal}