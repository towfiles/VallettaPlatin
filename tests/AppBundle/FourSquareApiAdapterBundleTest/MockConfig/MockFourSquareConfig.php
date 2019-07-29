<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 7/29/19
 * Time: 9:44 AM
 */

namespace App\Tests\AppBundle\FourSquareApiAdapterBundleTest\MockConfig;


use App\AppBundle\FourSquareApiAdapterBundle\Service\FoursquareConfigInterface;

class MockFourSquareConfig implements FoursquareConfigInterface
{
    public function get()
    {
        return [
            "clientId" => "JNI4V4QH53WOEJDZ0ZGJZYKKV3QTLESO5SHY3VNOKSC1OYVZ",
            "clientSecret" => "NRALCBXP0EZJ4RQCSRYQQLC424UBCU2H2KSWJ3FWUOYH5PWR",
            "baseUrl" => "https://api.foursquare.com/v2",
            "version" => "20180604"
        ];
    }

}