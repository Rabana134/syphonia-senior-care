<?php

namespace Buddy_Builder\Widgets\ProfileGroup;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

use Buddy_Builder\Plugin;
use Elementor\Controls_Manager;

class Content extends \Buddy_Builder\Widgets\Base {

	public function get_name() {
		return 'bpb-profile-group-content';
	}

	public function get_title() {
		return esc_html__( 'Content', 'stax-buddy-builder' );
	}

	public function get_icon() {
		return 'bbl-groups-content sq-widget-label';
	}

	public function get_categories() {
		return [ 'buddy-builder-elements' ];
	}

	protected function register_controls() {
		if ( ! function_exists( 'bpb_is_pro' ) && ! bpb_is_buddyboss() ) {
			$this->start_controls_section(
				'go_pro_section',
				[
					'label' => __( 'Go PRO', 'stax-buddy-builder' ),
				]
			);

			$this->add_control(
				'go_pro_notice',
				[
					'type' => Controls_Manager::RAW_HTML,
					'raw'  => buddy_builder()->go_pro_template(
						[
							'title'    => __( 'BuddyBuilder PRO', 'stax-buddy-builder' ),
							'messages' => [
								__( 'Step up your game and customize your profile content with ease.', 'stax-buddy-builder' ),
							],
							'link'     => 'https://staxwp.com/go/buddybuilder-pro',
						]
					),
				]
			);

			$this->end_controls_section();
		}

		do_action( 'buddy_builder/widget/group-profile/settings', $this );
	}

	protected function render() {
		parent::render();
		if ( bpb_is_elementor_editor() ) {
			$template = bpb_load_preview_template( 'profile-group/content', [], false );
			echo apply_filters( 'buddy_builder/widget/group-profile/preview', $template, $this );
		} else {
			?>
			<div class="bp-wrap">
				<div id="item-body" class="item-body">
					<?php
					/*
					 * Returning a truthy value from the filter will effectively short-circuit the logic
					 */
					if ( apply_filters( 'buddy_builder/tpl/profile-group/content/render', true ) ) {
						bp_nouveau_group_template_part();
					}
					?>
				</div>
			</div>
			<?php
		}
	}

	public function render_plain_content() {
		return '';
	}

}
