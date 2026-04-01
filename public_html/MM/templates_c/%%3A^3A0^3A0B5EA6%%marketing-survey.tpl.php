<?php /* Smarty version 2.6.26, created on 2013-06-11 09:56:28
         compiled from marketing-survey.tpl */ ?>
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
			<h1>Marketing Survey</h1>
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

			The intent of this survey is to gather a basic outline of information, so that we can begin to understand what you are currently doing within your marketing efforts. Please fill it out as detailed as you can.  If there is any question you can't answer, please let us know during the interview process. <br /><br />

			This survey is engineered so you can add data to key areas:<br /><br />
			<ul style="list-style-type:upper-roman; padding-left:50px; padding-bottom:10px;">

				<li><a href='step1.php'>Basic Marketing Information page</a></li>

				<li><a href='step2.php'>Business Profile</a></li>

				<li><a href='step3.php'>Marketing / Advertising Opportunties</a></li>

				<li><a href='step4.php'>Customer Profile</a></li>

				<li><a href='step5.php'>Service Practices</a></li>

				<li><a href='step6.php'>Marketing / Advertising Elements</a></li>

				<li><a href='step7.php'>Marketing / Advertising Leaders</a></li>

			</ul>

			<br />

			The survey allows you to leave and return to complete each area.  Please make sure to click submit at the bottom to save any data you have filled within a page. Please note, if you have any difficulties, there is a Questions/Problem link in the main menu that will send us an immediate notification so we can assist.

			<br /><br />

			<strong>Finished reading instructions ?</strong> <a href='step1.php'>Click here</a> and Start filling out the form now.

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
			<!-- <table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;" width="35%">Name:</td>
				  <td align="left" valign="center" width="65%"><strong><?php echo $this->_tpl_vars['AccDet']['first_name']; ?>
 <?php echo $this->_tpl_vars['AccDet']['last_name']; ?>
</strong></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Email:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['email']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">User Name:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['user_name']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Company Name:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['company_name']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Phone:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['phone']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Fax:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['fax']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Address:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['address']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Country:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['Country_Name']; ?>
</td>
				</tr>
				<tr>
					<td align="right" valign="center" style="padding-left:55px;">State:</td>
					<td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['State_Name']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">City:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['city']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Zip code:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['zip_code']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Web Site:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['website']; ?>
</td>
				</tr>
			</table> -->
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