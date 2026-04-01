<div class="rightboxbg">
<div id="leftpart">
<!-- 
<div>
  <div><h3>Popular Entries</h3></div>
  <div style="padding-left:15px;">	  	
	<?php //wpp_get_mostpopular(); ?>	  
  </div>
</div>
-->
<div>
  <div style="padding-left:5px;">	
  <h3>Recent Posts</h3>  	
		<ul style="padding:0px 0 0 20px;">
		<?php
		  $recent_posts = wp_get_recent_posts();
		  foreach($recent_posts as $post){
			echo '<li><a href="' . get_permalink($post["ID"]) . '" title="Look '.$post["post_title"].'" >' .   $post["post_title"].'</a> </li> ';
		  } ?>
		</ul>
  </div>
</div>
<!--end of box1 -->
<div>
  <div style="padding:5px;">	
  <h3>Archives</h3>  
	<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
	  <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
	  <?php wp_get_archives( 'type=monthly&format=option&show_post_count=1' ); ?>
	</select>
  </div>
</div>
<!--end of box2 -->
<div>
  <div style="padding-left:5px;">	  	
  <h3>Categories</h3>
	<ul style="padding:0px 0 0 20px;"> 	
	<?php
		wp_list_categories( array(
	    'include'           => '',
	    'exclude'           => '',
	    'exclude_tree'      => '',
	    'child_of'          => 0,
	    'hide_empty'        => 1,
	    'orderby'           => 'name',
	    'order'             => 'ASC',
	    'use_desc_for_title'=> 1,
	    'number'            => NULL,
	    'hierarchical'      => true,
	    'show_count'        => 0,
	    'pad_counts'        => 0,
	    'style'             => 'list',
	    /* 'style' set to list "creates list items for an unordered list" */
	    'show_option_all'   => '',
	    'show_option_none'  => __('No categories'),
	    'show_last_update'  => 0,
	    'feed'              => '',
	    'feed_type'         => '',
	    'feed_image'        => '',
	    'current_category'  => 0,
	    'taxonomy'          => 'category',
	    'title_li'          => __( '' ),
	    /* 'title_li' set to '' for menus from the default 'Categories' */
	    'echo'              => 1,
	    'depth'             => 0,
	    'walker'            => 'Walker_Category'
	    ) );
	?> 
	</ul>             	  	
  </div>
</div>
<!--end of box3 -->
<div>
  <div style="padding:5px;">
  <h3>Quick Search</h3>
	<?php include(TEMPLATEPATH.'/searchform.php');?>
  </div>
</div>
<!--end of box4 -->
<div>
  <div style="padding:5px;">
  <h3>Login</h3>
	<ul style="padding:0px 0 0 20px;">
		<?php wp_register(); ?>
		
		<?php wp_meta(); ?>
	</ul>
</div>
</div>
</div>

</div>
