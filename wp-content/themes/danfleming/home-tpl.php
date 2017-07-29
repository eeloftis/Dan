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

<section class="twoColumnSection">
         <div class="container">
           <div class="row">
             <div class="col-lg-6 col-lg-offset-1 col-md-10 col-md-offset-1">
               <h1>Boston based ^Cbrand identity &amp; <span>ui</span> designer</h1>
             </div>
             <div class="col-lg-4 col-lg-offset-0 col-md-10 col-md-offset-1">
               <p>Dan has been featured by <a href="#">Design Taxi</a>, <a href="#">Buzzfeed</a>, <a href="#">Readers Digest</a>, <a href="#">365 Awesome Designers</a>, &amp; <a href="#">Awwwards</a>. <a href="#">Phoenix</a> (the band) compared their music to Dan’s visual style during an interview with <a href="#">Brain Magazine</a>.</p>
               </div>
           </div>
         </div>
       </section>



       <section class="projectSection">
         <div class="container">
             <div class="projectCard odd row">
               <div class="col-xs-10 col-xs-offset-1 col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-5 col-sm-offset-0"><img src="img/projectImage.jpg" ></div>
               <div class="col-xs-10 col-xs-offset-1 col-lg-7 col-lg-offset-0 col-md-7 col-md-offset-0 col-sm-7 col-sm-offset-0" style="background-image:url('img/one.gif');">
                 <span class="pull-right initials">CC</span>
                 <h3>Prepare &amp; Share</h3>
                 <h2>Condiments<br>Club</h2>
                 <div class="button">
                  <a href="casestudy1.php">View Project</a>
                 </div>
              </div>
             </div>
             <div class="projectCard even row">
               <div class="col-lg-7 col-lg-offset-0 col-xs-10 col-xs-offset-1">
                 <span>CC</span>
                 <h3>Prepare &amp; Share</h3>
                 <h2>Condiments<br>^CClub</h2>
                 <div class="button">
                  <a href="casestudy2.php">View Project</a>
                </div>
              </div>
              <div class="col-lg-5 col-lg-offset-0 col-xs-10 col-xs-offset-1">image</div>
             </div>
           </div>
         </div>
       </section>




	<?php get_footer(); ?>
