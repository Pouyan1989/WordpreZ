<!--put the loop code-->
<?php get_header();       /* loads the header here  */
 
 if (have_posts()):   /*it says if we have posts .do this  */

 	while(have_posts()):the_post();


 		if (get_post_format() == false) {
		get_template_part('content', 'single');
	} else {
		get_template_part('content', get_post_format());
	}

	 endwhile;

else:

		echo'<p>no content found <p>';     /* and if we do not have posts , print this one   */

endif;

 get_footer(); ?>
 
