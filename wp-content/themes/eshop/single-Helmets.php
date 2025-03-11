<?php
get_header();
?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <article>
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
        </article>

        
<?php
    endwhile;
endif;
?>


<!--prev and next Post Navigation in single.php  -->
<div class="post-navigation">
    <div class="nav-links">
        <div class="prev-post">
            <?php previous_post_link('%link', '&larr; Previous Post: %title'); ?>
        </div>
        <div class="next-post">
            <?php next_post_link('%link', 'Next Post: %title &rarr;'); ?>
        </div>
    </div>
</div>


<style>
    .post-navigation {
        text-align: center;
        margin: 20px 0;
    }

    .nav-links {
        display: flex;
        justify-content: space-around;
        gap: 20px;
    }

    .prev-post a, .next-post a {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: 0.3s;
    }

    .prev-post a:hover, .next-post a:hover {
        background-color: #0056b3;
    }

    .related_post {
        text-align: center;
        margin-top: 40px;
    }

    .related-posts-wrapper {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .tags {
        text-align: center;
        margin-top: 10px;
             }
</style>


<!-- Related Posts -->
<div class="related_post">
    <h3>---- Related Posts ----</h3>

<section class="blog section" id="blog">
    <div class="container">
        
        <div class="row">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $query = new WP_Query(
                array(
                    'post_type' => array('post','Helmets'),
                    'posts_per_page' => 3, 
                    'post__not_in' => array(get_the_ID()),
                    'orderby' => 'rand', 
                    'category__in' => wp_get_post_categories(get_the_ID()),
                    
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
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date"> <?php echo get_the_date(); ?> </div>
                                    <h2><a href="<?php the_permalink(); ?>"> <?php echo get_the_title(); ?> </a></h2>
                                    <p class="text"> <?php echo wp_trim_words(get_the_content(), 10, '...'); ?> </p>
                                    <p>Categories: <?php the_category(', '); ?></p>
                                    <p>Tags: <?php the_tags('', ', ', ''); ?></p>
                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>


                   
            <?php
                endwhile;
            ?>
             
        </div>

        
        <?php
            wp_reset_postdata();
            endif;
        ?>
    </div>
</section>



<?php
get_footer();
?>