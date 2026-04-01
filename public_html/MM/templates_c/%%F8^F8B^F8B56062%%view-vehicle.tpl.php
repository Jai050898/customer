<?php /* Smarty version 2.6.26, created on 2013-09-10 04:05:14
         compiled from view-vehicle.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div class="bodyleft">
            <div style="height:10px;"></div>
            <h1>View Vehicle</h1>
            <table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Name :</td>
                      <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['name']; ?>
</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Year :</td>
                      <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['year']; ?>
</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Make :</td>
                      <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['make']; ?>
</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Model :</td>
                      <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['model']; ?>
</td>
                </tr>   
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Vin :</td>
                      <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['vin']; ?>
</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Licence :</td>
                      <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['license']; ?>
</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Odometer :</td>
                      <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['odometer']; ?>
</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Engine Name :</td>
                      <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['engine']; ?>
</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Reg. Date :</td>
                      <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['regdate']; ?>
</td>
                </tr>
            </table>			  
            <div class="clear"></div>
        </div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rightbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="clear"></div>
    </div>
</div>
<!--end body-->	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>