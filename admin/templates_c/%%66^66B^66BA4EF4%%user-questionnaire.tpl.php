<?php /* Smarty version 2.6.26, created on 2011-01-19 10:43:49
         compiled from user-questionnaire.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'user-questionnaire.tpl', 75, false),)), $this); ?>
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
      <li>View User Questionnaire</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">View User Questionnaire</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  <form name="myform" id="myform" method="post" action="user-questionniare.php?user_id=<?php echo $_REQUEST['user_id']; ?>
">
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							  <tr>
									<td colspan="2"><h2>View User Questionnaire</h2></td>
							 </tr>
							  <tr>
							  <td  colspan="2"><div class="search_divbox">
							  <select name="cat_id" id="cat_id" class="searchinput" onchange="document.myform.submit();">
									<option value="">Select Category</option>
									<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['Cat']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
									<option value="<?php echo $this->_tpl_vars['Cat'][$this->_sections['list']['index']]['cat_id']; ?>
" <?php if ($_REQUEST['cat_id'] == $this->_tpl_vars['Cat'][$this->_sections['list']['index']]['cat_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['Cat'][$this->_sections['list']['index']]['cat_name']; ?>
</option>
									<?php endfor; endif; ?>
								</select>
							 <div class="clr"></div>
							  </div></td>
							</tr>
							  <?php $_from = $this->_tpl_vars['Quest']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
								<tr>
								   <td width="1%" style=" padding-left:15px;"><strong><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
.</strong></td>
								  <td width="90%" align="left" valign="left"><strong><?php echo $this->_tpl_vars['item']['question']; ?>
</strong></td>
								</tr>
								<tr>
								<td colspan="2" style=" padding-left:35px;">
									<?php if ($this->_tpl_vars['item']['quest_type'] != 'T'): ?>
									<?php $_from = $this->_tpl_vars['item']['Options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>
									<?php if ($this->_tpl_vars['item']['quest_type'] == 'R'): ?>
										<input type="radio" value="<?php echo $this->_tpl_vars['item1']['option_id']; ?>
" name="answer" onchange="javascript: StoreAnswer('<?php echo $this->_tpl_vars['item']['quest_id']; ?>
',this.value,'<?php echo $_REQUEST['cat']; ?>
','<?php echo $this->_tpl_vars['item']['quest_type']; ?>
');" <?php if ($this->_tpl_vars['item']['Ans'] == $this->_tpl_vars['item1']['option_id']): ?> checked="checked"<?php endif; ?> disabled="disabled">&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['item1']['option_name']; ?>
</strong><br><br>
									<?php elseif ($this->_tpl_vars['item']['quest_type'] == 'C'): ?>
										<input type="checkbox" value="<?php echo $this->_tpl_vars['item1']['option_id']; ?>
" name="answers[]" onchange="javascript: StoreAnswer('<?php echo $this->_tpl_vars['item']['quest_id']; ?>
',this.value,'<?php echo $_REQUEST['cat']; ?>
','<?php echo $this->_tpl_vars['item']['quest_type']; ?>
',document.myform,'answers[]');" <?php if (in_array ( $this->_tpl_vars['item1']['option_id'] , $this->_tpl_vars['item']['Ans'] )): ?> checked="checked"<?php endif; ?> disabled="disabled">&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['item1']['option_name']; ?>
</strong><br><br>
									<?php endif; ?>
									<?php endforeach; endif; unset($_from); ?>
									<?php else: ?>
									<textarea name="answer" cols="64" rows="10"  id="answer" style="width:400px; height:100px;" onblur="javascript: StoreAnswer('<?php echo $this->_tpl_vars['item']['quest_id']; ?>
',this.value,'<?php echo $_REQUEST['cat']; ?>
','<?php echo $this->_tpl_vars['item']['quest_type']; ?>
');" readonly="readonly"><?php echo $this->_tpl_vars['item']['Ans']; ?>
</textarea>
									<?php endif; ?>
									<div id="Ansdiv<?php echo $this->_tpl_vars['item']['quest_id']; ?>
"></div>
									</td>
								</tr>
								<?php endforeach; else: ?>
								<tr>
									<td style="padding-top:10px;padding-left:25px;" colspan="2">No Answers Found</td>
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
			  			  </form>
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