{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			
			<div style="height:10px;"></div>
			<h1>Integrated Survey </h1>
			<form name="frmStepThree" id="frmStepThree" method="post" enctype="multipart/form-data" class="fValidator-form" onsubmit="return validateForm()">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Marketing / Advertising Opportunities</u></h2>
				<table width="100%" border="0" cellspacing="1" cellpadding="5">
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

					<td  align="left" valign="middle" style="padding-bottom:10px">What Goals or Objectives would you like to see your company achive in the next year from marketing or advertising ? <br />

					<textarea name="MarketingGoals" id="MarketingGoals" rows="3" cols="40">{$marketingOpportunities.MarketingGoals}</textarea>
					</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:5px" valign="top">Are you known for performing any special work ?</td>

				  <td colspan="2">																  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px; padding-left:20px;" valign="top">

						{html_checkboxes name="SpecialWork" values=$specialWorkIndexArray output=$specialWorkStrArray

selected=$marketingOpportunities.SpecialWork separator="<br />" id="SpecialWork"}

						

						<input type="text" name="SpecialWorkOther" class="form" maxlength="100" size="40" onchange="setChecked('SpecialWork','frmStepThree','7')" value="{$marketingOpportunities.SpecialWorkOther}">																	</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

					 <tr>

					<td width="71%" align="left" valign="top" style="padding-bottom:5px">What Competitive Advantages do you offer your customers ? </td>

					<td width="29%" colspan="2">																		</td>

				  </tr>

					 <tr>

					   <td align="left" valign="top" style="padding-bottom:10px;padding-left:20px;">

						

						{html_checkboxes name="CompetiveAdvantages" values=$competiveAdvantagesIndexArray1 output=$competiveAdvantagesStrArray1 selected=$marketingOpportunities.CompetiveAdvantages separator="<br />"}

						{if $marketingOpportunities.MaximumShuttleDistance}

						<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="7" class="form" onclick="toggleDiv(this.checked,'divShuttleService')" checked>

						Complimentary Shuttle Service <br>

						<div id="divShuttleService" style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:block">

						&nbsp;&nbsp;Maximum distance you will shuttle ?&nbsp;&nbsp;<input type="text" name="MaximumShuttleDistance" class="form" maxlength="12" onKeyUp="return valid_number(this)" value="{$marketingOpportunities.MaximumShuttleDistance}">	</div>

						{else}

						<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="7" class="form" onclick="toggleDiv(this.checked,'divShuttleService')" >

						Complimentary Shuttle Service <br>

						<div id="divShuttleService" style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:none">

						&nbsp;&nbsp;Maximum distance you will shuttle ?&nbsp;&nbsp;<input type="text" name="MaximumShuttleDistance" class="form" maxlength="12" onKeyUp="return valid_number(this)">	</div>

						{/if}

						{html_checkboxes name="CompetiveAdvantages" values=$competiveAdvantagesIndexArray2 output=$competiveAdvantagesStrArray2 selected=$marketingOpportunities.CompetiveAdvantages separator="<br />"}

						{if $marketingOpportunities.SpecialtyTools}	

						<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="25" class="form" onclick="toggleDiv(this.checked,'divCompetiveAdvantages')" checked>

						Specialty Tools <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:block" id="divCompetiveAdvantages">

						&nbsp;&nbsp;Please List&nbsp;&nbsp;<input type="text" name="SpecialtyTools" class="form" maxlength="150" size="40" value="{$marketingOpportunities.SpecialtyTools}" >	</div>

						{else}

						<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="25" class="form" onclick="toggleDiv(this.checked,'divCompetiveAdvantages')">

						Specialty Tools <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:none" id="divCompetiveAdvantages">

						&nbsp;&nbsp;Please List&nbsp;&nbsp;<input type="text" name="SpecialtyTools" class="form" maxlength="150" size="40" >	</div>

						{/if}

						{if $waitingRoom}

							<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="26" class="form" onclick="toggleDiv(this.checked,'divWaitingRoom')" checked>

							Waiting Room   <br>

							<div style="width:96%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; padding-left:15px; display:block" id="divWaitingRoom">

							{html_checkboxes name="CompetiveAdvantages" values=$competiveAdvantagesIndexArray3 output=$competiveAdvantagesStrArray3 selected=$marketingOpportunities.CompetiveAdvantages separator="<br />"}

							{if $beverages}

								<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="35" class="form" onclick="toggleDiv(this.checked,'divBeverages')" checked>

								Complimentary beverages <br>	

									<div style="width:95%;  padding-left:15px; display:block" id="divBeverages">

									{html_checkboxes name="CompetiveAdvantages" values=$competiveAdvantagesIndexArray4 output=$competiveAdvantagesStrArray4 selected=$marketingOpportunities.CompetiveAdvantages separator="<br />"}

									<input type="text" name="OtherBeverages" class="form" maxlength="150" size="40" onchange="setChecked('CompetiveAdvantages','frmStepThree','39')" value="{$marketingOpportunities.OtherBeverages}"><br />																		

									</div>

								{else}

									<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="35" class="form" onclick="toggleDiv(this.checked,'divBeverages')">

								Complimentary beverages <br>	

									<div style="width:95%;  padding-left:15px; display:none" id="divBeverages">

									{html_checkboxes name="CompetiveAdvantages" values=$competiveAdvantagesIndexArray4 output=$competiveAdvantagesStrArray4 selected=$marketingOpportunities.CompetiveAdvantages separator="<br />"}

									<input type="text" name="OtherBeverages" class="form" maxlength="150" size="40" onchange="setChecked('CompetiveAdvantages','frmStepThree','39')" value="{$marketingOpportunities.OtherBeverages}"><br />																		

									</div>

								{/if}	

							{html_checkboxes name="CompetiveAdvantages" values=$competiveAdvantagesIndexArray5 output=$competiveAdvantagesStrArray5 selected=$marketingOpportunities.CompetiveAdvantages separator="<br />"}

							</div>

						{else}

							<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="26" class="form" onclick="toggleDiv(this.checked,'divWaitingRoom')" >

							Waiting Room   <br>

							<div style="width:96%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; padding-left:15px; display:none" id="divWaitingRoom">

							{html_checkboxes name="CompetiveAdvantages" values=$competiveAdvantagesIndexArray3 output=$competiveAdvantagesStrArray3 selected=$marketingOpportunities.CompetiveAdvantages separator="<br />"}

							<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="35" class="form" onclick="toggleDiv(this.checked,'divBeverages')">

							Complimentary beverages <br>	

								<div style="width:95%;  padding-left:15px; display:none" id="divBeverages">

								{html_checkboxes name="CompetiveAdvantages" values=$competiveAdvantagesIndexArray4 output=$competiveAdvantagesStrArray4 selected=$marketingOpportunities.CompetiveAdvantages separator="<br />"}

								<input type="text" name="OtherBeverages" class="form" maxlength="150" size="40" onchange="setChecked('CompetiveAdvantages','frmStepThree','39')" value="{$marketingOpportunities.OtherBeverages}"><br />																		

								</div>

							{html_checkboxes name="CompetiveAdvantages" values=$competiveAdvantagesIndexArray5 output=$competiveAdvantagesStrArray5 selected=$marketingOpportunities.CompetiveAdvantages separator="<br />"}

							</div>

						{/if}	

							

						{if $marketingOpportunities.AdditionalCompetiveAdvantages}

						<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="44" class="form" checked> Other 

						{else}

						<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="44" class="form" > Other 

						{/if}

						<input type="text" name="AdditionalCompetiveAdvantages" class="form" size="40" maxlength="150" onchange="setChecked('CompetiveAdvantages','frmStepThree','44')" value="{$marketingOpportunities.AdditionalCompetiveAdvantages}"><br />		

						

					   <td colspan="2">&nbsp;</td>

				  </tr>

				 

				  <tr>

					<td align="left" style="padding-bottom:5px" valign="top">Are you involved in any (or create) Community Activities ?<br />

(anything that is checked is asked to fill out information)</td>

					<td colspan="2">																	</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:20px;" valign="top">



						{if $communityDetail.BloodMobileDetail}

						<input type="checkbox" name="BloodMobile" id="BloodMobile"  value="1" class="form" onclick="toggleDiv(this.checked,'divBloodMobile')" checked>Blood Mobile Drive <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:block" id="divBloodMobile">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="BloodMobileDetail" class="form" size="40" maxlength="150" value="{$communityDetail.BloodMobileDetail}">	</div>

						{else}

						<input type="checkbox" name="BloodMobile" id="BloodMobile"  value="1" class="form" onclick="toggleDiv(this.checked,'divBloodMobile')" >Blood Mobile Drive <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:none" id="divBloodMobile">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="BloodMobileDetail" class="form" size="40" maxlength="150">	</div>

						{/if}

						

						{if $communityDetail.CharitiesDetail}

						<input type="checkbox" name="Charities" id="Charities" value="2" class="form" onclick="toggleDiv(this.checked,'divCharities')" checked>

						Charities <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divCharities">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="CharitiesDetail" class="form" size="40" maxlength="150" value="{$communityDetail.CharitiesDetail}">	</div>

						{else}

						<input type="checkbox" name="Charities" id="Charities" value="2" class="form" onclick="toggleDiv(this.checked,'divCharities')">

						Charities <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divCharities">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="CharitiesDetail" class="form" size="40" maxlength="150">	</div>

						

						{/if}

						

						

						{if $communityDetail.AthleticsDetail}

						<input type="checkbox" name="Athletics" id="Athletics" value="3" class="form" onclick="toggleDiv(this.checked,'divAthletics')" checked>

						Community Athletics <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divAthletics">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="AthleticsDetail" class="form" size="40" maxlength="150" value="{$communityDetail.AthleticsDetail}">	</div>

						

						{else}

						<input type="checkbox" name="Athletics" id="Athletics" value="3" class="form" onclick="toggleDiv(this.checked,'divAthletics')">

						Community Athletics <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divAthletics">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="AthleticsDetail" class="form" size="40" maxlength="150">	</div>

						{/if}

						

						{if $communityDetail.CustomerAppreciationDetail}

						<input type="checkbox" name="CustomerAppreciation" id="CustomerAppreciation" value="4" class="form" onclick="toggleDiv(this.checked,'divCustomerAppreciation')" checked>

						Customer Appreciation Days <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divCustomerAppreciation">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="CustomerAppreciationDetail" class="form"  size="40" maxlength="150" value="{$communityDetail.CustomerAppreciationDetail}">	</div>

						{else}

						<input type="checkbox" name="CustomerAppreciation" id="CustomerAppreciation" value="4" class="form" onclick="toggleDiv(this.checked,'divCustomerAppreciation')">

						Customer Appreciation Days <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divCustomerAppreciation">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="CustomerAppreciationDetail" class="form"  size="40" maxlength="150">	</div>

						{/if}

						

						{if $communityDetail.FoodBanksDetail}

						<input type="checkbox" name="FoodBanks" id="FoodBanks" value="5" class="form" onclick="toggleDiv(this.checked,'divFoodBanks')" checked>

						Food Banks <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divFoodBanks">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="FoodBanksDetail" class="form" size="40" maxlength="150" value="{$communityDetail.FoodBanksDetail}">	</div>

						

						{else}

						<input type="checkbox" name="FoodBanks" id="FoodBanks" value="5" class="form" onclick="toggleDiv(this.checked,'divFoodBanks')">

						Food Banks <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divFoodBanks">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="FoodBanksDetail" class="form" size="40" maxlength="150">	</div>

						{/if}

						

						{if $communityDetail.HolidayDetail}

						<input type="checkbox" name="Holiday" id="Holiday" value="6" class="form" onclick="toggleDiv(this.checked,'divHoliday')" checked>

						Holiday Events <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divHoliday">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="HolidayDetail" class="form" size="40" maxlength="150" value="{$communityDetail.HolidayDetail}">	</div>

						{else}

						<input type="checkbox" name="Holiday" id="Holiday" value="6" class="form" onclick="toggleDiv(this.checked,'divHoliday')">

						Holiday Events <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divHoliday">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="HolidayDetail" class="form" size="40" maxlength="150">	</div>

						{/if}

						

						

						{if $communityDetail.LocalChurchDetail}

						

						<input type="checkbox" name="LocalChurch" id="LocalChurch" value="7" class="form" onclick="toggleDiv(this.checked,'divLocalChurch')" checked>

						Local Church <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divLocalChurch">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="LocalChurchDetail" class="form" size="40" maxlength="150" value="{$communityDetail.LocalChurchDetail}">	</div>

						{else}

						<input type="checkbox" name="LocalChurch" id="LocalChurch" value="7" class="form" onclick="toggleDiv(this.checked,'divLocalChurch')">

						Local Church <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divLocalChurch">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="LocalChurchDetail" class="form" size="40" maxlength="150">	</div>

						{/if}

						

						{if $communityDetail.LocalEventsDetail}

						<input type="checkbox" name="LocalEvents" id="LocalEvents" value="8" class="form" onclick="toggleDiv(this.checked,'divLocalEvents')" checked>

						Local Events <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divLocalEvents">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="LocalEventsDetail" class="form" size="40" maxlength="150" value="{$communityDetail.LocalEventsDetail}">	</div>

						{else}

						<input type="checkbox" name="LocalEvents" id="LocalEvents" value="8" class="form" onclick="toggleDiv(this.checked,'divLocalEvents')">

						Local Events <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divLocalEvents">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="LocalEventsDetail" class="form" size="40" maxlength="150">	</div>

						{/if}

						

						{if $communityDetail.SchoolProgramDetail}

						<input type="checkbox" name="SchoolProgram" id="SchoolProgram" value="9" class="form" onclick="toggleDiv(this.checked,'divSchoolProgram')" checked>

						School Program <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divSchoolProgram">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="SchoolProgramDetail" class="form" size="40" maxlength="150" value="{$communityDetail.SchoolProgramDetail}">	</div>

						{else}

						<input type="checkbox" name="SchoolProgram" id="SchoolProgram" value="9" class="form" onclick="toggleDiv(this.checked,'divSchoolProgram')" >

						School Program <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divSchoolProgram">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="SchoolProgramDetail" class="form" size="40" maxlength="150">	</div>

						{/if}

						

						{if $communityDetail.ScoutsDetail}

						<input type="checkbox" name="Scouts" id="Scouts" value="10" class="form" onclick="toggleDiv(this.checked,'divScouts')" checked>

						Scouts <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divScouts">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="ScoutsDetail" class="form" size="40" maxlength="150" value="{$communityDetail.ScoutsDetail}">	</div>

						{else}

						<input type="checkbox" name="Scouts" id="Scouts" value="10" class="form" onclick="toggleDiv(this.checked,'divScouts')">

						Scouts <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divScouts">

						&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="ScoutsDetail" class="form" size="40" maxlength="150">	</div>

						{/if}

						{if $communityDetail.Additional}

						<input type="checkbox" name="chkAdditional" id="chkAdditional" value="11" class="form" checked>



						Other

						{else}

						<input type="checkbox" name="chkAdditional" id="chkAdditional" value="11" class="form" checked>

						{/if} 

						<input type="text" name="Additional" class="form" size="40" maxlength="150" onchange="setChecked('chkAdditional','frmStepThree','11')" value="{$communityDetail.Additional}">																		

					</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				 

				  <tr>

					<td align="left" style="padding-bottom:5px" valign="top">Do you offer Any financing / Payment Programs ?</td>

					<td colspan="2">

						</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:20px;" valign="top">

					{if $marketingOpportunities.CashThroughWhom}

					<input type="checkbox" name="PaymentPrograms[]" id="PaymentPrograms" value="1" class="form" onclick="toggleDiv(this.checked,'div90Day')" checked>

						90 Day Same as cash  <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:none" id="div90Day">

						&nbsp;&nbsp;Through whom ?&nbsp;&nbsp;<input type="text" name="CashThroughWhom" class="form" size="40" maxlength="100" value="{$marketingOpportunities.CashThroughWhom}">	</div>

						{else}

						<input type="checkbox" name="PaymentPrograms[]" id="PaymentPrograms" value="1" class="form" onclick="toggleDiv(this.checked,'div90Day')">

						90 Day Same as cash  <br>

						<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:none" id="div90Day">

						&nbsp;&nbsp;Through whom ?&nbsp;&nbsp;<input type="text" name="CashThroughWhom" class="form" size="40" maxlength="100">	</div>

						{/if}

					{html_checkboxes name="PaymentPrograms" values=$paymentProgramIndexArray output=$paymentProgramsStrArray

selected=$marketingOpportunities.PaymentPrograms separator="<br />" id="PaymentPrograms"}

						<input type="text" name="PaymentProgramsOthers" class="form" size="40" maxlength="100" onchange="setChecked('PaymentPrograms','frmStepThree','6')" value="{$marketingOpportunities.PaymentProgramsOthers}">		

					</td>

					<td colspan="2">

																						</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:5px" valign="top">Do you offer special Discounts ?</td>

					<td colspan="2">

																						</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:20px;" valign="top">

					{html_checkboxes name="SpecialDiscounts" values=$specialDiscountsIndexArray output=$specialDiscountsStrArray

selected=$marketingOpportunities.SpecialDiscounts separator="<br />" id="SpecialDiscounts"}

						<input type="text" name="SpecialDiscountOthers" class="form" size="40" maxlength="100" onchange="setChecked('SpecialDiscounts','frmStepThree','6')"  value="{$marketingOpportunities.SpecialDiscountOthers}">	

					</td>

					<td colspan="2">

																							</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:5px" valign="top">Do you offer a Warranty ?</td>

					<td colspan="2">

																						</td>

				  </tr>

				   <tr>

					<td align="left" style="padding-bottom:10px;padding-left:20px;" valign="top">

					{html_checkboxes name="Warranty" values=$warrantyIndexArray output=$warrantyStrArray

selected=$marketingOpportunities.Warranty separator="<br />" id="Warranty"}

					

						<input type="text" name="WarrantyOther" class="form" size="40" maxlength="100" onchange="setChecked('Warranty','frmStepThree','5')"  value="{$marketingOpportunities.WarrantyOther}">	

					</td>

					<td colspan="2">

																							</td>

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
			</div>
			</form>
			
		<div class="clear"></div>
		
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/common.js"></script>	
{literal}
	<script language="javascript">
	function validateForm()
	{
		if(checkOther('SpecialWork[]','frmStepThree','7','SpecialWorkOther')==1)
		{
			return false;
		}
		if(checkOther('CompetiveAdvantages[]','frmStepThree','7','MaximumShuttleDistance')==1)
		{
			return false;
		}
		if(checkOther('CompetiveAdvantages[]','frmStepThree','25','SpecialtyTools')==1)
		{
			return false;
		}
		if(checkOther('CompetiveAdvantages[]','frmStepThree','39','OtherBeverages')==1)
		{
			return false;
		}
		if(checkOther('CompetiveAdvantages[]','frmStepThree','44','AdditionalCompetiveAdvantages')==1)
		{
			return false;
		}
		if(checkOther('BloodMobile','frmStepThree','1','BloodMobileDetail')==1)
		{
			return false;
		}
		if(checkOther('Charities','frmStepThree','2','CharitiesDetail')==1)
		{
			return false;
		}
		if(checkOther('Athletics','frmStepThree','3','AthleticsDetail')==1)
		{
			return false;
		}
		if(checkOther('CustomerAppreciation','frmStepThree','4','CustomerAppreciationDetail')==1)
		{
			return false;
		}
		if(checkOther('FoodBanks','frmStepThree','5','FoodBanksDetail')==1)
		{
			return false;
		}
		if(checkOther('Holiday','frmStepThree','6','HolidayDetail')==1)
		{
			return false;
		}
		if(checkOther('LocalChurch','frmStepThree','7','LocalChurchDetail')==1)
		{
			return false;
		}
		if(checkOther('LocalEvents','frmStepThree','8','LocalEventsDetail')==1)
		{
			return false;
		}		
		if(checkOther('SchoolProgram','frmStepThree','9','SchoolProgramDetail')==1)
		{
			return false;
		}
		if(checkOther('Scouts','frmStepThree','10','ScoutsDetail')==1)
		{
			return false;
		}
		if(checkOther('chkAdditional','frmStepThree','11','Additional')==1)
		{
			return false;
		}
		if(checkOther('PaymentPrograms[]','frmStepThree','1','CashThroughWhom')==1)
		{
			return false;
		}
		if(checkOther('PaymentPrograms[]','frmStepThree','6','PaymentProgramsOthers')==1)
		{
			return false;
		}
		if(checkOther('SpecialDiscounts[]','frmStepThree','6','SpecialDiscountOthers')==1)
		{
			return false;
		}
		if(checkOther('Warranty[]','frmStepThree','5','WarrantyOther')==1)
		{
			return false;
		}
		return true;;
	}
	</script>
{/literal}