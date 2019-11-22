<?php get_header();?>
	 <div class="container-fluid" id="front-page">
        <section id="introduction">
            <?php $introduction_header = get_field('introduction_header');
                if( !empty( $introduction_header ) ): ?>
                    <h2 class="front-page"><?php echo $introduction_header ?></h2>
            <?php endif; ?>
            <?php $introduction_body = get_field('introduction_body');
                if( !empty( $introduction_body ) ): ?>
                    <p><?php the_field('introduction_body');?></p>
            <?php endif; ?>
        </section>
        <?php if(have_rows('promotions')):
            $promotions_link_text = get_field('promotions_link_text');?>
        <section id="promotions">
            <div class="swiper-container">

                <div class="swiper-wrapper">
                    <?php while( have_rows('promotions') ): the_row(); 
                    $promotion_title = get_sub_field('promotion_title');
                    $promotion_description = get_sub_field('promotion_description');
                    $promotion_link = get_sub_field('promotion_link');
                    $promotion_background_image = get_sub_field('promotion_background_image');
                    $size = 'large';
                    ?>
                    
                    <div class="swiper-slide">
                        
                        <?php if( $promotion_title ): ?>
                            <h2 class="promotion-title"><?php echo $promotion_title; ?></h2>
                            
                        <?php endif; ?>
                        <?php if( $promotion_description ): ?>
                            <p class="promotion_description"><?php echo $promotion_description; ?></p>
                        <?php endif; 
                        if( $promotion_background_image ): 
                            echo wp_get_attachment_image( $promotion_background_image, $size );
                        endif;
                        if( $promotions_link_text ): ?>
                            <p class="promotions_link_text"><a href="<?php echo $promotion_link ?>"><?php echo $promotions_link_text; ?></a></p>
                        <?php endif; 
                        
                        ?>
                    
                    </div>

                    <?php endwhile; ?>
                </div>
                
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <div class="swiper-scrollbar"></div>
            </div>
        </section>
        <?php endif;?>
        <section id="front-page-contact" class="container-fluid">
            <?php echo do_shortcode( '[contact-form-7 id="30" title="Get in Touch"]' ); ?>
        </section>
        <section id="front-page-categories">
            <?php 
            $counter = 0;
            if( have_rows('category_fields') ): 
                while( have_rows('category_fields') ): the_row(); 
                    $counter = $counter + 1;
                    if(($counter % 2)==1):?> <!-- layout with pic on left -->
                        <div class="categories">
                            <div class="row">
                                <div class="col-sm">
                                    <?php 
                                        $image = get_sub_field('category_image');
                                        $size = 'large'; 
                                        if( $image ) {?>
                                            <div class="category-image-container">
                                                <?php echo wp_get_attachment_image( $image, $size, false, array( "class" => "category-image" ));?>
                                            </div>
                                            
                                        <?php } ?>
                                    </div>
                                    <div class="col">
                                        <div class="category-copy-container">
                                            <div class="category-copy">
                                                <?php $cat_link = get_sub_field('category_link')?>
                                                <a href="<?php echo get_category_link($cat_link) ?>">
                                                    <h3 class="category-title"><?php echo the_sub_field('category_title');?></h3>
                                                </a>
                                                <p><?php echo get_sub_field('category_copy')?></p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>  
                    <?php endif;
                    if(($counter % 2)==0):	?> <!-- layout with pic on right -->
                        <div class="categories">
                            <div class="row ">
                                <div class="col-sm order-sm-1">
                                    <div class="category-copy-container">
                                        <div class="category-copy">
                                            <?php $cat_link = get_sub_field('category_link')?>
                                            <a href="<?php echo get_category_link($cat_link) ?>">
                                                <h3 class="category-title"><?php echo the_sub_field('category_title');?></h3>
                                            </a>
                                            <p><?php echo get_sub_field('category_copy')?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm order-first order-sm-2">
                                    <?php 
                                        $image = get_sub_field('category_image');
                                        $size = 'large'; 
                                        if( $image ) {?>
                                            <div class="category-image-container">
                                                <?php echo wp_get_attachment_image( $image, $size , false, array( "class" => "category-image" ) );?>
                                            </div>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php endif;
                endwhile; 	
                endif; ?>
        </section>


	 </div>

<?php get_footer();?>