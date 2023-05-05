<?php get_header(); ?>
<h2 class="archive_title"><?php echo get_the_archive_title()?></h2>
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
            ?></div><?php
        endif; 
        wp_reset_postdata();
        ?>

    <div class="sidebar">
        <?php if(is_active_sidebar('sidebar')):
            dynamic_sidebar('sidebar');
            
        endif;
            ?>

    </div>
</div>

<?php get_footer(); ?>