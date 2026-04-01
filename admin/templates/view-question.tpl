{include file="header.tpl"}
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
      <li>View Question</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">View Question</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							  <tr>
									<td colspan="2"><h2>View Question</h2></td>
								  </tr>
								<tr class="color_trbg">
									<td width="12%">Categoty</td>
									<td width="88%" align="left">
										{$Quest.cat_name}
									 </td>
							  </tr>
							  <tr class="color_trbg">
									<td width="12%">Question Type</td>
									<td width="88%" align="left">
										{if $Quest.quest_type eq "R"}Radio{elseif $Quest.quest_type eq "C"} Multple Choice{else}Text Answer{/if}
									 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="12%">Question</td>
								<td width="88%" align="left">
									{$Quest.question}
								 </td>
							  </tr>
							  {if $Quest.quest_type neq "T"}
							  <tr class="color_trbg">
								<td valign="top">Options</td>
								<td align="left">
									{foreach item=item name=item from=$Quest.Options}
									{if $Quest.quest_type eq "R"}
										<input type="radio" value="{$item.option_id}">&nbsp;&nbsp;<strong>{$item.option_name}</strong><br><br>
									{elseif $Quest.quest_type eq "C"}
										<input type="checkbox" value="{$item.option_id}">&nbsp;&nbsp;<strong>{$item.option_name}</strong><br><br>
									{/if}
									{/foreach}
									
								</td>
							  </tr>
							  {/if}
							  
              </table>
		</td>
		</tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="50" align="left" valign="top">&nbsp;</td>
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
