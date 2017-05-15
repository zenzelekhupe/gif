<?php
/*
 * RaaSV2
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaaSV2Lib\Controllers;

use RaaSV2Lib\APIException;
use RaaSV2Lib\APIHelper;
use RaaSV2Lib\Configuration;
use RaaSV2Lib\Models;
use RaaSV2Lib\Exceptions;
use RaaSV2Lib\Http\HttpRequest;
use RaaSV2Lib\Http\HttpResponse;
use RaaSV2Lib\Http\HttpMethod;
use RaaSV2Lib\Http\HttpContext;
use RaaSV2Lib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class ExchangeRatesController extends BaseController
{
    /**
     * @var ExchangeRatesController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return ExchangeRatesController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Retrieve current exchange rates
     *
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getExchangeRates()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/exchangerate';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'TangoCardv2NGSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$platformName, Configuration::$platformKey);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }
}
