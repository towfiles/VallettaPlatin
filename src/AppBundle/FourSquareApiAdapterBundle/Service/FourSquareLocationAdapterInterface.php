<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 7/28/19
 * Time: 12:58 PM
 */

namespace App\AppBundle\FourSquareApiAdapterBundle\Service;


interface FourSquareLocationAdapterInterface
{
    public function ListLocationNear($nearPlace, $categoryName);

}