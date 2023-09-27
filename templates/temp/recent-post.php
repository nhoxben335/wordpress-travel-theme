<?php 

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'order' => 'DESC',
    'posts_per_page' => 6,
    'date_query' => array(
        'after' => '-30 days',
        'column' => 'post_date'
    ),
    'paged' => $paged
);

$loop = new WP_Query($args);


?>

<?php $count = 1; ?>
<?php if($loop->have_posts()) : ?>
<?php while($loop->have_posts()) : $loop->the_post() ?>

<?php if($count % 2) : ?>
<div class="column">
    <div class="post-image">
        <?php if(has_post_thumbnail()) : ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="footer image" class="fluid">
        <?php endif; ?>
    </div>
    <?php else : ?>
    <div class="post-image">
        <?php if(has_post_thumbnail()) : ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="footer image" class="fluid">
        <?php endif; ?>
    </div>
</div>

<?php endif; ?>
<?php $count++; ?>

<?php endwhile; ?>
<?php endif; ?>


<?php 
    wp_reset_query();
    wp_reset_postdata();
?>


<!-- <div class="column">
    <div class="post-image">
        <img src="./assets/images/Feature_image/1-1024x777.jpg" alt="footer image" class="fluid">
    </div>
    <div class="post-image">
        <img src="./assets/images/Feature_image/2-1024x817.jpg" alt="footer image" class="fluid">
    </div>
</div>
<div class="column">
    <div class="post-image">
        <img src="./assets/images/Feature_image/7-660x660.jpg" alt="footer image" class="fluid">
    </div>
    <div class="post-image">
        <img src="./assets/images/Feature_image/3-1024x721.jpg" alt="footer image" class="fluid">
    </div>
</div>
<div class="column">
    <div class="post-image">
        <img src="./assets/images/Feature_image/6-1024x758.jpg" alt="footer image" class="fluid">
    </div>
    <div class="post-image">
        <img src="./assets/images/Feature_image/8-790x1024.jpg" alt="footer image" class="fluid">
    </div>
</div> -->