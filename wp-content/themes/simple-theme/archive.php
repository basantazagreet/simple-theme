<?php get_header() ?>

<div class="ba-container">
    <div class="ba-banner">
        <h1 class="ba-banner-h1">Blog</h1>
    </div>


    <div class="ba-second-row">
        <div class="ba-filter">
            <label>Filter by Topics</label><br>
            <select id="ba-filter-posts">
            <option value="option1">All posts</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
            </select>
        </div>
        <div class="ba-search">
            <label>Search blog posts</label><br>
            <div class="ba-search-box">
                <input type="text" placeholder="Search...">
                <!-- <button type="submit"><i class="fa fa-search"></i></button> -->
                <button type="submit"><span class="dashicons dashicons-search"></span></button>

            </div>


        </div>

    </div>
</div>

<?php get_footer() ?>