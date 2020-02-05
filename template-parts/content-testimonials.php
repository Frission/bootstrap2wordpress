<?php

    $testimonials_section_title = get_field('testimonials_section_title');

?>

<!-- Testimonial Section -->
        <section id="kudos">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <h2><?php echo $testimonials_section_title; ?></h2>

                        <?php $loop = new WP_Query(array('post_type' => 'testimonial',
                                                         'order_by'  => 'post_id',
                                                         'order'     => 'ASC')); ?>

                        <?php while($loop->have_posts()) : $loop->the_post(); ?>

                        <div class="row testimonial">
                            <div class="col-sm-4">
                                <?php 
                                if(has_post_thumbnail())
                                    the_post_thumbnail();
                                ?>
                            </div>
                            <div class="col-sm-8">
                                <blockquote>
                                    <?php the_content(); ?> 
                                     <cite><?php the_field('testimonial_citation'); ?></cite>
                                </blockquote>
                            </div>
                        </div>

                        <?php endwhile; wp_reset_query(); ?>                      
                    </div>
                </div>
            </div>
        </section>	