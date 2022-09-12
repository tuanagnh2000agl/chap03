<?php get_header() ?>
    <main class="p-news">
        <div class="c-breadcrumb">
            <div class="l-container">
                <a href="index.html">Home</a>
                <span>ニュース・お知らせ</span>
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
								$args = array(
									'post_status' => 'publish',
									'post_type' => 'post', 
									'posts_per_page' => 5,
									'paged' => $paged
								);
								?>
								<?php $getposts = new WP_query($args); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post();?>
									<li class="c-listpost__item">
										<div class="c-listpost__info">
											<span class="datepost"><?php echo get_the_date(); ?></span>
											<span class="cat">
												<i class="c-dotcat" style="background:<?php echo get_the_category()[0]->description ?>;"></i>
												<a href="<?php the_permalink() ?>"><?php echo get_the_category()[0]->name; ?></a>
											</span>
										</div>
										<h3 class="titlepost"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
									</li>
                        <?php endwhile; wp_reset_postdata(); ?>
                        <div class="c-pagination">
							<?php pagination_bar($getposts);?>
                        </div>
                    </ul>
                    <ul class="c-listpost" id="お知らせ">
						<?php 
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$args = array(
									'post_status' => 'publish',
									'post_type' => 'post', 
									'posts_per_page' => 5,
									'cat'       => 7,
								);
							?>
							<?php $getposts = new WP_query($args); ?>
							<?php global $wp_query; $wp_query->in_the_loop = true; ?>
							<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<li class="c-listpost__item">
									<div class="c-listpost__info">
										<span class="datepost"><?php the_date(); ?></span>
										<span class="cat">
											<i class="c-dotcat" style="background:<?php echo get_the_category()[0]->description ?>"></i>
											<a href="<?php the_permalink() ?>"><?php echo get_the_category()[0]->name; ?></a>
										</span>
									</div>
									<h3 class="titlepost"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
								</li>
                        <?php endwhile; wp_reset_postdata(); ?>
                        <div class="c-pagination">
							<?php //pagination_bar($getposts);?>
                        </div>
                    </ul>
                    <ul class="c-listpost" id="税の最新情報">
						<?php 
									$args = array(
										'post_status' => 'publish',
										'post_type' => 'post', 
										'showposts' => 5, 
										'cat'       => 8,
									);
								?>
								<?php $getposts = new WP_query($args); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<li class="c-listpost__item">
										<div class="c-listpost__info">
											<span class="datepost"><?php the_date(); ?></span>
											<span class="cat">
												<i class="c-dotcat" style="background:<?php echo get_the_category()[0]->description ?>"></i>
												<a href="<?php the_permalink(); ?>"><?php echo get_the_category()[0]->name; ?></a>
											</span>
										</div>
										<h3 class="titlepost"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
									</li>
                        <?php endwhile; wp_reset_postdata(); ?>
                        <div class="c-pagination">
							<?php //pagination_bar($getposts);?>
                        </div>
                    </ul>
                    <ul class="c-listpost" id="税制改正">
						<?php 
									$args = array(
										'post_status' => 'publish',
										'post_type' => 'post', 
										'showposts' => 5, 
										'cat'       => 9
									);
								?>
								<?php $getposts = new WP_query($args); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<li class="c-listpost__item">
										<div class="c-listpost__info">
											<span class="datepost"><?php the_date(); ?></span>
											<span class="cat">
												<i class="c-dotcat" style="background:<?php echo get_the_category()[0]->description ?>"></i>
												<a href="<?php the_permalink(); ?>"><?php echo get_the_category()[0]->name; ?></a>
											</span>
										</div>
										<h3 class="titlepost"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
									</li>
                        <?php endwhile; wp_reset_postdata(); ?>
                        <div class="c-pagination">
							<?php //pagination_bar($the_query);?>
                        </div>
                    </ul>
                    <ul class="c-listpost" id="掲載情報">
						<?php 
							$args = array(
								'post_status' => 'publish',
								'post_type' => 'post', 
								'showposts' => 5, 
								'cat'       => 10,
							);
							?>
							<?php $getposts = new WP_query($args); ?>
							<?php global $wp_query; $wp_query->in_the_loop = true; ?>
							<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<li class="c-listpost__item">
									<div class="c-listpost__info">
										<span class="datepost"><?php the_date(); ?></span>
										<span class="cat">
											<i class="c-dotcat" style="background:<?php echo get_the_category()[0]->description ?>"></i>
											<a href="<?php the_permalink(); ?>"><?php echo get_the_category()[0]->name; ?></a>
										</span>
									</div>
									<h3 class="titlepost"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
								</li>
                        <?php endwhile; wp_reset_postdata(); ?>
                        <div class="c-pagination">
							<?php //pagination_bar($the_query);?>
                        </div>
                    </ul>
                    <ul class="c-listpost" id="バックナンバー">
						<?php 
							$args = array(
								'post_status' => 'publish',
								'post_type' => 'post', 
								'showposts' => 5, 
								'cat'       => 11,
							);
							?>
							<?php $getposts = new WP_query($args); ?>
							<?php global $wp_query; $wp_query->in_the_loop = true; ?>
							<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<li class="c-listpost__item">
									<div class="c-listpost__info">
										<span class="datepost"><?php the_date(); ?></span>
										<span class="cat">
											<i class="c-dotcat" style="background:<?php echo get_the_category()[0]->description ?>"></i>
											<a href="<?php the_permalink(); ?>"><?php echo get_the_category()[0]->name; ?></a>
										</span>
									</div>
									<h3 class="titlepost"><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h3>
								</li>
                        <?php endwhile; wp_reset_postdata(); ?>
                       	<div class="c-pagination">
					   		<?php //pagination_bar($the_query);?>
                        </div> 
                    </ul>
                </div>
            </div>
        </div>
    </main>
 <?php get_footer(); ?>