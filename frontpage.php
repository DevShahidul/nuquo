<?php 

get_header(); 

/*
Template Name: Home Page
*/

?>


<!-- End headear aear -->

<!-- Begin main content section
================================ -->
<section class="main-content home-content">
   
   
    <script>
        // Load the IFrame Player API code asynchronously.
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // Replace the 'ytplayer' element with an <iframe> and
        // YouTube player after the API code downloads.
        var player;
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('ytplayer', {
                height: '390',
                width: '640',
                playerVars : {
                    autoplay : 0
                },
                videoId: 'Vr7QgRqkEOQ'
            });
        }

        jQuery(window).scroll(function() {
            jQuery("iframe").each( function() {
                if( jQuery(window).scrollTop() > jQuery(this).offset().top - 200 ) {
                    //$(this).css('opacity',1);
                    player.playVideo();
                } else {
                    //$(this).css('opacity',0);
                    player.stopVideo();
                }
            }); 
        });

    </script>
    <!-- Begin hero wrap
==================== -->
    <section class="hero-wrap home-hero" style="background-image: url(<?php global $nuquo; echo $nuquo['hero-bgimg']['url'];?>)">
        <div class="common-wrap clear">
            <div class="home-hero-content">
                <h4><?php echo $nuquo['hero-title'];?></h4>
                <p> <?php  echo $nuquo['hero-content'];?> </p>
                <h4 class="help-text"><?php  echo $nuquo['hero-help'];?></h4>
                <div class="btn-wrap">
                    <a href="<?php  echo $nuquo['hero-btnlink'];?>" class="btn large-btn dark-oragne audit"><?php  echo $nuquo['hero-btn'];?></a>
                </div>
                <span><?php  echo $nuquo['hero-offer'];?></span>
            </div>
            <div class="home-graphics">
                <img src="<?php  echo $nuquo['hero-rightimg']['url'];?>" alt="">
            </div>
        </div>
    </section>
    <!-- End hero wrap -->

    <!-- Begin video-section
===================== -->
    <section class="video-section">
        <div class="common-wrap">
            <div class="video-wrap">
                <div class="video-inner-wrap clear">
                    <div class="section-title">
                        <h2><?php  echo $nuquo['hvideo-title'];?></h2>
                        
                    </div>
                    <div class="video-figure-wrap" id="ytplayer">
                        <!--<img src="<//?php echo $nuquo['hvideo-upimg']['url'];?>" alt="">-->
                        <!-- <iframe width="100%" height="420" src="<//?php  echo $nuquo['hvideo-link'];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
                        <!--<a href="<//?php  echo $nuquo['hvideo-link'];?>"><img src="<//?php echo $nuquo['hvideo-icon']['url'];?>" alt=""></a>-->
                    </div>
                </div>
            </div>
            <div class="video-articles">
                <p><?php  echo $nuquo['hvideo-content1'];?> </p>
                <p><?php  echo $nuquo['hvideo-content2'];?> </p>
            </div>
        </div>
    </section>
    <!-- End video-section -->

    <!-- Begin case-studies-section
=============================== -->
    <section class="case-studies">
        <div class="common-wrap">
            <div class="section-title">
                <h2>Case Studies</h2>
            </div>
            <div class="case-item-wrap">
               <?php 
                $case = new WP_Query(array(
                    'post_type' => 'casestudy',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                )); 
                while($case->have_posts()) : $case->the_post();
                ?>
                
                <a href="<?php the_field('image_link'); ?>" class="case-item">
                    <figure>
                        <?php the_post_thumbnail(); ?>
                        <span>Saved <br> <?php the_field('offer_text'); ?></span>
                    </figure>
                </a>
               <?php endwhile; 
                wp_reset_postdata();
                ?>
            </div>
            <div class="btn-wrap">
                <a href="/case-studies/" class="btn light-blue">Review Sample Case Studies</a>
            </div>
        </div>
    </section>
    <!-- End case-studies-section -->

    <!-- Begin reason-section
========================= -->
    <section class="reason-section">
        <div class="common-wrap">
            <div class="section-title">
                <h2>Why Work With Us?</h2>
                <p>Here are 7 important reasons why</p>
            </div>
            <!-- Begin reason-item-wrap -->
            <div class="reason-item-wrap">
                <div class="reason-row-wrap">
                
                    <div class="reason-row">
                        <?php 
                        $works = new WP_Query(array(
                            'post_type' => 'work',
                            'posts_per_page' => 3,
                            'order' => 'ASC'
                        ));
                        while($works->have_posts()) : $works->the_post(); ?>
                        <div class="reason-item">
                            <figure>
                                <?php the_post_thumbnail('full'); ?>
                            </figure>
                            <div class="reason-item-content">
                                <?php the_content(); ?>
                            </div>
                            <span class="reason-overlay-text"><?php the_title(); ?></span>
                        </div>
                        
                        <?php endwhile; ?>
                    </div>
                   
                    
                    <div class="reason-row">
                       
                        <div class="reason-col-left">
                            <?php 
                            $works = new WP_Query(array(
                                'post_type' => 'work',
                                'offset'    => 3,
                                'posts_per_page' => 3,
                                'order' => 'ASC'
                            ));
                            while($works->have_posts()) : $works->the_post();

                            ?>
                            <div class="reason-item">
                                <figure>
                                    <?php the_post_thumbnail('full'); ?>
                                </figure>
                                <div class="reason-item-content">
                                    <?php the_content(); ?>
                                </div>
                                <span class="reason-overlay-text"><?php the_title(); ?></span>
                            </div>
                           
                            <?php endwhile; ?>
                            
                        </div>
                        
                       
                        <div class="reason-col-right">
                            <?php 
                            $works = new WP_Query(array(
                                'post_type' => 'work',
                                'offset'    => 6,
                                'posts_per_page' => 1,
                                'order' => 'ASC'
                            ));
                            while($works->have_posts()) : $works->the_post(); 

                            ?>
                            <div class="reason-item">
                                <figure>
                                    <?php the_post_thumbnail('full'); ?>
                                </figure>
                                <div class="reason-item-content">
                                    <?php the_content(); ?>
                                </div>
                                <span class="reason-overlay-text"><?php the_title(); ?></span>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        
                    </div>
                   
                    
                </div>
            </div>
            <!-- End reason-item-wrap -->
        </div>
    </section>
    <!-- End reason-section -->

    <!-- Begin testimonial-section
============================== -->
    <section class="client-testimonial-section">
        <div class="common-wrap">
            <div class="section-title">
                <h2>Client Testimonials</h2>
            </div>
            <div class="client-item-wrap">
               <?php 
                $clients = new WP_Query(array(
                    'post_type' => 'client',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                )); 
                while($clients->have_posts()) : $clients->the_post();
                ?>
                
                <div class="client-item">
                    <figure class="client-figure">
                        <?php the_post_thumbnail(); ?>
                    </figure>
                    <div class="client-content">
                        <p><?php the_field('client_first_content'); ?></p>
                        <p><?php the_field('client_second_content_'); ?></p>
                    </div>
                </div>
                
               <?php endwhile; 
                wp_reset_postdata();
                ?>
                
            </div>
        </div>
    </section>
    <!-- End testimonial-section -->
</section>
<!-- End main content section -->

<!-- Begin footer section
========================== -->
<?php get_footer(); ?>