{include file=header.tpl}
<link rel="stylesheet" type="text/css" href="http://mm.autorepairmarketing.com/customer/js/ewindows/ewindow.css" media="screen" />
<!-- <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBA70BPN-qDJy3gBtrL_qi_uW88oxcXE1s" type="text/javascript"></script> -->
<!--<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBA70BPN-qDJy3gBtrL_qi_uW88oxcXE1s" type="text/javascript"></script>-->
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyA59TPhX1seq7bdvoGgLl3ITFdUGx7xvwU" type="text/javascript"></script>
<!-- <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBHjC0kes0fqxtUEpjLJjcehMM8uT7C8GQ" type="text/javascript"></script> -->
<!-- <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyCBCCmVYhsmmoAb9hevPAg-E2Cfm99KDLs" type="text/javascript"></script> -->
<script type="text/javascript" src="http://mm.autorepairmarketing.com/customer/js/ewindows/ewindow.js"></script>
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
			map.setCenter(new GLatLng({/literal}{$lat_avg}{literal},{/literal}{$lang_avg}{literal}), 4);
			map.addControl(new GSmallZoomControl());
			var i=1;
			var shopCount={/literal}{$MapTRescnt}{literal};
			var shopCount4={/literal}{$AccDetcnt}{literal};
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
			function createMarkerShop(point, address, name, zIndex) {
			
				var Icon = new GIcon();
				Icon.image = "js/ewindows/markers/marker-cust-big.png";
				Icon.iconSize = new GSize(30, 45);
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
			function deleteMarkerShop(point, address, name, zIndex) {
			
				var Icon = new GIcon();
				Icon.image = "js/ewindows/markers/marker-cust-big.png";
				Icon.iconSize = new GSize(30, 45);
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
				
				return null;

			}
			var bounds = new GLatLngBounds();
			
			ewindow = new EWindow(map, E_STYLE_7);
			map.addOverlay(ewindow);
			var zIndex = shopCount;
			var zIndex4 = shopCount4;
			//ShowMapPoints();
			//setTimeout("HideMapPoints()",10000);
			{/literal}

				{foreach item=item4 name=item4 from=$AccDet}			
					{literal}
									
						var address4 = '<br />{/literal}{$item4.address}{literal}<br />{/literal}{$item4.city}{literal}, {/literal}{$item4.State_Name}{literal} {/literal}{$item4.zip_code}{literal}<br />';
						var name4 = "{/literal}{$item4.company_name}{literal}";
						var marker4 = createMarkerShop(new GLatLng({/literal}{$item4.coordinates}{literal}),address4, name4, zIndex4);
						map.addOverlay(marker4);
						zIndex4--;
					{/literal}
					{/foreach}
					{foreach item=item name=item from=$MapTRes}			
					{literal}
									
						var address = '<br />{/literal}{$item.MIS_address}{literal}<br />{/literal}{$item.MIS_city}{literal}, {/literal}{$item.MIS_state}{literal} {/literal}{$item.MIS_zip}{literal}<br />';
						var name = "{/literal}{$item.MIS_lastname}{literal}";
						var marker = createMarker(new GLatLng({/literal}{$item.MIS_coordinates}{literal}),address, name, zIndex);
						//map.addOverlay(marker);
						setTimeout(map.addOverlay(marker),4000);
						zIndex--;
				{/literal}
				{/foreach}
			{literal}
			//ShowMapPoints();
			//setTimeout("ShowMapPoints()",4000);
			map.setZoom(map.getBoundsZoomLevel(bounds));
		}
	}


  function myclick(k) {
        	GEvent.trigger(gmarkers[k], "click");
      	}
	function ShowMapPoints()
	{
		alert("hi");
		{/literal}
		{foreach item=item name=item from=$MapTRes}			
					{literal}
									
						var address = '<br />{/literal}{$item.MIS_address}{literal}<br />{/literal}{$item.MIS_city}{literal}, {/literal}{$item.MIS_state}{literal} {/literal}{$item.MIS_zip}{literal}<br />';
						var name = "{/literal}{$item.MIS_lastname}{literal}";
						var marker = createMarker(new GLatLng({/literal}{$item.MIS_coordinates}{literal}),address, name, zIndex);
						map.addOverlay(marker);
						zIndex--;
				{/literal}
				{/foreach}
				{literal}
	}
	function HideMapPoints()
	{
		
		{/literal}
		{foreach item=item name=item from=$MapTRes}			
			{literal}
							
				var address = '<br />{/literal}{$item.MIS_address}{literal}<br />{/literal}{$item.MIS_city}{literal}, {/literal}{$item.MIS_state}{literal} {/literal}{$item.MIS_zip}{literal}<br />';
				var name = "{/literal}{$item.MIS_lastname}{literal}";
				var marker = deleteMarker(new GLatLng({/literal}{$item.MIS_coordinates}{literal}),address, name, zIndex);
				map.addOverlay(marker);
				zIndex--;
		{/literal}
		{/foreach}
		{literal}
	
	}
</script>
{/literal}
{/if}

<div id="body">
	<div class="bodybg" style="min-height:475px;">
			<div>
			<div style="height:10px;"></div>

			<span style="float:right;">&nbsp;</span>
			<h1>Customer Data Map</h1>
			{if $MapRes|@count gt '0'}
			<div id="map_container">
				<div id="map"></div>	
			</div>
			<div class="clear"></div>
			<div class="clear"></div>			
			{/if}
			</div>
		{ * include file="rightbar.tpl"* }
		<div class="clear"></div>
	</div>
</div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>