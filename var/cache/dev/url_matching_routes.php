<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\InscriptionController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
        ],
        '/index' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/Instrument/listerClasseInstrument' => [[['_route' => 'listerClasseInstrument', '_controller' => 'App\\Controller\\InstrumentController::listerClasseInstrument'], null, null, null, false, false, null]],
        '/Instrument/listerClasseInstrument2' => [[['_route' => 'listerClasseInstrument2', '_controller' => 'App\\Controller\\InstrumentController::listerClasseInstrument2'], null, null, null, false, false, null]],
        '/InstrumentTest' => [[['_route' => 'showAction', '_controller' => 'App\\Controller\\InstrumentController::showAction'], null, null, null, true, false, null]],
        '/Instrument/listerAllInstrument' => [[['_route' => 'listerAllInstrument', '_controller' => 'App\\Controller\\InstrumentController::listerAllInstrument'], null, null, null, false, false, null]],
        '/admin/Instrument/ajouterInstrument' => [[['_route' => 'ajouterInstrument', '_controller' => 'App\\Controller\\InstrumentController::ajouterInstrument'], null, null, null, false, false, null]],
        '/prof/Eleve/listerEleve' => [[['_route' => 'listerEleve', '_controller' => 'App\\Controller\\EleveController::listerEleve'], null, null, null, false, false, null]],
        '/admin/Eleve/ajouterEleve' => [[['_route' => 'ajouterEleve', '_controller' => 'App\\Controller\\EleveController:ajouterEleve'], null, null, null, false, false, null]],
        '/admin/Eleve/supprimerEleve' => [[['_route' => 'supprimerEleve', '_controller' => 'App\\Controller\\EleveController:supprimerEleve'], null, null, null, false, false, null]],
        '/prof/Professeur/listerProfesseur' => [[['_route' => 'listerProfesseur', '_controller' => 'App\\Controller\\ProfesseurController::listerProfesseur'], null, null, null, false, false, null]],
        '/admin/Professeur/ajouterProfesseur' => [[['_route' => 'ajouterProfesseur', '_controller' => 'App\\Controller\\ProfesseurController::ajouterProfesseur'], null, null, null, false, false, null]],
        '/Cours/listerCours' => [[['_route' => 'listerCours', '_controller' => 'App\\Controller\\CoursController::listerCours'], null, null, null, false, false, null]],
        '/admin/Cours/ajouterCours' => [[['_route' => 'ajouterCours', '_controller' => 'App\\Controller\\CoursController::ajouterCours'], null, null, null, false, false, null]],
        '/admin/Registration/register' => [[['_route' => 'ajouterEleveCours', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, true, false, null]],
        '/admin/Pret/listerPret' => [[['_route' => 'listerPret', '_controller' => 'App\\Controller\\PretController::listerPret'], null, null, null, false, false, null]],
        '/admin/Pret/ajouterPret' => [[['_route' => 'ajouterPret', '_controller' => 'App\\Controller\\PretController::ajouterPret'], null, null, null, false, false, null]],
        '/prof/Accessoire/ajouterAccessoire' => [[['_route' => 'ajouterAccessoire', '_controller' => 'App\\Controller\\AccessoireController::ajouterAccessoire'], null, null, null, false, false, null]],
        '/app_login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/Profil' => [[['_route' => 'consulterProfil', '_controller' => 'App\\Controller\\ProfilController::consulterProfil'], null, null, null, true, false, null]],
        '/admin/Inscription/listerInscription' => [[['_route' => 'listerInscription', '_controller' => 'App\\Controller\\InscriptionController::listerInscription'], null, null, null, false, false, null]],
        '/admin/Inscription/ajouterInscription' => [[['_route' => 'ajouterInscription', '_controller' => 'App\\Controller\\InscriptionController::ajouterInscription'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/delete(?'
                    .'|/([^/]++)(*:26)'
                    .'|Professeur/([^/]++)(*:52)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:88)'
                .'|/In(?'
                    .'|strument/(?'
                        .'|lister(?'
                            .'|TypeInstrument/([^/]++)(*:145)'
                            .'|Instrument/([^/]++)(*:172)'
                        .')'
                        .'|consulterInstrument/([^/]++)(*:209)'
                    .')'
                    .'|tervention/listerLesInterventionsInstrument/([^/]++)(*:270)'
                .')'
                .'|/admin/(?'
                    .'|Ins(?'
                        .'|trument/(?'
                            .'|modifierInstrument/([^/]++)(*:333)'
                            .'|supprimerInstrument/([^/]++)(*:369)'
                        .')'
                        .'|cription/consulterInscription/([^/]++)(*:416)'
                    .')'
                    .'|Eleve/(?'
                        .'|consulterEleve/([^/]++)(*:457)'
                        .'|modifierEleve/([^/]++)(*:487)'
                    .')'
                    .'|Pr(?'
                        .'|ofesseur/(?'
                            .'|consulterProfesseur/([^/]++)(*:541)'
                            .'|modifierProfesseur/([^/]++)(*:576)'
                            .'|delete/([^/]++)(*:599)'
                        .')'
                        .'|et/consulterPret/([^/]++)(*:633)'
                    .')'
                    .'|Cours/(?'
                        .'|consulterCours/([^/]++)(*:674)'
                        .'|modifierCours/([^/]++)(*:704)'
                        .'|supprimerCours/([^/]++)(*:735)'
                    .')'
                .')'
                .'|/Accessoire/listerLesAccessoiresInstrument/([^/]++)(*:796)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'Eleve_delete', '_controller' => 'App\\Controller\\EleveController::delete'], ['id'], null, null, false, true, null]],
        52 => [[['_route' => 'supprimerProfesseur', '_controller' => 'App\\Controller\\ProfesseurController::supprimerProfesseur'], ['idProfesseur'], null, null, false, true, null]],
        88 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        145 => [[['_route' => 'listerTypeInstrument', '_controller' => 'App\\Controller\\InstrumentController::listerTypeInstrument'], ['id'], null, null, false, true, null]],
        172 => [[['_route' => 'listerInstrument', '_controller' => 'App\\Controller\\InstrumentController::listerInstrument'], ['id'], null, null, false, true, null]],
        209 => [[['_route' => 'consulterInstrument', '_controller' => 'App\\Controller\\InstrumentController::consulterInstrument'], ['id'], null, null, false, true, null]],
        270 => [[['_route' => 'listerLesInterventionsInstrument', '_controller' => 'App\\Controller\\InstrumentController::listerLesInterventionsInstrument'], ['idInstrument'], null, null, false, true, null]],
        333 => [[['_route' => 'modifierInstrument', '_controller' => 'App\\Controller\\InstrumentController::modifierInstrument'], ['id'], null, null, false, true, null]],
        369 => [[['_route' => 'supprimerInstrument', '_controller' => 'App\\Controller\\InstrumentController::supprimerInstrument'], ['id'], null, null, false, true, null]],
        416 => [[['_route' => 'consulterInscription', '_controller' => 'App\\Controller\\InscriptionController::consulterInscription'], ['idInscription'], null, null, false, true, null]],
        457 => [[['_route' => 'consulterEleve', '_controller' => 'App\\Controller\\EleveController:consulterEleve'], ['id'], null, null, false, true, null]],
        487 => [[['_route' => 'modifierEleve', '_controller' => 'App\\Controller\\EleveController:modifierEleve'], ['id'], null, null, false, true, null]],
        541 => [[['_route' => 'consulterProfesseur', '_controller' => 'App\\Controller\\ProfesseurController::consulterProfesseur'], ['idProfesseur'], null, null, false, true, null]],
        576 => [[['_route' => 'modifierProfesseur', '_controller' => 'App\\Controller\\ProfesseurController::modifierProfesseur'], ['idProfesseur'], null, null, false, true, null]],
        599 => [[['_route' => 'deleteProfesseur', '_controller' => 'App\\Controller\\ProfesseurController::deleteProfesseur'], ['idProfesseur'], null, null, false, true, null]],
        633 => [[['_route' => 'consulterPret', '_controller' => 'App\\Controller\\PretController::consulterPret'], ['idPret'], null, null, false, true, null]],
        674 => [[['_route' => 'consulterCours', '_controller' => 'App\\Controller\\CoursController::consulterCours'], ['idCours'], null, null, false, true, null]],
        704 => [[['_route' => 'modifierCours', '_controller' => 'App\\Controller\\CoursController::modifierCours'], ['idCours'], null, null, false, true, null]],
        735 => [[['_route' => 'supprimerCours', '_controller' => 'App\\Controller\\CoursController::supprimerCours'], ['idCours'], null, null, false, true, null]],
        796 => [
            [['_route' => 'listerLesAccessoiresInstrument', '_controller' => 'App\\Controller\\InstrumentController::listerLesAccessoiresInstrument'], ['idInstrument'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
