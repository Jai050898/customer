<?php /* Smarty version 2.6.26, created on 2012-11-19 08:17:36
         compiled from header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Motor Head Marketing</title>
<link href="css/template_css.css" rel="stylesheet" type="text/css" />
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
<div id="container">
<div id="body">
<!--nav-->
<div id="nav">
  <ul>
    <?php if ($_SESSION['User']['UID'] == ''): ?>
    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/login.php" <?php if ($this->_tpl_vars['Page'] == 'Login'): ?> class="active"<?php endif; ?>><span>Login</span></a></li>
    <?php endif; ?>
    <?php if ($_SESSION['User']['UID'] != ''): ?>
	<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/dashboard.php" <?php if ($this->_tpl_vars['Page'] == 'Home'): ?>  class="active"<?php endif; ?>><span>Home</span></a></li>
    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/myaccount.php" <?php if ($this->_tpl_vars['Page'] == 'MyAccount'): ?>  class="active"<?php endif; ?>><span>My Account</span></a></li>
    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/logout.php"><span>Logout</span></a></li>
    <?php endif; ?>
    <!-- <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/portfolio.php"><span>Portfolio</span></a></li> -->
  </ul>
  <div class="clear"></div>
</div>
<!--end nav-->