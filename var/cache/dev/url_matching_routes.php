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
        '/athlete/inserer' => [[['_route' => 'athlete_insert', '_controller' => 'App\\Controller\\AthleteController::create_athelete'], null, null, null, false, false, null]],
        '/athlete' => [[['_route' => 'athlete', '_controller' => 'App\\Controller\\AthleteController::showAllAthletes'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\AthleteController::home'], null, null, null, false, false, null]],
        '/athlete_create' => [[['_route' => 'athlete_create', '_controller' => 'App\\Controller\\AthleteController::form'], null, null, null, false, false, null]],
        '/calendrier/inserer' => [[['_route' => 'calendrier_insert', '_controller' => 'App\\Controller\\CalendrierController::create_calendrier'], null, null, null, false, false, null]],
        '/calendrier' => [[['_route' => 'calendrier', '_controller' => 'App\\Controller\\CalendrierController::showAllCalendriers'], null, null, null, false, false, null]],
        '/calendrier_create' => [[['_route' => 'calendrier_create', '_controller' => 'App\\Controller\\CalendrierController::form'], null, null, null, false, false, null]],
        '/categorie/inserer' => [[['_route' => 'categorie_insert', '_controller' => 'App\\Controller\\CategorieController::create_categorie'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie', '_controller' => 'App\\Controller\\CategorieController::showAllCategories'], null, null, null, false, false, null]],
        '/categorie_create' => [[['_route' => 'categorie_create', '_controller' => 'App\\Controller\\CategorieController::form'], null, null, null, false, false, null]],
        '/competition/inserer' => [[['_route' => 'competition_insert', '_controller' => 'App\\Controller\\CompetitionController::create_competition'], null, null, null, false, false, null]],
        '/competition' => [[['_route' => 'competition', '_controller' => 'App\\Controller\\CompetitionController::showAllCompetition'], null, null, null, false, false, null]],
        '/competition_create' => [[['_route' => 'competition_create', '_controller' => 'App\\Controller\\CompetitionController::form'], null, null, null, false, false, null]],
        '/epreuve/inserer' => [[['_route' => 'epreuve_insert', '_controller' => 'App\\Controller\\EpreuveController::create_epreuve'], null, null, null, false, false, null]],
        '/epreuve' => [[['_route' => 'epreuve', '_controller' => 'App\\Controller\\EpreuveController::showAllEpreuves'], null, null, null, false, false, null]],
        '/epreuve_create' => [[['_route' => 'epreuve_create', '_controller' => 'App\\Controller\\EpreuveController::form'], null, null, null, false, false, null]],
        '/resultat/inserer' => [[['_route' => 'resultat_insert', '_controller' => 'App\\Controller\\ResultatController::create_resultat'], null, null, null, false, false, null]],
        '/resultat' => [[['_route' => 'resultat', '_controller' => 'App\\Controller\\ResultatController::showAllResultat'], null, null, null, false, false, null]],
        '/resultat_create' => [[['_route' => 'resultat_create', '_controller' => 'App\\Controller\\ResultatController::form'], null, null, null, false, false, null]],
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
                .'|/athlete/(?'
                    .'|([^/]++)(?'
                        .'|(*:192)'
                        .'|/suppression(*:212)'
                    .')'
                    .'|modifier/([^/]++)(*:238)'
                    .'|([^/]++)/modiffication(*:268)'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|lendrier/(?'
                            .'|([^/]++)(*:306)'
                            .'|supprimer/([^/]++)(*:332)'
                            .'|modifier/([^/]++)(*:357)'
                            .'|([^/]++)/modiffication(*:387)'
                        .')'
                        .'|tegorie/(?'
                            .'|([^/]++)(*:415)'
                            .'|supprimer/([^/]++)(*:441)'
                            .'|modifier/([^/]++)(*:466)'
                            .'|([^/]++)/modiffication(*:496)'
                        .')'
                    .')'
                    .'|ompetition/(?'
                        .'|([^/]++)(*:528)'
                        .'|supprimer/([^/]++)(*:554)'
                        .'|modifier/([^/]++)(*:579)'
                        .'|([^/]++)/modiffication(*:609)'
                    .')'
                .')'
                .'|/epreuve/(?'
                    .'|([^/]++)(*:639)'
                    .'|supprimer/([^/]++)(*:665)'
                    .'|modifier/([^/]++)(*:690)'
                    .'|([^/]++)/modiffication(*:720)'
                .')'
                .'|/resultat/(?'
                    .'|([^/]++)(*:750)'
                    .'|supprimer/([^/]++)(*:776)'
                    .'|modifier/([^/]++)(*:801)'
                    .'|([^/]++)/modiffication(*:831)'
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
        192 => [[['_route' => 'showById_athlete', '_controller' => 'App\\Controller\\AthleteController::showAthlete'], ['id'], null, null, false, true, null]],
        212 => [[['_route' => 'deleteById_athlete', '_controller' => 'App\\Controller\\AthleteController::delete'], ['id'], null, null, false, false, null]],
        238 => [[['_route' => 'updateById_athlete', '_controller' => 'App\\Controller\\AthleteController::update'], ['id'], null, null, false, true, null]],
        268 => [[['_route' => 'athlete_modification', '_controller' => 'App\\Controller\\AthleteController::form'], ['id'], null, null, false, false, null]],
        306 => [[['_route' => 'showById_calendrier', '_controller' => 'App\\Controller\\CalendrierController::showCalendrier'], ['id'], null, null, false, true, null]],
        332 => [[['_route' => 'deleteById_calendrier', '_controller' => 'App\\Controller\\CalendrierController::delete'], ['id'], null, null, false, true, null]],
        357 => [[['_route' => 'updateById_calendrier', '_controller' => 'App\\Controller\\CalendrierController::update'], ['id'], null, null, false, true, null]],
        387 => [[['_route' => 'calendrier_modification', '_controller' => 'App\\Controller\\CalendrierController::form'], ['id'], null, null, false, false, null]],
        415 => [[['_route' => 'showById_categorie', '_controller' => 'App\\Controller\\CategorieController::showAthlete'], ['id'], null, null, false, true, null]],
        441 => [[['_route' => 'deleteById_categorie', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], null, null, false, true, null]],
        466 => [[['_route' => 'updateById_categorie', '_controller' => 'App\\Controller\\CategorieController::update'], ['id'], null, null, false, true, null]],
        496 => [[['_route' => 'categorie_modification', '_controller' => 'App\\Controller\\CategorieController::form'], ['id'], null, null, false, false, null]],
        528 => [[['_route' => 'showById_competition', '_controller' => 'App\\Controller\\CompetitionController::showCompetition'], ['id'], null, null, false, true, null]],
        554 => [[['_route' => 'deleteById_competition', '_controller' => 'App\\Controller\\CompetitionController::delete'], ['id'], null, null, false, true, null]],
        579 => [[['_route' => 'updateById_competition', '_controller' => 'App\\Controller\\CompetitionController::update'], ['id'], null, null, false, true, null]],
        609 => [[['_route' => 'competition_modification', '_controller' => 'App\\Controller\\CompetitionController::form'], ['id'], null, null, false, false, null]],
        639 => [[['_route' => 'showById_epreuve', '_controller' => 'App\\Controller\\EpreuveController::showEpreuve'], ['id'], null, null, false, true, null]],
        665 => [[['_route' => 'deleteById_epreuve', '_controller' => 'App\\Controller\\EpreuveController::delete'], ['id'], null, null, false, true, null]],
        690 => [[['_route' => 'updateById_epreuve', '_controller' => 'App\\Controller\\EpreuveController::update'], ['id'], null, null, false, true, null]],
        720 => [[['_route' => 'epreuve_modification', '_controller' => 'App\\Controller\\EpreuveController::form'], ['id'], null, null, false, false, null]],
        750 => [[['_route' => 'showById_resultat', '_controller' => 'App\\Controller\\ResultatController::showResultat'], ['id'], null, null, false, true, null]],
        776 => [[['_route' => 'deleteById_resultat', '_controller' => 'App\\Controller\\ResultatController::delete'], ['id'], null, null, false, true, null]],
        801 => [[['_route' => 'updateById_resultat', '_controller' => 'App\\Controller\\ResultatController::update'], ['id'], null, null, false, true, null]],
        831 => [
            [['_route' => 'resultat_modification', '_controller' => 'App\\Controller\\ResultatController::form'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
