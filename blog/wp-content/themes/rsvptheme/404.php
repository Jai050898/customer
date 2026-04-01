<?php get_header();?>
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
		  <div style="height:10px;"></div>
				<h1>Blog</h1>
					<div id="content" class="left_content" style="color:#2f3337;">

					<div id="post-0" class="post error404 not-found">
						<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
						<div class="entry-content">
							<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</div><!-- #post-0 -->
		
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