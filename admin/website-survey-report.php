<?php
#################################################
#Required include files
require_once("../includes/application_start.php");
require_once("../includes/login_check.php");
$usr 		= new General;

require_once(SITEPATH."/class/MsDocGenerator.class.php");
error_reporting(0);

$userId=(int)$_GET['user_id'];

$result = $usr->GetAllWhere("tbl_users","user_id = '".$userId."'");
if($result)
{
	$objCust = $result[0];
}
else
{
	die('Failed');
}
$doc = new clsMsDocGenerator();

#**********************************************************************#	
#Header Part
	$doc->setFontFamily('Verdana');
	$doc->setFontSize('10');
	$doc->addParagraph('Web Survey Report<br>', array('text-align' => 'left', 'font-weight' => 'bold', 'background-color' => '#D4D0C8', 'height' =>'30'));
	$doc->addParagraph('***********************************************************************************************************');
	$doc->startTable(NULL,'tableWithoutGrid');
		$cols = array();
		$cols[]='Company Name::';
		$cols[]=stripslashes($objCust['company_name']);
		$cols[]='Email Address::';
		$cols[]=$objCust['email'];
	$doc->addTableRow($cols, NULL, NULL, array('font-size' => '12', 'height'=>'30', 'bgcolor'=>'#FF0000'));
	unset($cols);
		$cols = array();
		$cols[]='Survey Completed On::';
		$cols[]='';
	$doc->addTableRow($cols, NULL, NULL, array('font-size' => '12', 'height'=>'30'));	
	$doc->endTable();	
#**********************************************************************#	

