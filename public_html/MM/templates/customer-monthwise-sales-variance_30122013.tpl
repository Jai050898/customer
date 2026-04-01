{include file=header.tpl}
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
            <div style="height:10px;"></div>

            <span style="float:right;">&nbsp;</span>
            <h1>Customer Monthwise Data</h1>
            <div style="height:10px;"></div>
            
            
            <table width="100%" border="0" cellspacing="1" cellpadding="3"  bgcolor="#6699cc">
                    <tr>
                        <th width="9%" height="25" scope="col">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <th scope="col" colspan="2" bgcolor="#336699" style="color:#fff;">Month / Year</th>
                                </tr>
                                <tr>
                                  <th scope="col" colspan="2" bgcolor="#336699" style="color:#fff;">&nbsp;</th>
                                </tr>
                                <tr>
                                  <th colspan="2" scope="row" bgcolor="#336699" style="color:#fff;">Jan</th>
                                </tr>
                                <tr>
                                  <th colspan="2" scope="row" bgcolor="#336699" style="color:#fff;">Feb</th>
                                </tr>
                                <tr>
                                  <th colspan="2" scope="row" bgcolor="#336699" style="color:#fff;">Mar</th>
                                </tr>
                                <tr>
                                  <th colspan="2" scope="row" bgcolor="#336699" style="color:#fff;">Apr</th>
                                </tr>
                                <tr>
                                  <th colspan="2" scope="row" bgcolor="#336699" style="color:#fff;">May</th>
                                </tr>
                                <tr>
                                  <th colspan="2" scope="row" bgcolor="#336699" style="color:#fff;">Jun</th>
                                </tr>
                                <tr>
                                  <th colspan="2" scope="row" bgcolor="#336699" style="color:#fff;">Jul</th>
                                </tr>
                                <tr>
                                  <th colspan="2" scope="row" bgcolor="#336699" style="color:#fff;">Aug</th>
                                </tr>
                                <tr>
                                  <th colspan="2" scope="row" bgcolor="#336699" style="color:#fff;">Sep</th>
                                </tr>
                                <tr>
                                  <th colspan="2" scope="row" bgcolor="#336699" style="color:#fff;">Oct</th>
                                </tr>
                                <tr>
                                  <th colspan="2" scope="row" bgcolor="#336699" style="color:#fff;">Nov</th>
                                </tr>
                                <tr>
                                  <th colspan="2" scope="row" bgcolor="#336699" style="color:#fff;">Dec</th>
                                </tr>
                            </table>
                        </th>
                        {foreach item=item name=item from=$dataArray}
                            <th width="9%" height="25" scope="col">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <tr><th colspan="2" scope="col" align="center" valign="middle"  bgcolor="#6699cc">{$item.Year}</th></tr>
                                      </tr>
                                    <tr>
                                        <td width="50%" align="center" valign="middle" bgcolor="#336699" style="color:#fff;">Sales</td>
                                        <td width="50%" align="center" valign="middle" bgcolor="#336699" style="color:#fff;">Variance</td>
                                    </tr>
                                    {foreach item=item1 name=item1 from=$item.Month}
                                        <tr>
                                            <td align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">${$item1.grossSale|number_format:2:".":","}</td>
                                            <td align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">{$item1.variance|string_format:"%.2f"}%</td>
                                        </tr>
                                    {/foreach}
                                  </table>
                            </th>
                    {foreachelse}
                        <tr>
                            <th bgcolor="#f9f9f7" style="color:#000000;" colspan="3"><font color="#FF0000"><strong>No Data Found</strong></font></th>
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