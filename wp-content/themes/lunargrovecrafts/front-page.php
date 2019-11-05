<?php get_header();?>
	 <div class="container">
                <section >
                    <?php $introduction_header = get_field('introduction_header');
                        if( !empty( $introduction_header ) ): ?>
                            <h2 class="front-page"><?php echo $introduction_header ?></h2>
                    <?php endif; ?>
                    <?php $introduction_body = get_field('introduction_body');
                        if( !empty( $introduction_body ) ): ?>
                            <p><?php the_field('introduction_body');?></p>
                    <?php endif; ?>
                </section>
				<section id="pick-of-the-month">

					 <h2 class="front-page"><?php the_field('pick_of_the_month_title');?></h2>
					 <?php

						  $potm = get_field('pick_of_the_month');
						  $ID =  $potm->ID;
						  $product = wc_get_product($ID);

						  if($potm):
								$post = $potm;
								setup_postdata( $post );
						  ?>

						  <div class="row">
								<div class="col">
									 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                     <p><?php echo $potm->post_content ?></p>
                                     <p>Starting at $<?php echo number_format( $product->get_price() ,2);?></p>
								</div>

								<div class="col">
									 <img id="pick-of-the-month-img" src="<?php echo get_the_post_thumbnail_url()  ?>" />
								</div>
						  </div>
						  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						  <?php endif; ?>
				</section>

				<section id="front-page-categories">
					<?php 
					$counter = 0;
					if( have_rows('category_fields') ): 
						while( have_rows('category_fields') ): the_row(); 
							$counter = $counter + 1;
							if(($counter % 2)==1):?> <!-- layout with pic on left -->
								<div class="row">
									<div class="col">
											<?php 
												$image = get_sub_field('category_image');
												$size = 'medium'; 
												if( $image ) {
														echo wp_get_attachment_image( $image, $size, false, array( "class" => "category-image" ));
												}?>
										</div>
										<div class="col">
											<?php $cat_link = get_sub_field('category_link')?>
											<a href="<?php echo get_category_link($cat_link) ?>">
												<h3 class="category-title"><?php echo the_sub_field('category_title');?></h3>
											</a>
											<p class="category-copy"><?php echo get_sub_field('category_copy')?></p>
									</div>
								</div>
							<?php endif;
							if(($counter % 2)==0):	?> <!-- layout with pic on right -->
								<div class="row">
									<div class="col">
										<?php $cat_link = get_sub_field('category_link')?>
										<a href="<?php echo get_category_link($cat_link) ?>">
											<h3 class="category-title"><?php echo the_sub_field('category_title');?></h3>
										</a>
										<p class="category-copy"><?php echo get_sub_field('category_copy')?></p>
									</div>
									<div class="col">
										<?php 
											$image = get_sub_field('category_image');
											$size = 'medium'; 
											if( $image ) {
													echo wp_get_attachment_image( $image, $size , false, array( "class" => "category-image" ) );
											}?>
									</div>
								</div>
							<?php endif;
						endwhile; 	
					 endif; ?>
				</section>


	 </div>

<?php get_footer();?>