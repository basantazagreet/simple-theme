<?php
if (is_search()): ?>

    <div class="post-container aside">
        <h3>
            <?php the_title(); ?>
        </h3>


    </div>




    <?php
elseif (is_archive()): ?>
    <div class="post-container aside">
        <h3>
            <?php the_title(); ?>
            <?php the_content(); ?>
        </h3>


    </div>


    <?php
else:
    ?>

    <div class="post-container aside">
        <h3>
            <?php the_title(); ?>
        </h3>
        <?php the_content(); ?>

    </div>

<?php endif ?>