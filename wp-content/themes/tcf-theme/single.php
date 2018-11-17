

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
                    	<?php printf( __( 'Posted' ).' %1$s %2$s',
	                       	/* the time the post was published */
	                       	'<span datetime="' . get_the_time('Y-m-d') . '">' . get_the_time(get_option('date_format')) . '</span>',
	                       	/* the author of the post */
	                       	'<span>'.__( 'by' ).'</span> <span>' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    	); ?>
                  	</p>

                  	<?php the_content(); ?>

                  	<?php printf( __( 'filed under' ).': %1$s', get_the_category_list(', ') ); ?>

                  	<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:' ) . '</span> ', ', ', '</p>' ); ?>

					<?php comments_template(); ?>

	            </div>


				<?php endwhile; ?>

				<?php else : ?>
					<h1><?php _e( 'Oops, Post Not Found!' ); ?></h1>
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.' ); ?></p>
					<p><?php _e( 'This is the error message in the single.php template.' ); ?></p>
				<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</section>
