<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<?php if (is_home() || is_front_page()) : ?>
		<title>title</title>

	<?php else : ?>
		<title><?php echo trim(wp_title('', false)); ?> | title</title>
	<?php endif; ?>

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"> -->

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?_<?php microtime(); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style_pc.css?_<?php microtime(); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style_mobile.css?_<?php microtime(); ?>">

	<script src="<?php echo get_template_directory_uri(); ?>/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/common.js"></script>
</head>

<body>
	<header class="saiyu-custom-header">
		<div class="saiyu-logo-wrapper">
			<a href="/">
				<img style="width: 270px" class="logo" src="https://saisyutechno.infinityfree.me/wp-content/uploads/2025/11/logo.png" alt="Saisyu Techno Logo">
			</a>
		</div>

		<nav class="saiyu-nav-wrapper">

			<div class="saiyu-cta-wrapper">
				<ul>
					<li><a href="#">Cam kết</a></li>
					<li><a href="#">Thiết bị</a></li>
					<li><a href="#">Triển khai</a></li>
					<li><a href="#">Công ty</a></li>
					<li><a href="#">Chuyên mục</a></li>
					<li><a href="#">Tin tức</a></li>
				</ul>
				<a href="/">
					<img style="width: 100px"
						class="contact"
						src="<?php echo get_template_directory_uri(); ?>/images/btn_contact.png"
						alt="Saisyu Techno Logo">
				</a>

			</div>
		</nav>



	</header>