<!--

Template Name: Partnerships Page

-->




<?php get_header(); ?>



<!-- End headear aear -->

<!-- Begin main content section
================================ -->
<section class="main-content partnership-content">
    <!-- Begin hero wrap
==================== -->
    <section class="hero-wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/partnership-banner.png)">
        <div class="hero-title">
            <h1><?php the_title();?></h1> 
        </div>
        <div class="line"></div>
    </section>
    <section class="brnd-details-section">
        <div class="common-wrap clear">
            <div class="brand-wrap">
               <?php
                $partnership_brand_fields = get_field('partnership_brand_field');
                foreach($partnership_brand_fields as $partnership_brand_field):
                ?>
                
                <a href="<?php echo $partnership_brand_field['brand_image_link'];?>" class="brand-items"><?php echo $partnership_brand_field['brand_items'];?></a>
                
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="association-partnership-section">
        <div class="common-wrap clear">
            <h3><?php the_field('hospital_association');?></h3>
            <div class="association-info">
               <?php
                $hospital_association_left_sides = get_field('hospital_association_left_side');
                foreach($hospital_association_left_sides as $hospital_association_left_side):
               ?>
               
                    <div class="association-content">
                        <div class="title-text">
                            <div class="toltip"><?php echo $hospital_association_left_side['hospital_association_left_hover_text'];?></div>
                            <h6><?php echo $hospital_association_left_side['hospital_association_left_title'];?></h6>
                            <p><?php echo $hospital_association_left_side['hospital_association_left_subtitle'];?></p>
                        </div>
                        <div class="title-text">
                            <p><?php echo $hospital_association_left_side['hospital_association_left_content'];?></p>
                        </div>
                    </div>
                
                <?php endforeach; ?>
                
                <div class="association-content">
                   <?php 
                    $hospital_association_right_contents = get_field('hospital_association_right_content');
                    foreach($hospital_association_right_contents as $hospital_association_right_content):
                    ?>
                        <div class="listing-info-wrap">
                            <h3><?php echo $hospital_association_right_content['hospital_association_right_title'];?></h3>
                            <div class="listing-info">
                                <ul>
                                   <?php
                                    $hospital_association_right_list = $hospital_association_right_content['hospital_association_right_list'];
                                    foreach($hospital_association_right_list as $hospital_association_right_lists):
                                    ?>
                                    <li><?php echo $hospital_association_right_lists['hospital_association_list_item'];?></li>
                                   <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="view-btn">
                                <a href="<?php echo $hospital_association_right_content['hospital_association_right_button_link'];?>"><?php echo $hospital_association_right_content['hospital_association_right_button_text'];?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="learn-more-section">
        <a href="<?php the_field('partnership_more_buton_link');?>"><?php the_field('partnership_more_buton_text');?></a>
    </section>
    <!-- End hero wrap -->
</section>
<!-- End main content section -->



<!-- Begin footer section
========================== -->
<?php get_footer(); ?>