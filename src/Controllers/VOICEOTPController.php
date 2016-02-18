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
class VOICEOTPController {
    /**
     * This endpoint is used to check VOICE OTP balance
     * @param  string     $apiKey      Required parameter: Check VOICE OTP Balance
     * @return mixed response from the API call*/
    public function getCheckVoiceBalance (
                $apiKey) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/API/V1/{api_key}/BAL/VOICE';

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
     * This endpoint is used to send Auto Generated VOICE OTP to India
     * @param  string     $apiKey           Required parameter: API Obtained From 2Factor.in
     * @param  string     $phoneNumber      Required parameter: 10 Digit Indian Phone Number
     * @return mixed response from the API call*/
    public function getSendingVOICEOTPAutoGeneratedOTP (
                $apiKey,
                $phoneNumber) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/API/V1/{api_key}/VOICE/{phone_number}/AUTOGEN';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'api_key'      => $apiKey,
            'phone_number' => $phoneNumber,
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
     * This endpoint is used to send VOICE OTP to India
     * @param  string     $apiKey           Required parameter: API Obtained From 2Factor.in
     * @param  int        $otp              Required parameter: 4 Digit ( Numeric ) OTP code to be sent
     * @param  string     $phoneNumber      Required parameter: 10 Digit Indian Phone Number
     * @return mixed response from the API call*/
    public function getSendingVoiceOTPCustomOTP (
                $apiKey,
                $otp,
                $phoneNumber) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/API/V1/{api_key}/VOICE/{phone_number}/{otp}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'api_key'      => $apiKey,
            'otp'          => $otp,
            'phone_number' => $phoneNumber,
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
     * This endpoint is useful in verifying user entered OTP with sent OTP
     * @param  string     $apiKey         Required parameter: API Obtained From 2Factor.in
     * @param  string     $otpInput       Required parameter: OTP Value input by end user
     * @param  string     $sessionId      Required parameter: Verification session id returned in send OTP step
     * @return mixed response from the API call*/
    public function getVerifyVOICEOTPInput (
                $apiKey,
                $otpInput,
                $sessionId) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/API/V1/{api_key}/VOICE/VERIFY/{session_id}/{otp_input}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'api_key'    => $apiKey,
            'otp_input'  => $otpInput,
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
        
}