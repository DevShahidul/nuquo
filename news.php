<!--

Template Name: News Page

-->


<?php get_header(); ?>



<!-- End headear aear -->

<!-- Begin main content section
================================ -->
<section class="main-content news-content">
    <section class="new-content-wrap">
        <div class="common-wrap">
            <div class="section-title">
                <h1>Latest News</h1>
                <p>Learn about all the exciting things happening at NuQuo</p>
            </div>
            <div class="news-item-wrap">
                <div class="news-item press-realeases-info">
                    <div class="news-tittle">
                        <h5>Press Releases</h5>
                        <div class="news-icon">
                            <img src="<?php echo get_template_directory_uri();?>/images/news-icon-1.png" alt="">
                        </div>
                    </div>
					<?php 
					 $press_release_posts = get_field('press_release_post');
					foreach($press_release_posts as $press_release_post):
					?>
                    <div class="social-content-info">
                        <h5><?php echo $press_release_post['press_release_title'];?></h5>
                        <?php echo $press_release_post['press_release_content'];?>
                        <div class="social-thumb-info">
                            <figure><?php echo $press_release_post['press_releases_post_image'];?></figure>
                            <a href="<?php echo $press_release_post['press_releases_post_image_title_link'];?>"><?php echo $press_release_post['press_releases_post_image_title'];?></a>
                        </div>
                    </div>
					<?php endforeach; ?>
                </div>
                <div class="news-item facebook-info">
                    <div class="news-tittle">
                        <h5>Facebook</h5>
                        <div class="news-icon">
                            <img src="<?php echo get_template_directory_uri();?>/images/news-icon-2.png" alt="">
                        </div>
                    </div>
					<?php 
					$facebook_posts = get_field('facebook_post');
					foreach($facebook_posts as $facebook_post):
					?>
                    <div class="social-content-info">
                        <h5><?php echo $facebook_post['facebook_post_title'];?></h5>
                        <?php echo $facebook_post['facebook_post_content'];?>
                        <div class="social-thumb-info">
                            <figure><?php echo $facebook_post['facebook_post_image'];?></figure>
                            <a href="<?php echo $facebook_post['facebook_post_image_title_link'];?>"><?php echo $facebook_post['facebook_post_image_title'];?></a>
                        </div>
                    </div>
					<?php endforeach; ?>
                </div>
                <div class="news-item twitter-info">
                    <div class="news-tittle">
                        <h5>Twitter</h5>
                        <div class="news-icon">
                            <img src="<?php echo get_template_directory_uri();?>/images/news-icon-3.png" alt="">
                        </div>
                    </div>
					<?php 
					 $twitter_posts = get_field('twitter_post');
					foreach($twitter_posts as $twitter_post):
					?>
                    <div class="social-content-info">
                        <h5><?php echo $twitter_post['twitter_post_tilte'];?><cite><?php echo $twitter_post['twitter_account_name'];?></cite></h5>
                        <div class="thumb-info">
                            <figure><?php echo $twitter_post['twitter_post_image'];?></figure> 
                            <?php echo $twitter_post['twitter_post_content'];?>           
                        </div>
						<?php 
						$twitter_second_post_styles = $twitter_post['twitter_second_post_style'];
						foreach($twitter_second_post_styles as $twitter_second_post_style):
						?>
                        <div class="socila-details-info">
                            <h5><?php echo $twitter_second_post_style['twitter_post_second_tilte'];?><cite><?php echo $twitter_second_post_style['twitter_second_account_name'];?></cite></h5>
                            <em><?php echo $twitter_second_post_style['twitter_post_sub_text'];?></em>
                            <div class="talking-info">
                                <h5><dfn><?php echo $twitter_second_post_style['twitter_retweete'];?></dfn><cite><?php echo $twitter_second_post_style['twitter_retweet_account_text'];?></cite></h5>
                                <?php echo $twitter_second_post_style['twitter_retweet_post_content'];?>
                            </div>
                        </div>
						<?php endforeach; ?>
                    </div>
                   <?php endforeach; ?>
                </div>
                <div class="news-item linkedin-info">
                    <div class="news-tittle">
                        <h5>LinkedIn</h5>
                        <div class="news-icon">
                            <img src="<?php echo get_template_directory_uri();?>/images/news-icon-4.png" alt="">
                        </div>
                    </div>
					<?php 
                    $linkedin_posts = get_field('linkedin_post');
					foreach($linkedin_posts as $linkedin_post):
					?>
                    <div class="social-content-info">
                        <h5><?php echo $linkedin_post['linkedin_post_title'];?></h5>
                        <?php echo $linkedin_post['linkedin_post_content'];?>
                        <div class="social-thumb-info">
                            <figure><?php echo $linkedin_post['linkedin_post_image'];?></figure>
                            <a href="<?php echo $linkedin_post['linkedin_post_image_title_link'];?>"><?php echo $linkedin_post['linkedin_post_image_title'];?></a>
                        </div>
                    </div>
					<?php endforeach; ?>
                </div>
                    <div class="news-item linkedin-info">
                        <div class="news-tittle">
                            <h5>Youtube</h5>
                            <div class="news-icon">
                                <img src="<?php echo get_template_directory_uri();?>/images/youtube-thumbnail.jpg" alt="">
                            </div>
                        </div>
                        <?php 
                                $youtube_posts = get_field('youtube_post');
                                foreach($youtube_posts as $youtube_post):
                                ?>
                                <div class="social-content-info">
                                <h5><?php echo $youtube_post['youtube_post_title'];?></h5>
                                <?php echo $youtube_post['youtube_post_content'];?>
                                <div class="social-thumb-info">
                                <figure><?php echo $youtube_post['youtube_post_image'];?></figure>
                                <a href="<?php echo $youtube_post['youtube_post_image_title_link'];?>"><?php echo $youtube_post['youtube_post_image_title'];?></a>
                                </div>
                                </div>
                            <?php endforeach; ?>
                    </div>
            </div>
        </div>
    </section>
</section>
<!-- End main content section -->

<!-- Begin footer section
========================== -->
<?php get_footer(); ?>