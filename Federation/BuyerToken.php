<?php

/**
 * Manages Buyer Trust Token
 *
 * @category    API wrapper
 * @package     OnApp
 * @subpackage  Federation
 * @author      Ivan Gavryliuk
 * @copyright   © 2016 OnApp
 * @link        http://www.onapp.com/
 * @see         OnApp
 */
class OnApp_Federation_BuyerToken extends OnApp {
    /**
     * root tag used in the API request
     *
     * @var string
     */
    var $_tagRoot = 'token';
    /**
     * alias processing the object data
     *
     * @var string
     */
    var $_resource = 'federation/trader_tokens';

    /**
     * API Fields description
     *
     * @param string|float $version OnApp API version
     * @param string $className current class' name
     *
     * @return array
     */

    public function initFields( $version = null, $className = '' ) {
        switch ( $version ) {
            case 3.0:
            case 3.1:
            case 3.2:
            case 3.3:
            case 3.4:
            case 3.5:
            case 4.0:
            case 4.1:
            case 4.2:
                $this->fields = array(
                    'id'     => array(
                        ONAPP_FIELD_MAP  => '_id',
                        ONAPP_FIELD_TYPE => 'integer',
                    ),
                    'sender' => array(
                        ONAPP_FIELD_MAP  => '_sender',
                        ONAPP_FIELD_TYPE => 'string',
                    ),
                    'token'  => array(
                        ONAPP_FIELD_MAP  => '_token',
                        ONAPP_FIELD_TYPE => 'string',
                    ),
                );
                break;
            case 4.3:
                $this->fields = $this->initFields( 4.2 );
                break;
            case 5.0:
                $this->fields = $this->initFields( 4.3 );
                break;
            case 5.1:
                $this->fields = $this->initFields( 5.0 );
                break;
            case 5.2:
                $this->fields = $this->initFields( 5.1 );
                break;
            case 5.3:
                $this->fields = $this->initFields( 5.2 );
                break;
            case 5.4:
                $this->fields = $this->initFields( 5.3 );
                break;
            case 5.5:
                $this->fields = $this->initFields( 5.4 );
                break;
            case 6.0:
                $this->fields = $this->initFields( 5.5 );
                break;

            case 6.1:
                $this->fields = $this->initFields( 6.0 );
                break;

            case 6.2:
                $this->fields = $this->initFields( 6.1 );
                break;

            case 6.3:
                $this->fields = $this->initFields( 6.2 );
                break;
        }

        parent::initFields( $version, __CLASS__ );

        return $this->fields;
    }

    function getResource( $action = ONAPP_GETRESOURCE_DEFAULT ) {
        switch ( $action ) {
            default:
                /**
                 * ROUTE :
                 *
                 * @name trader_tokens
                 * @method GET
                 * @alias  /federation/trader_tokens(.:format)
                 * @format {:controller=>"trader_tokens", :action=>"index"}
                 */
                $resource = parent::getResource( $action );
        }

        return $resource;
    }

}