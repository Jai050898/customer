<?php /* Smarty version 2.6.26, created on 2014-08-20 02:42:17
         compiled from extraction-list-sort.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'extraction-list-sort.tpl', 61, false),array('modifier', 'stripslashes', 'extraction-list-sort.tpl', 63, false),array('modifier', 'number_format', 'extraction-list-sort.tpl', 65, false),array('modifier', 'date_format', 'extraction-list-sort.tpl', 84, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.alerts.css"  media="screen" rel="stylesheet" type="text/css">
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/print_stylesheet.css" media="print" rel="stylesheet" type="text/css"  >
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right-bar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<div id="innerleft">
			  <div class="admin-rightpart">
				  <div class="admin_topbgnav">
						<div id="admin_bcrumb">
							  <ul>
								  <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/dashboard.php">Home</a></li>
								  <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-users.php">Manage Users</a></li>
                                                                  <li>Extraction List</li>
							  </ul>
							<div class="clr"></div>
						</div>
                                                                  <div id="admin_head">Extraction List <span style="float:right;margin-right:10px;">  <a href="javascript:void(0);" id="printPage"><img alt="Print" title="Print" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/print.gif"></a> <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/export-extractionList.php" ><img alt="Export Keyword List" title="Export Keyword List" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/export.png"></a>  </span></div> 
				  </div>
				  <div class="ad_textsp">
					<form id="ManageUsers" class="form" method="post" name="ManageUsers">
						<table width="100%" cellspacing="0" cellpadding="0" id="print_content">
							<tr>
							 	<td height="10" colspan="2">
							 	<input type="text" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
						<input type="text" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
							 	</td>
							</tr>
							<tr> 
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table info_border">
									<tr>
										<th width="3%" align="left" ><a href="javascript: setClientSort('A.user_id','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageUsers);">ID</a> <?php if ($_REQUEST['sortby'] == 'company_name'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?></th>
										<th width="3%" align="left">
										<a href="javascript: setClientSort('A.company_name','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageUsers);">Customer Name</a> <?php if ($_REQUEST['sortby'] == 'company_name'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?></th>
                                                                                <th width="1%" align="left" >&nbsp;</th>
                                                                                <th width="6%" align="left" >Customer Total</th>
                                                                                <th width="2%" align="left" >&nbsp;</th>
										<th width="9%" align="left" >Customer Total (<?php echo $this->_tpl_vars['lastYear']; ?>
)</th>
                                                                                <th width="2%" align="left" >&nbsp;</th>
										<th width="9%" align="left" >Gross Sale (<?php echo $this->_tpl_vars['lastYear']; ?>
)</th>
                                                                                <th width="2%" align="left" >&nbsp;</th>
										<th width="6%" align="left" >RO Total (<?php echo $this->_tpl_vars['lastYear']; ?>
)</th>
                                                                                <th width="2%" align="left" >&nbsp;</th>
                                                                                <th width="6%" align="left" >Average RO (<?php echo $this->_tpl_vars['lastYear']; ?>
)</th>
                                                                                 <th width="2%" align="left" class="th_width" >&nbsp;</th>
                                                                                <th width="10%" align="left" class="th_width">Avg. Customer lifetime value</th>
                                                                                <th width="2%" align="left" class="th_width">&nbsp;</th>
                                                                                <th width="9%" align="left" class="th_width">12 mo lifespan</th>
                                                                                <th width="2%" align="left" class="th_width">&nbsp;</th>
                                                                                <th width="8%" align="left" class="th_width">Total lifespan</th>
                                                                                <th width="1%" align="left" class="th_width">&nbsp;</th>
                                                                                <th width="8%" align="left" class="th_width">Total Emails</th>
                                                                                <th width="2%" align="left" class="th_width">&nbsp;</th>
                                                                                <th width="8%" align="left" class="th_width">Date</th>
                                                                                
                                                                                
									</tr>
									<?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
										<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
											<td align="left" class="th_width"><?php echo $this->_tpl_vars['item']['user_id']; ?>
</td>
											<td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/view-user.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></td>
                                                                                        <td>&nbsp;</td>
											<td align="right" ><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['custTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                                                                                        <td>&nbsp;</td>
											<td align="right" ><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['custTotalLastYear'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" ><?php if ($this->_tpl_vars['item']['grossSale'] != 0): ?> $<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['grossSale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
<?php else: ?> 0<?php endif; ?></td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" ><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['roTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" ><?php if ($this->_tpl_vars['item']['averageRO'] != 0): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['averageRO'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
 <?php else: ?>0<?php endif; ?></td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" > $<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['avgCustLifetimeValue'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" ><?php echo $this->_tpl_vars['item']['last12monthsavgVisits']; ?>
</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" ><?php echo $this->_tpl_vars['item']['avgVisits']; ?>
</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" >
                                                                                        <a href="https://www.autorepairmarketing.com/customer/admin/last-visited-customer-emails.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['LastVisitedCustEmailCnt'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</a></td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" ><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['invoicedate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d,%Y") : smarty_modifier_date_format($_tmp, "%b %d,%Y")); ?>
</td>
										</tr>
									<?php endforeach; else: ?>
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Users Added</strong></font></th>
										</tr>
									<?php endif; unset($_from); ?>
								  </table>
								</td>
							</tr>
							
						</table>
					</form>
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

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
 <script lang=\'javascript\'>
 $(document).ready(function(){
  $(\'#printPage\').click(function(){
        var data = \'<input type="button" value="Print this page" onClick="window.print()">\';           
        data += \'<div id="div_print">\';
        data += $(\'#print_content\').html();
        data += \'</div>\';

        myWindow=window.open(\'\',\'\',\'width=800,height=500\');
        myWindow.innerWidth = screen.width;
        myWindow.innerHeight = screen.height;
        myWindow.screenX = 0;
        myWindow.screenY = 0;
        myWindow.document.write(data);
        myWindow.focus();
    });
 });
 </script>
 '; ?>
