<?php
/* Smarty version 3.1.48, created on 2026-03-31 11:01:06
  from '/var/www/html/admin/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cba972908d12_90658364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4634371c8d04b6cc9cae07b0c661b3492125f3c2' => 
    array (
      0 => '/var/www/html/admin/templates/header.tpl',
      1 => 1774346200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cba972908d12_90658364 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Motorhead Marketing</title>
<meta name="google-site-verification" content="0l-BywtknKxisRAiEGF_lzewtnuPrejOUgFsKbkH8XQ" />
<meta name="keywords" content="">
<meta name="description" content="">
<link href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/css/style.css" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/jquery.1.8.2.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
	var site_path = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var img_path = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images";
<?php echo '</script'; ?>
>

</head>
<?php if ($_smarty_tpl->tpl_vars['Page1']->value != '') {?>
<body onload="load();" onunload="GUnload();">
<?php } else { ?>
<body>
<?php }?>
<div id="wrapper">
  <div id="container">
    <div id="header">
      <div id="logo"></div>
      <div id="login22" >
         Admin Panel
      </div>
       <div class="clr"></div>
	   <?php if ($_SESSION['Admin']['ID'] != '') {?>
      <div  class="admin_nav">WELCOME Administrator / <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/logout.php">Sign out</a></div>
	  <?php }?>
      <div class="clr"></div>
      
    </div><?php }
}
