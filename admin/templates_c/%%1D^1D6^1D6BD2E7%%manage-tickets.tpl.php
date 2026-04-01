<?php /* Smarty version 2.6.26, created on 2013-06-18 03:07:07
         compiled from manage-tickets.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'manage-tickets.tpl', 49, false),array('modifier', 'date_format', 'manage-tickets.tpl', 82, false),array('function', 'cycle', 'manage-tickets.tpl', 77, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/thickbox.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<?php echo '
<style type="text/css">
.error-div{color:#FF0000;}
</style>
'; ?>

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
      <li>Manage Tickets</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Manage Tickets</div>
      </div>
	  <div class="ad_textsp">
		<form id="ManageTickets" class="form" method="post" name="ManageTickets">
		<input type="hidden" name="hid_key" id="hid_key" value="" />
		<input type="hidden" name="hid_type" id="hid_type" value="" />
		<input type="hidden" name="hid_id" id="hid_id" value="" />
		<input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
		<input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
			<table width="100%" cellspacing="0" cellpadding="0">
			<tr>
			  <td height="10" colspan="2"></td>
			</tr>
			 <tr>
			  <td><h2>Manage Tickets</h2></td>
			  <td align="right">&nbsp;</td>
			</tr>
			 <tr>
			  <td  colspan="2"><div class="search_divbox">
				<input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != ""): ?><?php echo $_REQUEST['keyword']; ?>
<?php endif; ?>" class="searchinput" /> <input type="image" src="../images/go_but.png" onclick="document.ManageTickets.submit();" /> 
			 <div class="clr"></div>
			  </div></td>
			</tr>
			<?php if (count($this->_tpl_vars['Tickets']) > 0): ?>
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageTickets,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageTickets,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageTickets,'D','chkall[]');"/>
				</td>
				<td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['prev'] != ""): ?><?php echo $this->_tpl_vars['prev']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['nav'] != ""): ?><?php echo $this->_tpl_vars['nav']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['next'] != ""): ?><?php echo $this->_tpl_vars['next']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['last'] != ""): ?><?php echo $this->_tpl_vars['last']; ?>
<?php endif; ?></div></td>
				</tr>
				</table>
				</td>
                </tr>
			<?php endif; ?>
			<tr>
			  <td align="left" valign="top" colspan="2"><table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
				<tr>
				  <th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageTickets,'chkall[]','checkall');" /></th>
				  <th width="25%" align="left">Customer</th>
				  <th width="15%" align="left">Priority</th>
				  <th width="15%" align="left">Subject</th>
				  <th width="15%" align="left">Requested Date</th>
				  <th width="15%" align="left">Responded Date</th>
				  <th width="10%" align="left">Status </th>
				  <th width="10%" align="left">Actions </th>
				</tr>
				<?php $_from = $this->_tpl_vars['Tickets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
				  <td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="<?php echo $this->_tpl_vars['item']['project_id']; ?>
"/></td>
				  <td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/view-user.php?user_id=<?php echo $this->_tpl_vars['item']['req_from']; ?>
"><?php echo $this->_tpl_vars['item']['first_name']; ?>
 <?php echo $this->_tpl_vars['item']['last_name']; ?>
</a>&nbsp;</td>
				  <td align="left"><?php if ($this->_tpl_vars['item']['priority'] == 1): ?>Urgent<?php elseif ($this->_tpl_vars['item']['priority'] == 2): ?>High<?php elseif ($this->_tpl_vars['item']['priority'] == 3): ?>Normal<?php elseif ($this->_tpl_vars['item']['priority'] == 4): ?>Low<?php else: ?>Very Low<?php endif; ?></td>
				  <td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/ajax.php?For=ReqInfo&req_id=<?php echo $this->_tpl_vars['item']['req_id']; ?>
&height=500&width=600" class="thickbox" title="View tickets"><?php echo $this->_tpl_vars['item']['subject']; ?>
</a></td>
				  <td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['create_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y") : smarty_modifier_date_format($_tmp, "%m-%d-%Y")); ?>
</td>
				  <td align="left"><?php if ($this->_tpl_vars['item']['respond_date'] != "0000-00-00 00:00:00"): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['respond_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y") : smarty_modifier_date_format($_tmp, "%m-%d-%Y")); ?>
<?php else: ?>--<?php endif; ?></td>
				  <td align="left"> <?php if ($this->_tpl_vars['item']['status'] == 'O'): ?><font color="#00CC33">Open</font><?php elseif ($this->_tpl_vars['item']['status'] == 'R'): ?><font color="#0000FF">Re Open</font><?php else: ?><font color="#FF0000">Closed</font><?php endif; ?></td>
				  <td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/view-ticket.php?ticket_id=<?php echo $this->_tpl_vars['item']['req_id']; ?>
" class="link023">View</a></td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
				  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Tickets Added</strong></font></th>
				</tr>
				<?php endif; unset($_from); ?>
			  </table></td>
			</tr>
			<?php if (count($this->_tpl_vars['Tickets']) > 0): ?>
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageTickets,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageTickets,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageTickets,'D','chkall[]');"/>
				</td>
				<td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['prev'] != ""): ?><?php echo $this->_tpl_vars['prev']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['nav'] != ""): ?><?php echo $this->_tpl_vars['nav']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['next'] != ""): ?><?php echo $this->_tpl_vars['next']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['last'] != ""): ?><?php echo $this->_tpl_vars['last']; ?>
<?php endif; ?></div></td>
				</tr>
				</table>
				</td>
                </tr>
			<?php endif; ?>
                  </table>
		</form>
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
        <!--end of contentpane -->
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
/js/thickbox.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/js/jquery.ufvalidator-1.0.4.js"></script>