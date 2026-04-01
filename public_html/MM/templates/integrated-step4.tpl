{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			
			<div style="height:10px;"></div>
			<h1>Integrated Survey </h1>
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Company Stuff Information</u></h2>
				<div id="divVeil" style=" position:absolute ; top:100px; width:590px; filter:alpha(opacity=50); -moz-opacity: 0.5; opacity: 0.5; margin:0px auto; background-color:#BFBFBF; border:1px solid; min-height:400px; _height:400px; z-index:3; display:none; text-align:center " >
				<img src="images/ajax-loader.gif" border="0" alt="" style="position:absolute; top:150px; left:200px;" />
				 </div>
				<table width="100%" >
				  <tr>
					<td align="center" colspan="3">&nbsp;	</td>
				  </tr>
				  {if $Errormssage}
				  <tr>
					<td align="center" colspan="3"><span class="error">{$Errormssage}</span>																	</td>
				  </tr>
				  <tr>
					<td align="center" colspan="3">&nbsp;																	</td>
				  </tr>
				  {/if}
				  
				  <tr>
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">Do you wish to have employees reflected in your site information ? <br /><span class="infoText">(If so, please include the following information for each)</span></td>
					<td width="16%" colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td colspan="3" align="left" style="padding-left:10px">
						  <div style="border:#B5B5B5 1px solid; width:98%; margin:2px 0 7px 0;">
						  
						  <form name="frmEmployee" id="frmEmployee" method="post" class="fValidator-form" enctype="multipart/form-data" onsubmit="return validateForm();" target="iframeEmployee" action="ajax/addEmployee.php">
						  <input type="hidden" name="tbl" value="tbl_survey_employee" />
						  <table width="100%" border="0" bgcolor="#E5E5E5">
							  <tr>
								<td width="100%" colspan="2" align="center"><div style="text-align:center; margin:auto" id="submitMessage"></div></td>
							  </tr>
							  <tr>
								<td width="40%" align="right"> Name :</td>
								<td width="60%">&nbsp;<input type="text" name="EmpName" id="EmpName" maxlength="40" size="40" class="form"/></td>
							  </tr>
							  <tr>
								<td align="right">Photo :</td>
								<td>&nbsp;<input type="file" name="EmpPhoto" id="EmpPhoto" size="40" class="form"/></td>
							  </tr>
							  <tr>
								<td align="right" valign="top">Description :<br />
<span class="infoText">(something that tells about their skills/ talents / <br />history with co)</span></td>
								<td>&nbsp;<textarea name="EmpDescription" rows="3" cols="50" class="form">{$historyInfo.HowToIndustry}</textarea></td>
							  </tr>
							  <tr>
								<td align="right" valign="top">Certifications, specialize, awards, credentials :</td>
								<td>&nbsp;<textarea name="EmpCertifications" rows="3" cols="50" class="form">{$historyInfo.HowToIndustry}</textarea></td>
							  </tr>
							  <tr>
								<td align="right">How long with company ?</td>
								<td>&nbsp;<input type="text" name="TimeWithCompany" maxlength="40" size="40" class="form"></td>
							  </tr>
							  <tr>
								<td height="34" align="right">&nbsp;</td>
								<td><input type="button" name="btnAddEmploee" value="  Add Employee  "  class="buttonSmall" onclick="return validateForm()"></td>
							</tr>
						  </table>
						  <iframe name="iframeEmployee" src="" width="400" height="100" style="display:none"> </iframe>
						  </form>
						  </div>
			</td>
				  </tr>
				  <tr>
					<td colspan="3" align="left" style="padding-left:10px">
					  <div id="listEmployee">	 
						 {if $allEmployees|@count gt 0}
							Employees added : 
							{section name='empList' loop=$allEmployees}
							  <div style="border:{cycle values="#EAE5AF,#D4D3CA"} 1px solid; width:98%; margin:2px 0 7px 0;">
							  <table width="100%" border="0" bgcolor="{cycle values="#F9F8EC,#F0F0EA"}">
								  <tr>
									<td width="130px" align="left" valign="middle">
									 {if $allEmployees[$smarty.section.empList.index].EmpPhoto}
										<img src="{$siteurl}/photos/thumbnails/{$allEmployees[$smarty.section.empList.index].EmpPhoto}" alt="" />
									 {else}
										<img src="images/noimage.gif" alt="" />
									 {/if}
									 </td>
									<td valign="top" style="padding-left:10px;"><span class="infoText"><b>Name :</b> {$allEmployees[$smarty.section.empList.index].EmpName}<br />
<b>Description :</b> {if $allEmployees[$smarty.section.empList.index].EmpDescription} {$allEmployees[$smarty.section.empList.index].EmpDescription|nl2br}<br />{/if}
<b>Certification :</b> {if $allEmployees[$smarty.section.empList.index].EmpCertifications} {$allEmployees[$smarty.section.empList.index].EmpCertifications|nl2br}<br />{/if}
<b>Time with company :</b> {if $allEmployees[$smarty.section.empList.index].TimeWithCompany} {$allEmployees[$smarty.section.empList.index].TimeWithCompany}<br />{/if}</span>
<a href='javascript:deleteEmpoyee("{$allEmployees[$smarty.section.empList.index].EmpId}")' class="smallLink">Delete Employee</a></td>
								  </tr>
							  </table>
							  </div>
							{/section}
						  {/if}
						 </div> 
			</td>
				  </tr>
				<tr>
					<td align="center" colspan="3">
				<form name="frmStuff" id="frmStuff" method="post" class="fValidator-form">
				<table width="100%" border="0" cellspacing="1" cellpadding="5">
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you wish to use the site for employment recruiting ?	&nbsp;													<select name="UseForEmpRecruiting" class="form">
								  {html_options options=$arrayYesNo selected=$stuffDetail.UseForEmpRecruiting}
								</select>	

					
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What job positions are currently available ?<br />

					<textarea name="CurrentJobs" rows="3" cols="50" class="form">{$stuffDetail.CurrentJobs}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">How many technicians do you have ?<br />

					<input type="text" name="TechnicianNumber" id="TechnicianNumber" maxlength="15" size="20" class="form" value="{$stuffDetail.TechnicianNumber}"/>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What is your labor rate ?<br />

					<input type="text" name="LaborRate" id="LaborRate" maxlength="15" size="20" class="form" value="{$stuffDetail.LaborRate}"/>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  
				  
				  <tr>
					<td align="center" colspan="3">
					<input type="hidden" name="isNew" value="{$isNew}" >		
					<input type="submit" name="btnSubmit" value="  Submit  " >								</td>
				  </tr>
				  <tr>
					<td align="center" colspan="3">&nbsp;																	</td>
				  </tr>
				 
				</table>
				</form>
				</td>
				 </tr>																 
			  </table>
			</div>
			
			
		<div class="clear"></div>
		
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/common.js"></script>	
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax1.js"></script>		
{literal}
	<script language="javascript">
	function calHeight()
	{
		if (parseInt(navigator.appVersion)>3) {
		 if (navigator.appName=="Netscape") {
		  winW = window.innerWidth;
		  winH = window.innerHeight;
		 }
		 if (navigator.appName.indexOf("Microsoft")!=-1) {
		  winW = document.body.offsetWidth;
		  winH = document.body.offsetHeight;
		 }
		}
		return 	winH;
	}
	
	var newHeight=530;	
	/*newHeight=newHeight-280;*/

	function validateForm()
	{
		if(trimSpace(document.frmEmployee.EmpName.value)=='')
		{
			alert("Employee Name can't be empty");
			document.frmEmployee.EmpName.focus();
			return false;
		}
		else if(trimSpace(document.frmEmployee.EmpDescription.value)=='')
		{
			alert("Please tell me something about the empoyee");
			document.frmEmployee.EmpDescription.focus();
			return false;
		}
		else if(trimSpace(document.frmEmployee.TimeWithCompany.value)=='')
		{
			alert("Please tell me how long the employee is with your company.");
			document.frmEmployee.TimeWithCompany.focus();
			return false;
		}
		else
		{
			document.getElementById("divVeil").style.height=newHeight+'px';
			document.getElementById("divVeil").style.display='block';
			
			document.getElementById("frmEmployee").submit();
			setTimeout("hideDiv()",4000);
			
		}
		
	}
	
	function deleteEmpoyee(id)
	{
		document.getElementById("divVeil").style.height=newHeight+'px';
		document.getElementById("divVeil").style.display='block';
		queryString='act=del&tbl=tbl_survey_employee&EmpId='+id;
		sendRequest('ajax/addEmployee.php',queryString,'listEmployee','Get');
		setTimeout("hideDiv()",4000);
	}
	
	function hideDiv()
	{
		document.getElementById("divVeil").style.display='none';
		document.getElementById("frmEmployee").reset();
		alert('Operation completed Successfully');
		//fethc all the employee using ajax
		queryString='tbl=tbl_survey_employee';
		sendRequest('ajax/getEmployee.php',queryString,'listEmployee','Get');
		//End :Call the ajax stuff
		
	}
	</script>
{/literal}