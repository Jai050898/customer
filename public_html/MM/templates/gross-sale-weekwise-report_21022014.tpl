{literal}
<style type="text/css">
    .customersTBL {
        border-collapse: collapse;
        font-family: Arial,Helvetica,sans-serif;
        width: 100%;
    }
    .customersTBL th {
        background-color: #f1f1f1;
        color: #4c4c4c;
        font-size: 14px;
        padding-bottom: 4px;
        padding-top: 5px;
        text-align: left;
    }
    .customersTBL td, .customersTBL th {
        border: 1px solid #ccc;
        font-size: 14px;
        padding: 3px 7px 2px;
    }
    .customersTBL td.no-pad, .customersTBL td.no-pad table td	{
            padding:0px;
            border:1px solid #CCCCCC;
            border-left:0px;
            border-top:0px;
    }
    .customersTBL td.no-pad table td	{
            padding:3px 7px 2px;

    }
</style>
{/literal}
<div>
    <div style="height:10px;"></div>
    <h1>Gross Sale Week-wise Report</h1>
    <div style="float:right">&nbsp;</div>
    <div style="clear:both;"></div>
    <div style="width:100%;">
        {if $dataArray|@count gt '0'}
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="customersTBL">
                <tr>
                  <td rowspan="5" align="left" valign="top" class="no-pad">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                              <th colspan="3" rowspan="2">&nbsp;</th>
                                {section name=foo start=1 loop=54 step=1}
                                    <th align="center" valign="middle" colspan="7" style="text-align:center;">Week{$smarty.section.foo.index}</th>
                                {/section} 
                          </tr>
                          <tr>
                            {section name=foo start=1 loop=54 step=1}
                                <td>Sun</td>
                                <td>Mon</td>
                                <td>Tue</td>
                                <td>Wed</td>
                                <td>Thu</td>
                                <td>Fri</td>
                                <td>Sat</td>
                            {/section} 
                          </tr>
                          {foreach item=item name=item from=$dataArray}
                            <tr>
                              <th width="100">{$item.Year}</th>
                              <td>01/01/{$item.Year}</td>
                              <td>{$item.WeekDay}</td>
                                {foreach name=item1 item=item1 key=key1 from=$item.MonthAry}
                                    {math assign="calc1" equation="x+y" x=$item1.MaxDay y=$item1.StartDay}
                                    {foreach name=item2 item=item2 from=$item1.DaysAry}
                                        {section name=bar start=0 loop=$calc1 step=1}
                                            {if $bar lt $item1.StartDay}
                                                <td>&nbsp;</td>
                                            {else}
                                                <td>{$item1.MaxDay}+{$item1.StartDay}={$calc1}--->{$item2}</td>
                                            {/if}
                                        {/section}
                                    {/foreach}
                                {/foreach}
                            </tr>
                          {/foreach}
                      </table>
                  </td>
                </tr>
            </table>
        {else}
            <div align="center" style="color: #FF0000;">No Data Found!!</div>
        {/if}
    </div>
    <div class="clear"></div>
</div>
