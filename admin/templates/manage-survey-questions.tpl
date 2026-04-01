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
      <li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
      <li>Select Survey</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Select Survey</div>
      </div>
	  <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
			<tr>
			  <td height="10" colspan="2"></td>
			</tr>
			 <tr>
			  <td><h2>Select Survey</h2></td>
			  <td align="right">&nbsp;</td>
			</tr>
			<tr>
			  <td align="left" valign="top" colspan="2"><table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
				{foreach item=item name=item from=$Cat}
				<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
				  <td align="left"><a href="{$siteurl}/admin/manage-questions.php?cat_id={$item.cat_id}">{$item.cat_name}</a></td>
				</tr>
				{foreachelse}
				<tr>
				  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Survey Added</strong></font></th>
				</tr>
				{/foreach}
			  </table></td>
			</tr>
                  </table>
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
        <!--end of contentpane -->
      </div>
    </div>
{include file="footer.tpl"}