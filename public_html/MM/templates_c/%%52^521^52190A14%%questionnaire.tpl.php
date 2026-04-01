<?php /* Smarty version 2.6.26, created on 2013-06-11 09:56:56
         compiled from questionnaire.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'questionnaire.tpl', 23, false),array('modifier', 'stripslashes', 'questionnaire.tpl', 30, false),array('modifier', 'count', 'questionnaire.tpl', 75, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/source/jquery.fancybox.css?v=2.1.2" media="screen" />
<?php echo '
</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
'; ?>

<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Survey</h1>
			<form name="myform" id="myform" method="post">
			<table width="100%" border="0" cellspacing="1" cellpadding="5" style="background-image:url(images/contactbg.gif); background-repeat:no-repeat; background-position:top;">
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><div style="font-size:16px;"><u><strong><?php echo $this->_tpl_vars['Survey']['cat_name']; ?>
</strong></u></div></td>
				</tr>
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['Survey']['cat_description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div></td>
				</tr>				
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2">&nbsp;</td>
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
				   <td width="100%" ><a class="fancybox" href="#inline<?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
" title="Help Content For Questions"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/help_icon.gif" /></a>
				   <div id="inline<?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
" style="width:400px;display: none;">
						<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['question'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</h3>
						<p>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['question_desc'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

						</p>
					</div>
				   </td>
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
');" <?php if ($this->_tpl_vars['item']['Ans'] == $this->_tpl_vars['item1']['option_id']): ?> checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['resrows'] != 0): ?> disabled="disabled" <?php endif; ?> />&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['item1']['option_name']; ?>
</strong><br>
					<?php elseif ($this->_tpl_vars['item']['quest_type'] == 'C'): ?>
						<input type="checkbox" value="<?php echo $this->_tpl_vars['item1']['option_id']; ?>
" name="answers[]" onchange="javascript: StoreAnswer('<?php echo $this->_tpl_vars['item']['quest_id']; ?>
',this.value,'<?php echo $_REQUEST['cat']; ?>
','<?php echo $this->_tpl_vars['item']['quest_type']; ?>
',document.myform,'answers[]');" <?php if (in_array ( $this->_tpl_vars['item1']['option_id'] , $this->_tpl_vars['item']['Ans'] )): ?> checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['resrows'] != 0): ?> disabled="disabled" <?php endif; ?> />&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['item1']['option_name']; ?>
</strong><br>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					<?php $_from = $this->_tpl_vars['item']['OptionsLab']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
					<p><strong><?php echo $this->_tpl_vars['k']; ?>
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
');" <?php if ($this->_tpl_vars['item']['Ans'] == $this->_tpl_vars['item1']['option_id']): ?> checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['resrows'] != 0): ?> disabled="disabled" <?php endif; ?>>&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['item1']['option_name']; ?>
</strong><br>
					<?php elseif ($this->_tpl_vars['item']['quest_type'] == 'C'): ?>
						<input type="checkbox" value="<?php echo $this->_tpl_vars['item1']['option_id']; ?>
" name="answers[]" onchange="javascript: StoreAnswer('<?php echo $this->_tpl_vars['item']['quest_id']; ?>
',this.value,'<?php echo $_REQUEST['cat']; ?>
','<?php echo $this->_tpl_vars['item']['quest_type']; ?>
',document.myform,'answers[]');" <?php if (in_array ( $this->_tpl_vars['item1']['option_id'] , $this->_tpl_vars['item']['Ans'] )): ?> checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['resrows'] != 0): ?> disabled="disabled" <?php endif; ?>>&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['item1']['option_name']; ?>
</strong><br>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					
					<?php endforeach; endif; unset($_from); ?>
					<?php elseif ($this->_tpl_vars['item']['quest_type'] == 'B'): ?>
						<input type="text" value="<?php echo $this->_tpl_vars['item']['Ans']; ?>
" id="answer" name="answer" onblur="javascript: StoreAnswer('<?php echo $this->_tpl_vars['item']['quest_id']; ?>
',this.value,'<?php echo $_REQUEST['cat']; ?>
','<?php echo $this->_tpl_vars['item']['quest_type']; ?>
');" <?php if ($this->_tpl_vars['resrows'] != 0): ?> disabled="disabled" <?php endif; ?> /> 
					<?php else: ?>
					<textarea name="answer" cols="64" rows="10"  id="answer" style="width:400px; height:100px;" onblur="javascript: StoreAnswer('<?php echo $this->_tpl_vars['item']['quest_id']; ?>
',this.value,'<?php echo $_REQUEST['cat']; ?>
','<?php echo $this->_tpl_vars['item']['quest_type']; ?>
');" <?php if ($this->_tpl_vars['resrows'] != 0): ?> disabled="disabled" <?php endif; ?>><?php echo $this->_tpl_vars['item']['Ans']; ?>
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
				<?php if (count($this->_tpl_vars['Quest']) > 0): ?>
				<?php if ($this->_tpl_vars['resrows'] == 0): ?>
				<tr>
					<td style="padding-top:10px;padding-left:25px;color:#FF0000;" colspan="2" >NOTE: Once you submit the survey you can not Update the answers that you have given</td>
				</tr>				
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><input type="submit" name="submit" value="Submit Survey" /></td>
				</tr>
				<?php else: ?>
				<tr>
					<td style="padding-top:10px;padding-left:25px;color:#FF0000;" colspan="2" >NOTE: You have already  submited the survey you can not Update the answers that you have given</td>
				</tr>				
				<?php if ($this->_tpl_vars['nextsurvey'] != 0): ?>
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><a href="questionnaire.php?cat=<?php echo $this->_tpl_vars['ncat']; ?>
"><input type="button" name="submit" value="Continue to next Survey" /></a></td>
				</tr>
				<?php endif; ?>
				<?php endif; ?>
				<?php endif; ?>
			</table>
			</form>
			<div class="clear"></div>
		</div>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rightbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="clear"></div>
	</div>
	<div><img src="images/bodybottom.png" alt="" /></div>
</div>
<!--end body-->	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery-1.8.2.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/source/jquery.fancybox.js?v=2.1.3"></script>
<?php echo '
<script language="jscript" type="text/javascript">
$(document).ready(function() {
			$(\'.fancybox\').fancybox();

		});
</script>
'; ?>
