<?php /* Smarty version 2.6.26, created on 2013-09-10 06:27:11
         compiled from customer-dm1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'customer-dm1.tpl', 10, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/date.css" />
<link rel="stylesheet" type="text/css" href="http://marketingnavigator.info/js/ewindows/ewindow.css" media="screen" />
<!-- <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBA70BPN-qDJy3gBtrL_qi_uW88oxcXE1s" type="text/javascript"></script> -->
<!--<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBA70BPN-qDJy3gBtrL_qi_uW88oxcXE1s" type="text/javascript"></script>-->
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyA59TPhX1seq7bdvoGgLl3ITFdUGx7xvwU" type="text/javascript"></script>
<!-- <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBHjC0kes0fqxtUEpjLJjcehMM8uT7C8GQ" type="text/javascript"></script> -->
<!-- <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyCBCCmVYhsmmoAb9hevPAg-E2Cfm99KDLs" type="text/javascript"></script> -->
<script type="text/javascript" src="http://marketingnavigator.info/js/ewindows/ewindow.js"></script>
<?php if (count($this->_tpl_vars['MapRes']) > '0'): ?>
<?php echo '
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
'; ?>

<?php endif; ?>
<?php if (count($this->_tpl_vars['MapRes']) > '0'): ?>
<?php echo '
<script type="text/javascript">
    var map = null;
    var geocoder = null;
    var gmarkers = [];
	var k = 1;
	var side_bar_html = "";

	function load() {
		if (GBrowserIsCompatible()) {
			map = new GMap2(document.getElementById("map"));
			map.setCenter(new GLatLng('; ?>
<?php echo $this->_tpl_vars['lat_avg']; ?>
<?php echo ','; ?>
<?php echo $this->_tpl_vars['lang_avg']; ?>
<?php echo '), 6);
			//map.setCenter(new GLatLng('; ?>
<?php echo $this->_tpl_vars['lat_avg_shop']; ?>
<?php echo ','; ?>
<?php echo $this->_tpl_vars['lang_avg_shop']; ?>
<?php echo '), 10);
			//map.setCenter(new GLatLng(47.8375375292, -122.228590358), 10);  
			map.addControl(new GSmallZoomControl());
			
			var i=1;
			'; ?>

			<?php if ($_REQUEST['totcust'] == ""): ?>
			<?php echo '
			var shopCount='; ?>
<?php echo $this->_tpl_vars['MapTRescnt']; ?>
<?php echo ';
			'; ?>

			<?php endif; ?>
			<?php echo '
			var shopCount4='; ?>
<?php echo $this->_tpl_vars['AccDetcnt']; ?>
<?php echo ';
			'; ?>

			<?php if ($this->_tpl_vars['Search'] == 'NO'): ?>
			<?php if ($_REQUEST['lastyear'] == ""): ?>
			<?php echo '
			var shopCount1='; ?>
<?php echo $this->_tpl_vars['MapLRescnt']; ?>
<?php echo ';
			'; ?>

			<?php endif; ?>
			<?php if ($_REQUEST['lastm'] == ""): ?>
			<?php echo '
			var shopCount2='; ?>
<?php echo $this->_tpl_vars['MapLMRescnt']; ?>
<?php echo ';
			'; ?>

			<?php endif; ?>
			<?php if ($_REQUEST['last3m'] == ""): ?>
			<?php echo '
			var shopCount3='; ?>
<?php echo $this->_tpl_vars['MapL3MRescnt']; ?>
<?php echo ';
			'; ?>

			<?php endif; ?>
			<?php endif; ?>
			<?php if ($_REQUEST['totcust'] == ""): ?>
			<?php echo '
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
				var info = \'<strong>\'+name+\'</strong><br />\'+address;
				GEvent.addListener( marker, "click", function(){
					ewindow.openOnMarker(marker,info);
					map.setCenter(marker.getLatLng());
					map.panBy(new GSize(-50, 50));
				});
				bounds.extend(point);
				gmarkers[k] = marker;
				// add a line to the side_bar html
				side_bar_html += \'<a href="javascript:myclick(\'+k+\')">\'+ k +\'. \'+ name + \'</a><br>\';
				k++;
				
				return marker;

			}
			'; ?>

			<?php endif; ?>
			<?php echo '
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
				var info = \'<strong>\'+name+\'</strong><br />\'+address;
				GEvent.addListener( marker, "click", function(){
					ewindow.openOnMarker(marker,info);
					map.setCenter(marker.getLatLng());
					map.panBy(new GSize(-50, 50));
				});
				bounds.extend(point);
				gmarkers[k] = marker;
				// add a line to the side_bar html
				side_bar_html += \'<a href="javascript:myclick(\'+k+\')">\'+ k +\'. \'+ name + \'</a><br>\';
				k++;
				
				return marker;

			}
			'; ?>

			<?php if ($this->_tpl_vars['Search'] == 'NO'): ?>
			<?php if ($_REQUEST['lastyear'] == ""): ?>
			<?php echo '
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
				var info = \'<strong>\'+name+\'</strong><br />\'+address;
				GEvent.addListener( marker, "click", function(){
					ewindow.openOnMarker(marker,info);
					map.setCenter(marker.getLatLng());
					map.panBy(new GSize(-50, 50));
				});
				bounds.extend(point);
				gmarkers[k] = marker;
				// add a line to the side_bar html
				side_bar_html += \'<a href="javascript:myclick(\'+k+\')">\'+ k +\'. \'+ name + \'</a><br>\';
				k++;
				
				return marker;

			}
			'; ?>

			<?php endif; ?>
			<?php if ($_REQUEST['lastm'] == ""): ?>
			<?php echo '
			function createMarkerLastMonth(point, address, name, zIndex) {
			
				var Icon = new GIcon();
				Icon.image = "js/ewindows/markers/markerlast-green.png";
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
				var info = \'<strong>\'+name+\'</strong><br />\'+address;
				GEvent.addListener( marker, "click", function(){
					ewindow.openOnMarker(marker,info);
					map.setCenter(marker.getLatLng());
					map.panBy(new GSize(-50, 50));
				});
				bounds.extend(point);
				gmarkers[k] = marker;
				// add a line to the side_bar html
				side_bar_html += \'<a href="javascript:myclick(\'+k+\')">\'+ k +\'. \'+ name + \'</a><br>\';
				k++;
				
				return marker;

			}
			'; ?>

			<?php endif; ?>
			<?php if ($_REQUEST['last3m'] == ""): ?>
			<?php echo '
			function createMarkerLast3Month(point, address, name, zIndex) {
			
				var Icon = new GIcon();
				Icon.image = "js/ewindows/markers/markerlast-blue.png";
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
				var info = \'<strong>\'+name+\'</strong><br />\'+address;
				GEvent.addListener( marker, "click", function(){
					ewindow.openOnMarker(marker,info);
					map.setCenter(marker.getLatLng());
					map.panBy(new GSize(-50, 50));
				});
				bounds.extend(point);
				gmarkers[k] = marker;
				// add a line to the side_bar html
				side_bar_html += \'<a href="javascript:myclick(\'+k+\')">\'+ k +\'. \'+ name + \'</a><br>\';
				k++;
				
				return marker;

			}
			'; ?>

			<?php endif; ?>
			<?php endif; ?>
			<?php echo '
			var bounds = new GLatLngBounds();
			
			ewindow = new EWindow(map, E_STYLE_7);
			map.addOverlay(ewindow);
			'; ?>

			<?php if ($_REQUEST['totcust'] == ""): ?>
			<?php echo '
			var zIndex = shopCount;
			'; ?>

			<?php endif; ?>
			<?php echo '
			var zIndex4 = shopCount4;
			'; ?>

			<?php if ($this->_tpl_vars['Search'] == 'NO'): ?>
			<?php if ($_REQUEST['lastyear'] == ""): ?>
			<?php echo '
			var zIndex1 = shopCount1;
			'; ?>

			<?php endif; ?>
			<?php if ($_REQUEST['lastm'] == ""): ?>
			<?php echo '
			var zIndex2 = shopCount2;
			'; ?>

			<?php endif; ?>
			<?php if ($_REQUEST['lastm'] == ""): ?>
			<?php echo '
			var zIndex3 = shopCount3;
			'; ?>

			<?php endif; ?>
			<?php endif; ?>
			<?php echo '
				'; ?>

					<?php if ($_REQUEST['totcust'] == ""): ?>
					<?php $_from = $this->_tpl_vars['MapTRes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>			
					<?php echo '
									
						var address = \'<br />'; ?>
<?php echo $this->_tpl_vars['item']['MIS_address']; ?>
<?php echo '<br />'; ?>
<?php echo $this->_tpl_vars['item']['MIS_city']; ?>
<?php echo ', '; ?>
<?php echo $this->_tpl_vars['item']['MIS_state']; ?>
<?php echo ' '; ?>
<?php echo $this->_tpl_vars['item']['MIS_zip']; ?>
<?php echo '<br />\';
						var name = "'; ?>
<?php echo $this->_tpl_vars['item']['MIS_lastname']; ?>
<?php echo '";
						var marker = createMarker(new GLatLng('; ?>
<?php echo $this->_tpl_vars['item']['MIS_coordinates']; ?>
<?php echo '),address, name, zIndex);
						map.addOverlay(marker);
						zIndex--;
				'; ?>

				<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
			<?php echo '
			'; ?>

			<?php if ($this->_tpl_vars['Search'] == 'NO'): ?>
					<?php if ($_REQUEST['lastyear'] == ""): ?>
					<?php $_from = $this->_tpl_vars['MapLRes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>			
					<?php echo '
									
						var address1 = \'<br />'; ?>
<?php echo $this->_tpl_vars['item1']['MIS_address']; ?>
<?php echo '<br />'; ?>
<?php echo $this->_tpl_vars['item1']['MIS_city']; ?>
<?php echo ', '; ?>
<?php echo $this->_tpl_vars['item1']['MIS_state']; ?>
<?php echo ' '; ?>
<?php echo $this->_tpl_vars['item1']['MIS_zip']; ?>
<?php echo '<br />\';
						var name1 = "'; ?>
<?php echo $this->_tpl_vars['item1']['MIS_lastname']; ?>
<?php echo '";
						var marker1 = createMarkerLast(new GLatLng('; ?>
<?php echo $this->_tpl_vars['item1']['MIS_coordinates']; ?>
<?php echo '),address1, name1, zIndex1);
						map.addOverlay(marker1);
						zIndex1--;
				'; ?>

				<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['Search'] == 'NO'): ?>
				<?php if ($_REQUEST['last3m'] == ""): ?>
				<?php $_from = $this->_tpl_vars['MapL3MRes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item3']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item3']):
        $this->_foreach['item3']['iteration']++;
?>			
					<?php echo '
									
						var address3 = \'<br />'; ?>
<?php echo $this->_tpl_vars['item3']['MIS_address']; ?>
<?php echo '<br />'; ?>
<?php echo $this->_tpl_vars['item3']['MIS_city']; ?>
<?php echo ', '; ?>
<?php echo $this->_tpl_vars['item3']['MIS_state']; ?>
<?php echo ' '; ?>
<?php echo $this->_tpl_vars['item3']['MIS_zip']; ?>
<?php echo '<br />\';
						var name3 = "'; ?>
<?php echo $this->_tpl_vars['item3']['MIS_lastname']; ?>
<?php echo '";
						var marker3 = createMarkerLast3Month(new GLatLng('; ?>
<?php echo $this->_tpl_vars['item3']['MIS_coordinates']; ?>
<?php echo '),address3, name3, zIndex3);
						map.addOverlay(marker3);
						zIndex3--;
				'; ?>

				<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['Search'] == 'NO'): ?>
				<?php if ($_REQUEST['lastm'] == ""): ?>
				<?php $_from = $this->_tpl_vars['MapLMRes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item2']):
        $this->_foreach['item2']['iteration']++;
?>			
					<?php echo '
									
						var address2 = \'<br />'; ?>
<?php echo $this->_tpl_vars['item2']['MIS_address']; ?>
<?php echo '<br />'; ?>
<?php echo $this->_tpl_vars['item2']['MIS_city']; ?>
<?php echo ', '; ?>
<?php echo $this->_tpl_vars['item2']['MIS_state']; ?>
<?php echo ' '; ?>
<?php echo $this->_tpl_vars['item2']['MIS_zip']; ?>
<?php echo '<br />\';
						var name2 = "'; ?>
<?php echo $this->_tpl_vars['item2']['MIS_lastname']; ?>
<?php echo '";
						var marker2 = createMarkerLastMonth(new GLatLng('; ?>
<?php echo $this->_tpl_vars['item2']['MIS_coordinates']; ?>
<?php echo '),address2, name2, zIndex2);
						map.addOverlay(marker2);
						zIndex2--;
				'; ?>

				<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
				<?php endif; ?>
				<?php $_from = $this->_tpl_vars['AccDet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item4'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item4']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item4']):
        $this->_foreach['item4']['iteration']++;
?>			
					<?php echo '
									
						var address4 = \'<br />'; ?>
<?php echo $this->_tpl_vars['item4']['address']; ?>
<?php echo '<br />'; ?>
<?php echo $this->_tpl_vars['item4']['city']; ?>
<?php echo ', '; ?>
<?php echo $this->_tpl_vars['item4']['State_Name']; ?>
<?php echo ' '; ?>
<?php echo $this->_tpl_vars['item4']['zip_code']; ?>
<?php echo '<br />\';
						var name4 = "'; ?>
<?php echo $this->_tpl_vars['item4']['company_name']; ?>
<?php echo '";
						var marker4 = createMarkerShop(new GLatLng('; ?>
<?php echo $this->_tpl_vars['item4']['coordinates']; ?>
<?php echo '),address4, name4, zIndex4);
						map.addOverlay(marker4);
						zIndex4--;
					'; ?>

					<?php endforeach; endif; unset($_from); ?>
				
			<?php echo '
			
			map.setZoom(map.getBoundsZoomLevel(bounds));
		
		}
	}


  function myclick(k) {
        	GEvent.trigger(gmarkers[k], "click");
      	}

   //function pan(lat,long) { map.panTo(new GLatLng(lat,long); }

</script>
'; ?>

<?php endif; ?>

<div id="body">
	<div class="bodybg" style="min-height:475px;">
			<div>
			<div style="height:10px;"></div>

			<span style="float:right;">&nbsp;</span>
			<h1>Customer Data Map</h1>
			<?php if (count($this->_tpl_vars['MapRes']) > '0'): ?>
			<form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript: return checksearch();">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			
			<table style="margin-left:50px;">
			<tr>
				  <td align="right" valign="top" style="padding-left:5px;">From Date:</td>
				  <td align="left" valign="center"><input type="text" name="sdate" id="sdate" class="select" value="<?php echo $_REQUEST['sdate']; ?>
"/></td>
				  <td style="width:100px;">&nbsp;</td>
				  <td align="right" valign="top" style="padding-left:5px;">To Date:</td>
				  <td align="left" valign="center"><input type="text" name="edate" id="edate" class="select" value="<?php echo $_REQUEST['edate']; ?>
"/></td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Min Spend ($):</td>
				  <td align="left" valign="center"><input type="text" name="minamt" id="minamt" class="select" value="<?php echo $_REQUEST['minamt']; ?>
"/></td>
				  <td style="width:100px;">&nbsp;</td>
				  <td align="right" valign="top" style="padding-left:5px;">Max Spend ($):</td>
				  <td align="left" valign="center"><input type="text" name="maxamt" id="maxamt" class="select" value="<?php echo $_REQUEST['maxamt']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">State (ex: WA):</td>
				  <td align="left" valign="center"><input type="text" name="state" id="state" class="select" value="<?php echo $_REQUEST['state']; ?>
"/></td>
				  <td style="width:100px;">&nbsp;</td>
				  <td align="right" valign="top" style="padding-left:5px;">City (ex: Everett):</td>
				  <td align="left" valign="center"><input type="text" name="city" id="city" class="select" value="<?php echo $_REQUEST['city']; ?>
"/></td>
				 </tr>
				 <tr>
				  <td align="right" valign="top" style="padding-left:5px;">Zipcode:</td>
				  <td align="left" valign="center"><input type="text" name="zipcode" id="zipcode" class="select" value="<?php echo $_REQUEST['zipcode']; ?>
"/></td>
				  <td style="width:100px;">&nbsp;</td>
				 <td> <input name="input" id="submitBtn1" type="Submit" value="Submit" /></td>
				</tr>
				<span style="color:#FF0000; display:none; text-align:center;" id="error"></span>
			</table>

			</form>

			<form name="TaskForm1" class="form" id="TaskForm1" method="post">
			<input type="hidden" name="hid_key1" id="hid_key1" value="">
			<input type="hidden" name="totcust" id="totcust" value="<?php echo $_REQUEST['totcust']; ?>
">
			<input type="hidden" name="lastyear" id="lastyear" value="<?php echo $_REQUEST['lastyear']; ?>
">
			<input type="hidden" name="last3m" id="last3m" value="<?php echo $_REQUEST['last3m']; ?>
">
			<input type="hidden" name="lastm" id="lastm" value="<?php echo $_REQUEST['lastm']; ?>
">
			<?php if ($this->_tpl_vars['Search'] == 'NO'): ?>
			<table style="margin-left:50px;">
				<tr>
				  	<td align="left" colspan="5"><u><strong>Click on flag to Remove form Map search Results</strong></u></td>
				</tr>
				<tr>
					<td><a href="javascript: hideflag('lastm');">
					<?php if ($_REQUEST['lastm'] == ""): ?>
					<img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/markerlast-green.png" border="0" />
					<?php else: ?>
					<img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/markerlast-greend.png" border="0" />
					<?php endif; ?>
					</a> &nbsp; Last Month Customers</td>
					<td style="width:100px;"></td>
					<td><a href="javascript: hideflag('last3m');">
					<?php if ($_REQUEST['last3m'] == ""): ?>
					<img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/markerlast-blue.png" border="0" />
					<?php else: ?>
					<img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/markerlast-blued.png" border="0" />
					<?php endif; ?>
					</a> &nbsp; Last 3 Months Customers</td>
				</tr>
				<tr>
					<td><a href="javascript: hideflag('lastyear');">
					<?php if ($_REQUEST['lastyear'] == ""): ?>
					<img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/markerlast.png" border="0" />
					<?php else: ?>
					<img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/markerlastd.png" border="0" />
					<?php endif; ?>
					</a> &nbsp; Last Year Customers</td>
					<td style="width:100px;"></td>
					<td><a href="javascript: hideflag('totcust');">
					<?php if ($_REQUEST['totcust'] == ""): ?>
					<img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/marker.png" border="0" />
					<?php else: ?>
					<img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/markerd.png" border="0" />
					<?php endif; ?>
					</a> &nbsp; Total Customers</td>
				</tr>			
				 
			</table>
			<?php endif; ?>
			</form>
			
			<div id="map_container">
				<div id="map"></div>	
			</div>
			<div class="clear"></div>
			<?php if ($this->_tpl_vars['Search'] == 'NO'): ?>
			<table>
			<tr>
				<td><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/markerlast-green.png" border="0" /> &nbsp; Last Month Customers</td>
				<td style="width:100px;"></td>
				<td><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/markerlast-blue.png" border="0" /> &nbsp; Last 3 Months Customers</td>
				<td style="width:100px;"></td>
				<td><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/marker-cust.png" border="0" /> &nbsp; Shop Location</td>
			</tr>
			<tr>
				<td><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/markerlast.png" border="0" /> &nbsp; Last Year Customers</td>
				<td style="width:100px;"></td>
				<td><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/marker.png" border="0" /> &nbsp; Total Customers</td>
			</tr>
			</table>
			<?php else: ?>
			<table>
			<tr>
				<td><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/marker-cust-big.png" border="0" /> &nbsp; Shop Location</td>
				<td style="width:100px;"></td>
				<td><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ewindows/markers/marker.png" border="0" /> &nbsp; Search Results Customers</td>
			</tr>
			</table>
			<?php endif; ?>
			<div class="clear"></div>			
			<?php endif; ?>
			</div>
				<div class="clear"></div>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery-date.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
function hideflag(val)
{
	if(val == "lastm")
	{
		if($(\'#lastm\').val() == "lastm")
			$(\'#lastm\').val("");
		else
			$(\'#lastm\').val(\'lastm\');
	}
	if(val == "last3m")
	{
		if($(\'#last3m\').val() == "last3m")
			$(\'#last3m\').val("");
		else
			$(\'#last3m\').val(\'last3m\');
	}
	if(val == "lastyear")
	{
		if($(\'#lastyear\').val() == "lastyear")
			$(\'#lastyear\').val("");
		else
			$(\'#lastyear\').val(\'lastyear\');
	}
	if(val == "totcust")
	{
		if($(\'#totcust\').val() == "totcust")
			$(\'#totcust\').val("");
		else
			$(\'#totcust\').val(\'totcust\');
	}
	$(\'#hid_key1\').val(\'Post\');
	$("#TaskForm1").submit();
}
function checksearch()
{
	if($(\'#sdate\').val() == "" && $(\'#edate\').val() == "" && $(\'#maxamt\').val() == "" && $(\'#minamt\').val() == "" && $(\'#state\').val() == "" && $(\'#city\').val() == "" && $(\'#zipcode\').val() == "")
	{
		//alert("Please Enter atleat one value to filter the Map results.");
		$("#error").html("Please Enter atleat one value to filter the Map results.");
		$("#error").show(\'slow\');
		return false;
	}
	if($(\'#sdate\').val() != "" && $(\'#edate\').val() == "")
	{
		//alert("Please Enter To Date.");
		$("#error").html("Please Enter To Date.");
		$("#error").show(\'slow\');
		$(\'#edate\').focus();
		return false;
	}
	if($(\'#sdate\').val() == "" && $(\'#edate\').val() != "")
	{
		//alert("Please Enter From Date.");
		$("#error").html("Please Enter From Date.");
		$("#error").show(\'slow\');
		$(\'#sdate\').focus();
		return false;
	}
	
	if($(\'#minamt\').val() != "" && $(\'#maxamt\').val() == "")
	{
		//alert("Please Enter Maximum Amount Spend.");
		$("#error").html("Please Enter Maximum Amount Spend.");
		$("#error").show(\'slow\');
		$(\'#maxamt\').focus();
		return false;
	}
	if($(\'#minamt\').val() == "" && $(\'#maxamt\').val() != "")
	{
		//alert("Please Enter Minimum Amount Spend.");
		$("#error").html("Please Enter Minimum Amount Spend.");
		$("#error").show(\'slow\');
		$(\'#minamt\').focus();
		return false;
	}
	$("#error").hide();
	$(\'#hid_key\').val(\'Post\');
	return true;
	//$("#TaskForm\').submit();
}
$(\'#submitBtn1\').formValidator({
		scope		: \'#TaskForm\',
		errorDiv	: \'#errorDiv1\'
});
$(document).ready(function() {	
	$("#sdate").datepicker();
	$("#edate").datepicker();
		});	
</script>
'; ?>