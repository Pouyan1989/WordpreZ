<footer class="site-footer">

    <div class="footer-widgets clearfix">


        <?php if (is_active_sidebar('footer1')) :?>

             <div class="footer-widgets-area">

             <?php dynamic_Sidebar('footer1');?>

             </div>

        <?php endif;?>

        <?php if (is_active_sidebar('footer2')) :?>

             <div class="footer-widgets-area">

             <?php dynamic_Sidebar('footer2');?>

             </div>

        <?php endif;?>

        <?php if (is_active_sidebar('footer3')) :?>

             <div class="footer-widgets-area">

             <?php dynamic_Sidebar('footer3');?>

             </div>

        <?php endif;?>

        <?php if (is_active_sidebar('footer4')) :?>

             <div class="footer-widgets-area">

             <?php dynamic_Sidebar('footer4');?>

             </div>

        <?php endif;?>



      </div>  


	<nav class="site-nav">
			<?php
			    $args=array('theme_location'=>'footer'); // loads the bottom  menu that we have chosen as footer in admin panel
				?>
			 <?php wp_nav_menu($args);?>
			</nav>
    <p id="copyright">
        <?php bloginfo( 'name');?>- &copy;
        <?php echo date('Y');?>
    </p>
    </div>  
    <?php wp_footer();?>
	</footer>
    </body>

    </html>