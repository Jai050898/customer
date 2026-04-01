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
      <li><a href="{$siteurl}/dashboard.php">Home</a></li>
      <li>Marketing Budget for {$Cal.year}</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Marketing Budget for {$Cal.year}</div>
      </div>
	   <div class="ad_textsp">
			<div style="clear:both;"></div>
			<table border="1" style="border:solid 1px #999999;" width="100%">
			<tr>
				<td style="width:60%"><strong>Branding / Marketing Effort</strong></td>
				<td style="width:20%"><strong>{$Cal.year} Budget</strong></td>
				<td style="width:20%"><strong>{$Cal.year} Actual Cost</strong></td>
			</tr>
			{foreach item=item name=item from=$Item}
			{if $item.Items neq ""}
			<tr style="background-color:#f3f3f3;">
				<td colspan="3"><strong>{$item.cat_name}</strong></td>
			</tr>
			{foreach item=item1 name=item1 from=$item.Items}
			<tr style="background-color:{cycle values='#ffffff,#ffffff'};">
				<td>{$item1.title}</td>
				<td>$ {$item1.amount}</td>
				<td>$ {$item1.actual_amount}</td>
			</tr>
			{/foreach}
			{/if}
			{/foreach}
			<tr style="background-color:#f3f3f3;">
				<td><strong>Gross Sales</strong></td>
				<td><strong>$ {$Cal.gsales}</strong></td>
				<td><strong>$ {$Cal.gsales}</strong></td>
			</tr>
			<tr style="background-color:#f3f3f3;">
				<td><strong>Total</strong></td>
				<td><strong>$ {$Cal.amount}</strong></td>
				<td><strong>$ {$Cal.actualamount}</strong></td>
			</tr>
			<tr style="background-color:#f3f3f3;">
				<td><strong>% of Gross Sales</strong></td>
				<td><strong>{$Cal.per} %</strong></td>
				<td><strong>{$Cal.actper} %</strong></td>
			</tr>
			</table>
			<div class="clear"></div>
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
        <!--end of contentpane -->
      </div>
    </div>
{include file="footer.tpl"}