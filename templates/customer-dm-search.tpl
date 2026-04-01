{include file=header.tpl}
<script language="javascript" type="text/javascript" src="http://mm.autorepairmarketing.com/customer/map/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
{if $search eq "Yes"}
{literal}
<script language="javascript" type="text/javascript">

var map; // global var to store the google map
var centerCoord = new google.maps.LatLng(40.453577,-3.68763); // Estadio Santiago Bernabeu, Madrid
var browserDetectedLocation = null;

// global variables used throughout the js functionality
var markersArray = [];
var infoWindow = new google.maps.InfoWindow({});
var defaultZoom = 8;

var latLngAry = new Array();
{/literal}
{foreach item=item name=item from=$Results}	
{if $item.MapLRes|@count gt "0"}		
{literal}
var marksSet = new Array();
{/literal}
{foreach item=item1 name=item1 from=$item.MapLRes}			
{literal}
marksSet.push(new Array('{/literal}{$item1.lat}{literal}','{/literal}{$item1.lan}{literal}','markerimg','{/literal}{$item1.MIS_firstname} {$item1.MIS_lastname}<br>{if $item1.MIS_address neq ""} {$item1.MIS_address}<br>{/if} {if $item1.MIS_city neq ""}{$item1.MIS_city},{/if} {if $item1.MIS_state neq ""}{$item1.MIS_state}{/if} {if $item1.MIS_zip neq 0}- {$item1.MIS_zip}{/if}{literal}'));
{/literal}
{/foreach}
{literal}
latLngAry.push(marksSet);
{/literal}
{/if}
{/foreach}
{literal}

var iteration = 0;

//// Load Map
function loadMap(){ 
    var settings = // json variable for default settings
    {
        zoom: defaultZoom,
        center: centerCoord,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
        }
    };
    
    map = new google.maps.Map(document.getElementById('gMap'), settings);

    map.setCenter(centerCoord);//39
    
    displayMarkers();
	
    //return map;
}

/////Load marker to map
function loadMarker(m_position,markImg,info){
    marker = new google.maps.Marker({
	  	position: m_position,
	  	map: map,
		title: info
	});
	google.maps.event.addListener(marker, 'click', function(event) {
		new google.maps.InfoWindow({
            content: this.title
        }).open(map, this);
	});
            
	markersArray.push(marker);
}	
function displayMarkers(){
	if(iteration == latLngAry.length) iteration = 0;
	var j=0;
	var latlng_pos=[];
	//$('#debugDiv').append('<div>'+latLngAry.length+'</div>');
	var marksAry = latLngAry[iteration];
	//$('#debugDiv').append('<div>'+marksAry[0][1]+'</div>');
	for(i=0; i<marksAry.length;i++){
		var lat = marksAry[i][0];
		var lng = marksAry[i][1];
		var markImg = marksAry[i][2];
		var info = marksAry[i][3];
		$('#debugDiv').append('<div>'+marksAry[i][0]+'</div>');
		var update2Location = new google.maps.LatLng(lat,lng);	
		map.setCenter(update2Location);
		loadMarker(update2Location,markImg,info);
		latlng_pos[j] = update2Location;
		j++;
	}
	
	var latlngbounds = new google.maps.LatLngBounds( );
    for ( var i = 0; i < latlng_pos.length; i++ )
        latlngbounds.extend( latlng_pos[ i ] );
    map.setCenter(latlngbounds.getCenter());
    map.fitBounds(latlngbounds); 
	setTimeout('clearOverlays()',20000);
	iteration++;
}	
// Deletes all markers in the array by removing references to them
function clearOverlays() {
    if (markersArray) {
        for (i in markersArray) {
            markersArray[i].setMap(null);
        }
    }
    markersArray = [];
	setTimeout('displayMarkers()',10000);
}	
$(function () {
    loadMap();
});//$(function																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																							
</script>
{/literal}
{/if}
<div id="body">
	<div class="bodybg" style="min-height:475px;">
			<div>
			<div style="height:10px;"></div>

			<span style="float:right;">&nbsp;</span>
			<h1>Customer Data Map</h1>
			<form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript: return checksearch();">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			
			<table style="margin-left:50px;">
			<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Year:</td>
				  <td align="left" valign="center"><input type="text" name="year" id="year" class="select" value="{$smarty.request.year}"/></td>
				  <td style="width:10px;">&nbsp;</td>
				  <td align="right" valign="center" style="padding-left:5px;"><input name="type" type="radio" value="months" checked="checked" /></td>
				  <td align="left" valign="center">Show Results Monthly</td>
				  <td style="width:10px;">&nbsp;</td>
				  <td align="right" valign="center" style="padding-left:5px;"><input name="type" type="radio" value="years" {if $smarty.request.type eq "years"} checked="checked"{/if} /></td>
				  <td align="left" valign="center">Show Last 10 years Results</td>
				</tr>
				 <tr>
				 <td colspan="8" align="center"> <input name="input" id="submitBtn1" type="Submit" value="Submit" /></td>
				</tr>
				<span style="color:#FF0000; display:none; text-align:center;" id="error"></span>
			</table>

			</form>

			
			{if $search eq "Yes"}
			<div id="map_container">
				<div id="gMap" style="height:600px; width:850px; border:1px solid #FF0000;" align="center"></div>
			</div>
			{/if}
			<div class="clear"></div>

			<div class="clear"></div>			

			</div>

		<div class="clear"></div>
	</div>
</div>
{include file="footer.tpl"}
{literal}
<script language="javascript" type="text/javascript">
function checksearch()
{
	//alert($('#year').val());
	if($('#year').val() == "")
	{
		//alert("Please Enter Minimum Amount Spend.");
		$("#error").html("Please Enter Year.");
		$("#error").show('slow');
		$('#year').focus();
		return false;
	}
	$("#error").hide();
	$('#hid_key').val('Post');
	return true;
	//$("#TaskForm').submit();
}
	
</script>
{/literal}