<!--put the loop code-->

<?php get_header();       /* loads the header here  */
 
 	if (have_posts()):   /*it says if we have posts .do this  */

 		while(have_posts()):the_post();

  			get_template_part('content');

	 	endwhile;

	else:

		echo'<p>no content found <p>';     /* and if we do not have posts , print this one   */

	endif;

 get_footer(); ?>
 
