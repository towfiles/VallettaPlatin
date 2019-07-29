<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 7/28/19
 * Time: 12:57 PM
 */

namespace App\AppBundle\FourSquareApiAdapterBundle\Service;


use App\AppBundle\FourSquareApiAdapterBundle\Entities\DataResponse;

class FourSquareLocationAdapter extends FourSquareAdapterBase  implements FourSquareLocationAdapterInterface
{

    /**
     * FourSquareLocationAdapter constructor.
     * @param FoursquareConfigInterface $config
     */
    public function __construct(FoursquareConfigInterface $config)
    {
        parent::__construct($config->get());

    }

    /**
     * @return DataResponse
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function ListLocationNear($nearPlace, $categoryName) :DataResponse
    {
        $dataResponse = new DataResponse();

        try{

            $queryResponse = $this->getHttpResponse(
                'GET',
                '/venues/explore',
                [
                    'near' => $nearPlace,
                    'query' => $categoryName
                ]
            );

            $dataResponse->data = $queryResponse->groups[0];

        }
        catch (\Exception $e) {

            $dataResponse->error = 'Error Occurred Running Locations from FourSquare: '.$e->getMessage();
        }


        return $dataResponse;

    }


}