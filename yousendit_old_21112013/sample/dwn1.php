<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!--  /**********************************************************************************************
 * Copyright 2012 YouSendIt, Inc. All Rights Reserved.
*
* Licensed under the YouSendIt API agreement. You may not use this file except in compliance
* with the License.
*
* This is a sample file distributed on an "AS IS" basis, WITHOUT WARRANTIES OR CONDITIONS OF
* ANY KIND, either expressed or implied. See the API License for the specific language
* governing permissions and limitations.
*********************************************************************************************/-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="appstyle.css" rel="stylesheet" type="text/css">
</head>
<?php 
session_start();
if (isset($_GET['err'])) {
 $err = $_GET['err'];	
 switch ($err){
	case '1':{
		echo '<span style="color:red;"><h4><b>Error: Empty authentication token field. Please fill the authentication token field and try again.</b></h4></span>';
		break;
	}
	case '2':{
		echo '<span style="color:red;"><h4><b>Error: Empty download URL field. Please fill the download URL field and try again.</b></h4></span>';
		break;
	}
	case '3':{
		echo '<span style="color:red;"><h4><b>Error: The download has failed. Please provide valid download data and try again.</b></h4></span>';
		break;
	}
	case '4':{
		echo '<span style="color:red;"><h4><b>Error: Empty authentication token and download URL fields. Please fill all the mandatory fields and try again.</b></h4></span>';
		break;
	}
}
}
?>
<h2><span class="ttitle">Download File:</span></h2>
<form id="downloadf" action="SendMethods.php" method="post">
	<table>
		<tr>
			<td><b>Auth Token*: </b>
			</td>
			<td><input type="text" name="token" id="token" size="50"
				maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" />
			</td>
		</tr>
		<tr>
			<td><b>Download URL*: </b></td>
			<td><input type="text" id="durl" name="durl" size="100" /></td>
		</tr>
		<tr>
			<td><b>Password: </b></td>
			<td><input type="text" name="psw" id="password" size="50"
				maxlength="500" value="" /></td>
		</tr>

		<tr>
			<td colspan="2"><input type="hidden" id="method" name="method"
				value="downloadafile" /></td>
		</tr>
		<tr>
			<td colspan="2"><label id="label"
				style="text-align: center; font-style: italic">Fields with * are
					required.</label></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" class="button1" value="Submit" />
			</td>
		</tr>
	</table>
</form>
