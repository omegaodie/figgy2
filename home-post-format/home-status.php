<li class="item format">
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php if ( has_post_thumbnail()): the_post_thumbnail( 'full'); ?>
		<span class="fa fa-file-text-o"></span>
		<?php endif; ?>
	</a>
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	<div class="date">
		<?php printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'simplyread' ), get_the_time('m-d-Y'), get_the_time(get_option('date_format'))); ?>
	</div>
	<?php if(is_plugin_active('advanced-custom-fields/acf.php')) : ?>
		<p class="status-content"><?php echo get_field('wpdevshed_post_format_status_content'); ?></p>
	<?php else: ?>
		<div class="excerpt"><?php the_excerpt(); ?></div>
	<?php endif; ?>
</li>