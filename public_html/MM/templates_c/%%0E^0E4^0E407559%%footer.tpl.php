<?php /* Smarty version 2.6.26, created on 2013-06-24 09:05:26
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date', 'footer.tpl', 7, false),)), $this); ?>
</div>
<!--footer-->
<div id="footer">
<div id="footer_wrap">
<div id="footer_inner" style=" height:20px;">

<span style="float:right; padding-right:5px; color:#FFFFFF;">&copy; <?php echo ((is_array($_tmp='Y')) ? $this->_run_mod_handler('date', true, $_tmp) : date($_tmp)); ?>
 Motorhead Marketing.</span>
<br />

</div>
</div>
<!--Footer Links-->
</div>
<!--end footer-->
</body>
</html>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/thickbox.js"></script>
<?php echo '
<script type="text/javascript">
	function ShowMB()
	{
		tb_show(\'Market Budget\',\'show-all-budgets.php?height=500&width=1040\');
		return;
	}
	function ShowMG()
	{
		tb_show(\'Market Monitoring\',\'show-all-monitoring.php?height=500&width=1040\');
		return;
	}
</script>
'; ?>