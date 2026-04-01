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
      <li>Confirmed Directories</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Confirmed Directories</div>
      </div>
	   <div class="ad_textsp">
	   <table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							 	<td height="10" colspan="2"></td>
							</tr>
							<tr>
							  <td><h2>Customer Information</h2></td>
							  <td align="right">&nbsp;</td>
							</tr>
							<tr>
							  <td  colspan="2">
							  	<table>
								<tr>
								<td align="right"><strong>Company Name :</strong></td>
								<td align="left">{$CustInfo.company_name|stripslashes}</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Email :</strong></td>
								<td align="left">{$CustInfo.email}</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Address :</strong></td>
								<td align="left">{$CustInfo.address}</td>
								</tr>
								<tr>
								<td align="right"><strong>City :</strong></td>
								<td align="left">{$CustInfo.city}</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>State :</strong></td>
								<td align="left">{$CustInfo.state}</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Country :</strong></td>
								<td align="left">{$CustInfo.country}</td>
								</tr>
								</table>
							  </td>
							</tr>

						</table>
				<div class="clr" style="height:15px;"></div>		
			<div style="clear:both;"></div>
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
								<td colspan="2"><h2>Confirmed Directories</h2></td>
							  </tr>
							  {foreach item=item name=item from=$CD_array}
							  {assign var="cdid" value=$item.id}
							<tr class="color_trbg">
								<td width="20%">{$item.name}:</td>
								<td width="80%" align="left">
									<input type="checkbox" name="Log[]" value="{$item.id}" id="{$item.name}" {if $Customers.$cdid eq "Y"} checked="checked"{/if} />
								 </td>
							</tr>
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
					</form>
				</td>
				</tr>
				<tr>
					<td align="left" valign="top">&nbsp;</td>
				</tr>
			</table>
			<!-- <table border="1" style="border:solid 1px #999999;" width="100%">
			<tr>
				<td style="width:30%"><strong>Company</strong></td>
				{foreach item=item name=item from=$CD_array}
					<td style="width:20%" align="center"><strong>{$item.name}</strong></td>
				{/foreach}
			</tr>
			{foreach item=item name=item from=$Customers}
			<tr style="background-color:#f3f3f3;">
				<td>{$item.company_name|stripslashes}</td>
				{foreach item=item1 name=item1 from=$CD_array}
					<td style="width:20%" align="center"><strong>
					{assign var="cdid" value=$item1.id}
					{if $item.$cdid eq "N"}
						<span id="changediv{$cdid}{$item.user_id}"><a href="javascript: changestatusyes('{$cdid}','{$item.user_id}','changediv{$cdid}{$item.user_id}');"><img src="{$siteurl}/images/no.png" border="0"></a></span>
					{else}
						<span id="changedivno{$cdid}{$item.user_id}"><a href="javascript: changestatusno('{$cdid}','{$item.user_id}','changedivno{$cdid}{$item.user_id}');"><img src="{$siteurl}/images/yes.gif" border="0"></a></span>
					{/if}
					</strong></td>
				{/foreach}
			</tr>
			{/foreach}
			</table> -->
			<div class="clear"></div>
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
        <!--end of contentpane -->
      </div>
    </div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>