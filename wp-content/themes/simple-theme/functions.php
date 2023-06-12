<?php


function bzs_theme_enqueue_styles()
{
    wp_enqueue_style('my-theme-style', get_template_directory_uri() . '/css/index.css');
    wp_enqueue_script('my-theme-script', get_template_directory_uri() . '/src/index.js');
    // wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/src/custom.js', array('jquery'), '1.0', true);


    //URL sent to JS from php
    wp_localize_script(
        'main-university-js',
        'senddatatojs',
        array(
            'root_url' => get_site_url(),
            'nonce' => wp_create_nonce('wp_rest')
        )
    );
}
add_action('wp_enqueue_scripts', 'bzs_theme_enqueue_styles');


function bzs_register_nav()
{

    register_nav_menus(
        array(
            'primary' => __("Primary Menu"),
            'footer1' => __("Footer Menu"),
            'footer2' => __("Footer Menu 2"),
        )
    );




    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('init', "bzs_register_nav");

function bzs_theme_supports()
{
    add_theme_support('post-thumbnails');
    add_theme_support('page-templates');

    add_image_size('Landscape', 400, 260, true);

}


add_action('after_setup_theme', 'bzs_theme_supports');


function bzs_widgets_init($id)
{
    register_sidebar(
        array(
            'name' => "Sidebar",
            'id' => 'sidebar',
            'before_widget' => '<div class="sidebar-content">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
}

add_action('widgets_init', 'bzs_widgets_init');




///How to submit custom post type in wordpress from the Front-End

if (isset($_POST['title'])) {

    //echo $_POST['title']; // print title variable value

    // create post object

    $my_post = array(
        'post_title' => $_POST['title'],
        'post_content' => $_POST['description'],
        'post_status' => 'publish', // and more status like publish,draft,private 

    );

    $post_id = wp_insert_post($my_post);

    // $updated_post_id = wp_update_post($post_data);


    if (!function_exists('wp_generate_attachment_metadata')) {
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php');
    }
    if ($_FILES) {
        foreach ($_FILES as $file => $array) {
            if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
                return "upload error : " . $_FILES[$file]['error'];
            }

            //The media_handle_upload() function is a WordPress function that handles the upload process for media files. 
            //In this case, 'thumbnail' is passed as the first parameter, which represents the name or identifier of the uploaded file.
            // $post_id is passed as the second parameter, specifying the post ID to which the media will be attached.

            $attach_id = media_handle_upload($file, $post_id);
        }
    }

    //The update_post_meta() function is used to update the post metadata. 
    //In this case, it updates the metadata of the post specified by $post_id and sets the '_thumbnail_id' meta key to the $attach_id value. 
    //This association between the post and the attachment ID sets the uploaded image as the post's featured thumbnail.
    if ($attach_id > 0) {
        //and if you want to set that image as Post  then use:
        update_post_meta($post_id, '_thumbnail_id', $attach_id);
    }


    echo 'New Post Saved !';


    die; // stop script after form submit
}