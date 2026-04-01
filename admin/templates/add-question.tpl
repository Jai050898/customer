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
      <li>{if $smarty.request.cat_id neq ""}Edit{else}Add{/if} Question</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">{if $smarty.request.cat_id neq ""}Edit{else}Add{/if} Question</div>
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
									<td colspan="2"><h2>{if $smarty.request.cat_id neq ""}Edit{else}Add{/if} Question</h2></td>
								</tr>
							  <tr class="color_trbg">
								<td width="20%">Category</td>
								<td width="80%" align="left">
									<select name="Log[cat_id]" id="cat_id" style="width:187px; height:23px;" class="select req-string">
									<option value="">-----Please Select-----</option>
									{section name=list loop=$Cat}
									<option value="{$Cat[list].cat_id}" {if $Quest.cat_id eq $Cat[list].cat_id} selected="selected" {/if}>{$Cat[list].cat_name}</option>
									{/section}
								</select>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Question Type</td>
								<td width="80%" align="left">
									<select name="Log[quest_type]" id="quest_type" style="width:187px; height:23px;" class="select req-string" onChange="javascript: ShowOption(this.value);">
									<option value="">-----Please Select-----</option>
									<option value="R" {if $Quest.quest_type eq "R"} selected="selected" {/if}>Radio</option>
									<option value="C" {if $Quest.quest_type eq "C"} selected="selected" {/if}>Multple Choice</option>
									<option value="B" {if $Quest.quest_type eq "B"} selected="selected" {/if}>Text Box</option>
									<option value="T" {if $Quest.quest_type eq "T"} selected="selected" {/if}>Text Answer</option>
								</select>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%" valign="top">Question</td>
								<td width="80%" align="left">
									<textarea name="Log[question]" cols="64" rows="10"  id="question" class="input req-string" style="width:400px; height:100px;">{$Quest.question}</textarea>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%" valign="top">Question Description</td>
								<td width="80%" align="left">
									<textarea name="Log[question_desc]" cols="64" rows="10"  id="question_desc" class="input" style="width:400px; height:100px;">{$Quest.question_desc}</textarea>
								 </td>
							  </tr>
							  {if $smarty.request.quest_id neq "" && $Quest.Options|count gt "0"}
							
							  {else}
							  <tr style="display:none" id="showall">
							  <td width="100" valign="top">Has Lables</td>
							  <td width="200"  align="left"><input type="radio" name="Log[lable]" id="lable" value="Y" onclick="javascript: ShowAllDivs(this.value)" />&nbsp; YES &nbsp;&nbsp;<input type="radio" name="Log[lable]" id="lable" value="N" onclick="javascript: ShowAllDivs(this.value)" />&nbsp; NO
							  </tr>
							  <tr class="Clonea" style="display:none" id="showlabels">
							  <td width="100" valign="top">Lable</td>
								<td width="200"  align="left">
									<input type="text" name="Lable[]" id="lable" class="input " value=""/>
								 </td>
							  </tr>
							  <tr class="Clonea" align="right" style="display:none" id="showlabels1">
									<td colspan="3"><a href="javascript:void(0);" class="copy" rel=".Clonea">Add New</a></td>
								</tr>
							  <tr class="Clone" style="display:none" id="showoptions">
								<td width="100" valign="top">Options</td>
								<td width="200"  align="left">
									<input type="text" name="Log1[]" id="city" class="input " value=""/>
								 </td>
							  </tr>
								<tr class="Clone" align="right" style="display:none" id="showoptions1">
									<td colspan="3"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
								</tr>
								{/if}
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
function ShowOption(id)
{
	//alert(id);
	if(id != "T" && id != "B")
	{
		$("#showall").show();
	}
	else
	{
		$("#showall").hide();
	}
}
function ShowAllDivs(id)
{
	if(id == "N")
	{
		$("#showoptions").show();
		$("#showoptions1").show();
		$("#showlabels").hide();
		$("#showlabels1").hide();
	}
	else
	{
		$("#showlabels").show();
		$("#showlabels1").show();
		$("#showoptions").hide();
		$("#showoptions1").hide();
	}
}
</script>
{/literal}