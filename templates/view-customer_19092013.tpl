{include file=header.tpl}
<!--body-->
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div class="bodyleft">
            <div style="height:10px;"></div>
            <h1>View Customer</h1>
            <table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Name :</td>
                      <td align="left" valign="center" width="65%">{$User.fname} {$User.lname}</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Email :</td>
                      <td align="left" valign="center" width="65%">{$User.email}</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Address :</td>
                      <td align="left" valign="center" width="65%">{$User.address1|nl2br}</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">State :</td>
                      <td align="left" valign="center" width="65%">{if $User.State_Name neq ''}{$User.State_Name}{else}{$User.state}{/if}</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">City :</td>
                      <td align="left" valign="center" width="65%">{$User.city}</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Zip Code :</td>
                      <td align="left" valign="center" width="65%">{$User.zip}</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Company Name :</td>
                      <td align="left" valign="center" width="65%">{$User.company_name}</td>
                </tr>
            </table>
            
            <div style="height:10px;"></div>
            <h2>Lifetime Spending Total: ${$User.lifetimeSpendingTotal|string_format:"%.2f"}</h2>
            <table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
                <tr>
                    <th>Visit</th>
                    <th>Amount Spent</th>
                    <th>Date</th>
                </tr>
                {foreach item=item name=item key = k from=$RODetails}
                    <tr>
                        <td align="right" valign="top" width="15%"  style="text-align:center"><h2>{$k+1}</h2></td>
                        <td align="left" valign="center" width="55%"  style="text-align:center"><a href="{$siteurl}/customer-ro-details-view.php?id={$item.ro_id}">${$item.roDetailtotal|string_format:"%.2f"}</a></td>
                        <td align="left" valign="center" width="30%"  style="text-align:center"><a href="{$siteurl}/customer-ro-details-view.php?id={$item.ro_id}">{$item.transaction_date|date_format:"%m/%d/%Y"}</a></td>
                    </tr>
                {foreachelse}
                    <tr>
                        <td align="left" valign="top"  colspan="3"><font color="#FF0000"><strong>No MMS RO's Found</strong></font></td>
                    </tr>
                {/foreach}
            </table>
            <div class="clear"></div>
        </div>
        {include file="rightbar.tpl"}
        <div class="clear"></div>
    </div>
</div>
<!--end body-->	
{include file="footer.tpl"}