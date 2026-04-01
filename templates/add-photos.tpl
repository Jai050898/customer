{include file=header.tpl}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script type="text/javascript" src="{$siteurl}/js/swfupload.js"></script>
<script type="text/javascript" src="{$siteurl}/js/jquery.swfupload.js"></script>
{literal}
	<script language="javascript" type="text/javascript">
	var Inq_Docs = '';
	$(function(){
		$('#swfupload-control').swfupload({
			upload_url: site_path+"/upload-images.php",
			file_post_name: 'uploadfile',
			file_size_limit : "4096",
			file_types : "*.jpg;*.png;*.gif;*.JPG",
			file_types_description : "Image files",
			file_upload_limit : 20,
			flash_url : site_path+"/swfupload.swf",
			button_image_url : site_path+'/images/wdp_buttons_upload_114x29.png',
			button_width : 114,
			button_height : 29,
			button_placeholder : $('#button')[0],
			debug: false
		})
			.bind('fileQueued', function(event, file){
				var listitem='<li id="'+file.id+'" >'+
					'File: <em>'+file.name+'</em> ('+Math.round(file.size/1024)+' KB) <span class="progressvalue" ></span>'+
					'<div class="progressbar" ><div class="progress" ></div></div>'+
					'<p class="status" >Pending</p>'+
					'<span class="cancel" >&nbsp;</span>'+
					'</li>';
				$('#log').append(listitem);
				$('li#'+file.id+' .cancel').bind('click', function(){
					var swfu = $.swfupload.getInstance('#swfupload-control');
					swfu.cancelUpload(file.id);
					$('li#'+file.id).slideUp('fast');
				});
				// start the upload since it's queued
				$(this).swfupload('startUpload');
			})
			.bind('fileQueueError', function(event, file, errorCode, message){
				alert('Size of the file '+file.name+' is greater than limit');
			})
			.bind('fileDialogComplete', function(event, numFilesSelected, numFilesQueued){
				$('#queuestatus').text('Files Selected: '+numFilesSelected+' / Queued Files: '+numFilesQueued);
			})
			.bind('uploadStart', function(event, file){
				$('#log li#'+file.id).find('p.status').text('Uploading...');
				$('#log li#'+file.id).find('span.progressvalue').text('0%');
				$('#log li#'+file.id).find('span.cancel').hide();
			})
			.bind('uploadProgress', function(event, file, bytesLoaded){
				//Show Progress
				var percentage=Math.round((bytesLoaded/file.size)*100);
				$('#log li#'+file.id).find('div.progress').css('width', percentage+'%');
				$('#log li#'+file.id).find('span.progressvalue').text(percentage+'%');
			})
			.bind('uploadSuccess', function(event, file, serverData){
				//alert(serverData);
				var FileArr = serverData.split('-->');
				//alert(FileArr);
				if(Inq_Docs == '')
					Inq_Docs = FileArr[1];
				else
					Inq_Docs = Inq_Docs+','+FileArr[1];
				document.getElementById('Inq_Docs').value = Inq_Docs;
				var item=$('#log li#'+file.id);
				item.find('div.progress').css('width', '100%');
				item.find('span.progressvalue').text('100%');
				var pathtofile='<a href='+site_path+'/photos/original/'+FileArr[1]+' target="_blank" >view &raquo;</a>';
				item.addClass('success').find('p.status').html('Done!!! | '+pathtofile);
			})
			.bind('uploadComplete', function(event, file){
				// upload has completed, try the next one in the queue
				$(this).swfupload('startUpload');
			})
	});
	function fnSaveImages()
	{
		var FrmName = document.UploadImages;
		if(FrmName.Inq_Docs.value == '')
		{
			jAlert('Please Upload Images', 'Alert Dialog');
			return false;
		}
		FrmName.Up_Key.value = 'Upload';
		return true;
	}
	</script>
	<style type="text/css">
	#swfupload-control p{ margin:10px 5px; font-size:0.9em; }
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
			<input type="hidden" name="Inq_Docs" id="Inq_Docs" value="" />
			<input type="hidden" name="Up_Key" id="Up_Key" value="" />
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><h3><U>Add Photos</U></h3></td>
				</tr>
				<tr onmouseover="this.className='liteblue'" onmouseout="this.className='white'" class="white">
                  <td colspan="2">
				 <div id="swfupload-control">
						<p>Upload upto 20 image files(jpg, png, gif), each having maximum size of 4MB</p>
						<input type="button" id="button" />
						<p id="queuestatus" ></p>
						<ol id="log"></ol>
					</div>
				  </td>
                </tr>
				<tr onmouseover="this.className='liteblue'" onmouseout="this.className='white'" class="white">
				<td align="right">
					<input type="submit" value="Submit" id="Submit" class="sendBtn"/>
				</td>
				<td>
					<input type="button" value="Cancel" id="Cancel" class="sendBtn" onclick="document.UploadImages.submit();"/>
				</td>
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