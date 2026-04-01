<?php /* Smarty version 2.6.26, created on 2013-04-10 06:00:47
         compiled from confirmed-directories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'confirmed-directories.tpl', 35, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
/dashboard.php">Home</a></li>
      <li>Confirmed Directories</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Confirmed Directories</div>
      </div>
	   <div class="ad_textsp">
	   <table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							 	<td height="10" colspan="2"></td>
							</tr>
							<tr>
							  <td><h2>Customer Information</h2></td>
							  <td align="right">&nbsp;</td>
							</tr>
							<tr>
							  <td  colspan="2">
							  	<table>
								<tr>
								<td align="right"><strong>Company Name :</strong></td>
								<td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['CustInfo']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Email :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['email']; ?>
</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Address :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['address']; ?>
</td>
								</tr>
								<tr>
								<td align="right"><strong>City :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['city']; ?>
</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>State :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['state']; ?>
</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Country :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['country']; ?>
</td>
								</tr>
								</table>
							  </td>
							</tr>

						</table>
				<div class="clr" style="height:15px;"></div>		
			<div style="clear:both;"></div>
			<table width="100%" cellspacing="0" cellpadding="0">
				<tr>
				  <td height="10"></td>
				</tr>
				<tr>
				  <td align="left" valign="top" >
					<form name="CatForm" class="form" id="CatForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
					<input type="hidden" name="hid_key" id="hid_key" value="">
						<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							<tr>
								<td colspan="2"><h2>Confirmed Directories</h2></td>
							  </tr>
							  <?php $_from = $this->_tpl_vars['CD_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
							  <?php $this->assign('cdid', $this->_tpl_vars['item']['id']); ?>
							<tr class="color_trbg">
								<td width="20%"><?php echo $this->_tpl_vars['item']['name']; ?>
:</td>
								<td width="80%" align="left">
									<input type="checkbox" name="Log[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" id="<?php echo $this->_tpl_vars['item']['name']; ?>
" <?php if ($this->_tpl_vars['Customers'][$this->_tpl_vars['cdid']] == 'Y'): ?> checked="checked"<?php endif; ?> />
								 </td>
							</tr>
							<?php endforeach; endif; unset($_from); ?>
							<tr>
								<td align="right" valign="middle">&nbsp;</td>
								<td><div id="errorDiv1" class="error-div">&nbsp;<?php echo $this->_tpl_vars['ErrorMsg']; ?>
</div></td>
							</tr>
						<tr>
							  <td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
							  <td bgcolor="#854141"><input id="submitBtn1" value="Submit" type="submit" class="sendBtn" /></td>
						</tr>
						</table>
					</form>
				</td>
				</tr>
				<tr>
					<td align="left" valign="top">&nbsp;</td>
				</tr>
			</table>
			<!-- <table border="1" style="border:solid 1px #999999;" width="100%">
			<tr>
				<td style="width:30%"><strong>Company</strong></td>
				<?php $_from = $this->_tpl_vars['CD_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
					<td style="width:20%" align="center"><strong><?php echo $this->_tpl_vars['item']['name']; ?>
</strong></td>
				<?php endforeach; endif; unset($_from); ?>
			</tr>
			<?php $_from = $this->_tpl_vars['Customers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
			<tr style="background-color:#f3f3f3;">
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
				<?php $_from = $this->_tpl_vars['CD_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>
					<td style="width:20%" align="center"><strong>
					<?php $this->assign('cdid', $this->_tpl_vars['item1']['id']); ?>
					<?php if ($this->_tpl_vars['item'][$this->_tpl_vars['cdid']] == 'N'): ?>
						<span id="changediv<?php echo $this->_tpl_vars['cdid']; ?>
<?php echo $this->_tpl_vars['item']['user_id']; ?>
"><a href="javascript: changestatusyes('<?php echo $this->_tpl_vars['cdid']; ?>
','<?php echo $this->_tpl_vars['item']['user_id']; ?>
','changediv<?php echo $this->_tpl_vars['cdid']; ?>
<?php echo $this->_tpl_vars['item']['user_id']; ?>
');"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/no.png" border="0"></a></span>
					<?php else: ?>
						<span id="changedivno<?php echo $this->_tpl_vars['cdid']; ?>
<?php echo $this->_tpl_vars['item']['user_id']; ?>
"><a href="javascript: changestatusno('<?php echo $this->_tpl_vars['cdid']; ?>
','<?php echo $this->_tpl_vars['item']['user_id']; ?>
','changedivno<?php echo $this->_tpl_vars['cdid']; ?>
<?php echo $this->_tpl_vars['item']['user_id']; ?>
');"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/yes.gif" border="0"></a></span>
					<?php endif; ?>
					</strong></td>
				<?php endforeach; endif; unset($_from); ?>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
			</table> -->
			<div class="clear"></div>
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