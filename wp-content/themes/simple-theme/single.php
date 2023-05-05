<?php get_header();?>

<div class="container-flex">
    <div class="main-container">
        <?php if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <?php if(get_post_format()):?>
                 <?php get_template_part('template-parts/content',get_post_format());?>
                 <?php else: get_template_part('template-parts/content','standard');?>
                    <?php endif;?>
                 
            <?php endwhile;
            ?><?php
        endif; 
        wp_reset_postdata();
        ?>
        <?php comments_template();?>
        </div>

    <div class="sidebar">
        <?php if(is_active_sidebar('sidebar')):
            dynamic_sidebar('sidebar');
            
        endif;?>

    </div>
</div>




<?php get_footer();?>