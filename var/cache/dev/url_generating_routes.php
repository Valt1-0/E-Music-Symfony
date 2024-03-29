<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'Eleve_delete' => [['id'], ['_controller' => 'App\\Controller\\EleveController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete']], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/']], [], []],
    'inscription' => [[], ['_controller' => 'App\\Controller\\InscriptionController::index'], [], [['text', '/inscription']], [], []],
    'supprimerProfesseur' => [['idProfesseur'], ['_controller' => 'App\\Controller\\ProfesseurController::supprimerProfesseur'], [], [['variable', '/', '[^/]++', 'idProfesseur', true], ['text', '/deleteProfesseur']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/index']], [], []],
    'listerClasseInstrument' => [[], ['_controller' => 'App\\Controller\\InstrumentController::listerClasseInstrument'], [], [['text', '/Instrument/listerClasseInstrument']], [], []],
    'listerTypeInstrument' => [['id'], ['_controller' => 'App\\Controller\\InstrumentController::listerTypeInstrument'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Instrument/listerTypeInstrument']], [], []],
    'listerInstrument' => [['id'], ['_controller' => 'App\\Controller\\InstrumentController::listerInstrument'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Instrument/listerInstrument']], [], []],
    'listerAllInstrument' => [[], ['_controller' => 'App\\Controller\\InstrumentController::listerAllInstrument'], [], [['text', '/Instrument/listerAllInstrument']], [], []],
    'consulterInstrument' => [['id'], ['_controller' => 'App\\Controller\\InstrumentController::consulterInstrument'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Instrument/consulterInstrument']], [], []],
    'ajouterInstrument' => [[], ['_controller' => 'App\\Controller\\InstrumentController::ajouterInstrument'], [], [['text', '/admin/Instrument/ajouterInstrument']], [], []],
    'modifierInstrument' => [['id'], ['_controller' => 'App\\Controller\\InstrumentController::modifierInstrument'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/Instrument/modifierInstrument']], [], []],
    'supprimerInstrument' => [['id'], ['_controller' => 'App\\Controller\\InstrumentController::supprimerInstrument'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/Instrument/supprimerInstrument']], [], []],
    'listerLesInterventionsInstrument' => [['idInstrument'], ['_controller' => 'App\\Controller\\InstrumentController::listerLesInterventionsInstrument'], [], [['variable', '/', '[^/]++', 'idInstrument', true], ['text', '/Intervention/listerLesInterventionsInstrument']], [], []],
    'listerLesAccessoiresInstrument' => [['idInstrument'], ['_controller' => 'App\\Controller\\InstrumentController::listerLesAccessoiresInstrument'], [], [['variable', '/', '[^/]++', 'idInstrument', true], ['text', '/Accessoire/listerLesAccessoiresInstrument']], [], []],
    'listerEleve' => [[], ['_controller' => 'App\\Controller\\EleveController::listerEleve'], [], [['text', '/prof/Eleve/listerEleve']], [], []],
    'ajouterEleve' => [[], ['_controller' => 'App\\Controller\\EleveController:ajouterEleve'], [], [['text', '/admin/Eleve/ajouterEleve']], [], []],
    'consulterEleve' => [['id'], ['_controller' => 'App\\Controller\\EleveController:consulterEleve'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/Eleve/consulterEleve']], [], []],
    'supprimerEleve' => [[], ['_controller' => 'App\\Controller\\EleveController:supprimerEleve'], [], [['text', '/admin/Eleve/supprimerEleve']], [], []],
    'modifierEleve' => [['id'], ['_controller' => 'App\\Controller\\EleveController:modifierEleve'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/Eleve/modifierEleve']], [], []],
    'listerProfesseur' => [[], ['_controller' => 'App\\Controller\\ProfesseurController::listerProfesseur'], [], [['text', '/prof/Professeur/listerProfesseur']], [], []],
    'ajouterProfesseur' => [[], ['_controller' => 'App\\Controller\\ProfesseurController::ajouterProfesseur'], [], [['text', '/admin/Professeur/ajouterProfesseur']], [], []],
    'consulterProfesseur' => [['idProfesseur'], ['_controller' => 'App\\Controller\\ProfesseurController::consulterProfesseur'], [], [['variable', '/', '[^/]++', 'idProfesseur', true], ['text', '/admin/Professeur/consulterProfesseur']], [], []],
    'modifierProfesseur' => [['idProfesseur'], ['_controller' => 'App\\Controller\\ProfesseurController::modifierProfesseur'], [], [['variable', '/', '[^/]++', 'idProfesseur', true], ['text', '/admin/Professeur/modifierProfesseur']], [], []],
    'deleteProfesseur' => [['idProfesseur'], ['_controller' => 'App\\Controller\\ProfesseurController::deleteProfesseur'], [], [['variable', '/', '[^/]++', 'idProfesseur', true], ['text', '/admin/Professeur/delete']], [], []],
    'listerCours' => [[], ['_controller' => 'App\\Controller\\CoursController::listerCours'], [], [['text', '/Cours/listerCours']], [], []],
    'ajouterCours' => [[], ['_controller' => 'App\\Controller\\CoursController::ajouterCours'], [], [['text', '/admin/Cours/ajouterCours']], [], []],
    'consulterCours' => [['idCours'], ['_controller' => 'App\\Controller\\CoursController::consulterCours'], [], [['variable', '/', '[^/]++', 'idCours', true], ['text', '/admin/Cours/consulterCours']], [], []],
    'modifierCours' => [['idCours'], ['_controller' => 'App\\Controller\\CoursController::modifierCours'], [], [['variable', '/', '[^/]++', 'idCours', true], ['text', '/admin/Cours/modifierCours']], [], []],
    'supprimerCours' => [['idCours'], ['_controller' => 'App\\Controller\\CoursController::supprimerCours'], [], [['variable', '/', '[^/]++', 'idCours', true], ['text', '/admin/Cours/supprimerCours']], [], []],
    'ajouterEleveCours' => [[], ['_controller' => 'App\\Controller\\RegisterController::register'], [], [['text', '/admin/Registration/register/']], [], []],
    'listerPret' => [[], ['_controller' => 'App\\Controller\\PretController::listerPret'], [], [['text', '/admin/Pret/listerPret']], [], []],
    'ajouterPret' => [[], ['_controller' => 'App\\Controller\\PretController::ajouterPret'], [], [['text', '/admin/Pret/ajouterPret']], [], []],
    'consulterPret' => [['idPret'], ['_controller' => 'App\\Controller\\PretController::consulterPret'], [], [['variable', '/', '[^/]++', 'idPret', true], ['text', '/admin/Pret/consulterPret']], [], []],
    'ajouterAccessoire' => [[], ['_controller' => 'App\\Controller\\AccessoireController::ajouterAccessoire'], [], [['text', '/prof/Accessoire/ajouterAccessoire']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/app_login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'consulterProfil' => [[], ['_controller' => 'App\\Controller\\ProfilController::consulterProfil'], [], [['text', '/Profil/']], [], []],
    'listerInscription' => [[], ['_controller' => 'App\\Controller\\InscriptionController::listerInscription'], [], [['text', '/admin/Inscription/listerInscription']], [], []],
    'ajouterInscription' => [[], ['_controller' => 'App\\Controller\\InscriptionController::ajouterInscription'], [], [['text', '/admin/Inscription/ajouterInscription']], [], []],
    'consulterInscription' => [['idInscription'], ['_controller' => 'App\\Controller\\InscriptionController::consulterInscription'], [], [['variable', '/', '[^/]++', 'idInscription', true], ['text', '/admin/Inscription/consulterInscription']], [], []],
];
