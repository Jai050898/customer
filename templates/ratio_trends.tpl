{include file=header.tpl}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div>
                <div style="height:10px;"></div>
               
               
                <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers" onsubmit="return validateFrom();">
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                       
                        <tr>
                            <td colspan="9" id="errorDiv1" style="color:#935;font-size:12px; text-align: center;">&nbsp;</td>
                        </tr>

                        <tr>
                            <td align="left" valign="center" colspan="7">
                                <div class="search_divbox">
                                select by : Year <input type="radio" name="searchtype" id="year_searchtype" value="year" onclick="sel_stdate('year')" /> Month <input type="radio" name="searchtype" id="month_searchtype" value="month" onclick="sel_stdate('month')" /> Yesterday <input type="radio" name="searchtype" id="yesterday_searchtype" value="yesterday" onclick="sel_stdate('yesterday')" />
                                </div>
                                <div class="search_divbox"><label style="color: #FFFFFF;">
                                 <br/>
                                 <!--From Date:</label> &nbsp;<input type="text" name="sdate" id="sdate" class="select req-string reqDate" value="{$smarty.request.sdate}"/>-->
{html_options id="input_year" name="input_year" style="display:none;" options=$yearOptions}
{html_options id="input_month" name="input_month" style="display:none;" options=$monthOptions}                                      <input type="text" id="input_yesterday" name="input_yesterday" style="display:none;"  />
                       
                                 &nbsp;&nbsp;&nbsp;<label style="color: #FFFFFF;">To Date:</label> &nbsp;<input type="text" name="edate" id="edate" class="select req-string reqDate" value="{$smarty.request.edate}"/> 
                                </div>
                           
                            <div class="search_divbox">
                                <br/>
                                <input type="image" src="images/go_but.png" onclick="{literal}$('#submitBtn1').click();{/literal}" style="vertical-align:bottom;"/> 
                            <input name="input" id="submitBtn1" type="Submit" value="Submit" style="display: none;" />
                            </div>
                            </td>
			</tr>
                            <tr>
                            <td colspan="9" id="errorDiv1" style="color:#935;font-size:12px; text-align: center;">
                            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" class="tableinnercontent">

		                    <tr>
				            <td align="left" >Gross Labor Sales </td>
				            <td align="center" width="60%">{$gross_laborsales}</td>
		                    </tr>
		                    <tr>
				            <td align="left">Gross Parts Sales </td>
				            <td align="center" width="60%">{$gross_parts_sales}</td>
		                    </tr>
		                    <tr>
				            <td align="left">Gross Discounts</td>
				            <td align="center" width="60%">{$total_discount}</td>
		                    </tr>
		                    <tr>
				            <td align="left">Gross Sales </td>
				            <td align="center" width="60%">{$gross_sales}</td>
		                    </tr>
		                    <tr>
				            <td align="left">Total Repair Orders </td>
				            <td align="center" width="60%">{$total_ros}</td>
		                    </tr>
		                    <tr>
				            <td align="left">Total Hours Sold </td>
				            <td align="center" width="60%">{$total_hours}</td>
		                    </tr>
		                    <tr>
				            <td  align="left">Total Service Advisors</td>
				            <td align="center" width="60%">{$total_service_advs}</td>
		                    </tr>
		                    <tr>
				            <td align="left">Total Technicians</td>
				            <td align="center" width="60%">{$technicians_count}</td>
		                    </tr>
		                    <tr>
				            <td align="left">Parts to Labor Ratio</td>
				            <td align="center" width="60%">{$parts_to_laborratio}</td>
		                    </tr>
		                    <tr>
				            <td align="left">Avg. Sold Hours Per RO</td>
				            <td align="center" width="60%">{$avg_soldhours_per_ro}</td>
		                    </tr>
		                    <tr>
				            <td align="left">Avg. Labor Sales per RO</td>
				            <td align="center" width="60%">{$avg_laborsales_per_ro}</td>
		                    </tr>
		                    <tr>
				            <td align="left">Avg. Parts Sales per RO</td>
				            <td align="center" width="60%">{$avg_partssales_per_ro}</td>
		                    </tr>
		                    <tr>
				            <td align="left">Avg. RO Count</td>
				            <td>{$avg_ro_count}</td>
		                    </tr>
		                    <tr>
				            <td align="left">Sold Labor Hours Per Advisor</td>
				            <td>{$soldlaborhours_per_advisor}</td>
		                    </tr>
		                    <tr>
				            <td align="left">Total RO's Written per Service Advisor</td>
				            <td>{$total_ro_written_per_service_advisor}</td>
		                    </tr>
		                     <tr>
				            <td align="left">Avg. $ Disc/Adjust/Ref per Service Advisor</td>
				            <td align="center" width="60%">{$avg_disc_Adjust_Ref_per_Serv_adv}</td>
		                    </tr>
		                     <tr>
				            <td align="left">Avg. RO's Written Per Service Advisor per Day</td>
				            <td align="center" width="60%">{$avg_ro_written_per_serv_adv_per_Day}</td>
		                    </tr>
		                     <tr>
				            <td align="left">Labor Sales Per Tech</td>
				            <td align="center" width="60%">{$labor_sales_per_tech}</td>
		                    </tr>
		                     <tr>
				            <td align="left">Parts Sales Per Tech</td>
				            <td align="center" width="60%">{$parts_sales_per_tech}</td>
		                    </tr>
		                     <tr>
				            <td align="left">Total Sold Hours Per Tech Per Day</td>
				            <td align="center" width="60%">{$total_soldHours_Per_Tech_Per_Day}</td>
		                    </tr>

                            </table>
                            </td>
                            </tr> 
                            
                        </table>
                        </form>
                                        
                <div class="clear"></div>
            </div>
            {* include file="rightbar.tpl" *}
            <div class="clear"></div>
	</div>
</div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>

<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>

<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>
{literal}
<script type="text/javascript" lang="javascript">
    $(document).ready(function() {	
	$("#sdate").datepicker();
	$("#edate").datepicker();
    });	
</script>
{/literal}
{literal}
<script type="text/javascript">
function sel_stdate(sel_type){
		if(sel_type=='year'){
			$('#input_year').show();
			$('#input_month').hide();
			$('#input_yesterday').hide();
		}else if(sel_type=='month'){
			$('#input_month').show();
			$('#input_year').hide();
			$('#input_yesterday').hide();
		}else if(sel_type=='yesterday'){
			var date = new Date();
			date.setDate(date.getDate()-1);
			var yesterday_date = (date.getMonth()+1) + '-' +date.getDate()+ '-' + date.getFullYear();
			document.getElementById("input_yesterday").value='yesterday_date';
			$('#input_yesterday').show(); 
			$('#input_year').hide();
			$('#input_month').hide();
		}
}
</script>
{/literal}
{literal}
<script language="javascript" type="text/javascript">
    function validateFrom(){
        var todate = $('#edate').val();
        if(todat.value==0){
        $('#errorDiv1').html('Please Select To Date');
        return false;
        }
    }
</script>
{/literal}



