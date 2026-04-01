<?php /* Smarty version 2.6.26, created on 2013-06-18 03:25:38
         compiled from manage-questions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'manage-questions.tpl', 61, false),array('modifier', 'stripslashes', 'manage-questions.tpl', 100, false),array('modifier', 'date_format', 'manage-questions.tpl', 102, false),array('function', 'cycle', 'manage-questions.tpl', 91, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
      <li>Manage Questions</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Manage Questions</div>
      </div>
	  <div class="ad_textsp">
		<form id="ManageQuest" class="form" method="get" name="ManageQuest">
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
			  <td><h2>Manage Questions</h2></td>
			  <td align="right"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/add-question.php">Add Question</a></td>
			</tr>
			 <tr>
			  <td  colspan="2"><div class="search_divbox">
			  <select name="cat_id" id="cat_id" class="searchinput" onchange="document.ManageQuest.submit();">
					<option value="">Select Survey</option>
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
				</select>&nbsp;
			  <select name="quest_type" id="quest_type"  class="searchinput" onchange="document.ManageQuest.submit();">
					<option value="">Select Question Type</option>
					<option value="R" <?php if ($_REQUEST['quest_type'] == 'R'): ?> selected="selected" <?php endif; ?>>Radio</option>
					<option value="C" <?php if ($_REQUEST['quest_type'] == 'C'): ?> selected="selected" <?php endif; ?>>Multple Choice</option>
					<option value="B" <?php if ($_REQUEST['quest_type'] == 'B'): ?> selected="selected" <?php endif; ?>>Text Box</option>
					<option value="T" <?php if ($_REQUEST['quest_type'] == 'T'): ?> selected="selected" <?php endif; ?>>Text Answer</option>
				</select>&nbsp;
				<input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != ""): ?><?php echo $_REQUEST['keyword']; ?>
<?php endif; ?>" class="searchinput" /> <input type="image" src="../images/go_but.png" onclick="document.ManageQuest.submit();" /> 
			 <div class="clr"></div>
			  </div></td>
			</tr>
			<?php if (count($this->_tpl_vars['Quest']) > 0): ?>
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageQuest,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageQuest,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageQuest,'D','chkall[]');"/>
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
			
			<?php if ($_REQUEST['cat_id'] != ""): ?>
			<tr>
			  <td align="left" valign="top" colspan="2"><table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
				<tr>
				  <th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageQuest,'chkall[]','checkall');" /></th>
				  <th width="5%" align="left">Order</th>
				  <th width="8%" align="left">Order No</th>
				  <th width="15%" align="left"><a href="javascript: setClientSort('A.quest_type','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageQuest);">Question Type </a> <?php if ($_REQUEST['sortby'] == 'A.quest_type'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
				  <th width="20%" align="left">Question </th>
				  <th width="15%" align="left">Status</th>
				  <th width="15%" align="left">Created Date</th>
				  <th width="10%" align="left">Actions </th>
				</tr>
				<?php $_from = $this->_tpl_vars['Quest']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
				  <td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="<?php echo $this->_tpl_vars['item']['quest_id']; ?>
"/></td>
				  <td align="left">
				  <?php if (count($this->_tpl_vars['Quest']) > 1): ?>
				  <?php if (($this->_foreach['item']['iteration'] <= 1)): ?><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-questions.php?act=down&id=<?php echo $this->_tpl_vars['item']['quest_id']; ?>
&cat_id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
&order=<?php echo $this->_tpl_vars['item']['showorder']; ?>
"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/arrow_down.png" /></a><?php elseif (($this->_foreach['item']['iteration'] == $this->_foreach['item']['total'])): ?><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-questions.php?act=up&id=<?php echo $this->_tpl_vars['item']['quest_id']; ?>
&cat_id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
&order=<?php echo $this->_tpl_vars['item']['showorder']; ?>
"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/arrow_up.png" /></a><?php else: ?><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-questions.php?act=down&id=<?php echo $this->_tpl_vars['item']['quest_id']; ?>
&cat_id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
&order=<?php echo $this->_tpl_vars['item']['showorder']; ?>
"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/arrow_down.png" /></a>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-questions.php?act=up&id=<?php echo $this->_tpl_vars['item']['quest_id']; ?>
&cat_id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
&order=<?php echo $this->_tpl_vars['item']['showorder']; ?>
"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/arrow_up.png" /></a><?php endif; ?>
				  <?php endif; ?>
				  </td>
				  <td align="left"><?php echo $this->_tpl_vars['item']['showorder']; ?>
</td>
				  <td align="left"><?php if ($this->_tpl_vars['item']['quest_type'] == 'R'): ?>Radio<?php elseif ($this->_tpl_vars['item']['quest_type'] == 'C'): ?>Multple Choice<?php elseif ($this->_tpl_vars['item']['quest_type'] == 'B'): ?>Text box<?php else: ?>Text Answer<?php endif; ?></td>
				  <td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/view-question.php?quest_id=<?php echo $this->_tpl_vars['item']['quest_id']; ?>
"> <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['question'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></td>
				  <td align="left"><?php if ($this->_tpl_vars['item']['status'] == 'A'): ?><font color="#00CC33">Active</font><?php elseif ($this->_tpl_vars['item']['status'] == 'I'): ?><font color="#0000FF">InActive</font><?php elseif ($this->_tpl_vars['item']['status'] == 'P'): ?><font color="#00EEFF">Pending</font><?php else: ?><font color="#FF0000">Deleted</font><?php endif; ?></td>
				  <td align="left"> <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y") : smarty_modifier_date_format($_tmp, "%m-%d-%Y")); ?>
</td> 				  
				  <td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/add-question.php?quest_id=<?php echo $this->_tpl_vars['item']['quest_id']; ?>
" class="link023">Edit</a></td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
				  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Questions Added</strong></font></th>
				</tr>
				<?php endif; unset($_from); ?>
			  </table></td>
			</tr>
			<?php else: ?>
			<tr>
				  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>Please Select Survey</strong></font></th>
				</tr>
			<?php endif; ?>
			
			<?php if (count($this->_tpl_vars['Quest']) > 0): ?>
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageQuest,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageQuest,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageQuest,'D','chkall[]');"/>
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
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/js/jquery.ufvalidator-1.0.4.js"></script>