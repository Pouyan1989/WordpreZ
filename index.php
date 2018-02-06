<!--put the loop code-->

<?php get_header(); ?> 

  <div class="site-content clearfix">
  	

  		<div class="main-column">


<?php
 
 	if (have_posts()):   /*it says if we have posts .do this  */

 		while(have_posts()):the_post();

  			get_template_part('content',get_post_format());

	 	endwhile;

	else:

		echo'<p>no content found <p>';     /* and if we do not have posts , print this one   */

	endif; ?>


  </div>

  <?php get_sidebar();?>
  




  </div>


  



 <?php get_footer(); ?>
 
