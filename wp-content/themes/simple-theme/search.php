<?php get_header(); ?>
<h2 class="archive_title">
    <?php echo get_the_archive_title() ?>
</h2>
<div class="container-flex">

    <div class="main-container">

        <?php if (have_posts()) {
            while (have_posts()):
                the_post();
                ?>
                <div class="post-container">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <div class="post-meta">Posted at
                        <?php the_date('M d, Y ') ?> by
                        <a href="<?php get_author_posts_url(get_the_author_meta('ID')) ?>"> <?php the_author() ?></a>
                        Posted in:
                        <?php echo get_the_category_list(', '); ?>
                    </div>




                    <a class="btn" href="<?php the_permalink(); ?>">Read More</a>
                </div>
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