
<?php get_header(); ?>



<!-- End headear aear -->

<!-- Begin main content section
================================ -->
<section class="main-content blog-content">
    <section class="blog-item-main-wrap">
        <div class="common-wrap">
            <div class="section-title">
                <h1>Our Blog</h1>
                <p>Gain the insight and knowledge you need</p>
            </div>
            <div class="blog-item-wrap">
               <?php 
                    $blogs = new WP_Query(array(
                        'post_type' => 'post',
                        'order' => 'ASC',
						'paged' => $paged
                    ));
                while($blogs->have_posts()): $blogs->the_post();
                
                ?>
                    <div class="blog-item">
                        <figure class="blog-item-figure">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </figure>
                        <div class="blog-item-content">
                            <div class="blog-category-wrap">
                                <span> <?php foreach((get_the_category()) as $category){
                                        echo $category->name;}?></span>
                                <span><?php the_time('F j, Y'); ?></span>
                            </div>
                            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                            <p><?php read_more(21); ?>...</p>
                        </div>
                    </div> 
                
                <?php endwhile; ?>   
                   
            </div> 
            <div class="pagination-wrap">
                <?php the_posts_pagination(array(
                    'prev_text'          => __('<span class="older">Older Posts</span>'),
                    'next_text'          => __('<span class="newer">Newer Posts</span>'),
                    'screen_reader_text' => __(' ', 'nuquo')
                ));  ?>
            </div>  
        </div>
    </section>
</section>
<!-- End main content section -->

<!-- Begin footer section
========================== -->
<?php get_footer(); ?>