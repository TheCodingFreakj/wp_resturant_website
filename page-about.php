<?php

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

<div class="box-content container">
    <div class="box">
        <?php
        $id_image = get_field("image1");
        $image = wp_get_attachment_image_src($id_image, "boxes");

        ?>

        <img style="width: 35rem;" src="<?php echo $image[0]; ?>" />
        <div class="box-content1 box1">
            <?php the_field("desc1");?>
        </div>
    </div>

    <div class="box">
        <?php
        $id_image = get_field("image2");
        $image = wp_get_attachment_image_src($id_image, "boxes");

        ?>
        <div class="box-content1 box2">
            <?php the_field("desc2");?>
        </div>
        <img style="width: 35rem;" src="<?php echo $image[0]; ?>" />

    </div>

    <div class="box">
        <?php
        $id_image = get_field("image3");
        $image = wp_get_attachment_image_src($id_image, "boxes");

        ?>

        <img style="width: 35rem;" src="<?php echo $image[0]; ?>" />
        <div class="box-content1 box3 ">
            <?php the_field("desc3");?>
        </div>
    </div>
</div>
<?php endwhile;else: ?> <?php endif;?>

<?php

get_footer();

?>