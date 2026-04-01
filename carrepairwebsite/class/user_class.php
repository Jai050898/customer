<?php
/*********************************************************************
* Description: Class File for the User Related Functions.
* Author: primaccess
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
class User extends General
{
	/************* Function to Get the list of Countries in the Site **********/
	function GetCountries()
	{
		$Qry = "SELECT Country_Code,Country_Name FROM tbl_country ORDER BY Country_Name";
		$arrcountries = $this->SelectQuery($Qry);
		return $arrcountries;
	}
	/********** Function to get the list of States of a selected Country ****/
	function GetCountryStates($code)
	{
		$Qry = "SELECT State_ID,State_Name FROM tbl_states WHERE Country_Code  = '".$code."' ORDER BY State_Name";
		//echo $Qry;exit;
		$states = $this->SelectQuery($Qry);
		return $states;
	}
	function GetCategoryName($CatID)
	{
		$Qry = "SELECT Category_Name FROM tbl_categories WHERE Category_ID  = '".$CatID."'";
		$CatName = $this->SelectQuery($Qry);
		return $CatName[0]['Category_Name'];
	}
	/************* Function to Get the list of Product Categories in the Site **********/
	function GetAllCategories($parent=null)
	{
		if(isset($parent) && $parent !='')
			$Qry = "SELECT Category_ID,Category_Name FROM tbl_categories WHERE status = 'A' AND Parent_ID = '".$parent."' ORDER BY Category_Name";
		else
			$Qry = "SELECT Category_ID,Category_Name FROM tbl_categories WHERE status = 'A' AND Parent_ID = '0' ORDER BY Category_Name";
		$arrCat = $this->SelectQuery($Qry);
		return $arrCat;
	}
	/*********** Function to get the Country Name of Selected Country **********/
	function GetCountryName($Code)
	{
		$Qry = "SELECT Country_Name FROM tbl_country WHERE Country_Code = '".$Code."'";
		$Country = $this->SelectQuery($Qry);
		return $Country[0]['Country_Name'];
	}
	/************ Function to get the State name of the Selected State in Country ************/
	function GetStateName($Code,$State_ID)
	{
		$Qry = "SELECT State_Name FROM tbl_states WHERE Country_Code  = '".$Code."' AND State_ID = ".$State_ID;
		$states = $this->SelectQuery($Qry);
		return $states[0]['State_Name'];
	}
	/*********** Function to get the Company Name of Selected Country **********/
	function GetAllCompanys($where)
	{
		$Qry = "SELECT ID,Company_Name FROM tbl_companies WHERE ".$where;
		$Companies = $this->SelectQuery($Qry);
		return $Companies;
	}
	/***************** Function For Send Mail to the User From Admin *******************************/	
	function mymail($tomail,$frommail,$subject,$username,$message)
	{
		//echo $tomail."+++".$frommail."@@".$subject."##".$username."&&".$message;
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: ".$frommail;
		$msg = "<html>
		<head>
		<style type='text/css'>
		body{padding:0px; margin:0px; font-family:Arial; font-size:12px; color:#0000; line-height:12px;}
		bluefontbig{font-family:Arial;font-size:12px; font-weight:bold; color:#0079DE;
		</style>
		</head>
		<body>
		<table width='600' cellpadding='2' cellspacing='0' style='font-size:12px;'>
		<tr> 
		<td><b>Hi ".ucfirst($username)."</b>,<br><br><br>".$message;
		$msg .= "<br><br>";
		$msg .= "Kind regards,<br>
		<strong class='bluefontbig'>Autorepairmarketing.com Team</strong>
		</td>
		</tr>
		</table>
		<br><br>
		</body>
		</html> ";
		//echo "<pre>".$subject.$headers;print_r($msg);exit;
		if(@mail($tomail,$subject,$msg,$headers))
		 	$msgs = "Mail Successfully Sent";
		return $msgs;
	}
	/********** Function to get the Response for the Entered Credit Card Details 267080362 **************/
	function PPHttpPost($methodName_, $nvpStr_) {
		global $environment;
	
		// Set up your API credentials, PayPal end point, and API version.
		/*********** Local ******************/
		$API_UserName = urlencode('potlur_1250162661_biz_api1.primaccess.com');
		$API_Password = urlencode('1250162669');
		$API_Signature = urlencode('AFcWxV21C7fd0v3bYYYRCpSSRl31ArGvuodx5M-3F5H7xs6YOg59.1Gr');
		/************ Online ***************/
		//$API_UserName = urlencode('accounts_api1.projectdeals.com');
		//$API_Password = urlencode('VGN6TZ9M8CJ6MK3N');
		//$API_Signature = urlencode('AFcWxV21C7fd0v3bYYYRCpSSRl31AFmyuILE4G.win6LBBBOUk7yRdHX');
		
		$API_Endpoint = "https://api-3t.paypal.com/nvp";
		if("sandbox" === $environment || "beta-sandbox" === $environment) {
			$API_Endpoint = "https://api-3t.$environment.paypal.com/nvp";
		}
		$version = urlencode('51.0');
	
		// Set the curl parameters.
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $API_Endpoint);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
	
		// Turn off the server and peer verification (TrustManager Concept).
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
	
		// Set the API operation, version, and API signature in the request.
		$nvpreq = "METHOD=$methodName_&VERSION=$version&PWD=$API_Password&USER=$API_UserName&SIGNATURE=$API_Signature$nvpStr_";
	
		// Set the request as a POST FIELD for curl.
		curl_setopt($ch, CURLOPT_POSTFIELDS, $nvpreq);
	
		// Get response from the server.
		$httpResponse = curl_exec($ch);
	
		if(!$httpResponse) {
			exit("$methodName_ failed: ".curl_error($ch).'('.curl_errno($ch).')');
		}
	
		// Extract the response details.
		$httpResponseAr = explode("&", $httpResponse);
	
		$httpParsedResponseAr = array();
		foreach ($httpResponseAr as $i => $value) {
			$tmpAr = explode("=", $value);
			if(sizeof($tmpAr) > 1) {
				$httpParsedResponseAr[$tmpAr[0]] = $tmpAr[1];
			}
		}
	
		if((0 == sizeof($httpParsedResponseAr)) || !array_key_exists('ACK', $httpParsedResponseAr)) {
			exit("Invalid HTTP Response for POST request($nvpreq) to $API_Endpoint.");
		}
	
		return $httpParsedResponseAr;
	}
	function rotateImage($sourceFile,$destImageName,$degreeOfRotation)
	{
		//function to rotate an image in PHP
		//developed by Roshan Bhattara (http://roshanbh.com.np)
		//get the detail of the image
		$imageinfo=getimagesize($sourceFile);
		switch($imageinfo['mime'])
		{
			//create the image according to the content type
			case "image/jpg":
			case "image/jpeg":
			case "image/pjpeg": //for IE
				$src_img=imagecreatefromjpeg("$sourceFile");
						break;
			case "image/gif":
				$src_img = imagecreatefromgif("$sourceFile");
						break;
			case "image/png":
				case "image/x-png": //for IE
				$src_img = imagecreatefrompng("$sourceFile");
						break;
		}
		//rotate the image according to the spcified degree
		$src_img = imagerotate($src_img, $degreeOfRotation, 0);
		//output the image to a file
		imagejpeg ($src_img,$destImageName);
	}
	function watermarkImage($SourceFile, $WaterMarkText, $DestinationFile)
	{
		list($width, $height) 	= getimagesize($SourceFile);
		$ImageInfo				= getimagesize($SourceFile);
		$image_p 				= imagecreatetruecolor($width, $height);
		switch($ImageInfo['mime'])
		{
			case	'image/jpeg'	:	
			case	'image/jpg'		:	
			case	'image/pjpeg'	:	$image = imagecreatefromjpeg($SourceFile);	break;
			
			case	'image/gif'		:	$image = imagecreatefromgif($SourceFile);	break;
			case	'image/png'		:	
			case	'image/x-png'	:	$image = imagecreatefrompng($SourceFile);	break;
			
		}
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height);
		$black = imagecolorallocate($image_p, 255, 255, 255);
		$font = 'arial.ttf';
		$font_size = 22;
		imagettftext($image_p, $font_size, 45, 30, $height-10, $black, $font, $WaterMarkText);
		if ($DestinationFile<>'')
			imagejpeg ($image_p, $DestinationFile, 100);
		else
		{
			header('Content-Type: image/jpeg');
			imagejpeg($image_p, null, 100);
		};
		imagedestroy($image);
		imagedestroy($image_p);
	}
	function ConvVideotoFlv($srcFile,$destFile,$img)
	{
		// Create our FFMPEG-PHP class
		$ffmpegObj 	= new ffmpeg_movie($srcFile);
		// Save our needed variables
		$srcWidth	= $this->makeMultipleTwo($ffmpegObj->getFrameWidth());
		$srcHeight 	= $this->makeMultipleTwo($ffmpegObj->getFrameHeight());
		$srcFPS 	= $ffmpegObj->getFrameRate();
		$srcAB 		= intval($ffmpegObj->getAudioBitRate()/1000);
		$srcAR 		= $ffmpegObj->getAudioSampleRate();
		$command	= "ffmpeg -i " . $srcFile . " -ar  ".$srcAR." -ab ".$srcAB." -f flv -s " . $srcWidth . "x" . $srcHeight . " " . $destFile . " 2>&1";
		exec($command,$out,$ret);
		$imgcommand	= "ffmpeg -i " . $srcFile . " -ss 10 -t 1 -f mjpeg "."videos/thumbnails/".$img." 2>&1";
		exec($imgcommand,$out,$ret);
		$this->generateResizeImage($img,"videos/thumbnails/","videos/thumbnails/",100,100);
		return $ret;
	}
	function makeMultipleTwo ($value)
	{
		$sType = gettype($value/2);
		if($sType == "integer")
			return $value;
		else 
			return ($value-1);
	}
}		
?>