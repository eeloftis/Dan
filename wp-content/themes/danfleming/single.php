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

<article id="project-single">
			<section class="twoColumnSection">
			         <div class="container">
			           <div class="row">
			             <div class="title-col col-lg-6 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
										 <h2><?php echo get_field('subtitle'); ?></h2>
			              <h1> <?php the_title(); ?></h1>
			             </div>
			             <div class="content-col col-lg-4 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
			               <?php
			          ?> <h3> <?php echo get_field('tag'); ?> &nbsp;<span class="big-bullet">&bull;</span>&nbsp; <?php echo get_field('date');?></h3>
								<p> <?php echo get_field('intro_copy'); ?> </p>
			               </div>
			           </div>
			         </div>
			     </section>

					 <section class="wysiwyg">
										<div class="container">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12">
<img class="featured-image" src="<?php echo get_field('featured_image')['url']; ?>">
					 <?php

						 the_content();
						 ?>
		</div>
					 </div>
				 </div>
			 </section>

		 </article>

 <div class="post-nav">
	 		<div class="container">
	 	    <div class="row">
	 	      <div class="col-lg-3 col-lg-offset-0  col-md-3 col-md-offset-0 col-sm-4 col-xs-4">

						<?php
    			if(get_previous_post()) {
								?>
						<img src="<?php echo get_bloginfo('template_url') ?>/img/left.png"/>&nbsp;

						<?php
					}
								?>
						<?php previous_post_link( '%link','PREV' ); ?>
	 	      </div>
  <div class="middle col-lg-6  col-md-6 col-sm-4 col-xs-4" >
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">PROJECTS</a>
	</div>

	 	      <div class="pull-right col-lg-3 col-lg-offset-0  col-md-3 col-md-offset-0 col-sm-4 col-xs-4">
	 	       <?php  next_post_link( '%link','NEXT' ); ?>


					 						<?php
					     			if(get_next_post()) {
					 								?>
					 						 &nbsp;<img src="<?php echo get_bloginfo('template_url') ?>/img/right.png"/>

					 						<?php
					 					}
					 								?>

	 	      </div>
	 	      </div>
	 	    </div>
	 	  </div>

</div>

<?php



		endwhile; // End of the loop.
		?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
