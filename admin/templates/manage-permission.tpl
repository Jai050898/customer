{include file="header.tpl"}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
			{include file="right-bar.tpl"}
			<div id="innerleft">
			  <div class="admin-rightpart">
				  <div class="admin_topbgnav">
						<div id="admin_bcrumb">
							  <ul>
								  <li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
								  <li>Manage Permission</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage Permission</div>
				  </div>
				  <div class="ad_textsp">
                                        <form name="menuForm" id="menuForm" method="post" >  
					{$returnpermissions}
                                            <div align="center" id="errorDiv1" class="error" style="color: #FF0000;"></div>	
                                        <input type="submit" name="submitBtn" id="submitBtn" value="submit" />	
						
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

{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
{literal}
<script type="text/javascript">
// To check/uncheck all checkboxes 
$('#menuForm>ul>li>input').click(function(){ 
    if($(this).is(':checked')){        
        $(this).nextAll('ul').find('input[type="checkbox"]').attr('checked',true);             
     } else {        
        $(this).nextAll('ul').find('input[type="checkbox"]').attr('checked',false);       
     }
 });
 $('#menuForm>ul>li>ul>li>input').click(function(){ 
    if($(this).is(':checked')){        
        $(this).nextAll('ul').find('input[type="checkbox"]').attr('checked',true);             
     } else {        
        $(this).nextAll('ul').find('input[type="checkbox"]').attr('checked',false);       
     }
 });
$('#submitBtn').click(function(){ 
    if($('#menuForm>ul>li>input').is(':checked') == false){ 
            $('#errorDiv1').show();
            $('#errorDiv1').html("Please check any of check box");
            return false;
       }
});
 </script>
 {/literal}
