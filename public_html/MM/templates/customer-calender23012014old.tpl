{include file=header.tpl}
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div class="bodyleft">
            <div style="height:10px;"></div>
            <span style="float:right;">&nbsp;</span>
            <h1>Customer Calender</h1>
            <form name="frmshowevents" method="post">
                <input type="hidden" name="act" value="{if $smarty.request.act  neq ''}{$smarty.request.act}{/if}">
                <input type="hidden" name="month" value="{$m}">
                <input type="hidden" name="year" value="{$y}">
                <table width="100%" border="1" cellpadding="3" cellspacing="1" align="left" style="background-color: #FFFFFF;border: 3px solid #BEBAAA;font-family: arial;font-size: 14px;margin-bottom: 20px;margin-top: 10px;">
                    <tr align="center" valign="middle" bgcolor="#bebaaa">

                        <td width="85" height="35" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('3',{$y},{$m})">&nbsp;Year</a></td>

                    <td width="85" height="35" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('1',{$y},{$m})">&nbsp; Month</a></td>

                    <td width="85" height="35" align="center" colspan="3" class="headings5">{$dateMonth}</td>

                    <td width="85" height="35" align="center" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('2',{$y},{$m})">Month&nbsp;</a></td>

                    <td width="85" height="35" align="center" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('4',{$y},{$m})">Year&nbsp;</a></td>

                </tr>
                    <tr>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Sunday</td>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Monday</td>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Tuesday</td>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Wednesday</td>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Thursday</td>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Friday</td>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Saturday</td>

                </tr>
                    {foreach from=$array1 key=myId item=i}
                        <tr align="center" valign="middle">
                        {foreach from=$array2 key=myId2 item=j}
                            <td width="85" height="70" align="center" valign="top" class="c_sundays" bgcolor="#F7F8FB">

                            {if $cal[$i][$j] neq ''}
                                {assign var="Flag" value="0"}
                                {if $cal[$i][$j] lt 10}
                                    {assign var="CurDate" value="$cal[$i][$j]-$m-$y"}
                                    {assign var="sendDate" value="$y-$m-$cal[$i][$j]"}
                                {else}
                                    {assign var="CurDate" value="$cal[$i][$j]-$m-$y"}
                                    {assign var="sendDate" value="$y-$m-$cal[$i][$j]"}
                                {/if}
                                <div style="bottom:5px;"><span style="float:left;width:20px;">{$cal[$i][$j]}</span></div><br />
                                {foreach from=$custCnts key=k item=e}
                                    {if $cal[$i][$j] eq $k+1}
                                        <div><small><font color="#0066FF"><strong>{$e} | 0 </strong></font></small><br /></div>
                                    {/if}
                                {/foreach}
                            {else} &nbsp;
                            {/if}
                            </td>
                        {/foreach}
                </tr>
                    {/foreach}
                </table>
                <div class="clear"></div>
            </form>
            <div class="clear"></div>
        </div>
        {* include file="rightbar.tpl" *}
        <div class="clear"></div>
	</div>
</div>
{include file="footer.tpl"}

<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
function calchange(ac,y,m)
{
	frm = document.frmshowevents;
	frm.act.value = ac;
	frm.year.value = y;
	frm.month.value = m;
	frm.submit();
}
</script>
{/literal}