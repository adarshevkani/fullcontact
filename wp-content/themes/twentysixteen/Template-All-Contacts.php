<?php
/**
Template name: All USers
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h2>All Contacts</h2>

			 <?php
                $custom_args = array('post_type' => 'post',
                    'posts_per_page' => '-1',
                    'orderby' => 'id',
                    'order' => 'ASC'
                );
                $custom_query = get_posts($custom_args);
                ?>
                <ul style="padding-top: 50px;">
                <?php
                foreach ($custom_query as $value) {
                ?>
                   <li>
						<a href="<?php echo get_permalink($value->ID); ?>"><?php echo the_field("full_name",$value->ID); ?></a>		
					</li>
                <?php
                }
                ?>
            	</ul>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
