<?php
/**
 *Template Name: Our menu
 */

get_header();
?>

<?php if (have_posts()): while (have_posts()): the_post();?>
<div class="hero" style=" background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="hero-content">
        <div class="hero-text">
            <h1><?php the_title();?></h1>
        </div>
    </div>
</div>


<div class="main-content container">
    <main class="text-center content-text">
        <?php the_content();?>
    </main>
</div>

<div class="menu_image_container">
    <?php
        $id_image_menu = get_field("image");
        $image_menu = wp_get_attachment_image_src($id_image_menu, "boxes");

        ?>
    <div class="zoom">
        <img class="menu_image_container1" src=" <?php echo $image_menu[0]; ?>" />

    </div>
</div>


<?php endwhile;else: ?> <?php endif;?>

<div class="main-content container2">
    <h3 class="pizza_header">Pizzas</h3>
    <div class="main-content_inner ">

        <?php

$args = array(
    'post_type' => 'specialties',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'orderby' => 'title',
    'order' => 'ASC',
    'category_name' => 'pizzas',
);

$loop = new WP_Query($args);
while ($loop->have_posts()): $loop->the_post();?>

        <div class="main-content2-4">

            <?php the_post_thumbnail("specialities");?>
            <h4 class="main-header"><?php the_title();?> <span class="span-header"><?php the_field('price');?></span>
            </h4>
            <?php the_content();?>

            <!-- </a> -->
        </div>

        <?php
endwhile;

wp_reset_postdata();

?>


    </div>

    <hr />
    <hr />
    <h3 class="pizza_header">Others</h3>
    <div class="main-content_inner ">

        <?php

$args = array(
    'post_type' => 'specialties',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'orderby' => 'title',
    'order' => 'ASC',
    'category_name' => 'others',
);

$loop = new WP_Query($args);
while ($loop->have_posts()): $loop->the_post();?>

        <div class="main-content2-4">

            <?php the_post_thumbnail("specialities");?>
            <h4 class="main-header"><?php the_title();?> <span class="span-header"><?php the_field('price');?></span>
            </h4>
            <?php the_content();?>

            <!-- </a> -->
        </div>

        <?php
endwhile;

wp_reset_postdata();

?>


    </div>

</div>
<div class="footer">

    <?php

get_footer();

?>

</div>