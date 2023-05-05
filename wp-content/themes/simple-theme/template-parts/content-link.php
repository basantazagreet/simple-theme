<?php
if (is_search()): ?>

    <div class="post-container link">
            <h3>
                <a href="<?php the_content()?>"><?php the_title(); ?></a>
            </h3>
            

    </div>




    <?php
elseif (is_archive()): ?>
    <div class="post-container link">
     <h3>
                <a href="<?php the_content()?>"><?php the_title(); ?></a>
            </h3>

    </div>
    <?php
else:
    ?>
    <div class="post-container link">

<h3>
                <a href="<?php the_content()?>"><?php the_title(); ?></a>
            </h3>

</div>
<?php endif ?>