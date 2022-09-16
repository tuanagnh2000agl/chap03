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
                    <a href="<?php bloginfo('url') ?>/services">ひかり税理士法人のサービス一覧を見る</a>
                </div>
                <div class="c-btn">
                    <a href="#">ひかり税理士法人の成功事例を見る</a>
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
                    <ul class="c-listpost active" id="すべて">
                        <?php $category = get_category(get_query_var('cat'));
                        $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=5'); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <li class="c-listpost__item">
                                <div class="c-listpost__info">
                                    <span class="datepost"><?php the_date(); ?></span>
                                    <span class="cat">
                                        <?php $cats = get_the_category(get_the_ID());
                                            foreach ($cats as $cat) {
                                                ?>
                                                <i class="c-dotcat <?php echo $cat->name?>"></i>
                                                <a href="news-cat.html"><?php echo $cat->name?></a>
                                        <?php } ?>
                                    </span>
                                </div>
                                <h3 class="titlepost"><a href="news-post.html">2018年12月12日 就職活動中の方向けに京都事務所で事務所見学会を開催します。</a></h3>
                            </li>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                    <?php                 
                        $categories = get_categories();
                        foreach($categories as $category) {   
                        ?>
                            <ul class="c-listpost" id="<?php echo $category->name ?>">
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
                                            <i class="c-dotcat <?php echo $category->name ?>"></i>
                                            <a href="news-cat.html"><?php echo $category->name; ?></a>
                                        </span>
                                    </div>
                                    <h3 class="titlepost"><a href="news-post.html"><?php the_title(); ?></a></h3>
                                </li>
                            <?php endwhile; wp_reset_postdata();?>
                            </ul>
                        <?php } ?>
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
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = [
                            'post_type' => 'publish',
                            'post_status' => 'publish',
                            'posts_per_page'=> 4,
                            'paged' => $paged

                        ];
                        $the_query = new WP_Query( $args );
                    ?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
                     <li class="c-gridpost__item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="c-gridpost__thumb">
                                <?php echo get_the_post_thumbnail( $post_id, 'home-thumb', array( 'class' =>'thumnail') ); ?>
                            </div>
                            <p class="datepost"><?php the_date(); ?></p>
                            <h3><?php the_title(); ?></h3>
                        </a>
                    </li>  
                    <?php endwhile; wp_reset_postdata(); ?>                
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

