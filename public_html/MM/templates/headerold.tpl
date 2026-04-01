<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>RSVP</title>
<link href="css/template_css.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.js"></script>
{literal}
<script language="javascript" type="text/javascript">
	var site_path = "{/literal}{$siteurl}{literal}";
	var img_path = "{/literal}{$siteurl}{literal}/images";
</script>
{/literal}
</head>
<body>
<div id="container">
<!--header-->
<div id="header">
<div class="logo"><a href="#"><!--<img src="images/logo.png" alt="" border="0" />--></a></div>
<div class="header-right"><img src="images/email.png" alt="" align="absmiddle" /> <a href="#" class="whitelinks">Contact Us</a></div>
<div class="clear"></div>
</div>
<!--end header-->
<!--nav-->
<div id="nav">
<ul>
<li><a href="{$siteurl}" {if $Page eq 'Home'}  class="active"{/if}><span>Home</span></a></li>
{if $smarty.session.User.UID eq ''}
<li><a href="{$siteurl}/register.php" {if $Page eq 'Register'}  class="active"{/if}><span>Register</span></a></li>
	<li><a href="{$siteurl}/login.php" {if $Page eq 'Login'} class="active"{/if}><span>Login</span></a></li>
{/if}
<li><a href="{$siteurl}/blog/" target="_blank"><span>Blog</span></a></li>
{if $smarty.session.User.UID neq ''}
	<li><a href="{$siteurl}/myaccount.php" {if $Page eq 'MyAccount'}  class="active"{/if}><span>My Account</span></a></li>
	<li><a href="{$siteurl}/logout.php"><span>Logout</span></a></li>
{/if}
</ul>
<div class="clear"></div>
</div>
<!--end nav-->

