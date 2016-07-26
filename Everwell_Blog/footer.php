<footer>
	<div id="footer_content">
	<br>
		<div class="archive_item">
			<?php $args = array(
				'type'            => 'monthly',
				'limit'           => '',
				'format'          => 'custom', 
				'before'          => '<center>',
				'after'           => '<br><br></center>',
				'show_post_count' => false,
				'echo'            => 1,
				'order'           => 'DESC',
				'post_type'     => 'post'
				);
				wp_get_archives( $args ); ?>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>