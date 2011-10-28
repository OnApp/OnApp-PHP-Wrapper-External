<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Managing CDN Resources
 *
 *
 * @category	API WRAPPER
 * @package		OnApp
 * @author		Yakubskiy Yuriy
 * @copyright	(c) 2011 OnApp
 * @link		http://www.onapp.com/
 * @see			OnApp
 */

/**
 * Managing CDN Resource
 *
 * The CDN Resource class represents the CDN Resources.
 * The ONAPP_CDNResource class is the parent of the OnApp class.
 *
 * The CDNResource uses the following basic methods:
 * {@link load}, {@link save}, {@link delete}, and {@link getList}.
 *
 */
class OnApp_CDNResource extends OnApp {
	/**
	 * root tag used in the API request
	 *
	 * @var string
	 */
	var $_tagRoot = 'cdn_resource';

	/**
	 * alias processing the object data
	 *
	 * @var string
	 */
	var $_resource = 'cdn_resources';

	public function __construct() {
		parent::__construct();
		$this->className = __CLASS__;
	}

	/**
	 * API Fields description
	 *
	 * @param string|float $version OnApp API version
	 * @param string $className current class' name
	 * @return array
	 */
	public function initFields( $version = null, $className = '' ) {
		switch( $version ) {
			case '2.3':
				$this->fields = array(
                    'created_at' => array(
						ONAPP_FIELD_MAP => '_created_at',
						ONAPP_FIELD_TYPE => 'string',
						ONAPP_FIELD_READ_ONLY => true
					),
                    'resource_type' => array(
						ONAPP_FIELD_MAP => '_resource_type',
						ONAPP_FIELD_TYPE => 'string',
					),
                    'updated_at' => array(
						ONAPP_FIELD_MAP => '_updated_at',
						ONAPP_FIELD_TYPE => 'string',
						ONAPP_FIELD_READ_ONLY => true
					),
					'id' => array(
						ONAPP_FIELD_MAP => '_id',
						ONAPP_FIELD_TYPE => 'integer',
						ONAPP_FIELD_READ_ONLY => true,
					),
					'user_id' => array(
						ONAPP_FIELD_MAP => '_user_id',
						ONAPP_FIELD_TYPE => 'integer',
					),
					'cdn_hostname' => array(
						ONAPP_FIELD_MAP => '_cdn_hostname',
						ONAPP_FIELD_TYPE => 'string',
                        //ONAPP_FIELD_REQUIRED => true,
					),
                    'aflexi_resource_id' => array(
						ONAPP_FIELD_MAP => '_aflexi_resource_id',
						ONAPP_FIELD_TYPE => 'integer',
					),

                    // fields to create CDN Resource
                    'hotlink_policy' => array(
						ONAPP_FIELD_MAP => '_hotlink_policy',
						ONAPP_FIELD_TYPE => 'string',
					),
                    'ip_access_policy' => array(
						ONAPP_FIELD_MAP => '_ip_access_policy',
						ONAPP_FIELD_TYPE => 'string',
					),
                    'ip_addresses' => array(
						ONAPP_FIELD_MAP => '_ip_addresses',
						ONAPP_FIELD_TYPE => 'string',
					),
                    'edge_group_ids' => array(
						ONAPP_FIELD_MAP => '_edge_group_ids',
						ONAPP_FIELD_TYPE => 'array',
                        //ONAPP_FIELD_REQUIRED => true,

					),
                    'resource_type' => array(
						ONAPP_FIELD_MAP => '_resource_type',
						ONAPP_FIELD_TYPE => 'integer',
                        //ONAPP_FIELD_REQUIRED => true,
						ONAPP_FIELD_DEFAULT_VALUE => 'HTTP_PULL'
					),
                    'country_access_policy' => array(
						ONAPP_FIELD_MAP => '_country_access_policy',
						ONAPP_FIELD_TYPE => 'string',
					),
                    'contries' => array(
						ONAPP_FIELD_MAP => '_contries',
						ONAPP_FIELD_TYPE => 'array',
					),
                    'origin' => array(
						ONAPP_FIELD_MAP => '_origin',
						ONAPP_FIELD_TYPE => 'string',
                        //ONAPP_FIELD_REQUIRED => true,
					),
                    'advanced_settings' => array(
						ONAPP_FIELD_MAP => '_advanced_settings',
						ONAPP_FIELD_TYPE => 'boolean',
					),
                    'hotlink_policy' => array(
						ONAPP_FIELD_MAP => '_hotlink_policy',
						ONAPP_FIELD_TYPE => 'string',
					),
                    'domains' => array(
						ONAPP_FIELD_MAP => '_domains',
						ONAPP_FIELD_TYPE => 'string',
					),
                    'url_signing_on' => array(
						ONAPP_FIELD_MAP => '_url_signing_on',
						ONAPP_FIELD_TYPE => 'boolean',
					),
                    'url_signing_key' => array(
						ONAPP_FIELD_MAP => '_url_signing_key',
						ONAPP_FIELD_TYPE => 'string',
					),
                    'cache_expiry' => array(
						ONAPP_FIELD_MAP => '_cache_expiry',
						ONAPP_FIELD_TYPE => 'integer',
					),
                    'password_on' => array(
						ONAPP_FIELD_MAP => '_password_on',
						ONAPP_FIELD_TYPE => 'boolean',
					),
                    'password_unauthorized_html' => array(
						ONAPP_FIELD_MAP => '_password_unauthorized_html',
						ONAPP_FIELD_TYPE => 'string',
					),
                    'pass' => array(
						ONAPP_FIELD_MAP => '_pass',
						ONAPP_FIELD_TYPE => 'array',
					),
                    'user' => array(
						ONAPP_FIELD_MAP => '_user',
						ONAPP_FIELD_TYPE => 'array',
					),
                    'form_pass' => array(
						ONAPP_FIELD_MAP => '_form_pass',
						ONAPP_FIELD_TYPE => 'array',
					),
                    'countries' => array(
						ONAPP_FIELD_MAP => '_countries',
						ONAPP_FIELD_TYPE => 'array',
					),
                    
				);
                break;
		}

		parent::initFields( $version, __CLASS__ );
		return $this->fields;
	}
}