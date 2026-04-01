<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Generate Image</title>
</head>

<body>
<form name="myform" method="post" action="usage.php" onsubmit="javascript: return checkit();">
<fieldset>
  <legend>Website Info</legend>
    <label for="name">URL:</label>
    <input type="text" name="url" id="url" style="width:500px;" />&nbsp;&nbsp;<input type="submit" name="Get Image" value="Get Image" />
	<br /><span style="margin-left:50px;"><small>(Ex: http://www.google.com)</small></span>
  </fieldset>
</form>
</body>
</html>
<script language="javascript" type="text/javascript">
function checkit()
{
	if(document.getElementById("url").value == "")
	{
		alert("Please Enter Website...");
		return false;
	}
	return true;
}
</script>
