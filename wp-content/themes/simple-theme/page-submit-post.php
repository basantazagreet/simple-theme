<?php get_header(); ?>
<div class="container-flex">
    <div class="main-container">
        <div class="submit-post">

            <label>Enter Post Title </label><br>
            <input type="text" id="enter-title" placeholder="Enter title here"><br>
            
            <label>Enter Post content</label><br>
            <textarea id="enter-content">
            </textarea>
            <br>

            <button class="post-btn">Post</button>
            <button class="cancel-btn">Cancel</button>


        </div>

    </div>
    <div class="sidebar">
        <?php if (is_active_sidebar('sidebar')):
            dynamic_sidebar('sidebar');
        endif;
        ?>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>


document.querySelector('.post-btn').addEventListener('click', createPost);
document.querySelector('.cancel-btn').addEventListener('click', clear);


console.log('Function call ma hola');

function createPost() {
    var ourNewPost = {
      "title": document.getElementById('enter-title').value,
      "content": document.getElementById('enter-content').value,
      "status": "publish"
    };
    console.log(ourNewPost);
    var siteUrl = '<?php echo site_url(); ?>';
    console.log(siteUrl + "/wp-json/wp/v2/posts");
    var nonce = '<?php echo wp_create_nonce('wp_rest')?>';
    console.log(nonce);
    

   $.ajax({
      beforeSend: xhr => {
        xhr.setRequestHeader("X-WP-Nonce", nonce)
      },
      url: siteUrl+"/wp-json/wp/v2/posts",
      type: "POST",
      data: ourNewPost,
      success: response => {
        console.log("Congrats")
        console.log(response)
      },
      error: response => {
        console.log("Sorry")
        console.log(response)
      }
    })
}

function clear(){
    document.getElementById('enter-title').value = "";
    document.getElementById('enter-content').value= "";
}

</script>


<?php get_footer(); ?>