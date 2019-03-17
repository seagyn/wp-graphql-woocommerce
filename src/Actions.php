<?php

namespace WPGraphQL\Extensions\WooCommerce;

/**
 * Class Actions
 * 
 * static functions for executing actions on the GraphQL Schema
 * 
 * @package \WPGraphQL\Extensions\WooCommerce
 * @since   0.0.1
 */
class Actions
{
  /**
   * Register actions
   */
  public static function load() {
    /**
     * Register WooCommerce post-type fields
     */
    add_action( 'graphql_register_types', [ '\WPGraphQL\Extensions\WooCommerce\Type\Object\Coupon', 'register' ], 10 );
    add_action( 'graphql_register_types', [ '\WPGraphQL\Extensions\WooCommerce\Connection\Coupons', 'register_connections' ], 10 );
    add_action( 'graphql_register_types', [ '\WPGraphQL\Extensions\WooCommerce\Type\Object\Product', 'register' ], 10 );
    add_action( 'graphql_register_types', [ '\WPGraphQL\Extensions\WooCommerce\Connection\Products', 'register_connections' ], 10 );
  }
}