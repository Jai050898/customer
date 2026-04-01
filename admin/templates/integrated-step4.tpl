{include file="header.tpl"}
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
			{include file="right-bar.tpl"}
			<div id="innerleft">
			  <div class="admin-rightpart">
					<div class="admin_topbgnav">
					  <div id="admin_bcrumb">
						  <ul>
							<li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
							<li><a href="{$siteurl}/admin/integrated-survey.php?user_id={$smarty.request.id}">Integrated survey</a></li>
							<li>Company Stuff Information</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Company Stuff Information</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" >
						  <tr>
							<td align="center" colspan="3">&nbsp;	</td>
						  </tr>
						  <tr>
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">Do you wish to have employees reflected in your site information ? <br /><span class="infoText">(If so, please include the following information for each)</span></td>
					<td width="16%" colspan="2">&nbsp;</td>
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
<b>Time with company :</b> {if $allEmployees[$smarty.section.empList.index].TimeWithCompany} {$allEmployees[$smarty.section.empList.index].TimeWithCompany}<br />{/if}</span></td>
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
							<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
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
					  <!--end of middle part -->
					  <!--end of right part -->
					  <div class="clr"></div>
					</div>
				<!--end of contentpane -->
			  </div>
			</div>
		</div>
	</div>
</div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
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
		queryString='act=del&EmpId='+id;
		sendRequest('ajaxExecutable/addEmployee.php',queryString,'listEmployee','Get');
		setTimeout("hideDiv()",4000);
	}
	
	function hideDiv()
	{
		document.getElementById("divVeil").style.display='none';
		document.getElementById("frmEmployee").reset();
		alert('Operation completed Successfully');
		//fethc all the employee using ajax
		sendRequest('ajaxExecutable/getEmployee.php','','listEmployee','Get');
		//End :Call the ajax stuff
		
	}
</script>
{/literal}