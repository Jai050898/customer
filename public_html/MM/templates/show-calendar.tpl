{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div>
			<div style="height:10px;"></div>
			<h1>Show Calendar</h1>
			{include_php file='cal.php'}
		<div class="clear"></div>

		</div>
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
