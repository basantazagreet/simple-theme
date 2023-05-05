
<?php
/*
Template Name: Company Template
*/
 ?>


<?php get_header();?>

<div class="container-flex">
    <div class="main-container aside">
        <h3>Call Us: 9779869047383</h3>
        <?php if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <h2><?php the_title();?></h2>
                <p><?php the_content();?></p>
            <?php endwhile;
            ?><?php
        endif; 
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





<?php get_footer();?>