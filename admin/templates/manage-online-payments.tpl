{include file="header.tpl"}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css">

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
								  <li>Manage Online Payments</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage Online Payments
						
                                                <div class="admin_nav" style="float:right;font-weight:bold;">
                                                    <a href="{$siteurl}/admin/addInvoice.php">Add Invoice</a></div>

						</div>
                                    </div>
                                    <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#fff">
                                     {if $allInvoice|@count gt 0}
                                                    <tr>
                                                            <td colspan="3">
                                                                    <table width="100%" cellspacing="0" cellpadding="5">
                                                                            <tr>
                                                                            
                                                                                    <td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
                                                                            </tr>
                                                                    </table>
                                                            </td>
                                                    </tr>
                                            {/if}
                                          </table> 
                                                     <div id="body">
                                                        <div class="bodybg" style="min-height:475px;">
                                                            <div>

                                                            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#fff">
                                                             <tr>				
                                                                    <td height="32" align="center" class="error" style="color:#ff0000;">{$Errormssage}</td>			
                                                                </tr>
                                                                <tr>
                                                                    <td  bgcolor="#f9f9f7" style="color:#000000;" colspan="5"> {$generatedLink} </td>
                                                                </tr> 
                                                                <tr>
                                                                    <th width="20%" align="left">Invoice Number</th>
                                                                    <th width="20%" align="left">Amount( in $)</th>
                                                                    <th width="40%" align="left">Link</th>
                                                                    <th align="center" width="20%">Action</th>
                                                                </tr>
                                                                    {section name=invoice loop=$allInvoice}
<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
                                                                    <td align="left">{$allInvoice[invoice].invoiceNumber}</td>
                                                                    <td align="left">{$allInvoice[invoice].invoiceAmount}</td>
                                                                    <td align="left">{if $allInvoice[invoice].is_link_generated eq 'Y'}<a href="https://autorepairmarketing.com/savemoney.php?id={$allInvoice[invoice].id}" target="_blank">https://autorepairmarketing.com/savemoney.php?id={$allInvoice[invoice].id}</a> {else}- {/if}</td>
                                                                    <td align="center"><a href='manage-online-payments.php?action=del&id={$allInvoice[invoice].id}'><img src="../images/delete.png" border="0" alt="Delete" title="Delete"/></a>&nbsp;&nbsp;&nbsp;<a href='editInvoice.php?action=edit&id={$allInvoice[invoice].id}'><img src="../images/page_edit.png" border="0" alt="Edit" title="Edit"/></a>
                                                                        {if $allInvoice[invoice].is_link_generated eq 'N'}
                                                                            &nbsp;&nbsp;&nbsp;<a href='{$siteurl}/admin/manage-online-payments.php?action=generateLink&id={$allInvoice[invoice].id}'><img src="../images/link.jpeg" border=0" alt="Generate Link" title="Generate Link"/></a>
                                                                        {/if}
                                                                        </td>
                                                               </tr>
                                                                    {sectionelse}
                                                                <tr>
                                                                    <td align="center" width="100%" colspan="3" style="color:#ff0000"> No records found!!! </td>
                                                                </tr>
                                                                {/section}
                                                                   
                                                                 {if $allInvoice|@count gt 0}
                                                    <tr>
                                                            <td colspan="5">
                                                                    <table width="100%" cellspacing="0" cellpadding="5">
                                                                            <tr>
                                                                                    <td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
                                                                            </tr>
                                                                    </table>
                                                            </td>
                                                    </tr>
                                            {/if}
                                                                
                                                            </table>

					<!--end of right part -->
					  <div class="clr"></div>
                                    </div>
			  </div>
			</div>
		</div>
	</div>
</div>


{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>

