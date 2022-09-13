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
			<h3>メールでのお問い合わせ</h3>
			<p class="notice">下記に必要事項をご記入の上送信下さい。弊所のコンサルタントからご連絡をさせて頂きます。</p>
			<form>
				<table>
					<tr>
						<th>お名前<span class="required">必須</span></th>
						<td>
							<input type="text" name="firstname" placeholder="姓">
							<input type="text" name="lastname" placeholder="名">
						</td>
					</tr>

					<tr>
						<th>所属団体（社名等）</th>
						<td>
							<input type="text" name="company">
						</td>
					</tr>

					<tr>
						<th>E-mail<span class="required">必須</span></th>
						<td>
							<input type="text" name="email" placeholder="例） example@gmail.com">
						</td>
					</tr>

					<tr>
						<th>E-mail（確認）<span class="required">必須</span></th>
						<td>
							<input type="text" name="emailconfirm" placeholder="例） example@gmail.com">
						</td>
					</tr>

					<tr>
						<th>お電話番号</th>
						<td>
							<input type="tel" name="tel" placeholder="例） 000-1111-2222">
						</td>
					</tr>

					<tr>
						<th>ご相談内容<span class="required">必須</span></th>
						<td>
							<textarea name="message"></textarea>
						</td>
					</tr>
				</table>

				<div class="l-btn l-btn--2btn">
					<div class="c-btn">
						<input type="reset" name="" value="リセット">
					</div>
					<div class="c-btn">
						<a href="<?php bloginfo('template_directory') ?>/contact/confirm">入力内容を確認する</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</main>
<?php
	get_footer();
?>
