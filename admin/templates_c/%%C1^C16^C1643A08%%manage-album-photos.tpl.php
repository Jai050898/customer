<?php /* Smarty version 2.6.26, created on 2013-04-23 06:02:22
         compiled from manage-album-photos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'manage-album-photos.tpl', 53, false),array('modifier', 'base64_encode', 'manage-album-photos.tpl', 55, false),array('modifier', 'date_format', 'manage-album-photos.tpl', 58, false),array('modifier', 'count', 'manage-album-photos.tpl', 68, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.alerts.css" rel="stylesheet" type="text/css">
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
							  <li>Manage Album Photos</li>
						  </ul>
						 <div class="clr"></div>
					  </div>
					 <div id="admin_head">Manage Album Photos</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageAlbumPhotos" class="form" method="post" name="ManageAlbumPhotos">
					<input type="hidden" name="hid_key" id="hid_key" value="" />
					<input type="hidden" name="hid_type" id="hid_type" value="" />
					<input type="hidden" name="hid_id" id="hid_id" value="" />
					<input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
					<input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
						<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10" colspan="2"></td>
						</tr>
						 <tr>
						  <td  colspan="2"><div class="search_divbox">
						  <select name="user_id" id="user_id" class="searchinput" onchange="document.ManageAlbumPhotos.submit();">
								<option value="">Select User</option>
								<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['Users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<option value="<?php echo $this->_tpl_vars['Users'][$this->_sections['list']['index']]['user_id']; ?>
" <?php if ($_REQUEST['user_id'] == $this->_tpl_vars['Users'][$this->_sections['list']['index']]['user_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['Users'][$this->_sections['list']['index']]['first_name']; ?>
</option>
								<?php endfor; endif; ?>
							</select>&nbsp;
							<input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != ""): ?><?php echo $_REQUEST['keyword']; ?>
<?php endif; ?>" class="searchinput" /> <input type="image" src="../images/go_but.png" onclick="document.ManageAlbumPhotos.submit();" /> 
						 <div class="clr"></div>
						  </div></td>
						</tr>
						<tr>
						  <td align="left" valign="top" colspan="2"><table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
							<tr>
							  <th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageAlbumPhotos,'chkall[]','checkall');" /></th>
							  <th width="40%" align="left"><a href="javascript: setClientSort('photo_name','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageAlbumPhotos);">Photo Name</a> <?php if ($_REQUEST['sortby'] == 'photo_name'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
							  <th width="20%" align="left">Posted By</th>
							  <th width="10%" align="left"><a href="javascript: setClientSort('views','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageAlbumPhotos);">Views </a> <?php if ($_REQUEST['sortby'] == 'views'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
							  <th width="15%" align="left"><a href="javascript: setClientSort('created_date','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageAlbumPhotos);">Crated Date </a> <?php if ($_REQUEST['sortby'] == 'created_date'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
							  <th width="15%" align="left">Status</th>
							</tr>
							<?php $_from = $this->_tpl_vars['Photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
							<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
							  <td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="<?php echo $this->_tpl_vars['item']['photo_id']; ?>
"/></td>
							  <td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/view-image.php?Id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['photo_id'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : smarty_modifier_base64_encode($_tmp)); ?>
"><?php echo $this->_tpl_vars['item']['photo_name']; ?>
</a></td>
							  <td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/view-user.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
"><?php echo $this->_tpl_vars['item']['first_name']; ?>
</a></td>
							  <td align="left"><?php echo $this->_tpl_vars['item']['views']; ?>
</td>
							  <td align="left"> <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d,%Y") : smarty_modifier_date_format($_tmp, "%b %d,%Y")); ?>
</td>
							  <td align="left"><?php if ($this->_tpl_vars['item']['status'] == 'A'): ?><font color="#00CC33">Active</font><?php elseif ($this->_tpl_vars['item']['status'] == 'I'): ?><font color="#0000FF">InActive</font><?php elseif ($this->_tpl_vars['item']['status'] == 'P'): ?><font color="#00EEFF">Pending</font><?php else: ?><font color="#FF0000">Deleted</font><?php endif; ?></td>
							</tr>
							<?php endforeach; else: ?>
							<tr>
							  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Album Photos Added</strong></font></th>
							</tr>
							<?php endif; unset($_from); ?>
						  </table></td>
						</tr>
						<?php if (count($this->_tpl_vars['Photos']) > 0): ?>
						<tr>
						  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
							<tr>
							<td  align="left" bgcolor="#854141">
							<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageAlbumPhotos,'A','chkall[]');"/>
							<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageAlbumPhotos,'I','chkall[]');" />
							<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageAlbumPhotos,'D','chkall[]');"/>
							</td>
							<td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['prev'] != ""): ?><?php echo $this->_tpl_vars['prev']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['nav'] != ""): ?><?php echo $this->_tpl_vars['nav']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['next'] != ""): ?><?php echo $this->_tpl_vars['next']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['last'] != ""): ?><?php echo $this->_tpl_vars['last']; ?>
<?php endif; ?></div></td>
							</tr>
							</table>
							</td>
							</tr>
						<?php endif; ?>
							  </table>
					</form>
					  <!--end of middle part -->
					  <!--end of right part -->
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
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/js/jquery.ufvalidator-1.0.4.js"></script>