<?php

/**
 * Add page templates.
 * Override by copying files from /maitheme-engine/templates/{filename}.php
 * and putting in /{child-theme-name}/templates/{filename}.php
 *
 * @since   1.0.0
 *
 * @param   array  $page_templates  The existing page templates.
 *
 * @return  array  $page_templates  The modified page templates.
 */
add_filter( 'theme_page_templates', 'mai_plugin_theme_page_templates' );
function mai_plugin_theme_page_templates( $page_templates ) {
	$page_templates['landing.php'] = __( 'Landing Page', 'maitheme' );
	$page_templates['sitemap.php'] = __( 'Sitemap', 'maitheme' );
	return $page_templates;
}

/**
 * Modify page based on selected page template.
 *
 * @since   1.0.0
 *
 * @param   string  $template  The path to the template being included.
 *
 * @return  string  $template  The modified template path to be included.
 */
add_filter( 'template_include', 'mai_plugin_include_theme_page_templates' );
function mai_plugin_include_theme_page_templates( $template ) {

	// Get current template
	$template_name = get_post_meta( get_the_ID(), '_wp_page_template', true );

	// Bail if not a template from our plugin
	if ( ! in_array( $template_name, array( 'landing.php', 'sitemap.php' ) ) ) {
		return $template;
	}

	// Get the child theme template path
	$_template = get_stylesheet_directory() . '/templates/' . $template_name;

	// If the template exists in the child theme
	if ( file_exists( $_template ) ) {
		// Use child theme template
		$template = $_template;
	} else {
		// Use our plugin template
		$plugin_path = MAITHEME_ENGINE_PLUGIN_PLUGIN_DIR . 'templates/';
		if ( file_exists( $plugin_path . $template_name ) ) {
			$template = $plugin_path . $template_name;
		}
	}
	return $template;
}