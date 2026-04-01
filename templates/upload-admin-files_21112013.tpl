{include file=header.tpl}
<script src="http://mm.autorepairmarketing.com/customer/yousendit/sample/jquery.min.js"></script>
<script src="http://mm.autorepairmarketing.com/customer/yousendit/sample/jquery.form.js"></script>
<script src="http://mm.autorepairmarketing.com/customer/yousendit/sample/actions.js"></script>
<script src="http://mm.autorepairmarketing.com/customer/yousendit/sample/sendRequest.js"></script>
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Upload Files For Admin</h1>
			<div id="addfile">
		<form enctype="multipart/form-data" id="uploadf" action="http://mm.autorepairmarketing.com/customer/yousendit/sample/StoreMethods.php" method="post">
		<input type="hidden" name="token" id="token" value="{$smarty.session.sToken}">
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
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}