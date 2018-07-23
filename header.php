<?php
/**
 * The header for our theme
 *
 *
 * @package nuquo
 */

?>
        <!DOCTYPE html>
        <html <?php language_attributes(); ?>>

            <head>
				<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55325006-1', 'auto');
  ga('send', 'pageview');

</script>
                <meta charset="<?php bloginfo( 'charset' ); ?>">
                <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
                <meta name="format-detection" content="telephone=no">
                
                <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
                
                
                <?php wp_head();?>
            </head>

            <body <?php body_class(); ?>>
                <div class="main-wrap">
                    <!-- Begin header area
======================= -->
                    <header class="header-area">
                        <div class="header-wrap">
                            <div class="common-wrap">
                               <div class="header-calltoaction-wrap">
                                    <div class="social-wrap">
                                        <a href="<?php global $nuquo; echo $nuquo['social-icon']['4'];?>"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.png" alt=""></a>
                                        <a href="<?php echo $nuquo['social-icon']['1'];?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.pn.png" alt=""></a>
                                        <a href="<?php echo $nuquo['social-icon']['2'];?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt=""></a>
                                        <a href="<?php echo $nuquo['social-icon']['3'];?>"><img src="<?php echo get_template_directory_uri(); ?>/images/linkdin.png" alt=""></a>
                                    </div>
                                    <a href="tell:18662679737" class="call-to-action"><?php echo $nuquo['call-number'];?></a>
                                </div>
                                <div class="logo-wrap">
                                    <div class="main-logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $nuquo['logo-upload']['url'];?>" alt=""></a></div>
                                    <div class="moblie-nav">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <nav class="main-nav">
                                   <?php 
                                    wp_nav_menu(array(
                                        'theme_location' => 'Main-menu'
                                    ));
                                    ?>
                                </nav>
                            </div>
                        </div>
                    </header>