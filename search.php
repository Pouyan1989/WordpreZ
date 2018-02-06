<!--if your wordpress does nt find th search.php file to output the results it will use the index.php page to output the result.what we are gonna do is to copy everything from the index.php file and we will modify and customize it according to our needs -->


<!--put the loop code-->
<?php get_header();       /* loads the header here  */
 
 if (have_posts()):   /*it says if we have posts .do this  */
 ?>

 <h2>Search results for :<?php the_search_query();?></h2>


 	<?php
 	while(have_posts()):the_post();

  		
  		get_template_part('content',get_post_format());



	endwhile;

else:

		echo'<p>no content found <p>';     /* and if we do not have posts , print this one   */

endif;

 get_footer(); ?>
 
?>
