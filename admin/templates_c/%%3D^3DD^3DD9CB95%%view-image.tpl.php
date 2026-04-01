<?php /* Smarty version 2.6.26, created on 2013-04-23 06:02:30
         compiled from view-image.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'view-image.tpl', 50, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.alerts.css">
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/rating.css" rel="stylesheet" type="text/css">
<!--body-->
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
/admin/manage-albums.php">Manage Albums</a></li>
							  <li>View Image</li>
						  </ul>
						<div class="clr"></div>
					  </div>
					<div id="admin_head">View Image</div>
				 </div>
				<div class="ad_textsp">
					<table width="100%" border="0" cellspacing="1" cellpadding="5" style="background-repeat:no-repeat; background-position:top;">
				<tr><td align="center"><img  src="<?php echo $this->_tpl_vars['siteurl']; ?>
/photos/original/<?php echo $this->_tpl_vars['Photos'][0]['photo_name']; ?>
" alt="image"/></td></tr>
				<tr><td style="padding-left:130px;"><a href="javascript:void(0);" onclick="showCommentsDiv();">Comments</a> | <a href="javascript:void(0);" style="padding-left:5px;" onclick="ShowRating()">Rating</a> [ Current rating : <?php echo $this->_tpl_vars['Avg']; ?>
 / 5 with <?php echo $this->_tpl_vars['TotVotes'][0]['Cnt']; ?>
 votes ]</td></tr>
				<tr id="CommentsDivs" style="display:none">
					<form name="EditComment" id="EditComment" onsubmit="javascript:$('#hid_key').val('Save');" method="post" class="form">
						<input type="hidden" name="hid_key" id="hid_key" value="" />
						<input type="hidden" name="hid_id" id="hid_id" value="" />
						<input type="hidden" name="hid_type" id="hid_type" value="" />
						<td style="width:750px;">
							<table width="100%">
								<tr>
									<td style="color:#5F71F1; font-size:14px;"><strong>Comments</strong></td>
								</tr>							
								<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['Comments']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
								<tr>
									<td  style="border-bottom:1px dotted #000000; padding-top:5px;">
									<div id="textcomment<?php echo $this->_tpl_vars['Comments'][$this->_sections['list']['index']]['comment_id']; ?>
"><?php echo $this->_tpl_vars['Comments'][$this->_sections['list']['index']]['comments']; ?>
</div>
									<div id="showcomment<?php echo $this->_tpl_vars['Comments'][$this->_sections['list']['index']]['comment_id']; ?>
" style="display:none">
										<input type="text" name="comments<?php echo $this->_tpl_vars['Comments'][$this->_sections['list']['index']]['comment_id']; ?>
" id="comments<?php echo $this->_tpl_vars['Comments'][$this->_sections['list']['index']]['comment_id']; ?>
" value="<?php echo $this->_tpl_vars['Comments'][$this->_sections['list']['index']]['comments']; ?>
" style="width:580px;">
										<input type="hidden" name="comment_id" id="comment_id"  value="<?php echo $this->_tpl_vars['Comments'][$this->_sections['list']['index']]['comment_id']; ?>
" />
										<input type="button" name="Save" id="Save" value="Submit"  onclick="javascript:SetVal(<?php echo $this->_tpl_vars['Comments'][$this->_sections['list']['index']]['comment_id']; ?>
)"/>
									</div>
									<div style="float:right">
										<a href="javascript:void(0);" name="Edits" id="Edit" onclick="javascript: ShowComment('<?php echo $this->_tpl_vars['Comments'][$this->_sections['list']['index']]['comment_id']; ?>
');">Edit</a>
										<a href="javascript:void(0);" onclick="javascript:fnDeleteRecord(document.EditComment,'<?php echo $this->_tpl_vars['Comments'][$this->_sections['list']['index']]['comment_id']; ?>
','D');" style="padding-left:5px;">Delete</a>
									</div><br>
									<span style="float:right">By
									<strong><?php echo $this->_tpl_vars['Comments'][$this->_sections['list']['index']]['first_name']; ?>
</strong>&nbsp;On  <?php echo ((is_array($_tmp=$this->_tpl_vars['Comments'][$this->_sections['list']['index']]['created_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y %m, %d") : smarty_modifier_date_format($_tmp, "%Y %m, %d")); ?>
</span>
									</td>
								</tr>
								<?php endfor; else: ?>
								<tr>
									<td style="color:red; font-size:14px;" align="center">No Comments Available</td>
								</tr>	
								<?php endif; ?>
							</table>
						</td>
					</form>
				</tr>
				<tr id="PostComment" style="display:none">
					<td style="width:750px;">
						<table width="100%">
							<tr>
								<td>
									<form name="PostComment" id="PostComment" onsubmit="javascript:$('#hid_val').val('Post');" method="post" class="form">
									<input type="hidden" name="hid_val" id="hid_val" value="" />
									<input type="hidden" name="photo_id" id="photo_id" value="<?php echo $this->_tpl_vars['Photos'][0]['photo_id']; ?>
" />
									<input type="hidden" name="commented_by" id="commented_by" value="<?php echo $_SESSION['User']['UID']; ?>
" />
										<div style="padding-top:10px;">
											<div style="font-size:12px;"><span style=" padding-right:5px;"><strong>Post A Comment</strong>:</span>
												<input type="text" name="comments" id="comments" value="" class="input req-string" style="width:570px;" />
												<input type="submit" name="Post" id="Post" value="Post" />
											</div>
										</div>
									</form>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr id="ShowRateings" style="display:none;">
					<td style="width:750px;">
						<table width="100%" cellpadding="3" cellspacing="1">
							<tr>
								<td style="color:#5F71F1; font-size:14px;"><strong>Ratings:</strong></td>
							</tr>
							<?php if (! empty ( $this->_tpl_vars['Votes'] )): ?>
								<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['Votes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
									<tr>
										<td>
											<div style="float:left;margin-left:10px;">
												<ul class="star-rating small-star">
													<li class="current-rating" style="width:<?php echo $this->_tpl_vars['Votes'][$this->_sections['list']['index']]['Percentage']; ?>
%">&nbsp;</li>
													<li><a href="#" class="one-star">1</a></li>
													<li><a href="#" class="two-stars">2</a></li>
													<li><a href="#" class="three-stars">3</a></li>
													<li><a href="#" class="four-stars">4</a></li>
													<li><a href="#" class="five-stars">5</a></li>
												</ul>
											</div><div style="margin-left:15px;">&nbsp;&nbsp;&nbsp;Given by <?php echo $this->_tpl_vars['Votes'][$this->_sections['list']['index']]['first_name']; ?>
 On <?php echo ((is_array($_tmp=$this->_tpl_vars['Votes'][$this->_sections['list']['index']]['created_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y %m, %d") : smarty_modifier_date_format($_tmp, "%Y %m, %d")); ?>
</div>
										</td>
									</tr>
								<?php endfor; endif; ?>
							<?php else: ?>
								<tr>
									<td style="color:red; font-size:14px;" align="center"> No Ratings have been given for this Image</td>
								</tr>
							<?php endif; ?>
						</table>	
					</td>
				</tr>
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;"></td>
				</tr>
			</table>
					<div class="clr"></div>
				</div>
				<!--end of contentpane -->
			  </div>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Post').formValidator(<?php echo '{scope: '; ?>
'#PostComment',errorDiv:'#errorDiv1'});
	<?php echo '
	function ShowComment(id)
	{
		$(\'#textcomment\'+id).hide();
		$(\'#showcomment\'+id).show();
	}
	function showCommentsDiv()
	{
		if(document.getElementById(\'CommentsDivs\').style.display == \'none\')
			$("#CommentsDivs").show();
		else
			$("#CommentsDivs").hide();	
	}
	function postCommentsDiv()
	{
		if(document.getElementById(\'PostComment\').style.display == \'none\')
			$("#PostComment").show();
		else
			$("#PostComment").hide();
	}
	function ShowRating()
	{
		if(document.getElementById(\'ShowRateings\').style.display == \'none\')
			$("#ShowRateings").show();
		else
			$("#ShowRateings").hide();
	}
	'; ?>

</script>