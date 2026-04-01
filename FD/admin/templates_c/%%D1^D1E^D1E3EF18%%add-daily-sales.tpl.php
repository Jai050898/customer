<?php /* Smarty version 2.6.26, created on 2012-11-23 03:21:33
         compiled from add-daily-sales.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'add-daily-sales.tpl', 82, false),array('modifier', 'date_format', 'add-daily-sales.tpl', 86, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/thickbox.css" rel="stylesheet" type="text/css">
<?php echo '
<style type="text/css">
#TB_window {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 4px solid #A44900;
    color: #000000;
    display: none;
    left: 50%;
    position: fixed;
    text-align: left;
    top: 50%;
    z-index: 102;
}
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
							<li>Add Daily Data</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Add Daily Data</div>
				  </div>
					<div class="ad_textsp">
						<table width="95%" border="0" align="center" cellpadding="3" cellspacing="3" bgcolor="#FAFAFA" style="height:250px; ;border:2px solid #E8E8E8;">
	<tr align="center" valign="middle">
		<td bgcolor="#eaeaea" height="30">
		<table width="10" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="16" align="left">&nbsp;
			</td>
          </tr>
        </table></td>
		<td bgcolor="#eaeaea">
		<table width="10" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="16" align="left">&nbsp;
			</td>
          </tr>
        </table></td>
		<td colspan="3" class="companyheading1"  bgcolor="#eaeaea"><?php echo $this->_tpl_vars['disDate']; ?>
</td>
		<td bgcolor="#eaeaea"><table width="30" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="16" align="left">&nbsp;
			</td>
          </tr>
        </table></td>
		<td bgcolor="#eaeaea">
		  <table width="10" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="16" align="left">&nbsp;</td>
          </tr>
        </table>
		</td>
	</tr>
	<tr align="center" valign="middle">
		<td width="17%" bgcolor="#FFFFFF" height="15"><strong>SUN</strong></td>
		<td width="15%" bgcolor="#FFFFFF"><strong>MON</strong></td>
		<td width="11%" bgcolor="#FFFFFF"><strong>TUE</strong></td>
		<td width="13%" bgcolor="#FFFFFF"><strong>WED</strong></td>
		<td width="12%" bgcolor="#FFFFFF"><strong>THU</strong></td>
		<td width="16%" bgcolor="#FFFFFF"><strong>FRI</strong></td>
		<td width="16%" bgcolor="#FFFFFF"><strong>SAT</strong></td>
	</tr>
	<?php unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['start'] = (int)0;
$this->_sections['foo']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
if ($this->_sections['foo']['start'] < 0)
    $this->_sections['foo']['start'] = max($this->_sections['foo']['step'] > 0 ? 0 : -1, $this->_sections['foo']['loop'] + $this->_sections['foo']['start']);
else
    $this->_sections['foo']['start'] = min($this->_sections['foo']['start'], $this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] : $this->_sections['foo']['loop']-1);
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = min(ceil(($this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] - $this->_sections['foo']['start'] : $this->_sections['foo']['start']+1)/abs($this->_sections['foo']['step'])), $this->_sections['foo']['max']);
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
?>
	<?php $this->assign('fd', $this->_sections['foo']['index']); ?>
	  	<tr align="center" valign="middle">
		<?php unset($this->_sections['bar']);
$this->_sections['bar']['name'] = 'bar';
$this->_sections['bar']['start'] = (int)0;
$this->_sections['bar']['loop'] = is_array($_loop=7) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bar']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['bar']['show'] = true;
$this->_sections['bar']['max'] = $this->_sections['bar']['loop'];
if ($this->_sections['bar']['start'] < 0)
    $this->_sections['bar']['start'] = max($this->_sections['bar']['step'] > 0 ? 0 : -1, $this->_sections['bar']['loop'] + $this->_sections['bar']['start']);
else
    $this->_sections['bar']['start'] = min($this->_sections['bar']['start'], $this->_sections['bar']['step'] > 0 ? $this->_sections['bar']['loop'] : $this->_sections['bar']['loop']-1);
if ($this->_sections['bar']['show']) {
    $this->_sections['bar']['total'] = min(ceil(($this->_sections['bar']['step'] > 0 ? $this->_sections['bar']['loop'] - $this->_sections['bar']['start'] : $this->_sections['bar']['start']+1)/abs($this->_sections['bar']['step'])), $this->_sections['bar']['max']);
    if ($this->_sections['bar']['total'] == 0)
        $this->_sections['bar']['show'] = false;
} else
    $this->_sections['bar']['total'] = 0;
if ($this->_sections['bar']['show']):

            for ($this->_sections['bar']['index'] = $this->_sections['bar']['start'], $this->_sections['bar']['iteration'] = 1;
                 $this->_sections['bar']['iteration'] <= $this->_sections['bar']['total'];
                 $this->_sections['bar']['index'] += $this->_sections['bar']['step'], $this->_sections['bar']['iteration']++):
$this->_sections['bar']['rownum'] = $this->_sections['bar']['iteration'];
$this->_sections['bar']['index_prev'] = $this->_sections['bar']['index'] - $this->_sections['bar']['step'];
$this->_sections['bar']['index_next'] = $this->_sections['bar']['index'] + $this->_sections['bar']['step'];
$this->_sections['bar']['first']      = ($this->_sections['bar']['iteration'] == 1);
$this->_sections['bar']['last']       = ($this->_sections['bar']['iteration'] == $this->_sections['bar']['total']);
?>
		<?php $this->assign('sd', $this->_sections['bar']['index']); ?>
		
		<?php if ($this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']] > 0): ?>
			<?php $this->assign('tempdate', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']])) ? $this->_run_mod_handler('cat', true, $_tmp, "-".($this->_tpl_vars['m'])) : smarty_modifier_cat($_tmp, "-".($this->_tpl_vars['m']))))) ? $this->_run_mod_handler('cat', true, $_tmp, "-".($this->_tpl_vars['y'])) : smarty_modifier_cat($_tmp, "-".($this->_tpl_vars['y'])))); ?>
		<?php else: ?>
			<?php $this->assign('tempdate', '0'); ?>
		<?php endif; ?>
		<?php $this->assign('edate', ((is_array($_tmp=$this->_tpl_vars['tempdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d'))); ?>
		<td height="20" style="font-size:12px;" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'">
		<?php $this->assign('id', '0'); ?>
		
		<?php if (((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) == $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m") : smarty_modifier_date_format($_tmp, "%m")) == $this->_tpl_vars['m'] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")) == $this->_tpl_vars['y']): ?>
			<?php if ($this->_tpl_vars['fill_flag'] > 0): ?>
			<div align="center" class="calender01">
				<strong><?php if ($this->_tpl_vars['d'] >= $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin(<?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]; ?>
,<?php echo $_REQUEST['Shop_ID']; ?>
);"><?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]; ?>
<?php endif; ?></strong>
			</div>
			<?php else: ?>
			<div align="center" style="width:33px; height:25px; text-align:center; padding-top:11px; padding-right:2px;">
				<strong><?php if ($this->_tpl_vars['d'] >= $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin(<?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]; ?>
,<?php echo $_REQUEST['Shop_ID']; ?>
);"><?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]; ?>
<?php endif; ?></strong>
			</div>
			<?php endif; ?>	
		<?php else: ?>
			<?php if ($this->_tpl_vars['fill_flag'] > 0): ?>
				<div align="center" class="calender01">
					<?php if ($this->_tpl_vars['d'] >= $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin(<?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]; ?>
,<?php echo $_REQUEST['Shop_ID']; ?>
);"><?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]; ?>
<?php endif; ?>
				</div>
			<?php else: ?>
				<div align="center"  style="width:33px; height:25px; text-align:center; padding-top:11px; padding-right:2px;">
					<?php if ($this->_tpl_vars['d'] >= $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin(<?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]; ?>
,<?php echo $_REQUEST['Shop_ID']; ?>
);"><?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['fd']][$this->_tpl_vars['sd']]; ?>
<?php endif; ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>
		</td>
		<?php endfor; endif; ?></tr>
	<?php endfor; endif; ?>	
	</table>
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
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/thickbox.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
function ShowRegLogin(id,shopid)
{
	tb_show(\'Daily Data\',\''; ?>
<?php echo $this->_tpl_vars['siteurl']; ?>
<?php echo '/admin/dailyform.php?height=330&width=640&id=\'+id+\'&shopid=\'+shopid);
	return;
}
</script>
'; ?>