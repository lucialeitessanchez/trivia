<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/']], [], [], []],
    'app_cuestionario' => [[], ['_controller' => 'App\\Controller\\IndexController::cuestionario'], [], [['text', '/cuestionario']], [], [], []],
    'app_cuestionario_list' => [[], ['_controller' => 'App\\Controller\\IndexController::cuestionarioList'], [], [['text', '/cuestionario/list']], [], [], []],
    'app_pregunta_index' => [[], ['_controller' => 'App\\Controller\\PreguntaController::index'], [], [['text', '/pregunta/']], [], [], []],
    'app_pregunta_new' => [[], ['_controller' => 'App\\Controller\\PreguntaController::new'], [], [['text', '/pregunta/new']], [], [], []],
    'app_pregunta_show' => [['idpregunta'], ['_controller' => 'App\\Controller\\PreguntaController::show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'idpregunta', true], ['text', '/pregunta']], [], [], []],
    'app_pregunta_edit' => [['idpregunta'], ['_controller' => 'App\\Controller\\PreguntaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idpregunta', true], ['text', '/pregunta']], [], [], []],
    'app_pregunta_delete' => [['idpregunta'], ['_controller' => 'App\\Controller\\PreguntaController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'idpregunta', true], ['text', '/pregunta']], [], [], []],
    'app_respuesta_index' => [[], ['_controller' => 'App\\Controller\\RespuestaController::index'], [], [['text', '/respuesta/']], [], [], []],
    'app_respuesta_new' => [[], ['_controller' => 'App\\Controller\\RespuestaController::new'], [], [['text', '/respuesta/new']], [], [], []],
    'app_respuesta_show' => [['idrespuesta'], ['_controller' => 'App\\Controller\\RespuestaController::show'], [], [['variable', '/', '[^/]++', 'idrespuesta', true], ['text', '/respuesta']], [], [], []],
    'app_respuesta_edit' => [['idrespuesta'], ['_controller' => 'App\\Controller\\RespuestaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idrespuesta', true], ['text', '/respuesta']], [], [], []],
    'app_respuesta_delete' => [['idrespuesta'], ['_controller' => 'App\\Controller\\RespuestaController::delete'], [], [['variable', '/', '[^/]++', 'idrespuesta', true], ['text', '/respuesta']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];