<!--we beging with copying the content of the index.php-->
<?php get_header();     

 if (have_posts()):   /*it says if we have posts .do this  */
 	?>


 	<h2><?php 

 	if (is_category()){

 		single_cat_title();

 	}elseif (is_tag()){

		single_tag_title();

 	}elseif (is_author()){
 
 		the_post();
 		echo 'auhtor archives:'.get_the_author();
 		rewind_posts();

 	}elseif (is_day()){

 		echo 'daily archives:'.get_the_date();

 	}elseif (is_month()){

 		echo 'monthly archives:'.get_the_date('F Y');

 	}elseif (is_year()){

 		echo 'yearly:'.get_the_date('Y');

 	}else {

 		echo "Archives";
 	}


 	?></h2>

 	<?php
 	while(have_posts()):the_post();

    
  		get_template_part('content');

	endwhile;

else:

		echo'<p>no content found <p>';     /* and if we do not have posts , print this one   */

endif;

 get_footer(); ?>
 
