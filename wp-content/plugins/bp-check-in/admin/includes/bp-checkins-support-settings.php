<?php
/**
 * BuddyPress Check-ins support tab file.
 *
 * @package Bp_Checkins
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="wbcom-faq-adming-setting">
	<div class="wbcom-admin-title-section">
		<h3><?php esc_html_e( 'Have some questions?', 'bp-checkins' ); ?></h3>
	</div>
	<div class="wbcom-faq-admin-settings-block">
		<div id="wbcom-faq-settings-section" class="wbcom-faq-table">
			<div class="wbcom-faq-section-row">
					<button class="wbcom-faq-accordion">
						<?php esc_html_e( 'Does this plugin require BuddyPress?', 'bp-checkins' ); ?>
					</button>
					<div class="wbcom-faq-panel">
						<p><?php esc_html_e( 'Yes, It needs you to have BuddyPress installed and activated.', 'bp-checkins' ); ?></p>
						<p><?php esc_html_e( 'You\'ll also get an admin notice and the plugin will become ineffective if the required plugin will not be there.', 'bp-checkins' ); ?></p>
					</div>
			</div>
			<div class="wbcom-faq-section-row">
				<div>
					<button class="wbcom-faq-accordion"><?php esc_html_e( 'What is the use of API Key option provided in general settings section?', 'bp-checkins' ); ?></button>
					<div class="wbcom-faq-panel">
						<p><?php esc_html_e( 'With the help of Google Places Api Key, user can check-in with places autocomplete while updating post in buddypress and list checked in location in google map.', 'bp-checkins' ); ?></p>
					</div>
				</div>
			</div>
			<div class="wbcom-faq-section-row">
				<div>
					<button class="wbcom-faq-accordion"><?php esc_html_e( 'Does this plugin require current location service?', 'bp-checkins' ); ?></button>
					<div class="wbcom-faq-panel">
						<p><?php esc_html_e( 'Yes, this plugin require location service and you can allow it from browser settings.', 'bp-checkins' ); ?></p>
					</div>
				</div>
			</div>
			<div class="wbcom-faq-section-row">
				<div>
					<button class="wbcom-faq-accordion"><?php esc_html_e( 'How to check-in using Location Autocomplete option provided in general settings section?', 'bp-checkins' ); ?></button>
					<div class="wbcom-faq-panel">
						<p><?php esc_html_e( 'Location Autocomplete setting provide an interface at activity page to post an update using google places autocomplete.', 'bp-checkins' ); ?></p>
						<p><?php esc_html_e( 'There is an option [Add as my location] to set current check-in location as a favourite location.', 'bp-checkins' ); ?></p>
					</div>
				</div>
			</div>
			<div class="wbcom-faq-section-row">
				<div>
					<button class="wbcom-faq-accordion"><?php esc_html_e( 'How to check-in using Place Types option provided in general settings section?', 'bp-checkins' ); ?></button>
					<div class="wbcom-faq-panel">
						<p><?php esc_html_e( 'Place Types setting provide an interface at activity page to post an update using selected google places types. Range option will set the range in kilometers for fetching the places during check-in.', 'bp-checkins' ); ?></p>
					</div>
				</div>
			</div>
			<div class="wbcom-faq-section-row">
				<div>
					<button class="wbcom-faq-accordion"><?php esc_html_e( 'Where can I see all check-ins activity?', 'bp-checkins' ); ?></button>
					<div class="wbcom-faq-panel">
						<p><?php esc_html_e( 'Check-ins filter option provides BuddyPress filter drop-down to list all check-ins activity.', 'bp-checkins' ); ?></p>
					</div>
				</div>
			</div>
			<div class="wbcom-faq-section-row">
				<div>
					<button class="wbcom-faq-accordion"><?php esc_html_e( 'Where can I see favourite locations?', 'bp-checkins' ); ?></button>
					<div class="wbcom-faq-panel">
						<p><?php esc_html_e( 'We are listing all favorite locations under Check-ins tab at BuddyPress profile page.', 'bp-checkins' ); ?></p>
					</div>
				</div>
			</div>
			<div class="wbcom-faq-section-row">
				<div>
					<button class="wbcom-faq-accordion"><?php esc_html_e( 'How to set location at profile page?', 'bp-checkins' ); ?></button>
					<div class="wbcom-faq-panel">
						<p><?php esc_html_e( 'The plugin provides xprofile location field to set location at BuddyPress edit profile page.', 'bp-checkins' ); ?></p>
					</div>
				</div>
			</div>
			<div class="wbcom-faq-section-row">
				<div>
					<button class="wbcom-faq-accordion"><?php esc_html_e( 'If I need to customize plugin, to whom I should contact?', 'bp-checkins' ); ?></button>
					<div class="wbcom-faq-panel">
						<p><?php esc_html_e( 'If you need additional help you can contact us at <a href="https://wbcomdesigns.com/contact/" target="_blank" title="Wbcom Designs">Wbcom Designs</a>.', 'bp-checkins' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
