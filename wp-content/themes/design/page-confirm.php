<?php
	get_header();
?>

<main class="p-contact">
	<div class="c-breadcrumb">
		<div class="l-container">
			<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
		</div>
	</div>
	<div class="c-headpage">
		<div class="l-container2">
			<h2 class="c-title">お問い合わせ</h2>
		</div>
	</div>

	<div class="p-contact__content">
		<div class="l-container">
			<p class="notice">以下の内容を送信してもよろしいですか？</p>

			<table>
				<tr>
					<th>お名前<span class="required">必須</span></th>
					<td>
						<p>Sakura</p>
						<p>Tasuya</p>
					</td>
				</tr>

				<tr>
					<th>所属団体（社名等）</th>
					<td>
						<p>A社名等</p>
					</td>
				</tr>

				<tr>
					<th>E-mail<span class="required">必須</span></th>
					<td>
						<p>sakura@gmail.com</p>
					</td>
				</tr>

				<tr>
					<th>E-mail（確認）<span class="required">必須</span></th>
					<td>
						<p>sakura@gmail.com</p>
					</td>
				</tr>

				<tr>
					<th>お電話番号</th>
					<td>
						<p>030-3333-4444</p>
					</td>
				</tr>

				<tr>
					<th>ご相談内容<span class="required">必須</span></th>
					<td>
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					</td>
				</tr>
			</table>

			<div class="l-btn l-btn--2btn">
				<div class="c-btn">
					<a href="<?php bloginfo('template_directory') ?>/contact" id="back">前の画面に戻る</a>
				</div>
				<div class="c-btn">
					<a href="" id="send">送信する</a>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
	get_footer();
?>
