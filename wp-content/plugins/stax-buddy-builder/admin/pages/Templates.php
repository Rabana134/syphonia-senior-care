<?php

namespace Buddy_Builder;

use Buddy_Builder\Template\Module;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Class Templates
 *
 * @package Buddy_Builder
 */
class Templates extends Base {

	/**
	 * Templates constructor.
	 */
	public function __construct() {
		$this->current_slug = 'templates';

		if ( Helpers::get_instance()->is_current_page( $this->current_slug ) ) {
			add_filter( BPB_HOOK_PREFIX . 'current_slug', [ $this, 'set_page_slug' ] );
			add_filter( BPB_HOOK_PREFIX . 'welcome_wrapper_class', [ $this, 'set_wrapper_classes' ] );

			add_action(
				BPB_HOOK_PREFIX . $this->current_slug . '_page_content_before',
				[
					$this,
					'save_notification',
				]
			);
			add_action( BPB_HOOK_PREFIX . $this->current_slug . '_page_content', [ $this, 'panel_content' ] );
		}

		add_filter( BPB_HOOK_PREFIX . 'admin_menu', [ $this, 'add_menu_item' ] );
	}

	/**
	 * Import template notification
	 */
	public function save_notification() {
		if ( isset( $_GET['bpb_import_status'] ) ) {
			if ( 'success' === sanitize_text_field( $_GET['bpb_import_status'] ) ) {
				Helpers::load_template(
					'admin/pages/templates/parts/notification-success',
					[
						'message' => __( 'YAY! The template was imported successfully!', 'stax-buddy-builder' ),
					]
				);
			} else {
				Helpers::load_template(
					'admin/pages/templates/parts/notification-error',
					[
						'message' => __( 'Oops! An error occurred while importing the template!', 'stax-buddy-builder' ),
					]
				);
			}
		}
	}

	/**
	 * Panel content
	 */
	public function panel_content() {

		$imported_templates = get_option( 'bpb_imported_templates' );

		$templates = [
			'starter-free' => [
				'name'        => 'Free Starter Template',
				'is_imported' => (bool) get_option( 'bpb_starter_kit_imported' ) || isset( $imported_templates['starter-kit'] ),
				'url'         => wp_nonce_url(
					add_query_arg(
						[
							'action'       => Module::IMPORT_KEY,
							'bpb_template' => 'starter-kit',
						]
					),
					Module::IMPORT_NONCE_KEY
				),
				'image'       => 'https://demo.staxwp.com/elementor-buddybuilder/wp-content/uploads/sites/3/2022/03/Starter-Kit.png',
				'demo'        => 'https://demo.staxwp.com/buddybuilder-starter-kit/',
			],
		];

		$templates = apply_filters( 'buddy_builder/admin/import_templates', $templates, $imported_templates );

		Helpers::load_template(
			'admin/pages/templates/' . $this->current_slug,
			[
				'templates' => $templates,
			]
		);
	}

	/**
	 * @param $menu
	 *
	 * @return array
	 */
	public function add_menu_item( $menu ) {
		$menu[] = [
			'slug'     => $this->current_slug,
			'name'     => __( 'Templates', 'stax-buddy-builder' ),
			'link'     => admin_url( 'admin.php?page=' . BPB_ADMIN_PREFIX . $this->current_slug ),
			'query'    => BPB_ADMIN_PREFIX . $this->current_slug,
			'priority' => 4,
		];

		return $menu;
	}

}

Templates::get_instance();
