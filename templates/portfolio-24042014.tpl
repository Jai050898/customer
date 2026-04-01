{include file=header.tpl}
<meta http-equiv="imagetoolbar" content="no">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Portfolio</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5"  class="left_content" style="color:#2f3337;">
			{section name=list loop=$PDetails}
				<tr>
					<td style="height:10px;"></td>
				</tr>
				<tr>
					<td width="20%"><img src="{$siteurl}/photos/thumbnails/{$PDetails[list].image}" alt="{$PDetails[list].project_name}" title="{$PDetails[list].project_name}"></td>
					<td width="80%" style="font-size:18px; font-weight:normal; padding:0px; margin:0px; font-family: Arial; color:#322115;">{$PDetails[list].project_name}</td>
				</tr>
				<tr>
					<td colspan="2" bgcolor="#1AA6BD"><span style="color:#fff; font-size:12px;"><strong>Description</strong></span></td>
				</tr>
				<tr>
					<td {if !$smarty.section.list.last} style="border-bottom:1px dashed #7F7F7F" {/if} colspan="2">{$PDetails[list].text|nl2br}</td>
				</tr>
			{sectionelse}
				<tr>
					<td style="color:#FF0000; font-size:14px" colspan="2" align="center">No Portfolio's found</td>
				</tr>
			{/section}
			</table>
			<div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
{literal}
<SCRIPT TYPE="text/javascript">

//Disable right click script
var message="Content is Copyrighted";

function clickIE() 
{
	if (document.all) 
	{
		alert(message);
		return false;
	}
}
function clickNS(e) 
{
	if(document.layers||(document.getElementById&&!document.all)) 
	{
		if (e.which==2||e.which==3) 
		{
			alert(message);
			return false;
		}
	}
}
function doSomething(e) 
{
	if (!e) var e = window.event;
	if (e.keyCode==17 || e.keyCode==65) 
		{
			alert(message);
			return false;
		}
}
if (document.layers)
{
	document.captureEvents(Event.MOUSEDOWN);
	document.onmousedown=clickNS;
}
else
{
	document.onmouseup=clickNS;
	document.onkeyup=doSomething;
	document.oncontextmenu=clickIE;
}
document.oncontextmenu=new Function("return false")

</SCRIPT>
{/literal}