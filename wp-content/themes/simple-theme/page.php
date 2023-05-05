<?php get_header(); ?>

<div class="container-flex">
    <div class="main-container aside">
        <?php if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <h2>
                    <?php the_title(); ?>
                </h2>
                <p>
                    <?php the_content(); ?>
                </p>
            <?php endwhile;
            ?>
            <?php
        endif;
        wp_reset_postdata();
        ?>
    </div>

    <div class="sidebar">
        <div class="sidebar-content">
            <!-- For sidenav -->



            <?php
            $theParent = wp_get_post_parent_id(get_the_ID());
            //Check if it is a parent page
            $testArray = get_pages(
                array(
                    'child_of' => get_the_ID()
                )
            );

            //If it is parent page or child page, show sidenav
            if ($theParent or $testArray) { ?>
                <div class="page-links">
                    <!-- Parent page shown in header of sidenav -->
                    <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
                    <ul class="min-list">
                        <?php
                        // Children of parent page or children of current page displayed
                        if ($theParent) {
                            $findChildrenOf = $theParent;
                        } else {
                            $findChildrenOf = get_the_ID();
                        }

                        wp_list_pages(
                            array(
                                'title_li' => NULL,
                                'child_of' => $findChildrenOf,
                                'sort_column' => 'menu_order'
                            )
                        );
                        ?>
                    </ul>
                </div>
            <?php } else { ?>
                <div class="page-links">
                    <h2 class="page-links__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>


            <?php } ?>

        </div>
    </div>

</div>
</div>





<?php get_footer(); ?>