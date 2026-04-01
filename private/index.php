<?php
$iparray = array("182.72.88.157","173.11.0.6","66.90.65.252");
if(!in_array($_SERVER['REMOTE_ADDR'],$iparray))
{
	header("Location: http://www.autorepairmarketing.com/");
	exit;
}
require_once("../includes/application_start.php");
$smarty->assign('PageName','Home');
$error = "";
if(isset($_FILES['csvupload']) && $_FILES['csvupload']['name'] != "")
{
	$info = pathinfo($_FILES['csvupload']['name']);
	if($info['extension'] != 'csv'){
	 	$error = "Please Upload only CSV File.";
	}
	$sz = $_FILES["csvupload"]["size"] / 1024;
	if($sz/1024 > 2)
		$error = "Upload CSV Files size should be less then 2MB.";
		
	if($error == "")
	{
		$row = 1;
		$Res = array();
		if (($handle = fopen($_FILES["csvupload"]["tmp_name"] , "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$num = count($data);
				$row++;
				for ($c=0; $c < $num; $c++) {
					$Res[] = $data[$c];
				}
			}
			fclose($handle);
		}
		?>
		<script type="text/javascript" language="javascript">
			var myurls = new Array();
		</script>
	  <?php
		$url_arr = array();
		for($i=0;$i<count($Res);$i++)
		{
			
			$url = $Res[$i];			
			$url_arr[] =  $url; 
			?>
			<script language="javascript" type="text/javascript">
				myurls.push('<?php echo $url; ?>') ;
			</script>
		<?php
		}
		
	}
}
$smarty->assign('error',$error);
$smarty->display('index.tpl');

if(isset($_FILES['csvupload']) && $_FILES['csvupload']['name'] != "")
{
?>
<script language="javascript" type="text/javascript">
function openNewWin(i){
	if(typeof i == 'undefined' || i == null) var i = 0;
	if( i >= myurls.length) 
	{
		//window.close();
		return;
	}
	window.open(myurls[i], '_blank');
	i++;
	setTimeout("openNewWin("+i+")",4000);
}
openNewWin(0);
</script>
<?php } ?>