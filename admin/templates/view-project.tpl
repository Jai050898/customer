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
      <li>View Project</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">View Project</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							  <tr>
									<td colspan="2"><h2>View Project</h2></td>
								  </tr>
							  <tr class="color_trbg">
								<td width="12%">Project Title</td>
								<td width="88%" align="left">
									{$Project.name}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="12%">Customer</td>
								<td width="88%" align="left">
									{$Project.first_name} {$Project.last_name}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Priority</td>
								<td width="80%" align="left">
									 {if $Project.priority eq "1"}Urgent{elseif $Project.priority eq "2"}High Priority{elseif $Project.priority eq "3"}Medium Priority{elseif $Project.priority eq "4"} Normal Priority{elseif $Project.priority eq "5"}Low Priority{elseif $Project.priority eq "6"}Very Low Priority{else}Whatever{/if}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td valign="top">Description</td>
								<td align="left">{$Project.description|nl2br}</td>
							  </tr>
							  <tr class="color_trbg">
								<td valign="top">Project Status</td>
								<td align="left">{if $Project.project_status eq "1"}New{elseif $Project.project_status eq "2"}Proposal{elseif $Project.project_status eq "3"}In Progress{elseif $Project.project_status eq "4"}Completed{else}Cancelled{/if}&nbsp;&nbsp;>> &nbsp;&nbsp;<a href="javascript: showhistory();"><span id="spamdiv">Show</span> Project Status History</a></td>
							  </tr>
							  <tr class="color_trbg" style="display: none;" id="showdiv">
								<td valign="top" colspan="2">
									<table style="border:solid 1px #000000;" cellpadding="1" cellspacing="2" width="80%">
										<tr>
										<td style="border:solid 1px #000000">Date</td>
										<td style="border:solid 1px #000000">Action</td>
										</tr>
										{foreach item=item name=item from=$Status}
											<tr>
												<td style="border:solid 1px #000000">{$item.created_date|date_format:"%m-%d-%Y"}</td>
												<td style="border:solid 1px #000000">{if $item.project_status eq "1"}New{elseif $item.project_status eq "2"}Proposal{elseif $item.project_status eq "3"}In Progress{elseif $item.project_status eq "4"}Completed{else}Cancelled{/if}</td>
											</tr>
										{foreachelse}
											<tr>
												<td colspan="2"><font color="#FF0000">No History Found</font></td>
											</tr>
										{/foreach}
									</table>
								</td>
							  </tr>
              </table>
		</td>
		</tr>
  <tr>
    <td height="50" align="left" valign="top">&nbsp;</td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript">
$('#submitBtn1').formValidator({
		scope		: '#myform',
		errorDiv	: '#errorDiv1'
});
function showhistory()
{
	if($("#spamdiv").text() == "Show")
	{
		$("#spamdiv").text("Hide");
		$("#showdiv").show();
	}
	else
	{
		$("#spamdiv").text("Show");
		$("#showdiv").hide();
	}
}
function showForm()
{
	if($("#spamdiv1").text() == "Show")
	{
		$("#spamdiv1").text("Hide");
		$("#showdiv1").show();
	}
	else
	{
		$("#spamdiv1").text("Show");
		$("#showdiv1").hide();
	}
}
</script>
{/literal}
