{include file=header.tpl}
<link rel="stylesheet" type="text/css" href="http://marketingnavigator.info/js/ewindows/ewindow.css" media="screen" />
<!-- <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBA70BPN-qDJy3gBtrL_qi_uW88oxcXE1s" type="text/javascript"></script> -->
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBA70BPN-qDJy3gBtrL_qi_uW88oxcXE1s" type="text/javascript"></script>
<script type="text/javascript" src="http://marketingnavigator.info/js/ewindows/ewindow.js"></script>
{literal}
<style type="text/css">
#map_container {
	position: relative;
	width: 585px;
	height:350px;
	float:left;
	padding: 5px;
	margin: 20px 0 0 0;
	background-repeat:no-repeat;
}
#map {
	position: relative;
	width:575px;
	height:350px;
	padding: 0;
	margin: 0;
}
</style>
<script type="text/javascript">
    var map = null;
    var geocoder = null;
    var gmarkers = [];
	var k = 1;
	var side_bar_html = "";

	function load() {
		if (GBrowserIsCompatible()) {
			map = new GMap2(document.getElementById("map"));
			map.setCenter(new GLatLng({/literal}{$lat_avg}{literal},{/literal}{$lang_avg}{literal}), 10);
			//map.setCenter(new GLatLng(47.8375375292, -122.228590358), 10);
			map.addControl(new GSmallZoomControl());
			
			var i=1;
			var shopCount={/literal}{$MapTRescnt}{literal};
			var shopCount1={/literal}{$MapLRescnt}{literal};
			function createMarker(point, address, name, zIndex) {
			
				var Icon = new GIcon();
				Icon.image = "js/ewindows/markers/marker.png";
				Icon.iconSize = new GSize(20, 34);
				Icon.shadow = "js/ewindows/markers/shadow.png";
				Icon.shadowSize = new GSize(40, 34);
				Icon.iconAnchor = new GPoint(10, 34);
				Icon.infoWindowAnchor = new GPoint(5, 2);
				Icon.transparent = "js/ewindows/	js/ewindows/markers/transparent.png";
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
			function createMarkerLast(point, address, name, zIndex) {
			
				var Icon = new GIcon();
				Icon.image = "js/ewindows/markers/markerlast.png";
				Icon.iconSize = new GSize(20, 34);
				Icon.shadow = "js/ewindows/markers/shadow.png";
				Icon.shadowSize = new GSize(40, 34);
				Icon.iconAnchor = new GPoint(10, 34);
				Icon.infoWindowAnchor = new GPoint(5, 2);
				Icon.transparent = "js/ewindows/	js/ewindows/markers/transparent.png";
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
			
			var bounds = new GLatLngBounds();
			
			ewindow = new EWindow(map, E_STYLE_7);
			map.addOverlay(ewindow);

			var zIndex = shopCount;
			var zIndex1 = shopCount1;
				{/literal}
					{foreach item=item name=item from=$MapTRes}			
					{literal}
									
						var address = '<br />{/literal}{$item.MIS_address}{literal}<br />{/literal}{$item.MIS_city}{literal}, {/literal}{$item.MIS_state}{literal} {/literal}{$item.MIS_zip}{literal}<br />';
						var name = "{/literal}{$item.MIS_lastname}{literal}";
						var marker = createMarker(new GLatLng({/literal}{$item.MIS_coordinates}{literal}),address, name, zIndex);
						map.addOverlay(marker);
						// put the assembled side_bar_html contents into the side_bar div
						//document.getElementById("side_bar").innerHTML = side_bar_html;
						zIndex--;
				{/literal}
				{/foreach}
			{literal}
			{/literal}
					{foreach item=item1 name=item1 from=$MapLRes}			
					{literal}
									
						var address1 = '<br />{/literal}{$item1.MIS_address}{literal}<br />{/literal}{$item1.MIS_city}{literal}, {/literal}{$item1.MIS_state}{literal} {/literal}{$item1.MIS_zip}{literal}<br />';
						var name1 = "{/literal}{$item1.MIS_lastname}{literal}";
						var marker1 = createMarkerLast(new GLatLng({/literal}{$item1.MIS_coordinates}{literal}),address1, name1, zIndex1);
						map.addOverlay(marker1);
						// put the assembled side_bar_html contents into the side_bar div
						//document.getElementById("side_bar").innerHTML = side_bar_html;
						zIndex1--;
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
<div id="body">
	<div class="bodybg" style="min-height:475px;">
			<div class="bodyleft">
			<div style="height:10px;"></div>

			<span style="float:right;">&nbsp;</span>
			<h1>Customer Data Center</h1>
						<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
									<tr>
										<th bgcolor="#336699" style="color:#fff;">Title</th>
										<th bgcolor="#336699" style="color:#fff;">Total</th>
										<th bgcolor="#336699" style="color:#fff;">Last Year</th>
									</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">No of Customers</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$ctot}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$ltot}</td>
										</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">Avg Customers Visits</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$avgcust} times</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$lavgcust} times</td>
										</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">Avg. Length of time since last visit</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$avgdays} days</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$lavgdays} days</td>
										</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">Avg. $ per visit</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">$ {$avgcost}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">$ {$lavgcost}</td>
										</tr>
										
								  </table>
								  <div style="height:10px; clear:both;"></div>
			<div id="map_container">
				<div id="map"></div>	
			</div>
			<div class="clear"></div>
			<table>
			<tr>
				<td><img src="{$siteurl}/js/ewindows/markers/markerlast.png" border="0" /> &nbsp; Las Year Customers</td>
				<td style="width:100px;"></td>
				<td><img src="{$siteurl}/js/ewindows/markers/marker.png" border="0" /> &nbsp; Total Customers</td>
			</tr>
			</table>
			<div class="clear"></div>			
			</div>
		{ include file="rightbar.tpl" }
		<div class="clear"></div>
	</div>
</div>
{include file="footer.tpl"}