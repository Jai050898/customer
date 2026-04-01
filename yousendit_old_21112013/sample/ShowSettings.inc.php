
<!--  /**********************************************************************************************
 * Copyright 2012 YouSendIt, Inc. All Rights Reserved.
*
* Licensed under the YouSendIt API agreement. You may not use this file except in compliance
* with the License.
*
* This is a sample file distributed on an "AS IS" basis, WITHOUT WARRANTIES OR CONDITIONS OF
* ANY KIND, either expressed or implied. See the API License for the specific language
* governing permissions and limitations.
*********************************************************************************************/-->

<br />
<h1>YouSendIt Sample App for PHP</h1>
<br />
<br />
<form action="SampleApp.php" method="post" id="logform">
	<fieldset>
		<table>
			<tr>
				<td><b>Email: </b></td>
				<td><input type="text" name="email" size="50" maxlength="70"
					value="<?php
	if (isset($_POST['email'])) echo $_POST['email']; ?>" /></td>
			</tr>
			<tr>
				<td><b>Password:</b></td>
				<td><input type="password" name="password" size="50" maxlength="70"
					value="<?php
	if (isset($_POST['password'])) echo $_POST['password']; ?>" /></td>
			</tr>
			<tr>
				<td><b>ApiKey: </b></td>
				<td><input type="text" name="apikey" size="50" maxlength="70"
					value="<?php
	if (isset($_POST['apikey'])) echo $_POST['apikey']; ?>" /></td>
			</tr>
			<tr>
				<td><b>End Point: </b></td>
				<td><select name="endpoint">
						<option value="https://test2-api.yousendit.com">https://test2-api.yousendit.com</option>
						<option value="https://dpi.yousendit.com">https://dpi.yousendit.com</option>
				</select></td>
			</tr>
			<tr>
				<td colspan="2"><input type="hidden" name="useragent" value="we" />
					<input type="submit" id="but1" name="submit" value="Login" /></td>
			</tr>
		</table>

		<input type="hidden" name="submitted" value="TRUE" />
	</fieldset>
</form>
