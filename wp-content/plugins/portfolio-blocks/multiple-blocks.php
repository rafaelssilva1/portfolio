<?php

/**
 * Plugin Name:       portfolio Blocks
 * Description:       Portfolio custom blocks for gutenberg.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       portfolio-blocks
 *
 * @package           rafaelssilva
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 */
function portfolio_blocks_init()
{

	$blocks = array(
		'project-intro/',
		'project-image/',
		'project-details/',
		'project-featured/',
	);

	foreach ($blocks as $block) {
		register_block_type(plugin_dir_path(__FILE__) . 'includes/block-editor/blocks/' . $block);
	}
}
add_action('init', 'portfolio_blocks_init');

function custom_block_category($block_categories, $editor_context)
{
	if (!empty($editor_context->post)) {
		array_push(
			$block_categories,
			array(
				'slug'  => 'portfolio',
				'title' => __('Porfolio', 'portfolio-blocks'),
				'icon'  => null,
			)
		);
	}
	return $block_categories;
}

add_filter('block_categories_all', 'custom_block_category', 10, 2);
