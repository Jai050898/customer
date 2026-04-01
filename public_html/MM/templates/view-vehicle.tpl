{include file=header.tpl}
<!--body-->
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div class="bodyleft">
            <div style="height:10px;"></div>
            <h1>View Vehicle</h1>
            <table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Name :</td>
                      <td align="left" valign="center" width="65%">{$User.name}</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Year :</td>
                      <td align="left" valign="center" width="65%">{$User.year}</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Make :</td>
                      <td align="left" valign="center" width="65%">{$User.make}</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Model :</td>
                      <td align="left" valign="center" width="65%">{$User.model}</td>
                </tr>   
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Vin :</td>
                      <td align="left" valign="center" width="65%">{$User.vin}</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Licence :</td>
                      <td align="left" valign="center" width="65%">{$User.license}</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Odometer :</td>
                      <td align="left" valign="center" width="65%">{$User.odometer}</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Engine Name :</td>
                      <td align="left" valign="center" width="65%">{$User.engine}</td>
                </tr>
                <tr>
                      <td align="right" valign="center" style="padding-left:55px;" width="35%">Reg. Date :</td>
                      <td align="left" valign="center" width="65%">{$User.regdate}</td>
                </tr>
            </table>			  
            <div class="clear"></div>
        </div>
        {include file="rightbar.tpl"}
        <div class="clear"></div>
    </div>
</div>
<!--end body-->	
{include file="footer.tpl"}