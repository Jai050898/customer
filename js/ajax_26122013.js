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
				//return false;
			}
			else if(data==0)
			{
				$('#'+type).val(0);$("#validdiv").html("Email is available").show();
				$("#"+eleName).css("background","#FFFFFF");}
			});
		}
	}//if
}

function fnCheckSEOEmailAvail(eleName,val,type)
{
	if(val!='')
	{
		if(emailValidation(eleName,val))
		{
			$.post(site_path+"/ajax.php",{For:'SEOEmail',val:val,type:type},function(data){
			if(data==1)																												
			{  
				$('#'+type).val(1);
				$("#validdiv").html("Email is already added!").show();
				$("#"+eleName).css({'background':'#FFEFEF','border-color':'#BB6666'});
				//return false;
			}
			else if(data==0)
			{
				$('#'+type).val(0);$("#validdiv").html("Email is available").show();
				$("#"+eleName).css("background","#FFFFFF");}
			});
		}
	}//if
}
function fnCheckWriterEmailAvail(eleName,val,type)
{
	if(val!='')
	{
		if(emailValidation(eleName,val))
		{
			$.post(site_path+"/ajax.php",{For:'WriterEmail',val:val,type:type},function(data){
			if(data==1)																												
			{  
				$('#'+type).val(1);
				$("#validdiv").html("Email is already added!").show();
				$("#"+eleName).css({'background':'#FFEFEF','border-color':'#BB6666'});
				//return false;
			}
			else if(data==0)
			{
				$('#'+type).val(0);$("#validdiv").html("Email is available").show();
				$("#"+eleName).css("background","#FFFFFF");}
			});
		}
	}//if
}
/********Email Validation for Database*********/
function fnCheckURLAvail(eleName,val,linkid)
{
		//alert("hai");
	if(val!='')
	{
		//if(URLValidation(eleName,val))
		//{
			//alert("hai");
			$.post(site_path+"/ajax.php",{For:'URL',val:val,linkid:linkid},function(data){
			if(data==1)																												
			{  
				//$('#'+type).val(1);
				$("#validdiv").html("URL is already added!").show();
				$("#"+eleName).css({'background':'#FFEFEF','border-color':'#BB6666'});
				$("#buttondiv").hide();
				//return false;
			}
			else
			{
				$("#validdiv").html("").show();
				$("#"+eleName).css("background","#FFFFFF");	
				$("#buttondiv").show();
			}
																	  });
		//}
	}//if
}
function fnShortURL()
{
	var val = $("#link_url").val();	
	//alert(val);
	if(val == "")
	{
		$("#validdiv").html("URL Should Not Empty").show();
		return false;
	}
	else
	{
			$.post(site_path+"/ajax.php",{For:'ShortURL',val:val},function(data){
			if(data!=0)																												
			{  
				$('#code').val(data);
				$("#shortenurl").html(site_path+'/'+data).show();
				$("#buttondiv").show();
				//$("#"+eleName).css({'background':'#FFEFEF','border-color':'#BB6666'});
				//return false;
			}
																		   });	
	}
}
/********Email Validation for Database*********/
function fnCheckUnameAvail(eleName,val,type)
{
	if(val!='')
	{
		$.post(site_path+"/ajax.php",{For:'ChkUname',val:val,type:type},function(data){
		if(data==1)																												
		{  
			$('#'+type).val(1);
			$("#uiddiv").html("User Name is already taken!").show();
			$("#"+eleName).css({'background':'#FFEFEF','border-color':'#BB6666'});
			//return false;
		}
		else if(data==0)
		{
			$('#'+type).val(0);
			$("#uiddiv").html("User name is available").show();
			$("#"+eleName).css("background","#FFFFFF");}
		});
	}//if
}

