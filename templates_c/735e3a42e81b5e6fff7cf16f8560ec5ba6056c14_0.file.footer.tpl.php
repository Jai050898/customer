<?php
/* Smarty version 3.1.48, created on 2026-03-31 11:24:58
  from '/var/www/html/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbaf0a31b637_45176867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '735e3a42e81b5e6fff7cf16f8560ec5ba6056c14' => 
    array (
      0 => '/var/www/html/templates/footer.tpl',
      1 => 1774872262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cbaf0a31b637_45176867 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
<!--footer-->
<div id="footer">
<div id="footer_wrap">
<div id="footer_inner" style=" height:20px;">

<span style="float:right; padding-right:5px; color:#FFFFFF;">&copy; <?php echo date('Y');?>
 Motorhead Marketing.</span>
<br />

</div>
</div>
<!--Footer Links-->
</div>
<!--end footer-->
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/thickbox.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    function ShowMB() {
            tb_show('Market Budget','show-all-budgets.php?height=500&width=1040');
            return;
    }

    function ShowMG() {
            tb_show('Market Monitoring','show-all-monitoring.php?height=500&width=1040');
            return;
    }

    function ShowWeekwiseROReport() {
            tb_show('Gross Sale Week-wise Report','gross-sale-weekwise-report.php?height=650&width=1100', 'https://www.autorepairmarketing.com/customer/images/ajax_loader.gif');
            return;
    }
    
    function ShowDaywiseROReport() {
            tb_show('Gross Sale Day-wise Report','gross-sale-daywise-report.php?height=650&width=1100', 'https://www.autorepairmarketing.com/customer/images/ajax_loader.gif');
            return;
    }
    
    
<?php echo '</script'; ?>
>

</body>

<!-- KISSmetrics tracking snippet -->
<?php echo '<script'; ?>
 type="text/javascript">var _kmq = _kmq || [];
var _kmk = _kmk || 'a3767e6ac402effe756c5c47c3a5642ff1471caf';
function _kms(u){
setTimeout(function(){
var d = document, f = d.getElementsByTagName('script')[0],
s = d.createElement('script');
s.type = 'text/javascript'; s.async = true; s.src = u;
f.parentNode.insertBefore(s, f);
}, 1);
}
_kms('//i.kissmetrics.com/i.js');
_kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-21336991-1');
    ga('create', 'UA-49774644-1', {
        'name': 'account2'
    });
    ga('send', 'pageview');
    ga('account2.send', 'pageview');
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript">
   var _mfq = _mfq || [];
   (function() {
       var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
       mf.src = "//cdn.mouseflow.com/projects/7ef7ecdb-438b-4809-ac31-662881ca4354.js";
       document.getElementsByTagName("head")[0].appendChild(mf);
   })();
<?php echo '</script'; ?>
>

</html>
<?php }
}
