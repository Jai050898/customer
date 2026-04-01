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
        min-width: 75px;
    }
</style>
{/literal}
<div>
    <div style="height:10px;"></div>
    <h1>Gross Sale Day-wise Report</h1>
    <div style="float:right">&nbsp;</div>
    <div style="clear:both;"></div>
    <div style="width:100%;">
        {if $dataArray|@count gt '0'}
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="customersTBL">
                <tr>
                  <td rowspan="5" align="left" valign="top" class="no-pad">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                              <th>&nbsp;</th>
                                {section name=foo start=1 loop=54 step=1}
                                    <th align="center" valign="middle" colspan="7" style="text-align:center;">Week{$smarty.section.foo.index}</th>
                                {/section} 
                          </tr>
                          {foreach item=item name=item from=$dataArray}
                            <tr>
                              <th width="100">{$item.Year}</th>
                              <td>{$item.WeekDay}</td>
                                {assign var="totalDays" value="0"}
                                {foreach name=item1 item=item1 key=key1 from=$item.MonthAry}
                                    {foreach name=item2 item=item2 key=key2 from=$item1.DaysAry}
                                        <td>[{$item2.date}]<br /><strong>{if $item2.avgRO neq 0}${$item2.avgRO|number_format:2:".":","}{else}$0{/if}</strong></td>
                                        {math assign="totalDays" equation="x+y" x=$totalDays y=1}
                                        
                                    {/foreach}
                                {/foreach}
                                {math assign="blankDays" equation="x-y" x=371 y=$totalDays}
                                {section name=bar1 start=0 loop=$blankDays step=1}
                                    <td>&nbsp;</td>
                                {/section}
                            </tr>
                          {/foreach}
                      </table>
                  </td>
                </tr>
            </table>
        {else}
            <div align="center" style="color: #FF0000;">No Data Found!!!</div>
        {/if}
    </div>
    <div class="clear"></div>
</div>
