<?php

include '../models/show_post.model.php';

    // Validation de la query string dans l'URL.
    if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id']))
    {
        header('Location: index.php');
        exit();
    }

    // Sélection et affichage du template PHTML.
    $template = 'show_post';
    include '../views/layout.phtml';