<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php breadcrumbs(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                  	<h1><?php the_title(); ?></h1>

                 	<p>
                 		<?php printf( __( 'Posted <span datetime="%1$s">%2$s</span> by <span>%3$s</span> <span>&</span> filed under %4$s.' ), get_the_time( 'Y-m-j' ), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) ), get_the_term_list( $post->ID, 'custom_cat', ' ', ', ', '' ) ); ?>
                  	</p>
                  	<p><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span>' . __( 'Custom Tags:' ) . '</span> ', ', ' ) ?></p>

					<?php comments_template(); ?>

	            </div>


				<?php endwhile; ?>

				<?php else : ?>
					<h1><?php _e( 'Oops, Post Not Found!' ); ?></h1>
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.' ); ?></p>
					<p><?php _e( 'This is the error message in the single-custom_type.php template.' ); ?></p>
				<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</section>
