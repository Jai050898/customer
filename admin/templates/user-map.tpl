{include file="header.tpl"}
<link type="text/css" rel="stylesheet" href="http://www.autorepairmarketing.com/customer/css/date.css" />
<link rel="stylesheet" type="text/css" href="http://www.autorepairmarketing.com/customer/js/ewindows/ewindow.css" media="screen" />
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyA59TPhX1seq7bdvoGgLl3ITFdUGx7xvwU" type="text/javascript"></script>
<script type="text/javascript" src="http://www.autorepairmarketing.com/customer/js/ewindows/ewindow.js"></script>
{if $MapRes|@count gt '0'}
{literal}
<style type="text/css">
#map_container {
	position: relative;
	width: 100%;
	height:550px;
	float:left;
	padding: 5px;
	margin: 20px 0 0 0;
	background-repeat:no-repeat;
}
#map {
	position: relative;
	width:100%;
	height:550px;
	padding: 0;
	margin: 0;
}
</style>
{/literal}
{/if}
{if $MapRes|@count gt '0'}
{literal}
<script type="text/javascript">
    var map = null;
    var geocoder = null;
    var gmarkers = [];
	var k = 1;
	var side_bar_html = "";

	function load() {
		if (GBrowserIsCompatible()) {
			map = new GMap2(document.getElementById("map"));
			map.setCenter(new GLatLng({/literal}{$lat_avg}{literal},{/literal}{$lang_avg}{literal}), 6);
			//map.setCenter(new GLatLng({/literal}{$lat_avg_shop}{literal},{/literal}{$lang_avg_shop}{literal}), 10);
			//map.setCenter(new GLatLng(47.8375375292, -122.228590358), 10);  
			map.addControl(new GSmallZoomControl());
			
			var i=1;
			{/literal}
			{if $smarty.request.totcust eq ""}
			{literal}
			var shopCount={/literal}{$MapTRescnt}{literal};
			{/literal}
			{/if}
			{if $smarty.request.comphid eq "all"}
			{literal}
			var shopCount5={/literal}{$MapCRescnt}{literal};
			{/literal}
			{/if}
			{literal}
			var shopCount4={/literal}{$AccDetcnt}{literal};
			{/literal}
			{if $Search eq "NO"}
			{if $smarty.request.lastyear eq "" }
			{literal}
			var shopCount1={/literal}{$MapLRescnt}{literal};
			{/literal}
			{/if}
			{if $smarty.request.lastm eq "" }
			{literal}
			var shopCount2={/literal}{$MapLMRescnt}{literal};
			{/literal}
			{/if}
			{if $smarty.request.last3m eq "" }
			{literal}
			var shopCount3={/literal}{$MapL3MRescnt}{literal};
			{/literal}
			{/if}
			{/if}
			{if $smarty.request.comphid eq "all"}
			{literal}
			function createMarkerComp(point, address, name, zIndex) {
			
				var Icon = new GIcon();
				Icon.image = "http://www.autorepairmarketing.com/customer/js/ewindows/markers/marker.png";
				Icon.iconSize = new GSize(20, 34);
				Icon.shadow = "http://www.autorepairmarketing.com/customer/js/ewindows/markers/shadow.png";
				Icon.shadowSize = new GSize(40, 34);
				Icon.iconAnchor = new GPoint(10, 34);
				Icon.infoWindowAnchor = new GPoint(5, 2);
				Icon.transparent = "http://www.autorepairmarketing.com/customer/js/ewindows/	http://www.autorepairmarketing.com/customer/js/ewindows/markers/transparent.png";
				i++;
				
				
				markerOptions = {icon:Icon,zIndexProcess:function(){return zIndex}};
				//var marker = new GMarker(point,Icon);
				var marker = new GMarker(point,markerOptions);
				var info = '<strong>'+name+'</strong><br />'+address;
				GEvent.addListener( marker, "click", function(){
					ewindow.openOnMarker(marker,info);
					map.setCenter(marker.getLatLng());
					map.panBy(new GSize(-50, 50));
				});
				bounds.extend(point);
				gmarkers[k] = marker;
				// add a line to the side_bar html
				side_bar_html += '<a href="javascript:myclick('+k+')">'+ k +'. '+ name + '</a><br>';
				k++;
				
				return marker;

			}
			{/literal}
			{/if}
			{if $smarty.request.totcust eq "" }
			{literal}
			function createMarker(point, address, name, zIndex) {
			
				var Icon = new GIcon();
				Icon.image = "http://www.autorepairmarketing.com/customer/js/ewindows/markers/marker.png";
				Icon.iconSize = new GSize(20, 34);
				Icon.shadow = "http://www.autorepairmarketing.com/customer/js/ewindows/markers/shadow.png";
				Icon.shadowSize = new GSize(40, 34);
				Icon.iconAnchor = new GPoint(10, 34);
				Icon.infoWindowAnchor = new GPoint(5, 2);
				Icon.transparent = "http://www.autorepairmarketing.com/customer/js/ewindows/	http://www.autorepairmarketing.com/customer/js/ewindows/markers/transparent.png";
				i++;
				
				
				markerOptions = {icon:Icon,zIndexProcess:function(){return zIndex}};
				//var marker = new GMarker(point,Icon);
				var marker = new GMarker(point,markerOptions);
				var info = '<strong>'+name+'</strong><br />'+address;
				GEvent.addListener( marker, "click", function(){
					ewindow.openOnMarker(marker,info);
					map.setCenter(marker.getLatLng());
					map.panBy(new GSize(-50, 50));
				});
				bounds.extend(point);
				gmarkers[k] = marker;
				// add a line to the side_bar html
				side_bar_html += '<a href="javascript:myclick('+k+')">'+ k +'. '+ name + '</a><br>';
				k++;
				
				return marker;

			}
			{/literal}
			{/if}
			{literal}
			function createMarkerShop(point, address, name, zIndex) {
			
				var Icon = new GIcon();
				Icon.image = "http://www.autorepairmarketing.com/customer/js/ewindows/markers/marker-cust-big.png";
				Icon.iconSize = new GSize(30, 45);
				Icon.shadow = "http://www.autorepairmarketing.com/customer/js/ewindows/markers/shadow.png";
				Icon.shadowSize = new GSize(40, 34);
				Icon.iconAnchor = new GPoint(10, 34);
				Icon.infoWindowAnchor = new GPoint(5, 2);
				Icon.transparent = "http://www.autorepairmarketing.com/customer/js/ewindows/	http://www.autorepairmarketing.com/customer/js/ewindows/markers/transparent.png";
				i++;
				
				
				markerOptions = {icon:Icon,zIndexProcess:function(){return zIndex}};
				//var marker = new GMarker(point,Icon);
				var marker = new GMarker(point,markerOptions);
				var info = '<strong>'+name+'</strong><br />'+address;
				GEvent.addListener( marker, "click", function(){
					ewindow.openOnMarker(marker,info);
					map.setCenter(marker.getLatLng());
					map.panBy(new GSize(-50, 50));
				});
				bounds.extend(point);
				gmarkers[k] = marker;
				// add a line to the side_bar html
				side_bar_html += '<a href="javascript:myclick('+k+')">'+ k +'. '+ name + '</a><br>';
				k++;
				
				return marker;

			}
			{/literal}
			{if $Search eq "NO"}
			{if $smarty.request.lastyear eq "" }
			{literal}
			function createMarkerLast(point, address, name, zIndex) {
			
				var Icon = new GIcon();
				Icon.image = "http://www.autorepairmarketing.com/customer/js/ewindows/markers/markerlast.png";
				Icon.iconSize = new GSize(20, 34);
				Icon.shadow = "http://www.autorepairmarketing.com/customer/js/ewindows/markers/shadow.png";
				Icon.shadowSize = new GSize(40, 34);
				Icon.iconAnchor = new GPoint(10, 34);
				Icon.infoWindowAnchor = new GPoint(5, 2);
				Icon.transparent = "http://www.autorepairmarketing.com/customer/js/ewindows/	http://www.autorepairmarketing.com/customer/js/ewindows/markers/transparent.png";
				i++;
				
				
				markerOptions = {icon:Icon,zIndexProcess:function(){return zIndex}};
				//var marker = new GMarker(point,Icon);
				var marker = new GMarker(point,markerOptions);
				var info = '<strong>'+name+'</strong><br />'+address;
				GEvent.addListener( marker, "click", function(){
					ewindow.openOnMarker(marker,info);
					map.setCenter(marker.getLatLng());
					map.panBy(new GSize(-50, 50));
				});
				bounds.extend(point);
				gmarkers[k] = marker;
				// add a line to the side_bar html
				side_bar_html += '<a href="javascript:myclick('+k+')">'+ k +'. '+ name + '</a><br>';
				k++;
				
				return marker;

			}
			{/literal}
			{/if}
			{if $smarty.request.lastm eq "" }
			{literal}
			function createMarkerLastMonth(point, address, name, zIndex) {
			
				var Icon = new GIcon();
				Icon.image = "http://www.autorepairmarketing.com/customer/js/ewindows/markers/markerlast-green.png";
				Icon.iconSize = new GSize(20, 34);
				Icon.shadow = "http://www.autorepairmarketing.com/customer/js/ewindows/markers/shadow.png";
				Icon.shadowSize = new GSize(40, 34);
				Icon.iconAnchor = new GPoint(10, 34);
				Icon.infoWindowAnchor = new GPoint(5, 2);
				Icon.transparent = "http://www.autorepairmarketing.com/customer/js/ewindows/	http://www.autorepairmarketing.com/customer/js/ewindows/markers/transparent.png";
				i++;
				
				
				markerOptions = {icon:Icon,zIndexProcess:function(){return zIndex}};
				//var marker = new GMarker(point,Icon);
				var marker = new GMarker(point,markerOptions);
				var info = '<strong>'+name+'</strong><br />'+address;
				GEvent.addListener( marker, "click", function(){
					ewindow.openOnMarker(marker,info);
					map.setCenter(marker.getLatLng());
					map.panBy(new GSize(-50, 50));
				});
				bounds.extend(point);
				gmarkers[k] = marker;
				// add a line to the side_bar html
				side_bar_html += '<a href="javascript:myclick('+k+')">'+ k +'. '+ name + '</a><br>';
				k++;
				
				return marker;

			}
			{/literal}
			{/if}
			{if $smarty.request.last3m eq "" }
			{literal}
			function createMarkerLast3Month(point, address, name, zIndex) {
			
				var Icon = new GIcon();
				Icon.image = "http://www.autorepairmarketing.com/customer/js/ewindows/markers/markerlast-blue.png";
				Icon.iconSize = new GSize(20, 34);
				Icon.shadow = "http://www.autorepairmarketing.com/customer/js/ewindows/markers/shadow.png";
				Icon.shadowSize = new GSize(40, 34);
				Icon.iconAnchor = new GPoint(10, 34);
				Icon.infoWindowAnchor = new GPoint(5, 2);
				Icon.transparent = "http://www.autorepairmarketing.com/customer/js/ewindows/	http://www.autorepairmarketing.com/customer/js/ewindows/markers/transparent.png";
				i++;
				
				
				markerOptions = {icon:Icon,zIndexProcess:function(){return zIndex}};
				//var marker = new GMarker(point,Icon);
				var marker = new GMarker(point,markerOptions);
				var info = '<strong>'+name+'</strong><br />'+address;
				GEvent.addListener( marker, "click", function(){
					ewindow.openOnMarker(marker,info);
					map.setCenter(marker.getLatLng());
					map.panBy(new GSize(-50, 50));
				});
				bounds.extend(point);
				gmarkers[k] = marker;
				// add a line to the side_bar html
				side_bar_html += '<a href="javascript:myclick('+k+')">'+ k +'. '+ name + '</a><br>';
				k++;
				
				return marker;

			}
			{/literal}
			{/if}
			{/if}
			{literal}
			var bounds = new GLatLngBounds();
			
			ewindow = new EWindow(map, E_STYLE_7);
			map.addOverlay(ewindow);
			{/literal}
			{if $smarty.request.comphid eq "all"}
			{literal}
			var zIndex5 = shopCount5;
			{/literal}
			{/if}
			{if $smarty.request.totcust eq "" }
			{literal}
			var zIndex = shopCount;
			{/literal}
			{/if}
			{literal}
			var zIndex4 = shopCount4;
			{/literal}
			{if $Search eq "NO"}
			{if $smarty.request.lastyear eq "" }
			{literal}
			var zIndex1 = shopCount1;
			{/literal}
			{/if}
			{if $smarty.request.lastm eq "" }
			{literal}
			var zIndex2 = shopCount2;
			{/literal}
			{/if}
			{if $smarty.request.lastm eq "" }
			{literal}
			var zIndex3 = shopCount3;
			{/literal}
			{/if}
			{/if}
			{literal}
				{/literal}
					{if $smarty.request.totcust eq "" }
					{foreach item=item name=item from=$MapTRes}			
					{literal}
									
						var address = '<br />{/literal}{$item.MIS_address}{literal}<br />{/literal}{$item.MIS_city}{literal}, {/literal}{$item.MIS_state}{literal} {/literal}{$item.MIS_zip}{literal}<br />';
						var name = "{/literal}{$item.MIS_lastname}{literal}";
						var marker = createMarker(new GLatLng({/literal}{$item.MIS_coordinates}{literal}),address, name, zIndex);
						map.addOverlay(marker);
						zIndex--;
				{/literal}
				{/foreach}
				{/if}
			{literal}
			{/literal}
			{if $Search eq "NO"}
					{if $smarty.request.comphid eq "all" }
					{foreach item=item name=item from=$MapCRes}			
					{literal}
									
						var address5 = '<br />{/literal}{$item.address}{literal}<br />{/literal}{$item.city}{literal}, {/literal}{$item.state}{literal} {/literal}{$item.zip}{literal}<br />';
						var name5 = "{/literal}{$item.name}{literal}";
						var marker = createMarkerComp(new GLatLng({/literal}{$item.coordinates}{literal}),address5, name5, zIndex5);
						map.addOverlay(marker);
						zIndex5--;
				{/literal}
				{/foreach}
				{/if}
				
					{if $smarty.request.lastyear eq "" }
					{foreach item=item1 name=item1 from=$MapLRes}			
					{literal}
									
						var address1 = '<br />{/literal}{$item1.MIS_address}{literal}<br />{/literal}{$item1.MIS_city}{literal}, {/literal}{$item1.MIS_state}{literal} {/literal}{$item1.MIS_zip}{literal}<br />';
						var name1 = "{/literal}{$item1.MIS_lastname}{literal}";
						var marker1 = createMarkerLast(new GLatLng({/literal}{$item1.MIS_coordinates}{literal}),address1, name1, zIndex1);
						map.addOverlay(marker1);
						zIndex1--;
				{/literal}
				{/foreach}
				{/if}
				{/if}
				{if $Search eq "NO"}
				{if $smarty.request.last3m eq "" }
				{foreach item=item3 name=item3 from=$MapL3MRes}			
					{literal}
									
						var address3 = '<br />{/literal}{$item3.MIS_address}{literal}<br />{/literal}{$item3.MIS_city}{literal}, {/literal}{$item3.MIS_state}{literal} {/literal}{$item3.MIS_zip}{literal}<br />';
						var name3 = "{/literal}{$item3.MIS_lastname}{literal}";
						var marker3 = createMarkerLast3Month(new GLatLng({/literal}{$item3.MIS_coordinates}{literal}),address3, name3, zIndex3);
						map.addOverlay(marker3);
						zIndex3--;
				{/literal}
				{/foreach}
				{/if}
				{/if}
				{if $Search eq "NO"}
				{if $smarty.request.lastm eq "" }
				{foreach item=item2 name=item2 from=$MapLMRes}			
					{literal}
									
						var address2 = '<br />{/literal}{$item2.MIS_address}{literal}<br />{/literal}{$item2.MIS_city}{literal}, {/literal}{$item2.MIS_state}{literal} {/literal}{$item2.MIS_zip}{literal}<br />';
						var name2 = "{/literal}{$item2.MIS_lastname}{literal}";
						var marker2 = createMarkerLastMonth(new GLatLng({/literal}{$item2.MIS_coordinates}{literal}),address2, name2, zIndex2);
						map.addOverlay(marker2);
						zIndex2--;
				{/literal}
				{/foreach}
				{/if}
				{/if}
				{foreach item=item4 name=item4 from=$AccDet}			
					{literal}
									
						var address4 = '<br />{/literal}{$item4.address}{literal}<br />{/literal}{$item4.city}{literal}, {/literal}{$item4.State_Name}{literal} {/literal}{$item4.zip_code}{literal}<br />';
						var name4 = "{/literal}{$item4.company_name}{literal}";
						var marker4 = createMarkerShop(new GLatLng({/literal}{$item4.coordinates}{literal}),address4, name4, zIndex4);
						map.addOverlay(marker4);
						zIndex4--;
					{/literal}
					{/foreach}
				
			{literal}
			
			map.setZoom(map.getBoundsZoomLevel(bounds));
		
		}
	}


  function myclick(k) {
        	GEvent.trigger(gmarkers[k], "click");
      	}

   //function pan(lat,long) { map.panTo(new GLatLng(lat,long); }

