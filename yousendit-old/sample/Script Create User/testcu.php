<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Create User</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="width: 1024px; margin: auto;">
	<hr align="center" />
	<br />
	<h1 id="mainhead">Create User</h1>
	<br />
	<div id="content" style="width: 900px; margin: auto;">
		<form action="./testcu-c.php" method="post">
			<fieldset>
				<p>
					<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email*:&nbsp;</b><input
						type="text" name="email" size="40" maxlength="40"
						value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" />
				</p>
				<p>
					<b>&nbsp;Password*:&nbsp;</b><input type="text" name="pass"
						size="40" maxlength="40"
						value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" />
				</p>
				<p>
					<b>First Name:&nbsp;</b><input type="text" name="fname" size="40"
						maxlength="20"
						value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>" />
				</p>
				<p>
					<b>Last Name:&nbsp;</b><input type="text" name="lname" size="40"
						maxlength="20"
						value="<?php if (isset($_POST['lname'])) echo $_POST['lname']; ?>" />
				</p>
				<p>
					<b>X-Auth-Token*:&nbsp;</b><input type="text" name="autt"
						size="100" maxlength="300"
						value="<?php if (isset($_POST['autt'])) echo $_POST['autt']; ?>" />
				</p>
			</fieldset>
			<br />
			<div align="left" style="margin-left: 80px">
				<input type="submit" name="submit" value="Create User" />
			</div>
			<input type="hidden" name="submitted" value="TRUE" />
		</form>
	</div>
	<br />
	<br />
	<div id="footer" style="text-align: center;">
		<p>
		
		
		<hr align="center" />
		&copy; Copyright 2012
		</p>
	</div>
</body>
</html>
