// JavaScript Document

	function checkOther(chkSetId,formName,otherChkVal,othertxtFieldName)

	{

		var objFrm = eval("document."+formName);

		for (var i=0; i <objFrm.elements.length; i++)

		{

			

			if(objFrm.elements[i].name==chkSetId)

			{

				if(objFrm.elements[i].value==otherChkVal && objFrm.elements[i].checked==true)

				{

					valOtherTextField=eval("document."+formName+"."+othertxtFieldName+".value");

					

					if(trimSpace(valOtherTextField)=='')

					{

						alert("Please enter the detail");

						eval("document."+formName+"."+othertxtFieldName+".focus()");

						return 1;

					}

					else

					{

						return 2;

					}

				}

			}

		}



	}



	function trimSpace(strval)

	{

		var trimmed = strval.replace(/^\s+|\s+$/g, '') ;

		return trimmed;

	}

	function checkNumber(strval)

	{

		var trimmed = strval.replace(/^\s+|\s+$/g, '') ;
		
		var trimmed = strval.replace(",", '') ;

		if(isNaN(trimmed))
			return false;
		else
			return true;

	}

	function toggleDiv(show,divId)

	{

		objDiv=eval("document.getElementById('"+divId+"')");

		if(show==1)

		{	

			objDiv.style.display='block';

		}

		else

		{	

			objDiv.style.display='none';

		}

	}

	

function IsValidTime(timeStr) {

	// Checks if time is in HH:MM:SS AM/PM format.

	// The seconds and AM/PM are optional.

	

	var timePat = /^(\d{1,2}):(\d{2})(:(\d{2}))?(\s?(AM|am|PM|pm))?$/;

	

	var matchArray = timeStr.match(timePat);

	if (matchArray == null) {

		alert("Time is not in a valid format.");

		return 2;

	}

	hour = matchArray[1];

	minute = matchArray[2];

	

	

	if (hour < 0  || hour > 12) {

		alert("Hour must be between 1 and 12.");

		return 2;

	}

	if (minute<0 || minute > 59) {

		alert ("Minute must be between 0 and 59.");

		return 2;

	}

	return 1;

}



function echeck(str) {



		var at="@"

		var dot="."

		var lat=str.indexOf(at)

		var lstr=str.length

		var ldot=str.indexOf(dot)

		if (str.indexOf(at)==-1){

		   alert("Invalid E-mail ID")

		   return false

		}



		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){

		   alert("Invalid E-mail ID")

		   return false

		}



		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){

		    alert("Invalid E-mail ID")

		    return false

		}



		 if (str.indexOf(at,(lat+1))!=-1){

		    alert("Invalid E-mail ID")

		    return false

		 }



		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){

		    alert("Invalid E-mail ID")

		    return false

		 }



		 if (str.indexOf(dot,(lat+2))==-1){

		    alert("Invalid E-mail ID")

		    return false

		 }

		

		 if (str.indexOf(" ")!=-1){

		    alert("Invalid E-mail ID")

		    return false

		 }



 		 return true					

	}

	

function setChecked(chkSetId,formName,otherChkVal)

{

	

	var objFrm = eval("document."+formName);

	for (var i=0; i <objFrm.elements.length; i++)

	{

		

		if(objFrm.elements[i].id==chkSetId)

		{

			if(objFrm.elements[i].value==otherChkVal)

			{

				objFrm.elements[i].checked=true;

			}

		}

	}

	

	

}



function keyRestrict(e, validchars)

{

  var key='', keychar='';

  key = getKeyCode(e);

  if (key == null) return true;

  keychar = String.fromCharCode(key);

  keychar = keychar.toLowerCase();

  validchars = validchars.toLowerCase();

  if (validchars.indexOf(keychar) != -1)

   return true;

  if ( key==null || key==0 || key==8 || key==9 || key==13 || key==27 )

   return true;

  //alert("Plese enter a valid character.");

  return false;

} 



function getKeyCode(e)

{

  if (window.event)

   return window.event.keyCode;

  else if (e)

   return e.which;

  else

   return null;

}

function valid_number(f)

{

	var re = /^[0-9,\-,.]*$/; 

	if (!re.test(f.value))

	{

	//alert("Name field should be alphabet only!");

	alert("Value should be numeric only!");

	f.value = f.value.replace(/[^0-9,\-,.]/g,""); 

	}

}



function clearField(elementId)

{

	alert(helloNode.childNodes.length); 

}



