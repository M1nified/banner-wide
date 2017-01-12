<?php namespace banner_wide;
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
function banner_wide_widget_load(){
    register_widget(__NAMESPACE__.'\banner_wide_widget');
}
add_action('widgets_init',__NAMESPACE__.'\banner_wide_widget_load');
class banner_wide_widget extends \WP_Widget{
    function __construct(){
        parent::__construct(
            'banner_wide_widget',
            __('Banner Wide','banner_wide_domain'),
            array(
                'description' => __('Creates wide banner.','banner_wide_domain')
            )
        );
    }

}