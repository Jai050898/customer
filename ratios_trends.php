<?php
     require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $usr    = new General;
    $page = 'customers';
    $smarty->assign('Page',$page);
    
    //echo "<pre>";print_r($_SERVER);exit;
    
    $smarty->assign('breadcrumb','Manage Customer Calender');

    $scriptname = $_SERVER['SCRIPT_NAME'];
    
    //get 12 months list
    $months= array();
	for($m = 1;$m <= 12; $m++)
	{ 
		$month =  date("F", mktime(0, 0, 0, $m, 1)); 
		$months[$m]= $month; 
	} 

    //get years upto 2010
	    $years = array();
	    $current_year = date('Y');
	    $limit_year = 2010;
	    $ltyears = $current_year-$limit_year;
	    for($i=$ltyears;$i>0;$i--)
	    {
		    $year_val =$current_year-$i;
		    $years[$year_val]=$year_val;
	    }
 
 //get the dates and process 
 if(isset($_REQUEST['edate']) && $_REQUEST['edate'] != "") {
  $edate =  $edate = $Gen->Date_Format($_REQUEST['edate']);
  $edate .=' 23:59:59';
	if($_REQUEST['searchtype']=='year'){
		$s_year = $_REQUEST['input_year'];
		$sdate = $s_year.'-01-01 00:00:00';
	}else if($_REQUEST['searchtype']=='month'){
		$s_month = $_REQUEST['input_month'];
		$currnt_year  =date('Y');
		$sdate = $currnt_year.'-'.$s_month.'-01 00:00:00';
	}else if($_REQUEST['searchtype']=='yesterday'){
		$s_yesterday_date = strtotime(date('Y-m-d'));
		$s_yestrdy_str = strtotime('-1 day',$s_yesterday_date);
	 	$s_yestrdy = date('Y-m-d',$s_yestrdy_str);
		$sdate=	$s_yestrdy.' 00:00:00';
	}
$totalratioAry = array();	
	//get total ro's,total discounts
	$total_rotemp=array();
	$Where		= " 1=1 AND company_id=".$_SESSION['User']['xml_id']." AND transaction_date BETWEEN '".$sdate."' AND '".$edate."'";
	$fields         = "count(ro_id) as tot_ros,sum(discountamount) as tot_discount1,sum(manager_Charges) as tot_discount2"; 
	$total_rotemp = $usr->GetSelWhere("XML_ro",$fields,$Where);
		foreach($total_rotemp as $ro_values){
			$total_ros = $ro_values['tot_ros'];
			$discount_temp1 = $ro_values['discount1'];
			$discount_temp2 = $ro_values['discount2'];
			$total_discount = $discount_temp1+$discount_temp2;
		}

	//get sources and referal count 
	$service_advs=array();
	$Where1		= " 1=1 AND company_id=".$_SESSION['User']['xml_id']." AND source !='' AND transaction_date BETWEEN '".$sdate."' AND '".$edate."' group by enteredby";
	$fields1         = "enteredby as tot_service_adv"; 
	$service_advs = $usr->GetSelWhere("XML_ro",$fields1,$Where1);
	$total_service_advs =count($service_advs);

	//get total hours,gross laborsales,gros_partssale,gross sales
	$ratioAry = array();	
	$Where2		= " 1=1 AND A.company_id=".$_SESSION['User']['xml_id']." AND B.company_id=".$_SESSION['User']['xml_id']." AND A.transaction_date BETWEEN '".$sdate."' AND '".$edate."'";
	$fields2         = "sum(B.laborhours) as tot_hrs,sum(B.laborrate) as gross_labor_sale,sum(B.unitsale) as gross_partsale,sum(B.extendedsale) as grosssales"; 
	$ratioAry = $usr->GetSelWhere("XML_ro as A JOIN XML_ro_details as B on A.ro_id= B.ro_id",$fields2,$Where2);
		foreach($ratioAry as $ro_details){
			$total_hours = $ro_details['tot_hrs'];
 			$gross_laborsales = $ro_details['gross_labor_sale'];
	 		$gross_parts_sales = $ro_details['gross_partsale'];
	 		$gross_sales = $ro_details['grosssales'];
		}


	//get total hours,gross laborsales,gros_partssale,gross sales,total _techinicians
	$techiniciansAry = array();	
	$Where4		= " 1=1 AND A.company_id=".$_SESSION['User']['xml_id']." AND B.company_id=".$_SESSION['User']['xml_id']." AND A.transaction_date BETWEEN '".$sdate."' AND '".$edate."' group by B.technician";
	$fields4         = "B.technician as tot_technicians"; 
	$techiniciansAry = $usr->GetSelWhere("XML_ro as A JOIN XML_ro_details as B on A.ro_id= B.ro_id",$fields4,$Where4);
	$technicians_count= count($techiniciansAry);
	
$parts_to_laborratio = $gross_parts_sales/$gross_laborsales;
$avg_soldhours_per_ro= $total_hours/$total_ros;
$avg_laborsales_per_ro = $gross_laborsales/$total_ros;
$avg_partssales_per_ro = $gross_parts_sales/$total_ros;


$soldlaborhours_per_advisor = $total_hours/$total_service_advs;
$avg_disc_Adjust_Ref_per_Serv_adv= $total_discount/$total_service_advs;
$avg_ro_written_per_serv_adv_per_Day = $total_ros/$total_service_advs;
$labor_sales_per_tech = $gross_laborsales/$technicians_count;
$parts_sales_per_tech = $gross_parts_sales/$technicians_count;

$total_hours=$total_hours;
$gross_laborsales=$gross_laborsales;
$gross_parts_sales=$gross_parts_sales;
$gross_sales=$gross_sales;


$total_ros=$total_ros;
$total_discount=$total_discount;
$total_service_advs=$total_service_advs;
$technicians_count=$technicians_count;

 /*
To be calculated */
$total_ro_written_per_service_advisor ='undefined';
$avg_ro_count = 'undefined';
$total_soldHours_Per_Tech_Per_Day='undefined';

$smarty->assign('parts_to_laborratio',$parts_to_laborratio);
$smarty->assign('avg_soldhours_per_ro',$avg_soldhours_per_ro);
$smarty->assign('avg_laborsales_per_ro',$avg_laborsales_per_ro);
$smarty->assign('avg_partssales_per_ro',$avg_partssales_per_ro);
$smarty->assign('soldlaborhours_per_advisor',$soldlaborhours_per_advisor);
$smarty->assign('avg_disc_Adjust_Ref_per_Serv_adv',$avg_disc_Adjust_Ref_per_Serv_adv);
$smarty->assign('avg_ro_written_per_serv_adv_per_Day',$avg_ro_written_per_serv_adv_per_Day);
$smarty->assign('labor_sales_per_tech',$labor_sales_per_tech);
$smarty->assign('parts_sales_per_tech',$parts_sales_per_tech);
$smarty->assign('total_hours',$total_hours);
$smarty->assign('gross_laborsales',$gross_laborsales);
$smarty->assign('gross_parts_sales',$gross_parts_sales);
$smarty->assign('total_discount',$total_discount);
$smarty->assign('gross_sales',$gross_sales);
$smarty->assign('total_ros',$total_ros);
$smarty->assign('total_service_advs',$total_service_advs);
$smarty->assign('technicians_count',$technicians_count);
$smarty->assign('total_ro_written_per_service_advisor',$total_ro_written_per_service_advisor);
$smarty->assign('avg_ro_count',$avg_ro_count);
$smarty->assign('total_soldHours_Per_Tech_Per_Day',$total_soldHours_Per_Tech_Per_Day);
	
 }


