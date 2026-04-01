<div>
    <div style="height:10px;"></div>
    <h1>Gross Sale Week-wise Report</h1>
    <div style="float:right">&nbsp;</div>
    <div style="clear:both;"></div>
    <div style="width:100%;">
        {if $dataArray|@count gt '0'}
            <table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" style="font-size:13px; font-family:Arial, Helvetica, sans-serif;">
                <tr>
                    {foreach item=item name=item from=$weekAry}
                        <td width="30">Week{$item}</td>
                    {/foreach}
                </tr>
            </table>
        {else}
            <div align="center" style="color: #FF0000;">No Data Found!!</div>
        {/if}
    </div>
    <div class="clear"></div>
</div>