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
      <li>What if Scenarios</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">What if Scenarios</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  <form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<input type="hidden" name="mylength" id="mylength" value="1">
						  <table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Year:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[year]" id="year" class="select req-string req-numeric" value="{$Tasks.year}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Technicians:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[technicians]" id="technicians" class="select req-string req-numeric" value="{$Tasks.technicians}"/></td>
				</tr>
					
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Advisors:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[advisors]" id="advisors" class="select req-string req-numeric" value="{$Tasks.advisors}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Effeciency:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[effeciency]" id="effeciency" class="select req-string req-numeric" value="{$Tasks.effeciency}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Productivity:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[productivity]" id="productivity" class="select req-string req-numeric" value="{$Tasks.productivity}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Labor Rate:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[labor_rate]" id="labor_rate" class="select req-string req-numeric" value="{$Tasks.labor_rate}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Parts to Labor Ratio:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[parts_to_labor_ratio]" id="parts_to_labor_ratio" class="select req-string req-numeric" value="{$Tasks.parts_to_labor_ratio}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Labor Percentage:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[labor_percentage]" id="labor_percentage" class="select req-string req-numeric" value="{$Tasks.labor_percentage}"/>%</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Parts Percentage:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[parts_percentage]" id="parts_percentage" class="select req-string req-numeric" value="{$Tasks.parts_percentage}"/>%</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Advertising Percentage:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[advertising_percentage]" id="advertising_percentage" class="select req-string req-numeric" value="{$Tasks.advertising_percentage}"/>%</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Rent Percentage:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[rent_percentage]" id="rent_percentage" class="select req-string req-numeric" value="{$Tasks.rent_percentage}"/>%</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Hours Per Tech:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[hours_per_tech]" id="hours_per_tech" class="select req-string req-numeric" value="{$Tasks.hours_per_tech}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Average RO:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[average_RO]" id="average_RO" class="select req-string req-numeric" value="{$Tasks.average_RO}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Database Records:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[database_records]" id="database_records" class="select req-string req-numeric" value="{$Tasks.database_records}"/></td>
				</tr>
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="submitBtn1" type="Submit" value="Submit" /></td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#TaskForm',
		errorDiv	: '#errorDiv1'
});
</script>
{/literal}