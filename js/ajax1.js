var xmlhttp = '';
var element = '';


function createRequestObject(htmlObjectId){
    var obj;
    var browser = navigator.appName;
    
    element = document.getElementById(htmlObjectId);
    
	if(window.XMLHttpRequest)
	{
		try 
		{
			xmlhttp = new XMLHttpRequest();
		} 
		catch(e)
		{
			xmlhttp = false;
		}
	// branch for IE/Windows ActiveX version
	} 
	else if(window.ActiveXObject) 
	{
		try 
		{
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(e)
		{
			try
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			} 
			catch(e) 
			{
				xmlhttp = false;
			}
		}
	}
	
    return xmlhttp;    
}

function sendRequest(serverFileName, queryString, htmlObjectId,method,func) {
	
	xmlhttp=createRequestObject(htmlObjectId);
	if(method=='Post')
	{
		xmlhttp.open("POST", serverFileName,true); 
		xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		xmlhttp.send(queryString);
		xmlhttp.onreadystatechange = function() { 
		  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
		  	element.innerHTML = xmlhttp.responseText; 	
			if(func){
			  func();
			}
		  } 
		}
		
	}
	else
	{
		xmlhttp.open("GET", serverFileName+"?"+queryString); 
		xmlhttp.onreadystatechange = function() { 
		  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
		  	element.innerHTML = xmlhttp.responseText; 
			if(func){
			  func();
			}
		  } 
		} 
		xmlhttp.send(null); 
			
	}

}

