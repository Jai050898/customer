{include file=header.tpl}
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
            <div style="height:10px;"></div>

            <span style="float:right;">&nbsp;</span>
            <h1>Customer Weekwise Data</h1>
            <div style="height:10px;"></div>
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                <tr>
                    <th bgcolor="#336699" style="color:#fff;">Title</th>
                    <th bgcolor="#336699" style="color:#fff;">Week</th>
                    <th bgcolor="#336699" style="color:#fff;">Total</th>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Best Week</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$bestWeek}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$bestWeekTotal}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Average Week</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$averageWeek}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$averageWeekTotal|number_format:"2"}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Highest Week</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$highestWeek}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$highestWeekTotal}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Lowest Week</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$lowestWeek}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">${$lowestWeekTotal}</td>
                </tr>
            </table>
            <div style="height:10px;"></div>
            <table width="100%" border="0" cellspacing="1" cellpadding="3" bgcolor="#6699cc">
                <tr>
                    <th bgcolor="#336699" style="color:#fff;">Week</th>
                    <th bgcolor="#336699" style="color:#fff;">Repair Orders</th>
                    <th bgcolor="#336699" style="color:#fff;">Gross Sales</th>
                </tr>
                {foreach item=item name=item from=$dataArray}
                    <tr>
                        <td bgcolor="#f9f9f7" style="color:#000000;">{$item.Week}</td>
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