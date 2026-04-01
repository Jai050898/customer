<?php /* Smarty version 2.6.26, created on 2014-04-23 23:53:55
         compiled from manage-portfolio-categories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'manage-portfolio-categories.tpl', 53, false),array('modifier', 'date_format', 'manage-portfolio-categories.tpl', 87, false),array('function', 'cycle', 'manage-portfolio-categories.tpl', 80, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.alerts.css" rel="stylesheet" type="text/css">
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
      <li>Manage Portfolio Categories</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Manage Portfolio Categories</div>
      </div>
	  <div class="ad_textsp">
		<form id="ManageCat" class="form" method="post" name="ManageCat">
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
			  <td colspan="0"><h2>Manage Portfolio Categories</h2></td>
			 <td align="right"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/add-portfolio-category.php">Add Category</a></td>
			</tr>
			 <!--<tr>
			  <td  colspan="2"><div class="search_divbox">
			  	<select name="status" id="status" class="searchinput">
									<option value="">-- Select Status --</option>
									<option value="A" <?php if ($_REQUEST['status'] == 'A'): ?> selected="selected" <?php endif; ?>>Active</option>
									<option value="I" <?php if ($_REQUEST['status'] == 'I'): ?> selected="selected" <?php endif; ?>>In Active</option>
								</select>&nbsp;&nbsp;
				<input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != ""): ?><?php echo $_REQUEST['keyword']; ?>
<?php endif; ?>" class="searchinput" /> <input type="image" src="../images/go_but.png" onclick="document.ManageCat.submit();" /> 
			 <div class="clr"></div>
			  </div></td>
			</tr>  -->
			<!-- <?php if (count($this->_tpl_vars['Cat']) > 0): ?>
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageCat,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageCat,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageCat,'D','chkall[]');"/>
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
			<?php endif; ?> -->
			<tr>
			  <td align="left" valign="top" colspan="2"><table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
				<tr>
				  <th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageCat,'chkall[]','checkall');" /></th>
				  <!--<th width="10%">Order</th>
				  <th width="10%">Show Order</th>-->
				  <th width="40%" align="left"><a href="javascript: setClientSort('cat_name','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageCat);">Category Name</a> <?php if ($_REQUEST['sortby'] == 'cat_name'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
				  <!--<th width="15%" align="left">Status </th>-->
				  <th width="15%" align="left"><a href="javascript: setClientSort('created_date','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageCat);">Crated Date </a> <?php if ($_REQUEST['sortby'] == 'created_date'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
				  <th width="15%" align="left">Actions </th>
				</tr>
				<?php $_from = $this->_tpl_vars['Cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
				  <td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="<?php echo $this->_tpl_vars['item']['cat_id']; ?>
"/></td>
				  <!--<td align="left"><?php if (($this->_foreach['item']['iteration'] <= 1)): ?><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-categories.php?act=down&id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
&order=<?php echo $this->_tpl_vars['item']['showorder']; ?>
"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/arrow_down.png" /></a><?php elseif (($this->_foreach['item']['iteration'] == $this->_foreach['item']['total'])): ?><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-portfolio-categories.php?act=up&id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
&order=<?php echo $this->_tpl_vars['item']['showorder']; ?>
"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/arrow_up.png" /></a><?php else: ?><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-categories.php?act=down&id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
&order=<?php echo $this->_tpl_vars['item']['showorder']; ?>
"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/arrow_down.png" /></a>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-categories.php?act=up&id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
&order=<?php echo $this->_tpl_vars['item']['showorder']; ?>
"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/arrow_up.png" /></a><?php endif; ?></td> -->
				  <!--<td align="left"><?php echo $this->_tpl_vars['item']['showorder']; ?>
</td> -->
				  <td align="left"><!--<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/view-category.php?cat_id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
"><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</a>--><a href="#"><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</a>
                                  </td>
			<!--	  <td align="left"><?php if ($this->_tpl_vars['item']['status'] == 'A'): ?><font color="#00CC33">Active</font><?php elseif ($this->_tpl_vars['item']['status'] == 'I'): ?><font color="#0000FF">InActive</font><?php elseif ($this->_tpl_vars['item']['status'] == 'P'): ?><font color="#00EEFF">Pending</font><?php else: ?><font color="#FF0000">Deleted</font><?php endif; ?></td>-->
				  <td align="left"> <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y") : smarty_modifier_date_format($_tmp, "%m-%d-%Y")); ?>
</td>
				  <td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/add-portfolio-category.php?cat_id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
" class="link023">Edit</a></td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
				  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Category Added</strong></font></th>
				</tr>
				<?php endif; unset($_from); ?>
			  </table></td>
			</tr>
			<!--<?php if (count($this->_tpl_vars['Cat']) > 0): ?>
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageCat,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageCat,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageCat,'D','chkall[]');"/>
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
			<?php endif; ?> -->
                  </table>
		</form>
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
        <!--end of contentpane -->
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
/js/general.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/js/jquery.ufvalidator-1.0.4.js"></script>