$smarty->assign('yearOptions',$years);
$smarty->assign('mySelect',$current_year);
$smarty->assign('monthOptions',$months); 
$smarty->display('ratio_trends.tpl');
    
     function GetSelWhere($tbl_name,$selFields,$where)
	{
            if($_SERVER['REMOTE_ADDR'] == '182.72.66.214' || $_SERVER['REMOTE_ADDR'] == '182.72.88.157'){
                    //echo "<pre>";print_r($_REQUEST);
                   // echo '<br>'.$tbl_name.'<br>'.$selFields.'<br>'.$where.'<br>';exit;
                }
            
		//insert ',' between the field names
		if(is_array($selFields))
			$fields = @implode(',',$selFields);
		else
			$fields = $selFields;
		$qry = "SELECT ".$fields." FROM ".$tbl_name;
		if(isset($where) && $where != '')
			$qry .= " WHERE ".$where;
                if($_SERVER['REMOTE_ADDR'] == '182.72.66.214' || $_SERVER['REMOTE_ADDR'] == '182.72.88.157'){
                  //  echo "<pre>";print_r($_REQUEST);
                    //echo '<br>'.$qry.'<br>';//exit;
                }
		echo '<br>'.$qry;
		exit;
		
	}  
	
/*NOTES : variable and description for ratio's
	Gross Labor Sales = $gross_laborsales
Gross Parts Sales =$gross_parts_sales
Gross Discounts (plus manage_Charges) =$total_discount
Gross Sales =$gross_sales =sum(extended sales)

Total Repair Orders =$total_ros
Total Hours Sold =$total_hours
Total Service Advisors (who wrote ro's this period) =$total_service_advs
Total Technicians (who were asssigned work this period) =$technicians_count

Parts to Labor Ratio -$parts_to_laborratio=> (HERE IS HOW IT IS CALCULATED: Parts Sales divided by Labor Sales)
Avg. Sold Hours Per RO -$avg_soldhours_per_ro=> (Total Hours Sold divided by Total Repair Orders)
Avg. Labor Sales per RO -$avg_laborsales_per_ro=> (Labor Sales divided by Total Repair Orders)
Avg. Parts Sales per RO -$avg_partssales_per_ro=> (Parts Sales divided by Total Repair Orders)
Avg. RO Count (over period selected) -$avg_ro_count=> (Use number of days ro's were written in)

Sold Labor Hours Per Advisor -$soldlaborhours_per_advisor=> (Sold Labor Hours divided by active writing advisors)
Total RO's Written per Service Advisor -$total_ro_written_per_service_advisor=> (Total RO's written divided by writing service advisors)
Avg. $ Disc/Adjust/Ref per Service Advisor -$avg_disc_Adjust_Ref_per_Serv_adv=> (Gross Discounts divided by writing service advisors)
Avg. RO's Written Per Service Advisor per Day -$avg_ro_written_per_serv_adv_per_Day=> (Total Repair Orders divided by writing service advisors)

Labor Sales Per Tech - $labor_sales_per_tech=>(Labor Sales divided by Total Techs)
Parts Sales Per Tech - $parts_sales_per_tech=>(Parts Sales divided by Total Techs)
Total Sold Hours Per Tech Per Day -$total_soldHours_Per_Tech_Per_Day=> ((Total Hours Sold Divided by Total Techs) Divided by Days activity (activity = ro written)) 
	
	*/
?>
