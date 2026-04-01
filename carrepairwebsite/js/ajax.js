function fnGetCountryStates(val,name,id,divid)
{
	if(val!='')
		$.post(site_path+"/ajax.php",{For:'States',val:val,name:name,id:id},function(data){$("#"+divid).html(data).show();});
}
function setClientSort(sortby,sortoption,frm)
{
	frm.sortby.value=sortby;
	frm.sortoption.value=sortoption;
	frm.submit();
}
function SetStatus(frm,type,ArrName)
{
	var cnt=0;
	var ids='';
	var len=frm.elements[ArrName].length;
	if(typeof(len)!="undefined")
	{
		for(i=0;i<len;i++)
		{
			if(frm.elements[ArrName][i].checked==true)
			{
				if(ids=='')
					ids=frm.elements[ArrName][i].value;
				else
					ids=ids+","+frm.elements[ArrName][i].value;cnt++;
			}
		}
	}
	else
	{
		if(frm.elements[ArrName].checked==true)
		{
			ids=frm.elements[ArrName].value;cnt++;
		}
	}
	if(cnt==0)
	{
		jAlert('Please select Atleast one Checkbox','Alert Dialog');
		return false;
	}
	$("#hid_key").val('Change');
	$("#hid_type").val(type);
	$("#hid_id").val(ids);
	//alert(ids);
	frm.submit();
}
/********Email Validation for Database*********/
function fnCheckEmailAvail(eleName,val,type)
{
	if(val!='')
	{
		if(emailValidation(eleName,val))
		{
			$.post(site_path+"/ajax.php",{For:'Email',val:val,type:type},function(data){
			if(data==1)																												
			{  
				$('#'+type).val(1);
				$("#validdiv").html("Email is already added!").show();
				$("#"+eleName).css({'background':'#FFEFEF','border-color':'#BB6666'});
			}
			else if(data==0)
			{
				$('#'+type).val(0);$("#validdiv").html("Email is available").show();
				$("#"+eleName).css("background","#FFFFFF");}
			});
		}
	}//if
}
function fnCheckEmailAvailAdv(eleName,val,type)
{
	if(val!='')
	{
		if(emailValidation(eleName,val))
		{
			$.post(site_path+"/ajax.php",{For:'AdvEmail',val:val,type:type},function(data){
			if(data==1)																												
			{  
				$('#'+type).val(1);
				$("#validdiv").html("Email is already added!").show();
				$("#"+eleName).css({'background':'#FFEFEF','border-color':'#BB6666'});
			}
			else if(data==0)
			{
				$('#'+type).val(0);$("#validdiv").html("Email is available").show();
				$("#"+eleName).css("background","#FFFFFF");}
			});
		}
	}//if
}
/********Email Validation*********/
function emailValidation(classname,str)
{
	var regEmail=/^[0-9a-zA-Z]+(([\.\-_])[0-9a-zA-Z]+)*@[0-9a-zA-Z]+(([\.\-])[0-9a-zA-Z-]+)*\.[a-zA-Z]{2,4}$/;
	if(!(str).match(regEmail))
	{		
		$("#"+classname).css("background","#FFEFEF");//apply the color for currentbox
		$("#validdiv").html('Invalid Email!').show();
		return false;
	}
	else
		return true;
}
function StoreAnswer(quest_id,val,catid,type,frm,arrayname)
{
		if(val != "")
		{
			if(type == "C")
			{
					val = fnCheckBoxIds(frm,arrayname);
			}
			//alert(val);
			$("#Ansdiv"+quest_id).html("Saving...").show();
			$.post(site_path+"/ajax.php",{For:'StoreAnswer',val:val,quest_id:quest_id,catid:catid,type:type},function(data){$("#Ansdiv"+quest_id).html("Saved").show();});
		}
}
function StorePollAnswer(quest_id,val,catid,type,frm,arrayname)
{
		if(val != "")
		{
			//alert(val);
			$("#Ansdiv"+quest_id).html("Saving...").show();
			$.post(site_path+"/ajax.php",{For:'StorePollAnswer',val:val,quest_id:quest_id,catid:catid,type:type},function(data){$("#Ansdiv"+quest_id).html("Saved").show();$("#Clickdiv"+quest_id).html("<a href='poll.php'>Show Results</a>").show();});
		}
}
function fnCheckBoxIds(frm,arrayname)
{
	var len = frm.elements[arrayname].length;
	//alert(len);
	var cnt	= 0;
	var cntids = '';
	for(var i=0;i<len;i++)
	{
		if(frm.elements[arrayname][i].checked == true)
		{
			cnt++;
			if(cntids == "")
				cntids = frm.elements[arrayname][i].value;
			else
				cntids += ","+frm.elements[arrayname][i].value;
		}
	}
	/*document.getElementById('qualificationtext').value = 'Selected Qualifications ('+cnt+')';
	if(cnt > 0)
	{
		document.getElementById('qualification').value = cntids;
		$.post(site_path+"/ajax.html",{For:'Qualifications',cntids:cntids},function(data){$('#quarespdiv').html(data);});
	}
	else
		document.getElementById("quarespdiv").innerHTML = '&nbsp;';*/
		return cntids;
}
function ImageUploadingForAll(logoname,imageshow,msgstore,adddisplay,th)
{
	var thumb=$('img#'+th);
	var dt=new Date();
	var tmstamp=dt.getTime();
	new AjaxUpload(logoname,{action:site_path+'/image-uploader.php?time='+tmstamp,onSubmit:function(file,ext)
	{
		if(ext&&/^(jpg|png|jpeg|gif)$/.test(ext))
		{
			this.setData({'key':'This string will be send with the file'});
			$('#'+imageshow).html('Uploading '+file).show();
		}
		else
		{
			$('#'+imageshow).html('Error: only images are allowed').show();
			return false;
		}
	},onComplete:function(file,response){	
		//alert(file);
		//alert(response);
		thumb.load(function(){$('div.preview').removeClass('loading');thumb.unbind();});
		
		var fi = file.split(".");	
		var msg = tmstamp+'-'+file.replace(" ","_");
		var len = fi.length;
		var filen	= fi[eval(len-1)].toLowerCase();
		var newname	= msg+filen;
		thumb.attr('src',site_path+'/photos/resize/'+tmstamp+'-'+file.replace(" ","_"));
		$("#"+msgstore).val(msg);
		//alert(msg)
		var imgdisplay=file.replace(" ","_")+'<br><a href="javascript:void(0);" class="links" onclick="javascript:fnDeleteLogo(\''+tmstamp+'-'+file.replace(" ","_")+'\',\''+adddisplay+'\',\''+imageshow+'\',\''+th+'\');">Delete Image</a> <br>';	
		$('#'+imageshow).html(imgdisplay).show();}
		});
}
function fnDeleteLogo(file,adddisplay,mdiv,th)
{
	document.getElementById('Image_Logo').value='';	
	$("#"+mdiv).html('&nbsp;').show();document.getElementById(th).src=site_path+'/images/noimage.png';$.post(site_path+"/delete_image.php",{For:'RemLogo',val:file},function(data){});
}