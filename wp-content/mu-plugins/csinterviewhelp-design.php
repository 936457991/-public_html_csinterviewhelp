<?php
/**
 * CSInterviewHelp visual refresh.
 *
 * This is intentionally kept in mu-plugins so the design survives theme updates.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

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
			font-size: clamp(23px, 2.6vw, 30px);
			margin-top: 1.8em;
		}

		.single-post .entry-content h3 {
			font-size: 17px;
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

			.entry-content h2 {
				margin-top: 1.8em;
			}

			.single-post .entry-content h2 {
				font-size: 22px;
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
