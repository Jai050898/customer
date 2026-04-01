<?php /* Smarty version 2.6.26, created on 2012-11-03 03:11:01
         compiled from view-survey.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'view-survey.tpl', 27, false),array('modifier', 'count', 'view-survey.tpl', 63, false),)), $this); ?>
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
							  <li>Survey Response</li>
						  </ul>
						<div class="clr"></div>
					  </div>
					  <div id="admin_head"> Survey Response</div>
				  </div>
				  
				<div class="ad_textsp">
				<p align="justify" style="padding-right:15px">
					<table width="100%" border="0" cellspacing="1" cellpadding="5">
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><span style="font-size:18px;">Survey Name : <?php echo $this->_tpl_vars['Survey']['cat_name']; ?>
</span></td>
				</tr>
				<?php $_from = $this->_tpl_vars['Quest']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<tr>
				   <td width="100%" style=" padding-left:15px;"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
.&nbsp;&nbsp;<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['question'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</strong></td>
				</tr>
				<tr>
				<td colspan="2" style=" padding-left:35px;">
					<?php if ($this->_tpl_vars['item']['quest_type'] != 'T' && $this->_tpl_vars['item']['quest_type'] != 'B'): ?>
					<?php $_from = $this->_tpl_vars['item']['Options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>
					<?php if ($this->_tpl_vars['item']['quest_type'] == 'R'): ?>
						<input type="radio" value="<?php echo $this->_tpl_vars['item1']['option_id']; ?>
" name="answer<?php echo $this->_tpl_vars['item']['quest_id']; ?>
" onchange="javascript: StoreAnswer('<?php echo $this->_tpl_vars['item']['quest_id']; ?>
',this.value,'<?php echo $_REQUEST['cat']; ?>
','<?php echo $this->_tpl_vars['item']['quest_type']; ?>
');" <?php if ($this->_tpl_vars['item']['Ans'] == $this->_tpl_vars['item1']['option_id']): ?> checked="checked"<?php endif; ?>>&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['item1']['option_name']; ?>
</strong><br>
					<?php elseif ($this->_tpl_vars['item']['quest_type'] == 'C'): ?>
						<input type="checkbox" value="<?php echo $this->_tpl_vars['item1']['option_id']; ?>
" name="answers[]" onchange="javascript: StoreAnswer('<?php echo $this->_tpl_vars['item']['quest_id']; ?>
',this.value,'<?php echo $_REQUEST['cat']; ?>
','<?php echo $this->_tpl_vars['item']['quest_type']; ?>
',document.myform,'answers[]');" <?php if (in_array ( $this->_tpl_vars['item1']['option_id'] , $this->_tpl_vars['item']['Ans'] )): ?> checked="checked"<?php endif; ?>>&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['item1']['option_name']; ?>
</strong><br>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					<?php $_from = $this->_tpl_vars['item']['OptionsLab']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
					<p style="padding-top:10px;"><strong><?php echo $this->_tpl_vars['k']; ?>
</strong></p>
					<?php $_from = $this->_tpl_vars['v']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>
					<?php if ($this->_tpl_vars['item']['quest_type'] == 'R'): ?>
						<input type="radio" value="<?php echo $this->_tpl_vars['item1']['option_id']; ?>
" name="answer<?php echo $this->_tpl_vars['item']['quest_id']; ?>
" onchange="javascript: StoreAnswer('<?php echo $this->_tpl_vars['item']['quest_id']; ?>
',this.value,'<?php echo $_REQUEST['cat']; ?>
','<?php echo $this->_tpl_vars['item']['quest_type']; ?>
');" <?php if ($this->_tpl_vars['item']['Ans'] == $this->_tpl_vars['item1']['option_id']): ?> checked="checked"<?php endif; ?>>&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['item1']['option_name']; ?>
</strong><br>
					<?php elseif ($this->_tpl_vars['item']['quest_type'] == 'C'): ?>
						<input type="checkbox" value="<?php echo $this->_tpl_vars['item1']['option_id']; ?>
" name="answers[]" onchange="javascript: StoreAnswer('<?php echo $this->_tpl_vars['item']['quest_id']; ?>
',this.value,'<?php echo $_REQUEST['cat']; ?>
','<?php echo $this->_tpl_vars['item']['quest_type']; ?>
',document.myform,'answers[]');" <?php if (in_array ( $this->_tpl_vars['item1']['option_id'] , $this->_tpl_vars['item']['Ans'] )): ?> checked="checked"<?php endif; ?>>&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['item1']['option_name']; ?>
</strong><br>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					
					<?php endforeach; endif; unset($_from); ?>
					<?php elseif ($this->_tpl_vars['item']['quest_type'] == 'B'): ?>
						<input type="text" value="<?php echo $this->_tpl_vars['item']['Ans']; ?>
" id="answer" name="answer" onblur="javascript: StoreAnswer('<?php echo $this->_tpl_vars['item']['quest_id']; ?>
',this.value,'<?php echo $_REQUEST['cat']; ?>
','<?php echo $this->_tpl_vars['item']['quest_type']; ?>
');" /> 
					<?php else: ?>
					<textarea name="answer" cols="64" rows="10"  id="answer" style="width:400px; height:100px;" onblur="javascript: StoreAnswer('<?php echo $this->_tpl_vars['item']['quest_id']; ?>
',this.value,'<?php echo $_REQUEST['cat']; ?>
','<?php echo $this->_tpl_vars['item']['quest_type']; ?>
');"><?php echo $this->_tpl_vars['item']['Ans']; ?>
</textarea>
					<?php endif; ?>
					<div id="Ansdiv<?php echo $this->_tpl_vars['item']['quest_id']; ?>
"></div>
					</td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2">No Questions Added</td>
				</tr>
				<?php endif; unset($_from); ?>
				<?php if (count($this->_tpl_vars['Quest']) > 0): ?>
				<tr>
					<td colspan="2"><div style="float:right; padding-right:5px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['prev'] != ""): ?><?php echo $this->_tpl_vars['prev']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['nav'] != ""): ?><?php echo $this->_tpl_vars['nav']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['next'] != ""): ?><?php echo $this->_tpl_vars['next']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['last'] != ""): ?><?php echo $this->_tpl_vars['last']; ?>
<?php endif; ?></div></td>
				</tr>
				<?php endif; ?>
			</table>
                </p>
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