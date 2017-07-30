<?php
/**
 * Template Name: Profile Template
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
             <div class="title-col col-lg-6 col-lg-offset-1 col-sm-10 col-md-offset-1">
              <h1> <?php
                echo $title;
                ?></h1>
             </div>
             <div class="content-col col-lg-4 col-lg-offset-0 col-sm-10 col-md-offset-1">
               <?php
                 the_content();
                 ?>
               </div>
           </div>
         </div>
       </section>

       <section class="projectSection">
         <div class="container">
         <div class="projectCard odd row">
           <div class="image-col col-xs-10 col-xs-offset-1 col-lg-6 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-5 col-sm-offset-0"><img src="<?php
           echo get_field('card_image')['url'];
           ?>" ></div>
           <div class="content-col col-xs-10 col-xs-offset-1 col-lg-6 col-lg-offset-0 col-md-7 col-md-offset-0 col-sm-7 col-sm-offset-0" >
             <h3><?php echo get_field('card_subtitle'); ?></h3>
             <h2><?php echo get_field('card_title'); ?></h2>
             <a href="<?php  echo get_field('card_url'); ?>">
             <div class="button">
              Dribbble
             </div>
             </a>
          </div>
         </div>
         </div>
       </section>

	<?php get_footer(); ?>
