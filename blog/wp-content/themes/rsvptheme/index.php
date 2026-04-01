<?php
get_header();?>
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
		  <div style="height:10px;"></div>
				<h1>Blog</h1>
					<div id="content" class="left_content" style="color:#2f3337;">
	
						<?php if (have_posts()) : ?>
							<?php include (TEMPLATEPATH . '/archives.php'); ?>.						
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
  