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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/listPsychiatre' => [[['_route' => 'app_admin_listpsychiatre', '_controller' => 'App\\Controller\\AdminController::listPsychiatre'], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajouterPsychitare' => [[['_route' => 'app_admin_ajouterpsychiatre', '_controller' => 'App\\Controller\\AdminController::addpsychiatre'], null, null, null, false, false, null]],
        '/admin/listFournisseur' => [[['_route' => 'app_admin_listfournisseur', '_controller' => 'App\\Controller\\AdminController::listFournisseur'], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajouterFournisseur' => [[['_route' => 'app_admin_ajouterfournisseur', '_controller' => 'App\\Controller\\AdminController::addfournisseur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/listPatient' => [[['_route' => 'list_patient_index', '_controller' => 'App\\Controller\\AdminController::listPatient'], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajouterPatient' => [[['_route' => 'app_patient_new', '_controller' => 'App\\Controller\\AdminController::addpatient'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\ErrorController::show'], null, null, null, false, false, null]],
        '/fournisseur' => [[['_route' => 'app_fournisseur', '_controller' => 'App\\Controller\\FournisseurController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/psychiatre' => [[['_route' => 'app_psychiatre', '_controller' => 'App\\Controller\\PsychiatreController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin(?'
                    .'|/profile/([^/]++)(*:228)'
                    .'|list(?'
                        .'|P(?'
                            .'|sychiatre/([^/]++)(*:265)'
                            .'|atient/([^/]++)(*:288)'
                        .')'
                        .'|Fournisseur/([^/]++)(*:317)'
                    .')'
                .')'
                .'|/fournisseur/([^/]++)(?'
                    .'|(*:351)'
                    .'|/edit(*:364)'
                    .'|(*:372)'
                .')'
                .'|/p(?'
                    .'|atient/([^/]++)(?'
                        .'|(*:404)'
                        .'|/edit(*:417)'
                        .'|(*:425)'
                    .')'
                    .'|sychiatre/([^/]++)(?'
                        .'|(*:455)'
                        .'|/edit(*:468)'
                        .'|(*:476)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:522)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        228 => [[['_route' => 'app_admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        265 => [[['_route' => 'psychiatre_delete', '_controller' => 'App\\Controller\\AdminController::deletepsychiatre'], ['id'], ['POST' => 0], null, false, true, null]],
        288 => [[['_route' => 'patient_delete', '_controller' => 'App\\Controller\\AdminController::deletePatient'], ['id'], ['POST' => 0], null, false, true, null]],
        317 => [[['_route' => 'fournisseur_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        351 => [[['_route' => 'app_fournisseur_show', '_controller' => 'App\\Controller\\FournisseurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        364 => [[['_route' => 'app_fournisseur_edit', '_controller' => 'App\\Controller\\FournisseurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        372 => [[['_route' => 'app_fournisseur_delete', '_controller' => 'App\\Controller\\FournisseurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        404 => [[['_route' => 'app_patient_show', '_controller' => 'App\\Controller\\PatientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        417 => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\PatientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        425 => [[['_route' => 'app_patient_delet', '_controller' => 'App\\Controller\\PatientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        455 => [[['_route' => 'app_psychiatre_show', '_controller' => 'App\\Controller\\PsychiatreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        468 => [[['_route' => 'app_psychiatre_edit', '_controller' => 'App\\Controller\\PsychiatreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        476 => [[['_route' => 'app_psychiatre_delete', '_controller' => 'App\\Controller\\PsychiatreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        522 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
