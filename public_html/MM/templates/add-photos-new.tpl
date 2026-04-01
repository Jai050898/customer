{include file=header.tpl}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css" />
{literal}
	<style type="text/css">
	#log{ margin:0; padding:0; width:500px;}
	#log li{ list-style-position:inside; margin:2px; border:1px solid #ccc; padding:10px; font-size:12px; 
		font-family:Arial, Helvetica, sans-serif; color:#333; background:#fff; position:relative;}
	#log li .progressbar{ border:1px solid #333; height:5px; background:#fff; }
	#log li .progress{ background:#999; width:0%; height:5px; }
	#log li p{ margin:0; line-height:18px; }
	#log li.success{ border:1px solid #339933; background:#ccf9b9; }
	#log li span.cancel{ position:absolute; top:5px; right:5px; width:20px; height:20px; 
		background:url('images/cancel.png') no-repeat; cursor:pointer; }
	</style>
{/literal}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Albums</h1>
			<form name="UploadImages" id="UploadImages" method="post" onsubmit="javascript:return fnSaveImages();">
			<input type="hidden" name="Image_Logo" id="Image_Logo" value="" />
			<input type="hidden" name="Up_Key" id="Up_Key" value="" />
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><h3><U>Add Photos</U></h3></td>
				</tr>
				<tr>
                  <td  valign="top" width="25%">
						<input type="file" id="photo_name" name="photo_name"  style="width:305px;" />
				</td>
				<td valign="top">
						{html_image file="images/noimage.png" id="thumb" style="border:1px dotted #CCC;"}
						<div id="MsgDiv" style=" width:100px; position:absolute;z-index:101;margin-left:5px;float:left;"></div>
						<div class="clr" style="height:10px;"></div>
				  </td>
                </tr>
				<tr>
					<td colspan="2"><input type="submit" value="Submit" id="Submit" class="sendBtn"/></td>				
				</tr>
			</table>
			</form>
			<div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajaxupload.js"></script>
<script type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script type="text/javascript" src="{$siteurl}/js/swfupload.js"></script>
{literal}
<script type="text/javascript" language="javascript">
	function fnSaveImages()
	{
		var FrmName = document.UploadImages;
		if(FrmName.Image_Logo.value == '')
		{
			jAlert('Please Upload Images', 'Alert Dialog');
			return false;
		}
		FrmName.Up_Key.value = 'Upload';
		return true;
	}
	//Image Uploads
	$(document).ready(function() {	
		ImageUploadingForAll('photo_name','MsgDiv','Image_Logo','no');								
	});	
</script>
{/literal}