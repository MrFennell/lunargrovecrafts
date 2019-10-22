<?php get_header();?>
    <div class="container">
    
            <h1><?php the_field('introduction_title');?></h1>
            
            <p><?php the_field('introduction_body');?></p>

            <div id="pick-of-the-month">
                <h2>Pick of the Month</h2>
                <?php
                   
                    $potm = get_field('pick_of_the_month');
                    if($potm):
                    $post = $potm;
                    setup_postdata( $post ); 
                    ?>
                    <div class="row">
                        <div class="col">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <span>Post Object Custom Field: <?php echo $potm->post_content ?></span>
                        </div>
                        <div class="col">
                            <img style="max-width:500px" src="<?php echo get_the_post_thumbnail_url()  ?>" />
                        </div>
                    </div>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>
            </div>
    </div>

<?php get_footer();?>