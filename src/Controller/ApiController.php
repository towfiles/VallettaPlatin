<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 7/26/19
 * Time: 9:39 PM
 */
namespace App\Controller;
use App\AppBundle\FourSquareApiAdapterBundle\Service\FourSquareLocationAdapterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\AppBundle\FourSquareApiAdapterBundle\Service\FourSquareCategoryAdapterInterface;



class ApiController extends ApiBaseController
{
    /** there would be a form of authentication to connect with this api in real scenarios.
    but this requires a user based login authentication to make the security effective**/

    private $categoryApiAdapter;
    private $locationsApiAdapter;
    public function __construct( FourSquareCategoryAdapterInterface $categoryApiAdapter,
                                 FourSquareLocationAdapterInterface $locationsApiAdapter)
    {
        $this->categoryApiAdapter = $categoryApiAdapter;
        $this->locationsApiAdapter = $locationsApiAdapter;
    }

    /**
     * @Route("/categories")
     */
    public function categoryListAction()
    {
        $dataResponse = $this->categoryApiAdapter ->List();

        if($dataResponse->error != null){
            return $this->resultServerError($dataResponse->error );

        }

        return $this->result($dataResponse);
    }


    /**
     * @Route("/locations/{categoryName}/{nearBy}", name="locations")
     */
    public function locationListAction($categoryName, $nearBy)
    {
        $dataResponse = $this->locationsApiAdapter->ListLocationNear($nearBy, $categoryName);

        if($dataResponse->error != null){
            return $this->resultServerError($dataResponse->error );

        }
        return $this->result($dataResponse);
    }

}