<?php
/* Smarty version 3.1.48, created on 2026-03-31 11:24:57
  from '/var/www/html/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbaf09b5b0e4_37436090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88dbf58bd600aa27802129682ad443d483d9dea4' => 
    array (
      0 => '/var/www/html/templates/header.tpl',
      1 => 1774343754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cbaf09b5b0e4_37436090 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Motorhead Marketing</title>
<link href="css/template_css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/css/thickbox.css" rel="stylesheet" type="text/css">
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
<!-- Start of Async HubSpot Analytics Code -->
<?php echo '<script'; ?>
 type="text/javascript">
(function(d,s,i,r) {
if (d.getElementById(i)){return;}
var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/423727.js';
e.parentNode.insertBefore(n, e);
})(document,"script","hs-analytics",300000);
<?php echo '</script'; ?>
>
<!-- End of Async HubSpot Analytics Code -->




</head>
<?php if ($_smarty_tpl->tpl_vars['Page1']->value != '') {?>
<body onload="load();" onunload="GUnload();">
    
<?php } else { ?>
<body>
 
<?php }?>
<div id="container">
    <div id='__livechat-assist'></div>

<?php echo '<script'; ?>
 type='text/javascript'>(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = '//traffic3.helponclick.com/assist?lang=en&a=531e17775654497086117084a2d1033f&mode=widget&widget=r&ho=1';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();<?php echo '</script'; ?>
>
    
<div style='display:none'><a href='http://www.helponclick.com'>Live Chat Software</a></div>
    <div id="logo">
        <div style="float:left;">
            <a href="http://localhost:8080"><img border="0" src="http://localhost:8080/images/logo-inner.png"></a>
        </div>
        <div style="float:right;padding: 10px 60px 10px 20px;">
            <p style="text-align:right;"><strong style="font-size:15px;"><?php echo stripslashes($_SESSION['User']['company_name']);?>
</strong></p>
            <p style="text-align:right;"><span style="float:left;"><?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value != '') {
echo $_smarty_tpl->tpl_vars['breadcrumb']->value;?>
 -&nbsp;&nbsp;<?php }?></span><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/logout.php">Logout</a> </p>
        </div>
        <div style="clear:both;"></div>
    </div>
    
<div id="body">
<!--nav-->
<div id="nav">
  
    <?php if ($_SESSION['User']['UID'] == '') {?>
<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/login.php" <?php if ($_smarty_tpl->tpl_vars['Page']->value == 'Login') {?> class="active"<?php }?>><span>Login</span></a></li>
</ul>
    <?php }?>
    <?php if ($_SESSION['User']['UID'] != '') {?>
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

    <?php }?>
    
  
  <div class="clear"></div>
</div>
<!--end nav-->
<?php }
}
