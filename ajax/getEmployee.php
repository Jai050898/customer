<?php
require_once("../includes/application_start.php");
$usr 		= new General;
$tbl = $_REQUEST['tbl'];
$allEmployeesarr = $usr->GetAllWhere($tbl,"UserId = '".$_SESSION['User']['UID']."'");
$allEmployees=$allEmployeesarr;

if(is_array($allEmployees) && !empty($allEmployees))

{

	?>

	Employees added :

	<?

	foreach($allEmployees as $employee)

	{	

		$bordecolor=($bordecolor=='#EAE5AF')?'#D4D3CA':'#EAE5AF';

		$bgcolor=($bgcolor=='#F9F8EC')?'#F0F0EA':'#F9F8EC';

		

		?>

			<div style="border:<?=$bordecolor?> 1px solid; width:98%; margin:2px 0 7px 0;">

			  <table width="100%" border="0" bgcolor="<?=$bgcolor?>">

				  <tr>

					<td width="130px" align="left" valign="middle" >

					 <?

					 if($employee['EmpPhoto'])

					 {

					 ?>

						<img src="<?php echo SITEURL;?>/photos/thumbnails/<?=$employee['EmpPhoto']?>" alt="" />

					 <?

					 }

					 else

					 {

					 ?>

						<img src="images/noimage.gif" alt="" />

					 <?

					 }

					 ?>

					 </td>

					<td valign="top" style="padding-left:10px;"><span class="infoText"><b>Name :</b> <?=$employee['EmpName']?><br />

					<b>Description :</b> <?=(($employee['EmpDescription'])?nl2br($employee['EmpDescription']).'<br>':'')?>

					<b>Certification :</b> <?=(($employee['EmpCertifications'])?nl2br($employee['EmpCertifications']).'<br>':'')?>

					<b>Time with company :</b> <?=(($employee['TimeWithCompany'])?$employee['TimeWithCompany'].'<br>':'')?></span>

					<a href='javascript:deleteEmpoyee("<?=$employee['EmpId']?>")'>Delete Employee</a></td>

				  </tr>

			  </table>

			  </div>		

		<?

	}	



}





?>