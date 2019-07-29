<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 7/27/19
 * Time: 8:33 AM
 */

namespace App\AppBundle\FourSquareApiAdapterBundle\Service;


use App\AppBundle\FourSquareApiAdapterBundle\Entities\DataResponse;

interface FourSquareCategoryAdapterInterface
{
    public function List() : DataResponse;

}