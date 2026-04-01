{include file=header.tpl}
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
            <div style="height:10px;"></div>

            <span style="float:right;">&nbsp;</span>
            <h1>Customer Monthwise Data</h1>
            <div style="height:10px;"></div>
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                <tr>
                    <th bgcolor="#336699" style="color:#fff;">Title</th>
                    <th bgcolor="#336699" style="color:#fff;">Month</th>
                    <th bgcolor="#336699" style="color:#fff;">Total</th>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Best Month</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$bestMonth}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$bestMonthTotal}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Average Month</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$averageMonth}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$averageMonthTotal|number_format:"2"}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Highest Month</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$highestMonth}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$highestMonthTotal}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Lowest Month</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$lowestMonth}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$lowestMonthTotal}</td>
                </tr>
            </table>
            <div style="height:10px;"></div>
            <table width="100%" border="0" cellspacing="1" cellpadding="3" bgcolor="#6699cc">
                <tr>
                    <th bgcolor="#336699" style="color:#fff;">Month</th>
                    <th bgcolor="#336699" style="color:#fff;">Repair Orders</th>
                    <th bgcolor="#336699" style="color:#fff;">Gross Sales</th>
                </tr>
                {foreach item=item name=item from=$dataArray}
                    <tr>
                        <td bgcolor="#f9f9f7" style="color:#000000;">{$item.Month}</td>
                        <td bgcolor="#f9f9f7" style="color:#000000;">{$item.roTotal}</td>
                        <td bgcolor="#f9f9f7" style="color:#000000;">${$item.grossSale|string_format:"%.2f"}</td>
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
{include file="footer.tpl"}