function fnCheckSEOUnameAvail(eleName,val,type)
{
	if(val!='')
	{
		$.post(site_path+"/ajax.php",{For:'ChkSEOUname',val:val,type:type},function(data){
		if(data==1)																												
		{  
			$('#'+type).val(1);
			$("#uiddiv").html("User Name is already taken!").show();
			$("#"+eleName).css({'background':'#FFEFEF','border-color':'#BB6666'});
			//return false;
		}
		else if(data==0)
		{
			$('#'+type).val(0);
			$("#uiddiv").html("User name is available").show();
			$("#"+eleName).css("background","#FFFFFF");}
		});
	}//if
}
function fnCheckWriterUnameAvail(eleName,val,type)
{
	if(val!='')
	{
		$.post(site_path+"/ajax.php",{For:'ChkWriterUname',val:val,type:type},function(data){
		if(data==1)																												
		{  
			$('#'+type).val(1);
			$("#uiddiv").html("User Name is already taken!").show();
			$("#"+eleName).css({'background':'#FFEFEF','border-color':'#BB6666'});
			//return false;
		}
		else if(data==0)
		{
			$('#'+type).val(0);
			$("#uiddiv").html("User name is available").show();
			$("#"+eleName).css("background","#FFFFFF");}
		});
	}//if
}
/********Email Validation for Database*********/
function fnCheckEmailAvailClient(eleName,val,type)
{
	if(val!='')
	{
		if(emailValidation(eleName,val))
		{
			$.post(site_path+"/ajax.php",{For:'ClientEmail',val:val,type:type},function(data){
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
function URLValidation(classname,str)
{
	/*var regURL=/(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
	if(!(str).match(regURL))*/
	if(isUrl(str))
	{		
		$("#"+classname).css("background","#FFEFEF");//apply the color for currentbox
		$("#validdiv").html('Invalid URL!').show();
		return false;
	}
	else
		return true;	
}
function isUrl(s) {
	var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
	return regexp.test(s);
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
function funCheckAll(Form,ArrName,id)
{
	var cnt=0;
	var len=Form.elements[ArrName].length;
	if(typeof(len)!="undefined")
	{
		for(i=0;i<Form.elements[ArrName].length;i++)
			Form.elements[ArrName][i].checked=Form.elements[id].checked;
	}
	else
	Form.elements[ArrName].checked=Form.elements[id].checked;
}
function fnDeleteRecord(Frm,ID,Type)
{
	jConfirm('Can you confirm this?','Confirmation Dialog',function(r){if(r==true)
	{	
		Frm.hid_key.value='Delete';
		Frm.hid_type.value=Type;
		Frm.hid_id.value=ID;
		Frm.submit();
	}});
}
function SetVal(id)
{
	//alert(id);
	$('#textcomment'+id).hide();
	$('#showcomment'+id).show();
	var val = $('#comments'+id).val();
	//alert(val);
	$.post(site_path+"/ajax.php",{For:'UpdateCmnt',val:val,id:id},function(data){
				$('#showcomment'+id).hide();
				$("#textcomment"+id).html(data).show();});
}
function EditCmnt(id)
{
	//alert(id);
	$('#Comment'+id).hide();
	$('#EditComment'+id).show();
	var val = $('#comment'+id).val();
	if(val == '')
	{
		$('#errorDiv'+id).html("Fill the required Fields").show();
		return false;
	}
	//alert(val);
	$.post(site_path+"/ajax.php",{For:'UpdateajaxCmnt',val:val,id:id},function(data){
		$('#Comment'+id).html(data).show();
		$("#EditComment"+id).hide();});
}
function PostComment(id,type)
{
	var comment	= $('#comment').val();
	if(comment == '')
	{
		 $('#errorDiv1').html("Fill the Required Fields").show();
		 return false;
	}
	$.post(site_path+"/ajax.php",{For:'PostComment',comment:comment,id:id,type:type},function(data){
				if(data == 1)
				{
					$("#PostMsgDiv").hide();
					$.post(site_path+"/ajax.php",{For:'ReplaceComment',Id:id},function(data1){$('#Test_Edit').html(data1).show();});
//				   	$('#Comment'+id).html(data).show();
//					$("#EditComment"+id).hide();
				}
	});
}
function PostTicketComment(frm)
{
	var comment	= $('#message').val();
	if(comment == '')
	{
		 $('#errorDiv1').html("Fill the Required Fields").show();
		 return false;
	}
	frm.submit();
	return true;
}
function ShowDelete(id,tid)
{
	$.post(site_path+"/ajax.php",{For:'DeleteajaxCmnt',id:id},function(data){
			if(data == 1)
			{
				$('#Edit'+id).hide();
				$.post(site_path+"/ajax.php",{For:'ReplaceComment',Id:tid},function(data1){$('#Test_Edit').html(data1).show();});
			}});
}
function fnCalculateRating(ValID,Val)
{
	document.getElementById(ValID).value=Val;
	document.getElementById(ValID+'Div').innerHTML='('+Val+')';
	var cntval=Val*20;
	document.getElementById(ValID+'List').style.width=cntval+'%';
}
function FunGivRating()
{
	var Form=document.GivRating;
	if(document.getElementById('Rating').value=='')
	{
		jAlert('Please give Rating for the Image','Alert Dialog');
		return false;
	}
	Form.hid_key.value='Rating';
	return true;
}
function IsIdExisting(Id)
{
	$.post(site_path+"/ajax.php",{For:'VerifyPhotoID',Id:Id},function(data){
		if(data == 0)
		{
			if(document.getElementById('GiveRating').style.display == 'none')
				$("#GiveRating").show();
			else
				$("#GiveRating").hide();
		}
		else
		{
			if(document.getElementById('GiveRating').style.display == 'none')
			{
				$("#GiveRating").show();
				$("#GiveRating").text("You have already Rated this Image").show();
			}
			else
				$("#GiveRating").hide();
		}});
}
function fnSelectProf(ID,Val,Name)
{
	$('#'+ID).progressBar(Val);
	$('#'+Name).val(Val);
}
function ImageUploadingForAll(logoname,imageshow,msgstore,adddisplay)
{
	var thumb=$('img#thumb');
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
		thumb.load(function(){$('div.preview').removeClass('loading');thumb.unbind();});
		thumb.attr('src',site_path+'/photos/thumbnails/'+tmstamp+'-'+file.replace(" ","_"));
		var msg=tmstamp+'-'+file.replace(" ","_");$("#"+msgstore).val(msg);
		var imgdisplay=file.replace(" ","_")+'<br><a href="javascript:void(0);" class="links1" onclick="javascript:fnDeleteLogo(\''+tmstamp+'-'+file.replace(" ","_")+'\',\''+adddisplay+'\');">Delete Image</a> <br>';
		if(adddisplay == "yes")
		{
			imgdisplay += '<span id="addlogo"><a href="javascript:void(0);" class="links1" onclick="javascript:fnAddLogo(\''+tmstamp+'-'+file.replace(" ","_")+'\');">Add To My Image Gallery</a></span>';
			document.getElementById('wm_div').style.display='';
		}
		$('#'+imageshow).html(imgdisplay).show();}
		});
}
function fnDeleteLogo(file)
{
	document.getElementById('Image_Logo').value='';
	//document.getElementById('Add_Image_Gallery').value='';
	$("#MsgDiv").html('&nbsp;').show();
	document.getElementById('thumb').src=site_path+'/images/noimage.png';
	$.post(site_path+"/ajax.php",{For:'RemLogo',val:file},function(data){});
	/*if(typeof(adddisplay) != 'undefined')
	{
		if(adddisplay == 'yes')
			document.getElementById('wm_div').style.display='none';
	}*/
}
function changestatus(cdid,sid,divid)
{
		//alert(cdid);
		//alert(sid);
		//alert(divid);
		$.post(site_path+"/ajax.php",{For:'CD',sid:sid,cdid:cdid},function(data){$("#"+divid).html(data).show();});
}
function changestatusno(cdid,sid,divid)
{
		$.post(site_path+"/ajax.php",{For:'CDNO',sid:sid,cdid:cdid},function(data){$("#"+divid).html(data).show();});
}
function changestatusyes(cdid,sid,divid)
{
		$.post(site_path+"/ajax.php",{For:'CDYES',sid:sid,cdid:cdid},function(data){$("#"+divid).html(data).show();});
}
