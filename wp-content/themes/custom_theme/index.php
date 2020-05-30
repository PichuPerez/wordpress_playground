<?php 
    get_header();
    while(have_posts()){
        the_post(); ?>
            <section id="one">
                <div class="inner">
                    <header>
                        <h2><?php the_title() ?></h2>
                    </header>
                    <p>
                        <?php the_excerpt() ?>
                    </p>
                    <ul class="actions">
                    <li><a href="<?php the_permalink()?>" class="button alt">Read More</a></li>
                    </ul>
                </div>
            </section>     
<?php }
    get_footer();
?>