<?php
/*
 * CUSTOM POST TYPE ARCHIVE TEMPLATE
 *
 * This is the custom post type archive template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is called "register_post_type( 'bookmarks')",
 * then your template name should be archive-bookmarks.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>



<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php breadcrumbs(); ?>
				<div class="page-head">
					<h1> <?php post_type_archive_title(); ?></h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h3 class="h2" ><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<p>
						<?php printf( __( 'Posted' ).' %1$s %2$s',
							/* the time the post was published */
							'<span datetime="' . get_the_time('Y-m-d') . '">' . get_the_time(get_option('date_format')) . '</span>',
							/* the author of the post */
							'<span class="by">'.__( 'by').'</span> <span>' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
						); ?>
					</p>

					<?php the_excerpt(); ?>

					<p>
						<?php comments_number( __( '<span>No</span> Comments' ), __( '<span>One</span> Comment' ), __( '<span>%</span> Comments' ) ); ?>
					</p>


					<?php printf( '<p>' . __('filed under' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

					<?php the_tags( '<p><span>' . __( 'Tags:' ) . '</span> ', ', ', '</p>' ); ?>


				</div>

				<?php endwhile; ?>

					<?php tcf_page_navi(); ?>

				<?php else : ?>
					<h1><?php _e( 'Oops, Post Not Found!' ); ?></h1>
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.' ); ?></p>
					<p><?php _e( 'This is the error message in the custom posty type archive template.' ); ?></p>
				<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</section>
