<?php get_header();?>
<main class="main">
    <div class="main_tittle">
        <p><?php the_field('main_tittle')?></p>
    </div>
    <div class="main_text">
        <p><?php the_field('main_text')?></p>
    </div>
    <div class="main_img"><img src="<?php bloginfo('template_url');?>/assets/img/main_img.png" alt=""></div>

    <div class="container">
        <div class="project">
            <div class="project_tittle">
                <?php the_field('project_tittle')?>
            </div>
            <?php
            $featured_posts = get_field('project_item');
            if( $featured_posts ): ?>
            <ul>
                <?php foreach( $featured_posts as $post ): 

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                <li class="project_item">
                  
                    
                    
                       <div class="project_name"><?php the_field('project_name')?></div>
                       <div class="projejct_size"><?php the_field('projejct_size')?></div>
                       <div class="project_area"><?php the_field('project_area')?></div>
                       <div class="project_price"><?php the_field('project_price')?></div>
                       <div class="project_images">
                           <div class="project_images-item">
                              
                               <img src="<?php the_field('project_images-item-1')?>" alt="">
                           </div>
                           <div class="project_images-item">
                               <img src="<?php the_field('project_images-item-2')?>" alt="">
                           </div>
                       </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="download">

        <img src="<?php bloginfo('template_url');?>/assets/img/download_img.png" alt="">
        <a href="<?php the_field('download_link')?>" download><?php the_field('download_tittle')?></a>
    </div>
    <div class="container">
        <div class="gallery">
            <div class="gallery_tittle">
                <?php the_field('gallery_tittle')?>
            </div>
            <div class="gallery_text">
                <?php the_field('gallery_text')?>
            </div>
            <div id="gallery_inner">
                <?php the_field('gallery_inner')?>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>
