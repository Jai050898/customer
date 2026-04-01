<?php /* Smarty version 2.6.26, created on 2013-09-10 06:18:25
         compiled from customer-dm-test.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'customer-dm-test.tpl', 9, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link rel="stylesheet" type="text/css" href="http://mm.autorepairmarketing.com/customer/js/ewindows/ewindow.css" media="screen" />
<!-- <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBA70BPN-qDJy3gBtrL_qi_uW88oxcXE1s" type="text/javascript"></script> -->
<!--<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBA70BPN-qDJy3gBtrL_qi_uW88oxcXE1s" type="text/javascript"></script>-->
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyA59TPhX1seq7bdvoGgLl3ITFdUGx7xvwU" type="text/javascript"></script>
<!-- <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBHjC0kes0fqxtUEpjLJjcehMM8uT7C8GQ" type="text/javascript"></script> -->
<!-- <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyCBCCmVYhsmmoAb9hevPAg-E2Cfm99KDLs" type="text/javascript"></script> -->
<script type="text/javascript" src="http://mm.autorepairmarketing.com/customer/js/ewindows/ewindow.js"></script>
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
<?php echo '), 4);
			map.addControl(new GSmallZoomControl());
			var i=1;
			var shopCount='; ?>
<?php echo $this->_tpl_vars['MapTRescnt']; ?>
<?php echo ';
			var shopCount4='; ?>
<?php echo $this->_tpl_vars['AccDetcnt']; ?>
<?php echo ';
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
				
				return null;

			}
			var bounds = new GLatLngBounds();
			
			ewindow = new EWindow(map, E_STYLE_7);
			map.addOverlay(ewindow);
			var zIndex = shopCount;
			var zIndex4 = shopCount4;
			//ShowMapPoints();
			//setTimeout("HideMapPoints()",10000);
			'; ?>


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
						//map.addOverlay(marker);
						setTimeout(map.addOverlay(marker),4000);
						zIndex--;
				'; ?>

				<?php endforeach; endif; unset($_from); ?>
			<?php echo '
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
		'; ?>

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
				<?php echo '
	}
	function HideMapPoints()
	{
		
		'; ?>

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
				var marker = deleteMarker(new GLatLng('; ?>
<?php echo $this->_tpl_vars['item']['MIS_coordinates']; ?>
<?php echo '),address, name, zIndex);
				map.addOverlay(marker);
				zIndex--;
		'; ?>

		<?php endforeach; endif; unset($_from); ?>
		<?php echo '
	
	}
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
			<div id="map_container">
				<div id="map"></div>	
			</div>
			<div class="clear"></div>
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