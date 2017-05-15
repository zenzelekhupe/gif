<?php /*
Template Name: MY GIF */ ?>
<?php get_header();?>
<div class="main-inner-page">
	<div class="container">
		<div class="inner-pages-inner gap-top">
		<div class="diff"><h1><span><?php the_title();?></span></h1>
		<?php $gifs = get_user_meta(get_current_user_id(), 'gif');
		foreach ($gifs as $gif) { ?>
			<img src="<?php echo wp_upload_dir()['baseurl'] ;?>/gif/<?php echo $gif;?>">
		<?php } ?>
		</div>
		</div>
	</div>
</div>
<?php get_footer();?>