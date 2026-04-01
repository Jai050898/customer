<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;

//$Table		= "shops";

//$shopDet		= $usr->GetInfoBy($Table,"shop_id",$_REQUEST['user_id']);

$Table		= "tbl_shops_cites";
$shopDet		= $Gen->GetSelWhere($Table,'city_name', "sid = '".$_REQUEST['user_id']."'");

//echo "<pre>";print_r($shopDet);exit;
if(count($shopDet) > 0)
{
?>
<script type="text/javascript" language="javascript">
var myurls = new Array();
</script>
<?php
for($j=0;$j<count($shopDet);$j++)
{
	$url_arr = array();
	$Res 	= $usr->GetSelWhere("tbl_keywords",array("key_name"),"status = 'A'");	
	for($i=0;$i<count($Res);$i++)
	{
			$url = "http://www.google.com/#hl=en&q=".str_replace(" ","+",$Res[$i]['key_name'])."+".str_replace(" ","+",$shopDet[$j]['city_name']);
			$url1 = "http://www.bing.com/search?q=".str_replace(" ","+",$Res[$i]['key_name'])."+".str_replace(" ","+",$shopDet[$j]['city_name']);
			$url2 = "http://search.yahoo.com/search;_ylt=Am0Hhr3k1tUR6maq1mU8Cr6bvZx4?p=".str_replace(" ","+",$Res[$i]['key_name'])."+".str_replace(" ","+",$shopDet[$j]['city_name']);
		$url_arr[] =  $url;
		$url_arr[] =  $url1;
		$url_arr[] =  $url2;
		 ?>
		<script language="javascript" type="text/javascript">
			myurls.push('<?php echo $url; ?>') ;
			myurls.push('<?php echo $url1; ?>') ;
			myurls.push('<?php echo $url2; ?>') ;
		</script>
		<?php
	}
}
}
else
{
	echo "No cities Found!!";
	exit;
}
?>
<script language="javascript" type="text/javascript">
function openNewWin(i){
	if(typeof i == 'undefined' || i == null) var i = 0;
	if( i >= myurls.length) 
	{
		window.close();
		return;
	}
	window.open(myurls[i], '_blank');
	i++;
	setTimeout("openNewWin("+i+")",4000);
}
openNewWin(0);
</script>