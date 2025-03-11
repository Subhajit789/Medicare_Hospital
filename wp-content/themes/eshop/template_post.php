<?php
// Template Name:post
get_header();
?>
		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Keep up with Our Most Recent Medical News.</h2>
							<img src="<?php echo get_template_directory_uri();?>/assets/img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
				<?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $query = new WP_Query(
                array(
                    'post_type' =>array('Helmets'),
                    'posts_per_page' => 1,  
                    'paged' => $paged,
                    'post_status' => 'publish'
                )
            );
            
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								 <!-- <img src="<?php echo get_template_directory_uri();?>/assets/img/blog1.jpg" alt="#">  -->
								 <?php the_post_thumbnail('full');
								 ?>
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date"><?php echo get_the_date();?></div>
									<h2><a href="blog-single.html"><?php echo get_the_title(); ?> </a></h2>
									<p class="text"><?php echo wp_trim_words( get_the_content(),20,'....');?></p>
									<a href="<?php echo the_permalink();?>">Read more</a>
								</div>
							</div>
						</div>
						
						<!-- End Single Blog -->
					</div>
					<?php
                endwhile;
            ?>

                    <!-- <?php
                  
                    // wp_reset_postdata(); // Reset query
                    //  else  :
                    //     echo '<p>No posts found.</p>';
                    //  endif;
                     ?> -->
					
					
					
				</div>
			</div>
		</section>


		<div class="row">
            <div class="col-12">
                <div class="pagination-wrapper text-center">
                    <?php
                    $big = 999999999; 
                    $pagination = paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $query->max_num_pages,
                        'prev_text' => __('&laquo; Previous'),
                        'next_text' => __('Next &raquo;'),
                        'type' => 'plain'
                    ));
                    
                    if ($pagination) {
                        echo '<nav class="pagination">' . $pagination . '</nav>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <?php
            wp_reset_postdata();
            endif;
        ?>
		<!-- End Blog Area -->
        <?php
        get_footer();
        ?>
		