</script>
{/literal}
{/if}
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
					  <li><a href="{$siteurl}/admin/manage-users.php">Manage Users</a></li>
					  <li>Users Map</li>
				</ul>
				<div class="clr"></div>
			  </div>
			  <div id="admin_head">Google SERPs</div>
		  </div>
		  <div class="ad_textsp">
		  
				<div class="clr" style="height:15px;"></div>		
				{if $MapRes|@count gt '0'}
			<form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript: return checksearch();">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			
			<table style="margin-left:50px;">
			<tr>
				  <td align="right" valign="top" style="padding-left:5px;">From Date:</td>
				  <td align="left" valign="center"><input type="text" name="sdate" id="sdate" class="select" value="{$smarty.request.sdate}"/></td>
				  <td style="width:100px;">&nbsp;</td>
				  <td align="right" valign="top" style="padding-left:5px;">To Date:</td>
				  <td align="left" valign="center"><input type="text" name="edate" id="edate" class="select" value="{$smarty.request.edate}"/></td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Min Spend ($):</td>
				  <td align="left" valign="center"><input type="text" name="minamt" id="minamt" class="select" value="{$smarty.request.minamt}"/></td>
				  <td style="width:100px;">&nbsp;</td>
				  <td align="right" valign="top" style="padding-left:5px;">Max Spend ($):</td>
				  <td align="left" valign="center"><input type="text" name="maxamt" id="maxamt" class="select" value="{$smarty.request.maxamt}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">State (ex: WA):</td>
				  <td align="left" valign="center"><input type="text" name="state" id="state" class="select" value="{$smarty.request.state}"/></td>
				  <td style="width:100px;">&nbsp;</td>
				  <td align="right" valign="top" style="padding-left:5px;">City (ex: Everett):</td>
				  <td align="left" valign="center"><input type="text" name="city" id="city" class="select" value="{$smarty.request.city}"/></td>
				 </tr>
				 <tr>
				  <td align="right" valign="top" style="padding-left:5px;">Zipcode:</td>
				  <td align="left" valign="center"><input type="text" name="zipcode" id="zipcode" class="select" value="{$smarty.request.zipcode}"/></td>
				  <td style="width:100px;">&nbsp;</td>
				 <td> <input name="input" id="submitBtn1" type="Submit" value="Submit" /></td>
				</tr>
				<span style="color:#FF0000; display:none; text-align:center;" id="error"></span>
			</table>

			</form>

			<form name="TaskForm1" class="form" id="TaskForm1" method="post">
			<input type="hidden" name="hid_key1" id="hid_key1" value="">
			<input type="hidden" name="totcust" id="totcust" value="{$smarty.request.totcust}">
			<input type="hidden" name="lastyear" id="lastyear" value="{$smarty.request.lastyear}">
			<input type="hidden" name="last3m" id="last3m" value="{$smarty.request.last3m}">
			<input type="hidden" name="lastm" id="lastm" value="{$smarty.request.lastm}">
			<input type="hidden" name="comphid" id="comphid" value="{$smarty.request.comphid}">
			{if $Search eq "NO"}
			<table style="margin-left:50px;">
				<tr>
				  	<td align="left" colspan="5"><u><strong>Click on flag to Remove form Map search Results</strong></u></td>
				</tr>
				<tr>
					<td><a href="javascript: hideflag('lastm');">
					{if $smarty.request.lastm eq ""}
					<img src="{$siteurl}/js/ewindows/markers/markerlast-green.png" border="0" />
					{else}
					<img src="{$siteurl}/js/ewindows/markers/markerlast-greend.png" border="0" />
					{/if}
					</a> &nbsp; Last Month Customers</td>
					<td style="width:100px;"></td>
					<td><a href="javascript: hideflag('last3m');">
					{if $smarty.request.last3m eq ""}
					<img src="{$siteurl}/js/ewindows/markers/markerlast-blue.png" border="0" />
					{else}
					<img src="{$siteurl}/js/ewindows/markers/markerlast-blued.png" border="0" />
					{/if}
					</a> &nbsp; Last 3 Months Customers</td>
					<td style="width:100px;"></td>
					<td><input type="checkbox" name="comp" id="comp" onchange="javascript: hideflag('all');" {if $smarty.request.comphid eq "all"} checked="checked"{/if}/> &nbsp; Show All Competitors</td>
				</tr>
				<tr>
					<td><a href="javascript: hideflag('lastyear');">
					{if $smarty.request.lastyear eq ""}
					<img src="{$siteurl}/js/ewindows/markers/markerlast.png" border="0" />
					{else}
					<img src="{$siteurl}/js/ewindows/markers/markerlastd.png" border="0" />
					{/if}
					</a> &nbsp; Last Year Customers</td>
					<td style="width:100px;"></td>
					<td><a href="javascript: hideflag('totcust');">
					{if $smarty.request.totcust eq ""}
					<img src="{$siteurl}/js/ewindows/markers/marker.png" border="0" />
					{else}
					<img src="{$siteurl}/js/ewindows/markers/markerd.png" border="0" />
					{/if}
					</a> &nbsp; Total Customers</td>
				</tr>			
				 
			</table>
			{/if}
			</form>
			
			<div id="map_container">
				<div id="map"></div>	
			</div>
			<div class="clear"></div>
			{if $Search eq "NO"}
			<table>
			<tr>
				<td><img src="{$siteurl}/js/ewindows/markers/markerlast-green.png" border="0" /> &nbsp; Last Month Customers</td>
				<td style="width:100px;"></td>
				<td><img src="{$siteurl}/js/ewindows/markers/markerlast-blue.png" border="0" /> &nbsp; Last 3 Months Customers</td>
				<td style="width:100px;"></td>
				<td><img src="{$siteurl}/js/ewindows/markers/marker-cust.png" border="0" /> &nbsp; Shop Location</td>
			</tr>
			<tr>
				<td><img src="{$siteurl}/js/ewindows/markers/markerlast.png" border="0" /> &nbsp; Last Year Customers</td>
				<td style="width:100px;"></td>
				<td><img src="{$siteurl}/js/ewindows/markers/marker.png" border="0" /> &nbsp; Total Customers</td>
			</tr>
			</table>
			{else}
			<table>
			<tr>
				<td><img src="{$siteurl}/js/ewindows/markers/marker-cust-big.png" border="0" /> &nbsp; Shop Location</td>
				<td style="width:100px;"></td>
				<td><img src="{$siteurl}/js/ewindows/markers/marker.png" border="0" /> &nbsp; Search Results Customers</td>
			</tr>
			</table>
			{/if}
			<div class="clear"></div>			
			{/if}
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>
{literal}
<script language="javascript" type="text/javascript">
function hideflag(val)
{
	if(val == "lastm")
	{
		if($('#lastm').val() == "lastm")
			$('#lastm').val("");
		else
			$('#lastm').val('lastm');
	}
	if(val == "last3m")
	{
		if($('#last3m').val() == "last3m")
			$('#last3m').val("");
		else
			$('#last3m').val('last3m');
	}
	if(val == "lastyear")
	{
		if($('#lastyear').val() == "lastyear")
			$('#lastyear').val("");
		else
			$('#lastyear').val('lastyear');
	}
	if(val == "totcust")
	{
		if($('#totcust').val() == "totcust")
			$('#totcust').val("");
		else
			$('#totcust').val('totcust');
	}
	if(val == "all")
	{
		if ($("#comp").is(":checked")) {
		   $('#comphid').val('all');
		   $('#totcust').val('totcust');
		   $('#lastyear').val('lastyear');
		   $('#last3m').val('last3m');
		   $('#lastm').val('lastm');
		}
		else
		{
			$('#comphid').val("");
		   $('#totcust').val('');
		   $('#lastyear').val('');
		   $('#last3m').val('');
		   $('#lastm').val('');
		}
	}
	$('#hid_key1').val('Post');
	$("#TaskForm1").submit();
}
function checksearch()
{
	if($('#sdate').val() == "" && $('#edate').val() == "" && $('#maxamt').val() == "" && $('#minamt').val() == "" && $('#state').val() == "" && $('#city').val() == "" && $('#zipcode').val() == "")
	{
		//alert("Please Enter atleat one value to filter the Map results.");
		$("#error").html("Please Enter atleat one value to filter the Map results.");
		$("#error").show('slow');
		return false;
	}
	if($('#sdate').val() != "" && $('#edate').val() == "")
	{
		//alert("Please Enter To Date.");
		$("#error").html("Please Enter To Date.");
		$("#error").show('slow');
		$('#edate').focus();
		return false;
	}
	if($('#sdate').val() == "" && $('#edate').val() != "")
	{
		//alert("Please Enter From Date.");
		$("#error").html("Please Enter From Date.");
		$("#error").show('slow');
		$('#sdate').focus();
		return false;
	}
	
	if($('#minamt').val() != "" && $('#maxamt').val() == "")
	{
		//alert("Please Enter Maximum Amount Spend.");
		$("#error").html("Please Enter Maximum Amount Spend.");
		$("#error").show('slow');
		$('#maxamt').focus();
		return false;
	}
	if($('#minamt').val() == "" && $('#maxamt').val() != "")
	{
		//alert("Please Enter Minimum Amount Spend.");
		$("#error").html("Please Enter Minimum Amount Spend.");
		$("#error").show('slow');
		$('#minamt').focus();
		return false;
	}
	$("#error").hide();
	$('#hid_key').val('Post');
	return true;
	//$("#TaskForm').submit();
}
$('#submitBtn1').formValidator({
		scope		: '#TaskForm',
		errorDiv	: '#errorDiv1'
});
$(document).ready(function() {	
	$("#sdate").datepicker();
	$("#edate").datepicker();
		});	
</script>
{/literal}