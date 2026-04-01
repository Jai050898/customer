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

    function ShowWeekwiseROReport() {
            tb_show('Gross Sale Week-wise Report','gross-sale-weekwise-report.php?height=650&width=1100', 'https://www.autorepairmarketing.com/customer/images/ajax_loader.gif');
            return;
    }
    
    function ShowDaywiseROReport() {
            tb_show('Gross Sale Day-wise Report','gross-sale-daywise-report.php?height=650&width=1100', 'https://www.autorepairmarketing.com/customer/images/ajax_loader.gif');
            return;
    }
</script>
{/literal}
</body>
</html>
