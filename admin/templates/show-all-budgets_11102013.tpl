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
      <li>Marketing Budget</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Marketing Budget</div>
      </div>
	   <div class="ad_textsp">
			<div style="clear:both;"></div>
			<div style="width:100%;"> 
			<table border="1" style="border:solid 1px #999999;" width="100%">
			<tr>
				<td><strong>Branding / Marketing Effort</strong></td>
				{foreach item=Calitem name=Calitem from=$Cal}
				<td colspan="2">
				<table border="1" style="border:solid 1px #999999;" width="100%">
				<tr>
				<td colspan="2" align="center"><strong>{$Calitem.year}</strong></td>
				<tr>
				<td style="width:50%"><strong> Budget</strong></td>
				<td><strong>Actual Cost</strong></td>
				</tr>
				</table>
				</td>
				{foreachelse}
				<td>NA</td>
				<td>NA</td>
				{/foreach}
			</tr>
			{foreach item=item name=item from=$Item}
			{* if $item.Items neq "" *}
			<tr style="background-color:#f3f3f3;">
				<td colspan="{$colspan}"><strong>{$item.cat_name}</strong></td>
			</tr>
			{foreach item=item1 name=item1 from=$item.Items}
			<tr style="background-color:{cycle values='#ffffff,#ffffff'};">
				<td>{$item1.title}</td>
			{foreach item=Citem name=Citem from=$item1.Arr}
				<td>{if $Citem.amount neq ""}$ {$Citem.amount}{else} NA {/if}</td>
				<td>{if $Citem.actual_amount neq ""}$ {$Citem.actual_amount}{else} NA {/if}</td>
			{foreachelse}
				<td>NA</td>
				<td>NA</td>
			{/foreach}
			</tr>
			{foreachelse}
			<tr>
				<td>{$item1.title}</td>
			{foreach item=Calitem name=Calitem from=$Cal}
				<td>NA</td>
				<td>NA</td>
			{foreachelse}
				<td>NA</td>
				<td>NA</td>
			{/foreach}
			</tr>
			{/foreach}
			{* /if *}
			{/foreach}
			<tr style="background-color:#f3f3f3;">
				<td><strong>Gross Sales</strong></td>
			{foreach item=Calitem name=Calitem from=$Cal}
				<td><strong>$ {$Calitem.gsales}</strong></td>
				<td><strong>$ {$Calitem.gsales}</strong></td>
			{/foreach}
			</tr>
			<tr style="background-color:#f3f3f3;">
				<td><strong>Total</strong></td>
			{foreach item=Calitem name=Calitem from=$Cal}
				<td><strong>$ {$Calitem.amount}</strong></td>
				<td><strong>$ {$Calitem.actualamount}</strong></td>
			{/foreach}
			</tr>
			<tr style="background-color:#f3f3f3;">
			<td><strong>% of Gross Sales</strong></td>
			{foreach item=Calitem name=Calitem from=$Cal}
				<td><strong>{$Calitem.per} %</strong></td>
				<td><strong>{$Calitem.actper} %</strong></td>
			{/foreach}
			</tr>
			</table>
			</div>
			<div class="clear"></div>
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
        <!--end of contentpane -->
      </div>
    </div>
{include file="footer.tpl"}