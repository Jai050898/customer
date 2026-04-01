<?php /* Smarty version 2.6.26, created on 2012-11-16 06:20:11
         compiled from header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Motor Head Marketing</title>
<meta name="google-site-verification" content="0l-BywtknKxisRAiEGF_lzewtnuPrejOUgFsKbkH8XQ" />
<meta name="keywords" content="">
<meta name="description" content="">
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/style.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
	var site_path = "'; ?>
<?php echo $this->_tpl_vars['siteurl']; ?>
<?php echo '";
	var img_path = "'; ?>
<?php echo $this->_tpl_vars['siteurl']; ?>
<?php echo '/images";
</script>
'; ?>

</head>
<body>
<div id="wrapper">
  <div id="container">
    <div id="header">
      <div id="logo"></div>
      <div id="login22" >
         Admin Panel
      </div>
       <div class="clr"></div>
	   <?php if ($_SESSION['Admin']['ID'] != ""): ?>
      <div  class="admin_nav">WELCOME Administrator / <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/logout.php">Sign out</a></div>
	  <?php endif; ?>
      <div class="clr"></div>
      
    </div>