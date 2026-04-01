{include file=header.tpl}
<!--body-->
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div class="bodyleft">


             

            <div class="table-overflow_ro" >
            <table width="100%" border="0" cellspacing="1" cellpadding="5"  style="color:#2f3337;"   class="tableinnercontent" id="datatable">
               <tr>
               <td>
                    <table bgcolor="#6699cc" cellspacing="1" cellpadding="5">
                 <thead>
                 <tr>
                    <th bgcolor="#336699">S.No</th>
                    <th bgcolor="#336699">Line Items Order</th>
                    <th bgcolor="#336699">Unit Quantity</th>
                    <th bgcolor="#336699">Unit Cost</th>
                    <th bgcolor="#336699">Unit Sale</th>
                    <th bgcolor="#336699">Extented Cost</th>
                    <th bgcolor="#336699">Extented Sale</th>

                    <th bgcolor="#336699">Detailed Description</th>
                    <th bgcolor="#336699">Material Supplier</th>
                    <th bgcolor="#336699">Material Manufacturer</th>
                    <th bgcolor="#336699">Part Number</th>
                    <th bgcolor="#336699">Labor Hours</th>
                    <th bgcolor="#336699">Labor Rate</th>
                    
                </tr> 
              </thead>
                {foreach item=item name=item key=k from=$RODetails}
                    <tr>
                        <td align="left" valign="top"  >{$k+1}</td>
                    
                        
                        <td align="left" valign="top" >{$item.lineitemsortorder}</td>
                   
                        
                        <td align="left" valign="top">{$item.unitquantity|string_format:"%.2f"}</td>
                    
                        
                        <td align="left" valign="top" >${$item.unitcost|number_format:2:".":","}</td>
                    
                        
                        <td align="left" valign="top" >${$item.unitsale|number_format:2:".":","}</td>
                   
                        
                        <td align="left" valign="top" >${$item.extendedcost|number_format:2:".":","}</td>
                   
                        
                        <td align="left" valign="top" >${$item.extendedsale|number_format:2:".":","}</td>
                    

                        <td align="left" valign="top">{$item.detaildescription|nl2br}</td>
                   
                        
                        <td align="left" valign="top" >{$item.materialsupplier}</td>
                    
                        
                        <td align="left" valign="top" >{$item.materialmanufacturer}</td>
                   
                        
                        <td align="left" valign="top" >{$item.partnumber}</td>
                   
                        
                        <td align="left" valign="top" >{$item.laborhours}</td>
                   
                        
                        <td align="left" valign="top" >${$RODetails.laborrate|number_format:2:".":","}</td>
                    </tr>
                {foreachelse}
                    
                    
                    <tr>
                        <td align="left" valign="top"  colspan="2"><font color="#FF0000"><strong>No MMS RO's Found</strong></font></td>
                    </tr>
                {/foreach}
                {if $RODetails_sum  neq ""}
                 {foreach item=item name=item key=k from=$RODetails_sum}
                    <tr>
                        <td>Total</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>${$item.total_unitcost}</td>
                        <td>${$item.total_unitsale}</td>
                        <td>${$item.tot_extendcost}</td>
                        <td>${$item.tot_extsale}</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>{$item.tot_labrhrs}</td>
                        <td>${$item.tot_labr_rate}</td>
                    </tr> 
                    {/foreach}
                    {/if}
               </table>
               </td>
               </tr>
                
              
            </table>
            </div>
            <div class="clear"></div>
        </div>

        <div class="clear"></div>
    </div>
</div>
<!--end body-->	
{include file="footer.tpl"}

