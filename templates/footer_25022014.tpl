</div>
<!--footer-->
<div id="footer">
<div id="footer_wrap">
<div id="footer_inner" style=" height:20px;">

<span style="float:right; padding-right:5px; color:#FFFFFF;">&copy; {'Y'|date} Motorhead Marketing.</span>
<br />

</div>
</div>
<!--Footer Links-->
</div>
<!--end footer-->
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>
{literal}
<script type="text/javascript">
    function ShowMB() {
            tb_show('Market Budget','show-all-budgets.php?height=500&width=1040');
            return;
    }

    function ShowMG() {
            tb_show('Market Monitoring','show-all-monitoring.php?height=500&width=1040');
            return;
    }

    function ShowROReport() {
            tb_show('Gross Sale Week-wise Report','<?php echo SITEURL; ?>/gross-sale-weekwise-report.php?height=700&width=1100', '<?php echo SITEURL; ?>/images/ajax_loader.gif');
            return;
    }
</script>
{/literal}
</body>
</html>
