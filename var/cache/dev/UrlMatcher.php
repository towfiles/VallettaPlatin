<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v1/categories' => [[['_route' => 'app_api_categorylist', '_controller' => 'App\\Controller\\ApiController::categoryListAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/v1/locations/([^/]++)/([^/]++)(*:42)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [
            [['_route' => 'locations', '_controller' => 'App\\Controller\\ApiController::locationListAction'], ['categoryName', 'nearBy'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
