<?php

namespace Buddy_Builder\Widgets\GroupsDirectory;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;

class Listing extends \Buddy_Builder\Widgets\Base {

	public function get_name() {
		return 'bpb-groups-directory-list';
	}

	public function get_title() {
		return esc_html__( 'Groups Listing', 'stax-buddy-builder' );
	}

	public function get_icon() {
		return 'bbl-groups-list sq-widget-label';
	}

	public function get_categories() {
		return [ 'buddy-builder-elements' ];
	}

	protected function register_controls() {

		do_action( 'buddy_builder/widget/groups-directory/listing/settings', $this );

		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Settings', 'stax-buddy-builder' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_responsive_control(
			'columns',
			[
				'label'           => __( 'Columns', 'stax-buddy-builder' ),
				'type'            => Controls_Manager::SELECT,
				'options'         => [
					'1' => __( 'One', 'stax-buddy-builder' ),
					'2' => __( 'Two', 'stax-buddy-builder' ),
					'3' => __( 'Three', 'stax-buddy-builder' ),
					'4' => __( 'Four', 'stax-buddy-builder' ),
				],
				'devices'         => [ 'desktop', 'tablet', 'mobile' ],
				'desktop_default' => '3',
				'tablet_default'  => '2',
				'mobile_default'  => '1',
			]
		);

