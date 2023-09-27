<?php 
    // get header-color.php file
    get_header('color');
?>


<!--  Categories Section  -->
<section class="categories">
    <div class="container">
        <div class="flex flex-row flex-wrap">
            <?php 
            // get_template_part() template tag
            get_template_part('templates/temp/categories', 'content');
           ?>
        </div>
    </div>
</section>
<!--  End Categories Section  -->

<!--  Post Area  -->
<section class="post-area">
    <div class="wrapper">

        <!--  two columns layout  -->
        <div class="row">
            <div class="col-8-lg col-12-md">
                <!--  one columns layout  -->
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>

                <div class="article">
                    <article class="single-post">
                        <div class="post-title">
                            <a href="<?php the_permalink(); ?>"><span
                                    class="text-lg text-dark"><?php echo the_title(); ?></span></a>
                        </div>
                        <div class="post-thumbnail">
                            <!--   <img src="./assets/images/Feature_image/1-1024x777.jpg" alt="Post image" class="fluid"> -->
                            <?php 
            if(has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post image" class="fluid">
                            <?php endif; ?>
                        </div>
                        <div class="post-content">
                            <p class="para">
                                <?php echo get_the_content(); ?>
                            </p>
                        </div>
                    </article>
                </div>


                <?php endwhile; ?>
                <?php else : ?>
                <?php echo wpautop('Sorry, No posts were found'); ?>
                <?php endif; ?>


                <!--  pagination area  -->
                <div class="row">
                    <div class="col-12-lg text-center">
                        <div class="pagination">
                            <?php 
                                echo paginate_links(array(
                                    'mid_size' => 2,
                                    'prev_text' => __('<span class="fa fa-arrow-left"></span>'),
                                    'next_text' => __('<span class="fa fa-arrow-right"></span>')
                                ));
                            ?>

                            <!--<a href="#"><span>1</span></a>
                            <a href="#"><span>2</span></a>
                            <a href="#"><span>3</span></a>
                            <a href="#"><span class="fa fa-arrow-right"></span></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4-lg col-12-md">
                <!-- get the sidebar template -->
                <?php get_sidebar(); ?>
            </div>
        </div>

    </div>
</section>
<!--  End Post Area  -->

<?php 
    // get footer.php file
    get_footer();
?>