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
            <div class="col-lg-12">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>

                <div class="article">
                    <article class="single-post">
                        <div class="post-title">
                            <a href="<?php the_permalink(); ?>"><span
                                    class="text-lg text-dark"><?php echo the_title(); ?></span></a>
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
            </div>
        </div>

    </div>
</section>
<!--  End Post Area  -->

<?php 
    // get footer.php file
    get_footer();
?>