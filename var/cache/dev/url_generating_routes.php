<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'athlete_insert' => [[], ['_controller' => 'App\\Controller\\AthleteController::create_athelete'], [], [['text', '/athlete/inserer']], [], []],
    'athlete' => [[], ['_controller' => 'App\\Controller\\AthleteController::showAllAthletes'], [], [['text', '/athlete']], [], []],
    'showById_athlete' => [['id'], ['_controller' => 'App\\Controller\\AthleteController::showAthlete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/athlete']], [], []],
    'deleteById_athlete' => [['id'], ['_controller' => 'App\\Controller\\AthleteController::delete'], [], [['text', '/suppression'], ['variable', '/', '[^/]++', 'id', true], ['text', '/athlete']], [], []],
    'updateById_athlete' => [['id'], ['_controller' => 'App\\Controller\\AthleteController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/athlete/modifier']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\AthleteController::home'], [], [['text', '/']], [], []],
    'athlete_create' => [[], ['_controller' => 'App\\Controller\\AthleteController::form'], [], [['text', '/athlete_create']], [], []],
    'athlete_modification' => [['id'], ['_controller' => 'App\\Controller\\AthleteController::form'], [], [['text', '/modiffication'], ['variable', '/', '[^/]++', 'id', true], ['text', '/athlete']], [], []],
    'calendrier_insert' => [[], ['_controller' => 'App\\Controller\\CalendrierController::create_calendrier'], [], [['text', '/calendrier/inserer']], [], []],
    'calendrier' => [[], ['_controller' => 'App\\Controller\\CalendrierController::showAllCalendriers'], [], [['text', '/calendrier']], [], []],
    'showById_calendrier' => [['id'], ['_controller' => 'App\\Controller\\CalendrierController::showCalendrier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/calendrier']], [], []],
    'deleteById_calendrier' => [['id'], ['_controller' => 'App\\Controller\\CalendrierController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/calendrier/supprimer']], [], []],
    'updateById_calendrier' => [['id'], ['_controller' => 'App\\Controller\\CalendrierController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/calendrier/modifier']], [], []],
    'calendrier_create' => [[], ['_controller' => 'App\\Controller\\CalendrierController::form'], [], [['text', '/calendrier_create']], [], []],
    'calendrier_modification' => [['id'], ['_controller' => 'App\\Controller\\CalendrierController::form'], [], [['text', '/modiffication'], ['variable', '/', '[^/]++', 'id', true], ['text', '/calendrier']], [], []],
    'categorie_insert' => [[], ['_controller' => 'App\\Controller\\CategorieController::create_categorie'], [], [['text', '/categorie/inserer']], [], []],
    'categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::showAllCategories'], [], [['text', '/categorie']], [], []],
    'showById_categorie' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::showAthlete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], []],
    'deleteById_categorie' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie/supprimer']], [], []],
    'updateById_categorie' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie/modifier']], [], []],
    'categorie_create' => [[], ['_controller' => 'App\\Controller\\CategorieController::form'], [], [['text', '/categorie_create']], [], []],
    'categorie_modification' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::form'], [], [['text', '/modiffication'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], []],
    'competition_insert' => [[], ['_controller' => 'App\\Controller\\CompetitionController::create_competition'], [], [['text', '/competition/inserer']], [], []],
    'competition' => [[], ['_controller' => 'App\\Controller\\CompetitionController::showAllCompetition'], [], [['text', '/competition']], [], []],
    'showById_competition' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::showCompetition'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competition']], [], []],
    'deleteById_competition' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competition/supprimer']], [], []],
    'updateById_competition' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competition/modifier']], [], []],
    'competition_create' => [[], ['_controller' => 'App\\Controller\\CompetitionController::form'], [], [['text', '/competition_create']], [], []],
    'competition_modification' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::form'], [], [['text', '/modiffication'], ['variable', '/', '[^/]++', 'id', true], ['text', '/competition']], [], []],
    'epreuve_insert' => [[], ['_controller' => 'App\\Controller\\EpreuveController::create_epreuve'], [], [['text', '/epreuve/inserer']], [], []],
    'epreuve' => [[], ['_controller' => 'App\\Controller\\EpreuveController::showAllEpreuves'], [], [['text', '/epreuve']], [], []],
    'showById_epreuve' => [['id'], ['_controller' => 'App\\Controller\\EpreuveController::showEpreuve'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/epreuve']], [], []],
    'deleteById_epreuve' => [['id'], ['_controller' => 'App\\Controller\\EpreuveController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/epreuve/supprimer']], [], []],
    'updateById_epreuve' => [['id'], ['_controller' => 'App\\Controller\\EpreuveController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/epreuve/modifier']], [], []],
    'epreuve_create' => [[], ['_controller' => 'App\\Controller\\EpreuveController::form'], [], [['text', '/epreuve_create']], [], []],
    'epreuve_modification' => [['id'], ['_controller' => 'App\\Controller\\EpreuveController::form'], [], [['text', '/modiffication'], ['variable', '/', '[^/]++', 'id', true], ['text', '/epreuve']], [], []],
    'resultat_insert' => [[], ['_controller' => 'App\\Controller\\ResultatController::create_resultat'], [], [['text', '/resultat/inserer']], [], []],
    'resultat' => [[], ['_controller' => 'App\\Controller\\ResultatController::showAllResultat'], [], [['text', '/resultat']], [], []],
    'showById_resultat' => [['id'], ['_controller' => 'App\\Controller\\ResultatController::showResultat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/resultat']], [], []],
    'deleteById_resultat' => [['id'], ['_controller' => 'App\\Controller\\ResultatController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/resultat/supprimer']], [], []],
    'updateById_resultat' => [['id'], ['_controller' => 'App\\Controller\\ResultatController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/resultat/modifier']], [], []],
    'resultat_create' => [[], ['_controller' => 'App\\Controller\\ResultatController::form'], [], [['text', '/resultat_create']], [], []],
    'resultat_modification' => [['id'], ['_controller' => 'App\\Controller\\ResultatController::form'], [], [['text', '/modiffication'], ['variable', '/', '[^/]++', 'id', true], ['text', '/resultat']], [], []],
];