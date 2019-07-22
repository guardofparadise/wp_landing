<?php get_header(); ?>

<div class="container-fluid gtco-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><?php echo the_field('top_text'); ?></h1>
                <p><?php echo the_field('top_text_description'); ?></p>
                <a href="#"><?php echo the_field('cta_text'); ?><i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            <div class="col-md-6">
                <div class="card"><img class="card-img-top img-fluid" src="<?php echo the_field('hero_img'); ?>" alt=""></div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid gtco-feature" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="cover">
                    <div class="card">
                        <svg
                                class="back-bg"
                                width="100%" viewBox="0 0 900 700" style="position:absolute; z-index: -1">
                            <defs>
                                <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                    <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                                    <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                                </linearGradient>
                            </defs>
                            <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
                                  d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"/>
                        </svg>
                        <!-- *************-->

                        <svg width="100%" viewBox="0 0 700 500">
                            <clipPath id="clip-path">
                                <path d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z"></path>
                            </clipPath>
                            <!-- xlink:href for modern browsers, src for IE8- -->
                            <image clip-path="url(#clip-path)" xlink:href="<?php echo the_field('who_we_are_img'); ?>" width="100%"
                                   height="465" class="svg__image"></image>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h2><?php echo the_field('who_we_are'); ?></h2>
                <p><?php echo the_field('who_we_are_description'); ?></p>
                <p>
                  <small><?php echo the_field('who_we_are_description_small'); ?></small>
                </p>
                <a href="#"><?php echo the_field('who_we_are_link'); ?><i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-features" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2><?php echo the_field('our_services') ?></h2>
                <p><?php echo the_field('our_services_description'); ?></p>
                <a href="#"><?php echo the_field('our_services_link'); ?><i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            <div class="col-lg-8">
                <svg id="bg-services"
                     width="100%"
                     viewBox="0 0 1000 800">
                    <defs>
                        <linearGradient id="PSgrad_02" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                            <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                            <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                        </linearGradient>
                    </defs>
                    <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_02)"
                          d="M801.878,3.146 L116.381,128.537 C26.052,145.060 -21.235,229.535 9.856,312.073 L159.806,710.157 C184.515,775.753 264.901,810.334 338.020,792.380 L907.021,652.668 C972.912,636.489 1019.383,573.766 1011.301,510.470 L962.013,124.412 C951.950,45.594 881.254,-11.373 801.878,3.146 Z"/>
                </svg>
                <div class="row">
                    <div class="col">
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="<?php echo the_field('service_1_img'); ?>" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title"><?php echo the_field('service_1'); ?></h3>
                                <p class="card-text"><?php echo the_field('service_1_description'); ?></p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="<?php echo the_field('service_2_img'); ?>" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title"><?php echo the_field('service_2'); ?></h3>
                                <p class="card-text"><?php echo the_field('service_2_description'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="<?php echo the_field('service_3_img'); ?>" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title"><?php echo the_field('service_3'); ?></h3>
                                <p class="card-text"><?php echo the_field('service_2_description'); ?></p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="<?php echo the_field('service_4_img'); ?>" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title"><?php echo the_field('service_4'); ?></h3>
                                <p class="card-text"><?php echo the_field('service_4_description'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-numbers-block">
    <div class="container">
        <svg width="100%" viewBox="0 0 1600 400">
            <defs>
                <linearGradient id="PSgrad_03" x1="80.279%" x2="0%"  y2="0%">
                    <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1" />
                    <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1" />

                </linearGradient>

            </defs>
            <!-- <clipPath id="clip-path3">

                                      </clipPath> -->

            <path fill-rule="evenodd"  fill="url(#PSgrad_03)"
                  d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z"></path>

            <clipPath id="ctm" fill="none">
                <path
                        d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z"></path>
            </clipPath>

            <!-- xlink:href for modern browsers, src for IE8- -->
            <image  clip-path="url(#ctm)" xlink:href="<?php echo the_field('advantages_img'); ?>" height="800px" width="100%" class="svg__image">

            </image>

        </svg>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo the_field('advantage_1'); ?></h5>
                        <p class="card-text"><?php echo the_field('advantage_1_description'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo the_field('advantage_2'); ?></h5>
                        <p class="card-text"><?php echo the_field('advantage_2_description'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo the_field('advantage_3'); ?></h5>
                        <p class="card-text"><?php echo the_field('advantage_3_description'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo the_field('advantage_4'); ?></h5>
                        <p class="card-text"><?php echo the_field('advantage_4_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid gtco-testimonials">
    <div class="container">
        <h2><?php echo the_field('feedback'); ?></h2>
        <div class="owl-carousel owl-carousel1 owl-theme">

				<?php 
					$args = array(
						
						'post_type' => 'specialties',
						'category_name' => 'pizzas',
						
					);
					$specialties = new WP_Query($args);
					while($specialties->have_posts()) : $specialties->the_post(); ?>

					<div>
            <div class="card text-center">
							<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                <div class="card-body">
                  <h5>
										<?php the_title(); ?>
										<br/><span><?php echo the_field('user_name'); ?></span></h5>
                        <p class="card-text"><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
						<?php endwhile; wp_reset_postdata(); ?>

  
        </div>
    </div>
</div>
<div class="container-fluid gtco-features-list">
    <div class="container">
        <div class="row">
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="<?php echo the_field('feedback_1_img'); ?>" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0"><?php echo the_field('feedback_1'); ?></h5>
                    <?php echo the_field('feedback_1_description'); ?>
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="<?php echo the_field('feedback_2_img'); ?>" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0"><?php echo the_field('feedback_2'); ?></h5>
                    <?php echo the_field('feedback_2_description'); ?>
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="<?php echo the_field('feedback_3_img'); ?>" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0"><?php echo the_field('feedback_3'); ?></h5>
                    <?php echo the_field('feedback_3_description'); ?>
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="<?php echo the_field('feedback_4_img'); ?>" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0"><?php echo the_field('feedback_4'); ?></h5>
                    <?php echo the_field('feedback_4_description'); ?>
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="<?php echo the_field('feedback_5_img'); ?>" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0"><?php echo the_field('feedback_5'); ?></h5>
                    <?php echo the_field('feedback_5_description'); ?>
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="<?php echo the_field('feedback_6_img'); ?>" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0"><?php echo the_field('feedback_6'); ?></h5>
                    <?php echo the_field('feedback_6_description'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-logo-area">
    <div class="container">
        <div class="row">
            <div class="col"><img src="<?php echo get_template_directory_uri()?>/images/logo1.png" class="img-fluid" alt=""></div>
            <div class="col"><img src="<?php echo get_template_directory_uri()?>/images/logo2.png" class="img-fluid" alt=""></div>
            <div class="col"><img src="<?php echo get_template_directory_uri()?>/images/logo3.png" class="img-fluid" alt=""></div>
            <div class="col"><img src="<?php echo get_template_directory_uri()?>/images/logo4.png" class="img-fluid" alt=""></div>
            <div class="col"><img src="<?php echo get_template_directory_uri()?>/images/logo5.png" class="img-fluid" alt=""></div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-news" id="news">
    <div class="container">
        <h2>Latest News & Articles</h2>
        <div class="owl-carousel owl-carousel2 owl-theme">
            <div>
                <div class="card text-center"><img class="card-img-top" src="<?php echo get_template_directory_uri()?>/images/news1.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>Aenean ultrices lorem quis blandit
                            tempor urabitur accumsan. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="<?php echo get_template_directory_uri()?>/images/news2.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5> Nam vel nisi eget odio pulvinar
                            iaculis. Fusce aliquet. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="<?php echo get_template_directory_uri()?>/images/news3.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>Morbi faucibus odio sollicitudin
                            risus scelerisque dignissim. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="<?php echo get_template_directory_uri()?>/images/news1.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>Aenean ultrices lorem quis blandit
                            tempor urabitur accumsan. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="<?php echo get_template_directory_uri()?>/images/news2.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5> Nam vel nisi eget odio pulvinar
                            iaculis. Fusce aliquet. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="<?php echo get_template_directory_uri()?>/images/news3.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>Morbi faucibus odio sollicitudin
                            risus scelerisque dignissim. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="container-fluid" id="gtco-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" id="contact">
                <h4> Contact Us </h4>
                <input type="text" class="form-control" placeholder="Full Name">
                <input type="email" class="form-control" placeholder="Email Address">
                <textarea class="form-control" placeholder="Message"></textarea>
                <a href="#" class="submit-button">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6">
                        <h4>Company</h4>
                        <ul class="nav flex-column company-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">FAQ's</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        </ul>
                        <h4 class="mt-5">Fllow Us</h4>
                        <ul class="nav follow-us-nav">
                            <li class="nav-item"><a class="nav-link pl-0" href="#"><i class="fa fa-facebook"
                                                                                      aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"
                                                                                 aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-google"
                                                                                 aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-linkedin"
                                                                                 aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h4>Services</h4>
                        <ul class="nav flex-column services-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Web Design</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Graphics Design</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">App Design</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">SEO</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Marketing</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Analytic</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <p>&copy; 2019. All Rights Reserved. Design by <a href="https://gettemplates.co" target="_blank">GetTemplates</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>

<?php wp_footer(); ?>
