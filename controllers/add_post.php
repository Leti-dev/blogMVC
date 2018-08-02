<?php

include '../models/add_post.model.php';

if($_POST){
    addPost();
    // Retour à la page d'accueil une fois que le nouvel article du blog a été ajouté.
    header('Location: index.php');
    exit();
}else{
    $res = loadList();
    $authors = $res['authors'];
    $categories = $res['categories'];
    
    // Sélection et affichage du template PHTML.
    $template = 'add_post';
    include '../views/layout.phtml';
}
