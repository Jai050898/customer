{include file=header.tpl}
{literal}
<style>
.main-table-body {
	font-family:Arial, Helvetica, sans-serif;
}
.tech-quan-td {
    font-size: 12px;
    font-weight: bold;
}
.normal-text {
	font-weight:normal;
}
.bold-text {
	font-weight:bold;
}
.tech-quan-top-br {
	border-top:1px solid #5E7185;
}
.repair-order-pan {
	border:2px solid #5E7185;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	padding:10px;
	font-weight:bold;
}
.border-top-btm {
	 border-top:2px solid #5E7185;
	 border-bottom:2px solid #5E7185;	
}
.left-pad {
	padding:0 25px;
}
.top-border {
	border-top:2px solid #5E7185;
}
.main-table-body h4 {
	margin:0px;
	padding:0px;
	font-size:18px;
}
</style>
{/literal}
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
            <div style="height:10px;"></div>
            <span style="float:right;">&nbsp;</span>
            <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="main-table-body">
                <tbody>
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="52%" align="center" valign="middle"><h3>{$smarty.session.User.company_name}</h3></td>
                          <td width="48%" rowspan="3" align="right" valign="middle"><table width="45%" border="0" cellspacing="0" cellpadding="0" class="repair-order-pan">
                            <tr>
                              <td align="left" valign="middle">Repair Order #</td>
                              <td align="center" valign="middle"><h4>{$roArray.ro_id}</h4></td>
                            </tr>
                            <tr align="left">
                              <td height="5" colspan="2" valign="middle"></td>
                              </tr>
                            <tr>
                              <td align="left" valign="middle">Date {$roArray.transaction_date|date_format:"%m/%d/%Y"}</td>
                              <td align="center" valign="middle">&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle">&nbsp;</td>
                              <td align="center" valign="middle">&nbsp;</td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle"><h3>***NATIONWIDE WARRANTY 1-800-452-NAPA ***</h3></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td class="left-pad top-border"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <th width="6%" align="right" valign="middle">Customer</th>
                          <td width="1%" align="center" valign="middle" ><strong>:</strong></td>
                          <td width="15%" >{$custArray.fullname}</td>
                          <td width="2%">&nbsp;</td>
                          <td width="2%">&nbsp;</td>
                          <td width="7%">&nbsp;</td>
                          <td width="8%" align="right" valign="middle">Vehicle</td>
                          <td width="2%" align="center" valign="middle"><strong>:</strong></td>
                          <td width="17%">{$vehiArray.name}</td>
                          <td width="13%">&nbsp;</td>
                          <td width="1%" align="center" valign="middle">&nbsp;</td>
                          <td width="26%">&nbsp;</td>
                        </tr>
                        <tr>
                          <th align="right" valign="middle" style="font-size:14px;">&nbsp;</th>
                          <td align="center" valign="middle">&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td align="right" valign="middle">&nbsp;</td>
                          <td align="center" valign="middle">&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td align="center" valign="middle">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <th align="right" valign="middle" >Addresses</th>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>{$custArray.address1} {if $custArray.address2 neq ''}{$custArray.address2}{/if}</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td align="right" valign="middle">License</td>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>{$vehiArray.license}</td>
                          <td align="right" valign="middle" >Color</td>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>---</td>
                        </tr>
                        <tr>
                          <th align="right" valign="middle" >City</th>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>{$custArray.city}, {$custArray.state} {$custArray.zip}</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td align="right" valign="middle">VIN</td>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>{$vehiArray.vin}</td>
                          <td align="right" valign="middle">&nbsp;</td>
                          <td align="center" valign="middle">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <th align="right" valign="middle" >Work</th>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>{if $custArray.workphone neq ''}{$custArray.workphone}{else}---{/if}</td>
                          <th style="font-size:14px;">Ext</th>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>---</td>
                          <td align="right" valign="middle" >FLEET#</td>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>---</td>
                          <td align="right" valign="middle" >Trans</td>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>---</td>
                        </tr>
                        <tr>
                          <th align="right" valign="middle">Cell</th>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>{if $custArray.cell neq ''}{$custArray.cell}{else}---{/if}</td>
                          <th style="font-size:14px;">Ext</th>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>---</td>
                          <td align="right" valign="middle" >Engine</td>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>{$vehiArray.engine}</td>
                          <td align="right" valign="middle" >Date</td>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>---</td>
                        </tr>
                        <tr>
                          <th align="right" valign="middle" >&nbsp;</th>
                          <td align="center" valign="middle">&nbsp;</td>
                          <td>&nbsp;</td>
                          <th style="font-size:14px;">&nbsp;</th>
                          <td align="center" valign="middle">&nbsp;</td>
                          <td>&nbsp;</td>
                          <td align="right" valign="middle" >Mileage</td>
                          <td align="center" valign="middle"><strong>:</strong></td>
                          <td>{$vehiArray.odometer}</td>
                          <td align="right" valign="middle">&nbsp;</td>
                          <td align="center" valign="middle">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td class="left-pad"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tech-quan-td">
                        <tr>
                          <td width="4%" height="35" align="center" valign="middle"  class="border-top-btm">Op</td>
                          <td width="6%" height="35" align="center" valign="middle" class="border-top-btm" >Tech Quan</td>
                          <td width="21%" height="35" align="center" valign="middle"  class="border-top-btm">Part Number</td>
                          <td width="20%" height="35" align="center" valign="middle"  class="border-top-btm">Part Description</td>
                          <td width="26%" height="35" align="center" valign="middle"  class="border-top-btm">Reason for Replacement</td>
                          <td width="9%" height="35" align="center" valign="middle"  class="border-top-btm">Labor Hours</td>
                          <td width="9%" height="35" align="center" valign="middle"  class="border-top-btm">Parts Price</td>
                          <td width="13%" height="35" align="center" valign="middle"  class="border-top-btm">Subtotal</td>
                        </tr>
                        <tr>
                          <td height="5" align="left" valign="top" ></td>
                          <td height="5" align="center" valign="middle" ></td>
                          <td height="5" colspan="3" align="left" ></td>
                          <td height="5" align="center"></td>
                          <td height="5" align="left"></td>
                          <td height="5" align="left"></td>
                        </tr>
                        {foreach item=item name=item from=$roDetailsArray}
                        <tr>
                          <td height="35" align="center" valign="top" >{$item.id}</td>
                          <td height="35" align="center" valign="top" >{$item.technician}</td>
                          <td height="35" align="center" valign="top" >{$item.partnumber}</td>
                          <td height="35" align="center" valign="top"  class="normal-text">{$item.detaildescription|nl2br}</td>
                          <td height="35" align="center" valign="top"  class="normal-text" >---</td>
                          <!--<td height="35" align="center">${$item.laborrate|string_format:"%.2f"}</td>-->
                          <td height="35" align="center">{$item.laborhours}</td>
                          <td height="35" align="center">&nbsp;</td>
                          <td height="35" align="center">${$item.subTotal|string_format:"%.2f"}</td>
                        </tr>
                        {foreachelse}
                        <tr>
                          <th bgcolor="#f9f9f7" style="color:#000000;" colspan="7"><font color="#FF0000"><strong>No Customer Ro's Available</strong></font></th>
                        </tr>
                        {/foreach}
                        
                       <!-- <tr>
                          <td height="35"align="center" valign="top" >&nbsp;</td>
                          <td height="35" align="center" valign="top">&nbsp;</td>
                          <td height="35" colspan="2" align="left">Payments:<br>
                            MasterCard, $187.08, on 09/14/13<br> 
                              Card Bi: [*********4635], AuthorizationNo: [7766]</td>
                          <td height="35" align="center">&nbsp;</td>
                          <td height="35" align="center">&nbsp;</td>
                          <td height="35" align="center">&nbsp;</td>
                          <td height="35" align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="35"align="center" valign="top" >&nbsp;</td>
                          <td height="35" align="center" valign="top">&nbsp;</td>
                          <td height="35" colspan="2" align="left">&nbsp;</td>
                          <td height="35" align="center">&nbsp;</td>
                          <td height="35" align="center">&nbsp;</td>
                          <td height="35" align="center">&nbsp;</td>
                          <td height="35" align="center">&nbsp;</td>
                        </tr> -->
                        <tr>
                          <td height="150"align="center" valign="top" >&nbsp;</td>
                          <td height="150" align="center" valign="top">&nbsp;</td>
                          <td height="150" colspan="2" align="left">&nbsp;</td>
                          <td height="150" align="center">&nbsp;</td>
                          <td height="150" align="center">&nbsp;</td>
                          <td height="150" align="center">&nbsp;</td>
                          <td height="150" align="center">&nbsp;</td>
                        </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td class="left-pad"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="80%" class="top-border left-pad" align="left" valign="top" style="padding-right:80px;padding-top: 5px;">Notice Pursuant To $70.001, Texas Property Code I am the person or agent on behalf of the person, who is obligated to pay for the repair of the motor vehicle subject to the repair contract. I understand that this vehicle is subject to repossession in accordance with section $9.609, Texas Business and commerce code, in the event that the customer's check, money order, or credit card payment for such repairs is stopped, dishonored because of insufficient funds, no funds, or because the drawer or maker of the order has no account or the account on which it is drawn has been closed.<br><br><br>Warranty is 24 months or 24,000 miles whichever occurs first,<br>
