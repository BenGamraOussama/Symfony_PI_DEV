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
        '/activite' => [[['_route' => 'app_activite_index', '_controller' => 'App\\Controller\\ActiviteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/activite/update-status' => [[['_route' => 'app_activite_update_status', '_controller' => 'App\\Controller\\ActiviteController::updateStatus'], null, ['POST' => 0], null, false, false, null]],
        '/activite/new' => [[['_route' => 'app_activite_new', '_controller' => 'App\\Controller\\ActiviteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/listPsychiatre' => [[['_route' => 'app_admin_listpsychiatre', '_controller' => 'App\\Controller\\AdminController::listPsychiatre'], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajouterPsychitare' => [[['_route' => 'app_admin_ajouterpsychiatre', '_controller' => 'App\\Controller\\AdminController::addpsychiatre'], null, null, null, false, false, null]],
        '/admin/listFournisseur' => [[['_route' => 'app_admin_listfournisseur', '_controller' => 'App\\Controller\\AdminController::listFournisseur'], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajouterFournisseur' => [[['_route' => 'app_admin_ajouterfournisseur', '_controller' => 'App\\Controller\\AdminController::addfournisseur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/listPatient' => [[['_route' => 'list_patient_index', '_controller' => 'App\\Controller\\AdminController::listPatient'], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajouterPatient' => [[['_route' => 'app_patient_new', '_controller' => 'App\\Controller\\AdminController::addpatient'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/article/allPr' => [[['_route' => 'app_article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/article/article/new' => [[['_route' => 'app_article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/authenticator/pair' => [[['_route' => 'app_authenticator_pair', '_controller' => 'App\\Controller\\AuthenticatorController::pair'], null, null, null, false, false, null]],
        '/authenticator/verify' => [[['_route' => 'app_authenticator_verify', '_controller' => 'App\\Controller\\AuthenticatorController::verify'], null, null, null, false, false, null]],
        '/block' => [[['_route' => 'app_block', '_controller' => 'App\\Controller\\BlockController::index'], null, null, null, false, false, null]],
        '/cart/valider' => [[['_route' => 'valider_commande', '_controller' => 'App\\Controller\\CartController::valider'], null, ['GET' => 0], null, false, false, null]],
        '/cart' => [[['_route' => 'cart_show', '_controller' => 'App\\Controller\\CartController::showCart'], null, null, null, false, false, null]],
        '/cart/clear' => [[['_route' => 'cart_clear', '_controller' => 'App\\Controller\\CartController::clearCart'], null, null, null, false, false, null]],
        '/cart/confirmation' => [[['_route' => 'cart_confirmation', '_controller' => 'App\\Controller\\CartController::confirmation'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/category/patient' => [[['_route' => 'app_category_front', '_controller' => 'App\\Controller\\CategoryController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/commande/admin' => [[['_route' => 'app_commande_index_admin', '_controller' => 'App\\Controller\\CommandeController::andexadmin'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/consultation' => [[['_route' => 'app_consultation_index', '_controller' => 'App\\Controller\\ConsultationController::index'], null, null, null, false, false, null]],
        '/consultation/new' => [[['_route' => 'app_consultation_new', '_controller' => 'App\\Controller\\ConsultationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/consultation/calendar' => [[['_route' => 'app_consultation_calendar_view', '_controller' => 'App\\Controller\\ConsultationController::calendarView'], null, ['GET' => 0], null, false, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\ErrorController::show'], null, null, null, false, false, null]],
        '/event/add' => [[['_route' => 'app_event_add', '_controller' => 'App\\Controller\\EventController::addEvent'], null, ['POST' => 0], null, false, false, null]],
        '/exercice' => [[['_route' => 'app_exercice_index', '_controller' => 'App\\Controller\\ExerciceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/exercice/new' => [[['_route' => 'app_exercice_new', '_controller' => 'App\\Controller\\ExerciceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/first' => [[['_route' => 'app_first', '_controller' => 'App\\Controller\\FirstController::index'], null, null, null, false, false, null]],
        '/fournisseur' => [[['_route' => 'app_fournisseur', '_controller' => 'App\\Controller\\FournisseurController::index'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'app_calendar', '_controller' => 'App\\Controller\\GoogleAuthController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/ligne/commande' => [[['_route' => 'app_ligne_commande_index', '_controller' => 'App\\Controller\\LigneCommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ligne/commande/new' => [[['_route' => 'app_ligne_commande_new', '_controller' => 'App\\Controller\\LigneCommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::show'], null, null, null, false, false, null]],
        '/patient/activities' => [[['_route' => 'patient_activity_index', '_controller' => 'App\\Controller\\PatientActivityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/patient/activities/update-status' => [[['_route' => 'patient_update_activity_status', '_controller' => 'App\\Controller\\PatientActivityController::updateStatus'], null, ['POST' => 0], null, false, false, null]],
        '/patient/produit_patient' => [[['_route' => 'produit_index_patient', '_controller' => 'App\\Controller\\PatientController::index'], null, ['GET' => 0], null, false, false, null]],
        '/patient/api/produits' => [[['_route' => 'api_produits', '_controller' => 'App\\Controller\\PatientController::getProduit'], null, ['GET' => 0], null, false, false, null]],
        '/patient/patient/consultation' => [[['_route' => 'patient_consultation', '_controller' => 'App\\Controller\\PatientController::consultation'], null, null, null, false, false, null]],
        '/produit_categories' => [[['_route' => 'produit_categories_index', '_controller' => 'App\\Controller\\ProduitCategoriesController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ajouter-categorie' => [[['_route' => 'ajouter_categorie', '_controller' => 'App\\Controller\\ProduitCategoriesController::ajouterCategorie'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit' => [[['_route' => 'produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, false, false, null]],
        '/produit/add' => [[['_route' => 'produit_add', '_controller' => 'App\\Controller\\ProduitController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/psychiatre' => [[['_route' => 'app_psychiatre', '_controller' => 'App\\Controller\\PsychiatreController::index'], null, null, null, false, false, null]],
        '/question' => [[['_route' => 'app_question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/question/new' => [[['_route' => 'app_question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rdv' => [[['_route' => 'app_rdv_index', '_controller' => 'App\\Controller\\RDVController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rdv/new' => [[['_route' => 'app_rdv_new', '_controller' => 'App\\Controller\\RDVController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/rendezVous' => [[['_route' => 'app_rendez__vous_admin', '_controller' => 'App\\Controller\\RendezVousController::index'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/account-suspended' => [[['_route' => 'app_account_suspended', '_controller' => 'App\\Controller\\SecurityController::accountSuspended'], null, null, null, false, false, null]],
        '/square/pay' => [[['_route' => 'square_pay', '_controller' => 'App\\Controller\\SquareController::pay'], null, ['POST' => 0], null, false, false, null]],
        '/traitement' => [[['_route' => 'app_traitement_indexx', '_controller' => 'App\\Controller\\TraitementController::indexx'], null, null, null, false, false, null]],
        '/produits/recherche' => [[['_route' => 'produit_recherche', '_controller' => 'App\\Controller\\ProduitController::search'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|ctivite/(?'
                        .'|([^/]++)(?'
                            .'|/edit(*:234)'
                            .'|(*:242)'
                        .')'
                        .'|update\\-status/([^/]++)(*:274)'
                    .')'
                    .'|dmin(?'
                        .'|/(?'
                            .'|profile/([^/]++)(*:310)'
                            .'|list(?'
                                .'|P(?'
                                    .'|sychiatre/([^/]++)/block(*:353)'
                                    .'|atient/([^/]++)/block(*:382)'
                                .')'
                                .'|Fournisseur/([^/]++)/block(*:417)'
                            .')'
                        .')'
                        .'|list(?'
                            .'|P(?'
                                .'|sychiatre/([^/]++)(?'
                                    .'|(*:459)'
                                    .'|/unblock(*:475)'
                                .')'
                                .'|atient/([^/]++)(?'
                                    .'|(*:502)'
                                    .'|/unblock(*:518)'
                                .')'
                            .')'
                            .'|Fournisseur/([^/]++)(?'
                                .'|(*:551)'
                                .'|/unblock(*:567)'
                            .')'
                        .')'
                    .')'
                    .'|rticle/(?'
                        .'|([^/]++)(?'
                            .'|/edit(*:604)'
                            .'|(*:612)'
                        .')'
                        .'|article/([^/]++)(?'
                            .'|(*:640)'
                            .'|/rate(*:653)'
                        .')'
                        .'|patient/article/([^/]++)(*:686)'
                    .')'
                    .'|jouter\\-panier/([^/]++)(?'
                        .'|(*:721)'
                    .')'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|rt/(?'
                            .'|add/([^/]++)(*:758)'
                            .'|remove/([^/]++)(*:781)'
                            .'|increase/([^/]++)(*:806)'
                            .'|decrease/([^/]++)(*:831)'
                        .')'
                        .'|tegory/(?'
                            .'|([^/]++)(?'
                                .'|/edit(*:866)'
                                .'|(*:874)'
                            .')'
                            .'|category/([^/]++)(*:900)'
                            .'|patient/category/([^/]++)(*:933)'
                        .')'
                    .')'
                    .'|o(?'
                        .'|mmande/(?'
                            .'|imprimer/([^/]++)(*:974)'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|a(?'
                                        .'|jout/ligne/commande(*:1020)'
                                        .'|dmin(*:1033)'
                                    .')'
                                    .'|edit(*:1047)'
                                .')'
                                .'|(*:1057)'
                            .')'
                        .')'
                        .'|n(?'
                            .'|sultation/(?'
                                .'|([^/]++)(?'
                                    .'|/edit(*:1101)'
                                    .'|(*:1110)'
                                .')'
                                .'|consultation(?'
                                    .'|/([^/]++)/add\\-to\\-calendar(*:1162)'
                                    .'|patient(*:1178)'
                                .')'
                                .'|todo/([^/]++)/add\\-to\\-todoist(*:1218)'
                                .'|([^/]++)/traitement(?'
                                    .'|(*:1249)'
                                    .'|/(?'
                                        .'|new(*:1265)'
                                        .'|([^/]++)(?'
                                            .'|(*:1285)'
                                            .'|/(?'
                                                .'|edit(*:1302)'
                                                .'|delete(*:1317)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|firm\\-email/([^/]++)(*:1351)'
                        .')'
                    .')'
                .')'
                .'|/exercice/([^/]++)(?'
                    .'|(*:1384)'
                    .'|/edit(*:1398)'
                    .'|(*:1407)'
                .')'
                .'|/fournisseur/([^/]++)(?'
                    .'|(*:1441)'
                    .'|/edit(*:1455)'
                    .'|(*:1464)'
                .')'
                .'|/ligne/commande/([^/]++)(?'
                    .'|(*:1501)'
                    .'|/edit(*:1515)'
                    .'|(*:1524)'
                .')'
                .'|/supprimer\\-du\\-panier/([^/]++)(*:1565)'
                .'|/modifier\\-quantite/([^/]++)(*:1602)'
                .'|/p(?'
                    .'|atient/(?'
                        .'|produit/([^/]++)(*:1642)'
                        .'|([^/]++)(?'
                            .'|/edit(*:1667)'
                            .'|(*:1676)'
                        .')'
                        .'|patient/([^/]++)/activites(*:1712)'
                        .'|(\\d+)(*:1726)'
                    .')'
                    .'|roduit(?'
                        .'|\\-categorie/(?'
                            .'|show/([^/]++)(*:1773)'
                            .'|edit/([^/]++)(*:1795)'
                            .'|delete/([^/]++)(*:1819)'
                        .')'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:1849)'
                                .'|delete(*:1864)'
                                .'|noter(*:1878)'
                                .'|rate(*:1891)'
                            .')'
                            .'|(*:1901)'
                        .')'
                    .')'
                    .'|sychiatre/([^/]++)(?'
                        .'|(*:1933)'
                        .'|/edit(*:1947)'
                        .'|(*:1956)'
                    .')'
                .')'
                .'|/q(?'
                    .'|r\\-code/([^/]++)(*:1988)'
                    .'|uestion/([^/]++)(?'
                        .'|(*:2016)'
                        .'|/edit(*:2030)'
                        .'|(*:2039)'
                    .')'
                .')'
                .'|/r(?'
                    .'|dv/(?'
                        .'|([^/]++)(?'
                            .'|(*:2072)'
                            .'|/edit(*:2086)'
                            .'|(*:2095)'
                        .')'
                        .'|accept/([^/]++)(*:2120)'
                        .'|cancel/([^/]++)(*:2144)'
                    .')'
                    .'|es(?'
                        .'|et\\-password/reset(?:/([^/]++))?(*:2191)'
                        .'|ponse/exercise/([^/]++)/new(*:2227)'
                    .')'
                .')'
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
        234 => [[['_route' => 'app_activite_edit', '_controller' => 'App\\Controller\\ActiviteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [
            [['_route' => 'app_activite_delete', '_controller' => 'App\\Controller\\ActiviteController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_activite_show', '_controller' => 'App\\Controller\\ActiviteController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        274 => [[['_route' => 'aapp_activite_update_status', '_controller' => 'App\\Controller\\YourController::updateStatus'], ['id'], ['POST' => 0], null, false, true, null]],
        310 => [[['_route' => 'app_admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        353 => [[['_route' => 'app_psychiatre_block', '_controller' => 'App\\Controller\\AdminController::blockPsychiatre'], ['id'], null, null, false, false, null]],
        382 => [[['_route' => 'app_patient_block', '_controller' => 'App\\Controller\\AdminController::blockPatient'], ['id'], null, null, false, false, null]],
        417 => [[['_route' => 'app_fournisseur_block', '_controller' => 'App\\Controller\\AdminController::blockFournisseur'], ['id'], null, null, false, false, null]],
        459 => [[['_route' => 'psychiatre_delete', '_controller' => 'App\\Controller\\AdminController::deletepsychiatre'], ['id'], ['POST' => 0], null, false, true, null]],
        475 => [[['_route' => 'app_psychiatre_unblock', '_controller' => 'App\\Controller\\AdminController::unblockPsychiatre'], ['id'], ['POST' => 0], null, false, false, null]],
        502 => [[['_route' => 'patient_delete', '_controller' => 'App\\Controller\\AdminController::deletePatient'], ['id'], ['POST' => 0], null, false, true, null]],
        518 => [[['_route' => 'app_patient_unblock', '_controller' => 'App\\Controller\\AdminController::unblockPatient'], ['id'], ['POST' => 0], null, false, false, null]],
        551 => [[['_route' => 'fournisseur_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        567 => [[['_route' => 'app_fournisseur_unblock', '_controller' => 'App\\Controller\\AdminController::unblockFournisseur'], ['id'], ['POST' => 0], null, false, false, null]],
        604 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        612 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        640 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        653 => [[['_route' => 'app_article_rate', '_controller' => 'App\\Controller\\ArticleController::rateArticle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        686 => [[['_route' => 'app_article_show_front', '_controller' => 'App\\Controller\\ArticleController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        721 => [
            [['_route' => 'ajouter_panier', '_controller' => 'App\\Controller\\PanierController::ajouterPanier'], ['id'], null, null, false, true, null],
            [['_route' => 'app_ajouter_panier', '_controller' => 'App\\Controller\\ProduitController::ajouterPanier'], ['id'], null, null, false, true, null],
        ],
        758 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::addToCart'], ['id'], null, null, false, true, null]],
        781 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::removeFromCart'], ['id'], null, null, false, true, null]],
        806 => [[['_route' => 'cart_increase', '_controller' => 'App\\Controller\\CartController::increaseQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        831 => [[['_route' => 'cart_decrease', '_controller' => 'App\\Controller\\CartController::decreaseQuantity'], ['id'], null, null, false, true, null]],
        866 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        874 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        900 => [[['_route' => 'app_articles_by_category', '_controller' => 'App\\Controller\\CategoryController::articlesByCategory'], ['id'], ['GET' => 0], null, false, true, null]],
        933 => [[['_route' => 'app_articles_by_category_front', '_controller' => 'App\\Controller\\CategoryController::articlesByCategoryFront'], ['id'], ['GET' => 0], null, false, true, null]],
        974 => [[['_route' => 'imprimer_dossier', '_controller' => 'App\\Controller\\CommandeController::imprimer'], ['id'], null, null, false, true, null]],
        1020 => [[['_route' => 'app_commande_add_ligne_de_commande', '_controller' => 'App\\Controller\\CommandeController::ajout2'], ['id'], null, null, false, false, null]],
        1033 => [[['_route' => 'app_commande_show_admin', '_controller' => 'App\\Controller\\CommandeController::adminshow'], ['id'], ['GET' => 0], null, false, false, null]],
        1047 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], null, null, false, false, null]],
        1057 => [
            [['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1101 => [[['_route' => 'app_consultation_edit', '_controller' => 'App\\Controller\\ConsultationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1110 => [[['_route' => 'app_consultation_delete', '_controller' => 'App\\Controller\\ConsultationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1162 => [[['_route' => 'app_consultation_calendar', '_controller' => 'App\\Controller\\ConsultationController::addToCalendar'], ['id'], ['POST' => 0], null, false, false, null]],
        1178 => [[['_route' => 'app_consultation_patient', '_controller' => 'App\\Controller\\ConsultationController::indexpatient'], [], null, null, false, false, null]],
        1218 => [[['_route' => 'app_consultation_todoist', '_controller' => 'App\\Controller\\ConsultationController::addToTodoist'], ['id'], ['POST' => 0], null, false, false, null]],
        1249 => [[['_route' => 'app_traitement_index', '_controller' => 'App\\Controller\\TraitementController::index'], ['consultation_id'], null, null, false, false, null]],
        1265 => [[['_route' => 'app_traitement_new', '_controller' => 'App\\Controller\\TraitementController::new'], ['consultation_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1285 => [[['_route' => 'app_traitement_show', '_controller' => 'App\\Controller\\TraitementController::show'], ['consultation_id', 'id'], ['GET' => 0], null, false, true, null]],
        1302 => [[['_route' => 'app_traitement_edit', '_controller' => 'App\\Controller\\TraitementController::edit'], ['consultation_id', 'id'], null, null, false, false, null]],
        1317 => [[['_route' => 'app_traitement_delete', '_controller' => 'App\\Controller\\TraitementController::delete'], ['consultation_id', 'id'], ['POST' => 0], null, false, false, null]],
        1351 => [[['_route' => 'app_confirm_email', '_controller' => 'App\\Controller\\RegistrationController::confirmEmail'], ['token'], null, null, false, true, null]],
        1384 => [[['_route' => 'app_exercice_show', '_controller' => 'App\\Controller\\ExerciceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1398 => [[['_route' => 'app_exercice_edit', '_controller' => 'App\\Controller\\ExerciceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1407 => [[['_route' => 'app_exercice_delete', '_controller' => 'App\\Controller\\ExerciceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1441 => [[['_route' => 'app_fournisseur_show', '_controller' => 'App\\Controller\\FournisseurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1455 => [[['_route' => 'app_fournisseur_edit', '_controller' => 'App\\Controller\\FournisseurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1464 => [[['_route' => 'app_fournisseur_delete', '_controller' => 'App\\Controller\\FournisseurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1501 => [[['_route' => 'app_ligne_commande_show', '_controller' => 'App\\Controller\\LigneCommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1515 => [[['_route' => 'app_ligne_commande_edit', '_controller' => 'App\\Controller\\LigneCommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1524 => [[['_route' => 'app_ligne_commande_delete', '_controller' => 'App\\Controller\\LigneCommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1565 => [[['_route' => 'supprimer_du_panier', '_controller' => 'App\\Controller\\PanierController::supprimerDuPanier'], ['id'], null, null, false, true, null]],
        1602 => [[['_route' => 'modifier_quantite_panier', '_controller' => 'App\\Controller\\PanierController::modifierQuantite'], ['id'], ['POST' => 0], null, false, true, null]],
        1642 => [[['_route' => 'produit_show_patient', '_controller' => 'App\\Controller\\PatientController::showProduit'], ['id'], null, null, false, true, null]],
        1667 => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\PatientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1676 => [[['_route' => 'app_patient_delet', '_controller' => 'App\\Controller\\PatientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1712 => [[['_route' => 'app_patient_activites', '_controller' => 'App\\Controller\\PatientController::viewActivities'], ['patientId'], null, null, false, false, null]],
        1726 => [[['_route' => 'app_patient_show', '_format' => 'html', '_controller' => 'App\\Controller\\PatientController::show'], ['id'], null, null, false, true, null]],
        1773 => [[['_route' => 'produit_categorie_show', '_controller' => 'App\\Controller\\ProduitCategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1795 => [[['_route' => 'produit_categories_edit', '_controller' => 'App\\Controller\\ProduitCategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1819 => [[['_route' => 'produit_categories_delete', '_controller' => 'App\\Controller\\ProduitCategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1849 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1864 => [[['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1878 => [[['_route' => 'produit_noter', '_controller' => 'App\\Controller\\ProduitController::noter'], ['id'], ['POST' => 0], null, false, false, null]],
        1891 => [[['_route' => 'produit_rate', '_controller' => 'App\\Controller\\RatingController::rate'], ['id'], null, null, false, false, null]],
        1901 => [[['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1933 => [[['_route' => 'app_psychiatre_show', '_controller' => 'App\\Controller\\PsychiatreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1947 => [[['_route' => 'app_psychiatre_edit', '_controller' => 'App\\Controller\\PsychiatreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1956 => [[['_route' => 'app_psychiatre_delete', '_controller' => 'App\\Controller\\PsychiatreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1988 => [[['_route' => 'qr_code', '_controller' => 'App\\Controller\\QrCodeController::generateQrCode'], ['id'], null, null, false, true, null]],
        2016 => [[['_route' => 'app_question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2030 => [[['_route' => 'app_question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2039 => [[['_route' => 'app_question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2072 => [[['_route' => 'app_rdv_show', '_controller' => 'App\\Controller\\RDVController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2086 => [[['_route' => 'app_rdv_edit', '_controller' => 'App\\Controller\\RDVController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2095 => [[['_route' => 'app_rdv_delete', '_controller' => 'App\\Controller\\RDVController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2120 => [[['_route' => 'app_rdv_accept', '_controller' => 'App\\Controller\\RendezVousController::accept'], ['id'], ['POST' => 0], null, false, true, null]],
        2144 => [[['_route' => 'app_rdv_cancel', '_controller' => 'App\\Controller\\RendezVousController::cancel'], ['id'], ['POST' => 0], null, false, true, null]],
        2191 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        2227 => [
            [['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
