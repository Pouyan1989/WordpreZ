<footer class="site-footer">
	<nav class="site-nav">
			<?php
			    $args=array('theme_location'=>'footer');
				?>
			 <?php wp_nav_menu($args);?>
			</nav>
    <p id="copyright">
        <?php bloginfo( 'name');?>- &copy;
        <?php echo date( 'Y');?>
    </p>
    </div>
    <?php wp_footer();?>
	</footer>
    </body>

    </html>