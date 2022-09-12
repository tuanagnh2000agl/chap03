<?php get_header() ?>
    <main class="p-news">
        <div class="c-breadcrumb">
            <div class="l-container">
				<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
            </div>
        </div>
        <div class="c-headpage">
            <h2 class="c-title">ニュース・お知らせ</h2>
        </div>
        <div class="p-news__content">
            <div class="l-container">
				<ul class="c-tabs">
						<?php $args = array( 
							'hide_empty' => 0,
							'taxonomy' => 'category',
							'orderby' => 'id',
							); 
							$cates = get_categories( $args ); 
							foreach ( $cates as $cate ) {  ?>
							<?php if($cate->name == "すべて") : ?>
								<li data-content="<?php echo $cate->name ?>" data-color="<?php echo $cate->description ?>" class="active"><?php echo $cate->name ?></li>
								<?php else : ?>
									<li data-content="<?php echo $cate->name ?>" data-color="<?php echo $cate->description ?>"><?php echo $cate->name ?></li>
							<?php endif; ?>
						<?php } ?>
                </ul>
                <div class="c-tabs__content">
                    <ul class="c-listpost active" id="すべて">
						<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = [
								'post_type' => 'post',
								'post_status' => 'publish',
								'posts_per_page'=> 5,
								'paged' => $paged

							];
							$the_query = new WP_Query( $args );
							?>
							<?php global $wp_query; $wp_query->in_the_loop = true; ?>
							<?php
								// The Loop
								while ( $the_query->have_posts() ) : $the_query->the_post();
							?>
								<li class="c-listpost__item">
									<div class="c-listpost__info">
										<span class="datepost"><?= get_the_date()  ?></span>
										<?php
										$cats = get_the_category(get_the_ID());
											foreach ($cats as $cat) {
										?>
										<span class="cat">
											<i class="c-dotcat" style="background:<?php echo get_the_category()[0]->description ?>;"></i>
											<a href="<?= get_category_link($cat->cat_ID) ?>"><?= $cat->name ?></a>
										</span>
										<?php } ?>
									</div>
									<h3 class="titlepost"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
								</li>
                        <?php endwhile; wp_reset_postdata(); ?> 
                        <div class="c-pagination">
							<?php pagination_bar($the_query);?>
                        </div>
                    </ul>
                    <ul class="c-listpost" id="お知らせ">
						<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = [
								'post_type' => 'post',
								'post_status' => 'publish',
								'posts_per_page'=> 5,
								'cat' 	=> 7,
								'paged' => $paged

							];
							$the_query = new WP_Query( $args );
							?>
							<?php global $wp_query; $wp_query->in_the_loop = true; ?>
							<?php
								// The Loop
								while ( $the_query->have_posts() ) : $the_query->the_post();
							?>
							<li class="c-listpost__item">
								<div class="c-listpost__info">
									<span class="datepost"><?= get_the_date()  ?></span>
									<?php
									$cats = get_the_category(get_the_ID());
										foreach ($cats as $cat) {
									?>
									<span class="cat">
										<i class="c-dotcat" style="background:<?php echo get_the_category()[0]->description ?>;"></i>
										<a href="<?= get_category_link($cat->cat_ID) ?>"><?= $cat->name ?></a>
									</span>
									<?php } ?>
								</div>
								<h3 class="titlepost"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
							</li>
                        <?php endwhile; wp_reset_postdata(); ?> 
                        <div class="c-pagination">
							<?php pagination_bar($the_query);?>
                        </div>
                    </ul>
                    <ul class="c-listpost" id="税の最新情報">
						<?php
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$args = [
									'post_type' => 'post',
									'post_status' => 'publish',
									'posts_per_page'=> 5,
									'cat' => 8,
									'paged' => $paged
								];
								$the_query = new WP_Query( $args );
								?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php
									// The Loop
									while ( $the_query->have_posts() ) : $the_query->the_post();
								?>
									<li class="c-listpost__item">
										<div class="c-listpost__info">
											<span class="datepost"><?= get_the_date()  ?></span>
											<?php
											$cats = get_the_category(get_the_ID());
												foreach ($cats as $cat) {
											?>
											<span class="cat">
												<i class="c-dotcat" style="background:<?php echo get_the_category()[0]->description ?>;"></i>
												<a href="<?= get_category_link($cat->cat_ID) ?>"><?= $cat->name ?></a>
											</span>
											<?php } ?>
										</div>
										<h3 class="titlepost"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
									</li>
                        <?php endwhile; wp_reset_postdata(); ?> 
                        <div class="c-pagination">
							<?php pagination_bar($the_query);?>
                        </div>
                    </ul>
                    <ul class="c-listpost" id="税制改正">
						<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = [
								'post_type' => 'post',
								'post_status' => 'publish',
								'posts_per_page'=> 5,
								'cat' 	=> 9,
								'paged' => $paged
							];
							$the_query = new WP_Query( $args );
							?>
							<?php global $wp_query; $wp_query->in_the_loop = true; ?>
							<?php
								// The Loop
								while ( $the_query->have_posts() ) : $the_query->the_post();
							?>
							<li class="c-listpost__item">
								<div class="c-listpost__info">
									<span class="datepost"><?= get_the_date()  ?></span>
									<?php
									$cats = get_the_category(get_the_ID());
										foreach ($cats as $cat) {
									?>
									<span class="cat">
										<i class="c-dotcat" style="background:<?php echo get_the_category()[0]->description ?>;"></i>
										<a href="<?= get_category_link($cat->cat_ID) ?>"><?= $cat->name ?></a>
									</span>
									<?php } ?>
								</div>
								<h3 class="titlepost"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
							</li>
                        <?php endwhile; wp_reset_postdata(); ?> 
                        <div class="c-pagination">
							<?php pagination_bar($the_query);?>
                        </div>
                    </ul>
                    <ul class="c-listpost" id="掲載情報">
						<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = [
								'post_type' => 'post',
								'post_status' => 'publish',
								'posts_per_page'=> 5,
								'cat' 	=> 10,
								'paged' => $paged
							];
							$the_query = new WP_Query( $args );
							?>
							<?php global $wp_query; $wp_query->in_the_loop = true; ?>
							<?php
								// The Loop
								while ( $the_query->have_posts() ) : $the_query->the_post();
							?>
							<li class="c-listpost__item">
								<div class="c-listpost__info">
									<span class="datepost"><?= get_the_date()  ?></span>
									<?php
									$cats = get_the_category(get_the_ID());
										foreach ($cats as $cat) {
									?>
									<span class="cat">
										<i class="c-dotcat" style="background:<?php echo get_the_category()[0]->description ?>;"></i>
										<a href="<?= get_category_link($cat->cat_ID) ?>"><?= $cat->name ?></a>
									</span>
									<?php } ?>
								</div>
								<h3 class="titlepost"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
							</li>
                        <?php endwhile; wp_reset_postdata(); ?> 
                        <div class="c-pagination">
							<?php pagination_bar($the_query);?>
                        </div>
                    </ul>
                    <ul class="c-listpost" id="バックナンバー">
						<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = [
								'post_type' => 'post',
								'post_status' => 'publish',
								'posts_per_page'=> 5,
								'cat' 	=> 11,
								'paged' => $paged
							];
							$the_query = new WP_Query( $args );
							?>
							<?php global $wp_query; $wp_query->in_the_loop = true; ?>
							<?php
								// The Loop
								while ( $the_query->have_posts() ) : $the_query->the_post();
							?>
							<li class="c-listpost__item">
								<div class="c-listpost__info">
									<span class="datepost"><?= get_the_date()  ?></span>
									<?php
									$cats = get_the_category(get_the_ID());
										foreach ($cats as $cat) {
									?>
									<span class="cat">
										<i class="c-dotcat" style="background:<?php echo get_the_category()[0]->description ?>;"></i>
										<a href="<?= get_category_link($cat->cat_ID) ?>"><?= $cat->name ?></a>
									</span>
									<?php } ?>
								</div>
								<h3 class="titlepost"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
							</li>
                        <?php endwhile; wp_reset_postdata(); ?> 
                        <div class="c-pagination">
							<?php pagination_bar($the_query);?>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </main>
 <?php get_footer(); ?>