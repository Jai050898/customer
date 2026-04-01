{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Show Calendar</h1>
			<div style="float:right"><a href="javascript: void(0);" onClick="javascript: Share({$smarty.request.id});">Share Calendar</a></div>
			<div style="clear:both;"></div>
			{include_php file='cal.php'}
		<div class="clear"></div>

		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>
{literal}
<script language="javascript" type="text/javascript">
function Share(id)
{
	tb_show('Share Calendar','sharecalform.php?height=330&width=640&id='+id);
	return;
}
</script>
{/literal}