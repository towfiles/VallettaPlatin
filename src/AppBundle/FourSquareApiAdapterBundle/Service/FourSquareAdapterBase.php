<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 7/28/19
 * Time: 9:11 AM
 */

namespace App\AppBundle\FourSquareApiAdapterBundle\Service;


use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;


class FourSquareAdapterBase
{

    private $config;
    private $httpClient;


    /**
     * Foursquare base class adapter constructor.
     * @param $config
     */
    protected function __construct($config)
    {
        $this->config = $config;
        $this->httpClient = HttpClient::create();
    }

    private function getAuthFieldsArray() :array
    {
        return [
            'client_id' => $this->config['clientId'],
            'client_secret' => $this->config['clientSecret'],
            'v' => $this->config['version']
        ];

    }


    protected function setQueryStringArray($queryStringArray = array()) : array
    {

        //add authentication fields array as part of the query string
        return array_merge($queryStringArray, $this->getAuthFieldsArray());

    }


    protected function getHttpClient() :HttpClientInterface
    {
        return $this->httpClient;
    }

    protected function getConfig()
    {
        return $this->config;
    }


    /**
     * @param $method
     * @param $resource
     * @param $queryString
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    protected function getHttpResponse($method, $resource, $queryString =  [])
    {

        $response = $this->getHttpClient()->request(
            $method,
            $this->getConfig()['baseUrl'].$resource,
            [
                'query' => $this->setQueryStringArray($queryString)
            ]
        );

        $responseDataJSON = $response->getContent(false);
        $responseDataObject = json_decode($responseDataJSON);
        if($responseDataObject->meta->code != 200)
            throw new \Exception($responseDataObject->meta->errorDetail);

        return $responseDataObject->response;

    }




}