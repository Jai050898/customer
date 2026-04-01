{include file="header.tpl"}
{literal}
<!--<style type="text/css">
.error-div{color:#FF0000;}
</style>-->
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
							<li><a href="{$siteurl}/manager/dashboard.php">Home</a></li>
							<li>Add Yearly Data</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Add Yearly Data</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form name="UsersForm" id="UsersForm" method="post" class="form" onsubmit="javascript:$('#hid_key').val('Post');">
										<input type="hidden" name="hid_key" id="hid_key" value="">
										
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td colspan="2"><h2>Add Yearly Data</h2></td>
											</tr>
											{if $error neq ""}
											<tr>
												<td colspan="2" align="center" style="color:#FF0000;"><strong>{$error}</strong></td>
											</tr>
											{/if}
											<tr class="color_trbg">
												<td width="12%">Year</td>
												<td width="88%" align="left">
													{assign var=firstyear value="2003"}
													  {assign var=thisyear value=$smarty.now|date_format:"%Y"}
													<select name="Log[year]" id="year" class="select req-string">
													<option value="">-- Please Select -- </option>
													{section name=yearValue start=$firstyear loop=$thisyear step=1}
													<option value="{$smarty.section.yearValue.index}" {if $AccDet.year eq $smarty.section.yearValue.index} selected="selected"{/if}>{$smarty.section.yearValue.index}</option>
													{/section}
													</select>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td width="12%" valign="top">Gross Sales</td>
												<td width="88%" align="left">
													<input type="text" name="Log[grosssales]" id="grosssales" class="input req-string" value="{$AccDet.grosssales}" />
												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td width="12%" valign="top">Repair Orders</td>
												<td width="88%" align="left">
													<input type="text" name="Log[repairorders]" id="repairorders" class="input req-string" value="{$AccDet.repairorders}" />
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td>New Customers</td>
												<td align="left"><input type="text" name="Log[newcustomers]" id="newcustomers" class="input req-string req-numeric" value="{$AccDet.newcustomers}" /></td>
											 </tr>
											 
											 <tr class="color_trbg">
												<td>Actual Hours</td>
												<td align="left"><input type="text" name="Log[actualhours]" id="actualhours" class="input req-string req-numeric" value="{$AccDet.actualhours}"></td>
											 </tr>
											 
											 <tr class="color_trbg">
												<td>Facebook Fans</td>
												<td align="left"><input type="text" name="Log[facebookfans]" id="facebookfans" value="{$AccDet.facebookfans}" class="input req-string req-numeric"></td>
											 </tr>
											 
											 
											 <tr class="color_trbg">
												<td>Google Plus Users</td>
												<td align="left"><input type="text" name="Log[googleplususers]" id="googleplususers" value="{$AccDet.googleplususers}" class="input req-string"></td>
											 </tr>
											 <tr class="color_trbg">
												<td>Vibe</td>
												<td align="left"><select name="Log[vibe]" id="vibe" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" {if $AccDet.vibe eq "+1"} selected="selected"{/if}>Positive</option>
				  <option value="0" {if $AccDet.vibe eq "0"} selected="selected"{/if}>Average</option>
				  <option value="-1" {if $AccDet.vibe eq "-1"} selected="selected"{/if}>Negative</option>
				  </select></td>
											 </tr>
											 <tr class="color_trbg">
												<td>Activity</td>
												<td align="left"><select name="Log[activity]" id="activity" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" {if $AccDet.activity eq "+1"} selected="selected"{/if}>Positive</option>
				  <option value="0" {if $AccDet.activity eq "0"} selected="selected"{/if}>Average</option>
				  <option value="-1" {if $AccDet.activity eq "-1"} selected="selected"{/if}>Negative</option>
				  </select></td>
											 </tr>
											 <tr class="color_trbg">
												<td>Available Staff</td>
												<td align="left"><select name="Log[availablestaff]" id="availablestaff" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" {if $AccDet.availablestaff eq "+1"} selected="selected"{/if}>Overtime</option>
				  <option value="0" {if $AccDet.availablestaff eq "0"} selected="selected"{/if}>Full Crew</option>
				  <option value="-1" {if $AccDet.availablestaff eq "-1"} selected="selected"{/if}>People on Vacation, off, low</option>
				  </select></td>
											 </tr>
											 <tr class="color_trbg">
												<td>Days Open</td>
												<td align="left"><input type="text" name="Log[daysopen]" id="daysopen" value="{$AccDet.daysopen}" class="input req-string"></td>
											 </tr>
											 
											<tr>
												<td align="right" valign="middle">&nbsp;</td>
												<td><div id="errorDiv1" class="error-div">&nbsp;{$ErrorMsg}</div></td>
											</tr>
											<tr>
												<td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
												<td bgcolor="#854141"><input id="submitBtn1" value="Submit" type="submit" class="sendBtn" /></td>
											</tr>
										</table>
									</form>
								</td>
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
		</div>
	</div>
</div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#UsersForm',
		errorDiv	: '#errorDiv1'
});	
</script>
{/literal}