<footer class="site-footer">
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