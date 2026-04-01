<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Motorhead Marketing</title>
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
{if $Page1 neq ""}
<body onload="load();" onunload="GUnload();">
{else}
<body>
{/if}
<div id="container">
    <div id='__livechat-assist'></div>
{literal}
<script type='text/javascript'>(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = '//traffic3.helponclick.com/assist?lang=en&a=531e17775654497086117084a2d1033f&mode=widget&widget=r&ho=1';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();</script>
    {/literal}
<div style='display:none'><a href='http://www.helponclick.com'>Live Chat Software</a></div>
    <div id="logo">
        <div style="float:left;">
            <a href="http://www.autorepairmarketing.com/customer"><img border="0" src="http://www.autorepairmarketing.com/customer/images/logo-inner.png"></a>
        </div>
        <div style="float:right;padding: 10px 60px 10px 20px;">
            <p style="text-align:right;"><strong style="font-size:15px;">{$smarty.session.User.company_name|stripslashes}</strong></p>
            <p style="text-align:right;"><strong>{if $breadcrumb neq '' }{$breadcrumb}{/if}</strong></p>
        </div>
        <div style="clear:both;"></div>
    </div>
    
<div id="body">
<!--nav-->
<div id="nav">
  <ul>
    {if $smarty.session.User.is_staff eq 'N'}
    <li><a href="{$siteurl}/customer-login.php" {if $Page eq 'Login'} class="active"{/if}><span>Login</span></a></li>
    {/if}
    {if $smarty.session.User.is_staff neq 'N'}
	<li><a href="{$siteurl}/customer-recent-customers_new_staff.php" class="active"><span>Staff</span></a>	
    		
       </li>         
    
	        <li><a href="{$siteurl}/logout.php"><span>Logout</span></a></li>
    {/if}
  </ul>
  <div class="clear"></div>
</div>
<!--end nav-->
