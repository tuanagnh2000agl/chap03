<?php get_header(); ?>
<main class="p-publish">
		<div class="c-breadcrumb">
			<div class="l-container">
			    <div class="breadcrumb"><?php echo get_hansel_and_gretel_breadcrumbs(); ?></div>
			</div>
		</div>
	
		<div class="l-container">
			<div class="p-publish__single">
				<div class="feature_img">
                    <img src="<?= get_field( "image" ); ?>" alt="<?php the_title(); ?>">
                </div>
				<div class="p-publish__info">
					<h2><?= get_field( "title" ); ?></h2>
					<p class="datepost"><?= get_field( "publication-date" ); ?></p>
					<p class="author">
					著者  : <?= get_field( "author" ); ?><br>
					出版社 : <?= get_field( "publisher" ); ?>
					</p>
					<div class="price"><?= get_field( "price" ); ?></div>
					
					<div class="desc">
						<p><?= get_field( "description" ); ?></p>
						<h4>目次</h4>
						<p><?= get_field( "contents" ); ?></p>
					</div>
				</div>
			</div>
			<div class="l-btn">
				<div class="c-btn c-btn--small2">
					<a href="<?php bloginfo('url') ?>/publish">出版物一覧へ</a>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
