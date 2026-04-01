<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;

//$Table		= "shops";

//$shopDet		= $usr->GetInfoBy($Table,"shop_id",$_REQUEST['id']);

$Table		= "tbl_users A LEFT JOIN tbl_country B ON A.country = B.Country_Code LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
$AccDet		= $Gen->GetSelWhere($Table,'A.first_name,last_name,A.email,A.user_name,A.phone,A.fax,A.company_name,A.address,A.city,A.zip_code,A.website,B.Country_Name,C.State_Name'," user_id = '".$_REQUEST['id']."'");

$shopDet	= $AccDet	[0];

//echo "<pre>";print_r($shopDet);exit;
?>
<script type="text/javascript" language="javascript">
var myurls = new Array();
</script>
<?php
$url_arr = array();
$Res 	= $usr->GetSelWhere("tbl_keywords",array("key_name"),"status = 'A'");
for($i=0;$i<count($Res);$i++)
{
	if($_REQUEST['type'] == "g")
	{
		$url = "http://www.google.com/#hl=en&q=".str_replace(" ","+",$Res[$i]['key_name'])."+".str_replace(" ","+",$shopDet['city'])."+".str_replace(" ","+",$shopDet['State_Name']);
	}
	if($_REQUEST['type'] == "b")
	{
		$url = "http://www.bing.com/search?q=".str_replace(" ","+",$Res[$i]['key_name'])."+".str_replace(" ","+",$shopDet['city'])."+".str_replace(" ","+",$shopDet['State_Name']);
	}
	if($_REQUEST['type'] == "y")
	{
		$url = "http://search.yahoo.com/search;_ylt=Am0Hhr3k1tUR6maq1mU8Cr6bvZx4?p=".str_replace(" ","+",$Res[$i]['key_name'])."+".str_replace(" ","+",$shopDet['city'])."+".str_replace(" ","+",$shopDet['State_Name']);
	}
	$url_arr[] =  $url; ?>
	<script language="javascript" type="text/javascript">
		myurls.push('<?php echo $url; ?>') ;
	</script>
	<?php
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