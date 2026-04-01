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

		<?php
		require_once('./UserAPIs.php');
		$host = 'https://test2-api.yousendit.com';
                $apikey = 'u6ja9yywedec85xzcvhf8hh9';  // yousendit@motorheadmarketing.com

		if (isset($_POST['submitted'])) {
			if (isset($_POST ['email'])&&($_POST ['email']!=='')) {
				$e = $_POST['email'];
			} else {
				$e = FALSE;
				echo '<p><font color="red" size="+1">Please fill the Email field!</font></p>';
			}
			if (isset($_POST ['pass'])&&($_POST ['pass']!=='')) {
				$p = $_POST['pass'];
			} else {
				$p = FALSE;
				echo '<p><font color="red" size="+1">Please fill the Password field!</font></p>';
			}
			if (isset($_POST ['autt'])&&($_POST ['autt']!=='')) {
				$a = $_POST['autt'];
			} else {
				$a = FALSE;
				echo '<p><font color="red" size="+1">Please fill the X-Auth-Token field!</font></p>';
			}
			if ($e && $p && $a) {
				$u = new UserAPIs($host, $apikey);
				$u->setAuthToken($_POST['autt']);
				$ob = $u->createUser($_POST['email'], $_POST['pass'], $_POST['fname'], $_POST['lname']);
				$r = $u->getResponse();
				echo "<b><u><h4>The response xml is:</h4></u></b>";
				echo htmlentities($r)."</br></br></br></br>";
				$aux = $ob->getErrorStatus();
				echo "<b><u><h4>The object is:</h4></u></b>";
				if (!empty($aux)){
					echo " Error code: ".$aux->getCode(). "</br>";
					echo " Error message: ".$aux->getMessage()."</br></br></br></br>";
				}else{
					$aux = $ob->getStatus();
					if (strlen($aux)!=0){
						echo " The Status is: ".$aux."</br></br></br></br>";
					}else{
						echo " The Status is: N/A</br></br></br></br>";
					}
				}
				echo '<a href="./testcu.php" style="margin-left:750px;"><b>Go Back</b></a>';
				echo '</div><br /><br /><div id="footer" style="text-align:center;"><p><hr align="center"/>&copy; Copyright 2012</p></div></body></html>';
				exit();
			}else{
				echo '<p><font color="red" size="+1">Please try again.</font></p>';
			}
		}
		?>

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
						maxlength="40"
						value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>" />
				</p>
				<p>
					<b>Last Name:&nbsp;</b><input type="text" name="lname" size="40"
						maxlength="40"
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
