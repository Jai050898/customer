<?php
 if( !defined( 'MEDIAWIKI' ) )
  die(-1);
 
 //require_once('includes/SkinTemplate.php');
 
 class Skinrsvp extends SkinTemplate
 {
  var $skinname = 'rsvp', $stylename = 'rsvp',
		$template = 'rsvpTemplate', $useHeadElement = true;
		
		function setupSkinUserCss( OutputPage $out ) {
		global $wgHandheldStyle;

		parent::setupSkinUserCss( $out );
		
		// Append to the default screen common & print styles...
		$out->addStyle( 'rsvp/main.css', 'screen' );
		if( $wgHandheldStyle ) {
			// Currently in testing... try 'chick/main.css'
			$out->addStyle( $wgHandheldStyle, 'handheld' );
		}

		}
 }
 class rsvpTemplate extends QuickTemplate
 {
 var $skin;
  function execute()
  {
  	// Suppress warnings to prevent notices about missing indexes in
  	// $this->data
	global $wgRequest, $wgOut;
	$this->skin = $skin = $this->data['skin'];
	$action = $wgRequest->getText( 'action' );
  	wfSuppressWarnings();
	$this->html( 'headelement' );
 	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<link href="<?php echo SITEURL;?>/css/template_css.css" rel="stylesheet" type="text/css" media="screen" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php $this->html('headlinks') ?>
	<title><?php $this->text('pagetitle') ?></title>
	<style type="text/css" media="screen,projection">
	  /*<![CDATA[*/ @import "<?php $this->text('stylepath') ?>/
	  <?php $this->text('stylename') ?>/main.css"; /*]]>*/
	  </style>
	  <link rel="stylesheet" type="text/css" media="print"
	  href="<?php $this->text('stylepath') ?>/common/commonPrint.css" />
	  <?php if($this->data['jsvarurl' ])
	 { ?>
	  <script type="text/javascript" src="<?php $this->text('jsvarurl' )
	  ?>"></script><?php } ?>
	  <script type="text/javascript" src="<?php $this->text('stylepath' ) ?>
	  /common/wikibits.js"></script>
	  <?php if($this->data['usercss' ]) { ?><style type="text/css">
	  <?php $this->html('usercss' ) ?></style><?php } ?>
	  <?php if($this->data['userjs' ]) { ?><script type="text/ javascript"
	  src="<?php $this->text('userjs' ) ?>"></script><?php } ?>
	  <?php if($this->data['userjsprev']) { ?><script type="text/ javascript">
	  <?php $this->html('userjsprev') ?></script><?php } ?>
	</head>
	<?php if($this->data['sitenotice']) { ?><div id="siteNotice"><?php 
                                       $this->html('sitenotice') ?></div><?php } ?>
	<body>
	<div id="container">
	<div id="body">
		<!--START of header part -->
		<div id="nav">
		  <ul>
			<?php if($_SESSION['User']['UID'] == '') { ?>
			<li><a href="<?php echo SITEURL; ?>" ><span>Home</span></a></li>
			<li><a href="<?php echo SITEURL; ?>/register.php" ><span>Register</span></a></li>
			<li><a href="<?php echo SITEURL; ?>/login.php" ><span>Login</span></a></li>
			<?php } else { 
			 $Page = 'resources';
			?>
			<li><a href="<?php echo SITEURL; ?>/dashboard.php" <?php if($Page == 'Home') {?>  class="active" <?php } ?>><span>Home</span></a>	</li>
			<li><a href="#"  <?php if($Page == 'projects') {?>  class="active"<?php } ?>><span>Projects</span></a>
				<ul>
					<li><a href="<?php echo SITEURL; ?>/myalbums.php"><span>My Gallery</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/manage-projects.php"><span>Manage Projects</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/project-tracker.php"><span>Project Tasks</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/manage-uploaded-files.php"><span>My Files</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/admin-uploaded-files.php"><span>Admin Files</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/upload-admin-files.php"><span>Upload Large Files</span></a></li>
				</ul>
			</li>
			<li><a href="#"  <?php if($Page == 'surveys') { ?>  class="active"<?php } ?>><span>Surveys</span></a>
				<ul>
					<li><a href="<?php echo SITEURL; ?>/marketing-survey.php"><span>Marketing Survey</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/website-survey.php"><span>Web Site Survey</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/integrated-survey.php"><span>Integrated Survey</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/questionnaire.php?cat=4"><span>Survey</span></a></li>
				</ul>
			</li>
			<li><a href="#" <?php if($Page == 'marketing') { ?>  class="active"<?php } ?>><span>Marketing</span></a>
				<ul>
					<li><a href="<?php echo SITEURL; ?>/marketing-budget.php"><span>Marketing Budget</span></a></li>
					<li><a href="javascript: ShowMB();"><span>Marketing Budget Map</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/monitoring.php"><span>Monitoring Goals</span></a></li>
					<li><a href="javascript: ShowMG();"><span>Monitoring Goals Map</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/calendars.php"><span>Calendars</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/calendars-cat.php"><span>Categories</span></a></li>
				</ul>
			</li>
			<li><a href="#" <?php if($Page == 'website') { ?>  class="active"<?php } ?>><span>Website</span></a>
				<ul>
					<li><a href="<?php echo SITEURL; ?>/online-tests.php"><span>Online Tests</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/gogoleserp.php"><span>Google</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/bingserp.php"><span>Bing</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/yahooserp.php"><span>Yahoo</span></a></li>
				</ul>
			</li>
			<li><a href="#" <?php if($Page == 'customers') { ?>  class="active"<?php } ?>><span>Customers</span></a>
				<ul>
					<li><a href="<?php echo SITEURL; ?>/customer-dc.php"><span>Customer Dashboard</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/manage-mis-customers.php"><span>Manage Customers</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/manage-mis-customers-report.php"><span>Customer Report</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/manage-mis-zipcode-customers.php"><span>Zip Code List</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/manage-mis-city-customers.php"><span>City List</span></a></li>
				</ul>
			</li>
			<li><a href="<?php echo SITEURL; ?>/myaccount.php"  <?php if($Page == 'account') { ?>  class="active"<?php } ?>><span>My Account</span></a>
				<ul>
					<li><a href="<?php echo SITEURL; ?>/edit-profile.php"><span>Edit Profile</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/change-password.php"><span>Change Password</span></a></li>
				</ul>
			</li>
			<li><a href="#"  <?php if($Page == 'resources') { ?>  class="active"<?php } ?>><span>Resources</span></a>
				<ul>
					<li><a href="<?php echo SITEURL; ?>/albums.php"><span>Image Gallery</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/blog/"><span>Blog</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/wiki/"><span>Wiki</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/portfolio.php"><span>Portfolio</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/links.php"><span>Links</span></a></li>
					<li><a href="<?php echo SITEURL; ?>/manage-tickets.php"><span>Support Tickets</span></a></li>
				</ul>
			</li>
			<li><a href="<?php echo SITEURL; ?>/logout.php"><span>Logout</span></a></li>
			<?php } ?>
			<!-- <li><a href="{$siteurl}/portfolio.php"><span>Portfolio</span></a></li> -->
		  </ul>
		  <div class="clear"></div>
		</div>
    <!-- end of HEADER div -->
	  <div class="clear"></div>
	   <div id="body">
		<div class="bodybg" style="min-height:475px;">
			<div class="bodyleft">
			  <div style="height:10px;"></div>
				<div id="header1">
					<a name="top" id="contentTop"></a>
					<h1><a href="<?php echo htmlspecialchars
					  ($this->data['nav_urls']['mainpage']['href'])?>"
						title="<?php $this->msg('mainpage') ?>">
						  <?php $this->text('title') ?></a></h1>
					<ul>
					<?php foreach($this->data['content_actions'] as $key => $action) { ?>
					  <li <?php if($action['class']) { ?>class="<?php echo
						htmlspecialchars($action['class']) ?>"<?php } ?> >
						  <a href="<?php echo htmlspecialchars($action['href']) ?>">
							<?php echo htmlspecialchars($action['text']) ?></a></li>
					<?php } ?>
					</ul>
				  </div>		
				<div id="content" class="left_content" style="color:#2f3337;">
					<div id="mw_contentholder" <?php $this->html("specialpageattributes") ?>>
					<div class='mw-topboxes'>
						<?php if($this->data['newtalk'] ) {
							?><div class="usermessage mw-topbox"><?php $this->html('newtalk')  ?></div>
						<?php } ?>
						<?php if($this->data['sitenotice']) {
							?><div class="mw-topbox" id="siteNotice"><?php $this->html('sitenotice') ?></div>
						<?php } ?>
					</div>
			
					<div id="contentSub"<?php $this->html('userlangattributes') ?>><?php $this->html('subtitle') ?></div>
			
					<?php if($this->data['undelete']) { ?><div id="contentSub2"><?php     $this->html('undelete') ?></div><?php } ?>
					
					<?php $this->html('bodytext') ?>

					<?php if($this->data['catlinks']) { $this->html('catlinks'); } ?>
					<?php $this->html ('dataAfterContent') ?>
				</div>
				</div>
			 </div>
		  <!--end of middle part -->
			  <div class="bodyright">
				<div class="rightbox">
				<div class="title">Quick Links</div>  
					<div class="rightboxbg"> 
					<ul>
						 <h4><?php $this->msg('personaltools') ?></h4>
						 <?php foreach($this->data['personal_urls'] as $key => $item)
						 {
						 ?><li id="pt-<?php echo htmlspecialchars($key) ?>"><a href="<?php
						 echo htmlspecialchars($item['href']) ?>"<?php
						 if(!empty($item['class']))
						 { ?>
						 class="<?php
						  echo htmlspecialchars($item['class']) ?>"<?php } ?>><?php
						  echo htmlspecialchars($item['text']) ?></a></li><?php
						 } ?>
						 </ul>      
					<?php $sidebar = $this->data['sidebar'];
						if ( !isset( $sidebar['SEARCH'] ) ) $sidebar['SEARCH'] = true;
						if ( !isset( $sidebar['TOOLBOX'] ) ) $sidebar['TOOLBOX'] = true;
						if ( !isset( $sidebar['LANGUAGES'] ) ) $sidebar['LANGUAGES'] = true;
				
						foreach ($sidebar as $boxName => $cont) {
							if ( $boxName == 'SEARCH' ) {
								$this->searchBox();
							} elseif ( $boxName == 'TOOLBOX' ) {
								$this->toolbox();
							} elseif ( $boxName == 'LANGUAGES' ) {
								$this->languageBox();
							} else {
								$this->customBox( $boxName, $cont );
							}
						} ?>
					 	
					 </div>
				</div>
			</div>
		  <div class="clear"></div>
		</div>
	 </div> <!-- end of MBODY div -->
	 
	  </div>
	<!--footer-->
	<div id="footer">
	<div id="footer_wrap">
	<div id="footer_inner" style=" height:20px;">
	
	<span style="float:right; padding-right:5px; color:#FFFFFF;">&copy; 2011 RSVP.</span>
	<br />
	
	</div>
	</div>
	<!--Footer Links-->
	</div>
	<!--end footer-->
	</body>
	</html>
	<?php
  }
  
  /*************************************************************************************************/
	function searchBox() {
		global $wgUseTwoButtonsSearchForm;
?>
	<!-- search -->
	<ul
		<h4><?php $this->msg('search') ?></h4>
			<form action="<?php $this->text('wgScript') ?>" id="searchform">
				<input type='hidden' name="title" value="<?php $this->text('searchtitle') ?>"/>
				<input id="searchInput" name="search" type="text"<?php echo $this->skin->tooltipAndAccesskey('search');
					if( isset( $this->data['search'] ) ) {
						?> value="<?php $this->text('search') ?>"<?php } ?> />
				<input type='submit' name="go" class="searchButton" id="searchGoButton"	value="<?php $this->msg('searcharticle') ?>"<?php echo $this->skin->tooltipAndAccesskey( 'search-go' ); ?> /><?php if ($wgUseTwoButtonsSearchForm) { ?>&nbsp;
				
				<?php } ?>

			</form>
	</ul>
<?php
	}

	/*************************************************************************************************/
	function toolbox() {
?>
	<!-- toolbox -->
		
			<ul>
			<h4><?php $this->msg('toolbox') ?></h4>
<?php
		if($this->data['notspecialpage']) { ?>
				<li id="t-whatlinkshere"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['whatlinkshere']['href'])
				?>"<?php echo $this->skin->tooltipAndAccesskey('t-whatlinkshere') ?>><?php $this->msg('whatlinkshere') ?></a></li>
<?php
			if( $this->data['nav_urls']['recentchangeslinked'] ) { ?>
				<li id="t-recentchangeslinked"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['recentchangeslinked']['href'])
				?>"<?php echo $this->skin->tooltipAndAccesskey('t-recentchangeslinked') ?>><?php $this->msg('recentchangeslinked-toolbox') ?></a></li>
<?php 		}
		}
		if(isset($this->data['nav_urls']['trackbacklink'])) { ?>
			<li id="t-trackbacklink"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['trackbacklink']['href'])
				?>"<?php echo $this->skin->tooltipAndAccesskey('t-trackbacklink') ?>><?php $this->msg('trackbacklink') ?></a></li>
<?php 	}
		if($this->data['feeds']) { ?>
			<li id="feedlinks"><?php foreach($this->data['feeds'] as $key => $feed) {
					?><a id="<?php echo Sanitizer::escapeId( "feed-$key" ) ?>" href="<?php
					echo htmlspecialchars($feed['href']) ?>" rel="alternate" type="application/<?php echo $key ?>+xml" class="feedlink"<?php echo $this->skin->tooltipAndAccesskey('feed-'.$key) ?>><?php echo htmlspecialchars($feed['text'])?></a>&nbsp;
					<?php } ?></li><?php
		}

		foreach( array('contributions', 'log', 'blockip', 'emailuser', 'upload', 'specialpages') as $special ) {

			if($this->data['nav_urls'][$special]) {
				?><li id="t-<?php echo $special ?>"><a href="<?php echo htmlspecialchars($this->data['nav_urls'][$special]['href'])
				?>"<?php echo $this->skin->tooltipAndAccesskey('t-'.$special) ?>><?php $this->msg($special) ?></a></li>
<?php		}
		}

		if(!empty($this->data['nav_urls']['print']['href'])) { ?>
				<li id="t-print"><a href="<?php echo htmlspecialchars($this->data['nav_urls']['print']['href'])
				?>" rel="alternate"<?php echo $this->skin->tooltipAndAccesskey('t-print') ?>><?php $this->msg('printableversion') ?></a></li><?php
		}

		if(!empty($this->data['nav_urls']['permalink']['href'])) { ?>
				<li id="t-permalink"><a href="<?php echo htmlspecialchars($this->data['nav_urls']['permalink']['href'])
				?>"<?php echo $this->skin->tooltipAndAccesskey('t-permalink') ?>><?php $this->msg('permalink') ?></a></li><?php
		} elseif ($this->data['nav_urls']['permalink']['href'] === '') { ?>
				<li id="t-ispermalink"<?php echo $this->skin->tooltip('t-ispermalink') ?>><?php $this->msg('permalink') ?></li><?php
		}

		wfRunHooks( 'SkinTemplateToolboxEnd', array( &$this ) );
?>
			</ul>
<?php
	}

	/*************************************************************************************************/
	function languageBox() {
		if( $this->data['language_urls'] ) {
?>
	<div id="p-lang" class="portlet">
		<h5><?php $this->msg('otherlanguages') ?></h5>
		<div class="pBody">
			<ul>
<?php		foreach($this->data['language_urls'] as $langlink) { ?>
				<li class="<?php echo htmlspecialchars($langlink['class'])?>"><?php
				?><a href="<?php echo htmlspecialchars($langlink['href']) ?>"><?php echo $langlink['text'] ?></a></li>
<?php		} ?>
			</ul>
		</div>
	</div>
<?php
		}
	}

	/*************************************************************************************************/
	function customBox( $bar, $cont ) {
?>
			
<?php   if ( is_array( $cont ) ) { ?>
			<ul>
			<h4><?php $out = wfMsg( $bar ); if (wfEmptyMsg($bar, $out)) echo $bar; else echo $out; ?></h4>
<?php 			foreach($cont as $key => $val) { ?>
				<li id="<?php echo Sanitizer::escapeId($val['id']) ?>"<?php
					if ( $val['active'] ) { ?> class="active" <?php }
				?>><a href="<?php echo htmlspecialchars($val['href']) ?>"<?php echo $this->skin->tooltipAndAccesskey($val['id']) ?>><?php echo htmlspecialchars($val['text']) ?></a></li>
<?php			} ?>
			</ul>
<?php   } else {
			# allow raw HTML block to be defined by extensions
			print $cont;
		}
?>
	
	
<?php
	}
 }
 ?>
