<?php
$title = get_the_title();
?>

<div class="qodef-info-section-part qodef-tour-item-title-holder">
	<div class="qodef-title-wrapper">
		<?php if ( ! empty( $title ) ) { ?>
			<h3 class="qodef-tour-item-title" style="font-size: 45px !important;"><?php echo esc_html( $title ) ?></h3>
		<?php } ?>
		<div class="qodef-tour-item-price-holder" style="padding-top: 1%;">
			<span class="qodef-tour-item-price">
				<?php esc_html_e('Desde', 'setsail-tours'); ?> <?php echo dharma_tours_get_tour_price_single_item_html(get_the_ID()); ?>
			</span>
			<span class="qodef-tour-item-price-text">
				<?php esc_html_e('/ por persona', 'setsail-tours'); ?>
			</span>
		</div>
	</div>
	<?php if ( setsail_select_core_plugin_installed() ) {
		//echo setsail_core_list_review_details( 'average-count' );
	} ?>
</div>
