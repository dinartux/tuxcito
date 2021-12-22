<?php get_header() ?>
<?php if (have_posts()) {?>
	<?php while (have_posts()){?>
		<?php the_post()?>
<header class="black-bg px-6 py-4 fancy-font small-section">
	<h1 class="text-white text-7xl text-bold mt-30"><?php the_title()?></h1>
</header>
<main class="px-8 py-4 gray-bg nunito">
	<div class="content xl:text-2xl">
		<?php the_content()?>
	</div>
</main>
	<?php } ?>
<?php } ?>
<?php get_footer() ?>

