</div>
<!--footer-->
<div id="footer">
<div id="footer_wrap">
<div id="footer_inner" style=" height:20px;">

<span style="float:right; padding-right:5px; color:#FFFFFF;"> 2011 RSVP.</span>
<br />

</div>
</div>
<!--Footer Links-->
</div>
<!--end footer-->
<script language="javascript" type="text/javascript" src="<?php echo SITEURL; ?>/js/thickbox.js"></script>
<script type="text/javascript">
    function ShowMB() {
            tb_show('Market Budget','<?php echo SITEURL; ?>/show-all-budgets.php?height=500&width=1040');
            return;
    }
    
    function ShowMG() {
            tb_show('Market Monitoring','<?php echo SITEURL; ?>/show-all-monitoring.php?height=500&width=1040');
            return;
    }
    
    function ShowROReport() {
            tb_show('Gross Sale Week-wise Report','<?php echo SITEURL; ?>/gross-sale-weekwise-report.php?height=650&width=1100', '<?php echo SITEURL; ?>/images/ajax_loader.gif');
            return;
    }
</script>
</body>
</html>
