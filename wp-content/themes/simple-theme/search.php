<?php get_header(); ?>
<h2 class="archive_title">
    Search Results:
</h2>
<div class="container-flex">

    <div class="main-container">

        <?php if (have_posts()) {
            while (have_posts()):
                the_post();
                ?>
                <?php get_template_part('template-parts/content',get_post_format())?>
            <?php endwhile;
            ?>

            <?php
        } else { ?>
            <div class="no-posts-found">
                <p>Sorry, No Posts Found</p>
            </div>
            <?php

        }
        wp_reset_postdata();
        ?>
    </div>
    <div class="sidebar">
        <div class="sidebar-content">
            <h3>Sidebar Header</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga deleniti consectetur quod quaerat repellat
                magnam modi iste, in error ducimus mollitia, nam inventore, neque voluptatem maxime sapiente commodi
                laborum necessitatibus!q</p>
            <a class="btn">Read More</a>
        </div>

    </div>
</div>

<?php get_footer(); ?>