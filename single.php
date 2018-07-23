<?php
/**
 * The template for displaying all single posts
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
                        <?php the_field('single_post_image'); ?>
                    </figure>
                    <div class="blog-figure-content-wrap">
                        <div class="blog-figure-content">
                            <h2><?php the_title();?></h2>
                        </div>
                        <div class="blog-type-wrap">
                            <div class="blog-social-wrap">
                                <?php echo do_shortcode('[Sassy_Social_Share]');?>
                            </div>
                            <div class="blog-category-wrap">
                                <span><?php the_category(' ');?></span>
                                <span><?php the_date(); ?></span>
                            </div>
                        </div>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
            <!--<div class="blog-content-wrap">
               
                <?php 
                $blog_contents = get_field('blog_content');
                foreach($blog_contents as $blog_content):
                ?>
                
                    <div class="blog-content-item">
                        <h4><?php echo $blog_content['blog_content_item_title'];?></h4>
                        <?php echo $blog_content['blog_content_item_content'];?>
                        <a href="<?php echo $blog_content['blog_content_item_mail_link'];?>"><?php echo $blog_content['blog_content_item_mail'];?></a>
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
