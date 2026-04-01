<form method="get" action="<?php bloginfo('url'); ?>/">
	<label class="hidden" for="s"><?php _e('Search:'); ?></label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="10"/>
	<input type="submit" id="searchsubmit" value="GO" />
</form>