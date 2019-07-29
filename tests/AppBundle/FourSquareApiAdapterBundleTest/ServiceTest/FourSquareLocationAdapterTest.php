<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 7/29/19
 * Time: 9:54 AM
 */

namespace App\Tests\AppBundle\FourSquareApiAdapterBundleTest\ServiceTest;


use App\AppBundle\FourSquareApiAdapterBundle\Entities\DataResponse;
use App\AppBundle\FourSquareApiAdapterBundle\Service\FourSquareLocationAdapter;
use App\Tests\AppBundle\FourSquareApiAdapterBundleTest\MockConfig\MockFourSquareConfig;
use PHPUnit\Framework\TestCase;

class FourSquareLocationAdapterTest extends TestCase
{

    public function testListLocationNear() {

        $locationAdapter  =
            new FourSquareLocationAdapter( new MockFourSquareConfig());
        $result = $locationAdapter->ListLocationNear('valletta', '');

        // instance of DataResponse
        $this->assertInstanceOf(DataResponse::class, $result);

        // data exist with valletta
        $this->assertNotNull($result->data);

    }

}