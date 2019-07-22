<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
    <div class="container"><a class="navbar-brand"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"><span
                class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span></button>
        <div id="my-nav" class="collapse navbar-collapse">
            <!-- <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul> -->

						<?php 
							$args = array(
								'theme_location' => 'Header Menu',
								'menu'            => 'menu-1', 
								'container'       => false, 
								'container_class' => '', 
								'container_id'    => '',
								'menu_class'      => 'navbar-nav mr-auto', 
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							); 

							wp_nav_menu($args);
						?>
            <form class="form-inline my-2 my-lg-0">
                <a href="#" class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase">login</a> <a href="#"
                                                                                                       class="btn btn-info my-2 my-sm-0 text-uppercase">sign
                up</a>
            </form>
        </div>
    </div>
</nav>