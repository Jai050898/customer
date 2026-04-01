{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Latest Details</h1>
			<div id="bodyleft">
<div  class="left_content" style="color:#2f3337;">
<div class="wikipans">

<span class="style0001">Latest Wiki Pages </span>

<div class=" clear"></div>
{foreach item=item name=item from=$Wiki}

<div class="wikipan"><strong><a href="{$siteurl}/wiki/index.php/{$item.page_title}" target="_blank">{$item.page_title}</a></strong><br />

{$item.si_text|truncate:"100"}
</div>
{foreachelse}
No Wiki Pages Found
{/foreach}

</div>



<div class="clear"></div>

<div class="contents01">

<span class="style0001">Latest Tasks</span><br />

<table width="100%" border="0" cellspacing="1" bgcolor="#CCCCCC" class="table_pan">

  <tr style="color:#FFF; font-weight:bold;">

    <td width="33%" align="left" valign="middle" bgcolor="#3b5e7c">Tittle</td>

    <td width="32%" align="left" valign="middle" bgcolor="#3b5e7c">Priority</td>

    <td width="35%" align="left" valign="middle" bgcolor="#3b5e7c">Deadline</td>

  </tr>
{foreach item=item name=item from=$Tasks}
  <tr>

    <td bgcolor="#FFFFFF"><a href="{$siteurl}/view-task.php?task_id={$item.task_id}">{$item.title}</a></td>

    <td bgcolor="#FFFFFF">{if $item.priority eq "1"}Urgent{elseif $item.priority eq "2"}High Priority{elseif $item.priority eq "3"}Mediun Priority{elseif $item.priority eq "4"} Normal Priority{elseif $item.priority eq "5"}Low Priority{elseif $item.priority eq "6"}Very Low Priority{else}Whatever{/if}</td>

    <td bgcolor="#FFFFFF">{$item.dead_line|date_format}</td>

  </tr>
{foreachelse}
<tr>
<td bgcolor="#FFFFFF" colspan="3">No Tasks Found</td>
</tr>
{/foreach}
</table>



  <br />


<span class="style0001">Latest Blogs</span><br />
{foreach item=item name=item from=$Blogs}

  <div class="style0002"><a href="{$siteurl}/blog/?p={$item.ID}">{$item.post_title}</a></div>
  <div style="padding-left:0px;">
{$item.post_content}
</div>
<br />
<br />
{foreachelse}
No Blogs Found
{/foreach}


<span class="style0001">Latest Images </span>

<div id="latest_images">
{foreach item=item name=item from=$Images}
<a href="{$siteurl}/view-image.php?Id={$item.photo_id|base64_encode}"><img src="{$siteurl}/photos/thumbnails/{$item.photo_name}" width="130" height="94" /></a>
{foreachelse}
No Images Found
{/foreach}
</div>

</div>
</div>

</div>
			<div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}