<?php /* Smarty version 2.6.26, created on 2013-05-13 01:09:07
         compiled from manage-survey-questions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'manage-survey-questions.tpl', 33, false),)), $this); ?>
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
/admin/dashboard.php">Home</a></li>
      <li>Select Survey</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Select Survey</div>
      </div>
	  <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
			<tr>
			  <td height="10" colspan="2"></td>
			</tr>
			 <tr>
			  <td><h2>Select Survey</h2></td>
			  <td align="right">&nbsp;</td>
			</tr>
			<tr>
			  <td align="left" valign="top" colspan="2"><table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
				<?php $_from = $this->_tpl_vars['Cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
				  <td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-questions.php?cat_id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
"><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</a></td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
				  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Survey Added</strong></font></th>
				</tr>
				<?php endif; unset($_from); ?>
			  </table></td>
			</tr>
                  </table>
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