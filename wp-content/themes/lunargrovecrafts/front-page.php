<?php get_header();?>
    <div class="container">
        <div class="row">
            <h1><?php the_field('introduction_title');?></h1>
            
            <p><?php the_field('introduction_body');?></p>
        </div>
    </div>

<?php get_footer();?>