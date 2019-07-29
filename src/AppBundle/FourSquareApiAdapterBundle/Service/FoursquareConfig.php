<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 7/28/19
 * Time: 9:38 AM
 */

namespace App\AppBundle\FourSquareApiAdapterBundle\Service;

// turn foursquare adapter to bundle

class FoursquareConfig implements FoursquareConfigInterface
{
    private $config;


    /**
     * FoursquareConfig constructor loads the Foursquare configuration from service.yaml.
     * @param $config
     */
    public function __construct($config)
    {
        $this->config = $config;

    }

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->config;
    }


}