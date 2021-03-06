<?php get_header(); ?>

<?php // Retrieve Current Author
	$author = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>
	
	<div id="page-header-wrap">
		
		<?php themezee_display_custom_header(); ?>
		
		<div id="page-header" class="container">
			<h2 id="author-title" class="archive-title">
				<?php printf(__('Author Archives: %s', 'zeeFocus_language'), '<span>' . esc_attr($author->display_name) . '</span>'); ?>
			</h2>
		</div>
		
	</div>
	
	<div id="wrap" class="container">
		
		<section id="content" class="primary" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post();
		
			get_template_part( 'loop', 'index' );
		
			endwhile;
			
		themezee_display_pagination();
			
		endif; ?>
			
		</section>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>	