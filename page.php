<?php
/**
 * The template for displaying all single Page
 * @package nuquo
 */

get_header(); ?>

<!-- End headear aear -->

<!-- Begin main content section
================================ -->
<section class="main-content blog-post-content">
    <section class="blog-content-section">
        <?php while(have_posts()): the_post();?>
        <div class="common-wrap">
            <div class="blog-content-hero-wrap">
                <div class="blog-content-figure-wrap">
                    <figure>
                        <?php the_post_thumbnail(); ?>
                    </figure>
                    <div class="blog-figure-content-wrap">
                        <div class="blog-figure-content">
                            <h2><?php the_title();?></h2>
                        </div>
                        <div class="blog-type-wrap page-type-wrap">
                            
                            <div class="blog-category-wrap page-category-wrap">
                                <!--<span><?php the_category(' ');?></span>-->
                                <span><?php the_date(); ?></span>
                            </div>
                        </div>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <!--<div class="blog-content-wrap">

                <?php 
                $page_contents = get_field('page_content');
                foreach($page_contents as $page_content):
                ?>

                <div class="blog-content-item">
                    <h4><?php echo $page_content['page_content_item_title'];?></h4>
                    <?php echo $page_content['page_content_item_content'];?>
                    <a href="<?php echo $page_content['page_content_item_mail_link'];?>"><?php echo $page_content['page_content_item_mail'];?></a>
                </div>

                <?php endforeach; ?>

            </div>-->
        </div>

        <?php endwhile; ?>

    </section>
</section>
<!-- End main content section -->

<!-- Begin footer section
========================== -->	
<?php get_footer(); ?>
