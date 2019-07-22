<?php
/*
* Template Name: News
*/
?>
<?php get_header(); ?>

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




<?php wp_footer(); ?>