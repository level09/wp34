    
            <!-- END #content -->
            </div>
            
        <!-- END #container -->
        </div> 
        
        <!-- BEGIN #footer -->
        <div id="footer" class="clearfix">
        
            <p class="copyright">&copy; Copyright <?php echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> &middot; <?php _e('Powered by', 'framework') ?> <a href="http://wordpress.org/">WordPress</a> <br /> <a href="http://www.premiumpixels.com/gridlocked">Gridlocked</a> by <a href="http://www.premiumpixels.com">Orman Clark</a></p>
            
            <p class="credit"><?php echo stripslashes(get_option('tz_footer_copy')); ?></p>

        
        <!-- END #footer -->
        </div>
		
	<!-- Theme Hook -->
	<?php wp_footer(); ?>
			
<!--END body-->
</body>
<!--END html-->
</html>