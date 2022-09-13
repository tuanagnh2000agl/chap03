<?php get_header(); ?>
<main class="p-service">
    <div class="c-breadcrumb">
        <div class="l-container">
			<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
        </div>
    </div>
    <div class="c-headpage">
        <div class="l-container2">
            <h2 class="c-title"><?php the_title() ?></h2>
        </div>
        <p>
            継続的な顧問業務を通じて、企業の経営課題を共有し、そして解決することによって、お客様の永続的発展に貢献し<br>ます。また、適正な税務処理や節税のアドバイスを適時的確に行い、お客様の資産保全に貢献します。
        </p>
    </div>

    <div class="feature_img">
        <img src="<?php bloginfo('template_directory') ?>/assets/img/hero_partner.jpg" alt="Image hero_partner">
    </div>

    <div class="p-service__consultation">
        <dl class="l-container2">
            <dt>このような方はご相談ください</dt>
                <dd class="c-checkMark">経営に関するアドバイスや提案が聞きたい</dd>
                    <dd class="c-checkMark">納税予測や節税による税金対策をしっかりと行いたい</dd>
                    <dd class="c-checkMark">資金繰りや資金調達についても相談したい</dd>
                </dl>
    </div>

    <div class="p-service__merit">
            <div class="l-container2">
            <h3 class="p-service__title">ひかり税理士法人を選ぶメリット</h3>
            <dl>
                <dt class="c-checkMark">経営に関するアドバイスや提案を行います。</dt>
                    <dd>会計監査業務を通じて業績分析を行い、現状の経営課題を抽出し、お客様と経営課題を共有します。そしてその解決方法をお客様とともに考え、また税務のプロとして、アドバイスや提案をさせていただきます。</dd>
                    <dt class="c-checkMark">決算予測や決算対策をしっかり行います。</dt>
                    <dd>決算予測を行い、今期の業績着地を把握し、納税額を予測するとともに、適切な節税方法の提案や納税準備のための資金繰り等への対応を行います。</dd>
                    <dt class="c-checkMark">資金繰りや資金調達の提案を行います。</dt>
                    <dd>業績や財務内容を基に、今後の事業運営、設備投資等に必要な資金を把握し、借入額や返済期間を検討します。また必要に応じて、具体的な資金調達の方法を提案します。</dd>
                </dl>
            </div>
        </div>

        <div class="p-service__flow">
            <div class="l-container2">
            
                <h3 class="p-service__title">サービスの流れ</h3>
				<?php if( have_rows('step') ): while( have_rows('step') ): the_row(); ?>
                <table>

                <?php if( get_field('image') ): ?>
                <?php endif; ?>
                    <tbody>
                        <tr>
                        <th><?php the_sub_field('step'); ?></th>
                        <td>
                            <h4 class="flow-title"><?php the_sub_field('heading'); ?></h4>
                            <h5 class="flow-subtitle"><?php the_sub_field('title4'); ?></h5>
                            <p class="c-checkMark"><?php the_sub_field('content1'); ?></p>
                            <p class="c-checkMark"><?php the_sub_field('content2'); ?></p>
                            <h5 class="flow-subtitle"><?php the_sub_field('title2'); ?></h5>
                            <p class="c-checkMark"><?php the_sub_field('content3'); ?></p>
                        </td>
                        </tr>
                    </tbody>
                </table>
				<?php endwhile; endif; ?>
            </div>
        </div>

        <div class="p-service__division">
            <div class="l-container">
                <h3 class="p-service__subtitle">関連サービス</h3>
            <ul class="division-list c-flex">
                <li class="small-12 medium-4">
                    <a href="http://www.hikari-tax.com/services/s07">
                    <p class="img"><img src="<?php bloginfo('template_directory') ?>/assets/img/1.jpg"></p>
                    <p class="text"><span class="arrow">経理改善</span></p>
                    </a>
                </li>
                    <li class="small-12 medium-4">
                    <a href="http://www.hikari-tax.com/services/s20">
                    <p class="img"><img src="<?php bloginfo('template_directory') ?>/assets/img/1.jpg" alt="1.jpg"></p>
                    <p class="text"><span class="arrow">会計顧問</span></p>
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

    
</main>
<?php get_footer(); ?>
