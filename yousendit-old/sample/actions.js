
/**********************************************************************************************
 * Copyright 2012 YouSendIt, Inc. All Rights Reserved.
*
* Licensed under the YouSendIt API agreement. You may not use this file except in compliance
* with the License.
*
* This is a sample file distributed on an "AS IS" basis, WITHOUT WARRANTIES OR CONDITIONS OF
* ANY KIND, either expressed or implied. See the API License for the specific language
* governing permissions and limitations.
*********************************************************************************************/

function addField(){

	var mainOb = document.getElementById('mainDiv');
	var labelOb = document.getElementById('labelDiv');
	var valOb = document.getElementById('val');
	var num = (document.getElementById("val").value -1)+ 2;
	valOb.value = num;
	var newDivName = "my"+num+"Div";
	var newDiv = document.createElement('div');
	newDiv.setAttribute("id",newDivName);
	newDiv.innerHTML = "<a href='javascript:void(0)' class='c2' style='float:left;' onclick='removeField(\""+newDivName+"\" );' id='"+newDivName+"'>Remove&nbsp;</a><form id='form"+num+"' class='autoform' enctype='multipart/form-data' action='' method='post'><div id='prog"+num+"' class='black'>Not Uploaded</div> <input type='file' class='autoform' name='fname' size='80'/> <input type='hidden' id='bid"+num+"' name='bid' value=''/> </form>";
	mainOb.appendChild(newDiv);
}

function removeField(divNam){
	var o = document.getElementById('mainDiv');
	var oldDiv = document.getElementById(divNam);
	o.removeChild(oldDiv);
	document.getElementById("val").value = document.getElementById("val").value-1;
}



function refresh(divname){
	$('#viewform').load('ui.php #'+divname);
}

function refreshActions(divnameActions, divnameLink, divnameTitle){
		$('#actions').load('ui.php #'+divnameActions);
		$('#link').load('ui.php #'+divnameLink);
		$('#title').load('ui.php #'+divnameTitle);		
}
	
function prepareForm(){
		$('#uploadf').ajaxForm({ 
			success: function(data){ 
				document.getElementById('texxt').value = data+document.getElementById('texxt').value; 
			}		  
		}); 
}
	
function uploadForm(fileCount) {
		if (('undefined' == typeof fileCount)||('' == fileCount)){
			fileCount = '1';
		}
		if (fileCount !== document.getElementById("val").value) {
			alert('The "File Count:" value must be equal with the number of added files. If no "File Count:" value is set the default will be used (default=1).');
			$('#uploadf').ajaxForm({ 
				success: function() {
					return false;
				}
			})			
		}else{
		$('#uploadf').ajaxSubmit({ 
		beforeSend: function(){
			$("#spinner").html('<img src="images/roller.gif" alt="Wait" />');
		},
		success: function(data) {
			$("#spinner").html('');
		  var text = '';
		  try {
			JSON.parse(data);
			} catch (e) {
				text = "\n Error: Internal server error, please try again. \n";;
			}
		  if ('' == text){	
			var obj = jQuery.parseJSON(data);
			if (jQuery.parseJSON(data)){
				text = "\n Error: The server has encountered an internal error, please try again. \n";
			}
			var text = "\n"+obj.met+": \n\n";
			if ('undefined' !== typeof obj.error){
				text = text+"\n Error: "+obj.error+" \n";
			}else {
					if ('undefined' !== typeof obj.errorcode){
						text = text+"Error Status: \n  Error code: "+obj.errorcode+"\n"+"  Error message: "+obj.errormessage+"\n";
					}else{
						text = text+" ID: "+obj.itemid+"\n\n";
						for (i=0;i<obj.URLs.length;i++){
							j = i+1;
							if ('INIT UPLOAD' == obj.met) {
								text = text+" The Upload URL is: "+obj.URLs[i]+"\n";							
							}else {
								text = text+" The Upload URL number "+j+" is: "+obj.URLs[i]+"\n";
								}								
						}
						addData(fileCount,obj.itemid,obj.URLs);					
					}
			}	
		}
		text = text+"\n----------------------------------------------------------------------------------------------------\n";
        document.getElementById('texxt').value = text+document.getElementById('texxt').value; 		  
		}
		}); 
		}		
}

