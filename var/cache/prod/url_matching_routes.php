<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'app_contact_sendemail', '_controller' => 'App\\Controller\\ContactController::sendEmail'], null, null, null, false, false, null]],
        '/twig' => [[['_route' => 'twig', '_controller' => 'App\\Controller\\ExerciceController::index'], null, null, null, false, false, null]],
        '/twig-exercice' => [[['_route' => 'twig_exercice', '_controller' => 'App\\Controller\\ExerciceController::exercice'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
