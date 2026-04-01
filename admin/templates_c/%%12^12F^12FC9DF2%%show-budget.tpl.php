<?php /* Smarty version 2.6.26, created on 2013-10-11 03:20:12
         compiled from show-budget.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'show-budget.tpl', 35, false),array('modifier', 'number_format', 'show-budget.tpl', 37, false),)), $this); ?>
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
      <li>Marketing Budget for <?php echo $this->_tpl_vars['Cal']['year']; ?>
</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Marketing Budget for <?php echo $this->_tpl_vars['Cal']['year']; ?>
</div>
      </div>
	   <div class="ad_textsp">
			<div style="clear:both;"></div>
			<table border="1" style="border:solid 1px #999999;" width="100%">
			<tr>
				<td style="width:60%"><strong>Branding / Marketing Effort</strong></td>
				<td style="width:20%"><strong><?php echo $this->_tpl_vars['Cal']['year']; ?>
 Budget</strong></td>
				<td style="width:20%"><strong><?php echo $this->_tpl_vars['Cal']['year']; ?>
 Actual Cost</strong></td>
			</tr>
			<?php $_from = $this->_tpl_vars['Item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
			<?php if ($this->_tpl_vars['item']['Items'] != ""): ?>
			<tr style="background-color:#f3f3f3;">
				<td colspan="3"><strong><?php echo $this->_tpl_vars['item']['cat_name']; ?>
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
				<td>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['item1']['amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
				<td>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['item1']['actual_amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<tr style="background-color:#f3f3f3;">
				<td><strong>Gross Sales</strong></td>
				<td><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Cal']['gsales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
				<td><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Cal']['gsales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			</tr>
			<tr style="background-color:#f3f3f3;">
				<td><strong>Total</strong></td>
				<td><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Cal']['amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
				<td><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Cal']['actualamount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			</tr>
			<tr style="background-color:#f3f3f3;">
				<td><strong>% of Gross Sales</strong></td>
				<td><strong><?php echo $this->_tpl_vars['Cal']['per']; ?>
 %</strong></td>
				<td><strong><?php echo $this->_tpl_vars['Cal']['actper']; ?>
 %</strong></td>
			</tr>
			</table>
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