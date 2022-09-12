<?php 
	get_header();
	wp_head();
?>
<main class="p-news">
	<div class="c-breadcrumb">
		<div class="l-container">
			<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
		</div>
	</div>
	
	<div class="p-news__content">
		<div class="l-container">
			<div class="feature_img">
            <?php echo get_the_post_thumbnail( $post_id, 'home-thumb', array( 'class' =>'thumnail') ); ?>
			</div>
			<div class="c-ttlpostpage">
				<h2><?php the_title(); ?></h2>
				<span><?php echo get_the_date(); ?></span>
				<span class="c-listpost__cat">
					<i class="c-dotcat" style="background-color: #1bb7c5"></i>
					<a href="news-cat.html"><?php echo get_the_category()[0]->name; ?></a>
				</span>
			</div>

			<div class="single__content">
				<p><?php the_excerpt(); ?></p>

				<p class="u-center is-hidden">▽▽詳細はこちら▽▽</p>

                <div class="u-hidden__content">
                    <?php the_content() ?>
                </div>
                  
				<p class="u-center u-bborder">さあ、顧問先育成型会計事務所へ！~業務改善をもたらすMAS指導の実際~</p>
			</div>

			<div class="l-btn">
				<div class="c-btn c-btn--small2">
					<a href="<?php bloginfo('url') ?>/news">ニュース一覧を見る</a>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
	get_footer();
	wp_footer();
?>
