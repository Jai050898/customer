
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				{assign var='random' value=1000000|rand:9876543}
				<tr id="hide{$smarty.section.foo.index}">
				  <td align="right" valign="top" style="width:160px;">Number:</td>
				  <td align="left" valign="center"><input type="text" class="input" readonly="readonly" value="{$random}" /></td>
				</tr>
			</table>
		