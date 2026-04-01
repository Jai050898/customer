{include file="header.tpl"}
<div id="bodypart">
      <div id="mainbody">
       
        <div id="contentpane">
		{include file="right-bar.tpl"}
		<div id="innerleft">
      
      <div class="admin-rightpart">
      <div class="admin_topbgnav">
      <div id="admin_bcrumb">
      <ul>
      <li><a href="{$siteurl}/seo/dashboard.php">Home</a></li>
      <li>Export Brands</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Export Brands</div>
      </div>
	  <div class="ad_textsp">
	  	<form name="myform" id="myform" method="post">
			<table width="100%" cellspacing="0" cellpadding="0">
			<tr>
			  <td height="10" colspan="2"></td>
			</tr>
			 <tr>
			  <td><h2>Export Brands</h2></td>
			  <td align="right">&nbsp;</td>
			</tr>
			<tr>
			  <td align="left" valign="top" colspan="2"><table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
				<tr>
				<td>
				<table width="100%" cellspacing="0" cellpadding="0" class="admin_table">
				<tr>
				{foreach item=item name=item from=$Key}
				  <td align="left"><input type="checkbox" name="brands[]" id="brands" value="{$item.brand_name}" />&nbsp;{$item.brand_name}</a></td>
				  {if $smarty.foreach.item.iteration%3 eq 0}
				  </tr><tr>
				{/if}	
				{foreachelse}
				<tr>
				  <th width="100%" align="center" ><font color="#FF0000"><strong>No Brands Added</strong></font></th>
				</tr>
				{/foreach}
				</tr>
				</td>
				</table>
				</tr>
				{if $Key|@count gt 0}
				<tr>
				  <th width="100%" align="center"><input type="button" name="Export" value="Export" onclick="CheckIt();" /></th>
				</tr>
				{/if}
			  </table></td>
			</tr>
                  </table>
		</form>
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
        <!--end of contentpane -->
      </div>
    </div>
{include file="footer.tpl"}
{literal}
<script language="jscript" type="text/javascript">
function CheckIt()
{
	if(!validateForm())
	{
        alert("Please Select atleast one Brand to Export");
        return false;
    }
	document.myform.submit();
    return true;
}
function validateForm()
{
    var c=document.getElementsByTagName('input');
    for (var i = 0; i<c.length; i++){
        if (c[i].type=='checkbox')
        {
            if (c[i].checked){return true}
        }
    }
    return false;
}
</script>
{/literal}