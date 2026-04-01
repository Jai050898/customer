{include file="header.tpl"}
<div id="bodypart">
    <div id="mainbody">
        <div id="contentpane">
            {include file="right-bar.tpl"}
            <div id="innerleft">
                <div class="admin-rightpart">
                  <div class="admin_topbgnav">
                        <div id="admin_bcrumb">
                              <ul>
                                        <li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
                                        <li><a href="{$siteurl}/admin/manage-xml-customers.php">Manage MMS Customers</a></li>
                                        <li>View MMS Customers</li>
                              </ul>
                              <div class="clr"></div>
                        </div>
                        <div id="admin_head">View MMS Customers</div>
                  </div>
                  <div class="ad_textsp">
                    <table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="10"></td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" >
                                  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
                                  <tr>
                                        <td colspan="2"><h2>View MMS Customers</h2></td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">Name</td>
                                        <td width="80%" align="left">{$User.fname} {$User.lname}</td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">Email</td>
                                        <td width="80%" align="left">{$User.email}</td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">Address</td>
                                        <td width="80%" align="left">{$User.address1|nl2br}</td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">State</td>
                                        <td width="80%" align="left">{if $User.State_Name neq ''}{$User.State_Name}{else}{$User.state}{/if}</td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">City</td>
                                        <td width="80%" align="left">{$User.city}</td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">Zip Code</td>
                                        <td width="80%" align="left">{$User.zip}</td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">Company Name</td>
                                            <td width="80%" align="left">{$User.company_name}</td>
                                  </tr>
                                 </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" >
                                <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
                                    <tr>
                                          <td colspan="2"><h2>LIFETIME SPENDING TOTAL: {if $User.total_extendedsale neq 0 && $User.total_extendedsale neq ''} ${$User.total_extendedsale|number_format:2:".":","} {else} {/if}</h2></td>
                                    </tr>
                                    <tr class="color_trbg">
                                          <td width="20%">RO Id</td>
                                          <td width="80%" align="left">{$User.ro_id}</td>
                                    </tr>
                                    {foreach item=item name=item key = k from=$RODetails}
                                        <tr>
                                            <td align="left" valign="top"  colspan="2"><h2>#{$k+1}:</h2></td>
                                        </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Transaction Id</td>
                                            <td width="80%" align="left">{$item.transactiondetailextid}</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Line Items Order</td>
                                            <td width="80%" align="left">{$item.lineitemsortorder}</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Unit Quantity</td>
                                            <td width="80%" align="left">{$item.unitquantity}</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Unit Cost</td>
                                            <td width="80%" align="left">${$item.unitcost|number_format:2:".":","}</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Unit Sale</td>
                                            <td width="80%" align="left">${$item.unitsale|number_format:2:".":","}</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Extended Cost</td>
                                            <td width="80%" align="left">${$item.extendedcost|number_format:2:".":","}</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Extended Sale</td>
                                            <td width="80%" align="left">${$item.extendedsale|number_format:2:".":","}</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Detailed Description</td>
                                            <td width="80%" align="left">{$item.detaildescription|nl2br}</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Material Supplier</td>
                                            <td width="80%" align="left">{$item.materialsupplier}</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Material Manufacturer</td>
                                            <td width="80%" align="left">{$item.materialmanufacturer}</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Part Number</td>
                                            <td width="80%" align="left">{$item.partnumber}</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Labor Hours</td>
                                            <td width="80%" align="left">{$item.laborhours}</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Labor Rate</td>
                                            <td width="80%" align="left">${$item.laborrate|number_format:2:".":","}</td>
                                      </tr>
                                    {foreachelse}
                                        <tr>
                                          <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No MMS RO's Found</strong></font></th>
                                        </tr>
                                    {/foreach}
                                </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">&nbsp;</td>
                        </tr>
                        <tr>
                        <td height="50" align="left" valign="top">&nbsp;</td>
                        </tr>
                    </table>			  
                    <!--end of middle part -->
                    <!--end of right part -->
                    <div class="clr"></div>
                  </div>
                  <!--end of contentpane -->
                </div>
            </div>
        </div>
    </div>
</div>
{include file="footer.tpl"}