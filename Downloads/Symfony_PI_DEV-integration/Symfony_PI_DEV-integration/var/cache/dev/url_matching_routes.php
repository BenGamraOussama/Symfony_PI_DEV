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
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/panier/ajouter' => [[['_route' => 'app_panier_ajouter', '_controller' => 'App\\Controller\\PanierController::ajouterAuPanier'], null, ['POST' => 0], null, false, false, null]],
        '/patient/activities' => [[['_route' => 'patient_activity_index', '_controller' => 'App\\Controller\\PatientActivityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/patient/activities/update-status' => [[['_route' => 'patient_update_activity_status', '_controller' => 'App\\Controller\\PatientActivityController::updateStatus'], null, ['POST' => 0], null, false, false, null]],
        '/patient/produit/patient' => [[['_route' => 'produit_index_patient', '_controller' => 'App\\Controller\\PatientController::indexPatient'], null, ['GET' => 0], null, false, false, null]],
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
                        .'|/profile/([^/]++)(*:307)'
                        .'|list(?'
                            .'|P(?'
                                .'|sychiatre/([^/]++)(*:344)'
                                .'|atient/([^/]++)(*:367)'
                            .')'
                            .'|Fournisseur/([^/]++)(*:396)'
                        .')'
                    .')'
                .')'
                .'|/co(?'
                    .'|mmande/([^/]++)(?'
                        .'|/(?'
                            .'|ajout/ligne/commande(*:455)'
                            .'|edit(*:467)'
                        .')'
                        .'|(*:476)'
                    .')'
                    .'|nsultation/([^/]++)(?'
                        .'|(*:507)'
                        .'|/edit(*:520)'
                        .'|(*:528)'
                    .')'
                .')'
                .'|/exercice/([^/]++)(?'
                    .'|(*:559)'
                    .'|/edit(*:572)'
                    .'|(*:580)'
                .')'
                .'|/fournisseur/([^/]++)(?'
                    .'|(*:613)'
                    .'|/edit(*:626)'
                    .'|(*:634)'
                .')'
                .'|/ligne/commande/([^/]++)(?'
                    .'|(*:670)'
                    .'|/edit(*:683)'
                    .'|(*:691)'
                .')'
                .'|/p(?'
                    .'|atient/(?'
                        .'|produit/(\\d+)(*:728)'
                        .'|([^/]++)(?'
                            .'|/edit(*:752)'
                            .'|(*:760)'
                        .')'
                        .'|patient/([^/]++)/activites(*:795)'
                        .'|(\\d+)(*:808)'
                    .')'
                    .'|roduit(?'
                        .'|\\-categorie/(?'
                            .'|show/([^/]++)(*:854)'
                            .'|edit/([^/]++)(*:875)'
                            .'|delete/([^/]++)(*:898)'
                        .')'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:927)'
                                .'|delete(*:941)'
                            .')'
                            .'|(*:950)'
                        .')'
                    .')'
                    .'|sychiatre/([^/]++)(?'
                        .'|(*:981)'
                        .'|/edit(*:994)'
                        .'|(*:1002)'
                    .')'
                .')'
                .'|/question/([^/]++)(?'
                    .'|(*:1034)'
                    .'|/edit(*:1048)'
                    .'|(*:1057)'
                .')'
                .'|/r(?'
                    .'|dv/([^/]++)(?'
                        .'|(*:1086)'
                        .'|/edit(*:1100)'
                        .'|(*:1109)'
                    .')'
                    .'|e(?'
                        .'|ponse/([^/]++)/delete(*:1144)'
                        .'|s(?'
                            .'|et\\-password/reset(?:/([^/]++))?(*:1189)'
                            .'|ponse/exercise/([^/]++)/new(*:1225)'
                        .')'
                    .')'
                .')'
                .'|/traitement/([^/]++)(?'
                    .'|(*:1260)'
                    .'|/edit(*:1274)'
                    .'|(*:1283)'
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
        307 => [[['_route' => 'app_admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        344 => [[['_route' => 'psychiatre_delete', '_controller' => 'App\\Controller\\AdminController::deletepsychiatre'], ['id'], ['POST' => 0], null, false, true, null]],
        367 => [[['_route' => 'patient_delete', '_controller' => 'App\\Controller\\AdminController::deletePatient'], ['id'], ['POST' => 0], null, false, true, null]],
        396 => [[['_route' => 'fournisseur_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        455 => [[['_route' => 'app_commande_add_ligne_de_commande', '_controller' => 'App\\Controller\\CommandeController::ajout2'], ['id'], null, null, false, false, null]],
        467 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], null, null, false, false, null]],
        476 => [
            [['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        507 => [[['_route' => 'app_consultation_show', '_controller' => 'App\\Controller\\ConsultationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        520 => [[['_route' => 'app_consultation_edit', '_controller' => 'App\\Controller\\ConsultationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        528 => [[['_route' => 'app_consultation_delete', '_controller' => 'App\\Controller\\ConsultationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        559 => [[['_route' => 'app_exercice_show', '_controller' => 'App\\Controller\\ExerciceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        572 => [[['_route' => 'app_exercice_edit', '_controller' => 'App\\Controller\\ExerciceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        580 => [[['_route' => 'app_exercice_delete', '_controller' => 'App\\Controller\\ExerciceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        613 => [[['_route' => 'app_fournisseur_show', '_controller' => 'App\\Controller\\FournisseurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        626 => [[['_route' => 'app_fournisseur_edit', '_controller' => 'App\\Controller\\FournisseurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        634 => [[['_route' => 'app_fournisseur_delete', '_controller' => 'App\\Controller\\FournisseurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        670 => [[['_route' => 'app_ligne_commande_show', '_controller' => 'App\\Controller\\LigneCommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        683 => [[['_route' => 'app_ligne_commande_edit', '_controller' => 'App\\Controller\\LigneCommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        691 => [[['_route' => 'app_ligne_commande_delete', '_controller' => 'App\\Controller\\LigneCommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        728 => [[['_route' => 'produit_show_patient', '_controller' => 'App\\Controller\\PatientController::showProduit'], ['id'], ['GET' => 0], null, false, true, null]],
        752 => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\PatientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        760 => [[['_route' => 'app_patient_delet', '_controller' => 'App\\Controller\\PatientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        795 => [[['_route' => 'app_patient_activites', '_controller' => 'App\\Controller\\PatientController::viewActivities'], ['patientId'], null, null, false, false, null]],
        808 => [[['_route' => 'app_patient_show', '_format' => 'html', '_controller' => 'App\\Controller\\PatientController::show'], ['id'], null, null, false, true, null]],
        854 => [[['_route' => 'produit_categorie_show', '_controller' => 'App\\Controller\\ProduitCategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        875 => [[['_route' => 'produit_categories_edit', '_controller' => 'App\\Controller\\ProduitCategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        898 => [[['_route' => 'produit_categories_delete', '_controller' => 'App\\Controller\\ProduitCategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        927 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        941 => [[['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        950 => [[['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        981 => [[['_route' => 'app_psychiatre_show', '_controller' => 'App\\Controller\\PsychiatreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        994 => [[['_route' => 'app_psychiatre_edit', '_controller' => 'App\\Controller\\PsychiatreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1002 => [[['_route' => 'app_psychiatre_delete', '_controller' => 'App\\Controller\\PsychiatreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1034 => [[['_route' => 'app_question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1048 => [[['_route' => 'app_question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1057 => [[['_route' => 'app_question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1086 => [[['_route' => 'app_rdv_show', '_controller' => 'App\\Controller\\RDVController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1100 => [[['_route' => 'app_rdv_edit', '_controller' => 'App\\Controller\\RDVController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1109 => [[['_route' => 'app_rdv_delete', '_controller' => 'App\\Controller\\RDVController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1144 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1189 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1225 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['POST' => 0], null, false, false, null]],
        1260 => [[['_route' => 'app_traitement_show', '_controller' => 'App\\Controller\\TraitementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1274 => [[['_route' => 'app_traitement_edit', '_controller' => 'App\\Controller\\TraitementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1283 => [
            [['_route' => 'app_traitement_delete', '_controller' => 'App\\Controller\\TraitementController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
