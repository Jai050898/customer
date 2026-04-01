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
            <h1>Technicians Yearly Roport</h1>
            <form name="frmshowevents" method="post">
                <input type="hidden" name="act" value="{if $smarty.request.act  neq ''}{$smarty.request.act}{/if}">
                <input type="hidden" name="month" value="{$m}">
                <input type="hidden" name="year" value="{$y}">
                <table width="100%" border="1" cellpadding="3" cellspacing="1" align="left" style="background-color: #FFFFFF;border: 3px solid #BEBAAA;font-family: arial;font-size: 14px;margin-bottom: 20px;margin-top: 10px;">
                    <tr align="center" valign="middle" bgcolor="#bebaaa">

                        <td width="85" height="35" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('3',{$y},{$m})"><img src="http://www.autorepairmarketing.com/customer/images/left-arrow2.png" />&nbsp;&nbsp;Year</a></td>
   

                    <td  colspan="3" height="35" align="center" colspan="3" class="headings5">{$dateMonth}</td>

   
                    <td width="85" height="35" align="center" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('4',{$y},{$m})">Year&nbsp;&nbsp;<img src="http://www.autorepairmarketing.com/customer/images/right-arrow2.png" /></a></td>

                </tr>
               
                   
                    <tr>
                    <td colspan="7">
                     
            <table cellspacing="1" cellpadding="5" border="0" bgcolor="#6699cc" width="100%">
		<tr>   <td bgcolor="#f9f9f7" style="color:#000000;">&nbsp;</td>
			{foreach item=item name=item from=$dataArray}
				<td bgcolor="#f9f9f7" style="color:#000000;">{$item.Month}</td>
			{foreachelse}
		</tr>
		
                    <tr>
                        <th bgcolor="#f9f9f7" style="color:#000000;" colspan="3"><font color="#FF0000"><strong>No Customer Data Found</strong></font></th>
                    </tr>
                {/foreach}
                
               
			{foreach item=item name=item from=$data2Array}
			 <tr>
				<td bgcolor="#f9f9f7" style="color:#000000;">{$item.1.technician}</td>

					{foreach item="secondarray" name="secondarray" from=$item}
						<td bgcolor="#f9f9f7" style="color:#000000;">{$secondarray.hours|number_format:0:".":","}</td>
					{/foreach}
				</tr>
			{/foreach}
		
            </table>
                    </td>
                    </tr>
                    
                </table> 
             
                <div class="clear"></div>
            </form>
            <div class="clear"></div>
        </div>
        <div class="bodyright_calender">
            <div style="height:10px;"></div>
            <span style="float:left;margin-left:40px"></span>
            
           
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
