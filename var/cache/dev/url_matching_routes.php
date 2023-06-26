<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/category' => [
            [['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'category_menu', '_controller' => 'App\\Controller\\CategoryController::showNav'], null, null, null, true, false, null],
        ],
        '/category/create' => [[['_route' => 'category_create', '_controller' => 'App\\Controller\\CategoryController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post' => [[['_route' => 'post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, false, false, null]],
        '/post/create' => [[['_route' => 'post_create', '_controller' => 'App\\Controller\\PostController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/category/(?'
                    .'|([1-9]\\d*)(*:30)'
                    .'|([1-9]\\d*)/delete(*:54)'
                .')'
                .'|/post/(?'
                    .'|([1-9]\\d*)(*:81)'
                    .'|([1-9]\\d*)/edit(*:103)'
                    .'|([1-9]\\d*)/delete(*:128)'
                    .'|([^/]++)(*:144)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:184)'
                    .'|wdt/([^/]++)(*:204)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:250)'
                            .'|router(*:264)'
                            .'|exception(?'
                                .'|(*:284)'
                                .'|\\.css(*:297)'
                            .')'
                        .')'
                        .'|(*:307)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        54 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, false, null]],
        81 => [[['_route' => 'post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        103 => [[['_route' => 'post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        128 => [[['_route' => 'post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, false, null]],
        144 => [[['_route' => 'post_menu', '_controller' => 'App\\Controller\\PostController::showNav'], ['nav'], null, null, false, true, null]],
        184 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        204 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        250 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        264 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        284 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        297 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        307 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
