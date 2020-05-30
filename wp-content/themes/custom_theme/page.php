<?php

get_header( );

while(have_posts()){
    the_post(); ?>
    
    <section id="main" >
				<div class="inner">
					<header class="major special">
						<h1><?php the_title()?></h1>
						<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
					</header>
					<a href="#" class="image fit"><img src="https://templated.co/items/demos/introspect/images/pic11.jpg" alt="" /></a>
					<?php the_content( )?>
				</div>
			</section>

<?php }
    get_footer();
?>
