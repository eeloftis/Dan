<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package danFleming
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			// get_template_part( 'template-parts/content', get_post_type() );
?>

<style>

.site-header {
	border-color: <?php echo get_field('color'); ?>;
}
</style>
			<section class="twoColumnSection">
			         <div class="container">
			           <div class="row">
			             <div class="title-col col-lg-6 col-lg-offset-1 col-sm-10 col-md-offset-1">
										 <h2><?php echo get_field('subtitle'); ?></h2>
			              <h1> <?php the_title(); ?></h1>
			             </div>
			             <div class="content-col col-lg-4 col-lg-offset-0 col-sm-10 col-md-offset-1">
			               <?php
			                 the_content();
			                 ?>
			               </div>
			           </div>
			         </div>
			     </section>
<?php
			the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
