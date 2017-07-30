<?php
/**
 * Template Name: Home Template
 * The statict page template.
 *
 *
 * @package WordPress
 *
 */

get_header();
the_post(); ?>
<?php $title = get_field('intro_title');

 ?>

<section class="twoColumnSection">
         <div class="container">
           <div class="row">
             <div class="col-lg-6 col-lg-offset-1 col-md-10 col-md-offset-1">

              <h1> <?php
                echo $title;
                ?></h1>
             </div>
             <div class="col-lg-4 col-lg-offset-0 col-md-10 col-md-offset-1">
               <?php
                 the_content();
                 ?>
               </div>
           </div>
         </div>
       </section>



       <section class="projectSection">
         <div class="container">

<?php
       $args = array( 'post_type' => 'project', 'posts_per_page' => 8 );
       $loop = new WP_Query( $args );
       while ( $loop->have_posts() ) : $loop->the_post();

       <?php if ($wp_query->current_post % 2 == 0): ?>
         <div class="projectCard even row">
           <div class="col-lg-7 col-lg-offset-0 col-xs-10 col-xs-offset-1">
             <span><?php echo get_field('initial'); ?></span>
             <h3><?php echo get_field('subtitle'); ?></h3>
             <h2><?php the_title(); ?></h2>
             <div class="button">
              <a href="<?php  the_permalink(); ?>">View Project</a>
            </div>
          </div>
          <div class="col-lg-5 col-lg-offset-0 col-xs-10 col-xs-offset-1">image</div>
         </div>
       <?php else: ?>
         <div class="projectCard odd row">
           <div class="col-xs-10 col-xs-offset-1 col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-5 col-sm-offset-0"><img src="img/projectImage.jpg" ></div>
           <div class="col-xs-10 col-xs-offset-1 col-lg-7 col-lg-offset-0 col-md-7 col-md-offset-0 col-sm-7 col-sm-offset-0" style="background-image:url('img/one.gif');">
             <span class="pull-right initials"><?php echo get_field('initial'); ?></span>
             <h3><?php echo get_field('subtitle'); ?></h3>
             <h2><?php the_title(); ?></h2>
             <div class="button">
              <a href="<?php  the_permalink(); ?>">View Project</a>
             </div>
          </div>
         </div>
       <?php endif
       endwhile;

       ?>
           </div>
         </div>
       </section>




	<?php get_footer(); ?>
