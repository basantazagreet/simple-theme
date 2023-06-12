<?php get_header(); ?>
<div class="container-flex">
  <div class="main-container">
    <div class="submit-post">

      <form method="post" enctype="multipart/form-data">
        <label>Enter Post Title </label><br>
        <input type="text" id="enter-post-title" placeholder="Enter title here" name="title"><br>

        <label>Enter Post content</label><br>
        <textarea id="enter-post-content" name="description">
            </textarea>
        <br>

        <div class="form-group">
          <label for="title">Post Featured Image:</label>
          <input type="file" class="form-control" id="thumbnail" name="thumbnail">
        </div>
        <br>

        <button class="post-post-btn" type="submit">Post</button>
        <button class="cancel-post-btn" type="reset">Cancel</button>
      </form>


    </div>

  </div>
  <div class="sidebar">
    <?php if (is_active_sidebar('sidebar')):
      dynamic_sidebar('sidebar');
    endif;
    ?>

  </div>
</div>

<?php get_footer(); ?>