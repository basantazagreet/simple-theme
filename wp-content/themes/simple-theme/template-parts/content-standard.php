<?php
if (is_search()): ?>

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




    <?php
elseif (is_archive()): ?>
    <div class="post-container">
        <h2>
            <?php the_title(); ?>
        </h2>
        <div class="post-meta">Posted at
            <a href="">
                <?php the_date('M d, Y '); ?>
            </a> by
            <a href="<?php get_author_posts_url(get_the_author_meta('ID')) ?>"> <?php the_author(); ?></a>
            Posted in:
            <?php echo get_the_category_list(', '); ?>
        </div>
        <?php if (has_post_thumbnail()):
            the_post_thumbnail('Landscape');
        endif; ?>
        <p>
            <?php echo wp_trim_words(get_the_content(), 150) ?>
        </p>



        <a class="btn" href="<?php the_permalink(); ?>">Read More</a>
    </div>


    <?php
else:
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
        <?php if (has_post_thumbnail()):
            the_post_thumbnail('Landscape');
        endif; ?>
        <p>
            <?php echo the_content(); ?>
        </p>


    </div>

<?php endif ?>