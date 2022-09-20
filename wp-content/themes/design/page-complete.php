<?php get_header(); ?>
<main class="p-contact">
	<div class="c-breadcrumb">
		<div class="l-container">
			<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
		</div>
	</div>
	<div class="c-headpage">
		<div class="l-container">
			<h2 class="c-title">お問い合わせ</h2>
		</div>
	</div>
	<div class="p-contact__content">
		<div class="l-container2 complete">
				<h2>お問い合わせ、ありがとうございました。</h2>
				<?php echo do_shortcode('[mwform_formkey key="266"]')?>
		</div>
		<div class="c-btn c-btn--small">
			<a href="<? bloginfo('url') ?>/news">TOPに戻る</a>
		</div>
	</div>
</main>
<?php get_footer(); ?>