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

var xmlhttp = false;
function SendRequest(file, method, params) {

	var toSend = "method=" + method + "&var0=";
	for ( var i = 0; i < params.length; i++) {

		if (i == (params.length - 1)) {
			toSend = toSend + params[i];
		} else {
			var k = i + 1;
			toSend = toSend + params[i] + "&var" + k + "=";
		}
	}
	try {
		// Opera 8.0+, Firefox, Safari
		xmlhttp = new XMLHttpRequest();
	} catch (e) {
		// Internet Explorer Browsers
		try {
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	xmlhttp.open("POST", file, true);
	var parameterString = encodeURI(toSend);
	xmlhttp.setRequestHeader("Content-type",
			"application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", parameterString.length);
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById('texxt').value = xmlhttp.responseText
					+ document.getElementById('texxt').value;
			document.body.style.cursor = "default";
						$("#spinner").html('');
		}
	}
		$("#spinner").html('<img src="images/roller.gif" alt="Wait" />');
	xmlhttp.send(parameterString);

	return false;
}