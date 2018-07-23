<!--

Template Name: Case Studies Page

-->




<?php get_header(); ?>



<!-- End headear aear -->

<!-- Begin main content section
================================ -->
<section class="main-content case-content">
    <!-- Begin hero wrap
==================== -->
    <section class="hero-wrap" style="background-image: url(<?php echo get_template_directory_uri();?>/images/case-studies-hero.jpg)">
        <div class="hero-title">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="line"></div>
    </section>
    <!-- End hero wrap -->

    <!-- Begin feature-section
========================== -->
    <section class="feature-section">
        <!-- Begin feature-item -->
        <?php 
        $case_studies_item = get_field('case_studies_item');
        foreach($case_studies_item as $case_studies_items):
        ?>
        <div class="feature-item">
            <div class="common-wrap">
                <div class="title-wrap">
                    <div class="title-logo-wrap">
                        <?php echo $case_studies_items['case_image']; ?>
                    </div>
                    <p><?php echo $case_studies_items['sub_title']; ?></p>
                    <h4><?php echo $case_studies_items['title']; ?></h4>
                </div>
                
                
                <ol class="feature-content-wrap clear">
                   
                    <?php 
                    $feature_content_item = $case_studies_items ['feature_content_item'];
                    foreach($feature_content_item as $feature_content_items):
                    ?>
                       
                        <li class="feature-content-item">
                            <p><?php echo $feature_content_items['feature_content'];?></p>
                        </li>
                    
                    <?php endforeach; ?>
             
                </ol>
                <div class="btn-wrap">
                    <span><?php echo $case_studies_items['saving_text']; ?></span>
                    <a href="<?php echo $case_studies_items['button_link']; ?>" class="btn medium-btn navi-blue"><?php echo $case_studies_items['button_text']; ?></a>
                </div>
            </div>
        </div>
        
        <?php endforeach; ?>
        <!-- End feature-item -->

        


    </section>
    <!-- End feature-section -->
</section>
<!-- End main content section -->


<!-- Begin footer section
========================== -->
<?php get_footer(); ?>