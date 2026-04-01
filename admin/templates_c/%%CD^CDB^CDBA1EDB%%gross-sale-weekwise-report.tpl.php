<?php /* Smarty version 2.6.26, created on 2014-03-20 10:45:54
         compiled from gross-sale-weekwise-report.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'gross-sale-weekwise-report.tpl', 39, false),array('modifier', 'number_format', 'gross-sale-weekwise-report.tpl', 82, false),array('function', 'math', 'gross-sale-weekwise-report.tpl', 68, false),)), $this); ?>
<?php echo '
<style type="text/css">
    .customersTBL {
        border-collapse: collapse;
        font-family: Arial,Helvetica,sans-serif;
        width: 100%;
    }
    .customersTBL th {
        background-color: #f1f1f1;
        color: #4c4c4c;
        font-size: 14px;
        padding-bottom: 4px;
        padding-top: 5px;
        text-align: left;
    }
    .customersTBL td, .customersTBL th {
        border: 1px solid #ccc;
        font-size: 14px;
        padding: 3px 7px 2px;
    }
    .customersTBL td.no-pad, .customersTBL td.no-pad table td	{
        padding:0px;
        border:1px solid #CCCCCC;
        border-left:0px;
        border-top:0px;
    }
    .customersTBL td.no-pad table td	{
        padding:3px 7px 2px;
        min-width: 75px;
    }
</style>
'; ?>

<div>
    <div style="height:10px;"></div>
    <h1>Gross Sale Week-wise Report</h1>
    <div style="float:right">&nbsp;</div>
    <div style="clear:both;"></div>
    <div style="width:100%;">
        <?php if (count($this->_tpl_vars['dataArray']) > '0'): ?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="customersTBL">
                <tr>
                  <td rowspan="5" align="left" valign="top" class="no-pad">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                              <th colspan="3" rowspan="2">&nbsp;</th>
                                <?php unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['start'] = (int)1;
$this->_sections['foo']['loop'] = is_array($_loop=55) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
if ($this->_sections['foo']['start'] < 0)
    $this->_sections['foo']['start'] = max($this->_sections['foo']['step'] > 0 ? 0 : -1, $this->_sections['foo']['loop'] + $this->_sections['foo']['start']);
else
    $this->_sections['foo']['start'] = min($this->_sections['foo']['start'], $this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] : $this->_sections['foo']['loop']-1);
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = min(ceil(($this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] - $this->_sections['foo']['start'] : $this->_sections['foo']['start']+1)/abs($this->_sections['foo']['step'])), $this->_sections['foo']['max']);
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
?>
                                    <th align="center" valign="middle" colspan="7" style="text-align:center;">Week<?php echo $this->_sections['foo']['index']; ?>
</th>
                                <?php endfor; endif; ?> 
                          </tr>
                          <tr>
                            <?php unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['start'] = (int)1;
$this->_sections['foo']['loop'] = is_array($_loop=55) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
if ($this->_sections['foo']['start'] < 0)
    $this->_sections['foo']['start'] = max($this->_sections['foo']['step'] > 0 ? 0 : -1, $this->_sections['foo']['loop'] + $this->_sections['foo']['start']);
else
    $this->_sections['foo']['start'] = min($this->_sections['foo']['start'], $this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] : $this->_sections['foo']['loop']-1);
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = min(ceil(($this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] - $this->_sections['foo']['start'] : $this->_sections['foo']['start']+1)/abs($this->_sections['foo']['step'])), $this->_sections['foo']['max']);
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
?>
                                <td>Sun</td>
                                <td>Mon</td>
                                <td>Tue</td>
                                <td>Wed</td>
                                <td>Thu</td>
                                <td>Fri</td>
                                <td>Sat</td>
                            <?php endfor; endif; ?> 
                          </tr>
                          <?php $_from = $this->_tpl_vars['dataArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                            <tr>
                              <th width="100"><?php echo $this->_tpl_vars['item']['Year']; ?>
</th>
                              <td>01/01/<?php echo $this->_tpl_vars['item']['Year']; ?>
</td>
                              <td><?php echo $this->_tpl_vars['item']['WeekDay']; ?>
</td>
                              <?php $this->assign('totalDays', '0'); ?>
                                <?php $_from = $this->_tpl_vars['item']['MonthAry']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>
                                    <?php echo smarty_function_math(array('assign' => 'calc1','equation' => "x+y",'x' => $this->_tpl_vars['item1']['MaxDay'],'y' => $this->_tpl_vars['item1']['StartDay']), $this);?>

                                    <?php if ($this->_tpl_vars['key1'] == 1): ?>
                                        <?php unset($this->_sections['bar']);
$this->_sections['bar']['name'] = 'bar';
$this->_sections['bar']['start'] = (int)0;
$this->_sections['bar']['loop'] = is_array($_loop=$this->_tpl_vars['item1']['StartDay']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bar']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['bar']['show'] = true;
$this->_sections['bar']['max'] = $this->_sections['bar']['loop'];
if ($this->_sections['bar']['start'] < 0)
    $this->_sections['bar']['start'] = max($this->_sections['bar']['step'] > 0 ? 0 : -1, $this->_sections['bar']['loop'] + $this->_sections['bar']['start']);
else
    $this->_sections['bar']['start'] = min($this->_sections['bar']['start'], $this->_sections['bar']['step'] > 0 ? $this->_sections['bar']['loop'] : $this->_sections['bar']['loop']-1);
if ($this->_sections['bar']['show']) {
    $this->_sections['bar']['total'] = min(ceil(($this->_sections['bar']['step'] > 0 ? $this->_sections['bar']['loop'] - $this->_sections['bar']['start'] : $this->_sections['bar']['start']+1)/abs($this->_sections['bar']['step'])), $this->_sections['bar']['max']);
    if ($this->_sections['bar']['total'] == 0)
        $this->_sections['bar']['show'] = false;
} else
    $this->_sections['bar']['total'] = 0;
if ($this->_sections['bar']['show']):

            for ($this->_sections['bar']['index'] = $this->_sections['bar']['start'], $this->_sections['bar']['iteration'] = 1;
                 $this->_sections['bar']['iteration'] <= $this->_sections['bar']['total'];
                 $this->_sections['bar']['index'] += $this->_sections['bar']['step'], $this->_sections['bar']['iteration']++):
$this->_sections['bar']['rownum'] = $this->_sections['bar']['iteration'];
$this->_sections['bar']['index_prev'] = $this->_sections['bar']['index'] - $this->_sections['bar']['step'];
$this->_sections['bar']['index_next'] = $this->_sections['bar']['index'] + $this->_sections['bar']['step'];
$this->_sections['bar']['first']      = ($this->_sections['bar']['iteration'] == 1);
$this->_sections['bar']['last']       = ($this->_sections['bar']['iteration'] == $this->_sections['bar']['total']);
?>
                                            <td>&nbsp;</td>
                                            <?php echo smarty_function_math(array('assign' => 'totalDays','equation' => "x+y",'x' => $this->_tpl_vars['totalDays'],'y' => 1), $this);?>

                                        <?php endfor; endif; ?>
                                        <?php $_from = $this->_tpl_vars['item1']['DaysAry']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item2']):
        $this->_foreach['item2']['iteration']++;
?>
                                            <?php $this->assign('color', "#000000"); ?>
                                            <?php if (( $this->_tpl_vars['item2']['avgRO'] < $this->_tpl_vars['item']['lowest'] ) && ( $this->_tpl_vars['item2']['avgRO'] != 0 )): ?> 
                                                <?php $this->assign('color', "#FF0000"); ?>
                                            <?php endif; ?>
                                            <?php if ($this->_tpl_vars['item2']['avgRO'] > $this->_tpl_vars['item']['highest']): ?>
                                                <?php $this->assign('color', "#000080"); ?>
                                            <?php endif; ?>
                                            <td style="color: <?php echo $this->_tpl_vars['color']; ?>
">[<?php echo $this->_tpl_vars['item2']['date']; ?>
]<br /><strong><?php if ($this->_tpl_vars['item2']['avgRO'] != 0): ?>$<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['avgRO'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
<?php else: ?>$0<?php endif; ?></strong></td>
                                            <?php echo smarty_function_math(array('assign' => 'totalDays','equation' => "x+y",'x' => $this->_tpl_vars['totalDays'],'y' => 1), $this);?>

                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php else: ?>
                                        <?php $_from = $this->_tpl_vars['item1']['DaysAry']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item2']):
        $this->_foreach['item2']['iteration']++;
?>
                                            <?php $this->assign('color', "#000000"); ?>
                                            <?php if (( $this->_tpl_vars['item2']['avgRO'] < $this->_tpl_vars['item']['lowest'] ) && ( $this->_tpl_vars['item2']['avgRO'] != 0 )): ?> 
                                                <?php $this->assign('color', "#FF0000"); ?>
                                            <?php endif; ?>
                                            <?php if ($this->_tpl_vars['item2']['avgRO'] > $this->_tpl_vars['item']['highest']): ?>
                                                <?php $this->assign('color', "#000080"); ?>
                                            <?php endif; ?>
                                            <td style="color: <?php echo $this->_tpl_vars['color']; ?>
">[<?php echo $this->_tpl_vars['item2']['date']; ?>
]<br /><strong><?php if ($this->_tpl_vars['item2']['avgRO'] != 0): ?>$<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['avgRO'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
<?php else: ?>$0<?php endif; ?></strong></td>
                                            <?php echo smarty_function_math(array('assign' => 'totalDays','equation' => "x+y",'x' => $this->_tpl_vars['totalDays'],'y' => 1), $this);?>

                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                                <?php echo smarty_function_math(array('assign' => 'blankDays','equation' => "x-y",'x' => 378,'y' => $this->_tpl_vars['totalDays']), $this);?>

                                <?php unset($this->_sections['bar1']);
$this->_sections['bar1']['name'] = 'bar1';
$this->_sections['bar1']['start'] = (int)0;
$this->_sections['bar1']['loop'] = is_array($_loop=$this->_tpl_vars['blankDays']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bar1']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['bar1']['show'] = true;
$this->_sections['bar1']['max'] = $this->_sections['bar1']['loop'];
if ($this->_sections['bar1']['start'] < 0)
    $this->_sections['bar1']['start'] = max($this->_sections['bar1']['step'] > 0 ? 0 : -1, $this->_sections['bar1']['loop'] + $this->_sections['bar1']['start']);
else
    $this->_sections['bar1']['start'] = min($this->_sections['bar1']['start'], $this->_sections['bar1']['step'] > 0 ? $this->_sections['bar1']['loop'] : $this->_sections['bar1']['loop']-1);
if ($this->_sections['bar1']['show']) {
    $this->_sections['bar1']['total'] = min(ceil(($this->_sections['bar1']['step'] > 0 ? $this->_sections['bar1']['loop'] - $this->_sections['bar1']['start'] : $this->_sections['bar1']['start']+1)/abs($this->_sections['bar1']['step'])), $this->_sections['bar1']['max']);
    if ($this->_sections['bar1']['total'] == 0)
        $this->_sections['bar1']['show'] = false;
} else
    $this->_sections['bar1']['total'] = 0;
if ($this->_sections['bar1']['show']):

            for ($this->_sections['bar1']['index'] = $this->_sections['bar1']['start'], $this->_sections['bar1']['iteration'] = 1;
                 $this->_sections['bar1']['iteration'] <= $this->_sections['bar1']['total'];
                 $this->_sections['bar1']['index'] += $this->_sections['bar1']['step'], $this->_sections['bar1']['iteration']++):
$this->_sections['bar1']['rownum'] = $this->_sections['bar1']['iteration'];
$this->_sections['bar1']['index_prev'] = $this->_sections['bar1']['index'] - $this->_sections['bar1']['step'];
$this->_sections['bar1']['index_next'] = $this->_sections['bar1']['index'] + $this->_sections['bar1']['step'];
$this->_sections['bar1']['first']      = ($this->_sections['bar1']['iteration'] == 1);
$this->_sections['bar1']['last']       = ($this->_sections['bar1']['iteration'] == $this->_sections['bar1']['total']);
?>
                                    <td>&nbsp;</td>
                                <?php endfor; endif; ?>
                            </tr>
                          <?php endforeach; endif; unset($_from); ?>
                      </table>
                  </td>
                </tr>
            </table>
        <?php else: ?>
            <div align="center" style="color: #FF0000;">No Data Found!!!</div>
        <?php endif; ?>
    </div>
    <div class="clear"></div>
</div>