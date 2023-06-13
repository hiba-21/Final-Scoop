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
        '/avis1' => [[['_route' => 'avis1', '_controller' => 'App\\Controller\\AvisController::new'], null, null, null, false, false, null]],
        '/respo/Categories/cat' => [[['_route' => 'respo_Categories_home', '_controller' => 'App\\Controller\\CategoriesController::categorie'], null, null, null, false, false, null]],
        '/respo/Categories/produit' => [[['_route' => 'respo_Categories_produit', '_controller' => 'App\\Controller\\CategoriesController::produit'], null, null, null, false, false, null]],
        '/respo/Categories/ajout' => [[['_route' => 'respo_Categories_ajout', '_controller' => 'App\\Controller\\CategoriesController::ajoutCategorie'], null, null, null, false, false, null]],
        '/respo/Categories/ajoutProduit' => [[['_route' => 'respo_Categories_ajoutProduit', '_controller' => 'App\\Controller\\CategoriesController::ajoutProduit'], null, null, null, false, false, null]],
        '/clandar' => [[['_route' => 'clandar_index', '_controller' => 'App\\Controller\\ClandarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/clandar/new' => [[['_route' => 'clandar_new', '_controller' => 'App\\Controller\\ClandarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::show'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'service', '_controller' => 'App\\Controller\\HomeController::service'], null, null, null, false, false, null]],
        '/inscrire' => [[['_route' => 'inscrire', '_controller' => 'App\\Controller\\HomeController::inscrire'], null, null, null, false, false, null]],
        '/connecter' => [[['_route' => 'connecter', '_controller' => 'App\\Controller\\HomeController::connecter'], null, null, null, false, false, null]],
        '/temp' => [[['_route' => 'temp', '_controller' => 'App\\Controller\\HomeController::temp'], null, null, null, false, false, null]],
        '/stat' => [[['_route' => 'stat', '_controller' => 'App\\Controller\\HomeController::stat'], null, null, null, false, false, null]],
        '/index1' => [[['_route' => 'index1', '_controller' => 'App\\Controller\\HomeController::index1'], null, null, null, false, false, null]],
        '/utilisateurs' => [[['_route' => 'utilisateurs', '_controller' => 'App\\Controller\\HomeController::utilisateurs'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\HomeController::categories'], null, null, null, false, false, null]],
        '/commands' => [[['_route' => 'commands', '_controller' => 'App\\Controller\\HomeController::commands'], null, null, null, false, false, null]],
        '/paiement' => [[['_route' => 'paiement', '_controller' => 'App\\Controller\\HomeController::paiement'], null, null, null, false, false, null]],
        '/platforme' => [[['_route' => 'platforme', '_controller' => 'App\\Controller\\HomeController::platforme'], null, null, null, false, false, null]],
        '/reglage' => [[['_route' => 'reglage', '_controller' => 'App\\Controller\\HomeController::reglage'], null, null, null, false, false, null]],
        '/vac' => [[['_route' => 'Info', '_controller' => 'App\\Controller\\HomeController::Info'], null, null, null, false, false, null]],
        '/vacance' => [[['_route' => 'Client', '_controller' => 'App\\Controller\\HomeController::VacanceFermeture'], null, null, null, false, false, null]],
        '/cal' => [[['_route' => 'cal', '_controller' => 'App\\Controller\\HomeController::cal'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\HomeController::panier'], null, null, null, false, false, null]],
        '/Valider/add' => [[['_route' => 'Valider_add', '_controller' => 'App\\Controller\\HomeController::Valider'], null, null, null, false, false, null]],
        '/appClient' => [[['_route' => 'client', '_controller' => 'App\\Controller\\InsclientController::show'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'produit', '_controller' => 'App\\Controller\\InsclientController::produit'], null, null, null, false, false, null]],
        '/sup' => [[['_route' => 'sup', '_controller' => 'App\\Controller\\InsclientController::showsup'], null, null, null, false, false, null]],
        '/etat' => [[['_route' => 'etat', '_controller' => 'App\\Controller\\InsclientController::showetat'], null, null, null, false, false, null]],
        '/insclient' => [[['_route' => 'insclient', '_controller' => 'App\\Controller\\InsclientController::index'], null, null, null, false, false, null]],
        '/conclient' => [[['_route' => 'con_client', '_controller' => 'App\\Controller\\InsclientController::login'], null, null, null, false, false, null]],
        '/promotion/promo' => [[['_route' => 'promotion_promo', '_controller' => 'App\\Controller\\PromotionController::index'], null, null, null, false, false, null]],
        '/promotion/ajoutPromotion' => [[['_route' => 'promotion_ajout_promotion', '_controller' => 'App\\Controller\\PromotionController::ajoutpromo'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/profil/edit' => [[['_route' => 'profil_edit', '_controller' => 'App\\Controller\\RegistrationController::editProfil'], null, null, null, false, false, null]],
        '/profil/editpass' => [[['_route' => 'profil_editpass', '_controller' => 'App\\Controller\\RegistrationController::editPass'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/respo' => [[['_route' => 'respo_home', '_controller' => 'App\\Controller\\RespoController::index'], null, null, null, true, false, null]],
        '/respo/produit' => [[['_route' => 'respo_produit', '_controller' => 'App\\Controller\\RespoController::produit'], null, null, null, false, false, null]],
        '/respo/categories/ajout' => [[['_route' => 'respo_categories_ajout', '_controller' => 'App\\Controller\\RespoController::ajoutCategorie'], null, null, null, false, false, null]],
        '/respo/produit/ajout' => [[['_route' => 'respo_produit_ajout', '_controller' => 'App\\Controller\\RespoController::ajoutProduit'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/supplements' => [[['_route' => 'supplements', '_controller' => 'App\\Controller\\SupplementsController::index'], null, null, null, false, false, null]],
        '/ajoutsupplement' => [[['_route' => 'ajout_supplement', '_controller' => 'App\\Controller\\SupplementsController::ajoutsupplement'], null, null, null, false, false, null]],
        '/tab/clients' => [[['_route' => 'tab_clients', '_controller' => 'App\\Controller\\TabClientsController::index'], null, null, null, false, false, null]],
        '/vacance/fermeture' => [[['_route' => 'vacance_fermeture_index', '_controller' => 'App\\Controller\\VacanceFermetureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vacance/fermeture/vac' => [[['_route' => 'vacance_fermeture_new', '_controller' => 'App\\Controller\\VacanceFermetureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/res(?'
                    .'|po/Categories/(?'
                        .'|a(?'
                            .'|ffProduit/([^/]++)(*:215)'
                            .'|ctiver(?'
                                .'|/([^/]++)(*:241)'
                                .'|Cat/([^/]++)(*:261)'
                            .')'
                        .')'
                        .'|modifier(?'
                            .'|/([^/]++)(*:291)'
                            .'|Produit/([^/]++)(*:315)'
                        .')'
                        .'|supprime(?'
                            .'|r(?'
                                .'|/([^/]++)(*:348)'
                                .'|Cat/([^/]++)(*:368)'
                            .')'
                            .'|/image/([^/]++)(*:392)'
                        .')'
                    .')'
                    .'|et\\-password/reset(?:/([^/]++))?(*:434)'
                .')'
                .'|/clandar/([^/]++)(?'
                    .'|(*:463)'
                    .'|/edit(*:476)'
                    .'|(*:484)'
                .')'
                .'|/a(?'
                    .'|a/([^/]++)(*:508)'
                    .'|fpd/([^/]++)(*:528)'
                    .'|ctiver/([^/]++)(*:551)'
                .')'
                .'|/p(?'
                    .'|r(?'
                        .'|epare/([^/]++)(*:583)'
                        .'|omotion/(?'
                            .'|supprimer/([^/]++)(*:620)'
                            .'|modifier/([^/]++)(*:645)'
                        .')'
                    .')'
                    .'|anier/(?'
                        .'|add/([^/]++)(*:676)'
                        .'|remove/([^/]++)(*:699)'
                    .')'
                .')'
                .'|/supprimer/([^/]++)(*:728)'
                .'|/vacance/fermeture/([^/]++)(?'
                    .'|(*:766)'
                    .'|/edit(*:779)'
                    .'|(*:787)'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:850)'
                    .'|([A-z0-9_-]*)/(.+)(*:876)'
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
        215 => [[['_route' => 'respo_Categories_aff_Produit', '_controller' => 'App\\Controller\\CategoriesController::showPro'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'respo_Categories_activer', '_controller' => 'App\\Controller\\CategoriesController::activer'], ['id'], null, null, false, true, null]],
        261 => [[['_route' => 'respo_Categories_activerCat', '_controller' => 'App\\Controller\\CategoriesController::activerCat'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'respo_Categories_modifier', '_controller' => 'App\\Controller\\CategoriesController::modifierCategorie'], ['id'], null, null, false, true, null]],
        315 => [[['_route' => 'respo_Categories_modifierProduit', '_controller' => 'App\\Controller\\CategoriesController::modifierProduit'], ['id'], null, null, false, true, null]],
        348 => [[['_route' => 'respo_Categories_supprimer', '_controller' => 'App\\Controller\\CategoriesController::supprimer'], ['id'], null, null, false, true, null]],
        368 => [[['_route' => 'respo_Categories_supprimerCat', '_controller' => 'App\\Controller\\CategoriesController::supprimerCat'], ['id'], null, null, false, true, null]],
        392 => [[['_route' => 'respo_Categories_produit_delete_image', '_controller' => 'App\\Controller\\CategoriesController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        434 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        463 => [[['_route' => 'clandar_show', '_controller' => 'App\\Controller\\ClandarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        476 => [[['_route' => 'clandar_edit', '_controller' => 'App\\Controller\\ClandarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        484 => [[['_route' => 'clandar_delete', '_controller' => 'App\\Controller\\ClandarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        508 => [[['_route' => 'aa', '_controller' => 'App\\Controller\\CommandeController::aa'], ['id'], null, null, false, true, null]],
        528 => [[['_route' => 'afpd', '_controller' => 'App\\Controller\\InsclientController::showPro'], ['id'], null, null, false, true, null]],
        551 => [[['_route' => 'activer', '_controller' => 'App\\Controller\\SupplementsController::activer'], ['id'], null, null, false, true, null]],
        583 => [[['_route' => 'prepare', '_controller' => 'App\\Controller\\CommandeController::prepare'], ['id'], null, null, false, true, null]],
        620 => [[['_route' => 'promotion_supprimer', '_controller' => 'App\\Controller\\PromotionController::supprimer'], ['id'], null, null, false, true, null]],
        645 => [[['_route' => 'promotion_modifier', '_controller' => 'App\\Controller\\PromotionController::modifier'], ['id'], null, null, false, true, null]],
        676 => [[['_route' => 'panier_add', '_controller' => 'App\\Controller\\HomeController::add'], ['id'], null, null, false, true, null]],
        699 => [[['_route' => 'panier_remove', '_controller' => 'App\\Controller\\HomeController::remove'], ['id'], null, null, false, true, null]],
        728 => [[['_route' => 'supprimer', '_controller' => 'App\\Controller\\SupplementsController::supprimer'], ['id'], null, null, false, true, null]],
        766 => [[['_route' => 'vacance_fermeture_show', '_controller' => 'App\\Controller\\VacanceFermetureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        779 => [[['_route' => 'vacance_fermeture_edit', '_controller' => 'App\\Controller\\VacanceFermetureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        787 => [[['_route' => 'vacance_fermeture_delete', '_controller' => 'App\\Controller\\VacanceFermetureController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        850 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        876 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
