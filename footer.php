</main>
<!--  end main site area  -->

<!--  footer area  -->
<footer class="footer-area">
    <div class="row">
        <div class="col-4-lg col-4-md col-12-sm">

            <!-- about me  -->
            <section class="about-me">
                <div class="site-logo">
                    <!-- <img src="./assets/images/logo.png" alt="logo" class=""> -->
                    <?php 
                    if (function_exists('the_custom_logo')){
                        the_custom_logo();
                    }else{
                        bloginfo('name');
                    }
                  ?>
                </div>
                <p class="para">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad vitae perspiciatis sunt, sequi culpa
                    et sapiente distinctio voluptates. Sunt, maiores.
                </p>
                <div class="social-media">
                    <a href="#" class="text-primary"><span class="fab fa-facebook-f"></span></a>
                    <a href="#" class="text-primary"><span class="fab fa-instagram"></span></a>
                    <a href="#" class="text-primary"><span class="fab fa-twitter"></span></a>
                    <a href="#" class="text-primary"><span class="fab fa-youtube"></span></a>

                </div>
            </section>
        </div>
        <div class="col-4-lg col-4-md col-12-sm">

            <!--  recent post area  -->
            <section class="recent-post">
                <a href="#" class="text-md text-light">Recent Post</a>
                <div class="posts flex flex-row flex-wrap">
                    <?php 
                        // get template file recent-post.php
                        get_template_part('templates/temp/recent', 'post');
                    ?>
                </div>
            </section>
        </div>
        <div class="col-4-lg col-4-md col-12-sm">

            <!--  popular tags  -->
            <section class="popular-tags">
                <a href="#" class="text-md text-light">Popular Tags</a>

                <div class="tags flex flex-row flex-wrap">
                    <?php 
            // get template file post-tags.php
            get_template_part('templates/temp/post', 'tags');
           ?>
                    <!--
                    <a href="#"><span>camear</span></a>
                    <a href="#"><span>bike</span></a>
                    <a href="#"><span>craft</span></a>
                    <a href="#"><span>photograpy</span></a>
                    <a href="#"><span>article</span></a>
                    <a href="#"><span>events</span></a>
                    <a href="#"><span>driving</span></a>
                    <a href="#"><span>wordress</span></a>
                    -->

                </div>
            </section>
        </div>
    </div>

    <div class="rights text-center text-gray">
        Wordpress Theme By <a href="<?php echo home_url('/'); ?>" class="text-primary"> Nhan Vo </a> &copy;
        <?php the_date('Y'); ?>
    </div>

</footer>
<!--  End footer area  -->

</body>

</html>