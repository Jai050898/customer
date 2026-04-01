<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Motorhead Marketing</title>
<link href="css/template_css.css" rel="stylesheet" type="text/css" />
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.1.8.2.min.js"></script>
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
        <div style="padding: 10px 60px 10px 20px;">
            <p style="text-align:center;">
                <strong style="font-size:15px;">{$smarty.session.User.company_name|stripslashes}</strong>
                <strong><a href="{$siteurl}/logout.php"><span>Logout</span></a></strong>
            </p>
            <p style="text-align:center;"><strong>{if $breadcrumb neq '' }{$breadcrumb}{/if}</strong></p>           
        </div>
        <div style="clear:both;"></div>
    </div>
    
<div id="body">
    {* <pre>{$smarty.session.User.MenuDet[list].parent_id|@print_r}</pre>
       <pre>{$smarty.session.User.MenuDet[list].menu|@print_r}</pre>*}
   
<!--nav-->
<div id="nav">
  <ul>
    {if $smarty.session.User.UID eq ''}
    <li><a href="{$siteurl}/login.php" {if $Page eq 'Login'} class="active"{/if}><span>Login</span></a></li>
    {/if}
    {if $smarty.session.User.UID neq ''}
	<li><a href="{$siteurl}/dashboard.php" {if $Page eq 'Home'}  class="active"{/if}><span>Home</span></a>	</li>
        <li><a href="{$siteurl}/myaccount.php" {if $Page eq 'account'}  class="active"{/if}><span>My Account</span></a>
		<ul>
                    <li><a href="{$siteurl}/edit-profile.php"><span>Shop Profile</span></a></li>
                    <li><a href="{$siteurl}/data-profile.php"><span>Data Profile</span></a></li>
                    <li><a href="{$siteurl}/change-password.php"><span>Change Password</span></a></li>
                    <li><a href="{$siteurl}/manage-staff.php"><span>Manage Staff</span></a></li>
                    <li><a href="{$siteurl}/add-staff.php"><span>Add Staff</span></a></li>
                    
		</ul>
	</li>
	<li><a href="javascript:void(0);" {if $Page eq 'projects'}  class="active"{/if}><span>Projects</span></a>
		<ul>
                    <li><a href="{$siteurl}/myalbums.php"><span>My Gallery</span></a></li>
                    <li><a href="{$siteurl}/manage-projects.php"><span>Manage Projects</span></a></li>
                    <li><a href="{$siteurl}/project-tracker.php"><span>Project Tasks</span></a></li>
                    <li><a href="{$siteurl}/manage-uploaded-files.php"><span>My Files</span></a></li>
                    <li><a href="{$siteurl}/admin-uploaded-files.php"><span>Admin Files</span></a></li>
                    <li><a href="{$siteurl}/upload-admin-files.php"><span>Upload Large Files</span></a></li>
		</ul>
	</li>  
        {if $smarty.session.User.MenuDet neq ''}
            {section name=list loop=$smarty.session.User.MenuDet}
                {if $smarty.session.User.MenuDet[list].parent_id eq '0'}
                    <li>
                        <a href="javascript:void(0);" {if $Page eq 'projects'}  class="active"{/if}><span>{$smarty.session.User.MenuDet[list].menu}</span></a>
                        <ul>
                          {*  {if $smarty.session.User.MenuDet[list].parent_id eq '57'}                        
                                <li>
                                    <a href="{$siteurl}/{$smarty.session.User.MenuDet[list].link}"><span>{$smarty.session.User.MenuDet[list].menu}</span></a>
                                </li>
                            {/if}*}
                             <li><a href="{$siteurl}/upload-admin-files.php"><span>Upload Large Files</span></a></li>
                             <li><a href="{$siteurl}/upload-admin-files.php"><span>Upload Large Files</span></a></li>
                        </ul>                        
                    </li>
                {/if}
            {/section}  				
        {/if}
	<li><a href="javascript:void(0);" {if $Page eq 'resources'}  class="active"{/if}><span>Resources</span></a>
		<ul>
                    <li><a href="{$siteurl}/albums.php"><span>Image Gallery</span></a></li>
                    <li><a href="{$siteurl}/blog/"><span>Blog</span></a></li>
                    <li><a href="{$siteurl}/wiki/"><span>Wiki</span></a></li>
                    <li><a href="{$siteurl}/portfolio.php"><span>Portfolio</span></a></li>
                    <li><a href="{$siteurl}/links.php"><span>Links</span></a></li>
                    <li><a href="{$siteurl}/manage-tickets.php"><span>Support Tickets</span></a></li>
		</ul>
	</li>       
    {/if}
    <!-- <li><a href="{$siteurl}/portfolio.php"><span>Portfolio</span></a></li> -->
  </ul>
  <div class="clear"></div>
</div>
<!--end nav-->
