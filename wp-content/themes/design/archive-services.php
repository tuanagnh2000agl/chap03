<?php
	get_header();
?>

<main class="p-service">
	<div class="c-breadcrumb">
		<div class="l-container">
			<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
		</div>
	</div>
	<div class="c-headpage">
		<div class="l-container2">
			<h2 class="c-title">ご提供サービス</h2>
		</div>
	</div>

	<div class="feature_img">
		<?php echo get_the_post_thumbnail( $post_id, 'services', array( 'class' =>'thumnail') ); ?>
	</div>
	<div class="p-service__content">
		<div class="l-container">
			<p class="notice">ひかり税理士法人がご提供するすべてのサービスを目的別に検索していただけます</p>
			<!-- =======checkArea====== -->
			<div class=" p-service__checkArea">

					
				<form id="serviceSearch" method="get" action="#">

					<div class="checkArea__form">
						<legend class="servicesList-heading">サービスの対象で選ぶ</legend>
						<div class="checkArea__inner">
							<?php
								$terms = get_terms(
									array(
										'taxonomy'   => 'services_category', // Custom Post Type Taxonomy Slug
										'hide_empty' => false,
										'order'         => 'asc'
									)
									);
								$i = 2;
								foreach ($terms as $term) {
									?>
										<div class="c-w240">
											<label><input class="chkbutton" type="checkbox" name="" value="<?= $i ?>" <?php if($i == 2){echo "checked";}?>><?= $term->name ?></label>
										</div>
										<?php 
										$i++;
								}
							?>
					
						</div>
						<!-- test -->
						<div class="categories">
							<ul>
							<?php
								$cat_args = get_terms(
									array(
											'taxonomy'   => 'services_category', 
											'hide_empty' => false,
											'order'         => 'asc'
										)
									);
								foreach($cat_args as $cat):?>
									<div class="c-w240">
										<li class="js-filter-item" style="color: red;"><a  data-category="<?= $cat->term_id; ?>"><?= $cat->name; ?></a></>
									</div>
								<?php endforeach;
							?>
							</ul>
						</div>	
					</div>
					<div class="checkArea__form form2">
						<legend class="servicesList-heading">サービスの内容で選ぶ</legend>
						<div class="checkArea__inner">
							<div class="c-w156">
								<label><input class="chkbutton" type="checkbox" name="" value="6">税務</label>
							</div>
							<div class="c-w156">
								<label><input class="chkbutton" type="checkbox" name="" value="7">財務</label>
							</div>
							<div class="c-w156">
								<label><input class="chkbutton" type="checkbox" name="" value="8">相続</label>
							</div>
							<div class="c-w240">
								<label><input class="chkbutton" type="checkbox" name="" value="9">事業承継</label>
							</div>
							<div class="c-w240">
								<label><input class="chkbutton" type="checkbox" name="" value="10">ビジネスサポート</label>
							</div>
						</div>	
					</div>
				</form>
			</div>
			<p class="p-service__result">23件が該当しました</p>
			<ul class="c-column">
					<div class="js-filter" style="color: red;">
						<?php 
							$args = array(
								'post_status' => 'publish', 
								'post_type' => 'services', 
								'posts_per_page' => -1 
							);
						?>
						<?php $query = new WP_query($args); ?>
						<?php global $wp_query; $wp_query->in_the_loop = true; ?>
						<?php while ($query->have_posts()) : $query->the_post(); ?>
						<?php if( have_rows('post_service') ): while( have_rows('post_service') ): the_row(); ?>
							<li class="c-column__item"><a href="<?php the_permalink() ?>">
								<img src="<?php the_sub_field('icon'); ?>" alt="Image name">
								<p><?php the_sub_field('title'); ?></p></a>
							</li>
						<?php endwhile; endif; ?>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				
			</ul>
			<div class="endcontent">
				<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/img_more05.png" alt="Image img more 05">
				<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/img_more06.png" alt="Image img more 06">
			</div>
		</div>
	</div>
</main>
<?php 
	get_footer();
?>	

