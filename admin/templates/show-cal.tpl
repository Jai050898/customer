{include file="header.tpl"}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
{literal}
<style type="text/css">
.error-div{color:#FF0000;}
</style>
{/literal}
<div id="bodypart">
      <div id="mainbody">
       
        <div id="contentpane">
		{include file="right-bar.tpl"}
		<div id="innerleft">
      
      <div class="admin-rightpart">
      <div class="admin_topbgnav">
      <div id="admin_bcrumb">
      <ul>
      <li><a href="{$siteurl}/dashboard.php">Home</a></li>
      <li>Show Calendar</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Show Calendar</div>
      </div>
	   <div class="ad_textsp">
			<div style="clear:both;"></div>
			{include_php file='../cal.php'}
			<div class="clear"></div>
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
        <!--end of contentpane -->
      </div>
    </div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>
{literal}
<script language="javascript" type="text/javascript">
function Share(id)
{
	tb_show('Share Calendar','sharecalform.php?height=330&width=640&id='+id);
	return;
}
</script>
{/literal}