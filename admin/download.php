<?php 
/*******************************************************************
* Description: this page contains Download po images
* Author: Varaprasad.K
* Date: 02/15/2011 (DD/MM/YYYY)
* Modified time:  (DD/MM/YYYY)
* Revision:
* Modified by 
* Modified Date 
* Reason for modification
* xxxxx Xx/xx/xxxx xxxxx
******************************************************************* */
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
if(isset($_REQUEST['imag']) && $_REQUEST['imag']!='')
{	
	$img =base64_decode($_REQUEST['imag']);
	$dotPos = strrpos($img,'.');
	//$img_name = substr("$img",0,$dotPos);
	$img_ext = substr("$img",$dotPos+1);
	$ext= array("jpg","jpeg","JPG","JPEG","png","PNG","gif","GIF","doc","DOC","docx","DOCX","zip","ZIP","bmp","pdf","PDF","htm","html","txt");	  			
	if (in_array($img_ext, $ext))
	{
		if(isset($_REQUEST['folder']) && $_REQUEST['folder'] == "admin")
			$down= SITEPATH."/Secured/".$_REQUEST['Un']."/adminUploads/".$img;
		else				
			$down= SITEPATH."/Secured/".$_REQUEST['Un']."/uploads/".$img;
		// We'll be outputting a PDF
		header('Content-type: application/'.$img_ext);

		// It will be called downloaded.pdf
		header('Content-Disposition: attachment; filename='.$img);

		// The PDF source is in original.pdf
		readfile($down);

		/*if(file_exists($down))
		{
			header('Content-type: application/'.$img_ext);
			header("Content-Disposition: attachment; filename=".$down);
			header("Content-Length: ".filesize("$down"));
			readfile($down);
		}*/
	}
}
?>