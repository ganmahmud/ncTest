<?php get_header(); ?>
<?php
    if(is_single()){
        setPostViews(get_the_ID()); 
    } 
?>

<?php while ( have_posts() ) : the_post(); ?>
<section class="section hero_sec">
    <div class="social">
      <ul>
        <li><a href="#"><img width="50" src="<?php echo get_template_directory_uri(); ?>/images/svg/fb.svg" alt="Social"></a></li>
        <li><a href="#"><img width="50" src="<?php echo get_template_directory_uri(); ?>/images/svg/twitter.svg" alt="Social"></a></li>
        <li><a href="#"><img width="50" src="<?php echo get_template_directory_uri(); ?>/images/svg/instagram.svg" alt="Social"></a></li>
      </ul>
    </div>
    <div class="container article_hero">
        <h4 class="category-badge"><span>Places</span></h4>
        <h1>The Island at The End of The World</h1>
        <h6><i>Source Name</i> | 4 Min Read</h6>
    </div>
</section>
  
<section class="article__content container">
    <div class="row">
        <div class="col-md-9">
            <div class="desc">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
                a type specimen book. 
                </p>
            
                <h5>What is Lorem Ipsum?</h5>
            
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
                a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining 
                essentially unchanged. 
                </p>
            
                <p>
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
                passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem 
                Ipsum.
                </p>
            
                <h5>Why do we use it?</h5>
            
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its 
                layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to 
                using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web 
                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web 
                sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on 
                purpose (injected humour and the like).
                </p>
            </div>
            <div class="post-tags">
                <span class="mr-2">Tags:</span> <a href="#" class="tag">Tag1</a>
            </div>
            <div class="article_review">
                <p class="mr-3">Was This Article Helpful?</p>
                <a href="#" class="mr-2"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/like-dislike.svg" alt="Review"></a>
                <a href="#"><img class="dislike-icon" src="<?php echo get_template_directory_uri(); ?>/images/svg/like-dislike.svg" alt="Review"></a>
            </div>

        
        </div>
        <div class="col-md-3 next_article_wrapper">
            <div class="next_article_box mb-3">
                <h5 class="section_title"><span>Next Article</span></h5>
                <a href="#" class="box regular__box">
                    <img alt="Ship" class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/ship.jpg">
                    <div class="box__content">
                      <div class="inner-container">
                        <small>4 Min Read</small>
                        <p>The Island at The End of The World</p><small>Read More</small>
                      </div>
                    </div>
                </a>
            </div>
            <div class="subscribe_box">
                <h6 class="font-weight-bold mb-3">Subscribe to our newsletter for the latest update</h6>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Enter Your Email">
                    <div class="input-group-append">
                        <button class="btn" type="button"><img width="15" src="<?php echo get_template_directory_uri(); ?>/images/svg/envelop-black.svg" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="related_articles container">
    <h4 class="section_title"><span>Related Articles</span></h4>
    <div class="row">
        <a href="#" class="box hover__animate regular__box col">
            <div class="box__img"><img alt="Ship" class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/ship.jpg"></div>
            <div class="box__content">
              <div class="inner-container">
                <small>4 Min Read</small>
                <p>The Island at The End of The World</p><small>Read More</small>
              </div>
            </div>
        </a>
        <a href="#" class="box hover__animate regular__box col">
            <div class="box__img"><img alt="Ship" class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/ship.jpg"></div>
            <div class="box__content">
              <div class="inner-container">
                <small>4 Min Read</small>
                <p>The Island at The End of The World</p><small>Read More</small>
              </div>
            </div>
        </a>
        <a href="#" class="box hover__animate regular__box col">
            <div class="box__img"><img alt="Ship" class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/ship.jpg"></div>
            <div class="box__content">
              <div class="inner-container">
                <small>4 Min Read</small>
                <p>The Island at The End of The World</p><small>Read More</small>
              </div>
            </div>
        </a>
    </div>
</section>
<?php  
    endwhile;
?>

<?php get_footer(); ?>