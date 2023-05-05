<?php
if (is_search()): ?>

    <div class="post-container aside">
            <h3>
                <?php the_title(); ?>
            </h3>
            Posted on
            <?php the_date('M d, Y ') ?> by
            <?php the_author(); ?>
            in:
            <?php echo get_the_category_list(', '); ?>

            <p>
                <?php the_content(); ?>
            <p>

    </div>




    <?php
elseif (is_archive()): ?>
    <div class="post-container aside">
        <h3>
            <?php the_title(); ?>
        </h3>
        Posted on
        <?php the_date('M d, Y ') ?> by
        <?php the_author(); ?>
        in:
        <?php echo get_the_category_list(', '); ?>

        <p>
            <?php the_content(); ?>
        <p>

    </div>


    <?php
else:
    ?>

    <div class="post-container aside">
        <h3>
            <?php the_title(); ?>
        </h3>
        Posted on
        <?php the_date('M d, Y ') ?> by
        <?php the_author(); ?>
        in:
        <?php echo get_the_category_list(', '); ?>

        <p>
            <?php the_content(); ?>
        <p>

    </div>

<?php endif ?>