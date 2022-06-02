<?php

namespace Portfolio\Controllers;

class CoreController
{
    public function show($templateName, $viewData = [])
    {
        global $router;
        // Grace à cette ligne, on peut utiliser $router dans nos templates. On pourra ainsi générer des URL

        // On crée une variable qui contient l'url absolu (donc complet) du dossier du projet
        // On n'aura plus qu'à utiliser uniquement cette variable dans nos templates
        $absoluteUrl = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['BASE_URI'] . '/';

       require_once __DIR__ . '/../Views/header.tpl.php';
       require_once __DIR__ . '/../Views/inc/' . $templateName . '.tpl.php';
       require_once __DIR__ . '/../Views/footer.tpl.php';
    }
}