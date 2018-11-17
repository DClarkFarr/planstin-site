<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>


	</head>
	<body <?php echo 'class="'.join(' ', get_body_class()).'"'.PHP_EOL; ?> data-spy="scroll" data-offset="0" data-target="#navigation">

		<!-- Fixed navbar -->
		<nav id="navigation" class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo home_url(); ?>"><span class="icon-stack"></span> <b><?php bloginfo('name'); ?></b></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbar-collapse collapse" id="bs-navbar-collapse">
					<?php wp_nav_menu(array(
				        'container' => false,
				        'menu' => __( 'The Main Menu' ),
				        'menu_class' => 'nav navbar-nav',
				        'theme_location' => 'main-nav',
				        'before' => '',
			            'after' => '',
			            'link_before' => '',
			            'link_after' => '',
			            'depth' => 0,
				        'fallback_cb' => '',
				        'walker' => new wp_bootstrap_navwalker()
					)); ?>

					<!-- Sign In / Sign Up -->
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown"><a href="#signin" data-toggle="modal" data-target=".bs-modal-sm"><span class="icon-lock"></span> Sign In</a></li>
						<div class="navbar-form pull-left">
							<a href="#signup" type="button" class="btn btn-sm btn-theme" data-toggle="modal" data-target=".bs-modal-sm">Free Trial</a>
						</div>
					</ul>
				</div><!--/nav-collapse -->
			</div><!-- /container -->
		</nav><!-- /fixed-navbar -->
