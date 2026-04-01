<?php get_header();?>
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
		  <div style="height:10px;"></div>
				<h1>Blog</h1>
					<div id="content" class="left_content" style="color:#2f3337;">

				<?php if (have_posts()) : ?>
			
					<?php while (have_posts()) : the_post(); ?>
					<div class="postTitle" style="font-family:tahoma; font-size:16px;padding:10px 0px 5px 0px;">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</div>	
						<div><?php the_content('Read the rest of this entry &raquo;'); ?></div>	
						<div>Posted by : <?php the_author(); ?>&nbsp;at&nbsp;<?php the_time('G:i'); ?>&nbsp;|&nbsp;<?php comments_popup_link('No Comments', 'Comment (1)', 'Comments (%)'); ?>
						<?php comments_template(); ?>
						</div> 
					<?php endwhile; ?>
					<div class="navigation"> 
						<span class="previous-entries"><?php next_posts_link('Older Entries') ?></span>
						<span class="next-entries"><?php previous_posts_link('Newer Entries') ?></span> 
					</div>			
				<?php else : ?>
			
					<h2>Not Found</h2>
					<p>Sorry, but you are looking for something that isn't here.</p>
			
				<?php endif; ?>
			</div>
				</div>
	  <!--end of middle part -->
		  <div class="bodyright">
			<div class="rightbox">
			<div class="title">Quick Links</div>         
			<?php get_sidebar('right');?>
			</div>
		</div>
	  <div class="clear"></div>
	</div>
 </div>
<!--end of body part -->
<?php get_footer();?>