function addData(fileCount,itemid,urls){
	for (i=1;i<=fileCount;i++){
		var j = 'form'+i;
		var k = 'bid'+i;
		document.getElementById(j).setAttribute('action',urls[i-1]);
		document.getElementById(k).setAttribute('value',itemid);
	}
	sendall(1,fileCount);
}
	
function addCountedFields(fieldCount,itemid,urls){
	document.getElementById('button2').setAttribute('class','hidden');
	document.getElementById('labelh').setAttribute('class','hidden');
	var uploadOb = document.getElementById('uploadDiv');
	var valOb = document.getElementById('someValue');
	var num = (document.getElementById('someValue').value -1)+ 2;
	valOb.value = num;
	if (('undefined' == typeof fieldCount)||('' == fieldCount)){
		fieldCount = 1;
	}
	for (i=0;i<fieldCount;i++){
		var newDivName = "div"+i;
		var newDiv = document.createElement('div');
		newDiv.innerHTML = "<form id='form"+i+"' class='autoform' enctype='multipart/form-data' action='"+urls[i]+"' method='post'><div id='prog"+i+"' class='black'>Not Uploaded</div> <input type='file' class='autoform' name='fname' size='80'/> <input type='hidden' id='bid' name='bid' value='"+itemid+"'/> </form>";
		uploadOb.appendChild(newDiv);
	}
	document.getElementById('button1').setAttribute('class','button1');
	document.getElementById('hiddenitc').setAttribute('value',fieldCount);
}	

function sendall(i,fileCount){
		var n = fileCount;
		if ('undefined' == typeof n){
			n = 1;
		}
		var j = 'prog'+i;
		var options = {
				forceSync: true,
				dataType: 'xml',
				beforeSend: function(){
					document.getElementById(j).innerHTML = 'In progress...';
					document.getElementById(j).setAttribute('class','green');
				},
				error: function(){
					if (i<n) {
						document.getElementById(j).innerHTML = 'Done';
						document.getElementById(j).setAttribute('class','blue');
						sendall(i+1,fileCount);
					}else{
						document.getElementById(j).innerHTML = 'Done';
						document.getElementById(j).setAttribute('class','blue');
						if (document.getElementById('method').value == 'preparesend'){
							dostuff('commitsend','SendMethods.php',document.getElementById('token').value,document.getElementById('sendemailnotif').checked,document.getElementById('expiration').value,document.getElementById('bid1').value)
						}else {
							dostuff('commitupload','StoreMethods.php',document.getElementById('token').value,document.getElementById('parent').value,document.getElementById('bid1').value)
						}
						}
				},
				success: function(){

					if (i<n) {
						document.getElementById(j).innerHTML = 'Done';
						document.getElementById(j).setAttribute('class','blue');
						sendall(i+1,fileCount);
					}else{					
						document.getElementById(j).innerHTML = 'Done';
						document.getElementById(j).setAttribute('class','blue');						
						if (document.getElementById('method').value == 'preparesend'){
							dostuff('commitsend','SendMethods.php',document.getElementById('token').value,document.getElementById('sendemailnotif').checked,document.getElementById('expiration').value,document.getElementById('bid1').value)
						}else {
							dostuff('commitupload','StoreMethods.php',document.getElementById('token').value,document.getElementById('parent').value,document.getElementById('bid1').value)
						}
						}
				}
		}			
		$('#form'+i).ajaxSubmit(options);
}
	

function processResponse(data) {
		document.getElementById('texxt').value = data+document.getElementById('texxt').value; 		
}	

function getOption(id){

	var x=document.getElementById(id).selectedIndex;
	var y=document.getElementById(id).options;
	return y[x].text;
}

function dostuff(){
		method = arguments[0];
		file = arguments[1];
		params = new Array();
		for( var i = 2; i < arguments.length; i++ ) {
			params.push(arguments[i]);
		}
		 document.body.style.cursor = "wait";
		SendRequest(file, method, params);
}