<?php
/**
 * The template for displaying the Contact 
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen_Child
 * @since Twenty Sixteen Child 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="container">  
		  <form id="contact" action="" method="post">
		    <h3>Contact Us</h3>
		    <div>
	      	<input placeholder="Your name" type="text" tabindex="1" required autofocus>
		    </div>
		    <div>
		      <input placeholder="Your email" type="email" tabindex="2" required>
		    </div>
		    <div>
		      <textarea placeholder="Comment" tabindex="5" required></textarea>
		    </div>
	      <button name="submit" type="submit" id="contact-submit">Send</button>
		  </form>
		 
		  
		</div>		

		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
