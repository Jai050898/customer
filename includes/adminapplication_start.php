<?php
ob_start();
session_start();
error_reporting(E_ALL^E_NOTICE);
ini_set("display_errors", "On");
//echo getcwd();exit;
/*********** Defining the Constants for the Whole Site **********/
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
    $http = "https://";
else
    $http = "http://";

$root = $_SERVER['DOCUMENT_ROOT'];

// ✅ PHP 5.6 Compatible
$siteUrl = getenv('SITEURL') ? getenv('SITEURL') : ($http . (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost'));
$mainSiteUrl = getenv('MAINSITEURL') ? getenv('MAINSITEURL') : ($http . (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost'));

// ✅ These were MISSING — added now!
define('SITEPATH', '/var/www/html');
define('SITEURL', rtrim($siteUrl, '/'));
define('MAINSITEURL', rtrim($mainSiteUrl, '/'));

//require_once("recaptchalib.php");
define('SITENAME','programmer');
define('SITETITLE','.:Motorhead Marketing:.');
define('FROM','support@motorheadmarketing.com');
define('ADMINMAIL','programmer@motorheadmarketing.com');
require(SITEPATH.'/libs/Smarty.class.php');
require_once(SITEPATH."/class/dbsettingsforonlinepay.php");
require_once(SITEPATH."/class/db_class.php");
require_once(SITEPATH."/class/general_class.php");
$Gen = new General;
$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->assign('sitetitle',SITETITLE);
$smarty->assign('siteurl',SITEURL);
$smarty->assign('site_path',SITEPATH);

$arrayYesNo=array('1'=>'Yes', '0'=>'No');
$smarty->assign('arrayYesNo',$arrayYesNo);

$arrayYesNo1=array('Yes'=>'Yes', 'No'=>'No');
$smarty->assign('arrayYesNo1',$arrayYesNo1);

$garageMangeMentStrArray=array('Garage Operator','Genesis Four - Service 2000','Mitchell-1','NAPA TRACS','RO Writer','TRIAD','Wrenchead Pro','Other');
$garageMangeMentIndexArray=array('1','2','3','4','5','6','7','8');
$smarty->assign('garageMangeMentStrArray',$garageMangeMentStrArray);
$smarty->assign('garageMangeMentIndexArray',$garageMangeMentIndexArray);
$marketSegmentStrArray=array('Domestic Vehicles (Ford, Chevrolet, etc.)','Foreign Vehicles (BMW, Mercedes, etc.)','Asian (Toyota, Honda, etc.)','Other');
$marketSegmentIndexArray=array('1','2','3','4');
$smarty->assign('marketSegmentStrArray',$marketSegmentStrArray);
$smarty->assign('marketSegmentIndexArray',$marketSegmentIndexArray);
$fuellSourceStrArray=array('Gas','Diesel','Alternative Fuels','Hybrid','Other');
$fuellSourceIndexArray=array('1','2','3','4','5');
$smarty->assign('fuellSourceStrArray',$fuellSourceStrArray);
$smarty->assign('fuellSourceIndexArray',$fuellSourceIndexArray);
$colorArray=array('Blue','Red','Green','Yellow','White','Black');
$smarty->assign('colorArray',$colorArray);
$oilCompaniesStrArray=array('BP','Chevron','Shell','Texaco','Other');
$oilCompaniesIndexArray=array('1','2','3','4','5');
$smarty->assign('oilCompaniesStrArray',$oilCompaniesStrArray);
$smarty->assign('oilCompaniesIndexArray',$oilCompaniesIndexArray);
$tyreCompaniesStrArray=array('Firestone','Goodyear','Other');
$tyreCompaniesIndexArray=array('1','2','3');
$smarty->assign('tyreCompaniesStrArray',$tyreCompaniesStrArray);
$smarty->assign('tyreCompaniesIndexArray',$tyreCompaniesIndexArray);
$franchiseStrArray=array('Midas','Other');
$franchiseIndexArray=array('1','2');
$smarty->assign('franchiseStrArray',$franchiseStrArray);
$smarty->assign('franchiseIndexArray',$franchiseIndexArray);
$bannerProgramsStrArray=array('ACDelco - Tech Connect','All Pro / Auto Value / Bumper to Bumper','CarQuest - Federated Auto Parts','NAPA - AutoCare','Parts Plus - Car Care Center','Other');
$bannerProgramsIndexArray=array('1','2','3','4','5','6');
$smarty->assign('bannerProgramsStrArray',$bannerProgramsStrArray);
$smarty->assign('bannerProgramsIndexArray',$bannerProgramsIndexArray);
$othersStrArray=array('Interstate Batteries','Jasper Engines and Transmissions','Other');
$othersIndexArray=array('1','2','3');
$smarty->assign('othersStrArray',$othersStrArray);
$smarty->assign('othersIndexArray',$othersIndexArray);
$industryStrArray=array('Alliance of Automotive Service Providers - National','Alliance of Automotive Service Providers - Local','Automotive Service Excellence','Automotive Service Association - National','Automotive Service Association - Local','Service Specialists Association','Other');

$industryIndexArray=array('1','2','3','4','5','6','7');
$smarty->assign('industryStrArray',$industryStrArray);
$smarty->assign('industryIndexArray',$industryIndexArray);
$generalBusinessStrArray=array('AAA','Business Network International','Better Business Bureau','Other');
$generalBusinessIndexArray=array('1','2','3','4');
$smarty->assign('generalBusinessStrArray',$generalBusinessStrArray);
$smarty->assign('generalBusinessIndexArray',$generalBusinessIndexArray);

$specialWorkStrArray=array('RV Repair','Brakes','Honest Repair','Hybrid Servicing','State Authorized Center','Alternative Fuels','Other');
$specialWorkIndexArray=array('1','2','3','4','5','6','7');
$smarty->assign('specialWorkStrArray',$specialWorkStrArray);
$smarty->assign('specialWorkIndexArray',$specialWorkIndexArray);


$competiveAdvantagesStrArray1=array('24 Hour Tow Service','AAA Aproved Repair Facility','Accept Competitor Coupons','Accept Extended Warranties','ASE Master Technicians','Cell Phone Loaner (for instant contact / progress / approvals)');
$competiveAdvantagesIndexArray1=array('1','2','3','4','5','6');
$smarty->assign('competiveAdvantagesStrArray1',$competiveAdvantagesStrArray1);
$smarty->assign('competiveAdvantagesIndexArray1',$competiveAdvantagesIndexArray1);

$competiveAdvantagesStrArray2=array('Complimentary Vehicle Wash','Computer Repair Order System / Records History keeping','Computerized Recall and technical service bulletins','Deliver Vehciles (as part of regular business services)','Pickup Vehicles (as part of regular business services)','Early Bird / Nite Drop Off Service','E-Mail notification of progress','Environmental Protection Program (involved / part of)','Extended Hours / Days','Free Loaner Vehicles','Honor Manufacturer Warranties','Low Cost Rental Cars','OE Parts Available','Overnight Repair Services','Pager Loan (for instant contact / progress / approvals)','Quick Lube Service','Sell Vehicles');
for($count=8; $count<25;$count++)
{
	$competiveAdvantagesIndexArray2[]=$count;
}
$smarty->assign('competiveAdvantagesStrArray2',$competiveAdvantagesStrArray2);
$smarty->assign('competiveAdvantagesIndexArray2',$competiveAdvantagesIndexArray2);

$competiveAdvantagesStrArray3=array('Childrens Area','Coloring books, toys, games','Business Space','Courtesy Phone','Fax Machine Access','Internet Access','Television','Complimentary Newspaper');
for($count=27; $count<35;$count++)
{
	$competiveAdvantagesIndexArray3[]=$count;
}
$smarty->assign('competiveAdvantagesStrArray3',$competiveAdvantagesStrArray3);
$smarty->assign('competiveAdvantagesIndexArray3',$competiveAdvantagesIndexArray3);

$competiveAdvantagesStrArray4=array('Bottled Water','Coffee','Tea','Other');
for($count=36; $count<40;$count++)
{
	$competiveAdvantagesIndexArray4[]=$count;
}
$smarty->assign('competiveAdvantagesStrArray4',$competiveAdvantagesStrArray4);
$smarty->assign('competiveAdvantagesIndexArray4',$competiveAdvantagesIndexArray4);

$competiveAdvantagesStrArray5=array('Diaper Changing Station','HVAC Controlled environment (winter heating / summer cooling)','Noise controlled environment (prevent customers from hearing shop noise)','Spotless Restrooms');
for($count=40; $count<44;$count++)
{
	$competiveAdvantagesIndexArray5[]=$count;
}
$smarty->assign('competiveAdvantagesStrArray5',$competiveAdvantagesStrArray5);
$smarty->assign('competiveAdvantagesIndexArray5',$competiveAdvantagesIndexArray5);




$paymentProgramsStrArray=array('American Express','Car Care One Card','Mastercard ','Visa','Other');
$paymentProgramIndexArray=array('2','3','4','5','6');
$smarty->assign('paymentProgramsStrArray',$paymentProgramsStrArray);
$smarty->assign('paymentProgramIndexArray',$paymentProgramIndexArray);

$specialDiscountsStrArray=array('AAA Discounts','Merchant Discounts','Senior Discounts','Student Discounts',"Veteran's Discount",'Other');
$specialDiscountsIndexArray=array('1','2','3','4','5','6');
$smarty->assign('specialDiscountsStrArray',$specialDiscountsStrArray);
$smarty->assign('specialDiscountsIndexArray',$specialDiscountsIndexArray);

$warrantyStrArray=array('No','12 month / 12,000 mile','24 month / 24,000 mile','36 month / 36,000 mile','Other');
$warrantyIndexArray=array('1','2','3','4','5');
$smarty->assign('warrantyStrArray',$warrantyStrArray);
$smarty->assign('warrantyIndexArray',$warrantyIndexArray);


$monthArray=array("January","February","March","April","May","June","July","August","September","October","November","December");
$smarty->assign('monthArray',$monthArray);

$serviceArray=array("Air Conditioning","Brake Service and Repair","Cooling / Heating","Electrical Systems","Engine Repair");
$smarty->assign('serviceArray',$serviceArray);


$economicInfluenceStrArray=array('Apartment Complexes','Housing Developments','Large Store / Other Commercial Development','Large Industry','Major Public Works / Government Institutions','Military Base or Government Center','Large School Campus (College)','Seasonal Market (snow birds, spring break, etc.)','Other');
$economicInfluenceIndexArray=array('1','2','3','4','5','6','7','8','9');
$smarty->assign('economicInfluenceStrArray',$economicInfluenceStrArray);
$smarty->assign('economicInfluenceIndexArray',$economicInfluenceIndexArray);




$businessDocumentsStrArray=array('Business Cards','Letterhead','Fax Cover Sheets','Envelopes','Repair Orders','Invoices','Checks','Lube Stickers');
$businessDocumentsIndexArray=array('1','2','3','4','5','6','7','8');
$smarty->assign('businessDocumentsStrArray',$businessDocumentsStrArray);
$smarty->assign('businessDocumentsIndexArray',$businessDocumentsIndexArray);

$staffStrArray=array('Shirts ','Hats','Buttons','Cups / Coffee Mugs','Sweater','Coat');
$staffIndexArray=array('1','2','3','4','5','6');
$smarty->assign('staffStrArray',$staffStrArray);
$smarty->assign('staffIndexArray',$staffIndexArray);

$signageStrArray=array('Menu Board ','Courtesy Vehicle / Parts Vehicle Signage','Wall Hangings');
$signageIndexArray=array('1','2','3');
$smarty->assign('signageStrArray',$signageStrArray);
$smarty->assign('signageIndexArray',$signageIndexArray);

$multimediaStrArray=array('Radio Advertising','Television Advertising','On Hold Messaging','Waiting Room Video Advertising','After Hours Messaging',"Unavailable Messaging (can't reach the phone)");
$multimediaIndexArray=array('1','2','3','4','5','6');
$smarty->assign('multimediaStrArray',$multimediaStrArray);
$smarty->assign('multimediaIndexArray',$multimediaIndexArray);

$interactiveStrArray=array('Clinics ','Workshops');
$interactiveIndexArray=array('1','2');
$smarty->assign('interactiveStrArray',$interactiveStrArray);
$smarty->assign('interactiveIndexArray',$interactiveIndexArray);


$onlineStrArray=array('Web Site ','E-Mail Newsletter','Search Engine Advertising');
$onlineIndexArray=array('1','2','3');
$smarty->assign('onlineStrArray',$onlineStrArray);
$smarty->assign('onlineIndexArray',$onlineIndexArray);

$searchEngineStrArray=array('Google Adwords','Yahoo Search Marketing','MSN Adcenter','Other');
$searchEngineIndexArray=array('1','2','3','4');
$smarty->assign('searchEngineStrArray',$searchEngineStrArray);
$smarty->assign('searchEngineIndexArray',$searchEngineIndexArray);

$worksheetsStrArray=array('Car Seat','Driveability','Inspection','Other');
$worksheetsIndexArray=array('1','2','3','4');
$smarty->assign('worksheetsStrArray',$worksheetsStrArray);
$smarty->assign('worksheetsIndexArray',$worksheetsIndexArray);

$brochuresStrArray=array('Service Menu','Company Image','Other');
$brochuresIndexArray=array('1','2','3');
$smarty->assign('brochuresStrArray',$brochuresStrArray);
$smarty->assign('brochuresIndexArray',$brochuresIndexArray);

$questionaireStrArray=array('Diagnostic','Noise','Transmission','Heating / Cooling System','Driveability ');
$questionaireIndexArray=array('1','2','3','4','5');
$smarty->assign('questionaireStrArray',$questionaireStrArray);
$smarty->assign('questionaireIndexArray',$questionaireIndexArray);

$offsiteAdvStrArray=array('Billboard Advertising ','Theater Ads','Taxi Cab','Bus / Mass Transit Advertising','Sports Arena');
$offsiteAdvIndexArray=array('1','2','3','4','5');
$smarty->assign('offsiteAdvStrArray',$offsiteAdvStrArray);
$smarty->assign('offsiteAdvIndexArray',$offsiteAdvIndexArray);

$publishedStrArray=array('Classified Advertising','Newspaper Advertising','Yellow Page Advertising','Coupon Book Advertising','Val Pack Advertising');
$publishedIndexArray=array('1','2','3','4','5');
$smarty->assign('publishedStrArray',$publishedStrArray);
$smarty->assign('publishedIndexArray',$publishedIndexArray);

$mailingStrArray=array('Post Cards','Letters','Newsletters','Thank You Cards','Surveys');
$mailingIndexArray=array('1','2','3','4','5');
$smarty->assign('mailingStrArray',$mailingStrArray);
$smarty->assign('mailingIndexArray',$mailingIndexArray);

$in_onVehicleStrArray=array('Dash Placard ','License Plate Frame','Underhood Decal','Collectible Token','Mirror Hanger','Floor Mat','Audio Cassette / CD Program (thank you / service and results)');
$in_onVehicleIndexArray=array('1','2','3','4','5','6','7');
$smarty->assign('in_onVehicleStrArray',$in_onVehicleStrArray);
$smarty->assign('in_onVehicleIndexArray',$in_onVehicleIndexArray);

$fleetPacketteStrArray=array('Letter','Agreement','Concern Sheets');
$fleetPacketteIndexArray=array('1','2','3');
$smarty->assign('fleetPacketteStrArray',$fleetPacketteStrArray);
$smarty->assign('fleetPacketteIndexArray',$fleetPacketteIndexArray);

$inHandStrArray=array('Brochure','Glove Box Document','Gift Certificates','Punch Cards (Loyalty, Oil Change)','Customer Cards (VIP)','Bonus Bucks','Pens','Calendar','Refridgerator Magnet','Mouse Pad','Key Chain','New Customer Packette');
$inHandIndexArray=array('1','2','3','4','5','6','7','8','9','10','11','12');
$smarty->assign('inHandStrArray',$inHandStrArray);
$smarty->assign('inHandIndexArray',$inHandIndexArray);

$advStrArray=array('Back to School','Spring Break','Summer Break','Expiring Warranty','Bring in 5 year or older vehicle','Soon to expire warranty','Intro to local business','Tax Day','Christmas','Easter','Thanksgiving','4th of July',"Mother's Day","Father's Day");
$advIndexArray=array('1','2','3','4','5','6','7','8','9','10','11','12','13','14');
$smarty->assign('advIndexArray',$advIndexArray);
$smarty->assign('advStrArray',$advStrArray);

$offerStrArray=array('Lifetime Oil Change Programs','Customer Referral Programs','2 for 1 Oil Change Programs','4 Seasons Program','Lube Sticker Refresh Program','Customer Loyalty Programs','Fleet Program');
$offerIndexArray=array('1','2','3','4','5','6','7');
$smarty->assign('offerStrArray',$offerStrArray);
$smarty->assign('offerIndexArray',$offerIndexArray);

$purchaseStrArray=array('New Homeowners','New Vehicle Registrations','Other');
$purchaseIndexArray=array('1','2','3');
$smarty->assign('purchaseStrArray',$purchaseStrArray);
$smarty->assign('purchaseIndexArray',$purchaseIndexArray);

$perceivedCustomersArray=array('affluent','budget-concious','caring','casual','contemporary','cutting-edge','elite','folksy','formal','friendly','fun','futuristic',"graceful","high-enegy",'high-tech','mellow','official','old-fashioned','patriotic','practical','quiet/peaceful','regal','romantic','sassy','scientific','solid/reliable',"speedy","sporty/active",'strong','understated','visionary','vibrant','warm','whacky','wild','Other ');
$smarty->assign('perceivedCustomersArray',$perceivedCustomersArray);

$arrayAmPm=array('AM'=>'AM', 'PM'=>'PM');
$smarty->assign('arrayAmPm',$arrayAmPm);

$inOutHouseArray=array('0'=>'In House', '1'=>'Outsourced');
$smarty->assign('inOutHouseArray',$inOutHouseArray);

$selfOutHouseArray=array('0'=>'Self', '1'=>'Outsourced');
$smarty->assign('selfOutHouseArray',$selfOutHouseArray);

$OnlineInhouseTypeArr=array("1"=>'E-Mail',"2"=>'Website');
$smarty->assign('OnlineInhouseTypeArr',$OnlineInhouseTypeArr);

$SendRemindersArr=array("0"=>'Electronic',"1"=>'Mail');
$smarty->assign('SendRemindersArr',$SendRemindersArr);


$inhandStrArray2=array('Thank you','Taxi cab appreciation','Customer referral','Customer referral');
$inhandIndexArray2=array('1','2','3','4');
$smarty->assign('inhandStrArray2',$inhandStrArray2);
$smarty->assign('inhandIndexArray2',$inhandIndexArray2);

$specialEvents=array("Fund Raisers"=>"Fund Raisers","Customer Appreciation Days"=>"Customer Appreciation Days","Other"=>"Other");
$smarty->assign('specialEvents',$specialEvents);

$communityActivities=array(
				"Churches"=>"Churches",
				"School Program"=>"School Program",
				"Community Athletics"=>"Community Athletics",
				"Charities"=>"Charities",
				"Food Banks"=>"Food Banks",
				"Local Events"=>"Local Events",
				"Holiday Stuff"=>"Holiday Stuff",
				"Scouts"=>"Scouts",
				"Other"=>"Other"
				);
$smarty->assign('communityActivities',$communityActivities);

$specialPackages=array("Lifetime Oil Change agreements"=>"Lifetime Oil Change agreements","Service Reminder Program"=>"Service Reminder Program","2 for 1 programs"=>"2 for 1 programs","Other"=>"Other");
$smarty->assign('specialPackages',$specialPackages);

$fleetServices=array("Concern Sheets"=>"Concern Sheets","Pickup / drop-off vehicles"=>"Pickup / drop-off vehicles","Handle Other items"=>"Handle Other items","Other"=>"Other");
$smarty->assign('fleetServices',$fleetServices);

$competitiveAdvantages=array(
				"Student discounts"=>"Student discounts",
				"Senior discounts"=>"Senior discounts",
				"AAA discounts"=>"AAA discounts",
				"Early bird / night drop off"=>"Early bird / night drop off",
				"Specialty tools"=>"Specialty tools",
				"Low cost rentals"=>"Low cost rentals",
				"Free loaner vehicles"=>"Free loaner vehicles",
				"Complimentary vehicle wash"=>"Complimentary vehicle wash",
				"Preferred customer discounts"=>"Preferred customer discounts",
				"Lifetime oil change agreements"=>"Lifetime oil change agreements",
				"pager/cell"=>"Pager / cell phones for customer notification",
				"24 hour towing"=>"24 hour towing",
				"Nationwide warranty"=>"Nationwide warranty",
				"Spotless restrooms"=>"Spotless restrooms"
				);
$smarty->assign('competitiveAdvantages',$competitiveAdvantages);

$competitiveAdvantagesWR=array(
				"Courtesy phone"=>"Courtesy phone",
				"Childrens waiting area"=>"Childrens waiting area(toys, coloring books, etc.) ",
				"Business space"=>"Business space",
				"Internet connection"=>"Internet connection"
				);
$smarty->assign('competitiveAdvantagesWR',$competitiveAdvantagesWR);

$marketingOptions=array(
				"Printed Newsletters"=>"Printed Newsletters",
				"Thank you cards"=>"Thank you cards",
				"BusinessServies Brochures"=>"Business / Servies Brochures",
				"Lube Stickers"=>"Lube Stickers",
				"Radio Advertisements"=>"Radio Advertisements",
				"TV Advertisements"=>"TV Advertisements",
				"Classified Advertisements"=>"Classified Advertisements",
				"Yellow Page Advertisements"=>"Yellow Page Advertisements",
				"Coupon Book Advertisements"=>"Coupon Book Advertisements",
				"Val Pack Advertisements"=>"Val Pack Advertisements",
				"Direct mail Postcards "=>"Direct mail Postcards ",
				"New Customer Packets"=>"New Customer Packets",
				"Punch Cards"=>"Punch Cards",
				"Litter Bags"=>"Litter Bags",
				"Mirror Hangers"=>"Mirror Hangers",
				"Rifridgerator Magnets"=>"Rifridgerator Magnets",
				"Customer Satisfaction Surveys"=>"Customer Satisfaction Surveys",
				"Other"=>"Other",
				);
$smarty->assign('marketingOptions',$marketingOptions);

$arrayMultimediaMarketing=array('TV'=>'TV', 'Radio'=>'Radio');
$smarty->assign('arrayMultimediaMarketing',$arrayMultimediaMarketing);

$companyStyles=array(
				"Classic"=>"Classic",
				"Comtemporary"=>"Comtemporary",
				"Glossy"=>"Glossy",
				"Rugged"=>"Rugged",
				"Trendy"=>"Trendy",
				"Sporty"=>"Sporty",
				"Luxurious"=>"Luxurious",
				"Dark"=>"Dark",
				"Bright"=>"Bright",
				"Retro"=>"Retro",
				"Furturistic"=>"Furturistic",
				"Minimal"=>"Minimal",
				"Collage"=>"Collage",
				"Ornamental"=>"Ornamental",
				"Boxy"=>"Boxy",
				"Dynamic"=>"Dynamic",
				"Flashy"=>"Flashy",
				);
$smarty->assign('companyStyles',$companyStyles);

$fontList=array(
				"Serif Fonts"=>"Serif Fonts (times New Roman)",
				"Sans-serif"=>"Sans-serif Fonts (Arial)",
				"Not sure"=>"Not sure"
				);
$smarty->assign('fontList',$fontList);
?>
