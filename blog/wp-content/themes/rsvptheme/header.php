<?php 
//include("../../customer/includes/application_start.php");
include("../../customer/includes/menu_items_blog.php");

	$Page = 'resources';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php bloginfo('name');?> <?php if(is_single()) { ?>&raquo; Blog Archive <?php } ?> <?php wp_title();?></title>
<link href="<?php echo SITEURL;?>/css/thickbox.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="<?php echo SITEURL;?>/js/jquery.js"></script>
<link href="<?php echo SITEURL;?>/css/template_css.css" rel="stylesheet" type="text/css" media="screen" />
<!--<link href="style.css" rel="stylesheet" type="text/css" media="screen" />-->
</head>
<body>
<div id="container">
    <div id='__livechat-assist'></div>

<script type='text/javascript'>(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = '//traffic3.helponclick.com/assist?lang=en&a=531e17775654497086117084a2d1033f&mode=widget&widget=r&ho=1';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();</script>
    
<div style='display:none'><a href='http://www.helponclick.com'>Live Chat Software</a></div>
<div id="body">
    <!--START of header part -->
	<div id="nav">
            <?php if($_SESSION['User']['UID'] == '') { ?>
            <ul>
		
		<li><a href="<?php echo SITEURL; ?>" ><span>Home</span></a></li>
		<li><a href="<?php echo SITEURL; ?>/register.php" ><span>Register</span></a></li>
		<li><a href="<?php echo SITEURL; ?>/login.php" ><span>Login</span></a></li>
		
		
	  </ul>
            <?php }else{ 
                
                echo $ret;
            } ?>
	  
	  <div class="clear"></div>
	</div>
    <!--END of header part -->
