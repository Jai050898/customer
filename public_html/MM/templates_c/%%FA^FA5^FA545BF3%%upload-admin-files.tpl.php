<?php /* Smarty version 2.6.26, created on 2013-11-22 09:02:53
         compiled from upload-admin-files.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="http://www.autorepairmarketing.com/customer/yousendit/sample/jquery.min.js"></script>
<script src="http://www.autorepairmarketing.com/customer/yousendit/sample/jquery.form.js"></script>
<script src="http://www.autorepairmarketing.com/customer/yousendit/sample/actions.js"></script>
<script src="http://www.autorepairmarketing.com/customer/yousendit/sample/sendRequest.js"></script>
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Upload Files For Admin</h1>
			<div id="addfile">
		<form enctype="multipart/form-data" id="uploadf" action="http://www.autorepairmarketing.com/customer/yousendit/sample/StoreMethods.php" method="post">
		<input type="hidden" name="token" id="token" value="<?php echo $_SESSION['sToken']; ?>
">
		<input type="hidden" name="parent" id="parent" value="" />
		
			<table>
				<tr>
					<td><input type="hidden" id="method" name="method"	value="initupload" /></td>
				</tr>
			</table>
		</form>
		</br>
		<table>	
			<tr>
				<b>Browse the File*: </b><td colspan="2"><form id="form1" class="autoform" enctype='multipart/form-data' action='' method='post'>
				<input type="file" class="autoform" name="fname" id="fname" size="50"/> <input type="hidden" id="bid1" name="bid" value=""/>			
				</form>
			    </td>
			</tr>
			<tr><td colspan="2"><input type="hidden" value="0" id="someValue" /><input type="hidden" value="1" id="val" />
			<div id="prog1" class="black">
			<input type="submit" value="Submit" class="button1" onClick="uploadForm('1')" />
			</div>&nbsp;<div id="spinner"></div>
			</td></tr>
			<tr><td colspan="2" align="center"><a href="https://www.yousendit.com/" target="_blank"><img src="images/yousendit.jpeg" /></a></td>
			</tr>
			<tr> <td colspan="2"><textarea id="texxt" rows="30" cols="70" readonly="readonly" style="display:none;"></textarea></td></tr>
		</table>
	</div>
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