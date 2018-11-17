<?php
/*
 Template Name: Custom Page Example
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
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

                  	<?php the_content(); ?>

					<?php comments_template(); ?>

	            </div>


				<?php endwhile; endif; ?>

			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</section>
