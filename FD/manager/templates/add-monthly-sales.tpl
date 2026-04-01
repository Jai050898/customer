{include file="header.tpl"}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
{literal}
<style type="text/css">
#TB_window {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 4px solid #A44900;
    color: #000000;
    display: none;
    left: 50%;
    position: fixed;
    text-align: left;
    top: 50%;
    z-index: 102;
}
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
							<li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
							<li>Add Monthly Data</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Add Monthly Data</div>
				  </div>
					<div class="ad_textsp">
						<table width="95%" border="0" align="center" cellpadding="3" cellspacing="3" bgcolor="#FAFAFA" style="height:250px; ;border:2px solid #E8E8E8;">
	<tr align="center" valign="middle">
		<td colspan="4" class="companyheading1"  bgcolor="#eaeaea" height="10">{$disDate}</td>
	</tr>
	<tr align="center" valign="middle">
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'" height="15"><div align="center" class="calender01">{if $m gte "1"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('1',{$smarty.request.Shop_ID});">January</a>{else}January{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "2"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('2',{$smarty.request.Shop_ID});">February</a>{else}February{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "3"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('3',{$smarty.request.Shop_ID});">March</a>{else}March{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "4"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('4',{$smarty.request.Shop_ID});">April</a>{else}April{/if}</div></td>
	</tr>
	<tr align="center" valign="middle">
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'" height="15"><div align="center" class="calender01">{if $m gte "5"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('5',{$smarty.request.Shop_ID});">May</a>{else}May{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "6"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('6',{$smarty.request.Shop_ID});">June</a>{else}June{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "7"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('7',{$smarty.request.Shop_ID});">July</a>{else}July{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "8"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('8',{$smarty.request.Shop_ID});">August</a>{else}August{/if}</div></td>
	</tr>
	<tr align="center" valign="middle">
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'" height="15"><div align="center" class="calender01">{if $m gte "9"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('9',{$smarty.request.Shop_ID});">Spetember</a>{else}Spetember{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "10"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('10',{$smarty.request.Shop_ID});">October</a>{else}October{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "11"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('11',{$smarty.request.Shop_ID});">November</a>{else}November{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "12"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('12',{$smarty.request.Shop_ID});">December</a>{else}December{/if}</div></td>
	</tr>
	</table>
					  <div class="clr"></div>
					</div>
				<!--end of contentpane -->
			  </div>
			</div>
		</div>
	</div>
</div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>
{literal}
<script language="javascript" type="text/javascript">
function ShowRegLogin(id,shopid)
{
	tb_show('Monthly Data','{/literal}{$siteurl}{literal}/manager/monthlyform.php?height=350&width=640&id='+id+'&shopid='+shopid);
	return;
}
</script>
{/literal}