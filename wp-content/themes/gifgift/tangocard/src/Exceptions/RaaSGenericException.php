<?php
/*
 * RaaSV2
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaaSV2Lib\Exceptions;

use RaaSV2Lib\APIException;
use RaaSV2Lib\APIHelper;

/**
 * RaaS API Generic Exception
 */
class RaaSGenericException extends APIException
{
    /**
 * Request timestamp
     * @required
     * @var string $timestamp public property
     */
    public $timestamp;

    /**
 * Request ID
     * @required
     * @var uuid|string $requestId public property
     */
    public $requestId;

    /**
 * Request Path
     * @required
     * @var string $path public property
     */
    public $path;

    /**
 * HTTP Code
     * @required
     * @var integer $httpCode public property
     */
    public $httpCode;

    /**
 * HTTP Phrase
     * @required
     * @var string $httpPhrase public property
     */
    public $httpPhrase;

    /**
 * Error Message
     * @var string|null $message public property
     */
    public $message;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct($reason, $context)
    {
        parent::__construct($reason, $context);
    }

    /**
     * Unbox response into this exception class
     */
    public function unbox()
    {
        APIHelper::deserialize(self::getResponseBody(), $this, false, false);
    }
}
