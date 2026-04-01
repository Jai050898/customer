<?php /* Smarty version 2.6.26, created on 2013-10-11 03:21:40
         compiled from show-all-budgets.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'show-all-budgets.tpl', 49, false),array('modifier', 'number_format', 'show-all-budgets.tpl', 52, false),)), $this); ?>
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
      <li>Marketing Budget</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Marketing Budget</div>
      </div>
	   <div class="ad_textsp">
			<div style="clear:both;"></div>
			<div style="width:100%;"> 
			<table border="1" style="border:solid 1px #999999;" width="100%">
			<tr>
				<td><strong>Branding / Marketing Effort</strong></td>
				<?php $_from = $this->_tpl_vars['Cal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Calitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Calitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Calitem']):
        $this->_foreach['Calitem']['iteration']++;
?>
				<td colspan="2">
				<table border="1" style="border:solid 1px #999999;" width="100%">
				<tr>
				<td colspan="2" align="center"><strong><?php echo $this->_tpl_vars['Calitem']['year']; ?>
</strong></td>
				<tr>
				<td style="width:50%"><strong> Budget</strong></td>
				<td><strong>Actual Cost</strong></td>
				</tr>
				</table>
				</td>
				<?php endforeach; else: ?>
				<td>NA</td>
				<td>NA</td>
				<?php endif; unset($_from); ?>
			</tr>
			<?php $_from = $this->_tpl_vars['Item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
						<tr style="background-color:#f3f3f3;">
				<td colspan="<?php echo $this->_tpl_vars['colspan']; ?>
"><strong><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</strong></td>
			</tr>
			<?php $_from = $this->_tpl_vars['item']['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>
			<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#ffffff'), $this);?>
;">
				<td><?php echo $this->_tpl_vars['item1']['title']; ?>
</td>
			<?php $_from = $this->_tpl_vars['item1']['Arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Citem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Citem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Citem']):
        $this->_foreach['Citem']['iteration']++;
?>
				<td><?php if ($this->_tpl_vars['Citem']['amount'] != ""): ?>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Citem']['amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
<?php else: ?> NA <?php endif; ?></td>
				<td><?php if ($this->_tpl_vars['Citem']['actual_amount'] != ""): ?>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Citem']['actual_amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
<?php else: ?> NA <?php endif; ?></td>
			<?php endforeach; else: ?>
				<td>NA</td>
				<td>NA</td>
			<?php endif; unset($_from); ?>
			</tr>
			<?php endforeach; else: ?>
			<tr>
				<td><?php echo $this->_tpl_vars['item1']['title']; ?>
</td>
			<?php $_from = $this->_tpl_vars['Cal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Calitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Calitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Calitem']):
        $this->_foreach['Calitem']['iteration']++;
?>
				<td>NA</td>
				<td>NA</td>
			<?php endforeach; else: ?>
				<td>NA</td>
				<td>NA</td>
			<?php endif; unset($_from); ?>
			</tr>
			<?php endif; unset($_from); ?>
						<?php endforeach; endif; unset($_from); ?>
			<tr style="background-color:#f3f3f3;">
				<td><strong>Gross Sales</strong></td>
			<?php $_from = $this->_tpl_vars['Cal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Calitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Calitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Calitem']):
        $this->_foreach['Calitem']['iteration']++;
?>
				<td><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Calitem']['gsales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
				<td><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Calitem']['gsales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			<?php endforeach; endif; unset($_from); ?>
			</tr>
			<tr style="background-color:#f3f3f3;">
				<td><strong>Total</strong></td>
			<?php $_from = $this->_tpl_vars['Cal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Calitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Calitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Calitem']):
        $this->_foreach['Calitem']['iteration']++;
?>
				<td><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Calitem']['amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
				<td><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Calitem']['actualamount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			<?php endforeach; endif; unset($_from); ?>
			</tr>
			<tr style="background-color:#f3f3f3;">
			<td><strong>% of Gross Sales</strong></td>
			<?php $_from = $this->_tpl_vars['Cal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Calitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Calitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Calitem']):
        $this->_foreach['Calitem']['iteration']++;
?>
				<td><strong><?php echo $this->_tpl_vars['Calitem']['per']; ?>
 %</strong></td>
				<td><strong><?php echo $this->_tpl_vars['Calitem']['actper']; ?>
 %</strong></td>
			<?php endforeach; endif; unset($_from); ?>
			</tr>
			</table>
			</div>
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