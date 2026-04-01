{include file=header.tpl}
<!--body-->
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div class="bodyleft">
            <div style="height:10px;"></div>
            <h1>Customer RO Detailed View</h1>
            
            <div style="height:10px;"></div>
            <table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
                {foreach item=item name=item key=k from=$RODetails}
                    <tr>
                        <td align="left" valign="top"  colspan="2"><h2>#{$k+1}:</h2></td>
                    </tr>
                    <tr>
                        <td align="right" valign="center" style="padding-left:55px;" width="35%">Line Items Order :</td>
                        <td align="left" valign="center" width="65%">{$item.lineitemsortorder}</td>
                    </tr>
                    <tr>
                        <td align="right" valign="center" style="padding-left:55px;" width="35%">Unit Quantity :</td>
                        <td align="left" valign="center" width="65%">{$item.unitquantity|string_format:"%.2f"}</td>
                    </tr>
                    <tr>
                        <td align="right" valign="center" style="padding-left:55px;" width="35%">Unit Cost :</td>
                        <td align="left" valign="center" width="65%">${$item.unitcost|string_format:"%.2f"}</td>
                    </tr>
                    <tr>
                        <td align="right" valign="center" style="padding-left:55px;" width="35%">Unit Sale :</td>
                        <td align="left" valign="center" width="65%">${$item.unitsale|string_format:"%.2f"}</td>
                    </tr>
                    <tr>
                        <td align="right" valign="center" style="padding-left:55px;" width="35%">Extented Cost :</td>
                        <td align="left" valign="center" width="65%">${$item.extendedcost|string_format:"%.2f"}</td>
                    </tr>
                    <tr>
                        <td align="right" valign="center" style="padding-left:55px;" width="35%">Extented Sale :</td>
                        <td align="left" valign="center" width="65%">${$item.extendedsale|string_format:"%.2f"}</td>
                    </tr>
                    <tr>
                        <td align="right" valign="center" style="padding-left:55px;" width="35%">Detailed Description :</td>
                        <td align="left" valign="center" width="65%">{$item.detaildescription|nl2br}</td>
                    </tr>
                    <tr>
                        <td align="right" valign="center" style="padding-left:55px;" width="35%">Material Supplier :</td>
                        <td align="left" valign="center" width="65%">{$item.materialsupplier}</td>
                    </tr>
                    <tr>
                        <td align="right" valign="center" style="padding-left:55px;" width="35%">Material Manufacturer :</td>
                        <td align="left" valign="center" width="65%">{$item.materialmanufacturer}</td>
                    </tr>
                    <tr>
                        <td align="right" valign="center" style="padding-left:55px;" width="35%">Part Number :</td>
                        <td align="left" valign="center" width="65%">{$item.partnumber}</td>
                    </tr>
                    <tr>
                        <td align="right" valign="center" style="padding-left:55px;" width="35%">Labor Hours :</td>
                        <td align="left" valign="center" width="65%">{$item.laborhours}</td>
                    </tr>
                    <tr>
                        <td align="right" valign="center" style="padding-left:55px;" width="35%">Labor Rate:</td>
                        <td align="left" valign="center" width="65%">${$RODetails.laborrate|string_format:"%.2f"}</td>
                    </tr>
                {foreachelse}
                    <tr>
                        <td align="left" valign="top"  colspan="2"><font color="#FF0000"><strong>No MMS RO's Found</strong></font></td>
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