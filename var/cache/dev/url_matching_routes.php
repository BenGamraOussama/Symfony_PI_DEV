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
        '/authenticator/pair' => [[['_route' => 'app_authenticator_pair', '_controller' => 'App\\Controller\\AuthenticatorController::pair'], null, null, null, false, false, null]],
        '/authenticator/verify' => [[['_route' => 'app_authenticator_verify', '_controller' => 'App\\Controller\\AuthenticatorController::verify'], null, null, null, false, false, null]],
        '/block' => [[['_route' => 'app_block', '_controller' => 'App\\Controller\\BlockController::index'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/consultation' => [[['_route' => 'app_consultation_index', '_controller' => 'App\\Controller\\ConsultationController::index'], null, null, null, false, false, null]],
        '/consultation/new' => [[['_route' => 'app_consultation_new', '_controller' => 'App\\Controller\\ConsultationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\ErrorController::show'], null, null, null, false, false, null]],
        '/exercice' => [[['_route' => 'app_exercice_index', '_controller' => 'App\\Controller\\ExerciceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/exercice/new' => [[['_route' => 'app_exercice_new', '_controller' => 'App\\Controller\\ExerciceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/first' => [[['_route' => 'app_first', '_controller' => 'App\\Controller\\FirstController::index'], null, null, null, false, false, null]],
        '/fournisseur' => [[['_route' => 'app_fournisseur', '_controller' => 'App\\Controller\\FournisseurController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/ligne/commande' => [[['_route' => 'app_ligne_commande_index', '_controller' => 'App\\Controller\\LigneCommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ligne/commande/new' => [[['_route' => 'app_ligne_commande_new', '_controller' => 'App\\Controller\\LigneCommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/patient/activities' => [[['_route' => 'patient_activity_index', '_controller' => 'App\\Controller\\PatientActivityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/patient/activities/update-status' => [[['_route' => 'patient_update_activity_status', '_controller' => 'App\\Controller\\PatientActivityController::updateStatus'], null, ['POST' => 0], null, false, false, null]],
        '/patient/produit_patient' => [[['_route' => 'produit_index_patient', '_controller' => 'App\\Controller\\PatientController::indexPatient'], null, ['GET' => 0], null, false, false, null]],
        '/patient/api/produits' => [[['_route' => 'api_produits', '_controller' => 'App\\Controller\\PatientController::getProduit'], null, ['GET' => 0], null, false, false, null]],
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
        '/traitement' => [[['_route' => 'app_traitement_index', '_controller' => 'App\\Controller\\TraitementController::index'], null, null, null, false, false, null]],
        '/traitement/new' => [[['_route' => 'app_traitement_new', '_controller' => 'App\\Controller\\TraitementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .')'
                .'|/co(?'
                    .'|mmande/([^/]++)(?'
                        .'|/(?'
                            .'|ajout/ligne/commande(*:627)'
                            .'|edit(*:639)'
                        .')'
                        .'|(*:648)'
                    .')'
                    .'|nsultation/([^/]++)(?'
                        .'|(*:679)'
                        .'|/edit(*:692)'
                        .'|(*:700)'
                    .')'
                .')'
                .'|/exercice/([^/]++)(?'
                    .'|(*:731)'
                    .'|/edit(*:744)'
                    .'|(*:752)'
                .')'
                .'|/fournisseur/([^/]++)(?'
                    .'|(*:785)'
                    .'|/edit(*:798)'
                    .'|(*:806)'
                .')'
                .'|/ligne/commande/([^/]++)(?'
                    .'|(*:842)'
                    .'|/edit(*:855)'
                    .'|(*:863)'
                .')'
                .'|/p(?'
                    .'|atient/(?'
                        .'|produit/(\\d+)(*:900)'
                        .'|([^/]++)(?'
                            .'|/edit(*:924)'
                            .'|(*:932)'
                        .')'
                        .'|patient/([^/]++)/activites(*:967)'
                        .'|(\\d+)(*:980)'
                    .')'
                    .'|roduit(?'
                        .'|\\-categorie/(?'
                            .'|show/([^/]++)(*:1026)'
                            .'|edit/([^/]++)(*:1048)'
                            .'|delete/([^/]++)(*:1072)'
                        .')'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:1102)'
                                .'|delete(*:1117)'
                            .')'
                            .'|(*:1127)'
                        .')'
                    .')'
                    .'|sychiatre/([^/]++)(?'
                        .'|(*:1159)'
                        .'|/edit(*:1173)'
                        .'|(*:1182)'
                    .')'
                .')'
                .'|/question/([^/]++)(?'
                    .'|(*:1214)'
                    .'|/edit(*:1228)'
                    .'|(*:1237)'
                .')'
                .'|/r(?'
                    .'|dv/([^/]++)(?'
                        .'|(*:1266)'
                        .'|/edit(*:1280)'
                        .'|(*:1289)'
                    .')'
                    .'|e(?'
                        .'|ponse/([^/]++)/delete(*:1324)'
                        .'|s(?'
                            .'|et\\-password/reset(?:/([^/]++))?(*:1369)'
                            .'|ponse/exercise/([^/]++)/new(*:1405)'
                        .')'
                    .')'
                .')'
                .'|/traitement/([^/]++)(?'
                    .'|(*:1440)'
                    .'|/edit(*:1454)'
                    .'|(*:1463)'
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
        627 => [[['_route' => 'app_commande_add_ligne_de_commande', '_controller' => 'App\\Controller\\CommandeController::ajout2'], ['id'], null, null, false, false, null]],
        639 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], null, null, false, false, null]],
        648 => [
            [['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        679 => [[['_route' => 'app_consultation_show', '_controller' => 'App\\Controller\\ConsultationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        692 => [[['_route' => 'app_consultation_edit', '_controller' => 'App\\Controller\\ConsultationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        700 => [[['_route' => 'app_consultation_delete', '_controller' => 'App\\Controller\\ConsultationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        731 => [[['_route' => 'app_exercice_show', '_controller' => 'App\\Controller\\ExerciceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        744 => [[['_route' => 'app_exercice_edit', '_controller' => 'App\\Controller\\ExerciceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        752 => [[['_route' => 'app_exercice_delete', '_controller' => 'App\\Controller\\ExerciceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        785 => [[['_route' => 'app_fournisseur_show', '_controller' => 'App\\Controller\\FournisseurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        798 => [[['_route' => 'app_fournisseur_edit', '_controller' => 'App\\Controller\\FournisseurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        806 => [[['_route' => 'app_fournisseur_delete', '_controller' => 'App\\Controller\\FournisseurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        842 => [[['_route' => 'app_ligne_commande_show', '_controller' => 'App\\Controller\\LigneCommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        855 => [[['_route' => 'app_ligne_commande_edit', '_controller' => 'App\\Controller\\LigneCommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        863 => [[['_route' => 'app_ligne_commande_delete', '_controller' => 'App\\Controller\\LigneCommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        900 => [[['_route' => 'produit_show_patient', '_controller' => 'App\\Controller\\PatientController::showProduit'], ['id'], ['GET' => 0], null, false, true, null]],
        924 => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\PatientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        932 => [[['_route' => 'app_patient_delet', '_controller' => 'App\\Controller\\PatientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        967 => [[['_route' => 'app_patient_activites', '_controller' => 'App\\Controller\\PatientController::viewActivities'], ['patientId'], null, null, false, false, null]],
        980 => [[['_route' => 'app_patient_show', '_format' => 'html', '_controller' => 'App\\Controller\\PatientController::show'], ['id'], null, null, false, true, null]],
        1026 => [[['_route' => 'produit_categorie_show', '_controller' => 'App\\Controller\\ProduitCategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1048 => [[['_route' => 'produit_categories_edit', '_controller' => 'App\\Controller\\ProduitCategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1072 => [[['_route' => 'produit_categories_delete', '_controller' => 'App\\Controller\\ProduitCategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1102 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1117 => [[['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1127 => [[['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1159 => [[['_route' => 'app_psychiatre_show', '_controller' => 'App\\Controller\\PsychiatreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1173 => [[['_route' => 'app_psychiatre_edit', '_controller' => 'App\\Controller\\PsychiatreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1182 => [[['_route' => 'app_psychiatre_delete', '_controller' => 'App\\Controller\\PsychiatreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1214 => [[['_route' => 'app_question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1228 => [[['_route' => 'app_question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1237 => [[['_route' => 'app_question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1266 => [[['_route' => 'app_rdv_show', '_controller' => 'App\\Controller\\RDVController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1280 => [[['_route' => 'app_rdv_edit', '_controller' => 'App\\Controller\\RDVController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1289 => [[['_route' => 'app_rdv_delete', '_controller' => 'App\\Controller\\RDVController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1324 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1369 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1405 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['POST' => 0], null, false, false, null]],
        1440 => [[['_route' => 'app_traitement_show', '_controller' => 'App\\Controller\\TraitementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1454 => [[['_route' => 'app_traitement_edit', '_controller' => 'App\\Controller\\TraitementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1463 => [
            [['_route' => 'app_traitement_delete', '_controller' => 'App\\Controller\\TraitementController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
