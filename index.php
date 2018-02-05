<!--put the loop code-->
<?php get_header();       /* loads the header here  */
 
 if (have_posts()):   /*it says if we have posts .do this  */

 	while(have_posts()):the_post();?>  

    <article class="post">
    	<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	    <?php the_content();?>
	</article>
 	

	<?php endwhile;

else:

		echo'<p>no content found <p>';     /* and if we do not have posts , print this one   */

endif;

 get_footer(); ?>
 
