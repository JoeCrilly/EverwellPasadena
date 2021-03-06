<?php get_header(); ?>

<div id="content">
    <!-- print all posts-->
    <?php
    if(have_posts()) {
      while (have_posts()) : the_post(); ?>
      <div id="date" align="right" style="margin-right: 12%;">
        <?php the_date('F j, Y', '<a id="p_date" style="color:black;font-weight:bold;">', '</a>'); ?> </div>
        <hr class="posthr">
        <br>
        <a class="blog_excerpt_title"><?php the_title(); ?> </a> <br> <br>
        <div id="post_featured" style="position: static; background-image:url('<?php the_post_thumbnail_url(); ?>'); background-repeat: no-repeat; background-size: contain;padding:3%;padding-top: 13%; padding-bottom:13%;width:100%;height:auto; margin: 0 auto; position:relative;left:1%;">
        </div>
        <div class="blog_excerpt_content"><?php the_content(); ?></div>
    
    <?php
    endwhile;
} ?>
<?php
if(!have_posts()):
    ?>
<div class="blog_excerpt_content"> You've made no posts! </div>
<?php
endif;
?>
<div class="blognav"> <h2><center><?php previous_post_link(); ?></center></h2></div><br>
</div>

</div>
<?php get_footer(); ?>