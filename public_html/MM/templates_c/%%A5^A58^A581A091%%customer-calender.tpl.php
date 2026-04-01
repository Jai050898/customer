<?php /* Smarty version 2.6.26, created on 2014-02-13 10:30:08
         compiled from customer-calender.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'customer-calender.tpl', 105, false),array('modifier', 'number_format', 'customer-calender.tpl', 106, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
    <style type="text/css">
        .bodybg > .bodyright_calender {
            float: left;
            margin: 50px 15px;
            width: 225px;
        }
    </style>
'; ?>

<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div class="bodyleft">
            <div style="height:10px;"></div>
            <span style="float:right;">&nbsp;</span>
            <h1>Customer Calender</h1>
            <form name="frmshowevents" method="post">
                <input type="hidden" name="act" value="<?php if ($_REQUEST['act'] != ''): ?><?php echo $_REQUEST['act']; ?>
<?php endif; ?>">
                <input type="hidden" name="month" value="<?php echo $this->_tpl_vars['m']; ?>
">
                <input type="hidden" name="year" value="<?php echo $this->_tpl_vars['y']; ?>
">
                <table width="100%" border="1" cellpadding="3" cellspacing="1" align="left" style="background-color: #FFFFFF;border: 3px solid #BEBAAA;font-family: arial;font-size: 14px;margin-bottom: 20px;margin-top: 10px;">
                    <tr align="center" valign="middle" bgcolor="#bebaaa">

                        <td width="85" height="35" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('3',<?php echo $this->_tpl_vars['y']; ?>
,<?php echo $this->_tpl_vars['m']; ?>
)">&nbsp;Year</a></td>

                    <td width="85" height="35" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('1',<?php echo $this->_tpl_vars['y']; ?>
,<?php echo $this->_tpl_vars['m']; ?>
)">&nbsp; Month</a></td>

                    <td width="85" height="35" align="center" colspan="3" class="headings5"><?php echo $this->_tpl_vars['dateMonth']; ?>
</td>

                    <td width="85" height="35" align="center" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('2',<?php echo $this->_tpl_vars['y']; ?>
,<?php echo $this->_tpl_vars['m']; ?>
)">Month&nbsp;</a></td>

                    <td width="85" height="35" align="center" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('4',<?php echo $this->_tpl_vars['y']; ?>
,<?php echo $this->_tpl_vars['m']; ?>
)">Year&nbsp;</a></td>

                </tr>
                    <tr>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Sunday</td>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Monday</td>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Tuesday</td>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Wednesday</td>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Thursday</td>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Friday</td>

                        <td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Saturday</td>

                </tr>
                    <?php $_from = $this->_tpl_vars['array1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['myId'] => $this->_tpl_vars['i']):
?>
                        <tr align="center" valign="middle">
                        <?php $_from = $this->_tpl_vars['array2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['myId2'] => $this->_tpl_vars['j']):
?>
                            <td width="85" height="70" align="center" valign="top" class="c_sundays" bgcolor="#F7F8FB">

                            <?php if ($this->_tpl_vars['cal'][$this->_tpl_vars['i']][$this->_tpl_vars['j']] != ''): ?>
                                <?php $this->assign('Flag', '0'); ?>
                                <?php if ($this->_tpl_vars['cal'][$this->_tpl_vars['i']][$this->_tpl_vars['j']] < 10): ?>
                                    <?php $this->assign('CurDate', ($this->_tpl_vars['cal'])."[".($this->_tpl_vars['i'])."][".($this->_tpl_vars['j'])."]-".($this->_tpl_vars['m'])."-".($this->_tpl_vars['y'])); ?>
                                    <?php $this->assign('sendDate', ($this->_tpl_vars['y'])."-".($this->_tpl_vars['m'])."-".($this->_tpl_vars['cal'])."[".($this->_tpl_vars['i'])."][".($this->_tpl_vars['j'])."]"); ?>
                                <?php else: ?>
                                    <?php $this->assign('CurDate', ($this->_tpl_vars['cal'])."[".($this->_tpl_vars['i'])."][".($this->_tpl_vars['j'])."]-".($this->_tpl_vars['m'])."-".($this->_tpl_vars['y'])); ?>
                                    <?php $this->assign('sendDate', ($this->_tpl_vars['y'])."-".($this->_tpl_vars['m'])."-".($this->_tpl_vars['cal'])."[".($this->_tpl_vars['i'])."][".($this->_tpl_vars['j'])."]"); ?>
                                <?php endif; ?>
                                <div style="bottom:5px;"><span style="float:left;width:20px;"><?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['i']][$this->_tpl_vars['j']]; ?>
</span></div><br />
                                <div><small><font color="#0066FF"><strong>
                                    <?php $_from = $this->_tpl_vars['custCnts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['e']):
?>
                                        <?php if ($this->_tpl_vars['cal'][$this->_tpl_vars['i']][$this->_tpl_vars['j']] == $this->_tpl_vars['k']+1): ?>
                                        	 <a href="http://www.autorepairmarketing.com/customer/existing-customers.php?fdate=<?php echo $this->_tpl_vars['m']; ?>
-<?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['i']][$this->_tpl_vars['j']]; ?>
-<?php echo $this->_tpl_vars['y']; ?>
&tdate=<?php echo $this->_tpl_vars['m']; ?>
-<?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['i']][$this->_tpl_vars['j']]; ?>
-<?php echo $this->_tpl_vars['y']; ?>
">
                                            <?php echo $this->_tpl_vars['e']; ?>
</a>
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?> |
                                    <?php $_from = $this->_tpl_vars['newcustCnts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['nc']):
?>
                                        <?php if ($this->_tpl_vars['cal'][$this->_tpl_vars['i']][$this->_tpl_vars['j']] == $this->_tpl_vars['k']+1): ?>
                                            <a href="http://www.autorepairmarketing.com/customer/new-customers.php?fdate=<?php echo $this->_tpl_vars['m']; ?>
-<?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['i']][$this->_tpl_vars['j']]; ?>
-<?php echo $this->_tpl_vars['y']; ?>
&tdate=<?php echo $this->_tpl_vars['m']; ?>
-<?php echo $this->_tpl_vars['cal'][$this->_tpl_vars['i']][$this->_tpl_vars['j']]; ?>
-<?php echo $this->_tpl_vars['y']; ?>
"><?php echo $this->_tpl_vars['nc']; ?>
</a>
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                  </strong></font></small><br /></div>
                            <?php else: ?> &nbsp;
                            <?php endif; ?>
                            </td>
                        <?php endforeach; endif; unset($_from); ?>
                </tr>
                    <?php endforeach; endif; unset($_from); ?>
                </table>
                <div class="clear"></div>
            </form>
            <div class="clear"></div>
        </div>
        <div class="bodyright_calender">
            <div style="height:10px;"></div>
            <span style="float:left;margin-left:40px"></span>
            <h2>Advisor Data </h2>            
            <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                <input type="hidden" name="sortby" value="">
                <input type="hidden" name="sortoption" value="">
                <table cellspacing="1" cellpadding="5" border="0" bgcolor="#6699cc" width="100%">
                    <tr>
                    <th bgcolor="#336699" style="color:#fff;">Advisor</th>
                    <th bgcolor="#336699" style="color:#fff;">RO Count</th>
                    </tr>
            <?php $_from = $this->_tpl_vars['advArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['nc']):
?>    
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ((is_array($_tmp=$this->_tpl_vars['nc']['enteredby'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ((is_array($_tmp=$this->_tpl_vars['nc']['advCnt'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                </tr>
             <?php endforeach; else: ?>
                <tr>
                    <th bgcolor="#f9f9f7" style="color:#000000;" colspan="2"><font color="#FF0000"><strong>No Advisors Found</strong></font></th>
                </tr>
            <?php endif; unset($_from); ?>
               </table>
            </form>
        </div>

        <div class="clear"></div>
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
/admin/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
function calchange(ac,y,m)
{
	frm = document.frmshowevents;
	frm.act.value = ac;
	frm.year.value = y;
	frm.month.value = m;
	frm.submit();
}
</script>
'; ?>