		$this->add_responsive_control(
			'listing_v_spacing_one',
			[
				'label'      => __( 'Spacing', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range'      => [
					'px' => [
						'max' => 100,
					],
				],
				'default'    => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors'  => [
					'{{WRAPPER}} #groups-list.bp-list > li:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'condition'  => [
					'columns' => '1',
				],
			]
		);

		$this->add_responsive_control(
			'listing_v_spacing_two',
			[
				'label'      => __( 'Vertical Spacing', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range'      => [
					'px' => [
						'max' => 100,
					],
				],
				'default'    => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors'  => [
					'{{WRAPPER}} #groups-list.grid-two > li' => 'padding-bottom: {{SIZE}}{{UNIT}};',
				],
				'condition'  => [
					'columns' => '2',
				],
			]
		);

		$this->add_responsive_control(
			'listing_h_spacing_two',
			[
				'label'      => __( 'Horizontal Spacing', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range'      => [
					'px' => [
						'max' => 50,
					],
				],
				'default'    => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors'  => [
					'{{WRAPPER}} #groups-list.grid-two' => 'margin-left: -{{SIZE}}{{UNIT}}; margin-right: -{{SIZE}}{{UNIT}};',
					'{{WRAPPER}} #groups-list.grid-two > li' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
				],
				'condition'  => [
					'columns' => '2',
				],
			]
		);

		$this->add_responsive_control(
			'listing_v_spacing_three',
			[
				'label'      => __( 'Vertical Spacing', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range'      => [
					'px' => [
						'max' => 100,
					],
				],
				'default'    => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors'  => [
					'{{WRAPPER}} #groups-list.grid-three > li' => 'padding-bottom: {{SIZE}}{{UNIT}};',
				],
				'condition'  => [
					'columns' => '3',
				],
			]
		);

		$this->add_responsive_control(
			'listing_h_spacing_three',
			[
				'label'      => __( 'Horizontal Spacing', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range'      => [
					'px' => [
						'max' => 75,
					],
				],
				'default'    => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors'  => [
					'{{WRAPPER}} #groups-list.grid-three' => 'margin-left: -{{SIZE}}{{UNIT}}; margin-right: -{{SIZE}}{{UNIT}};',
					'{{WRAPPER}} #groups-list.grid-three > li' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
				],
				'condition'  => [
					'columns' => '3',
				],
			]
		);

		$this->add_responsive_control(
			'listing_v_spacing_four',
			[
				'label'      => __( 'Vertical Spacing', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range'      => [
					'px' => [
						'max' => 100,
					],
				],
				'default'    => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors'  => [
					'{{WRAPPER}} #groups-list.grid-four > li' => 'padding-bottom: {{SIZE}}{{UNIT}};',
				],
				'condition'  => [
					'columns' => '4',
				],
			]
		);

		$this->add_responsive_control(
			'listing_h_spacing_four',
			[
				'label'      => __( 'Horizontal Spacing', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range'      => [
					'px' => [
						'max' => 50,
					],
				],
				'default'    => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors'  => [
					'{{WRAPPER}} #groups-list.grid-four' => 'margin-left: -{{SIZE}}{{UNIT}}; margin-right: -{{SIZE}}{{UNIT}};',
					'{{WRAPPER}} #groups-list.grid-four > li' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
				],
				'condition'  => [
					'columns' => '4',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_groups_icons_content',
			[
				'label' => __( 'Groups Icon', 'stax-buddy-builder' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'public_group_icon_sate',
			[
				'label'        => __( 'Public group icon', 'stax-buddy-builder' ),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __( 'Show', 'stax-buddy-builder' ),
				'label_off'    => __( 'Hide', 'stax-buddy-builder' ),
				'return_value' => 'yes',
				'default'      => '',
			]
		);

		$this->add_control(
			'public_group_icon',
			[
				'label'     => __( 'Show Yes', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::HIDDEN,
				'default'   => '1',
				'selectors' => [
					'{{WRAPPER}} .item-entry.public .item-avatar > a:after' => 'content: "\e90f";',
				],
				'condition' => [
					'public_group_icon_sate' => 'yes',
				],
			]
		);

		$this->add_control(
			'private_group_icon_sate',
			[
				'label'        => __( 'Private group icon', 'stax-buddy-builder' ),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __( 'Show', 'stax-buddy-builder' ),
				'label_off'    => __( 'Hide', 'stax-buddy-builder' ),
				'return_value' => 'yes',
				'default'      => '',
			]
		);

		$this->add_control(
			'private_group_icon',
			[
				'label'     => __( 'Show Yes', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::HIDDEN,
				'default'   => '1',
				'selectors' => [
					'{{WRAPPER}} .item-entry.private .item-avatar > a:after' => 'content: "\e929";',
				],
				'condition' => [
					'private_group_icon_sate' => 'yes',
				],
			]
		);

		$this->add_control(
			'hidden_group_icon_sate',
			[
				'label'        => __( 'Hidden group icon', 'stax-buddy-builder' ),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __( 'Show', 'stax-buddy-builder' ),
				'label_off'    => __( 'Hide', 'stax-buddy-builder' ),
				'return_value' => 'yes',
				'default'      => '',
			]
		);

		$this->add_control(
			'hidden_group_icon',
			[
				'label'     => __( 'Show Yes', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::HIDDEN,
				'default'   => '1',
				'selectors' => [
					'{{WRAPPER}} .item-entry.hidden .item-avatar > a:after' => 'content: "\e915";',
				],
				'condition' => [
					'hidden_group_icon_sate' => 'yes',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Listing Groups', 'stax-buddy-builder' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name'     => 'list_item_background',
				'label'    => __( 'Background', 'stax-buddy-builder' ),
				'types'    => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} #groups-list > li > .list-wrap',
			]
		);

		$this->start_controls_tabs( 'tabs_listing_style' );

		$this->start_controls_tab(
			'tab_listing_normal',
			[
				'label' => __( 'Normal', 'stax-buddy-builder' ),
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'listing_box_shadow',
				'selector' => '{{WRAPPER}} #groups-list > li > .list-wrap',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_listing_hover',
			[
				'label' => __( 'Hover', 'stax-buddy-builder' ),
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'listing_box_shadow_hover',
				'selector' => '{{WRAPPER}} #groups-list > li > .list-wrap:hover',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_control(
			'hr_listing',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'      => 'listing_border',
				'selector'  => '{{WRAPPER}} #groups-list > li > .list-wrap',
				'condition' => [
					'columns!' => '1',
				],
			]
		);

		$this->add_control(
			'listing_border_radius',
			[
				'label'      => esc_html__( 'Border Radius', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} #groups-list > li > .list-wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'columns!' => '1',
				],
			]
		);

		$this->add_responsive_control(
			'listing_padding',
			[
				'label'      => __( 'Padding', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} #groups-list > li > .list-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'columns!' => '1',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'      => 'listing_border_one',
				'selector'  => '{{WRAPPER}} #groups-list > li',
				'condition' => [
					'columns' => '1',
				],
			]
		);

		$this->add_control(
			'listing_border_radius_one',
			[
				'label'      => esc_html__( 'Border Radius', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} #groups-list > li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'columns' => '1',
				],
			]
		);

		$this->add_responsive_control(
			'listing_padding_one',
			[
				'label'      => __( 'Padding', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} #groups-list > li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'columns' => '1',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_groups_icons_style',
			[
				'label' => __( 'Groups Icon', 'stax-buddy-builder' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'group_icon_color',
			[
				'label'     => __( 'Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .item-entry .item-avatar > a:after' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'group_icon_background_color',
			[
				'label'     => __( 'Background Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .item-entry .item-avatar > a:after' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'      => 'group_icon_border',
				'selector'  => '{{WRAPPER}} .item-entry .item-avatar > a:after',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'group_icon_v_position',
			[
				'label'      => __( 'Vertical position', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'separator'  => 'before',
				'range'      => [
					'%' => [
						'max' => 100,
					],
				],
				'default'    => [
					'unit' => '%',
					'size' => 16,
				],
				'selectors'  => [
					'{{WRAPPER}} .item-entry .item-avatar > a:after' => 'top: calc({{SIZE}}{{UNIT}} - 0.75em);',
				],
			]
		);

		$this->add_control(
			'group_icon_h_position',
			[
				'label'      => __( 'Horizontal position', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'range'      => [
					'%' => [
						'max' => 100,
					],
				],
				'default'    => [
					'unit' => '%',
					'size' => 16,
				],
				'selectors'  => [
					'{{WRAPPER}} .item-entry .item-avatar > a:after' => 'right: calc({{SIZE}}{{UNIT}} - 0.75em);',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_pag_top_style',
			[
				'label' => __( 'Pagination Top', 'stax-buddy-builder' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'show_pag_top',
			[
				'label'        => __( 'Show', 'stax-buddy-builder' ),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __( 'Show', 'stax-buddy-builder' ),
				'label_off'    => __( 'Hide', 'stax-buddy-builder' ),
				'return_value' => 'flex',
				'default'      => 'flex',
			]
		);

		$this->add_control(
			'show_pag_top_flex',
			[
				'label'     => __( 'Show Yes', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::HIDDEN,
				'default'   => '1',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top' => 'display: flex; align-items: center; justify-content: space-between;',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'show_pag_top_hide',
			[
				'label'     => __( 'Show No', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::HIDDEN,
				'default'   => '1',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top' => 'display: none; align-items: center; justify-content: space-between;',
				],
				'condition' => [
					'show_pag_top!' => 'flex',
				],
			]
		);

		$this->add_responsive_control(
			'pag_top_spacing',
			[
				'label'     => __( 'Bottom Space', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => [
					'px' => [
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_background_color',
			[
				'label'     => __( 'Background Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'      => 'pag_top_box_shadow',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.top',
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'      => 'pag_top_border',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.top',
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_border_radius',
			[
				'label'      => esc_html__( 'Border Radius', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_responsive_control(
			'pag_top_padding',
			[
				'label'      => __( 'Padding', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'hr',
			[
				'type'      => Controls_Manager::DIVIDER,
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label'     => __( 'Text Typography', 'stax-buddy-builder' ),
				'name'      => 'pag_top_typography',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.top .pag-count.top',
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_color',
			[
				'label'     => __( 'Text Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .pag-count.top' => 'color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'hr2',
			[
				'type'      => Controls_Manager::DIVIDER,
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_defaults',
			[
				'label'     => __( 'Top Nav Basic Style', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::HIDDEN,
				'default'   => '1',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top .page-numbers' => 'padding: 6px 0; text-align: center; display: inline-block;',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_link_spacing',
			[
				'label'     => __( 'Links Spacing', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => [
					'px' => [
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top .page-numbers'            => 'margin-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top .page-numbers:last-child' => 'margin-right: 0;',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label'     => __( 'Link Typography', 'stax-buddy-builder' ),
				'name'      => 'pag_top_link_typography',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top span, {{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top a',
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->start_controls_tabs( 'tabs_pag_top_link_style' );

		$this->start_controls_tab(
			'tab_pag_top_link_normal',
			[
				'label'     => __( 'Normal', 'stax-buddy-builder' ),
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_link_text_color',
			[
				'label'     => __( 'Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top a' => 'color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_link_bg_color',
			[
				'label'     => __( 'Background Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top a' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'label'     => __( 'Shadow', 'stax-buddy-builder' ),
				'name'      => 'pag_top_link_shadow',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top a, {{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top span',
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_pag_top_link_hover',
			[
				'label'     => __( 'Hover', 'stax-buddy-builder' ),
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_link_text_hover_color',
			[
				'label'     => __( 'Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top a:hover' => 'color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_link_hover_bg_color',
			[
				'label'     => __( 'Background Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top a:hover' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_link_hover_border_color',
			[
				'label'     => __( 'Border Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top a:hover' => 'border-color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'label'     => __( 'Shadow', 'stax-buddy-builder' ),
				'name'      => 'pag_top_link_hover_shadow',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top a:hover',
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_pag_top_link_current',
			[
				'label'     => __( 'Current', 'stax-buddy-builder' ),
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_link_current_color',
			[
				'label'     => __( 'Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top span.page-numbers' => 'color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_link_current_bg_color',
			[
				'label'     => __( 'Background Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top span.page-numbers' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_link_current_border_color',
			[
				'label'     => __( 'Border Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top span.page-numbers' => 'border-color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'label'     => __( 'Link Border', 'stax-buddy-builder' ),
				'name'      => 'pag_top_link_border',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top .page-numbers',
				'condition' => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_top_link_border_radius',
			[
				'label'      => esc_html__( 'Link Border Radius', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top .page-numbers' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->add_responsive_control(
			'pag_top_link_padding',
			[
				'label'      => __( 'Link Padding', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.top .bp-pagination-links.top .page-numbers' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'show_pag_top' => 'flex',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_pag_bottom_style',
			[
				'label' => __( 'Pagination Bottom', 'stax-buddy-builder' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'show_pag_bottom',
			[
				'label'        => __( 'Show', 'stax-buddy-builder' ),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __( 'Show', 'stax-buddy-builder' ),
				'label_off'    => __( 'Hide', 'stax-buddy-builder' ),
				'return_value' => 'flex',
				'default'      => 'flex',
			]
		);

		$this->add_control(
			'show_pag_bottom_flex',
			[
				'label'     => __( 'Show Yes', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::HIDDEN,
				'default'   => '1',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom' => 'display: flex; align-items: center; justify-content: space-between;',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'show_pag_bottom_hide',
			[
				'label'     => __( 'Show No', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::HIDDEN,
				'default'   => '1',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom' => 'display: none; align-items: center; justify-content: space-between;',
				],
				'condition' => [
					'show_pag_bottom!' => 'flex',
				],
			]
		);

		$this->add_responsive_control(
			'pag_bottom_spacing',
			[
				'label'     => __( 'Bottom Space', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => [
					'px' => [
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_background_color',
			[
				'label'     => __( 'Background Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'      => 'pag_bottom_box_shadow',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.bottom',
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'      => 'pag_bottom_border',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.bottom',
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_border_radius',
			[
				'label'      => esc_html__( 'Border Radius', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_responsive_control(
			'pag_bottom_padding',
			[
				'label'      => __( 'Padding', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'hr3',
			[
				'type'      => Controls_Manager::DIVIDER,
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label'     => __( 'Text Typography', 'stax-buddy-builder' ),
				'name'      => 'pag_bottom_typography',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .pag-count.bottom',
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_color',
			[
				'label'     => __( 'Text Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .pag-count.bottom' => 'color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'hr4',
			[
				'type'      => Controls_Manager::DIVIDER,
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_defaults',
			[
				'label'     => __( 'Bot Nav Basic Style', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::HIDDEN,
				'default'   => '1',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom .page-numbers' => 'padding: 6px 0; text-align: center; display: inline-block;',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_link_spacing',
			[
				'label'     => __( 'Links Spacing', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => [
					'px' => [
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom .page-numbers'            => 'margin-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom .page-numbers:last-child' => 'margin-right: 0;',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label'     => __( 'Link Typography', 'stax-buddy-builder' ),
				'name'      => 'pag_bottom_link_typography',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom span, {{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom a',
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->start_controls_tabs( 'tabs_pag_bottom_link_style' );

		$this->start_controls_tab(
			'tab_pag_bottom_link_normal',
			[
				'label'     => __( 'Normal', 'stax-buddy-builder' ),
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_link_text_color',
			[
				'label'     => __( 'Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom a' => 'color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_link_bg_color',
			[
				'label'     => __( 'Background Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom a' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'label'     => __( 'Shadow', 'stax-buddy-builder' ),
				'name'      => 'pag_bottom_link_shadow',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom a, {{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom span',
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_pag_bottom_link_hover',
			[
				'label'     => __( 'Hover', 'stax-buddy-builder' ),
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_link_text_hover_color',
			[
				'label'     => __( 'Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom a:hover' => 'color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_link_hover_bg_color',
			[
				'label'     => __( 'Background Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom a:hover' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_link_hover_border_color',
			[
				'label'     => __( 'Border Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom a:hover' => 'border-color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'label'     => __( 'Shadow', 'stax-buddy-builder' ),
				'name'      => 'pag_bottom_link_hover_shadow',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom a:hover',
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_pag_bottom_link_current',
			[
				'label'     => __( 'Current', 'stax-buddy-builder' ),
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_link_current_color',
			[
				'label'     => __( 'Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom span.page-numbers' => 'color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_link_current_bg_color',
			[
				'label'     => __( 'Background Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom span.page-numbers' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_link_current_border_color',
			[
				'label'     => __( 'Border Color', 'stax-buddy-builder' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom span.page-numbers' => 'border-color: {{VALUE}};',
				],
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'label'     => __( 'Link Border', 'stax-buddy-builder' ),
				'name'      => 'pag_bottom_link_border',
				'selector'  => '{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom .page-numbers',
				'condition' => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_control(
			'pag_bottom_link_border_radius',
			[
				'label'      => esc_html__( 'Link Border Radius', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom .page-numbers' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->add_responsive_control(
			'pag_bottom_link_padding',
			[
				'label'      => __( 'Link Padding', 'stax-buddy-builder' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} #groups-dir-list .bp-pagination.bottom .bp-pagination-links.bottom .page-numbers' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition'  => [
					'show_pag_bottom' => 'flex',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		parent::render();
		$settings = $this->get_settings_for_display();

		?>
		<?php if ( bpb_is_elementor_editor() ) : ?>
			<?php
			bpb_load_preview_template(
				'groups-directory/listing',
				[
					'columns' => [
						'desktop' => isset( $settings['columns'] ) && $settings['columns'] ? $settings['columns'] : 3,
						'tablet'  => isset( $settings['columns_tablet'] ) && $settings['columns_tablet'] ? $settings['columns_tablet'] : 2,
						'mobile'  => isset($settings['columns_mobile']) && $settings['columns_mobile'] ? $settings['columns_mobile'] : 1,
					],
				]
			);
			?>
		<?php else : ?>
			<div id="groups-dir-list" class="groups dir-list" data-bp-list="groups">
				<div id="bp-ajax-loader"><?php bp_nouveau_user_feedback( 'directory-groups-loading' ); ?></div>
			</div>
		<?php endif; ?>
		<?php
	}

}
