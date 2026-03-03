<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, false, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/terms' => [[['_route' => 'app_terms', '_controller' => 'App\\Controller\\HomeController::terms'], null, null, null, false, false, null]],
        '/privacy' => [[['_route' => 'app_privacy', '_controller' => 'App\\Controller\\HomeController::privacy'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/location' => [[['_route' => 'app_location', '_controller' => 'App\\Controller\\HomeController::location'], null, null, null, false, false, null]],
        '/image' => [[['_route' => 'app_image', '_controller' => 'App\\Controller\\ImageController::index'], null, null, null, false, false, null]],
        '/admin/payments' => [[['_route' => 'app_payment_index', '_controller' => 'App\\Controller\\PaymentAdminController::index'], null, null, null, false, false, null]],
        '/payment/new' => [[['_route' => 'app_payment_new', '_controller' => 'App\\Controller\\PaymentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/payment/success' => [[['_route' => 'app_payment_success', '_controller' => 'App\\Controller\\PaymentController::success'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/property' => [[['_route' => 'app_property_index', '_controller' => 'App\\Controller\\PropertyController::index'], null, ['GET' => 0], null, false, false, null]],
        '/property/new' => [[['_route' => 'app_property_new', '_controller' => 'App\\Controller\\PropertyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/review' => [[['_route' => 'app_review_index', '_controller' => 'App\\Controller\\ReviewController::index'], null, ['GET' => 0], null, false, false, null]],
        '/review/new' => [[['_route' => 'app_review_new', '_controller' => 'App\\Controller\\ReviewController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/staff' => [[['_route' => 'app_staff_index', '_controller' => 'App\\Controller\\StaffController::index'], null, ['GET' => 0], null, true, false, null]],
        '/staff/new' => [[['_route' => 'app_staff_new', '_controller' => 'App\\Controller\\StaffController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/event/(?'
                    .'|(\\d+)(*:22)'
                    .'|(\\d+)/edit(*:39)'
                    .'|([^/]++)(*:54)'
                .')'
                .'|/image/(?'
                    .'|upload/([^/]++)/([^/]++)(*:96)'
                    .'|([^/]++)(*:111)'
                .')'
                .'|/property/(?'
                    .'|(\\d+)(*:138)'
                    .'|(\\d+)/edit(*:156)'
                    .'|(\\d+)(*:169)'
                .')'
                .'|/re(?'
                    .'|servation/new/([^/]++)(*:206)'
                    .'|view/([^/]++)(?'
                        .'|(*:230)'
                        .'|/edit(*:243)'
                        .'|(*:251)'
                    .')'
                .')'
                .'|/s(?'
                    .'|ervice/(?'
                        .'|(\\d+)(*:281)'
                        .'|(\\d+)/edit(*:299)'
                        .'|(\\d+)(*:312)'
                    .')'
                    .'|taff/([^/]++)(?'
                        .'|(*:337)'
                        .'|/(?'
                            .'|edit(*:353)'
                            .'|delete(*:367)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        22 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        39 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        54 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        96 => [[['_route' => 'app_image_upload', '_controller' => 'App\\Controller\\ImageController::upload'], ['entityType', 'entityId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        111 => [[['_route' => 'app_image_delete', '_controller' => 'App\\Controller\\ImageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        138 => [[['_route' => 'app_property_show', '_controller' => 'App\\Controller\\PropertyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        156 => [[['_route' => 'app_property_edit', '_controller' => 'App\\Controller\\PropertyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        169 => [[['_route' => 'app_property_delete', '_controller' => 'App\\Controller\\PropertyController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        206 => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['propertyId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        230 => [[['_route' => 'app_review_show', '_controller' => 'App\\Controller\\ReviewController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        243 => [[['_route' => 'app_review_edit', '_controller' => 'App\\Controller\\ReviewController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        251 => [[['_route' => 'app_review_delete', '_controller' => 'App\\Controller\\ReviewController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        281 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        299 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        337 => [[['_route' => 'app_staff_show', '_controller' => 'App\\Controller\\StaffController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        353 => [[['_route' => 'app_staff_edit', '_controller' => 'App\\Controller\\StaffController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        367 => [
            [['_route' => 'app_staff_delete', '_controller' => 'App\\Controller\\StaffController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
