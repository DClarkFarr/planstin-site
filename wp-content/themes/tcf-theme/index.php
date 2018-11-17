

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php breadcrumbs(); ?>
				<div class="page-head">
					<h1> <?php
						if ( is_day() ) {
							printf( __( 'Daily Archives: %s' ), '<span>' . get_the_date() . '</span>' );
						} elseif ( is_month() ) {
							printf( _( 'Monthly Archives: %s' ), '<span>' . get_the_date( x( 'F Y', 'monthly archives date format' ) ) . '</span>' );
						} elseif ( is_year() ) {
							printf( _( 'Yearly Archives: %s' ), '<span>' . get_the_date( x( 'Y', 'yearly archives date format' ) ) . '</span>' );
						} elseif ( is_author() ) {
							printf( __( 'Author Archives: %s' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
						} elseif ( is_tag() ) {
							printf( __( 'Tag Archives: %s' ), '<span>' . single_tag_title( '', false ) . '</span>' );
									// Show an optional tag description
							$tag_description = tag_description();
							if ( $tag_description )
								echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
						} elseif ( is_category() ) {
							printf( __( 'Category Archives: %s' ), '<span>' . single_cat_title( '', false ) . '</span>' );
									// Show an optional category description
							$category_description = category_description();
							if ( $category_description )
								echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
						} else {
							_e( 'Blog Archives' );
						}
					?></h1>
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

					<?php the_content(); ?>

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
					<p><?php _e( 'This is the error message in the index.php template.' ); ?></p>

				<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</section>
