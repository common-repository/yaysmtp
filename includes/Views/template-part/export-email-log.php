<?php
use YaySMTP\Helper\Utils;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$general_fields    = Utils::getGeneralFieldsExport();
$additional_fields = Utils::getAdditionalFieldsExport();
$search_fields = array(
	'email_to' 	   => esc_html__( 'To Email', 'yay-smtp' ),
	'subject' 	   => esc_html__( 'Subject', 'yay-smtp' ),
	'body_content' => esc_html__( 'Content', 'yay-smtp' ),
	'root_name'    => esc_html__( 'Generated by', 'yay-smtp' )
)
?>

<div class="yay-smtp-card-body yay-smtp-export-email-log-wrap">
	<div class="setting-el">
		<div class="setting-label">
			<label><?php echo esc_html__( 'Export Email Log', 'yay-smtp' ); ?></label>
		</div>
		<div class="yay-smtp-card">
			<div class="yay-smtp-card-body">
				<label><?php echo esc_html__( 'Select fields to export email log in CSV (.csv)', 'yay-smtp' ); ?></label>	
				<div class="yay-smtp-card-body-child">
					<!-- General Fields -->
					<div class="setting-label">
						<label><?php echo esc_html__( 'General Fields', 'yay-smtp' ); ?></label>
					</div>
					<?php foreach( $general_fields as $val => $label  ) { 
						$inputId = 'yaysmtp_export_log_settings_' . $val;	
					?>
					<div class="yaysmtp-export-log-setting-el">
						<div class="additional-settings-title">
							<input class="yaysmtp-export-log-general-field-input" id="<?php echo esc_attr( $inputId ); ?>" type="checkbox" value="<?php echo esc_attr( $val ); ?>" checked />
						</div>
						<div>
							<label for="<?php echo esc_attr( $inputId ); ?>">
							<?php echo $label; ?>
							</label>
						</div>
					</div>
					<?php } ?>

					<!-- Additional Fields -->
					<div class="setting-label">
						<label><?php echo esc_html__( 'Additional Fields', 'yay-smtp' ); ?></label>
					</div>
					<?php foreach( $additional_fields as $val => $label  ) { 
						$inputId = 'yaysmtp_export_log_settings_' . $val;	
					?>
					<div class="yaysmtp-export-log-setting-el">
						<div class="additional-settings-title">
							<input class="yaysmtp-export-log-additional-field-input" id="<?php echo esc_attr( $inputId ); ?>" type="checkbox" value="<?php echo esc_attr( $val ); ?>" <?php echo 'mailer' === $val ? 'checked' : ''; ?> />
						</div>
						<div>
							<label for="<?php echo esc_attr( $inputId ); ?>">
							<?php echo $label; ?>
							</label>
						</div>
					</div>
					<?php } ?>

					<!-- Date Range -->
					<div class="setting-label">
						<label><?php echo esc_html__( 'Date Range', 'yay-smtp' ); ?></label>
					</div>
					<div class="yaysmtp-export-log-setting-el yaysmtp-export-log-daterangepicker-wrap">
						<div class="dashicons dashicons-calendar"></div>
						<input readonly id="yaysmtp_daterangepicker_export_mail_logs" type="text" value="" placeholder="<?php echo esc_html__( 'Select date range', 'yay-smtp' ); ?>"/>
					</div>

					<!-- Search -->
					<div class="setting-label">
						<label><?php echo esc_html__( 'Search', 'yay-smtp' ); ?></label>
					</div>
					<div class="yaysmtp-export-log-setting-el yaysmtp-export-log-search-wrap">
						<div class="yaysmtp-export-log-search-key-wrap">
							<select class="yaysmtp-export-log-search-key">
								<?php
								foreach ( $search_fields as $val => $label ) {
									echo '<option value="' . esc_attr( $val ) . '">' . $label . '</option>';
								}
							?>
							</select>
						</div>
						<input class="yaysmtp-export-log-search-value" >
					</div>
				</div>
				<div>
					<button type="button" class="yay-smtp-button-secondary yaysmtp-export-email-log-btn"><?php echo esc_html__( 'Export', 'yay-smtp' ); ?></button>
				</div>
			</div>
		</div>
	</div>
</div>





