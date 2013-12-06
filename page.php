<?php get_header(); ?>
<section class="entry-section">

	<?php if( have_posts() ): the_post(); ?>
	<article <?php post_class( array('entry') ); ?> id="page-<?php the_ID(); ?>" role="article">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<section class="entry-content">
			<?php
			// Content example for CSS ajustments - Uncomment it if you need
			//get_template_part( 'blocks/content', 'example' );
			?>
			<?php the_content(); ?>
		</section>
	</article>
	<?php endif; ?>
	
</section>
<?php get_footer(); ?>