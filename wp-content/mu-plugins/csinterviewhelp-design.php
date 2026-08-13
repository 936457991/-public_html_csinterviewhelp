<?php
/**
 * CSInterviewHelp visual refresh.
 *
 * This is intentionally kept in mu-plugins so the design survives theme updates.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add a compact homepage hero without changing the page content stored in WordPress.
 */
function csinterviewhelp_home_hero() {
	if ( ! is_front_page() ) {
		return;
	}

	printf(
		'<section class="csi-home-hero" aria-labelledby="csi-home-hero-title">
			<span class="csi-home-hero__eyebrow">CSINTERVIEWHELP · INTERVIEW PREP</span>
			<h1 id="csi-home-hero-title">技术面试准备与求职陪跑</h1>
			<p>专注算法、系统设计、项目梳理、简历优化与模拟面试，帮助你把准备过程拆清楚、练扎实。</p>
			<div class="csi-home-hero__actions">
				<a href="%1$s">查看面试案例</a>
				<a href="%2$s">联系我们</a>
			</div>
		</section>',
		esc_url( home_url( '/面试案例/' ) ),
		esc_url( home_url( '/联系我们/' ) )
	);
}
add_action( 'generate_before_content', 'csinterviewhelp_home_hero', 5 );

function csinterviewhelp_design_styles() {
	?>
	<style id="csinterviewhelp-design">
		:root {
			--csi-ink: #101828;
			--csi-muted: #667085;
			--csi-blue: #2f6fed;
			--csi-blue-dark: #1e4fb8;
			--csi-border: #e6eaf0;
			--csi-surface: #ffffff;
			--csi-page: #f5f7fb;
			--csi-radius: 16px;
		}

		html {
			scroll-behavior: smooth;
		}

		body {
			background: var(--csi-page);
			color: var(--csi-ink);
			font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", sans-serif;
			font-size: 16px;
			line-height: 1.8;
		}

		#masthead,
		.site-header,
		#site-navigation,
		.main-navigation,
		.main-navigation .inside-navigation {
			background: #101828 !important;
			box-shadow: 0 8px 24px rgba(16, 24, 40, .12);
		}

		.site-header .inside-header,
		#site-navigation .inside-navigation {
			padding: 18px 32px;
		}

		.site-header .site-branding .main-title a,
		.site-header .site-branding .site-description,
		.main-navigation .main-nav ul li a,
		.main-navigation .menu-toggle {
			color: #fff !important;
		}

		.site-branding .main-title {
			font-size: clamp(22px, 2.4vw, 30px);
			font-weight: 750;
			letter-spacing: -.03em;
		}

		.main-navigation .main-nav ul li a {
			border-radius: 10px;
			color: #dbe5f5;
			font-size: 15px;
			font-weight: 600;
			margin: 0 3px;
			padding: 10px 15px;
			transition: background-color .2s ease, color .2s ease, transform .2s ease;
		}

		.main-navigation .main-nav ul li a:hover,
		.main-navigation .main-nav ul li.current-menu-item > a,
		.main-navigation .main-nav ul li.current_page_item > a {
			background: rgba(255, 255, 255, .12);
			color: #fff;
			transform: translateY(-1px);
		}

		.site-content {
			padding: 48px 24px 72px;
		}

		.content-area,
		.widget-area {
			min-width: 0;
		}

		.inside-article,
		.widget {
			background: var(--csi-surface);
			border: 1px solid var(--csi-border);
			border-radius: var(--csi-radius);
			box-shadow: 0 12px 34px rgba(16, 24, 40, .06);
		}

		.inside-article {
			padding: clamp(28px, 5vw, 64px);
		}

		.entry-header .entry-title {
			color: var(--csi-ink);
			font-size: clamp(34px, 5vw, 52px);
			font-weight: 800;
			letter-spacing: -.045em;
			line-height: 1.15;
			margin-bottom: 30px;
		}

		.entry-content {
			color: #344054;
			font-size: 17px;
			line-height: 1.85;
			max-width: 78ch;
		}

		.single-post .entry-content {
			font-size: 16px;
			line-height: 1.75;
		}

		.page .entry-content {
			font-size: 16px;
			line-height: 1.75;
		}

		.single-post .entry-header .entry-title {
			font-size: clamp(28px, 3.5vw, 40px);
			line-height: 1.2;
			margin-bottom: 18px;
		}

		.page .entry-header .entry-title {
			font-size: clamp(30px, 3.8vw, 42px);
			line-height: 1.2;
		}

		/* Keep the featured image prominent without letting it dominate the article. */
		.single-post .page-header-image-single {
			background: #f8fafc;
			border: 1px solid var(--csi-border);
			border-radius: 16px;
			margin: 0 0 18px;
			overflow: hidden;
			padding: 14px;
		}

		.single-post .page-header-image-single img {
			display: block;
			height: 240px;
			margin: 0 auto;
			object-fit: contain;
			width: 100%;
		}

		.entry-content h2,
		.entry-content h3 {
			color: var(--csi-ink);
			font-weight: 750;
			letter-spacing: -.025em;
			line-height: 1.3;
			margin-bottom: .65em;
		}

		.entry-content h2 {
			font-size: clamp(25px, 3vw, 34px);
			margin-top: 2.1em;
			margin-bottom: 1em;
			padding-left: 16px;
			position: relative;
		}

		.single-post .entry-content h2 {
			font-size: clamp(21px, 2.2vw, 26px);
			margin-top: 1.05em;
			margin-bottom: .45em;
		}

		.single-post .entry-content h3 {
			font-size: 16px;
			margin-top: 1em;
		}

		.page .entry-content h2 {
			font-size: clamp(22px, 2.4vw, 28px);
			margin-top: 1.35em;
		}

		.page .entry-content h3 {
			font-size: 17px;
		}

		.single-post .entry-content h3 + p {
			margin-bottom: 14px;
		}

		.entry-content h2::before {
			background: var(--csi-blue);
			border-radius: 4px;
			content: "";
			height: 70%;
			left: 0;
			position: absolute;
			top: 15%;
			width: 4px;
		}

		.entry-content h3 {
			background: #f8fafc;
			border: 1px solid var(--csi-border);
			border-radius: 14px 14px 0 0;
			font-size: 19px;
			margin-top: 1.6em;
			margin-bottom: 0;
			padding: 18px 22px 10px;
		}

		.entry-content h3 + p {
			background: #f8fafc;
			border: 1px solid var(--csi-border);
			border-top: 0;
			border-radius: 0 0 14px 14px;
			color: #475467;
			margin: 0 0 20px;
			padding: 0 22px 20px;
		}

		.entry-content p {
			margin: 0 0 1.35em;
		}

		.entry-content p:first-of-type {
			color: #475467;
			font-size: 19px;
			line-height: 1.75;
		}

		.single-post .entry-content p:first-of-type {
			font-size: 17px;
			line-height: 1.75;
		}

		.page .entry-content p:first-of-type {
			font-size: 17px;
			line-height: 1.75;
		}

		.single-post .entry-content img {
			background: #f8fafc;
			border: 1px solid var(--csi-border);
			border-radius: 14px;
			display: block;
			height: auto;
			margin: 24px auto;
			max-height: 360px;
			object-fit: contain;
			padding: 8px;
			width: auto;
		}

		.single-post .entry-content figure {
			margin: 24px 0;
			text-align: center;
		}

		.entry-content p + p {
			margin-top: .15em;
		}

		.entry-content ul,
		.entry-content ol {
			margin: 0 0 1.5em;
			padding-left: 1.35em;
		}

		.entry-content li {
			margin-bottom: .45em;
			padding-left: .25em;
		}

		.entry-content strong {
			color: var(--csi-ink);
			font-weight: 750;
		}

		.entry-content blockquote {
			background: #f0f5ff;
			border-left: 4px solid var(--csi-blue);
			border-radius: 0 12px 12px 0;
			color: #344054;
			margin: 1.8em 0;
			padding: 18px 22px;
		}

		.entry-content hr {
			border: 0;
			border-top: 1px solid var(--csi-border);
			margin: 2.5em 0;
		}

		.entry-content img {
			border-radius: 12px;
			height: auto;
			max-width: 100%;
		}

		.entry-content .wp-block-image {
			margin: 2em 0;
		}

		/* Service sections stay readable beside the existing sidebar. */
		.entry-content .csi-services,
		.entry-content .csi-why-us {
			box-sizing: border-box;
			margin: 0;
			padding: 24px 0 34px;
			width: 100%;
		}

		.entry-content .csi-why-us {
			background: #f8fafc;
			border: 1px solid var(--csi-border);
			border-radius: 18px;
			margin-top: 24px;
			padding: 30px 22px;
		}

		.entry-content .csi-section-heading {
			margin: 0 0 24px;
			max-width: 100%;
		}

		.entry-content .csi-eyebrow {
			color: var(--csi-blue);
			display: block;
			font-size: 12px;
			font-weight: 800;
			letter-spacing: .12em;
			line-height: 1.4;
		}

		.entry-content .csi-section-heading h2 {
			font-size: clamp(25px, 3vw, 34px);
			margin: 8px 0 10px;
			padding: 0;
		}

		.entry-content .csi-section-heading h2::before {
			display: none;
		}

		.entry-content .csi-section-heading p {
			color: var(--csi-muted);
			font-size: 15px;
			line-height: 1.65;
			margin: 0;
		}

		.entry-content .csi-service-grid,
		.entry-content .csi-feature-grid {
			display: grid;
			gap: 16px;
			grid-template-columns: repeat(2, minmax(0, 1fr));
		}

		.entry-content .csi-service-card,
		.entry-content .csi-feature-card {
			background: #fff;
			border: 1px solid var(--csi-border);
			box-sizing: border-box;
			border-radius: 14px;
			box-shadow: 0 8px 20px rgba(16, 24, 40, .05);
			min-width: 0;
			overflow-wrap: break-word;
			padding: 20px;
		}

		.entry-content .csi-service-card h3 {
			background: transparent;
			border: 0;
			border-radius: 0;
			font-size: 18px;
			line-height: 1.35;
			margin: 0 0 9px;
			padding: 0;
		}

		.entry-content .csi-service-card h3::before {
			display: none;
		}

		.entry-content .csi-service-card p,
		.entry-content .csi-feature-card p {
			background: transparent;
			border: 0;
			border-radius: 0;
			color: var(--csi-muted);
			font-size: 14px;
			line-height: 1.7;
			margin: 0;
			padding: 0;
		}

		.entry-content .csi-feature-card strong {
			color: var(--csi-ink);
			display: block;
			font-size: 17px;
			line-height: 1.35;
			margin-bottom: 8px;
		}

		.entry-content .csi-feature-card {
			border-top: 3px solid var(--csi-blue);
		}

		.widget-area .widget {
			padding: 24px;
		}

		.widget-area .widget + .widget {
			margin-top: 24px;
		}

		/* Keep the sidebar visible while reading long articles. */
		#right-sidebar .inside-right-sidebar {
			position: sticky;
			top: 48px;
		}

		.widget-title {
			color: var(--csi-ink);
			font-size: 21px;
			font-weight: 750;
			letter-spacing: -.02em;
			margin-bottom: 16px;
		}

		.widget-area p,
		.widget-area li {
			color: var(--csi-muted);
			font-size: 15px;
		}

		.search-form input[type="search"] {
			border: 1px solid #d0d5dd;
			border-radius: 10px 0 0 10px;
			min-height: 46px;
		}

		.search-form button {
			background: var(--csi-blue);
			border-radius: 0 10px 10px 0;
			min-height: 46px;
			padding-left: 18px;
			padding-right: 18px;
		}

		a {
			color: var(--csi-blue);
		}

		a:hover {
			color: var(--csi-blue-dark);
		}

		.site-footer,
		.site-footer .inside-footer-widgets,
		.site-footer .site-info {
			background: #101828;
			color: #98a2b3;
		}

		.site-footer a,
		.site-footer .footer-widgets {
			color: #dbe5f5;
		}

		.site-info {
			border-top: 1px solid rgba(255, 255, 255, .12);
			font-size: 14px;
			padding: 26px 24px;
		}

		/* Homepage landing-page layer. The existing page content remains intact. */
		.home .inside-article {
			padding-top: 30px;
		}

		.home .entry-header .entry-title {
			display: none;
		}

		.csi-home-hero {
			background: linear-gradient(135deg, #101828 0%, #1c3f78 100%);
			border-radius: 20px;
			box-shadow: 0 18px 42px rgba(16, 24, 40, .16);
			color: #fff;
			margin: 0 0 30px;
			overflow: hidden;
			padding: clamp(30px, 5vw, 56px);
			position: relative;
		}

		.csi-home-hero::after {
			background: radial-gradient(circle, rgba(83, 148, 255, .42), transparent 68%);
			content: "";
			height: 300px;
			position: absolute;
			right: -100px;
			top: -120px;
			width: 300px;
		}

		.csi-home-hero__eyebrow {
			color: #b9d2ff;
			display: block;
			font-size: 12px;
			font-weight: 800;
			letter-spacing: .14em;
			margin-bottom: 14px;
			position: relative;
			z-index: 1;
		}

		.csi-home-hero h1 {
			color: #fff;
			font-size: clamp(30px, 4.4vw, 50px);
			letter-spacing: -.045em;
			line-height: 1.18;
			margin: 0 0 16px;
			max-width: 720px;
			position: relative;
			z-index: 1;
		}

		.csi-home-hero p {
			color: #dbe8ff;
			font-size: 17px;
			line-height: 1.75;
			margin: 0;
			max-width: 650px;
			position: relative;
			z-index: 1;
		}

		.csi-home-hero__actions {
			display: flex;
			flex-wrap: wrap;
			gap: 12px;
			margin-top: 26px;
			position: relative;
			z-index: 1;
		}

		.csi-home-hero__actions a {
			border: 1px solid rgba(255, 255, 255, .26);
			border-radius: 10px;
			color: #fff;
			display: inline-block;
			font-size: 15px;
			font-weight: 700;
			padding: 10px 17px;
			text-decoration: none;
			transition: transform .2s ease, background-color .2s ease;
		}

		.csi-home-hero__actions a:first-child {
			background: #fff;
			color: #1e4fb8;
		}

		.csi-home-hero__actions a:hover {
			background: rgba(255, 255, 255, .14);
			color: #fff;
			transform: translateY(-2px);
		}

		.csi-home-section {
			border-bottom: 1px solid var(--csi-border);
			padding: 10px 0 24px;
		}

		.csi-home-section + .csi-home-section {
			padding-top: 24px;
		}

		.home .csi-home-section > h2 {
			margin-top: 0;
		}

		.home .csi-section-services,
		.home .csi-section-platforms {
			background: #f8fafc;
			border: 1px solid var(--csi-border);
			border-radius: 16px;
			margin-top: 22px;
			padding: 24px;
		}

		.home .csi-section-services p,
		.home .csi-section-platforms p {
			background: #fff;
			border: 1px solid var(--csi-border);
			border-radius: 12px;
			margin: 12px 0;
			padding: 14px 16px;
		}

		.home .csi-section-platforms strong,
		.home .csi-section-services strong {
			color: var(--csi-blue-dark);
		}

		.home .entry-content > h2 {
			border-bottom: 1px solid var(--csi-border);
			padding-bottom: 12px;
		}

		.home .entry-content > h2 + p {
			margin-bottom: 22px;
		}

		/* Compact metadata improves scanability on long interview posts. */
		.single-post .entry-meta {
			color: var(--csi-muted);
			font-size: 13px;
			margin-bottom: 18px;
		}

		.single-post .entry-meta a {
			font-weight: 600;
		}

		.single-post .cat-links,
		.single-post .tags-links {
			background: #f8fafc;
			border: 1px solid var(--csi-border);
			border-radius: 8px;
			display: inline-block;
			margin: 4px 6px 0 0;
			padding: 4px 9px;
		}

		.single-post .entry-footer {
			border-top: 1px solid var(--csi-border);
			margin-top: 30px;
			padding-top: 18px;
		}

		/* Sidebar remains in place, but its contact block reads as a clear CTA. */
		#right-sidebar .widget:nth-child(2) {
			border-top: 3px solid var(--csi-blue);
		}

		#right-sidebar .widget:nth-child(2) .widget-title {
			margin-bottom: 12px;
		}

		#right-sidebar .widget img {
			border-radius: 10px;
			display: block;
			margin: 12px auto;
			max-height: 260px;
			object-fit: contain;
			width: auto;
		}

		@media (max-width: 768px) {
			.home .inside-article {
				padding-top: 20px;
			}

			.csi-home-hero {
				border-radius: 15px;
				padding: 28px 22px;
			}

			.csi-home-hero p {
				font-size: 15px;
			}

			.home .csi-section-services,
			.home .csi-section-platforms {
				padding: 18px;
			}
		}

		@media (max-width: 768px) {
			.site-header .inside-header,
			#site-navigation .inside-navigation {
				padding: 16px 20px;
			}

			.site-content {
				padding: 24px 14px 48px;
			}

			.inside-article {
				padding: 28px 22px;
			}

			.entry-content {
				font-size: 16px;
				line-height: 1.8;
			}

			.single-post .entry-content {
				font-size: 15px;
				line-height: 1.7;
			}

			.page .entry-content {
				font-size: 15px;
				line-height: 1.7;
			}

			.entry-content h2 {
				margin-top: 1.8em;
			}

			.single-post .entry-content h2 {
				font-size: 20px;
				margin-top: .9em;
			}

			.page .entry-content h2 {
				font-size: 21px;
			}

			.single-post .page-header-image-single {
				margin-bottom: 14px;
				padding: 10px;
			}

			.single-post .page-header-image-single img {
				height: 170px;
			}

			.single-post .entry-content img {
				max-height: 260px;
			}

			.entry-content h3 {
				font-size: 17px;
				padding: 15px 17px 8px;
			}

			.entry-content h3 + p {
				padding: 0 17px 17px;
			}

			.entry-content .csi-service-grid,
			.entry-content .csi-feature-grid {
				grid-template-columns: 1fr;
			}

			#right-sidebar .inside-right-sidebar {
				position: static;
			}

			.entry-content .csi-why-us {
				padding: 24px 16px;
			}

			.main-navigation .main-nav ul li a {
				border-radius: 8px;
				margin: 2px 0;
			}
		}
	</style>
	<?php
}
add_action( 'wp_head', 'csinterviewhelp_design_styles', 100 );
