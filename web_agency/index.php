<?php get_header(); ?>

    <!-- do section -->

    <section class="do_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>My Blog</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna
          </p>
        </div>
        <!-- Main Content -->
        

        <div class="row">
        <?php 
        $query = new WP_Query( array(
          "post_type"=> "post",
        ));
        if($query->have_posts()):
          while ($query->have_posts()):
            $query->the_post(); 
        ?>
        
          <div class="col-lg-4">
            <?php the_post_thumbnail(); ?>
              <div class="card" style="width: 18rem">
              <!-- <img class="card-img-top" src="<?php // echo get_template_directory_uri(); ?>/images/1.jpg" alt="Card image cap" /> -->
              <div class="card-body">
                <h5 class="card-title">Myth of Israeli invincibility </h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <?php endwhile;
           endif;?>
        </div>

          



            <!-- 
          <div class="col-lg-4">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="<?php //echo get_template_directory_uri(); ?>/images/2.jpg" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Is urbanisation in Bangladesh doomed?</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="<?php // echo get_template_directory_uri(); ?>/images/3.jpg" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">How stable is the global financial system really?</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div> -->
    
    </div>
  </section>

    <!-- end do section -->

    <!-- info section -->
    <?php get_footer();?>
