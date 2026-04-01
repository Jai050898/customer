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
    
    function ShowWeekwiseROReport() {
            tb_show('Gross Sale Week-wise Report','<?php echo SITEURL; ?>/gross-sale-weekwise-report.php?height=650&width=1100', '<?php echo SITEURL; ?>/images/ajax_loader.gif');
            return;
    }
    
    function ShowDaywiseROReport() {
            tb_show('Gross Sale Day-wise Report','<?php echo SITEURL; ?>/gross-sale-daywise-report.php?height=650&width=1100', '<?php echo SITEURL; ?>/images/ajax_loader.gif');
            return;
    }
    
    
</script>
 
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', ' UA-21336991-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript">
   var _mfq = _mfq || [];
   (function() {
       var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
       mf.src = "//cdn.mouseflow.com/projects/7ef7ecdb-438b-4809-ac31-662881ca4354.js";
       document.getElementsByTagName("head")[0].appendChild(mf);
   })();
</script>
</body>
</html>
