<?php
/**
 * Advanced settings area view for the plugin
 *
 * This file is used for rendering and saving plugin general settings.
 *
 * @link       http://www.wbcomdesigns.com
 * @since      1.0.0
 *
 * @package    Bp_Checkins_Pro
 * @subpackage Bp_Checkins_Pro/admin/partials
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="wbcom-wrapper-admin">
	<div class="wbcom-admin-title-section">
		<h3><?php esc_html_e( 'Group directory settings', 'bp-checkins' ); ?></h3>
	</div>
	<form method="post" action="options.php">
		<div class="wbcom-admin-option-wrap wbcom-admin-option-wrap-view">
			<div class="form-table">
				<div class="wbcom-settings-section-wrap">
					<div class="wbcom-settings-section-options-heading">
						<label>
							<?php esc_html_e( 'Display map on groups directory', 'bp-checkins' ); ?>
						</label>
						<p class="description"><?php esc_html_e( 'Enable this option, if you want to display map on BuddyPress groups directory page.', 'bp-checkins' ); ?></p>
					</div>
					<div class="wbcom-settings-section-options">
						<label class="wb-switch">
							<input type="checkbox" class="bpcp-switch-field" name="group_directory_settings[group_directory_map]"
							checked disabled>
							<div class="wb-slider wb-round"></div>
						</label>
					</div>
				</div>
				<div class="wbcom-settings-section-wrap">
					<div class="wbcom-settings-section-options-heading">
						<label>
							<?php esc_html_e( 'Enable proximity search on groups directory', 'bp-checkins' ); ?>
						</label>
						<p class="description"><?php esc_html_e( 'Enable this option, if you want to display groups proximity search in place of BuddyPress groups search.', 'bp-checkins' ); ?></p>
					</div>
					<div class="wbcom-settings-section-options">
						<label class="wb-switch">
							<input type="checkbox" class="bpcp-switch-field" name="group_directory_settings[group_directory_proximity_search]"
							checked disabled>
							<div class="wb-slider wb-round"></div>
						</label>
					</div>
				</div>
				<div class="wbcom-settings-section-wrap">
					<div class="wbcom-settings-section-options-heading">
						<label><?php esc_html_e( 'Distance Units', 'bp-checkins' ); ?></label>
					</div>
					<div class="wbcom-settings-section-options">
						<select class="bpchkpro-distance-units" name="group_directory_settings[distance_units]" disabled>
							<option value="miles" selected><?php esc_html_e( 'Miles', 'bp-checkins' ); ?></option>
						</select>
					</div>
				</div>
				<div class="wbcom-settings-section-wrap">
					<div class="wbcom-settings-section-options-heading">
						<label>
							<?php esc_html_e( 'Radius', 'bp-checkins' ); ?>
						</label>
						<p class="description"><?php esc_html_e( 'Enter a single numeric value to be used as the default, or multiple values, comma separated, that will be displayed as a dropdown select box in the search form.', 'bp-checkins' ); ?></p>
					</div>
					<div class="wbcom-settings-section-options">
						<input type="text" name="group_directory_settings[radius]" value="Radius" class="regular-text" disabled>
					</div>
				</div>
				<div class="wbcom-settings-section-wrap">
					<div class="wbcom-settings-section-options-heading">
						<label>
							<?php esc_html_e( 'Hide default search of groups directory.', 'bp-checkins' ); ?>
						</label>
						<p class="description"><?php esc_html_e( 'Enable this option, if you want to hide default search in groups directory.', 'bp-checkins' ); ?></p>
					</div>
					<div class="wbcom-settings-section-options">
						<label class="wb-switch">
							<input type="checkbox" class="bpcp-switch-field" name="group_directory_settings[group_directory_default_search]"
							checked disabled >
							<div class="wb-slider wb-round"></div>
						</label>
					</div>
				</div>
				<div class="wbcom-settings-section-wrap">
					<div class="wbcom-settings-section-options-heading">
						<label>
							<?php esc_html_e( 'Hide group(s) from directory map.', 'bp-checkins' ); ?>
						</label>
						<p class="description"><?php esc_html_e( 'Select those groups that you want to hide from groups directory google map.', 'bp-checkins' ); ?></p>
					</div>
					<div class="wbcom-settings-section-options">
						<select id="bpcp-exclude-group-map" name="group_directory_settings[bpcp_exclude_group_map][]" disabled >
							<option value="none" selected ><?php echo esc_html_e( 'Fashion', 'bp-checkins' ); ?></option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
	<?php
