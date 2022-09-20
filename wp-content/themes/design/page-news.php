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
							<li data-content="<?= $cate->name ?>" data-color="<?= $cate->description ?>" class="active"><?= $cate->name ?></li>
							<?php else : ?>
								<li data-content="<?= $cate->name ?>" data-color="<?= $cate->description ?>"><?= $cate->name ?></li>
						<?php endif; ?>
                    <?php } ?>
                </ul>
				<div class="c-tabs__content">            
                    <ul class="c-listpost active" id="すべて">
                        <?php echo do_shortcode('[ajax_pagination post_type="post" posts_per_page="5" paged="1"]');?>
                    </ul>
                    <!-- 5 category -->
                    <?php                 
                    $categories = get_categories();
                    foreach($categories as $category) {   
                    ?>
                        <ul class="c-listpost" id="<?= $category->name ?>">
                        <?php
                            $args = [
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page'=> 5,
                                'cat' => $category->term_id,
                            ];
                            $the_query = new WP_Query( $args );
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>
                            <li class="c-listpost__item">
                                <div class="c-listpost__info">
                                    <span class="datepost"><?= get_the_date(); ?></span>
                                    <span class="cat">
                                        <i class="c-dotcat <?= $category->name ?>"></i>
                                        <a href="<?= get_category_link($cat->cat_ID) ?>"><?= $category->name; ?></a>
                                    </span>
                                </div>
                                <h3 class="titlepost"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </li>
                        <?php endwhile; wp_reset_postdata();?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
 <?php get_footer(); ?>