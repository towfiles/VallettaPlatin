<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 7/29/19
 * Time: 9:16 AM
 */

namespace App\Tests\AppBundle\FourSquareApiAdapterBundleTest\ServiceTest;

use App\AppBundle\FourSquareApiAdapterBundle\Entities\DataResponse;
use App\AppBundle\FourSquareApiAdapterBundle\Service\FourSquareCategoryAdapter;
use App\Tests\AppBundle\FourSquareApiAdapterBundleTest\MockConfig\MockFourSquareConfig;
use PHPUnit\Framework\TestCase;


class FourSquareCategoryAdapterTest extends TestCase
{

    public function testList(){
        $categoryAdapter  =
        new FourSquareCategoryAdapter( new MockFourSquareConfig());
        $result = $categoryAdapter->List();

        // instance of DataResponse
        $this->assertInstanceOf(DataResponse::class, $result);

        // data exist
        $this->assertNotNull($result->data);


    }



}