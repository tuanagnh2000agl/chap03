<?php 
    get_header();
?>
<div class="c-mainvisual">
    <div class="js-slider">
        <?php $slider = get_field('slider') ?>
            <?php if ($slider): ?>
                <?php foreach ($slider as $imageItem): ?>
                    <div>
                        <img src="<?= $imageItem['image_slider']['url'] ?>" alt="<?= $imageItem['image_slider']['alt'] ?>">
                    </div>
                <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<main class="p-home">
    <section class="service">
        <div class="l-container">
            <h2 class="c-title"><span>幅広い案件に対応できるひかりのワンストップサービス</span>目的に応じて、最適な方法をご提案できます</h2>
            <div class="service__inner">
                <?php $services = get_field('services') ?>
                <?php if ($services): ?>
                    <?php foreach ($services as $imageItem): ?>
                        <div class="service__item">
                            <img src="<?= $imageItem['image_services']['url'] ?>" alt="<?= $imageItem['image_services']['alt'] ?>">
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>    
            </div>
            <div class="l-btn l-btn--2btn">
                <div class="c-btn">
                    <a href="service.html">ひかり税理士法人のサービス一覧を見る</a>
                </div>
                <div class="c-btn">
                    <a href="cases.html">ひかり税理士法人の成功事例を見る</a>
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="l-container">
            <h2 class="c-title1">
                <span class="ja">ニュース</span>
                <span class="en">News</span>
            </h2>
            <div class="news__inner">
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
                    <!-- すべて Posts - Display 5 Posts-->
                    <ul class="c-listpost active" id="すべて">
                        <?php
                            $args = [
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page'=> 5,
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
                    <!-- Posts of cat1 item - Display 5 Posts-->
                    <ul class="c-listpost" id="お知らせ">
                        <?php
                            $args = [
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page'=> 5,
                                'cat' => 7,
                            ];
                            $the_query = new WP_Query( $args );
                        ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php
                            // The Loop
                            while ( $the_query->have_posts() ) : $the_query->the_post() ;
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
                    <!-- Posts of cat2 item - Display 5 Posts-->
                    <ul class="c-listpost" id="税の最新情報">
                        <?php
                            $args = [
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page'=> 5,
                                'cat' => 8,
                            ];
                            $the_query = new WP_Query( $args );
                        ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php
                            // The Loop
                            while ( $the_query->have_posts() ) : $the_query->the_post() ;
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
                    <!-- Posts of cat3 item - Display 5 Posts-->
                    <ul class="c-listpost" id="税制改正">
                    <?php
                            $args = [
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page'=> 5,
                                'cat' => 9,
                            ];
                            $the_query = new WP_Query( $args );
                        ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php
                            // The Loop
                            while ( $the_query->have_posts() ) : $the_query->the_post() ;
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
                    <!-- Posts of cat4 item - Display 5 Posts-->
                    <ul class="c-listpost" id="掲載情報">
                        <?php
                            $args = [
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page'=> 5,
                                'cat' => 10,
                            ];
                            $the_query = new WP_Query( $args );
                            ?>
                            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                            <?php
                                // The Loop
                                while ( $the_query->have_posts() ) : $the_query->the_post() ;
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
                    <!-- Posts of cat5 item - Display 5 Posts-->
                    <ul class="c-listpost" id="バックナンバー">
                        <?php
                            $args = [
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page'=> 5,
                                'cat' => 11,
                            ];
                            $the_query = new WP_Query( $args );
                            ?>
                            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                            <?php
                                // The Loop
                                while ( $the_query->have_posts() ) : $the_query->the_post() ;
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
                </div>
                <div class="l-btn">
                    <div class="c-btn c-btn--small">
                        <a href="<?php bloginfo('url') ?>/news">ニュース一覧を見る</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="publish">
        <div class="l-container">
            <h2 class="c-title1">
                <span class="ja">出版物</span>
                <span class="en">Publish</span>
            </h2>
            <div class="publish__inner">
                <ul class="c-gridpost">
                    
                <?php if( have_rows('gridpost') ): while( have_rows('gridpost') ): the_row(); ?>
                    <li class="c-gridpost__item">
                            <a href="#">
                                <div class="c-gridpost__thumb">
                                <img src="<?php the_sub_field('image_gridpost'); ?>">
                                </div>
                                <p class="datepost"><?php the_sub_field('date'); ?></p>
                                <h3><?php the_sub_field('desc'); ?></h3>
                            </a>
                    </li>
                <?php endwhile; endif; ?>
                </ul>
            </div>
            <div class="l-btn">
                <div class="c-btn c-btn--small">
                    <a href="<?php bloginfo('url') ?>/publish">出版物一覧を見る</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    get_footer();
?>