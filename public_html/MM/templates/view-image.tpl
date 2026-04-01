{include file=header.tpl}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/jquery.alerts.css">
<link href="{$siteurl}/css/rating.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="body">
			<div style="height:10px;"></div>
			<h1>View Image</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" style="background-repeat:no-repeat; background-position:top;">
				<tr><td align="center"><img  src="{$siteurl}/photos/original/{$Photos[0].photo_name}" alt="image"/></td></tr>
				<tr><td style="padding-left:130px;"><a href="javascript:void(0);" onclick="showCommentsDiv();">Comments</a> | <a href="javascript:void(0);" onclick="javascript:postCommentsDiv();" style="padding-left:5px;">Post Comment</a> | <a href="javascript:void(0);" style="padding-left:5px;" onclick="givRating('{$smarty.request.Id}');">Give Rating</a> | <a href="javascript:void(0);" style="padding-left:5px;" onclick="ShowRating()">Rating</a> [ Current rating : {$Avg} / 5 with {$TotVotes[0].Cnt} votes ]</td></tr>
				<tr id="CommentsDivs" style="display:none">
					<form name="EditComment" id="EditComment" onsubmit="javascript:$('#hid_key').val('Save');" method="post" class="form">
						<input type="hidden" name="hid_key" id="hid_key" value="" />
						<input type="hidden" name="hid_id" id="hid_id" value="" />
						<input type="hidden" name="hid_type" id="hid_type" value="" />
						<td style="width:750px;">
							<table width="100%">
								<tr>
									<td style="color:#5F71F1; font-size:14px;"><strong>Comments</strong></td>
								</tr>							
								{section name=list loop=$Comments}
								<tr>
									<td  style="border-bottom:1px dotted #000000; padding-top:5px;">
									<div id="textcomment{$Comments[list].comment_id}">{$Comments[list].comments}</div>
									<div id="showcomment{$Comments[list].comment_id}" style="display:none">
										<input type="text" name="comments{$Comments[list].comment_id}" id="comments{$Comments[list].comment_id}" value="{$Comments[list].comments}" style="width:580px;">
										<input type="hidden" name="comment_id" id="comment_id"  value="{$Comments[list].comment_id}" />
										<input type="button" name="Save" id="Save" value="Submit"  onclick="javascript:SetVal({$Comments[list].comment_id})"/>
									</div>
									{if $Comments[list].commented_by eq $smarty.session.User.UID}
										<div style="float:right">
											<a href="javascript:void(0);" name="Edits" id="Edit" onclick="javascript: ShowComment('{$Comments[list].comment_id}');">Edit</a>
											<a href="javascript:void(0);" onclick="javascript:fnDeleteRecord(document.EditComment,'{$Comments[list].comment_id}','D');" style="padding-left:5px;">Delete</a>
										</div><br>
									{/if}<br />
									<span style="float:right">By
									<strong>{$Comments[list].first_name}</strong>&nbsp;On  {$Comments[list].created_date|date_format:"%Y %m, %d"}</span>
									</td>
								</tr>
								{sectionelse}
								<tr>
									<td style="color:red; font-size:14px;" align="center">No Comments Available</td>
								</tr>	
								{/section}
							</table>
						</td>
					</form>
				</tr>
				<tr id="PostComment" style="display:none">
					<td style="width:750px;">
						<table width="100%">
							<tr>
						<td>
							<form name="PostComment" id="PostComment" onsubmit="javascript:$('#hid_val').val('Post');" method="post" class="form">
							<input type="hidden" name="hid_val" id="hid_val" value="" />
							<input type="hidden" name="photo_id" id="photo_id" value="{$Photos[0].photo_id}" />
							<input type="hidden" name="commented_by" id="commented_by" value="{$smarty.session.User.UID}" />
								<div style="padding-top:10px;">
									<div style="font-size:12px;"><span style=" padding-right:5px;"><strong>Post A Comment</strong>:</span>
										<input type="text" name="comments" id="comments" value="" class="input req-string" style="width:570px;" />
										<input type="submit" name="Post" id="Post" value="Post" />
									</div>
								</div>
							</form>
						</td>
					</tr>
						</table>
					</td>
				</tr>
				<tr id="GiveRating" style="display:none">
					<form name="GivRating" id="GivRating" method="post" class="form" onsubmit="javascript:return FunGivRating();">
					<input type="hidden" name="Rating" id="Rating" value="" />
					<input type="hidden" name="hid_key" id="hid_key" value="" />
					<input type="hidden" name="photo_id" id="photo_id" value="{$Photos[0].photo_id}" />
					<input type="hidden" name="given_by" id="given_by" value="{$smarty.session.User.UID}" />
					<td>
						<div style="float:left; width:500px;">
							<div style="float:left;width:100px;height:35px;">Rating:&nbsp;</div>
								<div style="float:left;margin-left:10px;">
									<ul class="star-rating">
										<li class="current-rating" style="width:0%;" id="RatingList">&nbsp;</li>
										<li><a href="javascript:void(0);" title="1 star out of 5" class="one-star" onclick="javascript:fnCalculateRating('Rating','1');">1</a></li>
										<li><a href="javascript:void(0);" title="2 stars out of 5" class="two-stars" onclick="javascript:fnCalculateRating('Rating','2');">2</a></li>
										<li><a href="javascript:void(0);" title="3 stars out of 5" class="three-stars" onclick="javascript:fnCalculateRating('Rating','3');">3</a></li>
										<li><a href="javascript:void(0);" title="4 stars out of 5" class="four-stars" onclick="javascript:fnCalculateRating('Rating','4');">4</a></li>
										<li><a href="javascript:void(0);" title="5 stars out of 5" class="five-stars" onclick="javascript:fnCalculateRating('Rating','5');">5</a></li>
									</ul>
								</div>
								<div style="float:left;margin-left:20px;  padding-right:10px;" id="RatingDiv">&nbsp;</div>
								<div><input type="submit" value="Submit" id="Submit" class="sendBtn"/></div>	
							</div>
						</td>
					</form>
				</tr>
				<tr id="ShowRateings" style="display:none;">
					<td style="width:750px;">
						<table width="100%" cellpadding="3" cellspacing="1">
							<tr>
								<td style="color:#5F71F1; font-size:14px;"><strong>Ratings:</strong></td>
							</tr>
							{if !empty($Votes)}
								{section name=list loop=$Votes}
									<tr>
										<td>
											<div style="float:left;margin-left:10px;">
												<ul class="star-rating small-star">
													<li class="current-rating" style="width:{$Votes[list].Percentage}%">&nbsp;</li>
													<li><a href="#" class="one-star">1</a></li>
													<li><a href="#" class="two-stars">2</a></li>
													<li><a href="#" class="three-stars">3</a></li>
													<li><a href="#" class="four-stars">4</a></li>
													<li><a href="#" class="five-stars">5</a></li>
												</ul>
											</div><div style="margin-left:15px;">&nbsp;&nbsp;&nbsp;Given by {$Votes[list].first_name} On {$Votes[list].created_date|date_format:"%Y %m, %d"}</div>
										</td>
									</tr>
								{/section}
							{else}
								<tr>
									<td style="color:red; font-size:14px;" align="center"> No Ratings have been given for this Image</td>
								</tr>
							{/if}
						</table>	
					</td>
				</tr>
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;"></td>
				</tr>
			</table>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Post').formValidator({literal}{scope: {/literal}'#PostComment',errorDiv:'#errorDiv1'});
{literal}
function ShowComment(id)
{
	$('#textcomment'+id).hide();
	$('#showcomment'+id).show();
}
function showCommentsDiv()
{
	if(document.getElementById('CommentsDivs').style.display == 'none')
		$("#CommentsDivs").show();
	else
		$("#CommentsDivs").hide();	
}
function postCommentsDiv()
{
	if(document.getElementById('PostComment').style.display == 'none')
		$("#PostComment").show();
	else
		$("#PostComment").hide();
}
function givRating(Id)
{
	verityid	= IsIdExisting(Id);
}
function ShowRating()
{
	if(document.getElementById('ShowRateings').style.display == 'none')
		$("#ShowRateings").show();
	else
		$("#ShowRateings").hide();
}
{/literal}
</script>
