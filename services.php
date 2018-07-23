<!--

Template Name: Services Page

-->




<?php get_header(); ?>



<!-- End headear aear -->

<!-- Begin main content section
================================ -->
<section class="main-content case-content service-page-content">
    <!-- Begin hero wrap
==================== -->
    <section class="hero-wrap" style="background-image: url(<?php echo get_template_directory_uri();?>/images/service-hero.jpg)">
        <div class="hero-title">
            <h1><?php the_title();?></h1>
        </div>
    </section>
    <!-- End hero wrap -->

    <!-- Begin feature-section
========================== -->
    <section class="service-section">
        <div class="common-wrap">
            <div class="service-process">
                <div class="section-title">
                    <h5><?php the_field('our_step_title');?></h5>
                </div>
                <div class="service-process-figure clear">
                    <?php the_field('our_step_image');?>
                </div>
            </div>
            <div class="service-content">
              
               <?php 
                $service_contents = get_field('service_contents');
                foreach($service_contents as $service_content):
                ?>
                
                <div class="service-content-item">
                    <h5><?php echo $service_content['service_content_title'];?></h5>
                    <p><?php echo $service_content['service_content'];?></p>
                </div>
                
                <?php endforeach; ?>

            </div>
            <div class="service-question-wrap">
                <div class="service-question-content-wrap clear">
                    <div class="service-question-icon">
                        <?php the_field('service_question_icon');?>
                    </div>
                    <div class="service-question-content">
                        <h5><?php the_field('service_question_title');?></h5>
                        <p><?php the_field('service_question_sub_title');?> </p>
                        <a href="<?php the_field('faq_page__link');?>"><?php the_field('faq_page_title');?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature-section -->
</section>
<!-- End main content section -->

<!-- Begin footer section
========================== -->
<?php get_footer(); ?>