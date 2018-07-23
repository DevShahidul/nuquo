<!--

Template Name: Faqs

-->


<?php get_header(); ?>



<!-- End headear aear -->

<!-- Begin main content section
================================ -->
<section class="main-content faq-content">
    <!-- Begin hero wrap
==================== -->
    <section class="hero-wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/faq-banner.jpg)">
        <div class="hero-title">
            <h1><?php the_title(); ?></h1> 
        </div>
        <div class="line"></div>
    </section>
    <div class="faq-content-details">
        <div class="common-wrap">
            <div class="title-text">
                <h3>Do You Have Questions About Our Services?</h3>
                <p>Answers to our most commonly asked questions can be found below</p>
            </div>
            <div class="faq-text-info">
               <?php 
                $faq_according_infos = get_field('faq_accordion_info');
                
                foreach($faq_according_infos as $faq_according_info):
                ?>
                
                    <div class="accordion">
                        <h5><?php echo $faq_according_info['accordion_title']; ?></h5>
                        <?php echo $faq_according_info['accordion_content']; ?>
                    </div>
                    
                <?php endforeach; ?>
               
            </div>
            
            <div class="brand-info-wrap">
              <?php 
                
                $brand_infos = get_field('brand_info');
                
                foreach($brand_infos as $brand_info):
              
              ?>
                <div class="brand-coll">
                    <div class="toltip"><?php  echo $brand_info['toltip_text']; ?></div>
                    <div class="brand-item">
                        <h6><?php echo $brand_info['person_name']; ?>, <?php echo $brand_info['designation']; ?></h6>
                        <span><?php echo $brand_info['company_name']; ?></span>
                    </div> 
                    <div class="brand-item">
                        <?php echo $brand_info['brand_image']; ?>
                    </div>   
                </div>
                
               <?php endforeach; ?>
                
               
            </div>
        </div>
    </div>
    <!-- End hero wrap -->
</section>
<!-- End main content section -->


<!-- Begin footer section
========================== -->
<?php get_footer(); ?>