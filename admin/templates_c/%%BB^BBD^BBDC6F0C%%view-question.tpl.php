<?php /* Smarty version 2.6.26, created on 2012-11-01 04:10:56
         compiled from view-question.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
/dashboard.php">Home</a></li>
      <li>View Question</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">View Question</div>
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
									<td colspan="2"><h2>View Question</h2></td>
								  </tr>
								<tr class="color_trbg">
									<td width="12%">Categoty</td>
									<td width="88%" align="left">
										<?php echo $this->_tpl_vars['Quest']['cat_name']; ?>

									 </td>
							  </tr>
							  <tr class="color_trbg">
									<td width="12%">Question Type</td>
									<td width="88%" align="left">
										<?php if ($this->_tpl_vars['Quest']['quest_type'] == 'R'): ?>Radio<?php elseif ($this->_tpl_vars['Quest']['quest_type'] == 'C'): ?> Multple Choice<?php else: ?>Text Answer<?php endif; ?>
									 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="12%">Question</td>
								<td width="88%" align="left">
									<?php echo $this->_tpl_vars['Quest']['question']; ?>

								 </td>
							  </tr>
							  <?php if ($this->_tpl_vars['Quest']['quest_type'] != 'T'): ?>
							  <tr class="color_trbg">
								<td valign="top">Options</td>
								<td align="left">
									<?php $_from = $this->_tpl_vars['Quest']['Options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
									<?php if ($this->_tpl_vars['Quest']['quest_type'] == 'R'): ?>
										<input type="radio" value="<?php echo $this->_tpl_vars['item']['option_id']; ?>
">&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['item']['option_name']; ?>
</strong><br><br>
									<?php elseif ($this->_tpl_vars['Quest']['quest_type'] == 'C'): ?>
										<input type="checkbox" value="<?php echo $this->_tpl_vars['item']['option_id']; ?>
">&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['item']['option_name']; ?>
</strong><br><br>
									<?php endif; ?>
									<?php endforeach; endif; unset($_from); ?>
									
								</td>
							  </tr>
							  <?php endif; ?>
							  
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>