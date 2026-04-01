{include file=header.tpl}

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
								  <li>Customer Dashboard</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Customer Monthwise Data</div>
				  </div>
                                                                  
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
           
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                <tr>
                    <th bgcolor="#854141" style="color:#fff;">Title</th>
                    <th bgcolor="#854141" style="color:#fff;">Month</th>
                    <th bgcolor="#854141" style="color:#fff;">Total</th>
                    <th bgcolor="#854141" style="color:#fff;">Average RO<br/>(Before Discount)</th>
		    <th bgcolor="#854141" style="color:#fff;">Average RO<br/>(After Discount)</th>

                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Average Month</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$averageMonth}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$averageMonthTotal|number_format:2:".":","}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$AverageROB4|number_format:2:".":","}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$AverageROAfter|number_format:2:".":","}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Highest Month</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$highestMonth}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$highestMonthTotal|number_format:2:".":","}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$highAvgROB4|number_format:2:".":","}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$highAvgROAfter|number_format:2:".":","}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Lowest Month</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$lowestMonth}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$lowestMonthTotal|number_format:2:".":","}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$lowAvgROB4|number_format:2:".":","}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$lowAvgROAfter|number_format:2:".":","}</td>
                </tr>
            </table>
            
            <div style="height:10px;"></div>
            <table width="100%" border="0" cellspacing="1" cellpadding="3" bgcolor="#854141">
                <tr>
                    <th bgcolor="#854141" style="color:#fff;">Month</th>
                    <th bgcolor="#854141" style="color:#fff;">Repair Orders</th>
                    <th bgcolor="#854141" style="color:#fff;">Gross Sales</th>
                    <th bgcolor="#854141" style="color:#fff;">Gross Discounts</th>
                    <th bgcolor="#854141" style="color:#fff;">Net Sales</th>
                    <th bgcolor="#854141" style="color:#fff;">Average RO<br/>(Before Discount)</th>
                    <th bgcolor="#854141" style="color:#fff;">Average RO<br/>(After Discount)</th>   
                </tr>
                {foreach item=item name=item from=$dataArray}
                    <tr>
                        <td bgcolor="#f9f9f7" style="color:#000000;">{$item.Month}</td>
                        <td bgcolor="#f9f9f7" style="color:#000000;">{$item.roTotal}</td>
                        <td bgcolor="#f9f9f7" style="color:#000000;">${$item.grossSale|number_format:2:".":","}</td>
                        <td bgcolor="#f9f9f7" style="color:#000000;">${$item.discount|number_format:2:".":","}</td>
                        <td bgcolor="#f9f9f7" style="color:#000000;">${$item.netSale|number_format:2:".":","}</td>
                        <td bgcolor="#f9f9f7" style="color:#000000;">${$item.averageROB4Discount|number_format:2:".":","}
                        <td bgcolor="#f9f9f7" style="color:#000000;">${$item.averageROAfterDiscount|number_format:2:".":","}</td>
</tr>
                 {foreachelse}
                    <tr>
                        <th bgcolor="#f9f9f7" style="color:#000000;" colspan="3"><font color="#FF0000"><strong>No Customer Data Found</strong></font></th>
                    </tr>
                {/foreach}
            </table>
            <div style="height:10px; clear:both;"></div>
        </div>
        { * include file="rightbar.tpl"* }
        <div class="clear"></div>
    </div>
</div>
            <!--end of contentpane -->
			  </div>
			</div>
		</div>
	</div>
</div>
{include file="footer.tpl"}

