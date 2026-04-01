<?php /* Smarty version 2.6.26, created on 2013-05-14 01:27:09
         compiled from export-brands.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'export-brands.tpl', 51, false),)), $this); ?>
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
      <li>Export Brands</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Export Brands</div>
      </div>
	  <div class="ad_textsp">
	  	<form name="myform" id="myform" method="post">
			<table width="100%" cellspacing="0" cellpadding="0">
			<tr>
			  <td height="10" colspan="2"></td>
			</tr>
			 <tr>
			  <td><h2>Export Brands</h2></td>
			  <td align="right">&nbsp;</td>
			</tr>
			<tr>
			  <td align="left" valign="top" colspan="2"><table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
				<tr>
				<td>
				<table width="100%" cellspacing="0" cellpadding="0" class="admin_table">
				<tr>
				<?php $_from = $this->_tpl_vars['Key']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				  <td align="left"><input type="checkbox" name="brands[]" id="brands" value="<?php echo $this->_tpl_vars['item']['brand_name']; ?>
" />&nbsp;<?php echo $this->_tpl_vars['item']['brand_name']; ?>
</a></td>
				  <?php if ($this->_foreach['item']['iteration']%3 == 0): ?>
				  </tr><tr>
				<?php endif; ?>	
				<?php endforeach; else: ?>
				<tr>
				  <th width="100%" align="center" ><font color="#FF0000"><strong>No Brands Added</strong></font></th>
				</tr>
				<?php endif; unset($_from); ?>
				</tr>
				</td>
				</table>
				</tr>
				<?php if (count($this->_tpl_vars['Key']) > 0): ?>
				<tr>
				  <th width="100%" align="center"><input type="button" name="Export" value="Export" onclick="CheckIt();" /></th>
				</tr>
				<?php endif; ?>
			  </table></td>
			</tr>
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
<?php echo '
<script language="jscript" type="text/javascript">
function CheckIt()
{
	if(!validateForm())
	{
        alert("Please Select atleast one Brand to Export");
        return false;
    }
	document.myform.submit();
    return true;
}
function validateForm()
{
    var c=document.getElementsByTagName(\'input\');
    for (var i = 0; i<c.length; i++){
        if (c[i].type==\'checkbox\')
        {
            if (c[i].checked){return true}
        }
    }
    return false;
}
</script>
'; ?>