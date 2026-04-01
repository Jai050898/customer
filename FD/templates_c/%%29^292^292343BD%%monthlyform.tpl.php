<?php /* Smarty version 2.6.26, created on 2012-11-22 02:05:36
         compiled from monthlyform.tpl */ ?>
<div class="bodyleftpopup">
			<div style="height:10px;"></div>
			<form name="EditProfile" id="EditProfile" method="post" class="form" onsubmit="javascript: sendajax();return false;">
			<input type="hidden" name="hid_type" id="hid_type" value="">
			<input type="hidden" name="month" id="month" value="<?php echo $_REQUEST['id']; ?>
">
			<div style="height:10px;"></div>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<?php if ($this->_tpl_vars['error'] != ""): ?>
				<tr>
					<td colspan="2" align="center" style="color:#FF0000;"><strong><?php echo $this->_tpl_vars['error']; ?>
</strong></td>
				</tr>
				<?php endif; ?>
				<tr>
				  <td align="right" valign="top" style="width:160px;">Gross Sales:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[grosssales]" id="grosssales" class="input req-string" value="<?php echo $this->_tpl_vars['AccDet']['grosssales']; ?>
" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="width:160px;">Repair Orders:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[repairorders]" id="repairorders" class="input req-string" value="<?php echo $this->_tpl_vars['AccDet']['repairorders']; ?>
" /></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="width:160px;">New Customers:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[newcustomers]" id="newcustomers" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['newcustomers']; ?>
" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="width:160px;">Actual Hours:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[actualhours]" id="actualhours" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['actualhours']; ?>
"></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="width:160px;">Facebook Fans:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[facebookfans]" id="facebookfans" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['facebookfans']; ?>
"></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="width:160px;">Googleplus Users:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[googleplususers]" id="googleplususers" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['googleplususers']; ?>
"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="width:160px;">Vibe:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[vibe]" id="vibe" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" <?php if ($this->_tpl_vars['AccDet']['vibe'] == "+1"): ?> selected="selected"<?php endif; ?>>Positive</option>
				  <option value="0" <?php if ($this->_tpl_vars['AccDet']['vibe'] == '0'): ?> selected="selected"<?php endif; ?>>Average</option>
				  <option value="-1" <?php if ($this->_tpl_vars['AccDet']['vibe'] == "-1"): ?> selected="selected"<?php endif; ?>>Negative</option>
				  </select>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="width:160px;">Activity:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[activity]" id="activity" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" <?php if ($this->_tpl_vars['AccDet']['activity'] == "+1"): ?> selected="selected"<?php endif; ?>>Positive</option>
				  <option value="0" <?php if ($this->_tpl_vars['AccDet']['activity'] == '0'): ?> selected="selected"<?php endif; ?>>Average</option>
				  <option value="-1" <?php if ($this->_tpl_vars['AccDet']['activity'] == "-1"): ?> selected="selected"<?php endif; ?>>Negative</option>
				  </select>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="width:160px;">Days Open:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[daysopen]" id="daysopen" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['daysopen']; ?>
"></td>
				</tr>
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="Regis" type="Submit" value="Submit" /></td>
				</tr>
			</table>
		<div class="clear"></div>
		</form>
		
		</div>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Regis').formValidator(<?php echo '{scope: '; ?>
'#EditProfile',errorDiv:'#errorDiv1'});
</script>
<?php echo '
<script language="javascript" type="text/javascript">
function sendajax()
{
	//$(".bodyleftpopup").html(\'<div style="padding-top:150px; text-align:center; color:#0000FF"><strong>Saving Data...</strong></div>\');
	$(\'#hid_type\').val(\'Edit\');
	$.post(\'monthlyformsubmit.php\',{grosssales: $("#grosssales").val(), repairorders: $("#repairorders").val(), newcustomers: $("#newcustomers").val(), actualhours: $("#actualhours").val(), vibe: $("#vibe").val(), activity: $("#activity").val(), hid_type: $("#hid_type").val(), month: $("#month").val(), daysopen: $("#daysopen").val(), facebookfans: $("#facebookfans").val(), googleplususers: $("#googleplususers").val() }, function(data) {
	  if(data == "success")
	  {
	  		$(".bodyleftpopup").html(\'<div style="padding-top:150px; text-align:center; color:#0000FF"><strong>Data Submitted Successfully...</strong></div>\');
	  }
	  else
	  {
	  	$(".bodyleftpopup").html(\'<div style="padding-top:150px; text-align:center; color:#FF0000"><strong>Data Already Exist With this Date....</strong></div>\');
	  }
	});
	return false;
}
</script>
'; ?>