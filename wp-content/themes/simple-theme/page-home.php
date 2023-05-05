<?php get_header(); ?>
<div class="container-flex">
    <div class="main-container">
        <?php if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <?php the_content();?>
            <?php endwhile;
            ?>
        </div>
        <?php
        endif;
        wp_reset_postdata();
        ?>

    <div class="sidebar">
        <?php if (is_active_sidebar('sidebar')):
            dynamic_sidebar('sidebar');
        endif;
        ?>

    </div>
</div>

<?php get_footer(); ?>