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
                <?php echo wpautop('Sorry, Page not Found'); ?>


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