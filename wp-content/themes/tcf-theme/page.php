

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

                  	<?php the_content(); ?>

					<?php comments_template(); ?>

	            </div>


				<?php endwhile; endif; ?>

			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</section>
