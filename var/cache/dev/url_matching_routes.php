<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/critere' => [[['_route' => 'critere_index', '_controller' => 'App\\Controller\\Admin\\CritereController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/critere/new' => [[['_route' => 'critere_new', '_controller' => 'App\\Controller\\Admin\\CritereController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/propriete/index' => [[['_route' => 'propriete_index', '_controller' => 'App\\Controller\\Admin\\PropertyController::index'], null, null, null, false, false, null]],
        '/admin/propriete/admin/propriete/create' => [[['_route' => 'propriete_create', '_controller' => 'App\\Controller\\Admin\\PropertyController::add'], null, null, null, false, false, null]],
        '/admin/users/users' => [[['_route' => 'users_users', '_controller' => 'App\\Controller\\Admin\\userController::usersList'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'site_contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'site_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/proprietes' => [[['_route' => 'site_properties_index', '_controller' => 'App\\Controller\\PropertyController::index'], null, null, null, true, false, null]],
        '/propriete' => [[['_route' => 'propriete', '_controller' => 'App\\Controller\\ProprieteController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'user_registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|critere/([^/]++)(?'
                        .'|(*:198)'
                        .'|/edit(*:211)'
                        .'|(*:219)'
                    .')'
                    .'|propriete/edit/([^/]++)(?'
                        .'|(*:254)'
                    .')'
                    .'|users/([^/]++)/edit(*:282)'
                .')'
                .'|/proprietes/([a-z0-9\\-]*)\\-([^/]++)(*:326)'
                .'|/biens/([a-z0-9\\-]*)\\-([^/]++)(*:364)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:426)'
                    .'|([A-z0-9_-]*)/(.+)(*:452)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'critere_show', '_controller' => 'App\\Controller\\Admin\\CritereController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        211 => [[['_route' => 'critere_edit', '_controller' => 'App\\Controller\\Admin\\CritereController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        219 => [[['_route' => 'critere_delete', '_controller' => 'App\\Controller\\Admin\\CritereController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        254 => [
            [['_route' => 'propriete_edit', '_controller' => 'App\\Controller\\Admin\\PropertyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'propriete_delete', '_controller' => 'App\\Controller\\Admin\\PropertyController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        282 => [[['_route' => 'users_edit', '_controller' => 'App\\Controller\\Admin\\userController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        326 => [[['_route' => 'site_properties_propriete.show2', '_controller' => 'App\\Controller\\PropertyController::show'], ['slug', 'id'], null, null, false, true, null]],
        364 => [[['_route' => 'propriete.show2', '_controller' => 'App\\Controller\\ProprieteController::show'], ['slug', 'id'], null, null, false, true, null]],
        426 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        452 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
