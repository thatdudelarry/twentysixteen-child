<?php

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen Child 1.0
 */
function amply_scripts() {

	// Add Libre Franklin Font
	wp_enqueue_style( 'libre-franklin', 'https://fonts.googleapis.com/css?family=Merriweather:300|Oswald:300,700', array(), false );

	// Add Font Awesome
	// wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );

	// Add Font Awesome
	wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/5accbece9b.js', array(), '4.7.0' );

	// Add Custom JS
	wp_enqueue_script( 'amply-js', get_stylesheet_directory_uri() . '/js/amply.js', array(), '0.0.1', true );

}
add_action( 'wp_enqueue_scripts', 'amply_scripts' );

// /**
//  * Custom author meta for this theme.
//  */
// require get_template_directory() . '/functions/entry-date.php';

/**
 * Override the default twentysixteen_entry_date function to include the calendar icon
 */
function twentysixteen_entry_date() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( 'c' ) ),
			get_the_date(),
			esc_attr( get_the_modified_date( 'c' ) ),
			get_the_modified_date()
		);

		printf(
			'<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
			_x( '<i class="fas fa-calendar"></i>', 'Used before publish date.', 'twentysixteen' ),
			esc_url( get_permalink() ),
			$time_string
		);
	}

/**
 * Override the default twentysixteen_entry_meta function to include the smiley face icon
 */
function twentysixteen_entry_meta() {
	if ( 'post' === get_post_type() ) {
		printf(
			'<span class="byline"><span class="author vcard"><span class="screen-reader-text">%1$s </span> <a class="url fn n" href="%2$s">%3$s</a></span></span>',
			_x( '<i class="fas fa-smile"></i>', 'Used before post author name.', 'twentysixteen' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		);
	}

	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		twentysixteen_entry_date();
	}

	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf(
			'<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
			sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'twentysixteen' ) ),
			esc_url( get_post_format_link( $format ) ),
			get_post_format_string( $format )
		);
	}

	if ( 'post' === get_post_type() ) {
		twentysixteen_entry_taxonomies();
	}

	if ( ! is_singular() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'twentysixteen' ), get_the_title() ) );
		echo '</span>';
	}
}

