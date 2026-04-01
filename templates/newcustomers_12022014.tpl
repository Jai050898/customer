<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
                    <form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="return ajaxSubmit();">
                        <input type="hidden" name="hid_key" id="hid_key" value="">
                        <input type="hidden" name="id" id="id" value="{$smarty.request.id}">
                        <input type="hidden" name="ro_id" id="ro_id" value="{$smarty.request.ro_id}">
                        <input type="hidden" name="cust_id" id="cust_id" value="{$smarty.request.cust_id}">
                        <input type="hidden" name="company_id" id="company_id" value="{$smarty.request.company_id}">
                        
                        <div style="height:10px;"></div>
                        <table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
                            <tr>
                                <td style="padding-top:10px;"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="right" valign="center" style="padding-left:5px;">Source:<span class="redstar"> * </span></td>
                                <td align="left" valign="center"><input type="text" name="Log[source]" id="source" class="select req-string" value="{$Tasks.source}"/></td>
                            </tr>
                            <tr>
                                <td align="right" valign="center" style="padding-left:5px;">Referral:<span class="redstar"> * </span></td>
                                <td align="left" valign="center"><input type="text" name="Log[referral]" id="referral" class="select req-string" value="{$Tasks.referral}"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px; padding-left:215px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="submitBtn1" type="Submit" value="Submit" /></td>
                            </tr>
                        </table>
                        <div class="clear"></div>
                    </form>
		</div>
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{literal}
<script language="javascript" type="text/javascript" src="https://www.autorepairmarketing.com/customer/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
    $('#submitBtn1').formValidator({
        scope       : '#TaskForm',
        errorDiv    : '#errorDiv1'
    });

    function ajaxSubmit() {
        $('#hid_key').val('Post');
        $.post( 
                'https://www.autorepairmarketing.com/customer/newcustomers.php', 
                {hid_key: $('#hid_key').val(), source: $('#source').val(), referral:$('#referral').val(), id: $('#id').val(), ro_id: $('#ro_id').val(), cust_id: $('#cust_id').val(), company_id:$('#company_id').val()},
                function(data) {
                    alert(data);
                    //if(data===1 || data==='1') {
                        $('#errorDiv1').html('Data Updated Successfully!!!');
                    //}
                    return false;
                }
        );
        return false;
    }

</script>
{/literal}
