<!--

Template Name: Bios Page

-->

<?php get_header(); ?>

<!-- End headear aear -->

<!-- Begin main content section
================================ -->
<section class="main-content bios-content bios-expanded-content">
    <!-- Begin bios-content-details-section
==================== -->
    <section class="bios-content-details-section" id="our-team">
        <h1>Our Management Team</h1>
        <div class="leader-wrap">
            <div class="common-wrap clear">
              
              <?php 
                $leader_infos = get_field('leader_info');
                foreach($leader_infos as $leader_info):
              ?>
               
                <div class="item-info">
                    <figure>
                        <?php echo $leader_info['leader_image']; ?>
                    </figure>
                    <div class="designation-info">
                        <h6><?php echo $leader_info['name']; ?></h6>
                        <span> <?php echo $leader_info['designation']; ?></span>
                        <a href="<?php echo $leader_info['learn_more_link']; ?>"><?php echo $leader_info['learn_more_text']; ?></a>
                    </div>
                    <div class="expand-info-wrap">
                        <div class="common-wrap clear">
                            <div class="information-details">
                                <h2><?php echo $leader_info['expand_title']; ?></h2>
                                <?php echo $leader_info['expand_content']; ?>
                                <div class="about-socal-info">
                                    <a href="mailto:<?php echo $leader_info['expand_message_icon']; ?>"><?php echo $leader_info['message_icon']; ?></a>
                                    <a href="<?php echo $leader_info['expand_linkdin_icon']; ?>"><?php echo $leader_info['linkdin_icon']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php endforeach; ?>
                
            </div>
        </div>
        <div class="member-wrap">
            <div class="common-wrap clear">
              
              <?php 
                $member_infos = get_field('member_info');
                foreach($member_infos as $member_info):
              ?> 
               
                    <div class="item-info">
                        <figure>
                            <?php echo $member_info['member_image']; ?>
                        </figure>
                        <div class="designation-info">
                            <h6><?php echo $member_info['name']; ?></h6>
                            <span><?php echo $member_info['designation']; ?></span>
                            <a href="<?php echo $member_info['learn_more_link']; ?>"><?php echo $member_info['learn_more_text']; ?></a>
                        </div>
                        <div class="expand-info-wrap">
                            <div class="common-wrap clear">
                                <div class="information-details">
                                    <h2><?php echo $member_info['expand_title']; ?></h2>
                                    <?php echo $member_info['expand_content']; ?>
                                    <div class="about-socal-info">
                                        <a href="mailto:<?php echo $member_info['message_icon_link']; ?>"><?php echo $member_info['message_icon']; ?></a>
                                        <a href="<?php echo $member_info['linkdin_icon_link']; ?>"><?php echo $member_info['linkdin_icon']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>      
                    </div> 
                
                <?php endforeach; ?>  
                                    
            </div>
        </div>    
    </section>
    <!-- End bios-content-details-section -->
</section>
<!-- End main content section -->

<!-- End headear aear -->

<!-- Begin footer section
========================== -->
<?php get_footer(); ?>