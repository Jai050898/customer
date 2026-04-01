<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Motor Head Marketing</title>
<meta name="google-site-verification" content="0l-BywtknKxisRAiEGF_lzewtnuPrejOUgFsKbkH8XQ" />
<meta name="keywords" content="">
<meta name="description" content="">
<link href="{$siteurl}/css/style.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.js"></script>
{literal}
<script language="javascript" type="text/javascript">
	var site_path = "{/literal}{$siteurl}{literal}";
	var img_path = "{/literal}{$siteurl}{literal}/images";
</script>
{/literal}
</head>
<body>
<div id="wrapper">
  <div id="container">
    <div id="header">
      <div id="logo"></div>
      <div id="login22" >
         SEO Panel
      </div>
       <div class="clr"></div>
	   {if $smarty.session.SEO.ID neq ""}
      <div  class="admin_nav">WELCOME {$smarty.session.SEO.Name} / <a href="{$siteurl}/seo/logout.php">Sign out</a></div>
	  {/if}
      <div class="clr"></div>
      
    </div>