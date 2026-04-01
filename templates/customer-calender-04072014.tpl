{include file=header.tpl}
{literal}
    <style type="text/css">
        .bodybg > .bodyright_calender {
            float: left;
            margin: 50px 15px;
            width: 225px;
        }
    </style>
{/literal}
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
                                <div><small><font color="#0066FF"><strong>
                                    {foreach from=$custCnts key=k item=e}
                                        {if $cal[$i][$j] eq $k+1}
                                        	 <a href="http://www.autorepairmarketing.com/customer/existing-customers.php?fdate={$m}-{$cal[$i][$j]}-{$y}&tdate={$m}-{$cal[$i][$j]}-{$y}">
                                            {$e}</a>
                                        {/if}
                                    {/foreach} |
                                    {foreach from=$newcustCnts key=k item=nc}
                                        {if $cal[$i][$j] eq $k+1}
                                            <a href="http://www.autorepairmarketing.com/customer/customer-recent-customers_new.php?fdate={$m}-{$cal[$i][$j]}-{$y}&tdate={$m}-{$cal[$i][$j]}-{$y}">{$nc}</a>
                                        {/if}
                                    {/foreach}
                                  </strong></font></small><br /></div>
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
        <div class="bodyright_calender">
            <div style="height:10px;"></div>
            <span style="float:left;margin-left:40px"></span>
            <h2>Advisor Data </h2>            
            <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                <input type="hidden" name="sortby" value="">
                <input type="hidden" name="sortoption" value="">
                <table cellspacing="1" cellpadding="5" border="0" bgcolor="#6699cc" width="100%">
                    <tr>
                    <th bgcolor="#336699" style="color:#fff;">Advisor</th>
                    <th bgcolor="#336699" style="color:#fff;">RO Count</th>
                    </tr>
            {foreach from=$advArray key=k item=nc}    
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$nc.enteredby|stripslashes}</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$nc.advCnt|number_format:0:".":","}</td>
                </tr>
             {foreachelse}
                <tr>
                    <th bgcolor="#f9f9f7" style="color:#000000;" colspan="2"><font color="#FF0000"><strong>No Advisors Found</strong></font></th>
                </tr>
            {/foreach}
               </table>
            </form>
        </div>

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
