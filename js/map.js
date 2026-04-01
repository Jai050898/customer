var map; // global var to store the google map
var centerCoord = new google.maps.LatLng(40.453577,-3.68763); // Estadio Santiago Bernabeu, Madrid
var browserDetectedLocation = null;

// global variables used throughout the js functionality
var markersArray = [];
var infoWindow = new google.maps.InfoWindow({});
var defaultZoom = 1;
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

    map.setCenter(centerCoord);
    
    // idle - This event is fired when the map becomes idle after panning (dragging moving etc) or zooming
    /*google.maps.event.addListener(map, 'idle', function() {
            clearOverlays();
        });
    */

    return map;
}
 
 


	/////Load marker to map
function loadMarker(m_position,m_title,m_infowindow,liObj){
        var mark;

	if (markersArray.length != 0) 
	{
		duplicate = false;
		var markcopy;
		var markersCopy = [];
		while(markcopy=markersArray.pop())
		{
			//if((markcopy.position.lat()==m_position.lat())&&(markcopy.position.lng()==m_position.lng())) 
                            //duplicate = true;
			markersCopy.push(markcopy);
		}
                
		markersArray = markersCopy;
		if(duplicate==false)
		{
			marker = new google.maps.Marker({
			  	position: m_position,
			  	map: map,
				title: m_title
			});
			markersArray.push(marker);
			mark = markersArray.pop();
			google.maps.event.addListener(mark, 'click', function() {
				infoWindow.open(map,mark);
				var stringContent = m_infowindow;
				infoWindow.setContent("<div id=\"infowin-overlay\">"+stringContent+"</div>");

				overlayHeight = $('#infowin-overlay').height();
				overlayWidth = $('#infowin-overlay').width();
				$('#infowin-overlay').parent().css('height',overlayHeight);
				$('#infowin-overlay').parent().css('width',overlayWidth);
			});
                        $(liObj).click(function() {
				infoWindow.open(map,mark);
				var stringContent = m_infowindow;
				infoWindow.setContent("<div id=\"infowin-overlay\">"+stringContent+"</div>");

				overlayHeight = $('#infowin-overlay').height();
				overlayWidth = $('#infowin-overlay').width();
				$('#infowin-overlay').parent().css('height',overlayHeight);
				$('#infowin-overlay').parent().css('width',overlayWidth);
			});
			markersArray.push(mark);
		}
	}
	else
	{
		marker = new google.maps.Marker({
		  	position: m_position,
		  	map: map,
			title: m_title
		});
		markersArray.push(marker);
		mark = markersArray.pop();
		google.maps.event.addListener(mark, 'click', function() {
			infoWindow.open(map,mark);
			var stringContent = m_infowindow;
			infoWindow.setContent("<div id=\"infowin-overlay\">"+stringContent+"</div>");

			overlayHeight = $('#infowin-overlay').height();
			overlayWidth = $('#infowin-overlay').width();
			$('#infowin-overlay').parent().css('height',overlayHeight);
			$('#infowin-overlay').parent().css('width',overlayWidth);
		});
                $(liObj).click(function() {
                        infoWindow.open(map,mark);
                        var stringContent = m_infowindow;
                        infoWindow.setContent("<div id=\"infowin-overlay\">"+stringContent+"</div>");

                        overlayHeight = $('#infowin-overlay').height();
                        overlayWidth = $('#infowin-overlay').width();
                        $('#infowin-overlay').parent().css('height',overlayHeight);
                        $('#infowin-overlay').parent().css('width',overlayWidth);
                });
		markersArray.push(mark);
	}	
}	
	
	

//$(function () {
$(document).ready(function(){
    //selecting map filter
    $('.maps li').click(function(){
        
        $(this).siblings().children('a').removeClass('active');
        $(this).children('a').addClass('active');
        $('#searchfilter').val($(this).children('a').attr("id"));
        if($('#mapsearchstr').val() == '')
            return;
        $('#mapSearchFrm').submit();
        
    });
    
    $('#mapSearchFrm').submit(function(){
        var searchStr = $('#mapsearchstr').val();
        if(searchStr == '')
        {
            $('#mapsearchstr').addClass('invalid');
            return false;
        }
        $('#mapsearchstr').removeClass('invalid');
        searchStr = encodeURIComponent(searchStr);
        
        var filter = encodeURIComponent($('#searchfilter').val());
        
        $.ajax({
                type: 'GET',			
                url: site_url+"map/searchmembers/"+filter+"/"+searchStr+"/searchtrue",
                
                beforeSend: function () {
                    map.setZoom(defaultZoom);
                    map.setCenter(centerCoord);
                    
                    clearOverlays();
                    $("#mapresults").html('');
                    fnLargeMap();
                    //$(".tracking_pan").html('Loading results...');
                    $('.tab-content').html('<div id="tab1"><div id="ajax-load"></div></div>');
                    $('#ajax-load').addClass('loading overlay');
                    $('.overlay').attr('style','height:150px;position:relative;');
                    //$("#mapresults").html('Loading...');
                },
                success: function(result){
                    //alert(result); return;
                    if(result.indexOf('session_expiry') >= 0)
                    {
                        $('#tab1').html(result); 
                        return;
                    }    
                    else if(result == 'noresults')
                    {
                        //$("#mapresults").html('');
                        var divHtml = '<div class="project_list tracking_pan" id="tab1"><div class="sysNotice" align="center">No Results found<div class="clear"></div></div></div>';
                        $('.tab-content').html(divHtml);
                        return;
                    }    
                    $('#ajax-load').removeClass('loading overlay');
                    $('.tab-content').html(result); 
                    loadMarkers(result);// add markers to map
                }
        });
        return false;
    });
    
   
    
    ////Load markers via ajax request from server
    function loadMarkers(data){
        var latlng_pos=[];
        var j=0;
        var jsonObj = $.parseJSON(data);
        //if(jsonObj[0] != '') fnSmallMap();
        $("#mapresults").hide();
        $("#mapresults").html(jsonObj[0]);
        $('.tab-content').html(jsonObj[1]);
        $(".tab-content").append(jsonObj[2]);
        
        
        //getting all
        $('.map-left ul li a').each(
            function(){
                var coordString = $(this).attr('rel');
                var coordTitle = $(this).text();
                var coordArray = coordString.split(',');
                var update2Location = new google.maps.LatLng(coordArray[0],coordArray[1]);
                map.setCenter(update2Location);
                latlng_pos[j] = update2Location;
                //latlngbounds = new google.maps.LatLngBounds();
                loadMarker(update2Location,coordTitle,coordArray[2],$(this));
                j++;
            }
        );
        var latlngbounds = new google.maps.LatLngBounds( );
        for ( var i = 0; i < latlng_pos.length; i++ )
            latlngbounds.extend( latlng_pos[ i ] );
        
        map.setCenter(latlngbounds.getCenter());
        map.fitBounds(latlngbounds); 
        
        if(j == 1) map.setZoom(7);
    }
    
});//$(function


// Deletes all markers in the array by removing references to them
function clearOverlays() {
    if (markersArray) {
        for (i in markersArray) {
            markersArray[i].setMap(null);
        }
    }
    markersArray = [];
}

//function to resize map
function fnSmallMap()
{
    var cent= map.getCenter();
    
    $("#gMap").width(342);
    $('#mapresults').width(150);
    
    google.maps.event.trigger(map,"resize");
    map.setCenter(cent);

}
function fnLargeMap()
{
    var cent= map.getCenter();
    $('#mapresults').width(0);
    $("#gMap").width(492);
    
    google.maps.event.trigger(map,"resize");
    map.setCenter(cent);
}
