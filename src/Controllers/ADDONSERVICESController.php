<?php
/*
 * M2Factor
 *
 * This file was automatically generated for 2Factor by APIMATIC BETA v2.0 on 02/18/2016
 */

namespace M2FactorLib\Controllers;

use M2FactorLib\APIException;
use M2FactorLib\APIHelper;
use M2FactorLib\Configuration;
use Unirest\Unirest;
class ADDONSERVICESController {
    /**
     * Check Balance For Addon Services
     * @param  string     $apiKey           Required parameter: 2Factor account API Key
     * @param  string     $serviceName      Required parameter: Name of the addon service
     * @return mixed response from the API call*/
    public function getCheckBalanceAddonServices (
                $apiKey,
                $serviceName) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/V1/{api_key}/ADDON_SERVICES/BAL/{service_name}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'api_key'      => $apiKey,
            'service_name' => $serviceName,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => '2Factor',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Pull Delivery Report - Transactional SMS
     * @param  string     $apiKey         Required parameter: API Obtained From 2Factor.in
     * @param  string     $sessionId      Required parameter: Session Id Returned By Send SMS Step
     * @return mixed response from the API call*/
    public function getPullDeliveryReport (
                $apiKey,
                $sessionId) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/V1/{api_key}/ADDON_SERVICES/RPT/TSMS/{session_id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'api_key'    => $apiKey,
            'session_id' => $sessionId,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => '2Factor',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Send Single / Bulk Transactional Messages / Schedule SMS
     * @param  string          $apiKey      Required parameter: API Obtained From 2Factor.in
     * @param  string          $from        Required parameter: 6 Character Alphabet Sender Id
     * @param  string          $msg         Required parameter: SMS Body To Be Sent
     * @param  string          $to          Required parameter: Comma Separated list Of Phone Numbers
     * @param  string|null     $sendAt      Optional parameter: This Parameter Is Used For Scheduling SMS - Optional parameter
     * @param    array  $fieldParameters    Additional optional form parameters are supported by this endpoint
     * @return mixed response from the API call*/
    public function createSendTransactionalSMS (
                $apiKey,
                $from,
                $msg,
                $to,
                $sendAt = NULL,
                $fieldParameters = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/V1/{api_key}/ADDON_SERVICES/SEND/TSMS';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'api_key' => $apiKey,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => '2Factor',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $parameters = array (
            'From'    => $from,
            'Msg'     => $msg,
            'To'      => $to,
            'SendAt'  => (null != $sendAt) ? $sendAt : '2019-01-01 00:00:01'
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
}