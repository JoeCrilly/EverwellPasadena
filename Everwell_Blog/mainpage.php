<?php /* Template Name: mainPage */ ?>
<?php get_header(); ?>

<div id="maincontent">
	<!-- print all posts-->
	<?php
	if(have_posts()):
		while( have_posts()): the_post(); ?>
	<!-- featured image div-->
	<div id="post_featured" style="position: static; background-image:url('<?php the_post_thumbnail_url(); ?>'); background-repeat: no-repeat; background-size: contain;padding:3%;padding-top: 13%; padding-bottom:13%;width:100%;height:auto; margin: 0 auto;">
		<a class="blog_excerpt_title" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
		<div class="blog_excerpt_content"><?php the_content(); ?></div>
	</div>
	
	<?php
	endwhile;
	endif;
	if(!have_posts()):
		?>
	<div class="blog_excerpt_content"> You've made no posts!</div>
	<?php
	endif;
	?>

</div>
</div>
<?php get_footer(); ?>