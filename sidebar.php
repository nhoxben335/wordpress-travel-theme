<aside class="sidebar">

    <!--  latest post section  -->
    <section class="latest-post">
        <a href="#" class="text-md text-dark">Latest Post</a>
        <div class="flex flex-column">
            <!-- get the template part -->
            <?php get_template_part('templates/temp/sidebar', 'latest-post'); ?>
        </div>
    </section>
    <!--  end latest post  -->

    <!--  search area  -->
    <section class="search-area">
        <div class="search">
            <h3 class="text-md text-dark">Search</h3>
            <!-- <form class="form-group">
                <input type="search" class="input-control mr-sm-2" placeholder="Search">
                <button class="btn btn-submit" type="submit"><i class="fas fa-search"></i></button>
            </form> -->
            <?php 
            // get searchform.php file
            get_search_form(); 
            ?>
        </div>
    </section>
    <!--  end search area  -->

    <!--  popular tags -->
    <section class="popular-tags">
        <h4 class="text-md">Popular Tags</h4>

        <div class="tags flex flex-row flex-wrap">
            <?php 
            // get template file post-tags.php
            get_template_part('templates/temp/post', 'tags');
           ?>

            <!-- <a href="#"><span>camear</span></a>
            <a href="#"><span>bike</span></a>
            <a href="#"><span>craft</span></a>
            <a href="#"><span>photograpy</span></a>
            <a href="#"><span>article</span></a>
            <a href="#"><span>events</span></a>
            <a href="#"><span>driving</span></a>
            <a href="#"><span>wordress</span></a> -->
        </div>
    </section>
    <!--  end popular tags  -->
</aside>