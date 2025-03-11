<?php
// Template Name: service
// echo get_the_content();
?>

<?php
get_header();
?>




<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-home"></i>
                    <div class="content">
                        <span class="counter">3468</span>
                        <p>Hospital Rooms</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-user-alt-3"></i>
                    <div class="content">
                        <span class="counter">557</span>
                        <p>Specialist Doctors</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont-simple-smile"></i>
                    <div class="content">
                        <span class="counter">4379</span>
                        <p>Happy Patients</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-table"></i>
                    <div class="content">
                        <span class="counter">32</span>
                        <p>Years of Experience</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
        </div>
    </div>
</div>
<!--/ End Fun-facts -->


<!-- Start Blog Area -->
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Our Service</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-img.png" alt="#">
                    <p>If you're creating a "Our Services" section for a hospital website in WordPress, you can do it in different ways. Using WordPress Pages (Simple Method) Create a new page called "Our Services" in WordPress. Add service descriptions manually using the block editor. Use a list or columns to display different services.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
            );

            $query = new wp_Query($args);
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>

                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog1.jpg" alt="#"> -->
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date"><?php echo get_the_date(); ?></div>
                                    <h2><a href="blog-single.html"><?php echo get_the_title(); ?></a></h2>
                                    <p class="text"><?php echo wp_trim_words(get_the_content(), 20, ' ....'); ?></p>
                                    <p>categories: <?php the_category(', ');?></p>
											<p>tags: <?php the_tags('', ', ', '');?></p>
                                    <a href="<?php the_permalink(); ?>">Read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>

                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p>No posts found.</p>';
            endif;
            ?>


        </div>
    </div>
</section>
<!-- End Blog Area -->


<?php
get_footer();
?>