<?php
/*
 * Plugin Name: UI: WooCommerce Support for Breadcrumbs
 * Plugin URI: http://wordpress.lowtone.nl/plugins/ui-breadcrumbs-woocommerce/
 * Description: Update trail options for WooComerce.
 * Version: 1.0
 * Author: Lowtone <info@lowtone.nl>
 * Author URI: http://lowtone.nl
 * License: http://wordpress.lowtone.nl/license
 */
/**
 * @author Paul van der Meijs <code@lowtone.nl>
 * @copyright Copyright (c) 2013, Paul van der Meijs
 * @license http://wordpress.lowtone.nl/license/
 * @version 1.0
 * @package wordpress\plugins\lowtone\ui\breadcrumbs\woocommerce
 */

namespace lowtone\ui\breadcrumbs\woocommerce {

	add_filter("lowtone_ui_breadcrumbs_trail_default_options", function($options) {
		$mainTaxonomies = $options["main_taxonomies"];

		$mainTaxonomies["product"] = "product_cat";

		$options["main_taxonomies"] = $mainTaxonomies;

		return $options;
	});

}