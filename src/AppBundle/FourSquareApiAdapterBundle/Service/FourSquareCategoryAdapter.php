<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 7/27/19
 * Time: 8:14 AM
 */

namespace App\AppBundle\FourSquareApiAdapterBundle\Service;

use App\AppBundle\FourSquareApiAdapterBundle\Entities\DataResponse;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;


class FourSquareCategoryAdapter extends FourSquareAdapterBase implements FourSquareCategoryAdapterInterface
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
     * @throws TransportExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     */
    public function List() : DataResponse
    {
        $dataResponse = new DataResponse();

        try{

            $queryResponse = $this->getHttpResponse('GET', '/venues/categories');

            //better approach but much slower
//            $serializer = new Serializer(
//                [new ObjectNormalizer(
//                    null,
//                    null,
//                    null,
//                    new CategorySerializationPropertyTypeExtractor() ),
//                 new ArrayDenormalizer()],
//                [new JsonEncoder()]
//            );
//            $person = $serializer->deserialize(json_encode($contentResponseObject->response->categories), Category::class. '[]', 'json');
//
//            dump($person);

            $dataResponse->data = $queryResponse->categories;

        }
        catch (\Exception $e) {
            $dataResponse->error = 'Error Occurred Running Category List from FourSquare: '.$e->getMessage();
        }

        return $dataResponse;

    }




}