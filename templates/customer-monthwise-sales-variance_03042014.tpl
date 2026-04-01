{include file=header.tpl}
{literal}
<style type="text/css">
    .month-tab-market table td {
        font-weight: normal;
    }
</style>
{/literal}
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
            <div style="height:10px;"></div>

            <span style="float:right;">&nbsp;</span>
            <h1>Customer Monthwise Sales Variance Data</h1>
            <div style="height:10px;"></div>
            
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="month-tab-market"  bgcolor="#6699cc" style="border:1px solid #6699cc">
                    <tr>
                        <th width="9%" height="27"  align="left" valign="top">
                            <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                <tr>
                                    <th  height="27" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Month / Year</th>
                                </tr>
                                <tr>
                                  <th  height="27" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">&nbsp;</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Jan</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Feb</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Mar</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Apr</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">May</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Jun</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Jul</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Aug</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Sep</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Oct</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Nov</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Dec</th>
                                </tr>
                                
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">High</th>
                                </tr>
                                
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Low</th>
                                </tr>
                                
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Average</th>
                                </tr>
                            </table>
                        </th>
                        {foreach item=item name=item from=$dataArray}
                            <th width="9%" height="27"  align="left" valign="top">
                                <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                    
                                      <tr>
                                      <th colspan="2"   height="27" align="center" valign="middle"  bgcolor="#336699" style="color:#fff; font-weight:bold;">{$item.Year}</th>
                                      </tr>
                                      
                                    <tr>
                                        <td width="50%" align="center"  height="27" valign="middle" bgcolor="#336699" style="color:#fff;">Sales</td>
                                        <td width="50%" align="center"  height="27" valign="middle" bgcolor="#336699" style="color:#fff;">Variance</td>
                                    </tr>
                                    {foreach item=item1 name=item1 from=$item.Month}
                                        <tr>
                                            <td align="center"  height="27" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">${$item1.grossSale|number_format:2:".":","}</td>
                                            <td align="center"  height="27" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">{$item1.variance|string_format:"%.2f"}%</td>
                                        </tr>
                                    {/foreach}
                                  </table>
                                  <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                      <tr>
                                            <td height="27" width="50%" lign="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item.highGrossSale|number_format:0:".":","}</td>
                                            <td height="27"  width="50%" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{$item.varianceHigh|number_format:0:".":","}%</td>
                                      </tr>
                                      <tr>
                                           <td height="27" width="50%"  align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item.lowGrossSale|number_format:0:".":","}</td>
                                           <td height="27"  width="50%" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{$item.varianceLow|number_format:0:".":","}%</td>
                                      </tr>
                                      <tr>
                                            <td height="27" width="50%"  align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item.averageGrossSale|number_format:0:".":","}</td>
                                            <td height="27"  width="50%" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{$item.varianceAvg|number_format:0:".":","}%</td>
                                      </tr>
                                  </table>
                            </th>
                    {foreachelse}
                    </tr>
                        <tr>
                            <th bgcolor="#f9f9f7" style="color:#000000;"  height="27" colspan="3"><font color="#FF0000"><strong>No Data Found</strong></font></th>
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