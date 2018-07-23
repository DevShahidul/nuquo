<?php
/**
 * The template for displaying the footer
 *
 *
 * @package nuquo
 */

?>


<div class="audit-details-info">
    <div class="audit-wrap clear">
        <div class="audit-info clear">
            <div class="title-text">
                <h3>Free Savings Analysis</h3>
                <p>We save our clients 30-60% on average! To find out how much you can save, please submit the form below or call us directly at 
					<a href="tel:18662679737">1 (866) 267-9737!</a> </p>
            </div>
            <div class="form-wrap">
                <?php echo do_shortcode('[contact-form-7 id="666" title="Get Your Free Audit Form"]');?>
            </div>
        </div>
    </div>
</div>

<footer class="footer-area">
    <section class="free-adult">
        <div class="common-wrap clear">
            <h3><?php global $nuquo; echo $nuquo['calltoaction-text'];?></h3>
            <p><?php echo $nuquo['calltoactionsub-text'];?></p>
            <div class="btn-wrap">
                <a href="<?php echo $nuquo['calltoactionsub-btnlink'];?>" class="btn large-btn dark-oragne audit"><?php echo $nuquo['calltoactionsub-btn'];?></a>
            </div>
        </div>
    </section>
    <section class="contact-us">
        <div class="common-wrap clear">
            <div class="section-title">
                <h2>Have Questions? Please Contact Us.</h2>
            </div>
            <div class="form-wrap">
                
                <?php echo do_shortcode('[contact-form-7 id="27" title="Contact form 1"]'); ?>
               
            </div>
        </div>
    </section>
    <section class="footer-main-section">
        <div class="common-wrap">
            <div class="footer-top">
                <?php dynamic_sidebar('footer-widgets'); ?>
                <div class="footer-widget">
                    <h6>Connect With Us</h6>
                    <div class="social-wrap">
                        <a href="<?php echo $nuquo['social-icon']['4'];?>"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.png" alt=""></a>
                        <a href="<?php echo $nuquo['social-icon']['1'];?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.pn.png" alt=""></a>
                        <a href="<?php echo $nuquo['social-icon']['2'];?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt=""></a>
                        <a href="<?php echo $nuquo['social-icon']['3'];?>"><img src="<?php echo get_template_directory_uri(); ?>/images/linkdin.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="footer-lower-wrap">
                <p><?php echo $nuquo['copy-right'];?></p>
            </div>
        </div>
    </section>
</footer>
<!-- End footer section -->
</div>
    <?php wp_footer(); ?>
<script type="text/javascript">function add_chatinline(){var hccid=89345347;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>
</body>

</html>
