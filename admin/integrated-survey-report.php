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
	$doc->addParagraph('Integrated Survey Report<br>', array('text-align' => 'left', 'font-weight' => 'bold', 'background-color' => '#D4D0C8', 'height' =>'30'));
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
				$basicInfoDetailarr = $usr->GetAllWhere("tbl_survey_basic_information","UserId = '".$userId."'");
					
				$basicInfoDetail=$basicInfoDetailarr[0];
				
				#**********************************************************#
				#Garage management Stuff
				$garageMangeMent=$basicInfoDetail['GarageMgtSystem'];
				$garageMangeMentStrArray=array('Garage Operator','Genesis Four - Service 2000','Mitchell-1','NAPA TRACS','RO Writer','TRIAD','Wrenchead Pro','');
				$garageMangeMentIndexArray=array('1','2','3','4','5','6','7','8');
				$garageMangeMent=str_replace($garageMangeMentIndexArray,$garageMangeMentStrArray,$garageMangeMent);
				if($basicInfoDetail['GarageMgtSystemOther'])
					if($garageMangeMent)
						$garageMangeMent .=','.$basicInfoDetail['GarageMgtSystemOther'];
					else
						$garageMangeMent=$basicInfoDetail['GarageMgtSystemOther'];
							
				$basicInfoDetail['GarageMgtSystem']=$garageMangeMent;
				#**********************************************************#
				
				#**********************************************************#
				#Open CLose Hours
				if(isset($basicInfoDetail['HoursOpen']) && $basicInfoDetail['HoursOpen']!='')
					$openCloseDetail=$basicInfoDetail['HoursOpen'];
				else
					$openCloseDetail='';
				#**********************************************************#
				
		/***************************************************************************************/
		
		#design
		/***************************************************************************************/
				$doc->addParagraph('');
				$doc->addParagraph("Main phone number :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['MainPhone'],array('margin' => '20pt'));
				
				$doc->addParagraph("Toll Free Phone Number :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['TollFreePhone'],array('margin' => '20pt'));
				
				$doc->addParagraph("Fax Line Number :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['FaxLineNumber'],array('margin' => '20px'));
				
				$doc->addParagraph("What phone system do you use ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['PhoneSystem'],array('margin' => '20pt'));
				
				$doc->addParagraph("Do you have an on-hold message that is changed regularly ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['OnHoldMessage'],array('margin' => '20pt'));
				
				$doc->addParagraph("Business Owner Email Address :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['OwnerEmailAddress'],array('margin' => '20px'));
				
				$doc->addParagraph("Web Site Address :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['WebSiteAddress'],array('margin' => '20px'));
				
				$doc->addParagraph("Garage Management System :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['GarageMgtSystem'],array('margin' => '20px'));
				
				$doc->addParagraph("What Hours and days are you open? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['HoursOpen'],array('margin' => '20px'));
				
				$doc->addParagraph("Directions to reach your company (from all direction) :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['CompanyDirection'],array('margin' => '20px'));
				
				$doc->addParagraph("Any special directions or land marks that should be noted on our directions ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['DirectionLandMark'],array('margin' => '20px'));
				
				$doc->addParagraph("County of Operation ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['CountyOfOpeation'],array('margin' => '20px'));
				
				
		/***************************************************************************************/
		
		
		
/********************************************************************************************************
							End of section belongs to the Step 1
*********************************************************************************************************/		

/********************************************************************************************************
							This section belongs to the Step 2
*********************************************************************************************************/		
		
		#Fetch Data
		/***************************************************************************************/
		
				$historyInfoarr = $usr->GetAllWhere("tbl_survey_company_history","UserId = '".$userId."'");
					
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
							End :: section belongs to the Step 2
*********************************************************************************************************/		
		

/********************************************************************************************************
							This section belongs to the Step 3
*********************************************************************************************************/		
		
		#Fetch Data
		/***************************************************************************************/
		
				$businessProfileDetailarr = $usr->GetAllWhere("tbl_survey_business_profile","UserId = '".$userId."'");
					
				$businessProfileDetail=$businessProfileDetailarr[0];
				
				
				#**********************************************************#
				#Affiliation Info
				if(isset($businessProfileDetail['AffiliatedWith']) && $businessProfileDetail['AffiliatedWith']!='')
				{
					$affiliationDetailarr=$usr->GetAllWhere("tbl_survey_affiliation"," EntryId = '".$businessProfileDetail['AffiliatedWith']."'");
					$affiliationDetail=$affiliationDetailarr[0];
				}	
				if($affiliationDetail)
				{
					#**********************************************************#
					#OilCompanies
						$oilCompanies=$affiliationDetail['OilCompanies'];
						$oilCompaniesStrArray=array('BP','Chevron','Shell','Texaco','Other');
						$oilCompaniesIndexArray=array('1','2','3','4','5');
						$oilCompanies=str_replace($oilCompaniesIndexArray,$oilCompaniesStrArray,$oilCompanies);
						if($affiliationDetail['OilCompaniesOther'])
							if($oilCompanies)
								$oilCompanies .=','.$affiliationDetail['OilCompaniesOther'];
							else
								$oilCompanies =$affiliationDetail['OilCompaniesOther'];
						
						$affiliationDetail['OilCompanies']=$oilCompanies;
					#**********************************************************#
					
					#**********************************************************#
					#Tyre Companies
						$tyreCompanies=$affiliationDetail['TireCompanies'];
						print $tyreCompanies;
						$tyreCompaniesStrArray=array('Firestone','Goodyear','');
						$tyreCompaniesIndexArray=array('1','2','3');
						$tyreCompanies=str_replace($tyreCompaniesIndexArray,$tyreCompaniesStrArray,$tyreCompanies);
						if($affiliationDetail['TireCompaniesOther'])
							if($tyreCompanies)
								$tyreCompanies .=','.$affiliationDetail['TireCompaniesOther'];
							else
								$tyreCompanies =$affiliationDetail['TireCompaniesOther'];
						
						$affiliationDetail['TireCompanies']=$tyreCompanies;
					#**********************************************************#
					
					#**********************************************************#
					#Franchise
						$franchise=$affiliationDetail['Franchise'];
						$franchiseStrArray=array('Midas','');
						$franchiseIndexArray=array('1','2');
						$franchise=str_replace($franchiseIndexArray,$franchiseStrArray,$franchise);
						if($affiliationDetail['FranchiseOther'])
							if($franchise)
								$franchise .=','.$affiliationDetail['FranchiseOther'];
							else
								$franchise =$affiliationDetail['FranchiseOther'];
						$affiliationDetail['Franchise']=$franchise;
					#**********************************************************#
					
					#**********************************************************#
					#Banner Program
						$bannerPrograms=$affiliationDetail['BannerProgram'];
						$bannerProgramsStrArray=array('ACDelco - Tech Connect','All Pro / Auto Value / Bumper to Bumper','CarQuest - Federated Auto Parts','NAPA - AutoCare','Parts Plus - Car Care Center','');
						$bannerProgramsIndexArray=array('1','2','3','4','5','6');
						$bannerPrograms=str_replace($bannerProgramsIndexArray,$bannerProgramsStrArray,$bannerPrograms);
						if($affiliationDetail['BannerProgramOther'])
							if($bannerPrograms)
								$bannerPrograms .=','.$affiliationDetail['BannerProgramOther'];
							else
								$bannerPrograms =$affiliationDetail['BannerProgramOther'];
						
						$affiliationDetail['BannerProgram']=$bannerPrograms;
					#**********************************************************#
					
					#**********************************************************#
					#Others
						$others=$affiliationDetail['Additional'];
						$othersStrArray=array('Interstate Batteries','Jasper Engines and Transmissions','');
						$othersIndexArray=array('1','2','3');
						$others=str_replace($othersIndexArray,$othersStrArray,$others);
						if($affiliationDetail['AdditionalOther'])
							if($others)
								$others .=','.$affiliationDetail['AdditionalOther'];
							else
								$others =$affiliationDetail['AdditionalOther'];
						
						$affiliationDetail['Additional']=$others;
					#**********************************************************#
		
				
				}
				#**********************************************************#
				
				
				#**********************************************************#
				#Association Info
				if(isset($businessProfileDetail['AssociationInvolved']) && $businessProfileDetail['AssociationInvolved']!='')
				{
					$associationDetailarr=$usr->GetAllWhere("tbl_survey_association"," EntryId = '".$businessProfileDetail['AssociationInvolved']."'");
					$associationDetail=$associationDetailarr[0];
				}					
				
				#print_r($associationDetail);
				if($associationDetail)
				{
					#**********************************************************#
					#Industry
						$industry=$associationDetail['Industry'];
						$industryStrArray=array('Alliance of Automotive Service Providers - National','Alliance of Automotive Service Providers - Local','Automotive Service Excellence','Automotive Service Association - National','Automotive Service Association - Local','Service Specialists Association','');
						$industryIndexArray=array('1','2','3','4','5','6','7');
						$industry=str_replace($industryIndexArray,$industryStrArray,$industry);
						if($associationDetail['IndustryOther'])
							if($industry)
								$industry .=','.$associationDetail['IndustryOther'];
							else
								$industry =$associationDetail['IndustryOther'];
						
						$associationDetail['Industry']=$industry;
					#**********************************************************#
					
					#**********************************************************#
					#General Business
						$generalBusiness=$associationDetail['GeneralBusiness'];
						$generalBusinessStrArray=array('AAA','Business Network International','Better Business Bureau','');
						$generalBusinessIndexArray=array('1','2','3','4');
						$generalBusiness=str_replace($generalBusinessIndexArray,$generalBusinessStrArray,$generalBusiness);
						if($associationDetail['GeneralBusinessOther'])
							if($generalBusiness)
								$generalBusiness .=','.$associationDetail['GeneralBusinessOther'];
							else
								$generalBusiness =$associationDetail['GeneralBusinessOther'];
						
						$associationDetail['GeneralBusiness']=$generalBusiness;
					#**********************************************************#
					
					#**********************************************************#
					#Additonal Others
						if($associationDetail['AdditionalOther'])
								$additionalOthers=$associationDetail['AdditionalOther'];
						else
							$additionalOthers='';		
						
						$associationDetail['Additional']=$additionalOthers;
					#**********************************************************#
		
				}
				#**********************************************************#
				
		
		/***************************************************************************************/
		
		#Design
		/***************************************************************************************/
		
				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				
				if($businessProfileDetail['HasLogo'])
				{
					$doc->addParagraph("Does your company have a logo ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
					if($businessProfileDetail['IsTradeMarked'])
					{
						$doc->addParagraph("Is it trademarked ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph("Yes",array('margin' => '20px'));
					}
					else
					{
						$doc->addParagraph("Is it trademarked ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph("No",array('margin' => '20px'));
					}	
				}
				else
				{
					$doc->addParagraph("Does your company have a logo ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("No",array('margin' => '20px'));
				}	

				if($businessProfileDetail['HasCatchPhrase'])
				{
					$doc->addParagraph("Does your company have a catch phrase / motto / or recognized statement ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
					if($businessProfileDetail['CatchPhrase'])
					{
						$doc->addParagraph("What is it ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph($businessProfileDetail['CatchPhrase'],array('margin' => '20px'));
					}
				}
				else
				{
					$doc->addParagraph("Does your company have a catch phrase / motto / or recognized statement ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("No",array('margin' => '20px'));
				}
				
				if($businessProfileDetail['HasStandardColors'])
				{
					$doc->addParagraph("Does your company have a standard set of colors ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
					if($businessProfileDetail['StandardColors'])
					{
						$doc->addParagraph("What are those colors ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph($businessProfileDetail['StandardColors'],array('margin' => '20px'));
					}
				}
				else
				{
					$doc->addParagraph("Does your company have a standard set of colors ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("No",array('margin' => '20px'));
				}
				if($businessProfileDetail['HasJingle'])
				{
					$doc->addParagraph("Does your company have a store jingle ?(commonly used in radio ads / tv) ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
				}	
				else
				{
					$doc->addParagraph("Does your company have a store jingle ?(commonly used in radio ads / tv) ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));	
					$doc->addParagraph("No",array('margin' => '20px'));	
				}		
					
				
				if($businessProfileDetail['CollectEmailAddress'])
				{
					$doc->addParagraph("Do you Collect Email addresses from your customers ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
					if($businessProfileDetail['PercentageTime'])
					{
						$doc->addParagraph("What percentage of the time do you get an address ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph($businessProfileDetail['PercentageTime'],array('margin' => '20px'));
					}
				}
				else
				{
					$doc->addParagraph("Do you Collect Email addresses from your customers ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("No",array('margin' => '20px'));
				}
				
				if($affiliationDetail)
				{
					$doc->addParagraph("Affiliated with anything ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("---------------------------------- ");
					$doc->addParagraph("Oil Companies :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($affiliationDetail['OilCompanies'],array('margin' => '20px'));
					
					$doc->addParagraph("Tire Company :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($affiliationDetail['TireCompanies'],array('margin' => '20px'));
					
					$doc->addParagraph("Franchise :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($affiliationDetail['Franchise'],array('margin' => '20px'));
					
					$doc->addParagraph("Banner Program :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($affiliationDetail['BannerProgram'],array('margin' => '20px'));
					
					$doc->addParagraph("Other :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($affiliationDetail['Additional'],array('margin' => '20px'));
				}
				else
				{
					$doc->addParagraph("Affiliated with anything ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("No",array('margin' => '20px'));
				}
				
				if($associationDetail)
				{
					$doc->addParagraph("Involved with any associations ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("---------------------------------- ");
					$doc->addParagraph("Industry :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($associationDetail['Industry'],array('margin' => '20px'));
					
					$doc->addParagraph("General Business :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($associationDetail['GeneralBusiness'],array('margin' => '20px'));
					
					$doc->addParagraph("Other :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($associationDetail['Additional'],array('margin' => '20px'));
				}
				else
				{
					$doc->addParagraph("Involved with any associations ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("No",array('margin' => '20px'));
				}
				
				if($businessProfileDetail['HasCoOpFunding'])
				{
					$doc->addParagraph("Do you have access to Co-Op funding ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
					if($businessProfileDetail['FundingAmount'])
					{
						$doc->addParagraph("How much ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph($businessProfileDetail['FundingAmount'],array('margin' => '20px'));
					}
				}
				else
				{
					$doc->addParagraph("Do you have access to Co-Op funding ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("No",array('margin' => '20px'));
				}
				
		/***************************************************************************************/
		
		
		
/********************************************************************************************************
							End of section belongs to the Step 3
*********************************************************************************************************/		


/********************************************************************************************************
							This section belongs to the Step 4
*********************************************************************************************************/		
		
		#Fetch Data
				$stuffDetailarr = $usr->GetAllWhere("tbl_survey_stuff","UserId = '".$userId."'");
				$stuffDetail=$stuffDetailarr[0];
				
				
				#***************************************************************#
				#Employees
				$allEmployees = $usr->GetAllWhere("tbl_survey_employee","UserId = '".$userId."'");
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
							$doc->addParagraph($doc->bufferImage('http://www.turbolutions.com/IntegratedSurvey/images/Employee/thumbnail/'.$employee['EmpPhoto']));
						else
							$doc->addParagraph($doc->bufferImage('http://www.turbolutions.com/IntegratedSurvey/images/noimage.gif'));
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
				
				$doc->addParagraph('How many technicians do you have ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($stuffDetail['TechnicianNumber'],array('margin' => '20px'));
				
				$doc->addParagraph('What is your labor rate ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($stuffDetail['LaborRate'],array('margin' => '20px'));
				
		
/********************************************************************************************************
							End of section belongs to the Step 4
*********************************************************************************************************/		

/********************************************************************************************************
							This section belongs to the Step 5
*********************************************************************************************************/		
		
		#Fetch Data
		/***************************************************************************************/
		
				$brandingInfoarr = $usr->GetAllWhere("tbl_survey_branding","UserId = '".$userId."'");
					
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
							End of section belongs to the Step 5
*********************************************************************************************************/	


/********************************************************************************************************
							This section belongs to the Step 6
*********************************************************************************************************/		
		
		#Fetch Data
		/***************************************************************************************/
		
				$policyInfoarr = $usr->GetAllWhere("tbl_survey_policy","UserId = '".$userId."'");
					
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
				
/********************************************************************************************************
							End of section belongs to the Step 6
*********************************************************************************************************/	



/********************************************************************************************************
							This section belongs to the Step 7
*********************************************************************************************************/		
		
			
		$notorietyInfoarr = $usr->GetAllWhere("tbl_survey_notoriety","UserId = '".$userId."'");
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
							End of section belongs to the Step 7
*********************************************************************************************************/	

/********************************************************************************************************
							This section belongs to the Step 8
*********************************************************************************************************/		
		
		#Fetch Data
		/***************************************************************************************/
				$basicInfoDetailarr = $usr->GetAllWhere("tbl_survey_marketing_info","UserId = '".$userId."'");
					
				$basicInfoDetail=$basicInfoDetailarr[0];
				
				
				#**********************************************************#
				#Service Market Segment
				if(isset($basicInfoDetail['MarketSegment']) && $basicInfoDetail['MarketSegment']!='')
				{
					$marketSegment=$basicInfoDetail['MarketSegment'];
					#print $marketSegment;
					$marketSegmentStrArray=array('Domestic Vehicles (Ford, Chevrolet, etc.)','Foreign Vehicles (BMW, Mercedes, etc.)','Asian (Toyota, Honda, etc.)','');
					$marketSegmentIndexArray=array('1','2','3','4');
					$marketSegment=str_replace($marketSegmentIndexArray,$marketSegmentStrArray,$marketSegment);
					if($basicInfoDetail['OtherMarkerSegment'])
						if($marketSegment)
							$marketSegment .=','.$basicInfoDetail['OtherMarkerSegment'];
						else
							$marketSegment =$basicInfoDetail['OtherMarkerSegment'];
				}
				else
				{
					$marketSegment='';
				}		
				
				$basicInfoDetail['MarketSegment']=$marketSegment;
				#**********************************************************#
				
				
				#**********************************************************#
				#Fuell Source
				if(isset($basicInfoDetail['FuelSource']) && $basicInfoDetail['FuelSource']!='')
				{
					$fuellSource=$basicInfoDetail['FuelSource'];
					$fuellSourceStrArray=array('Gas','Diesel','Alternative Fuels','Hybrid','');
					$fuellSourceIndexArray=array('1','2','3','4','5');
					$fuellSource=str_replace($fuellSourceIndexArray,$fuellSourceStrArray,$fuellSource);
					if($basicInfoDetail['OtherFuelSource'])
						if($fuellSource)
							$fuellSource .=','.$basicInfoDetail['OtherFuelSource'];
						else
							$fuellSource=$basicInfoDetail['OtherFuelSource'];
			
					
				}
				else
				{
					$fuellSource='';
				}	
				$basicInfoDetail['FuelSource']=$fuellSource;
				#**********************************************************#
		
		
		/***************************************************************************************/
		
		#design
		/***************************************************************************************/
				$doc->addParagraph('');
				$doc->addParagraph("Companies gross sales last year :: ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['LastYearGrossSales'],array('margin' => '20px'));
				
				$doc->addParagraph("How much did you spend last year on marketing / advertising ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['LastYearMarketingExpenditure'],array('margin' => '20px'));
				
				if($basicInfoDetail['HasAnnualMarketingPlan'])
				{
					$doc->addParagraph("Do you have an annual marketing / advertising plan ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
					if($basicInfoDetail['HasAnnualMarketingPlan'])
					{
						$doc->addParagraph("Is it created in house or outside ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph("Yes",array('margin' => '20px'));
						
						$doc->addParagraph("if outside who did it ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph($basicInfoDetail['PlanCreatedBy'],array('margin' => '20px'));
					}
					else
					{
						$doc->addParagraph("Is it created in house or outside ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph("No",array('margin' => '20px'));
					}	
				}
				else
				{
					$doc->addParagraph("Do you have an annual marketing / advertising plan ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("No",array('margin' => '20px'));
				}	
				
				if($basicInfoDetail['HasAnnualBudget'])
				{
					$doc->addParagraph("Do you have an annual marketing / advertising budget ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
					
					$doc->addParagraph("What is that budget ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($basicInfoDetail['BudgetAmount'],array('margin' => '20px'));
				}
				else
				{
					$doc->addParagraph("Do you have an annual marketing / advertising budget ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("No",array('margin' => '20px'));
				}	
				
				
				
/*				$doc->addParagraph("How many years has the business name been established ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['YearsEstablished'],array('margin' => '20px'));
				
				$doc->addParagraph("How many years have you been at the current physical location ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['YearsInCurrentLocation'],array('margin' => '20px'));
*/				
				$doc->addParagraph("What market segment do you service ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['MarketSegment'],array('margin' => '20px'));
				
				$doc->addParagraph("What fuel source do you service ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['FuelSource'],array('margin' => '20px'));
				
				if($basicInfoDetail['HasFleetBusiness'])
				{
					$doc->addParagraph("Do you have any fleet business ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
					
					$doc->addParagraph("What percentage of your business is fleet related ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($basicInfoDetail['PercentageInFleet'],array('margin' => '20px'));
				}
				else
				{
					$doc->addParagraph("Do you have any fleet business ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Do you have any fleet business ? ",array('margin' => '20px'));
				}					
				$doc->addParagraph("Do you have detailed tracking of all marketing efforts? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($basicInfoDetail['DetailTracking'],array('margin' => '20px'));
		
		/***************************************************************************************/
		
		
		
/********************************************************************************************************
							End of section belongs to the Step 8
*********************************************************************************************************/		

/********************************************************************************************************
							This section belongs to the Step 9
*********************************************************************************************************/		
		
		#Fetch Data
				$marketingOpportunitiesarr = $usr->GetAllWhere("tbl_survey_marketing_opportunities","UserId = '".$userId."'");
					
				$marketingOpportunities=$marketingOpportunitiesarr[0];
				
				
				#**********************************************************#
				#SpecialWork
				$specialWork=$marketingOpportunities['SpecialWork'];
				$specialWorkStrArray=array('RV Repair','Brakes','Honest Repair','Hybrid Servicing','State Authorized Center','Alternative Fuels','');
				$specialWorkIndexArray=array('1','2','3','4','5','6','7');
				$specialWork=str_replace($specialWorkIndexArray,$specialWorkStrArray,$specialWork);
				if($marketingOpportunities['SpecialWorkOther'])
					if($specialWork)
						$specialWork .=','.$marketingOpportunities['SpecialWorkOther'];
					else
						$specialWork =$marketingOpportunities['SpecialWorkOther'];
				
				$marketingOpportunities['SpecialWork']=$specialWork;
				#**********************************************************#
				
				
				#**********************************************************#
				#CompetiveAdvantages
				$competiveAdvantages=$marketingOpportunities['CompetiveAdvantages'];
				$competiveAdvantagesStrArray=array('24 Hour Tow Service','AAA Aproved Repair Facility','Accept Competitor Coupons','Accept Extended Warranties','ASE Master Technicians','Cell Phone Loaner (for instant contact / progress / approvals)','Complimentary Shuttle Service','Complimentary Vehicle Wash','Computer Repair Order System / Records History keeping','Computerized Recall and technical service bulletins','Deliver Vehciles (as part of regular business services)','Pickup Vehicles (as part of regular business services)','Early Bird / Nite Drop Off Service','E-Mail notification of progress','Environmental Protection Program (involved / part of)','Extended Hours / Days','Free Loaner Vehicles','Honor Manufacturer Warranties','Low Cost Rental Cars','OE Parts Available','Overnight Repair Services','Pager Loan (for instant contact / progress / approvals)','Quick Lube Service','Sell Vehicles','Specialty Tools','Waiting Room','Childrens Area','Coloring books, toys, games','Business Space','Courtesy Phone','Fax Machine Access','Internet Access','Television','Complimentary Newspaper','Complimentary beverages','Bottled Water','Coffee','Tea','Other','Diaper Changing Station','HVAC Controlled environment (winter heating / summer cooling)','Noise controlled environment (prevent customers from hearing shop noise)','Spotless Restrooms','Other');
				
				$competiveAdvantagesIndexArray=explode(',',$competiveAdvantages);
				$competiveAdvantagesString='';
				foreach($competiveAdvantagesIndexArray as $index)
				{
					$competiveAdvantagesString .=$competiveAdvantagesStrArray[$index].',';
				}
				
				$competiveAdvantagesString =rtrim($competiveAdvantagesString,',');
				
				
				$marketingOpportunities['CompetiveAdvantages']=$competiveAdvantagesString;
				#**********************************************************#
				
				
				
				#**********************************************************#
				#communityDetail
				if(isset($businessProfileDetail['CommunityActivities']) && $businessProfileDetail['CommunityActivities']!='')
				{
					$communityDetailarr=$usr->GetAllWhere("tbl_survey_community"," EntryId = '".$marketingOpportunities['CommunityActivities']."'");
					$communityDetail=$communityDetailarr[0];
				}					
				
				if($communityDetail)
				{
		
					if($communityDetail['BloodMobileDetail'])
						$communityDetailStr .='Blood Mobile Drive ('.$communityDetail['BloodMobileDetail'].'),';
					if($communityDetail['CharitiesDetail'])
						$communityDetailStr .='Charities  ('.$communityDetail['CharitiesDetail'].'),';
					if($communityDetail['AthleticsDetail'])
						$communityDetailStr .='Community Athletics  ('.$communityDetail['AthleticsDetail'].'),';
					if($communityDetail['CustomerAppreciationDetail'])
						$communityDetailStr .='Customer Appreciation Days ('.$communityDetail['CustomerAppreciationDetail'].'),';
					if($communityDetail['FoodBanksDetail'])
						$communityDetailStr .='Food Banks  ('.$communityDetail['FoodBanksDetail'].'),';
					if($communityDetail['HolidayDetail'])
						$communityDetailStr .='Holiday Events ('.$communityDetail['HolidayDetail'].'),';
					if($communityDetail['LocalChurchDetail'])
						$communityDetailStr .='Local Church ('.$communityDetail['LocalChurchDetail'].'),';
					if($communityDetail['LocalEventsDetail'])
						$communityDetailStr .='Local Events ('.$communityDetail['LocalEventsDetail'].'),';
					if($communityDetail['SchoolProgramDetail'])
						$communityDetailStr .='School Program ('.$communityDetail['SchoolProgramDetail'].'),';
					if($communityDetail['ScoutsDetail'])
						$communityDetailStr .='Scouts ('.$communityDetail['ScoutsDetail'].'),';
					if($communityDetail['Additional'])
						$communityDetailStr .='Additional ('.$communityDetail['Additional'].'),';
		
					$communityDetailStr=rtrim(communityDetailStr,',');
		
					$marketingOpportunities['CommunityActivities']=$communityDetailStr;
					
				}
				else
				{
					$marketingOpportunities['CommunityActivities']='';
				}
				#**********************************************************#
				
				
				#**********************************************************#
				#PaymentPrograms
				$paymentPrograms=$marketingOpportunities['PaymentPrograms'];
				$paymentProgramsStrArray=array('90 Day Same as cash ','American Express','Car Care One Card','Mastercard ','Visa','');
				$paymentProgramIndexArray=array('1','2','3','4','5','6');
				$paymentPrograms=str_replace($paymentProgramIndexArray,$paymentProgramsStrArray,$paymentPrograms);
				if($marketingOpportunities['PaymentProgramsOthers'])
					if($paymentPrograms)
						$paymentPrograms .=','.$marketingOpportunities['PaymentProgramsOthers'];
					else
						$paymentPrograms =$marketingOpportunities['PaymentProgramsOthers'];
				
				$marketingOpportunities['PaymentPrograms']=$paymentPrograms;
				#**********************************************************#
				
				
				
				#**********************************************************#
				#Special Discounts
				$specialDiscounts=$marketingOpportunities['SpecialDiscounts'];
				$specialDiscountsStrArray=array('AAA Discounts','Merchant Discounts','Senior Discounts','Student Discounts',"Veteran's Discount",'');
				$specialDiscountsIndexArray=array('1','2','3','4','5','6');
				$specialDiscounts=str_replace($specialDiscountsIndexArray,$specialDiscountsStrArray,$specialDiscounts);
				if($marketingOpportunities['SpecialDiscountOthers'])
					if($specialDiscounts)
						$specialDiscounts .=','.$marketingOpportunities['SpecialDiscountOthers'];
					else
						$specialDiscounts =$marketingOpportunities['SpecialDiscountOthers'];
				
				$marketingOpportunities['SpecialDiscounts']=$specialDiscounts;
				#**********************************************************#
				
				
				
				#**********************************************************#
				#Warranty 
				$warranty =$marketingOpportunities['Warranty'];
				$warrantyStrArray=array('No','12 month / 12,000 mile','24 month / 24,000 mile','36 month / 36,000 mile','');
				$warrantyIndexArray=array('1','2','3','4','5');
				$warrantys=str_replace($warrantyIndexArray,$warrantyStrArray,$warranty);
				if($marketingOpportunities['WarrantyOther'])
					if($warrantys)
						$warrantys .=','.$marketingOpportunities['WarrantyOther'];
					else
						$warrantys =$marketingOpportunities['WarrantyOther'];
				
				$marketingOpportunities['Warranty']=$warrantys;
				#**********************************************************#
				
		
		#Design
				
				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				$doc->addParagraph('What Goals or Objectives would you like to see your company achive in the next year from marketing or advertising ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingOpportunities['MarketingGoals'],array('margin' => '20px'));
				
				$doc->addParagraph('Are you known for performing any special work ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingOpportunities['SpecialWork'],array('margin' => '20px'));
				
				$doc->addParagraph('What Competitive Advantages do you offer your customers ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingOpportunities['CompetiveAdvantages'],array('margin' => '20px'));
				
				if($marketingOpportunities['MaximumShuttleDistance'])
				{
					$doc->addParagraph(' Maximum distance you will shuttle ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($marketingOpportunities['MaximumShuttleDistance'],array('margin' => '20px'));
				}	
					
				if($marketingOpportunities['SpecialtyTools'])
				{
					$doc->addParagraph('Specialty Tools ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));	
					$doc->addParagraph($marketingOpportunities['SpecialtyToolss'],array('margin' => '20px'));
				}	


				if($marketingOpportunities['OtherBeverages'])
				{
					$doc->addParagraph('Other Beverages ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));	
					$doc->addParagraph($marketingOpportunities['OtherBeverages'],array('margin' => '20px'));	
				}	

				if($marketingOpportunities['AdditionalCompetiveAdvantages'])
				{
					$doc->addParagraph('Additional Competive Advantages ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));	
					$doc->addParagraph($marketingOpportunities['AdditionalCompetiveAdvantages'],array('margin' => '20px'));	
				}	


				$doc->addParagraph('Are you involved in any (or create) Community Activities ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingOpportunities['CommunityActivities'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you offer Any financing / Payment Programs ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingOpportunities['PaymentPrograms'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you offer special Discounts ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingOpportunities['SpecialDiscounts'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you offer a Warranty ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingOpportunities['Warranty'],array('margin' => '20px'));
		
						
		
/********************************************************************************************************
							End of section belongs to the Step 9
*********************************************************************************************************/		
		


/********************************************************************************************************
							This section belongs to the Step 10
*********************************************************************************************************/		
		
		#Fetch Data
				$businessCustomerDetailarr = $usr->GetAllWhere("tbl_survey_customer_profile","UserId = '".$userId."'");
					
				$businessCustomerInfo=$businessCustomerDetailarr[0];
				
				
				#**********************************************************#
				#Economic factors 
				$economicInfluence=$businessCustomerInfo['EconomicInfluence'];
				$economicInfluenceStrArray=array('Apartment Complexes','Housing Developments','Large Store / Other Commercial Development','Large Industry','Major Public Works / Government Institutions','Military Base or Government Center','Large School Campus (College)','Seasonal Market (snow birds, spring break, etc.)','');
				$economicInfluenceIndexArray=array('1','2','3','4','5','6','7','8','9');
				$economicInfluence=str_replace($economicInfluenceIndexArray,$economicInfluenceStrArray,$economicInfluence);
				if($businessCustomerInfo['EconomicInfluenceOther'])
					if($economicInfluence)
						$economicInfluence .=','.$businessCustomerInfo['EconomicInfluenceOther'];
					else
						$economicInfluence =$businessCustomerInfo['EconomicInfluenceOther'];
				
				$businessCustomerInfo['EconomicInfluence']=$economicInfluence;
				#**********************************************************#
				
				
		#Design
				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				
				$doc->addParagraph('Estimate how many marketing targets are in your database ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['MarketingTargetsInDB']);
				
				$doc->addParagraph('Primary Customer -',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph('*********************************');
				
				$doc->addParagraph('Gender ::',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['SexMale'].'% Male',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['SexFeMale'].'% Female',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['SexUnknown'].'% Unknown',array('margin' => '20px'));
				
				$doc->addParagraph('Ethnicity ::',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['RaceWhite'].'% White',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['RaceBlack'].'% Black, African Am., Or Negro',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['RaceAmerican'].'% American Indian or Alaskan Native',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['RaceHispanic'].'% Hispanic, Latino, or Spanish origin',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['RaceAsian'].'% Asian, Chinese, Japanese, or Other asian',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['RaceHawaiian'].'% Hawaiian, Samoan, or Pacific Islander',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['RaceOther'].'% Other ',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['RaceUnknown'].'% Unknown',array('margin' => '20px'));

				$doc->addParagraph('Residence ::',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['ResidenceHomeowners'].'% Homeowners',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['ResidenceRenters'].'% Renters',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['ResidenceWithFamily'].'% Live with family',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['ResidenceVacationHome'].'% Vacation Home',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['ResidenceOthers'].'% Other ',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['ResidenceUnknown'].'% Unknown',array('margin' => '20px'));

				$doc->addParagraph('Education Level ::',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['EducationSchooling'].'% Unfinished Schooling',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['EducationSchoolGraduate'].'% High School Graduate or GED',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['EducationCollegeGraduate'].'% College Experience or Graduate',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['EducationMasters'].'% Masters, Doctorate',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['EducationUnknown'].'% Unknown',array('margin' => '20px'));

				$doc->addParagraph('Primary Language ::',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['PrimaryLangEnglish'].'% English',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['PrimaryLangSpanish'].'% Spanish',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['PrimaryLangOther'].'% Other ',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['PrimaryLangUnknown'].'% Unknown',array('margin' => '20px'));

				$doc->addParagraph('Primary Language ::',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['PrimaryLangEnglish'].'% English',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['PrimaryLangSpanish'].'% Spanish',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['PrimaryLangOther'].'% Other ',array('margin' => '20px'));
				$doc->addParagraph($businessCustomerInfo['PrimaryLangUnknown'].'% Unknown',array('margin' => '20px'));

				$doc->addParagraph('*********************************');
				

				$doc->addParagraph('What percentage of customers use coupons ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['CustUseCoupons'],array('margin' => '20px'));
				
				$doc->addParagraph('How far do customers travel to your shop(average) ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['CustTravelToShop'],array('margin' => '20px'));
				
				$doc->addParagraph('Please list your 3 common best periods (months) :',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['MonthFrequentCustomer'],array('margin' => '20px'));
				
				$doc->addParagraph('Please list your 3 common slow periods (months) :',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['MonthLessCustomer'],array('margin' => '20px'));
				
				$doc->addParagraph('Please list the services that you consider your best selling items :',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['ServiceCustBuyMost'],array('margin' => '20px'));
				
				$doc->addParagraph('How many new customer referrals do I get annually ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['CustReferrals'],array('margin' => '20px'));
				
				$doc->addParagraph('Please list your best 3 marketing / advertising initiatives :',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['AdvertisingSourceFromCust'],array('margin' => '20px'));
				
				
				$doc->addParagraph('What advertising sources are your new customers coming from ?',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['AdvertisingSourceFromNewCust'],array('margin' => '20px'));
				
				
				$doc->addParagraph('Are there any Economic factors that influence yoru area :',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($businessCustomerInfo['EconomicInfluence'],array('margin' => '20px'));

						
				
/********************************************************************************************************
							End of section belongs to the Step 10
*********************************************************************************************************/	


/********************************************************************************************************
							This section belongs to the Step 11
*********************************************************************************************************/		
		
			
		$servicesInfoarr = $usr->GetAllWhere("tbl_survey_services","UserId = '".$userId."'");
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
		

				
				if($servicesInfo['SurveyDocOutsourced'])
				{
					$doc->addParagraph("Survey Documents ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Outsourced",array('margin' => '20px'));
					
					$doc->addParagraph("Outsourced to whom ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($servicesInfo['SurveyDocOutsourceWhom'],array('margin' => '20px'));
				}
				else
				{
					$doc->addParagraph("Survey Documents ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("In House",array('margin' => '20px'));
				}

				if($servicesInfo['PhoneFollowUpOutsourced'])
				{
					$doc->addParagraph("Phone Call Follow Up ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Outsourced",array('margin' => '20px'));
					
					$doc->addParagraph("Outsourced to whom ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($servicesInfo['PhoneFollowUpOutsourceWhom'],array('margin' => '20px'));
				}
				else
				{
					$doc->addParagraph("Phone Call Follow Up ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("In House",array('margin' => '20px'));
				}


				if($servicesInfo['OnlineOutSoure'])
				{
					$doc->addParagraph("Online ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Outsourced",array('margin' => '20px'));
					
					$doc->addParagraph("Outsourced to whom ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($servicesInfo['OnlineOutsourceWhom'],array('margin' => '20px'));
				}
				else
				{
					$inhouseType=$servicesInfo['OnlineInhouseType'];
					$inhouseType=str_replace(array('1','2'),array('E-Mail','Website'),$inhouseType);
					
					$doc->addParagraph("Online ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("In House (".$inhouseType.")",array('margin' => '20px'));
					
				}
				
				if($servicesInfo['SendReminders'])
				{
					$doc->addParagraph("Do you send out Service Reminders ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
					
					$doc->addParagraph("Electronic/Mail ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($servicesInfo['radElectronic'],array('margin' => '20px'));
					
					if($servicesInfo['radOutsourced'])
					{
						$doc->addParagraph("InHouse/Outsouced ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph("Outsourced",array('margin' => '20px'));
						
						$doc->addParagraph("To Whom ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph($servicesInfo['SendRemindersOutsourceWhom'],array('margin' => '20px'));
					}
					else
					{
						$doc->addParagraph("InHouse/Outsouced ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph("Inhouse",array('margin' => '20px'));
					}	
				}
				else
				{
					$doc->addParagraph("Do you send out Service Reminders ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph(" No",array('margin' => '20px'));
					
				}
				
				
				if($servicesInfo['SendService'])
				{
					$doc->addParagraph("Do you send our Recommended Services?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
					
					$doc->addParagraph("Electronic/Mail ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($servicesInfo['radElectronicService'],array('margin' => '20px'));
					
					if($servicesInfo['radOutsourcedService'])
					{
						$doc->addParagraph("InHouse/Outsouced ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph("Outsourced",array('margin' => '20px'));
						
						$doc->addParagraph("To Whom ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph($servicesInfo['SendServiceOutsourceWhom'],array('margin' => '20px'));
					}
					else
					{
						$doc->addParagraph("InHouse/Outsouced ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph("Inhouse",array('margin' => '20px'));
					}	
				}
				else
				{
					$doc->addParagraph("Do you send our Recommended Services? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("No",array('margin' => '20px'));
					
				}
				
/********************************************************************************************************/



/********************************************************************************************************
							This section belongs to the Step 11
*********************************************************************************************************/		
		
		$marketingInfoarr = $usr->GetAllWhere("tbl_survey_marketing_elements","UserId = '".$userId."'");
		$marketingInfo=$marketingInfoarr[0];
		
		
		#**********************************************************#
		#Marketing Options
		$marketingOptions=$marketingInfo['MarketingOptions'];
		
		if($marketingInfo['MarketingOptionsOther'])
			$marketingOptions.=','.$marketingInfo['MarketingOptionsOther'];
		
		#**********************************************************#


		
		#**********************************************************#
		#Business Documents 
		$businessDocuments=$marketingInfo['BusinessDocuments'];
		$businessDocumentsStrArray=array('Business Cards','Letterhead','Fax Cover Sheets','Envelopes','Repair Orders','Invoices','Checks','Lube Stickers','');
		$businessDocumentsIndexArray=array('1','2','3','4','5','6','7','8','9');
		$businessDocuments=str_replace($businessDocumentsIndexArray,$businessDocumentsStrArray,$businessDocuments);
		
		$marketingInfo['BusinessDocuments']=$businessDocuments;
		#**********************************************************#

		#**********************************************************#
		#Staff 
		$staff=$marketingInfo['Staff'];
		$staffStrArray=array('Shirts ','Hats','Buttons','Cups / Coffee Mugs','Sweater','Coat ');
		$staffIndexArray=array('1','2','3','4','5','6');
		$staff=str_replace($staffIndexArray,$staffStrArray,$staff);
		
		$marketingInfo['Staff']=$staff;
		#**********************************************************#

		#**********************************************************#
		#Signage 
		$signage=$marketingInfo['Signage'];
		$signageStrArray=array('Menu Board ','Courtesy Vehicle / Parts Vehicle Signage','Wall Hangings');
		$signageIndexArray=array('1','2','3');
		$signage=str_replace($signageIndexArray,$signageStrArray,$signage);
		
		$marketingInfo['Signage']=$signage;
		#**********************************************************#
		
		#**********************************************************#
		#Multimedia 
		$multimedia=$marketingInfo['Multimedia'];
		$multimediaStrArray=array('Radio Advertising','Television Advertising','On Hold Messaging','Waiting Room Video Advertising','After Hours Messaging',"Unavailable Messaging (can't reach the phone)");
		$multimediaIndexArray=array('1','2','3','4','5','6');
		$multimedia=str_replace($multimediaIndexArray,$multimediaStrArray,$multimedia);
		
		$marketingInfo['Multimedia']=$multimedia;
		#**********************************************************#

		#**********************************************************#
		#Interactive 
		$interactive=$marketingInfo['Interactive'];
		$interactiveStrArray=array('Clinics ','Workshops');
		$interactiveIndexArray=array('1','2');
		$interactive=str_replace($interactiveIndexArray,$interactiveStrArray,$interactive);
		
		$marketingInfo['Interactive']=$interactive;
		#**********************************************************#

		#**********************************************************#
		#Online 
		$online=$marketingInfo['Online'];
		$onlineStrArray=array('Web Site ','E-Mail Newsletter','Search Engine Advertising');
		$onlineIndexArray=array('1','2','3');
		$online=str_replace($onlineIndexArray,$onlineStrArray,$online);
		
		$marketingInfo['Online']=$online;
		#**********************************************************#


		#**********************************************************#
		#Search Engine
		$searchEngine=$marketingInfo['SearchEngine'];
		$searchEngineStrArray=array('Google Adwords','Yahoo Search Marketing','MSN Adcenter','');
		$searchEngineIndexArray=array('1','2','3','4');
		$searchEngine=str_replace($searchEngineIndexArray,$searchEngineStrArray,$searchEngine);
		if($marketingInfo['SearchEngineOther'])
			if($searchEngine)
				$searchEngine .=','.$marketingInfo['SearchEngineOther'];
			else
				$searchEngine =$marketingInfo['SearchEngineOther'];
		
		$marketingInfo['SearchEngine']=$searchEngine;
		#**********************************************************#
		
		#**********************************************************#
		#Worksheets
		$worksheets=$marketingInfo['Worksheets'];
		$worksheetsStrArray=array('Car Seat','Driveability','Inspection','');
		$worksheetsIndexArray=array('1','2','3','4');
		$worksheets=str_replace($worksheetsIndexArray,$worksheetsStrArray,$worksheets);
		if($marketingInfo['WorksheetsOther'])
			if($worksheets)
				$worksheets .=','.$marketingInfo['WorksheetsOther'];
			else
				$worksheets =$marketingInfo['WorksheetsOther'];
		
		$marketingInfo['Worksheets']=$worksheets;
		#**********************************************************#
		

		#**********************************************************#
		#Brochures
		$brochures=$marketingInfo['Brochures'];
		$brochuresStrArray=array('Service Menu','Company Image','');
		$brochuresIndexArray=array('1','2','3');
		$brochures=str_replace($brochuresIndexArray,$brochuresStrArray,$brochures);
		if($marketingInfo['BrochuresOther'])
			if($brochures)
				$brochures .=','.$marketingInfo['BrochuresOther'];
			else
				$brochures =$marketingInfo['BrochuresOther'];
		
		$marketingInfo['Brochures']=$brochures;
		#**********************************************************#

		#**********************************************************#
		#Questionaire 
		$questionaire=$marketingInfo['Questionaire'];
		$questionaireStrArray=array('Diagnostic','Noise','Transmission','Heating / Cooling System','Driveability ');
		$questionaireIndexArray=array('1','2','3','4','5');
		$questionaire=str_replace($questionaireIndexArray,$questionaireStrArray,$questionaire);
		
		$marketingInfo['Questionaire']=$questionaire;
		#**********************************************************#


		#**********************************************************#
		#Off-Site Advertising 
		$offsiteAdv=$marketingInfo['OffSiteAdvertising'];
		$offsiteAdvStrArray=array('Billboard Advertising ','Theater Ads','Taxi Cab','Bus / Mass Transit Advertising','Sports Arena');
		$offsiteAdvIndexArray=array('1','2','3','4','5');
		$offsiteAdv=str_replace($offsiteAdvIndexArray,$offsiteAdvStrArray,$offsiteAdv);
		
		$marketingInfo['OffSiteAdvertising']=$offsiteAdv;
		#**********************************************************#


		#**********************************************************#
		#Published
		$published=$marketingInfo['Published'];
		$publishedStrArray=array('Classified Advertising','Newspaper Advertising','Yellow Page Advertising','Coupon Book Advertising','Val Pack Advertising');
		$publishedIndexArray=array('1','2','3','4','5');
		$published=str_replace($publishedIndexArray,$publishedStrArray,$published);
		
		$marketingInfo['Published']=$published;
		#**********************************************************#
		
		#**********************************************************#
		#Mailing
		$mailing=$marketingInfo['Mailing'];
		$mailingStrArray=array('Post Cards','Letters','Newsletters','Thank You Cards','Surveys');
		$mailingIndexArray=array('1','2','3','4','5');
		$mailing=str_replace($mailingIndexArray,$mailingStrArray,$mailing);
		
		$marketingInfo['Mailing']=$mailing;
		#**********************************************************#
		
		#**********************************************************#
		#InHand
		$inHand=$marketingInfo['InHand'];
		$inHandStrArray=array('Brochure','Glove Box Document','Gift Certificates','Punch Cards (Loyalty, Oil Change)','Customer Cards (VIP)','Bonus Bucks','Pens','Calendar','Refridgerator Magnet','Mouse Pad','Key Chain','New Customer Packette');

		$inHandIndexArray=explode(',',$inHand);
		
		$inHandString='';
		if($inHand)
		{
			foreach($inHandIndexArray as $index)
			{
				$inHandString .=$inHandStrArray[$index].',';
			}
			$inHandString =rtrim($inHandString,',');
		}	
		
		

		
		$marketingInfo['InHand']=$inHandString;
		#**********************************************************#

		#**********************************************************#
		#In/On Vehicle
		$in_onVehicle=$marketingInfo['InVehicle'];
		$in_onVehicleStrArray=array('Dash Placard ','License Plate Frame','Underhood Decal','Collectible Token','Mirror Hanger','Floor Mat','Audio Cassette / CD Program (thank you / service and results)');
		$in_onVehicleIndexArray=array('1','2','3','4','5','6','7');
		$in_onVehicle=str_replace($in_onVehicleIndexArray,$in_onVehicleStrArray,$in_onVehicle);
		
		$marketingInfo['InVehicle']=$in_onVehicle;
		#**********************************************************#

		#**********************************************************#
		#FleetPackette
		$fleetPackette=$marketingInfo['FleetPackette'];
		$fleetPacketteStrArray=array('Letter','Agreement','Concern Sheets');
		$fleetPacketteIndexArray=array('1','2','3');
		$fleetPackette=str_replace($fleetPacketteIndexArray,$fleetPacketteStrArray,$fleetPackette);
		
		$marketingInfo['FleetPackette']=$fleetPackette;
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
				
				$doc->addParagraph('Do you schedule next appointment dates when the customer is picking up their vehicle ?  ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['ScheduleAppointment'],array('margin' => '20px'));
				
				
				$doc->addParagraph('What elements do you have available to your business / customers branded with your companies identity? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph('-------------------------------------------------------------------------');
				$doc->addParagraph('Business Documents ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['BusinessDocuments'],array('margin' => '20px'));
				
				$doc->addParagraph('Staff ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['Staff'],array('margin' => '20px'));
				
				$doc->addParagraph('Signage / Display ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['Signage'],array('margin' => '20px'));
				
				$doc->addParagraph('Multimedia ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['Multimedia'],array('margin' => '20px'));
				
				$doc->addParagraph('Interactive ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['Interactive'],array('margin' => '20px'));
				
				$doc->addParagraph('Online ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['Online'],array('margin' => '20px'));
				
				$doc->addParagraph('Search Engine Advertising ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['SearchEngine'],array('margin' => '20px'));
				
				$doc->addParagraph('Forms :: ');
				$doc->addParagraph('--------------');
				$doc->addParagraph('Worksheets / Inspection Forms ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['Worksheets'],array('margin' => '20px'));
				
				$doc->addParagraph('Brochures ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['Brochures'],array('margin' => '20px'));
				
				$doc->addParagraph('Questionaire ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['Questionaire'],array('margin' => '20px'));
				
				$doc->addParagraph('Off-Site Advertising ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['OffSiteAdvertising'],array('margin' => '20px'));
				
				$doc->addParagraph('Published ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['Published'],array('margin' => '20px'));
				
				$doc->addParagraph('Mailing ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['Mailing'],array('margin' => '20px'));
				
				$doc->addParagraph('In Hand ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['InHand'],array('margin' => '20px'));
				
				if($marketingInfo['FleetDevelopment'])
				{
					$doc->addParagraph('Fleet Development ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph('Donut Delivery Boxes',array('margin' => '20px'));
				}	
				
				$doc->addParagraph('Fleet Packette ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingInfo['FleetPackette'],array('margin' => '20px'));

		
		
/********************************************************************************************************
							End of section belongs to the Step 13

*********************************************************************************************************/	


/********************************************************************************************************
							End of section belongs to the Step 14
*********************************************************************************************************/	


			$marketingLeadersDetailarr = $usr->GetAllWhere("tbl_survey_marketing_leaders","UserId = '".$userId."'");	
			$marketingLeadersProfile=$marketingLeadersDetailarr[0];

			#**********************************************************#
			#Offer
			$offer=$marketingLeadersProfile['OfferList'];
			$offerStrArray=array('Lifetime Oil Change Programs','Customer Referral Programs','2 for 1 Oil Change Programs','4 Seasons Program','Lube Sticker Refresh Program','Customer Loyalty Programs','Fleet Program');
			$offerIndexArray=array('1','2','3','4','5','6','7');
			$offer=str_replace($offerIndexArray,$offerStrArray,$offer);
			
			$marketingLeadersProfile['OfferList']=$offer;
			#**********************************************************#
				
			#**********************************************************#
			#Advertisement
			$adv=$marketingLeadersProfile['Advertisements'];
			$advStrArray=array('Back to School','Spring Break','Summer Break','Expiring Warranty','Bring in 5 year or older vehicle','Soon to expire warranty','Intro to local business','Tax Day','Christmas','Easter','Thanksgiving','4th of July',"Mother's Day","Father's Day");
			
				$advIndexArray=explode(',',$adv);
				
				$advString='';
				if($adv)
				{
					foreach($advIndexArray as $index)
					{
						$advString .=$advStrArray[$index].',';
					}
					
					$advString =rtrim($advString,',');
				}	


			$marketingLeadersProfile['Advertisements']=$advString;
			#**********************************************************#

			#**********************************************************#
			#Advertisement
			$mailers=$marketingLeadersProfile['Mailers'];
			$mailersStrArray=array('Back to School','Spring Break','Summer Break','Expiring Warranty','Bring in 5 year or older vehicle','Soon to expire warranty','Intro to local business','Tax Day','Christmas','Easter','Thanksgiving','4th of July',"Mother's Day","Father's Day");
			
				$mailersIndexArray=explode(',',$mailers);
				$mailersString='';
				if($mailers)
				{
					foreach($mailersIndexArray as $index)
					{
						$mailersString .=$mailersStrArray[$index].',';
					}
					
					$mailersString =rtrim($mailersString,',');
				}	


			$marketingLeadersProfile['Mailers']=$mailersString;
			#**********************************************************#

			#**********************************************************#
			#In Hand
			$inhand=$marketingLeadersProfile['InHand'];
			$inhandStrArray=array('Thank you','Taxi cab appreciation','Customer referral','Customer referral');
			$inhandIndexArray=array('1','2','3','4');
			$inhand=str_replace($inhandIndexArray,$inhandStrArray,$inhand);
			
			$marketingLeadersProfile['InHand']=$inhand;
			#**********************************************************#
				



				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				if($marketingLeadersProfile['PurchaseMailingList'])
				{
					$doc->addParagraph("Do you purchase Mailing Lists ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
					if($marketingLeadersProfile['PurchaseMailingOutsource'])
					{
						$doc->addParagraph("Self/Outsouced ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph("Outsourced",array('margin' => '20px'));
						
						$doc->addParagraph("To Whom ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph($marketingLeadersProfile['PurchaseMailingOutsourceWhom'],array('margin' => '20px'));
					}
					else
					{
						$doc->addParagraph("Self/Outsouced ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
						$doc->addParagraph("Self",array('margin' => '20px'));
					}	
				}
				else
				{
					$doc->addParagraph("Do you purchase Mailing Lists ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("No",array('margin' => '20px'));
					
				}
				
				
				$doc->addParagraph("Do you purchase lists for ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingLeadersProfile['PurchaseList'],array('margin' => '20px'));
				
				$doc->addParagraph("Do you offer any of the following? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingLeadersProfile['OfferList'],array('margin' => '20px'));
				
				$doc->addParagraph("What incentives do you use to bring in business, and what methods do you use with those",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph("---------------------------------------------------------	");
				$doc->addParagraph("Advertisements ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingLeadersProfile['Advertisements'],array('margin' => '20px'));
				
				$doc->addParagraph("Mailers ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingLeadersProfile['Mailers'],array('margin' => '20px'));
				
				$doc->addParagraph("---------------------------------------------------------	");
				
				$doc->addParagraph("Are there any other special incentives you use to bring in business - and how are they used (Advertisement / Mailer)? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingLeadersProfile['OtherSpecialIncentive'],array('margin' => '20px'));
				
				
				$doc->addParagraph("In Hand to get return business? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingLeadersProfile['InHand'],array('margin' => '20px'));
								
				if($marketingLeadersProfile['HaveOutSideSalesFleet'])
				{
					$doc->addParagraph("Do you have an outside Salesperson for fleet business ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
				}
				else
				{
					$doc->addParagraph("Do you have an outside Salesperson for fleet business ?",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("No",array('margin' => '20px'));
				}
				
				if($marketingLeadersProfile['HaveOutSideSalesOther'])
				{
					$doc->addParagraph("Do you have an outside salesperson for other business ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("Yes",array('margin' => '20px'));
					
					$doc->addParagraph("Details ?  ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph($marketingLeadersProfile['HaveOutSideSalesOtherDetail'],array('margin' => '20px'));
				}
				else
				{
					$doc->addParagraph("Do you have an outside salesperson for other business ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
					$doc->addParagraph("No",array('margin' => '20px'));
				}
				
				$doc->addParagraph("Check 4 words that best describe how you want to be perceived by your customers ? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingLeadersProfile['PerceivedCustomers'],array('margin' => '20px'));
				
				$doc->addParagraph("Anything else? ",array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($marketingLeadersProfile['PerceivedCustomersOther'],array('margin' => '20px'));
				
/********************************************************************************************************
							End of section belongs to the Step 14
*********************************************************************************************************/	

/********************************************************************************************************
							section belongs to the Step 15
*********************************************************************************************************/	

		$otherInfoarr = $usr->GetAllWhere("tbl_survey_other_info","UserId = '".$userId."'");
		$othersInfo=$otherInfoarr[0];
		
				$doc->addParagraph('');
				$doc->addParagraph('*******************************************************************************************');
				$doc->addParagraph('');
				
				$doc->addParagraph('Do you have any special tips or elements to be added to the site ? ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($othersInfo['SpecialTips'],array('margin' => '20px'));
				
				$doc->addParagraph('Do you have reports for google analytics, etc ?  ',array('padding-left' => '20px', 'color' => '#624428','font-weight' => 'bold'));
				$doc->addParagraph($othersInfo['ReportForGoogle'],array('margin' => '20px'));
				
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
							End of section belongs to the Step 15
*********************************************************************************************************/	

	$doc->output();
?>