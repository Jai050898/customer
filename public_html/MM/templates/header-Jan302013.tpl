<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Motor Head Marketing</title>
<link href="css/template_css.css" rel="stylesheet" type="text/css" />
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
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
<div id="body">
<!--nav-->
<div id="nav">
  <ul>
    {if $smarty.session.User.UID eq ''}
    <li><a href="{$siteurl}/login.php" {if $Page eq 'Login'} class="active"{/if}><span>Login</span></a></li>
    {/if}
    {if $smarty.session.User.UID neq ''}
	<li><a href="{$siteurl}/dashboard.php" {if $Page eq 'Home'}  class="active"{/if}><span>Home</span></a></li>
	<li><a href="{$siteurl}/blog/" {if $Page eq 'blog'}  class="active"{/if}><span>Blog</span></a></li>
	<li><a href="{$siteurl}/wiki/" {if $Page eq 'Wiki'}  class="active"{/if}><span>Wiki</span></a></li>
    <li><a href="{$siteurl}/myaccount.php" {if $Page eq 'MyAccount'}  class="active"{/if}><span>My Account</span></a></li>
    <li><a href="{$siteurl}/logout.php"><span>Logout</span></a></li>
    {/if}
    <!-- <li><a href="{$siteurl}/portfolio.php"><span>Portfolio</span></a></li> -->
  </ul>
  <div class="clear"></div>
</div>
<!--end nav-->
