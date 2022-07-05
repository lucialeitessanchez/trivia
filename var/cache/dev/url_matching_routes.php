<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, ['GET' => 0], null, false, false, null]],
        '/cuestionario' => [[['_route' => 'app_cuestionario', '_controller' => 'App\\Controller\\IndexController::cuestionario'], null, ['GET' => 0], null, false, false, null]],
        '/cuestionario/list' => [[['_route' => 'app_cuestionario_list', '_controller' => 'App\\Controller\\IndexController::cuestionarioList'], null, ['GET' => 0], null, false, false, null]],
        '/semaforo' => [[['_route' => 'app_semaforo', '_controller' => 'App\\Controller\\IndexController::semaforo'], null, ['GET' => 0], null, false, false, null]],
        '/pregunta' => [[['_route' => 'app_pregunta_index', '_controller' => 'App\\Controller\\PreguntaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pregunta/new' => [[['_route' => 'app_pregunta_new', '_controller' => 'App\\Controller\\PreguntaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/respuesta' => [[['_route' => 'app_respuesta_index', '_controller' => 'App\\Controller\\RespuestaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/respuesta/nuevo' => [[['_route' => 'app_respuesta_nuevo', '_controller' => 'App\\Controller\\RespuestaController::nuevo'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/respuesta/new' => [[['_route' => 'app_respuesta_new', '_controller' => 'App\\Controller\\RespuestaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/pregunta/([^/]++)/(?'
                    .'|show(*:33)'
                    .'|edit(*:44)'
                    .'|delete(*:57)'
                .')'
                .'|/respuesta/([^/]++)(?'
                    .'|(*:87)'
                    .'|/edit(*:99)'
                    .'|(*:106)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:146)'
                    .'|wdt/([^/]++)(*:166)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:212)'
                            .'|router(*:226)'
                            .'|exception(?'
                                .'|(*:246)'
                                .'|\\.css(*:259)'
                            .')'
                        .')'
                        .'|(*:269)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'app_pregunta_show', '_controller' => 'App\\Controller\\PreguntaController::show'], ['idpregunta'], ['GET' => 0], null, false, false, null]],
        44 => [[['_route' => 'app_pregunta_edit', '_controller' => 'App\\Controller\\PreguntaController::edit'], ['idpregunta'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        57 => [[['_route' => 'app_pregunta_delete', '_controller' => 'App\\Controller\\PreguntaController::delete'], ['idpregunta'], ['POST' => 0], null, false, false, null]],
        87 => [[['_route' => 'app_respuesta_show', '_controller' => 'App\\Controller\\RespuestaController::show'], ['idrespuesta'], ['GET' => 0], null, false, true, null]],
        99 => [[['_route' => 'app_respuesta_edit', '_controller' => 'App\\Controller\\RespuestaController::edit'], ['idrespuesta'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        106 => [[['_route' => 'app_respuesta_delete', '_controller' => 'App\\Controller\\RespuestaController::delete'], ['idrespuesta'], ['POST' => 0], null, false, true, null]],
        146 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        166 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        212 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        226 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        246 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        259 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        269 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
