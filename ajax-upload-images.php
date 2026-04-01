<?php
require_once("includes/application_start.php");
/*************************** creating new resize image**************************************************/
function generateResizeImage($image, $root, $uploaddir, $maxWidth=100, $maxHeight=100)
{
	define('MEMORY_TO_ALLOCATE',	'500M'); 
	define('DEFAULT_QUALITY',		90);
	// Get the size and MIME type of the requested image
	$size			= GetImageSize($root . $image);
	$mime			= $size['mime'];	
	$width			= $size[0];
	$height			= $size[1];
	$maxWidth		= (isset($maxWidth)) ? (int) $maxWidth : 0;
	$maxHeight		= (isset($maxHeight)) ? (int) $maxHeight : 0;
	$color			= FALSE;
	// If either a max width or max height are not specified, we default to something
	// large so the unspecified dimension isn't a constraint on our resized image.
	// If neither are specified but the color is, we aren't going to be resizing at
	// all, just coloring.
	if (!$maxWidth && $maxHeight)
	{
		$maxWidth	= 99999999999999;
	}
	elseif ($maxWidth && !$maxHeight)
	{
		$maxHeight	= 99999999999999;
	}
	elseif ($color && !$maxWidth && !$maxHeight)
	{
		$maxWidth	= $width;
		$maxHeight	= $height;
	}
	$resized				= $uploaddir . $image; // destination file
	// If we don't have a max width or max height, OR the image is smaller than both
	// we do not want to resize it, so we simply output the original image and exit
	if ((!$maxWidth && !$maxHeight) || (!$color && $maxWidth >= $width && $maxHeight >= $height))
	{
		copy($root . $image, $resized);
		return true;
	}
	// Ratio cropping
	$offsetX		= 0;
	$offsetY		= 0;
	// Setting up the ratios needed for resizing. We will compare these below to determine how to
	// resize the image (based on height or based on width)
	$xRatio			= $maxWidth / $width;
	$yRatio			= $maxHeight / $height;
	if ($xRatio * $height < $maxHeight)
	{
		 // Resize the image based on width
		$tnHeight	= ceil($xRatio * $height);
		$tnWidth	= $maxWidth;
	}
	else // Resize the image based on height
	{
		$tnWidth	= ceil($yRatio * $width);
		$tnHeight	= $maxHeight;
	}
	// Determine the quality of the output image
	$quality		= DEFAULT_QUALITY;
	// We don't want to run out of memory
	ini_set('memory_limit', MEMORY_TO_ALLOCATE);
	// Set up a blank canvas for our resized image (destination)
	$dst			= imagecreatetruecolor($tnWidth, $tnHeight);
	// Set up the appropriate image handling functions based on the original image's mime type
	switch ($size['mime'])
	{
		case 'image/gif':
			// We will be converting GIFs to PNGs to avoid transparency issues when resizing GIFs
			// This is maybe not the ideal solution, but IE6 can suck it
			$creationFunction	= 'ImageCreateFromGif';
			$outputFunction		= 'ImagePng';
			$mime				= 'image/png'; // We need to convert GIFs to PNGs
			$doSharpen			= FALSE;
			$quality			= round(10 - ($quality / 10)); // We are converting the GIF to a PNG and PNG needs a compression level of 0 (no compression) through 9
		break;
		case 'image/x-png':
		
		case 'image/png':
			$creationFunction	= 'ImageCreateFromPng';
			$outputFunction		= 'ImagePng';
			$doSharpen				= FALSE;
			$quality						= round(10 - ($quality / 10)); // PNG needs a compression level of 0 (no compression) through 9
		break;
		default:
			$creationFunction	= 'ImageCreateFromJpeg';
			$outputFunction	 	= 'ImageJpeg';
			$doSharpen				= TRUE;
		break;
	}//switch
	// Read in the original image
	$src					= $creationFunction($root . $image);
	if (in_array($size['mime'], array('image/gif', 'image/png')))
	{
		if (!$color)
		{
			// If this is a GIF or a PNG, we need to set up transparency
			imagealphablending($dst, false);
			imagesavealpha($dst, true);
		}
		else
		{
			// Fill the background with the specified color for matting purposes
			if ($color[0] == '#')
				$color				 	= substr($color, 1);
			$background	= FALSE;
			if (strlen($color) == 6)
				$background		= imagecolorallocate($dst, hexdec($color[0].$color[1]), hexdec($color[2].$color[3]), hexdec($color[4].$color[5]));
			else if (strlen($color) == 3)
				$background		= imagecolorallocate($dst, hexdec($color[0].$color[0]), hexdec($color[1].$color[1]), hexdec($color[2].$color[2]));
			if ($background)
				imagefill($dst, 0, 0, $background);
			}//else
		}//if
	// Resample the original image into the resized canvas we set up earlier
	ImageCopyResampled($dst, $src, 0, 0, $offsetX, $offsetY, $tnWidth, $tnHeight, $width, $height);
	if ($doSharpen && function_exists(imageconvolution))
	{
		// Sharpen the image based on two things:
		//	(1) the difference between the original size and the final size
		//	(2) the final size
		$sharpness  				= findSharp($width, $tnWidth);
		$sharpenMatrix			= array(
			array(-1, -2, -1),
			array(-2, $sharpness + 12, -2),
			array(-1, -2, -1)
		);
		$divisor						= $sharpness;
		$offset						= 0;
		imageconvolution($dst, $sharpenMatrix, $divisor, $offset);
	}//if
	// Write the resized image to the cache
	$outputFunction($dst, $resized, $quality);
	// Clean up the memory
	ImageDestroy($src);
	ImageDestroy($dst);
}//imageresize()
/*********************findSharpness of the image********************/
function findSharp($orig, $final) 
{
	$final		= $final * (750.0 / $orig);
	$a			= 52;
	$b			= -0.27810650887573124;
	$c			= .00047337278106508946;
	$result 	= $a + $b * $final + $c * $final * $final;
	return max(round($result), 0);
} // findSharp()
?>