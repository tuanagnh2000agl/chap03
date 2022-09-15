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
                    <img src="<?php echo get_the_post_thumbnail_url('','full'); ?>" alt="<?php the_title(); ?>">
                </div>
				<div class="p-publish__info">
					<h2>社長に“もしものこと”があったときの手続きすべて</h2>
					<p class="datepost"><?php echo get_the_date('Y年m月d日') ?></p>
					<p class="author">
					著者  : ひかりアドバイザーグループ<br>
					出版社 : 清文社
					</p>
					<div class="price"><?php the_content() ?></div>
					
					<div class="desc">
						<p>■経営者急逝時の会社・遺族の手続き全般につき、書式例を交えてわかりやすく解説。万一の事態に備える生前対策や民法（相続関係）改正情報も織り込み、網羅的に解説。</p>
						<h4>目次</h4>
						<p>第１編　会社が行う手続き<br>
						<br>
						第1章　社長が亡くなった直後に行う手続き<br>
						第2章　落ち着いたら行う手続き<br>
						第3章　社会保険の諸届<br>
						第4章　後継予定者が行う諸手続き<br>
						第5章　名義変更手続きあれこれ<br>
						第6章　遺族の相続税に関するサポート<br>
						第7章　もしもに備えておきたい生前対策あれこれ<br>
						<br>
						第２編　遺族が行う手続き<br>
						<br>
						第1章　社長が亡くなった直後に行う手続き<br>
						第2章　落ち着いたら行う手続き<br>
						第3章　遺族年金などの手続き<br>
						第4章　遺産相続の基本手続き<br>
						第5章　名義変更手続きあれこれ<br>
						第6章　相続税に関する基本的理解<br>
						第7章　もしもに備えておきたい生前対策あれこれ</p>
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
