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
							<li>Add Daily Data</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Add Daily Data</div>
				  </div>
					<div class="ad_textsp">
						<table width="95%" border="0" align="center" cellpadding="3" cellspacing="3" bgcolor="#FAFAFA" style="height:250px; ;border:2px solid #E8E8E8;">
	<tr align="center" valign="middle">
		<td bgcolor="#eaeaea" height="30">
		<table width="10" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="16" align="left">&nbsp;
			</td>
          </tr>
        </table></td>
		<td bgcolor="#eaeaea">
		<table width="10" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="16" align="left">&nbsp;
			</td>
          </tr>
        </table></td>
		<td colspan="3" class="companyheading1"  bgcolor="#eaeaea">{$disDate}</td>
		<td bgcolor="#eaeaea"><table width="30" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="16" align="left">&nbsp;
			</td>
          </tr>
        </table></td>
		<td bgcolor="#eaeaea">
		  <table width="10" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="16" align="left">&nbsp;</td>
          </tr>
        </table>
		</td>
	</tr>
	<tr align="center" valign="middle">
		<td width="17%" bgcolor="#FFFFFF" height="15"><strong>SUN</strong></td>
		<td width="15%" bgcolor="#FFFFFF"><strong>MON</strong></td>
		<td width="11%" bgcolor="#FFFFFF"><strong>TUE</strong></td>
		<td width="13%" bgcolor="#FFFFFF"><strong>WED</strong></td>
		<td width="12%" bgcolor="#FFFFFF"><strong>THU</strong></td>
		<td width="16%" bgcolor="#FFFFFF"><strong>FRI</strong></td>
		<td width="16%" bgcolor="#FFFFFF"><strong>SAT</strong></td>
	</tr>
	{section name=foo start=0 loop=5 step=1}
	{assign var="fd" value=$smarty.section.foo.index}
	  	<tr align="center" valign="middle">
		{section name=bar start=0 loop=7 step=1}
		{assign var="sd" value=$smarty.section.bar.index}
		
		{if $cal[$fd].$sd gt 0}
			{assign var="tempdate" value=$cal[$fd].$sd|cat:"-$m"|cat:"-$y"}
		{else}
			{assign var="tempdate" value='0'}
		{/if}
		{assign var="edate" value=$tempdate|date_format:'%Y-%m-%d'}
		<td height="20" style="font-size:12px;" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'">
		{assign var="id" value="0"}
		
		{if $smarty.now|date_format:"%d" eq $cal[$fd].$sd && $smarty.now|date_format:"%m" eq $m && $smarty.now|date_format:"%Y" eq $y}
			{if $fill_flag gt 0}
			<div align="center" class="calender01">
				<strong>{if $d gte $cal[$fd].$sd}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin({$cal[$fd].$sd},{$smarty.request.Shop_ID});">{$cal[$fd].$sd}</a>{else}{$cal[$fd].$sd}{/if}</strong>
			</div>
			{else}
			<div align="center" style="width:33px; height:25px; text-align:center; padding-top:11px; padding-right:2px;">
				<strong>{if $d gte $cal[$fd].$sd}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin({$cal[$fd].$sd},{$smarty.request.Shop_ID});">{$cal[$fd].$sd}</a>{else}{$cal[$fd].$sd}{/if}</strong>
			</div>
			{/if}	
		{else}
			{if $fill_flag gt 0}
				<div align="center" class="calender01">
					{if $d gte $cal[$fd].$sd}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin({$cal[$fd].$sd},{$smarty.request.Shop_ID});">{$cal[$fd].$sd}</a>{else}{$cal[$fd].$sd}{/if}
				</div>
			{else}
				<div align="center"  style="width:33px; height:25px; text-align:center; padding-top:11px; padding-right:2px;">
					{if $d gte $cal[$fd].$sd}<a href="javascript: void(0);" onclick="javascript: ShowRegLogin({$cal[$fd].$sd},{$smarty.request.Shop_ID});">{$cal[$fd].$sd}</a>{else}{$cal[$fd].$sd}{/if}
				</div>
			{/if}
		{/if}
		</td>
		{/section}</tr>
	{/section}	
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
	tb_show('Daily Data','{/literal}{$siteurl}{literal}/admin/dailyform.php?height=330&width=640&id='+id+'&shopid='+shopid);
	return;
}
</script>
{/literal}