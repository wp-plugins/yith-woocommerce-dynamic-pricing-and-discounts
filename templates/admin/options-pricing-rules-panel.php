<?php
if ( !defined( 'ABSPATH' ) || ! defined( 'YITH_YWDPD_VERSION' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Template For Pricing Rules Free
 *
 * @package YITH WooCommerce Dynamic Pricing and Discounts
 * @since   1.0.0
 * @author  Yithemes
 */

$suffix_id = $id .'['. $key .']';
$suffix_name = $name .'['. $key .']';
?>
<div class="ywdpd-section section-<?php echo $key ?>">

    <div class="section-head">
        <span class="ywdpd-active activated" data-section="<?php echo $key ?>"></span>
        <?php echo  $description ?>
        <input type="hidden" name="<?php echo $suffix_name.'[description]' ?>" id="<?php echo $suffix_id.'[description]' ?>" value="<?php echo $description ?>">
        <input type="hidden" name="<?php echo $suffix_name.'[active]' ?>" id="<?php echo $suffix_id.'[active]' ?>" class="active-hidden-field" value="yes">
        <span class="ywdpd-remove" data-section="<?php echo $key ?>"></span>
    </div>

<div class="section-body">
    <table>

        <tr>
            <th>
                <label for="<?php echo $suffix_id .'[apply_to]' ?>"><?php _e( 'Apply to', 'ywdpd' ); ?></label>
            </th>
            <td>
                <select name="<?php echo $suffix_name ?>[apply_to]" id="<?php echo $suffix_id .'[apply_to]' ?>" class="yith-ywdpd-eventype-select">
                    <option value="all-products"><?php _e('All products', 'ywdpd') ?></option>
                    <option value="categories"><?php _e('Categories in list', 'ywdpd') ?></option>
                </select>
                <span class="desc-inline"><?php _e('Select the products to which applying the rule', 'ywdpd') ?></span>
            </td>
        </tr>
        <tr class="deps-apply_to">
            <th>
                <label for="<?php echo $suffix_id .'[categories]' ?>"><?php _e( 'Categories', 'ywdpd' ); ?></label>
            </th>
            <td>
                <select name="<?php echo $suffix_name ?>[categories][]" class="chosen ajax_chosen_select_categories" multiple="multiple" id="<?php echo $suffix_id .'[categories]' ?>"  data-placeholder="<?php _e('Search for a category','ywdpd') ?>">

                </select>
                <span class="desc-inline"><?php _e('Select the products to which applying the rule', 'ywdpd') ?></span>
            </td>
        </tr>

        <tr>
            <th>
                <?php _e( 'Discount Rules', 'ywdpd' ); ?>
            </th>
            <td>
                <table class="discount-rules">
                    <tr>
                        <th><?php _e('Minimum Quantity', 'ywdpd') ?></th>
                        <th><?php _e('Discount Amount', 'ywdpd') ?></th>
                    </tr>
                    <tr>
                        <td><input type="text" name="<?php echo $suffix_name.'[min_quantity]' ?>" id="<?php echo $suffix_id.'[min_quantity]' ?>" value="" placeholder="<?php _e('e.g. 5', 'ywdpd') ?>"></td>
                        <td><input type="text" name="<?php echo $suffix_name.'[discount_amount]' ?>" id="<?php echo $suffix_id.'[discount_amount]' ?>" value="" placeholder="<?php _e('e.g. 50', 'ywdpd') ?>"></td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>
</div>

</div>