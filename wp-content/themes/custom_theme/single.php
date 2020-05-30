<?php
while(have_posts()){
    the_post(); ?>
        <article class="alt">
          <div class="content">
            <header>
              <h3><?php the_title(); ?></h3>
            </header>
            <div class="image fit">
              <img src="images/pic02.jpg" alt="" />
            </div>
            <p>
            <?php the_content(); ?>
            </p>
          </div>
        </article>
     
<?php }

?>
