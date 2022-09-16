<?php get_header(); ?>
<main class="p-service">
    <div class="c-breadcrumb">
        <div class="l-container">
            <div class="breadcrumb"><?php echo get_hansel_and_gretel_breadcrumbs(); ?></div>
        </div>
    </div>
<?php if( have_rows('post_service') ): while( have_rows('post_service') ): the_row(); ?>
    <div class="c-headpage">
        <div class="l-container2">
            <h2 class="c-title"><?php the_sub_field('title'); ?></h2>
        </div>
        <p>
            <?php the_sub_field('description'); ?>
        </p>
    </div>

    <div class="feature_img">
        <img src="<?php the_sub_field('image'); ?>" alt="Image hero_partner">
    </div>

    <div class="p-service__consultation">
        <dl class="l-container2">
            <dt>このような方はご相談ください</dt>
            <?php
                 while( have_rows('target') ) : the_row();
                 $sub_value = get_sub_field('target');
            ?>
                 <dd class="c-checkMark"><?php echo $sub_value; ?></dd>
            <?php
             endwhile;
            ?>
        </dl>
    </div>

    <div class="p-service__merit">
            <div class="l-container2">
            <h3 class="p-service__title">ひかり税理士法人を選ぶメリット</h3>
            <dl>
                <?php
                while( have_rows('advantage') ) : the_row();
                $sub_title = get_sub_field('advantage-title');
                $sub_des = get_sub_field('advantage-description');
                ?>
                <dt class="c-checkMark"><?php echo $sub_title ?></dt>
                <dd><?php echo $sub_des ?></dd>
                <?php
                endwhile;
                ?> 
            </dl>
            </div>
        </div>

        <div class="p-service__flow">
            <div class="l-container2">
                <h3 class="p-service__title">サービスの流れ</h3>
                <table>
                <?php
                $i = 1;
                while( have_rows('steps') ) : the_row(); 
                $sub_title = get_sub_field('step-tite');
                ?>
                <tbody>
                    <tr>
                    <th>STEP<?php echo $i ?></th>
                    <td>
                        <h4 class="flow-title"><?php echo $sub_title ?></h4>
                        <?php  while( have_rows('step-subtitle') ) : the_row();
                        $sub_sub = get_sub_field('step-subtitle');?>
                            <h5 class="flow-subtitle"><?php echo $sub_sub; ?></h5>
                        <!--  -->
                        <?php  while( have_rows('step-description') ) : the_row();
                        $sub_des = get_sub_field('step-description');?>
                            <p class="c-checkMark"><?php echo $sub_des ?></p>
                        <?php endwhile; ?>
                        <!--  -->
                        <?php
                        endwhile;
                        ?> 
                    </tr>
                </tbody>

                <?php $i++;  endwhile;?> 
                
                </table>
            </div>
        </div>
        <div class="p-service__division">
            <div class="l-container">
                <h3 class="p-service__subtitle">関連サービス</h3>
            <ul class="division-list c-flex">
                <li class="small-12 medium-4">
                    <a href="http://www.hikari-tax.com/services/s07">
                    <p class="img"><img src="<?php the_sub_field('icon'); ?>"></p>
                    <p class="text"><span class="arrow"><?php the_sub_field('title'); ?></span></p>
                    </a>
                </li>
                    <li class="small-12 medium-4">
                    <a href="http://www.hikari-tax.com/services/s20">
                    <p class="img"><img src="<?php the_sub_field('icon'); ?>" alt="1.jpg"></p>
                    <p class="text"><span class="arrow"><?php the_sub_field('title'); ?></span></p>
                    </a>
                </li>
            </ul>
                </div>
                <div class="l-btn">
                    <div class="c-btn c-btn--small">
                        <a href="<?php bloginfo('url') ?>/news">ご提供サービス一覧へ</a>
                    </div>
                </div>
            </div>
<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
