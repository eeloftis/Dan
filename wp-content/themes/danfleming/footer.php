<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package danFleming
 */

?>

	</div><!-- #content -->

		<?php
    $copyright = get_field('copyright','options');
		$email = get_field('email','options');
		?>

	<footer id="colophon" class="site-footer">
		<div class="container">
	    <div class="row">
	      <div class="col-lg-3 col-lg-offset-0  col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
	        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
	      </div>
	      <div class="pull-right col-lg-3 col-lg-offset-0  col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
	        &copy; <?php echo date("Y"); ?> 	<?php echo $copyright; ?>
	      </div>
	      </div>
	    </div>
	  </div>
	</footer><!-- #colophon -->


<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
