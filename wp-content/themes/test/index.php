<?php /*Template Name: Blog*/
get_header() ?>

  <section class="who_section ">
    <div class="container">
      <?php  
        $wpnew=array(
          'post_type'=>'Product',
          // 'post_status'=>'publish' var_dump($newsquery->post->post_name);
          'posts_per_page'=> -1
        );

        $newsquery=new Wp_Query($wpnew);
        while($newsquery->have_posts()) {
          $newsquery->the_post();
      ?> 

        <div class="row">
          <div class="col-md-5">
            <div class="img-box">
              <img src="<?php bloginfo('template_url') ?>/images/who-img.jpg" alt="">
            </div>
          </div>
          <div class="col-md-7">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  <?php the_title() ?>
                </h2>
              </div>
              <?php the_content() ?>
              
              <div>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>

      <?php } ?>
    </div>
  </section>

<?php get_footer() ?>

