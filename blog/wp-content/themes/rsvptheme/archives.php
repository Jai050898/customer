<?php while (have_posts()) : the_post(); ?>
	<div class="postTitle" style="font-family:tahoma; font-size:16px;padding:10px 0px 5px 0px;">
	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</div>	
	<div><?php the_content('Read the rest of this entry &raquo;'); ?></div>	
	<div class="postedByComments" style="padding-bottom:10px;border-bottom:dotted 1px #000000;">Posted by : <?php the_author(); ?>&nbsp;at&nbsp;<?php the_time('G:i'); ?>&nbsp;|&nbsp;<?php comments_popup_link('No Comments', 'Comment (1)', 'Comments (%)'); ?></div> 
<?php endwhile; ?>
<div class="navigation"> 
	<span class="previous-entries"><?php next_posts_link('Older Entries') ?></span>
	<span class="next-entries"><?php previous_posts_link('Newer Entries') ?></span> 
</div>