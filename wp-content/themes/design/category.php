<?php
    get_header();
?>
<main class="p-news">
        <div class="c-breadcrumb">
            <div class="l-container">
                <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
            </div>
        </div>
        <div class="c-headpage">
            <h2 class="c-title">ニュース・お知らせCSC</h2>
        </div>
        <div class="p-news__content">
            <div class="l-container">
                <ul class="c-listpost" id="cat_1">
                    <?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        // get ID
                        $category = get_category(get_query_var('cat'));
                        $args = [
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page'=> 10,
                            'cat' =>  $category->cat_ID,
							'paged' => $paged,

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
                </ul>
                <div class="c-pagination">
                    <?php pagination_bar($the_query);?>
                </div>
            </div>
        </div>
    </main>

<?php 
    get_footer();
?>