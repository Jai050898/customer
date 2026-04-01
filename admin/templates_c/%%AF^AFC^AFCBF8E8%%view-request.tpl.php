<?php /* Smarty version 2.6.26, created on 2013-01-19 05:49:32
         compiled from view-request.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<style type="text/css">
.error-div{color:#FF0000;}
</style>
'; ?>

<div id="bodypart">
      <div id="mainbody">
       
        <div id="contentpane">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right-bar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id="innerleft">
      
      <div class="admin-rightpart">
      <div class="admin_topbgnav">
      <div id="admin_bcrumb">
      <ul>
      <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/dashboard.php">Home</a></li>
	  <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-requests.php">Manage Requests</a></li>
      <li>View Request</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">View User Request</div>
      </div>
	  <form name="myform" id="myform" method="post">
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							  <tr>
									<td colspan="2"><h2>View User Request</h2></td>
								  </tr>
							<tr class="color_trbg">
								<td width="20%">Business Name</td>
								<td width="80%" align="left">
									<?php echo $this->_tpl_vars['User']['bname']; ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Domain</td>
								<td width="80%" align="left">
									<?php echo $this->_tpl_vars['User']['domain']; ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Keyword</td>
								<td width="80%" align="left">
									<?php echo $this->_tpl_vars['User']['keyword']; ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">City</td>
								<td width="80%" align="left">
									<?php echo $this->_tpl_vars['User']['city']; ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">State</td>
								<td width="80%" align="left">
									<?php echo $this->_tpl_vars['User']['state']; ?>

								 </td>
							  </tr>
							<tr class="color_trbg">
								<td width="20%">Zipcode</td>
								<td width="80%" align="left">
									<?php echo $this->_tpl_vars['User']['zip_code']; ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">IP Address</td>
								<td width="80%" align="left">
									<?php echo $this->_tpl_vars['User']['ip_address']; ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Browser</td>
								<td width="80%" align="left">
									<?php echo $this->_tpl_vars['User']['browser']; ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Created Date</td>
								<td width="80%" align="left">
									<?php echo $this->_tpl_vars['User']['created_date']; ?>

								 </td>
							  </tr>
								<tr>
									<td colspan="2"><h2>URL info</h2></td>
								 </tr>
								 <tr>
									<td colspan="2">
									<ul>
										<li><a href="http://www.google.com/#hl=en&tbo=d&output=search&sclient=psy-ab&q=<?php echo $this->_tpl_vars['sword']; ?>
" target="_blank"  id="linkid">http://www.google.com/#hl=en&tbo=d&output=search&sclient=psy-ab&q=<?php echo $this->_tpl_vars['sword']; ?>
</a></li>
										<li><a href="http://www.bing.com/search?q=<?php echo $this->_tpl_vars['sword']; ?>
" target="_blank"  id="linkid">http://www.bing.com/search?q=<?php echo $this->_tpl_vars['sword']; ?>
</a></li>
										<li><a href="http://search.yahoo.com/search;_ylt=Am0Hhr3k1tUR6maq1mU8Cr6bvZx4?p=<?php echo $this->_tpl_vars['sword']; ?>
" target="_blank"  id="linkid">http://search.yahoo.com/search;_ylt=Am0Hhr3k1tUR6maq1mU8Cr6bvZx4?p=<?php echo $this->_tpl_vars['sword']; ?>
</a></li>
										<li><a href="http://getlisted.org/snapshot.aspx?eqs=<?php echo $this->_tpl_vars['dword']; ?>
&z=<?php echo $this->_tpl_vars['zip']; ?>
" target="_blank"  id="linkid">http://getlisted.org/snapshot.aspx?eqs=<?php echo $this->_tpl_vars['dword']; ?>
&z=<?php echo $this->_tpl_vars['zip']; ?>
</a></li> 
										<li><a href="http://marketing.grader.com/site/<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://marketing.grader.com/site/<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
										<li><a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
										<li><a href="http://validator.w3.org/check?uri=<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://validator.w3.org/check?uri=<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
										<li><a href="http://validator.w3.org/checklink?uri=<?php echo $this->_tpl_vars['domain']; ?>
&summary=1&hide_redirects=1&hide_type=all&no_accept_language=0&recursive=1&depth=500&cookie=nochanges" target="_blank"  id="linkid">http://validator.w3.org/checklink?uri=<?php echo $this->_tpl_vars['domain']; ?>
&summary=1&hide_redirects=1&hide_type=all&no_accept_language=0&recursive=1&depth=500&cookie=nochanges </a></li>
										<li><a href="http://www.sitetrail.com/<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://www.sitetrail.com/<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
										<!-- <li><a href="http://www.woorank.com/en/www/<?php echo $this->_tpl_vars['host']; ?>
" target="_blank"  id="linkid">http://www.woorank.com/en/www/<?php echo $this->_tpl_vars['host']; ?>
</a></li> -->
										<li><a href="http://www.alexa.com/siteinfo/<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://www.alexa.com/siteinfo/<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
										<!-- <li><a href="http://www.quantcast.com/<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://www.quantcast.com/<?php echo $this->_tpl_vars['domain']; ?>
</a></li> -->
										<li><a href="http://www.city-data.com/city/<?php echo $this->_tpl_vars['city']; ?>
-<?php echo $this->_tpl_vars['state']; ?>
.html" target="_blank"  id="linkid">http://www.city-data.com/city/<?php echo $this->_tpl_vars['city']; ?>
-<?php echo $this->_tpl_vars['state']; ?>
.html</a></li>
										<li><a href="http://www.clearwebstats.com/process.php?domain=<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://www.clearwebstats.com/process.php?domain=<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
										<li><a href="http://<?php echo $this->_tpl_vars['host']; ?>
.website-information.info/" target="_blank"  id="linkid">http://<?php echo $this->_tpl_vars['host']; ?>
.website-information.info/</a></li>
										<li><a href="http://www.opensiteexplorer.org/links?site=<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://www.opensiteexplorer.org/links?site=<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
										<!-- <li><a href="http://uitest.com/en/check/results/?uri=<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://uitest.com/en/check/results/?uri=<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
										
										<li><a href="http://www.yelp.com/biz/<?php echo $this->_tpl_vars['dword1']; ?>
-<?php echo $this->_tpl_vars['city']; ?>
" target="_blank"  id="linkid">http://www.yelp.com/biz/<?php echo $this->_tpl_vars['dword1']; ?>
-<?php echo $this->_tpl_vars['city']; ?>
</a></li> -->
										<li><a href="http://www.merchantcircle.com/search?q=<?php echo $this->_tpl_vars['dword']; ?>
&qn=<?php echo $this->_tpl_vars['city']; ?>
+<?php echo $this->_tpl_vars['state']; ?>
" target="_blank"  id="linkid">http://www.merchantcircle.com/search?q=<?php echo $this->_tpl_vars['dword']; ?>
&qn=<?php echo $this->_tpl_vars['city']; ?>
+<?php echo $this->_tpl_vars['state']; ?>
 </a></li>
										<li> <a href="http://www.webpagetest.org/?url=<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://www.webpagetest.org/?url=<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
										<li><a href="http://mattkersley.com/responsive/?<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://mattkersley.com/responsive/?<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
										<li><a href="http://wave.webaim.org/report?url=<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://wave.webaim.org/report?url=<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
				<li><a href="http://www.sidar.org/hera/index.php.en?url=<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://www.sidar.org/hera/index.php.en?url=<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
				<li><a href="http://colorfilter.wickline.org/?a=1;r=uitest.com;l=0;j=1;u=<?php echo $this->_tpl_vars['domain']; ?>
;t=p" target="_blank"  id="linkid">http://colorfilter.wickline.org/?a=1;r=uitest.com;l=0;j=1;u=<?php echo $this->_tpl_vars['domain']; ?>
;t=p</a></li>
				<li><a href="http://www.htmlhelp.com/cgi-bin/validate.cgi?url=<?php echo $this->_tpl_vars['do']; ?>
&warnings=yes&spider=yes" target="_blank"  id="linkid">http://www.htmlhelp.com/cgi-bin/validate.cgi?url=<?php echo $this->_tpl_vars['do']; ?>
&warnings=yes&spider=yes </a></li>
				<li><a href="http://analyze.websiteoptimization.com/authenticate.php?url=<?php echo $this->_tpl_vars['domain']; ?>
&" target="_blank"  id="linkid">http://analyze.websiteoptimization.com/authenticate.php?url=<?php echo $this->_tpl_vars['domain']; ?>
& </a></li>
				<li><a href="http://ready.mobi/results.jsp?uri=<?php echo $this->_tpl_vars['do1']; ?>
&locale=en_EN" target="_blank"  id="linkid">http://ready.mobi/results.jsp?uri=<?php echo $this->_tpl_vars['do']; ?>
&locale=en_EN </a></li>
				<li> <a href="https://developers.google.com/speed/pagespeed/insights#url=<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">https://developers.google.com/speed/pagespeed/insights#url=<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
				<li><a href="http://tools.pingdom.com/fpt/?url=<?php echo $this->_tpl_vars['domain']; ?>
&treeview=0&column=objectID&order=1&type=0&save=true" target="_blank"  id="linkid">http://tools.pingdom.com/fpt/?url=<?php echo $this->_tpl_vars['domain']; ?>
&treeview=0&column=objectID&order=1&type=0&save=true</a></li>
				<li><a href="http://www.texttrust.com/public/free-trial.aspx?affiliate_id=12115586&checkurl=<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://www.texttrust.com/public/free-trial.aspx?affiliate_id=12115586&checkurl=<?php echo $this->_tpl_vars['domain']; ?>
 </a></li>
				<li><a href="http://www.schroepl.net/cgi-bin/http_trace.pl?url=<?php echo $this->_tpl_vars['domain']; ?>
&method=GET&version=HTTP%2F1.0" target="_blank"  id="linkid">http://www.schroepl.net/cgi-bin/http_trace.pl?url=<?php echo $this->_tpl_vars['domain']; ?>
&method=GET&version=HTTP%2F1.0 </a></li>
				<li><a href="http://www.seo-browser.com/index.php?address=<?php echo $this->_tpl_vars['domain']; ?>
&action=Parse+URL" target="_blank"  id="linkid">http://www.seo-browser.com/index.php?address=<?php echo $this->_tpl_vars['domain']; ?>
&action=Parse+URL </a></li>
				<li><a href="http://builtwith.com/<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://builtwith.com/<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
				<li><a href="http://whois.domaintools.com/<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://whois.domaintools.com/<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
				<li><a href="http://nibbler.silktide.com/toolbar/retest?id=<?php echo $this->_tpl_vars['domain']; ?>
" target="_blank"  id="linkid">http://nibbler.silktide.com/toolbar/retest?id=<?php echo $this->_tpl_vars['domain']; ?>
</a></li>
				<li><a href="http://try.powermapper.com/demo/sortsite.aspx?url=<?php echo $this->_tpl_vars['domain']; ?>
&gadget-api-key=f1c045d7-e797-41d5-b538-9004bba0b698" target="_blank"  id="linkid">http://try.powermapper.com/demo/sortsite.aspx?url=<?php echo $this->_tpl_vars['domain']; ?>
&gadget-api-key=f1c045d7-e797-41d5-b538-9004bba0b698 </a></li>
										</ul>
									</td>
								 </tr> 
              </table>
		</td>
		</tr>
  <tr>
    <td align="left" valign="top"><input type="button" name="Open All Links" value="Open All Links" onclick="javascript: externalLinks()" /></td>
  </tr>
  <tr>
    <td height="50" align="left" valign="top">&nbsp;</td>
  </tr>
</table>
							  
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
		</form>
        <!--end of contentpane -->
      </div>
    </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script language=javascript>
function externalLinks()
{
  if (!document.getElementsByTagName) return;
  var anchors = document.getElementsByTagName("a");
  for (var i=0; i<anchors.length; i++)
  {
      var anchor = anchors[i];
	  if(anchor.getAttribute("id") == "linkid")
	  {
      	if(anchor.getAttribute("href"))
	  	{
			//alert(anchor.getAttribute("href"));
			window.open(anchor.getAttribute("href"), \'_blank\');
		}
	}
  }
}
</script>
'; ?>