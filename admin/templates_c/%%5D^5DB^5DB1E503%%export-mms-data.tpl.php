<?php /* Smarty version 2.6.26, created on 2013-12-02 02:32:39
         compiled from export-mms-data.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'export-mms-data.tpl', 43, false),array('modifier', 'nl2br', 'export-mms-data.tpl', 44, false),array('modifier', 'date_format', 'export-mms-data.tpl', 61, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>MMS Customer Report</title>
<?php echo '
<script language="javascript" type="text/javascript">
	var site_path = "'; ?>
<?php echo $this->_tpl_vars['siteurl']; ?>
<?php echo '";
	var img_path = "'; ?>
<?php echo $this->_tpl_vars['siteurl']; ?>
<?php echo '/images";
</script>
'; ?>

<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div style="margin-left:25px; margin-right:25px; font-size:12px;">
<table width="100%" cellspacing="0" cellpadding="0">
        <tr>
          <td height="10"></td>
        </tr>
        <tr>
          <td align="left" valign="top" >
            <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
                  <tr>
                      <td colspan="10" align="center" style="text-align:center;"><h2>MMS Customer Report</h2></td>
                      <td><strong><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/export-user-report.php" style="font-size:17px;">Export</a></strong></td>
                  </tr>
                  <tr>
                      <th>Ext.ID</th>
                      <th>Company Name</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Zip</th>
                      <th>Shop Mgmt System</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>OS</th>
                  </tr>
                  <?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                  <tr class="color_trbg">
                      <td width="5%"><?php echo $this->_tpl_vars['item']['xml_id']; ?>
</td>
                        <td width="20%"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
                        <td width="15%"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['address'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
                        <td width="15%"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['city'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
                        <td width="5%"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['State_Code'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
                        <td width="5%"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['zip_code'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
                        <td width="10%"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['sgarage_mgmt_software_version'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
                        <td width="10%"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['phone'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
                        <td width="20%"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['email'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
                        <td width="20%"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['first_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['last_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
                        <td width="15%"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['server_operating_system'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
                  </tr>
                  <?php endforeach; else: ?>
                        <tr>
                          <th width="100%" align="center" colspan="11"><font color="#FF0000"><strong>No Users Added</strong></font></th>
                        </tr>
                <?php endif; unset($_from); ?>
                <tr>
                          <th width="100%" align="left" colspan="3"><small>&copy; Motorhead Marketing</small></th>
                          <th width="100%" align="right" colspan="3"><small><?php echo ((is_array($_tmp=$this->_tpl_vars['dateprint'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y %H %M %S") : smarty_modifier_date_format($_tmp, "%m-%d-%Y %H %M %S")); ?>
</small></th>
                </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
        <td height="50" align="center" valign="top">&nbsp;</td>
        </tr>
</table>
</div>
</body>
</html>
<?php echo '
<script language="javascript" type="text/javascript">
//window.print();
</script>
'; ?>