unless specified
</td>
                          <td width="20%" align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="repair-order-pan">
                            <tr>
                              <th width="59%" align="right">Labor :</th>
                              <td width="41%" align="right" valign="middle" class="normal-text">${$roArray.laboramount|string_format:"%.2f"}</td>
                            </tr>
                            <tr>
                              <td height="5" colspan="2"></td>
                            </tr>
                            <tr>
                              <tH align="right">Parts :</th>
                              <td align="right" valign="middle" class="normal-text">${$roArray.partsamount|string_format:"%.2f"}</td>
                            </tr>
                            <tr>
                              <th align="right">Sublet :</th>
                              <td align="right" valign="middle" class="normal-text">$0.000</td>
                            </tr>
                            <tr>
                              <th align="right">Other Fees :</th>
                              <td align="right" valign="middle" class="normal-text">$0.00</td>
                            </tr>
                            <tr>
                              <th align="right">Supply Charges :</th>
                              <td align="right" valign="middle" class="normal-text">${$roArray.shopsuppliesamount|string_format:"%.2f"}</td>
                            </tr>
                            <tr>
                              <th align="right">Sub Total:</th>
                              <td align="right" valign="middle" class="normal-text">${$roArray.subTotal|string_format:"%.2f"}</td>
                            </tr>
                            <tr>
                              <th align="right">Sales Tax :</th>
                              <td align="right" valign="middle" class="normal-text">${$roArray.taxamount|string_format:"%.2f"}</td>
                            </tr>
                            <tr>
                              <th align="right">&nbsp;</th>
                              <td align="right" valign="middle" class="normal-text">&nbsp;</td>
                            </tr>
                            <tr>
                              <th align="right">Disc/Adj: </th>
                              <td align="right" valign="middle" class="normal-text">$ &nbsp;{$roArray.manager_Charges|string_format:"%.2f"}</td>
                            </tr>
                            <tr>
                              <th align="right">Total :</th>
                              <td align="right" valign="middle" class="normal-text">
                                ${$roArray.transactiontotal|string_format:"%.2f"}</td>
                            </tr>
                            <tr>
                              <th align="right">Paid :</th>
                              <td align="right" valign="middle" class="normal-text">${$roArray.paidAmt|string_format:"%.2f"}</td>
                            </tr>
                            <tr>
                              <th align="right">Due :</th>
                              <td align="right" valign="middle" class="normal-text">${$roArray.balancedue|string_format:"%.2f"}</td>
                            </tr>
                          </table></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td class="bold-text">Signature X______________________________________</td>
                    </tr>
                    <tr>
                      <td height="80">&nbsp;</td>
                    </tr>
                    <tr>
                      <td ><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tech-quan-td tech-quan-top-br" >
                        <tr>
                          <td height="5" colspan="8">&nbsp;</td>
                          </tr>
                        <tr>
                          <td width="12%" height="25">{$roArray.transaction_date|date_format:"%m/%d/%Y %I:%M:%S %p"}</td>
                          <td width="15%" height="25"><!-- Auth 7766 --> &nbsp;</td>
                          <td width="12%" height="25"><!-- Ref 05553B --> &nbsp;</td>
                          <td height="25" colspan="2">On : The transaction completed</td>
                          <td width="12%" height="25">&nbsp;</td>
                          <td width="12%" height="25">&nbsp;</td>
                          <td width="13%" height="25">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="25">${$roArray.transactiontotal|string_format:"%.2f"}</td>
                          <td height="25">&nbsp;</td>
                          <td height="25" colspan="3" align="center" valign="middle">{$custArray.fullname} Agrees to Pay Total Amount</td>
                          <td height="25">&nbsp;</td>
                          <td height="25">&nbsp;</td>
                          <td height="25">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="25" colspan="2"><!-- Master Carde ********************XXXX --> &nbsp;</td>
                          <td height="25" colspan="2">According to Card Issuer Agreement</td>
                          <td width="12%" height="25">&nbsp;</td>
                          <td height="25" colspan="3" align="right" valign="bottom">Signature X___________________________________</td>
                          </tr>
                      </table></td>
                    </tr>
                </tbody>
            </table>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
{include file="footer.tpl"}
