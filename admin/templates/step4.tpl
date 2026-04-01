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
							<li><a href="{$siteurl}/admin/marketing-survey.php?user_id={$smarty.request.id}">Marketing survey</a></li>
							<li>Customer Profile</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Customer Profile</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmStepFour" id="frmStepFour" method="post" enctype="multipart/form-data" class="fValidator-form" onsubmit="return validateForm()">
							<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
							  <tr>
								<td align="center" colspan="3">&nbsp;																	</td>
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
								<td width="88%" align="left" valign="middle" style="padding-bottom:10px">Estimate how many marketing targets are in your database ? 
								<input type="text" name="MarketingTargetsInDB" id="MarketingTargetsInDB" maxlength="50" size="40" class="form" value="{$businessCustomerDetail.MarketingTargetsInDB}" onKeyUp="return valid_number(this)"/></td>
								<td width="12%" colspan="2">&nbsp;</td>
							  </tr>
							  <tr>
								<td width="88%" align="left" valign="middle" style="padding-bottom:10px"><b>Primary Customer -</b> </td>
								<td width="12%" colspan="2">&nbsp;</td>
							  </tr>
							  <tr>
								<td colspan="3" align="left">
								 <div style="border:#B5B5B5 1px solid; width:94%; margin:0 0 10px 5px; padding:5px;padding-bottom:10px; background-color:#E5E5E5">
									<table width="100%" border="0" >
									  <tr>
										<td align="left" style="padding-bottom:5px" valign="top" colspan="2"><span class="error">*</span><span class="infoText">(Please enter exact percentage value, e.g. enter 30 in case the value is 30%, NOT .30) </span><br />
				<span class="error">*</span><span class="infoText">If you leave any of the following sections blank, we'll assume you don't know the numbers. </span></td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px" valign="top" width="70%">Gender :</td>
										<td width="30%" colspan="2" style="padding-bottom:8px">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:8px">
										  <input type="text" name="SexMale" class="form" maxlength="5" size="15" value="{$businessCustomerDetail.SexMale}" onKeyUp="return valid_number(this)"  />
										  % Male<br />
										  <input type="text" name="SexFeMale" class="form"  maxlength="5" size="15" onKeyUp="return valid_number(this)"  value="{$businessCustomerDetail.SexFeMale}"/>
										  % Female<br />
										  <input type="text" name="SexUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.SexUnknown}"/>
										  % Unknown<br />
										</span></td>
										<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px" valign="top">Ethnicity :</td>
										<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:8px">
										  <input type="text" name="RaceWhite" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.RaceWhite}"/>
										  % White<br />
										  <input type="text" name="RaceBlack" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.RaceBlack}"/>
										  % Black, African Am., Or Negro<br />
										  <input type="text" name="RaceAmerican" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.RaceAmerican}"/>
										  % American Indian or Alaskan Native<br />
										  <input type="text" name="RaceHispanic" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.RaceHispanic}"/>
										  % Hispanic, Latino, or Spanish origin<br />
										  <input type="text" name="RaceAsian" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.RaceAsian}"/>
										  % Asian, Chinese, Japanese, or Other asian<br />
										  <input type="text" name="RaceHawaiian" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.RaceHawaiian}"/>
										  % Hawaiian, Samoan, or Pacific Islander<br />
										  <input type="text" name="RaceOther" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.RaceOther}"/>
										  % Other <br />
										  <input type="text" name="RaceUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.RaceUnknown}"/>
										  % Unknown<br />
										</span></td>
										<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px" valign="top">Residence :</td>
										<td colspan="2" style="padding-bottom:8px"><br />																			</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:8px">
										  <input type="text" name="ResidenceHomeowners" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ResidenceHomeowners}"/>
										  % Homeowners<br />
										  <input type="text" name="ResidenceRenters" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ResidenceRenters}"/>
										  % Renters<br />
										  <input type="text" name="ResidenceWithFamily" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ResidenceWithFamily}"/>
										  % Live with family<br />
										  <input type="text" name="ResidenceVacationHome" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ResidenceVacationHome}"/>
										  % Vacation Home<br />
										  <input type="text" name="ResidenceOthers" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ResidenceOthers}"/>
										  % Other <br />
										  <input type="text" name="ResidenceUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ResidenceUnknown}"/>
										% Unknown</span></td>
										<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px" valign="top">Education Level :</td>
										<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:8px">
										  <input type="text" name="EducationSchooling" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.EducationSchooling}"/>
										  % Unfinished Schooling<br />
										  <input type="text" name="EducationSchoolGraduate" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.EducationSchoolGraduate}"/>
										  % High School Graduate or GED<br />
										  <input type="text" name="EducationCollegeGraduate" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.EducationCollegeGraduate}"/>
										  % College Experience or Graduate<br />
										  <input type="text" name="EducationMasters" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.EducationMasters}"/>
										  % Masters, Doctorate<br />
										  <input type="text" name="EducationUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.EducationUnknown}"/>
										  % Unknown<br />
										</span></td>
										<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px" valign="top">Primary Language :</td>
										<td colspan="2" style="padding-bottom:8px"><br />																			</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:8px">
										  <input type="text" name="PrimaryLangEnglish" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.PrimaryLangEnglish}" />
										  % English<br />
										  <input type="text" name="PrimaryLangSpanish" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.PrimaryLangSpanish}"/>
										  % Spanish<br />
										  <input type="text" name="PrimaryLangOther" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.PrimaryLangOther}"/>
										  % Other <br />
										  <input type="text" name="PrimaryLangUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.PrimaryLangUnknown}"/>
										% Unknown</span></td>
										<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
									  </tr>
				<tr>
										<td align="left" style="padding-bottom:10px" valign="top">Age :</td>
										<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
									  </tr>
				<tr>
				<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:8px">
				<input type="text" name="Age18_21" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.Age18_21}"/>
				% 18-21<br />
				<input type="text" name="Age22_25" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.Age22_25}"/>
				% 22-25<br />
				<input type="text" name="Age26_29" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.Age26_29}"/>
				% 26-29 <br />
				<input type="text" name="Age30_39" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.Age30_39}"/>
				% 30-39<br />
				<input type="text" name="Age40_49" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.Age40_49}"/>
				% 40-49<br />
				<input type="text" name="Age50_59" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.Age50_59}"/>
				% 50-59<br />
				<input type="text" name="Age60_69" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.Age60_69}"/>
				% 60-69 <br />
				<input type="text" name="AgeGreater70" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.AgeGreater70}"/>
				% 70 or greater<br />
				<input type="text" name="AgeUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.AgeUnknown}"/>
				% Unknown<br />
				</span></td>
				<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
				</tr>	
									  <tr>
										<td align="left" style="padding-bottom:10px" valign="top">Marital Status :</td>
										<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
										  <input type="text" name="MaritalSingle" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.MaritalSingle}"/>
										  % Single<br />
										  <input type="text" name="MaritalMarried" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.MaritalMarried}"/>
										  % Married<br />
										  <input type="text" name="MaritalUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.MaritalUnknown}"/>
										  % Unknown<br />
										</span></td>
										<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px" valign="top">Children :</td>
										<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
										  <input type="text" name="ChildrenNone" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ChildrenNone}"/>
										  % No children<br />
										  <input type="text" name="Children1" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.Children1}"/>
										  % 1 Child<br />
										  <input type="text" name="Children2" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.Children2}"/>
										  % 2 Children<br />
										  <input type="text" name="Children3" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.Children3}"/>
										  % 3 Children<br />
										  <input type="text" name="ChildrenGreater3" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ChildrenGreater3}"/>
										  % Greater than 3 children<br />
										  <input type="text" name="ChildrenUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ChildrenUnknown}"/>
										  % Unknown<br />
										</span></td>
										<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
									  </tr>	
									  <tr>
										<td align="left" style="padding-bottom:10px" valign="top">Children Ages :<br />
				(of those that have children)&nbsp;</td>
										<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
										  <input type="text" name="ChildrenAge0_5" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ChildrenAge0_5}"//>
										  % 0 - 5 years old<br />
										  <input type="text" name="ChildrenAge6_15" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ChildrenAge6_15}"//>
										  % 6 - 15 years old<br />
										  <input type="text" name="ChildrenAge16_19" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ChildrenAge16_19}"//>
										  % 16 - 19 years old<br />
										  <input type="text" name="ChildrenAge19_23" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ChildrenAge19_23}"//>
										  % 19 - 23 years old<br />
										  <input type="text" name="ChildrenAgeAbove23" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)"value="{$businessCustomerDetail.ChildrenAgeAbove23}"/>
										  % Above 23 years old<br />
										  <input type="text" name="ChildrenAgeUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.ChildrenAgeUnknown}"//>
										  % Unknown<br />
										</span></td>
										<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
									  </tr>	
									  <tr>
										<td align="left" style="padding-bottom:10px" valign="top">Household Income :</td>
										<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
										  <input type="text" name="IncomeUnder40" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.IncomeUnder40}"/>
										  % Under $40,000<br />
										  <input type="text" name="Income40_59" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.Income40_59}"/>
										  % $40,000 - $59,999<br />
										  <input type="text" name="Income60_99" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.Income60_99}"/>
										  % $60,000 - $99,999<br />
										  <input type="text" name="Income100_249" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.Income100_249}"/>
										  % $100,000 - $249,000<br />
										  <input type="text" name="IncomeAbove250" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.IncomeAbove250}"/>
										  % Above $250,000<br />
										  <input type="text" name="IncomeUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.IncomeUnknown}"/>
										  % Unknown<br />
										</span></td>
										<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
									  </tr>	
									   <tr>
										<td align="left" style="padding-bottom:10px" valign="top">Number of Vehicles Customer Brings to you :</td>
										<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
									  </tr>
									   <tr>
										 <td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
										   <input type="text" name="VehicleCustomerBrings1" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.VehicleCustomerBrings1}"/>
										   % 1<br />
										   <input type="text" name="VehicleCustomerBrings2" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.VehicleCustomerBrings2}"/>
										   % 2<br />
										   <input type="text" name="VehicleCustomerBrings3" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.VehicleCustomerBrings3}"/>
										   % 3<br />
										   <input type="text" name="VehicleCustomerBrings4" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.VehicleCustomerBrings4}"/>
										   % 4<br />
										   <input type="text" name="VehicleCustomerBringsAbove5" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.VehicleCustomerBringsAbove5}"/>
										   % Above 5<br />
										   <input type="text" name="VehicleCustomerBringsUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.VehicleCustomerBringsUnknown}"/>
										   % Unknown<br />
										 </span></td>
										 <td colspan="2" style="padding-bottom:6px">&nbsp;</td>
									  </tr>	
									  <tr>
										<td align="left" style="padding-bottom:10px" valign="top">Number of visits customer makes each year per vehicle :</td>
										<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
										  <input type="text" name="CustomerPerVehicle1" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.CustomerPerVehicle1}"/>
										  % 1<br />
										  <input type="text" name="CustomerPerVehicle2" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.CustomerPerVehicle2}"/>
										  % 2<br />
										  <input type="text" name="CustomerPerVehicle3" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.CustomerPerVehicle3}"/>
										  % 3<br />
										  <input type="text" name="CustomerPerVehicle4" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.CustomerPerVehicle4}"/>
										  % 4<br />
										  <input type="text" name="CustomerPerVehicleAbove5" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.CustomerPerVehicleAbove5}"/>
										  % Above 5<br />
										  <input type="text" name="CustomerPerVehicleUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.CustomerPerVehicleUnknown}"/>
										  % Unknown<br />
										</span></td>
										<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
									  </tr>	
									   <tr>
										<td align="left" style="padding-bottom:10px" valign="top">Average amount spent annually :</td>
										<td colspan="2" style="padding-bottom:6px"><br />																			</td>
									  </tr>
									   <tr>
										 <td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
										   <input type="text" name="AvgAmountSpentBelow249" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.AvgAmountSpentBelow249}"/>
										   % below $249<br />
										   <input type="text" name="AvgAmountSpent250_999" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.AvgAmountSpent250_999}"/>
										   % $250 - $999<br />
										   <input type="text" name="AvgAmountSpent1000_1999" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.AvgAmountSpent1000_1999}">
										   % $1000 - $1999<br />
										   <input type="text" name="AvgAmountSpent2000_2999" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.AvgAmountSpent2000_2999}">
										   % $2000 - $2999<br />
										   <input type="text" name="AvgAmountSpent3000_3999" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)"value="{$businessCustomerDetail.AvgAmountSpent3000_3999}"/>
										   % $3000 - $3999<br />
										   <input type="text" name="AvgAmountSpent4000_4999" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.AvgAmountSpent4000_4999}"/>
										   % $4000 - $4999<br />
										   <input type="text" name="AvgAmountSpent5000_6000" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.AvgAmountSpent5000_6000}"/>
										   % $5000 - $6000<br />
										   <input type="text" name="AvgAmountSpentAbove6000" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.AvgAmountSpentAbove6000}"/>
										   % Above $6000<br />
										   <input type="text" name="AvgAmountSpentUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="{$businessCustomerDetail.AvgAmountSpentUnknown}"/>
										 % Unknown</span></td>
										 <td colspan="2" style="padding-bottom:6px">&nbsp;</td>
									  </tr>																  
									</table>
								 </div>																	</td>
							  </tr> 
							 
				
							 <tr>
								<td width="88%" align="left" valign="middle" style="padding-bottom:10px">What percentage of customers use coupons ? 
								<input type="text" name="CustUseCoupons" id="CustUseCoupons" maxlength="5" size="15" onKeyUp="return valid_number(this)"  class="form" value="{$businessCustomerDetail.CustUseCoupons}"/></td>
								<td width="12%" colspan="2">&nbsp;</td>
							 </tr>
							  <tr>
								<td width="88%" align="left" valign="middle" style="padding-bottom:10px">How far do customers travel to your shop(average) ? 
								<input type="text" name="CustTravelToShop" id="CustTravelToShop" maxlength="20" size="40" class="form" value="{$businessCustomerDetail.CustTravelToShop}" onKeyUp="return valid_number(this)" /></td>
								<td width="12%" colspan="2">&nbsp;</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:10px" valign="middle">What months do your customers come in most frequently ? 
								  <select name="MonthFrequentCustomer" class="form" style="width:200px">
									 <option value="" selected="selected">--Select--</option>
									{html_options options=$monthArray selected=$businessCustomerDetail.MonthFrequentCustomer}
								  </select></td>
								<td colspan="2">&nbsp;</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:10px" valign="middle">What months do your customers come in least frequently ? 
								  <select name="MonthLessCustomer" class="form" style="width:200px">
									<option value="" selected="selected">--Select--</option>
									{html_options options=$monthArray selected=$businessCustomerDetail.MonthFrequentCustomer}
								  </select></td>
								<td colspan="2">&nbsp;</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:10px" valign="middle">What services are your customers buying most ? 
								  <select name="ServiceCustBuyMost" class="form" style="width:200px">
									<option value="" selected="selected">--Select--</option>
									{html_options options=$serviceArray selected=$businessCustomerDetail.ServiceCustBuyMost}
									
								  </select></td>
								<td colspan="2">&nbsp;</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:10px" valign="middle">What services are your customers buying least ? 
								  <select name="ServiceCustBuyLeast" class="form" style="width:200px">
									<option value="" >--Select--</option>
									{html_options options=$serviceArray selected=$businessCustomerDetail.ServiceCustBuyLeast}
								  </select></td>
								<td colspan="2">&nbsp;</td>
							  </tr>
							  <tr>
								<td width="88%" align="left" valign="middle" style="padding-bottom:10px">How many new customer referrals do I get annually ? 
								<input type="text" name="CustReferrals" id="CustReferrals" maxlength="10" size="40" class="form" value="{$businessCustomerDetail.CustReferrals}" onKeyUp="return valid_number(this)" /></td>
								<td width="12%" colspan="2">&nbsp;</td>
							  </tr>
							  <tr>
								<td width="88%" align="left" valign="middle" style="padding-bottom:10px">What advertising sources are your existing customers coming from ? 
								<input type="text" name="AdvertisingSourceFromCust" id="AdvertisingSourceFromCust" maxlength="100" size="40" class="form" value="{$businessCustomerDetail.AdvertisingSourceFromCust}"/></td>
								<td width="12%" colspan="2">&nbsp;</td>
							  </tr>
							  <tr>
								<td width="88%" align="left" valign="middle" style="padding-bottom:10px">What advertising sources are your new customers coming from ? 
								<input type="text" name="AdvertisingSourceFromNewCust" id="AdvertisingSourceFromNewCust" maxlength="100" size="40" class="form" value="{$businessCustomerDetail.AdvertisingSourceFromNewCust}"/></td>
								<td width="12%" colspan="2">&nbsp;</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:10px" valign="top">Are there any Economic factors that influence yoru area :</td>
								<td colspan="2">&nbsp;</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:5px;padding-left:25px;" valign="top">
								{html_checkboxes name="EconomicInfluence" values=$economicInfluenceIndexArray output=$economicInfluenceStrArray
				selected=$businessCustomerDetail.EconomicInfluence separator="<br />" id="radOutsourcedService"}
								
								<input type="text" name="EconomicInfluenceOther" id="EconomicInfluenceOther" class="form"  maxlength="150" size="40" onchange="setChecked('EconomicInfluence','frmStepFour','9')" value="{$businessCustomerDetail.EconomicInfluenceOther}"/></td>
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
	function validateForm()
		{
			if(checkOther('EconomicInfluence[]','frmStepFour','9','EconomicInfluenceOther')==1)
			{
				return false;
			}
			return true;
		}
</script>
{/literal}