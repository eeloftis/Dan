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
             <div class="col-lg-6 col-lg-offset-1 col-sm-10 col-md-offset-1">
              <h1> <?php
                echo $title;
                ?></h1>
             </div>
             <div class="col-lg-4 col-lg-offset-0 col-sm-10 col-md-offset-1">
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
       $args = array( 'post_type' => 'project', 'posts_per_page' => -1, 'order' => 'ASC' );
       $loop = new WP_Query( $args );
       $j = 0;
       while ( $loop->have_posts() ) : $loop->the_post(); ?>


       <?php if (++$j % 2 == 1): ?>
         <style>
         .projectSection .odd .content-col:before,
         .projectSection .odd .content-col:after {
           border-color:<?php echo get_field('color'); ?> ;
         }
         </style>
         <div class="projectCard odd row">
           <div class="image-col col-xs-10 col-xs-offset-1 col-lg-6 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-5 col-sm-offset-0"><img src="<?php
           echo get_field('home_image')['url'];
           ?>" ></div>
           <div class="content-col col-xs-10 col-xs-offset-1 col-lg-6 col-lg-offset-0 col-md-7 col-md-offset-0 col-sm-7 col-sm-offset-0" style="background-image:url('<?php
          echo get_field('home_background_image')['url'];
          ?>')">
             <span class="pull-right initials"><?php echo get_field('initials'); ?></span>
             <h3><?php echo get_field('subtitle'); ?></h3>
             <h2><?php the_title(); ?></h2>
             <a href="<?php  the_permalink(); ?>">
             <div class="button">
              View Project
             </div>
             </a>
          </div>
         </div>

       <?php else: ?>
         <div class="projectCard even row">
           <div class="content-col col-lg-6 col-lg-offset-0 col-xs-10 col-xs-offset-1" style="background-image:url('<?php
          echo get_field('home_background_image')['url'];
          ?>')">
             <span class="pull-left initials"><?php echo get_field('initials'); ?></span>
             <h3><?php echo get_field('subtitle'); ?></h3>
             <h2><?php the_title(); ?></h2>
            <a href="<?php  the_permalink(); ?>"> <div class="button">
              View Project
            </div>
            </a>
          </div>
          <div class="image-col col-lg-6 col-lg-offset-0 col-xs-10 col-xs-offset-1"><img src="<?php
         echo get_field('home_image')['url'];
         ?>" ></div>
         </div>
       <?php endif;
       endwhile;

       ?>
           </div>
         </div>
       </section>




	<?php get_footer(); ?>
