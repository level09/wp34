<?php get_header(); ?>
			
			<!--BEGIN #primary .hfeed-->
			<div id="primary" class="hfeed">
				
                <!--BEGIN #masonry-->
            	<div id="masonry">
                
                	<?php 
					
					$empty = 'data-empty="'.__('No more posts available.', 'framework').'" ';
					
					$src = 'data-src="'.get_template_directory_uri().'/includes/get-posts.php" ';
					
					$offset = 'data-offset="'.get_option('posts_per_page').'" ';
					
                    $post_count = $wp_query->found_posts;

					$post_count = $post_count - get_option('posts_per_page');
					
					if($post_count <= 0) 
						$post_count = 0;
					
					?>                 
                    
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php
                    
                        // The following determines what the post format is and shows the correct file accordingly
                        $format = get_post_format();
                        get_template_part( 'includes/'.$format );
                        
                        if($format == '')
                        get_template_part( 'includes/standard' );
                        
                    ?>
                    <?php endwhile; endif; ?>

                <!--END #masonry-->
                </div>
                
                <!--BEGIN .navigation .page-navigation -->
                <div id="index-navigation" class="hidden navigation page-navigation">
                    <div class="nav-next"><?php next_posts_link(__('Next Posts &rarr;', 'framework')) ?></div>
                    <div class="nav-previous"><?php previous_posts_link(__('&larr; Previous Posts', 'framework')) ?></div>
                <!--END .navigation .page-navigation -->
                </div>
                
                <div class="ready" id="new-posts"></div>

                <!--BEGIN #load-more-link-->
                <div id="load-more-link">
                
                     <a	<?php echo $empty; echo $src; echo $offset; echo 'data-author="' . $author . '"'; ?>href="#">
                     
							<?php _e('Load More...', 'framework'); ?>
                            <span>
                                <span data-src="<?php echo get_template_directory_uri(); ?>/images/<?php if(get_option('tz_alt_stylesheet') == 'dark.css'):?>dark<?php else: ?>light<?php endif; ?>/ajax-loader.gif" id="post-count">
                                    <?php echo $post_count; ?>
                                </span>
                                <span data-text="<?php _e('Remaining', 'framework'); ?>" id="remaining"><?php _e('Remaining', 'framework'); ?></span>
                            </span>
                    </a>
                <!--END #load-more-link-->
                </div>

			<!--END #primary .hfeed-->
			</div>

<?php get_footer(); ?>