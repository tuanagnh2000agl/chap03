<?php get_header(); ?>
<main class="p-publish">
    <div class="c-breadcrumb">
        <div class="l-container">
			<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
        </div>
    </div>
    <div class="c-headpage">
        <h2 class="c-title">出版物</h2>
        <p>ひかり税理士法人では、税務・会計・経営・相続などに関する書籍の執筆を行っています。</p>
    </div>
    <div class="l-container">
        <div class="p-publish__content">
            <ul class="c-gridpost">
                <?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = [
                        'post_type' => 'publish',
                        'post_status' => 'publish',
                        'posts_per_page'=> 12,
                        'paged' => $paged

                    ];
                    $the_query = new WP_Query( $args );
                ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                    <li class="c-gridpost__item">
                        <div class="c-gridpost__thumb">
                            <?php echo get_the_post_thumbnail( $post_id, 'home-thumb', array( 'class' =>'thumnail') ); ?>
                        </div>
                        <div class="c-gridpost__info">
                            <p class="datepost"><?php the_date(); ?></p>
                            <h3><?php the_title(); ?></h3>
                            <p class="price"><?php the_content(); ?></p>
                            <a href="<?php the_permalink() ?>" class="c-btnview">詳しく見る</a>
                        </div>
                    </li>
                <?php endwhile; wp_reset_postdata(); ?>     
            </ul>
        </div>
        <div class="c-pagination">
			<?php pagination_bar($the_query);?>
        </div>
    </div>
</main>
<?php get_footer(); ?>