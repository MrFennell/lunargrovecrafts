<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lunargrovecrafts
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid">
		<div class="site-info row">
            <!-- <div id="footer-navigation" class="col-sm"> -->
            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer-nav',
                                'menu_id'        => 'footer-nav-menu',
                                'depth'           => 2,
                                'container'       => 'div',
                                'container_class' => 'col-sm',
                                'container_id'    => 'footer-navigation',
                                
    
                            ) );
                        ?>
            <!-- </div> -->
			<div id="footer-media" class="col-sm">
                <div id="footer-media-content">
                    <div id="footer-media-content-icons">	
                        <a href="#" ><span class="icon-facebook"></span></a>
                        <a href="#" ><span class="icon-twitter"></span></a>
                        <a href="#" ><span class="icon-instagram"></span></a>
                    </div>
                    <p>©2019 Lunar Grove Crafts </p>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
