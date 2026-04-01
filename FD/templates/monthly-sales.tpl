{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Monthly Data</h1>

			<div style="padding-top:15px;">

			<table width="95%" border="0" align="center" cellpadding="3" cellspacing="3" bgcolor="#FAFAFA" style="height:250px; ;border:2px solid #E8E8E8;">
	<tr align="center" valign="middle">
		<td colspan="4" class="companyheading1"  bgcolor="#eaeaea" height="10">{$disDate}</td>
	</tr>
	<tr align="center" valign="middle">
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'" height="15"><div align="center" class="calender01">{if $m gte "1"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('1');">January</a>{else}January{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "2"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('2');">February</a>{else}February{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "3"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('3');">March</a>{else}March{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "4"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('4');">April</a>{else}April{/if}</div></td>
	</tr>
	<tr align="center" valign="middle">
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'" height="15"><div align="center" class="calender01">{if $m gte "5"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('5');">May</a>{else}May{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "6"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('6');">June</a>{else}June{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "7"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('7');">July</a>{else}July{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "8"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('8');">August</a>{else}August{/if}</div></td>
	</tr>
	<tr align="center" valign="middle">
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'" height="15"><div align="center" class="calender01">{if $m gte "9"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('9');">Spetember</a>{else}Spetember{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "10"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('10');">October</a>{else}October{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "11"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('11');">November</a>{else}November{/if}</div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01">{if $m gte "12"}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin('12');">December</a>{else}December{/if}</div></td>
	</tr>
	</table>
		
		</div>
	
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>
{literal}
<script language="javascript" type="text/javascript">
function ShowRegLogin(id)
{
	tb_show('Monthly Data','monthlyform.php?height=350&width=640&id='+id);
	return;
}
</script>
{/literal}