/********************************************************************************************************
							This section belongs to the Step 1
*********************************************************************************************************/		
		
		#Fetch Data
		/***************************************************************************************/
				$companyDetailarr = $usr->GetAllWhere("web_tbl_basic_information","UserId = '".$userId."'");
				$companyDetail=$companyDetailarr[0];
				
		/***************************************************************************************/
		
		#design
		/***************************************************************************************/
				$doc->addParagraph('');
				$doc->addParagraph("Main Phone Number :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($companyDetail['MainPhone'],array('margin' => '20px'));
				
				$doc->addParagraph("Toll Free Number :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($companyDetail['TollFreePhone'],array('margin' => '20px'));
				
				$doc->addParagraph("Any specific company email address you would like customers to respond to as a general / info address  :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['GeneralEmailAddress'],array('margin' => '20px'));
				
				$doc->addParagraph("What Hours and days are you open? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($companyDetail['HoursOpen'],array('margin' => '20px'));
				
				
				$doc->addParagraph("Directions to reach your company (from all direction) :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($companyDetail['CompanyDirection'],array('margin' => '20px'));
				
				$doc->addParagraph("Any special directions or land marks that should be noted on our directions ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($companyDetail['DirectionLandMark'],array('margin' => '20px'));
				
				$doc->addParagraph("County of Operation ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($companyDetail['CountyOfOpeation'],array('margin' => '20px'));
				
		
		/***************************************************************************************/
		
		
		
/********************************************************************************************************
							End of section belongs to the Step 1
*********************************************************************************************************/		


/********************************************************************************************************
							This section belongs to the Step 2
*********************************************************************************************************/		
		
		#Fetch Data
		/***************************************************************************************/
		
				$historyInfoarr = $usr->GetAllWhere("web_tbl_company_history","UserId = '".$userId."'");
					
				$historyInfo=$historyInfoarr[0];
				
		/***************************************************************************************/
		
		#Design
		/***************************************************************************************/
		
				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				
				$doc->addParagraph("What year was the business established ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($historyInfo['YearEstablised'],array('margin' => '20px'));
				
				$doc->addParagraph("How did you get into this industry ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($historyInfo['HowToIndustry'],array('margin' => '20px'));
				
				$doc->addParagraph("Company history and founders ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($historyInfo['CompanyHistory'],array('margin' => '20px'));
				
				$doc->addParagraph("Has there been any changes of physical location ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($historyInfo['PhysicalLocationChange'],array('margin' => '20px'));
				
				$doc->addParagraph("Has there been any change of ownership ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($historyInfo['OwnershipChange'],array('margin' => '20px'));
				
				$doc->addParagraph("Are there any history of awards or certifications special to the shop ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($historyInfo['CertificationHistory'],array('margin' => '20px'));
				
				$doc->addParagraph("Any special milestones the shop or business owner has achieved ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($historyInfo['SpecialMilestone'],array('margin' => '20px'));
					
				$doc->addParagraph("Tell me anything else you can about your company ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($historyInfo['OtherDetail'],array('margin' => '20px'));
				
				
		/***************************************************************************************/
		
		
		
/********************************************************************************************************
							End of section belongs to the Step 1
*********************************************************************************************************/		


/********************************************************************************************************
							This section belongs to the Step 3
*********************************************************************************************************/		
		
		#Fetch Data
				$stuffDetailarr = $usr->GetAllWhere("web_tbl_stuff","UserId = '".$userId."'");
				$stuffDetail=$stuffDetailarr[0];
				
				
				#***************************************************************#
				#Employees
				$allEmployees = $usr->GetAllWhere("web_tbl_employee","UserId = '".$userId."'");
				//$allEmployees=$customer->getAllEmployee();
				#***************************************************************#

		#Design
				
				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				if(is_array($allEmployees) && !empty($allEmployees))
				{
					$doc->addParagraph('Employees ::',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph('---------------------------------------');
					foreach($allEmployees as $employee)
					{
						if($employee['EmpPhoto'])
							$doc->addParagraph($doc->bufferImage('http://www.motorheadmarketing.com/WebSurvey/images/Employee/thumbnail/'.$employee['EmpPhoto']));
						else
							$doc->addParagraph($doc->bufferImage('http://www.motorheadmarketing.com/WebSurvey/images/noimage.gif'));
						$doc->addParagraph('Name ::',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));	
						$doc->addParagraph($employee['EmpName'],array('margin' => '20px'));	
						
						$doc->addParagraph('Description ::',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));	
						$doc->addParagraph(nl2br($employee['EmpDescription']),array('margin' => '20px'));	
						
						$doc->addParagraph('Certification ::',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));	
						$doc->addParagraph($employee['EmpCertifications'],array('margin' => '20px'));	
						
						$doc->addParagraph('Time with company ::',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph($employee['TimeWithCompany'],array('margin' => '20px'));
						
						$doc->addParagraph('---------------------------------------');
					}
				}
				
				
				
				$doc->addParagraph('Do you wish to use the site for employment recruiting ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($stuffDetail['UseForEmpRecruiting'],array('margin' => '20px'));
						
				$doc->addParagraph('What job positions are currently available ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($stuffDetail['CurrentJobs'],array('margin' => '20px'));
				
		
/********************************************************************************************************
							End of section belongs to the Step 3
*********************************************************************************************************/		
		


/********************************************************************************************************
							This section belongs to the Step 4
*********************************************************************************************************/		
		
		#Fetch Data
		/***************************************************************************************/
		
				$brandingInfoarr = $usr->GetAllWhere("web_tbl_branding","UserId = '".$userId."'");
					
				$brandingInfo=$brandingInfoarr[0];
				
		/***************************************************************************************/
		
		#Design
		/***************************************************************************************/
		
				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				
				$doc->addParagraph("Do you have a mission statement ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($brandingInfo['MissionStatement'],array('margin' => '20px'));
				
				$doc->addParagraph("Do you have a motto, slogan, or commonly recognized statement ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($brandingInfo['Slogan'],array('margin' => '20px'));
				
				$doc->addParagraph("What parts or banner programs are you affiliated with ? (ACDelco, NAPA, Carquest, other) ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($brandingInfo['BannerAffiliated'],array('margin' => '20px'));
				
				$doc->addParagraph("Do you have an oil company affiliation ? (Texaco, Shell, other) ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($brandingInfo['OilCompanyAffiliation'],array('margin' => '20px'));
				
				$doc->addParagraph("Do you have a tire company affiliation ? (Firestone, other) ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($brandingInfo['TyreCompanyAffiliation'],array('margin' => '20px'));
				
				
		/***************************************************************************************/
				
/********************************************************************************************************
							End of section belongs to the Step 4
*********************************************************************************************************/	


/********************************************************************************************************
							This section belongs to the Step 5
*********************************************************************************************************/		
		
		#Fetch Data
		/***************************************************************************************/
		
				$policyInfoarr = $usr->GetAllWhere("web_tbl_policy","UserId = '".$userId."'");
					
				$policyInfo=$policyInfoarr[0];
				
		/***************************************************************************************/
		
		#Design
		/***************************************************************************************/
		
				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				
				$doc->addParagraph("Do you have an environmental statement (or affiliation) ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($policyInfo['EnvironmentalStatement'],array('margin' => '20px'));
				
				$doc->addParagraph("What is your warranty information / policy ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($policyInfo['WarrantyInfo'],array('margin' => '20px'));
				
				$doc->addParagraph("What is your towing policy ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($policyInfo['TowingPolicy'],array('margin' => '20px'));
				
				$doc->addParagraph("Do you have a satisfaction guarantee policy ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($policyInfo['GuaranteePolicy'],array('margin' => '20px'));
				
				$doc->addParagraph("What financing options do you offer ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($policyInfo['FinancialOption'],array('margin' => '20px'));
				
				$doc->addParagraph("Is there any other policies or information I should know ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($policyInfo['OtherPolicy'],array('margin' => '20px'));
				
				$doc->addParagraph("Is there any special business philosophies that you would like to convey to the customer ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($policyInfo['BusinessPhilosophy'],array('margin' => '20px'));
				
				
		/***************************************************************************************/
				
/********************************************************************************************************/



/********************************************************************************************************
							This section belongs to the Step 6
*********************************************************************************************************/		
		
			
		$notorietyInfoarr = $usr->GetAllWhere("web_tbl_notoriety","UserId = '".$userId."'");
		$notorietyInfo=$notorietyInfoarr[0];
		
		
		#**********************************************************#
		#Special Events
		$specialEvents=$notorietyInfo['SpecialEvents'];
/*		$specialEventsStrArray=array('Business Cards','Letterhead','Fax Cover Sheets','Envelopes','Repair Orders','Invoices','Checks','Lube Stickers','');
		$specialEventsIndexArray=array('1','2','3','4','5','6','7','8','9');
		$specialEvents=str_replace($specialEventsIndexArray,$specialEventsStrArray,$specialEvents);
		
		$customerMarketingInfo['BusinessDocuments']=$businessDocuments;
*/		
		if($notorietyInfo['SpecialEventsOther'])
			$specialEvents.=','.$notorietyInfo['SpecialEventsOther'];
		#**********************************************************#

		#**********************************************************#
		#Community
		$communityActivities=$notorietyInfo['CommunityActivities'];
	
		if($notorietyInfo['CommunityActivitiesOther'])
			$communityActivities.=','.$notorietyInfo['CommunityActivitiesOther'];
		#**********************************************************#

		
				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				$doc->addParagraph('Does your business have any awards or publicly recognized notoriety ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($notorietyInfo['AwardNotoriety'],array('margin' => '20px'));
				
				$doc->addParagraph('What General Business association are you related with (BBB, AAA, etc.) ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($notorietyInfo['GeneralBusinessAssocation'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you participate in any special Events ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($specialEvents,array('margin' => '20px'));
				
				$doc->addParagraph('Do you participate in any community activities, or offer community support ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($communityActivities,array('margin' => '20px'));
				
				$doc->addParagraph('What is your area known for ?( views, entertainment, city/state motto, other ) ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($notorietyInfo['AreaKnownFor'],array('margin' => '20px'));
				
				$doc->addParagraph('Is there anything specifically noteworthy about your location ?( unique landmarks, views of certain areas or landmarks ) ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($notorietyInfo['LocationSpecial'],array('margin' => '20px'));
				
				$doc->addParagraph('Specific Local sports team affiliation that you would like mentioned :: ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($notorietyInfo['LocalSportsTeam'],array('margin' => '20px'));
				
		
/********************************************************************************************************
							End of section belongs to the Step 6
*********************************************************************************************************/	
/********************************************************************************************************
							This section belongs to the Step 7
*********************************************************************************************************/		
		
			
		$servicesInfoarr = $usr->GetAllWhere("web_tbl_services","UserId = '".$userId."'");
		$servicesInfo=$servicesInfoarr[0];
		
		
		#**********************************************************#
		#FleetServices
		$fleetServices=$servicesInfo['FleetServices'];
/*		$specialEventsStrArray=array('Business Cards','Letterhead','Fax Cover Sheets','Envelopes','Repair Orders','Invoices','Checks','Lube Stickers','');
		$specialEventsIndexArray=array('1','2','3','4','5','6','7','8','9');
		$specialEvents=str_replace($specialEventsIndexArray,$specialEventsStrArray,$specialEvents);
		
		$customerMarketingInfo['BusinessDocuments']=$businessDocuments;
*/		
		if($servicesInfo['FleetServicesOther'])
			$fleetServices.=','.$servicesInfo['FleetServicesOther'];
		#**********************************************************#

		#**********************************************************#
		#SpecialServicePackage
		$specialServicePackage=$servicesInfo['SpecialServicePackage'];
	
		if($servicesInfo['SpecialServicePackageOther'])
			$specialServicePackage.=','.$servicesInfo['SpecialServicePackageOther'];
		#**********************************************************#

		
				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				$doc->addParagraph('What is your menu of services ?(General and normal of most shops, or specialty, Diagnosis, eletrical, etc.) ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($servicesInfo['MenuServices'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you specialize in a particular make or style (asian, domestic, foreign) ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($servicesInfo['SpecializeStyle'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you offer any specialty services ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($servicesInfo['SpecialtyServices'],array('margin' => '20px'));
				
				$doc->addParagraph('Are you known in your community for anything special? (RV repair, brakes,honest repair, hybrid servicing, other such information) ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($servicesInfo['KnownForSpecial'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you offer Fleet Services ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($fleetServices,array('margin' => '20px'));
				
				$doc->addParagraph('Do you offer any service Wraps ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($servicesInfo['ServiceWraps'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you offer any special service packages ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($specialServicePackage,array('margin' => '20px'));
		
/********************************************************************************************************
							End of section belongs to the Step 7
*********************************************************************************************************/	


/********************************************************************************************************
							This section belongs to the Step 8
*********************************************************************************************************/		
		
			
		$competitiveAdvantagesInfoarr = $usr->GetAllWhere("web_tbl_competitive_advantages","UserId = '".$userId."'");
		$competitiveAdvantagesInfo=$competitiveAdvantagesInfoarr[0];
		
		
		#**********************************************************#
		#Competitive Advantages
		$competitiveAdvantages=$competitiveAdvantagesInfo['CompetitiveAdvantages'];
/*		$specialEventsStrArray=array('Business Cards','Letterhead','Fax Cover Sheets','Envelopes','Repair Orders','Invoices','Checks','Lube Stickers','');
		$specialEventsIndexArray=array('1','2','3','4','5','6','7','8','9');
		$specialEvents=str_replace($specialEventsIndexArray,$specialEventsStrArray,$specialEvents);
		
		$customerMarketingInfo['BusinessDocuments']=$businessDocuments;
*/		
		#**********************************************************#

		#**********************************************************#
		#Competitive Advantages WR
		$competitiveAdvantagesWR=$competitiveAdvantagesInfo['CompetitiveAdvantagesWR'];
	
		#**********************************************************#

		
				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				$doc->addParagraph('Competitive advantages offered',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph('------------------------------------------------------');
				if($competitiveAdvantagesInfo['CompShuttleService'])
				{
					$doc->addParagraph('Complimentary Shuttle Service  ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph('Yes',array('margin' => '20px'));
					
					$doc->addParagraph('Is there a range/distance ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($competitiveAdvantagesInfo['CompShuttleService'],array('margin' => '20px'));
				}
				else
				{
					$doc->addParagraph('Complimentary Shuttle Service ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph('No',array('margin' => '20px'));
				}
				
				$doc->addParagraph('Others :: ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($competitiveAdvantages,array('margin' => '20px'));
				
				$doc->addParagraph('Waiting Room :: ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($competitiveAdvantagesWR,array('margin' => '20px'));
					
				if($competitiveAdvantagesInfo['CompetitiveAdvantagesOther'])
				{
					$doc->addParagraph('Complimentary Shuttle Service :: ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($competitiveAdvantagesInfo['CompetitiveAdvantagesOther'],array('margin' => '20px'));
				}
					
		
/********************************************************************************************************
							End of section belongs to the Step 8
*********************************************************************************************************/	

/********************************************************************************************************
							This section belongs to the Step 9
*********************************************************************************************************/		
		
			
		$marketingInfoarr = $usr->GetAllWhere("web_tbl_marketing","UserId = '".$userId."'");
		$marketingInfo=$marketingInfoarr[0];
		
		
		#**********************************************************#
		#Marketing Options
		$marketingOptions=$marketingInfo['MarketingOptions'];
		
		if($marketingInfo['MarketingOptionsOther'])
			$marketingOptions.=','.$marketingInfo['MarketingOptionsOther'];
		
		#**********************************************************#


		
				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				$doc->addParagraph('Do you have an advertising Calendar ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['HaveAdvertisingCalender'],array('margin' => '20px'));
				
				$doc->addParagraph('What coupons / specials are you currently running ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['CouponsRunning'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you do any multimedia marketing ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['MultimediaMarketing'],array('margin' => '20px'));
				
				$doc->addParagraph('What are the names of your top 3 competitors ? (for online research comparison) ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['TopCompetitors'],array('margin' => '20px'));
				
				
				$doc->addParagraph('Do you use an ad agency for marketing and advertising or do it yourself ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['UseMarketingAgency'],array('margin' => '20px'));
				
				
				$doc->addParagraph('Do you send out email notifications / specials / advertising of any kind ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['SendEmailNotification'],array('margin' => '20px'));
				
				
				$doc->addParagraph('Do you use any of the following in your advertising / marketing ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingOptions,array('margin' => '20px'));
				
				$doc->addParagraph('Do you send out oil Change Reminders ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['OilChangeReminder'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you send out recomended repair reminders ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['RepairReminders'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you have a night own / early bird drop off available ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['NightOwnBirdDropOff'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you use / have a list of customer testimonials ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['CustomerTestimonials'],array('margin' => '20px'));
				
		
/********************************************************************************************************
							End of section belongs to the Step 9
*********************************************************************************************************/	

/********************************************************************************************************
							This section belongs to the Step 10
*********************************************************************************************************/		
		
			
		$otherInfoarr = $usr->GetAllWhere("web_tbl_other_info","UserId = '".$userId."'");
		$othersInfo=$otherInfoarr[0];
		
				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				$doc->addParagraph('What garage management system do you use ? (offers email newsletters, electronic records history) ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($othersInfo['GarageManagement'],array('margin' => '20px'));
				
				
				$doc->addParagraph('Do you have any special tips or elements to be added to the site ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($othersInfo['SpecialTips'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you collect email addresses from your customers ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($othersInfo['CollectEmailAddress'],array('margin' => '20px'));
				
				$doc->addParagraph('Please checkmark the styles that best represent your company. ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($othersInfo['CompanyStyles'],array('margin' => '20px'));
				
				$doc->addParagraph('Are there specific colors you would like us to focus on? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($othersInfo['SpecificColor'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you prefer illustrations or photos ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($othersInfo['PreferIllustration'],array('margin' => '20px'));
				
				$doc->addParagraph('If possible, please list a couple of websites that you like and what features about them you like :: ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($othersInfo['WebSiteYouLike'],array('margin' => '20px'));
				
				
				$doc->addParagraph('List what words that would describe how you would explain the layout/design of your site :: ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($othersInfo['WordsDescribe'],array('margin' => '20px'));
				
				
				if($marketingInfo['FontChoice']=='Serif Fonts')
				{
					$doc->addParagraph('Fonts you prefer ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph('Serif Fonts (times New Roman)',array('margin' => '20px'));
				}	
				elseif($marketingInfo['FontChoice']=='Sans-serif')	
				{
					$doc->addParagraph('Fonts you prefer ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph('Sans-serif Fonts (Arial)',array('margin' => '20px'));
				}	
				elseif($marketingInfo['FontChoice']=='Not sure')	
				{
					$doc->addParagraph('Fonts you prefer ? Not sure');	
					$doc->addParagraph('Not sure',array('margin' => '20px'));	
				}	
				$doc->addParagraph("After all the questions we've gone through. Is there anything else you can think of that we need to know to help with the site developement or special additions you would like to see? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($othersInfo['AnythingElse'],array('margin' => '20px'));
				
		
/********************************************************************************************************
							End of section belongs to the Step 10
*********************************************************************************************************/	

	$doc->output();
?>