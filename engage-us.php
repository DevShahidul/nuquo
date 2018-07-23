<!--

Template Name: Engage Us

-->




<?php get_header(); ?>



<!-- End headear aear -->

        <!-- Begin main content section
        ================================ -->
        <section class="main-content engage-us-content">
            <!-- Begin hero wrap
                ==================== -->
            <section class="hero-wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/engage-hero.jpg)">
               <div class="hero-title">
                  <h1><?php the_title(); ?></h1> 
               </div>
            </section>
            <!-- End hero wrap -->

           <!-- Begin engage content-section
           ================================= -->
           <section class="engage-content-section">
               <div class="common-wrap">
                   <div class="engage-des">
                       <?php the_field('engage_description');?>
                   </div>
                   <div class="engage-feature-info">
                       <h2>Why Engage Us</h2>
                       <div class="eagage-feature-wrap">
                         <?php 
                           $title = 1;
                           $engage_fields = get_field('engage_field'); 
                           foreach($engage_fields as $engage_field):
                         ?>
                          
                           <div class="engage-feature-row <?php if($title == 1)?>">
                               <div class="client-info">
                                   <?php echo "<h4>Client</h4>"; ?>
                                   <?php 
                                   $client_info_inners = $engage_field['client_info_inner'];
                                   foreach($client_info_inners as $client_info_inner):
                                   ?>
                                       <div class="client-info-inner">

                                           <p><?php echo $client_info_inner['client_info_first_content']; ?></p>
                                           <p><?php echo $client_info_inner['client_info_second_content']; ?></p>
                                           <div class="engage-graphics">
                                               <div class="engage-graphics-icon-wrap">
                                                   <div class="engage-graphics-icon">
                                                       <?php echo $client_info_inner['engage_graphics_icon_image']; ?>
                                                   </div>
                                               </div>
                                               <div class="engage-graphics-content">
                                                   <span><?php echo $client_info_inner['engage_graphics_icon_image_text']; ?></span>
                                               </div>
                                           </div>
                                       </div>
                                   
                                   <?php endforeach; ?>
                                   
                               </div>
                               <div class="nuquo-info">
                                   <h4>NuQuo</h4>
                                   <?php 
                                   $nuquo_infos = $engage_field['nuquo_info'];
                                   foreach($nuquo_infos as $nuquo_info):
                                   ?>
                                       <div class="nuquo-info-inner">

                                           <p><?php echo $nuquo_info['nuquo_info_first_content']; ?></p>
                                           <p><?php echo $nuquo_info['nuquo_info_second_content']; ?></p>
                                       </div>
                                  <?php endforeach; ?> 
                               </div>
                           </div>
                          
                          <?php endforeach; ?> 
                           
                           
                       </div>
                   </div>
                   <div class="engage-process-wrap">
                      <div class="section-title">
                          <h5>Our Engagement Process Is Straightforward</h5>
                      </div>
                       <div class="engage-process-item-wrap">
                          <?php 
                           $engagement_process_fields = get_field('engagement_process_field');
                           foreach($engagement_process_fields as $engagement_process_field):
                           ?>
                          
                           <div class="engage-process-item">
                               <div class="engage-process-icon-inner clear">
                                   <div class="engage-process-icon">
                                       <?php echo $engagement_process_field['engage_process_icon'];?>
                                    </div>
                                    <div class="engage-process-content">
                                        <span><?php echo $engagement_process_field['engage_process_step_text'];?></span>
                                        <p><?php echo $engagement_process_field['engage_process_content'];?></p>
                                    </div>
                               </div>
                           </div>
                       
                       
                       <?php endforeach; ?>
                       
                       
                       </div>
                   </div>
               </div>
           </section>
           <!-- End engage content-section -->
        </section>
        <!-- End main content section -->

        <!-- Begin footer section
========================== -->
        <?php get_footer(); ?>