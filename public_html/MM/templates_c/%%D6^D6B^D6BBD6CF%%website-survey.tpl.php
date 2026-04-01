<?php /* Smarty version 2.6.26, created on 2013-06-11 09:56:33
         compiled from website-survey.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Website Survey</h1>
			<div class="left_content" style="color:#2f3337;">
			<?php if ($this->_tpl_vars['Successmssage'] != ""): ?>
			
			<br /><br /><br /><br /><br />
			
			<p align="center"><span class="success"><?php echo $this->_tpl_vars['Successmssage']; ?>
</span></p>
			
			<br /><br /><br /><br />
			
			<?php else: ?>
			<p align="justify" style="padding-right:15px"><br />

		First, thank you very much for your business.<br />

		<br />

		The intent of this survey is to gather information regarding your business so that we may develop and design a website that represents your business reputation. There are also some questions to get a feel for what type/style of website design will work best. Please fill it out as detailed as you can.  If there is any question you can't answer, please let us know at <a href='mailto:info@motorheadmarketing.com'>info@motorheadmarketing.com</a><br /><br />

		This survey is engineered so you can add data to key areas:<br /><br />
		
		<ul style="list-style-type:upper-roman; padding-left:50px; padding-bottom:10px;">

			<li><a href="companyDetail.php" style="text-decoration:none">About The Company</a></li>

			<li><a href="history.php" style="text-decoration:none">Your Business History</a></li>

			<li><a href="stuff.php" style="text-decoration:none">About The Stuff</a></li>

			<li><a href="branding.php" style="text-decoration:none">Branding</a></li>

			<li><a href="policy.php" style="text-decoration:none">Policies</a></li>

			<li><a href="notoriety.php" style="text-decoration:none">Notoriety</a></li>

			<li><a href="services.php" style="text-decoration:none">Services</a></li>

			<li><a href="competitiveAdvantages.php" style="text-decoration:none">Competitive Advantages</a></li>

			<li><a href="marketing.php" style="text-decoration:none">Marketing / Advertising</a></li>

			<li><a href="other.php" style="text-decoration:none">Design Items / Other Information</a></li>

		</ul>
		

		<br />

		The survey allows you to leave and return to complete each area.  Please make sure to click submit at the bottom to save any data you have filled within a page. Please note, if you have any difficulties, there is a Questions/Problem link in the main menu that will send us an immediate notification so we can assist.

		<br /><br />

		<strong>Finished reading instructions ?</strong> <a href='companyDetail.php' class="new_link">Click here</a> and Start filling out the form now.

		<br /><br />

		</p>
			<br />
			<p align="center">

			<form name="frmComplete" method="post">

		<div style="width:500px; height:80px; background-color:#F6F4DF; margin:auto; border:1px solid #848267; padding:10px; text-align:center">

		<b>I am finished with this survey.</b><br /><br />

		<input type="submit" value="Submit My Survey" name="btnSubmit" />

		</div>

		</form>

			</p>
			<?php endif; ?>
			</div>
			<div class="clear"></div>
		</div>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rightbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>