<?php

    include '../models/edit_post.model.php';

    if(empty($_POST)){
        // Validation de la query string dans l'URL.
        if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id']))
        {
            header('Location: index.php');
            exit();
        }

        $post = editPost();

        // Sélection et affichage du template PHTML.
        $template = 'edit_post';
        include '../views/layout.phtml';
    }
    else
    {
        saving();

        // Retour au panneau d'administration.
        header('Location: admin.php');
        exit();
    }