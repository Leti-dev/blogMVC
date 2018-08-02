<?php

include '../application/bdd_connection.php';

    function loadList() {
        // Récupération de tous les auteurs du blog.
        $query =
        '
            SELECT
                Id,
                FirstName,
                LastName
            FROM
                Author
        ';
        global $pdo;
        $resultSet = $pdo->query($query);
        $authors = $resultSet->fetchAll();

        // Récupération de toutes les catégories du blog.
        $query =
        '
            SELECT
                Id,
                Name
            FROM
                Category
        ';
        $resultSet = $pdo->query($query);
        $categories = $resultSet->fetchAll();

        return ['authors'    => $authors,
                'categories' => $categories];

    }

    function addPost() {
        // Ajout d'un article du blog.
        $query =
        '
            INSERT INTO
                Post
                (Title, Contents, Author_Id, Category_Id, CreationTimestamp)
            VALUES
                (?, ?, ?, ?, NOW())
        ';
        global $pdo;
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$_POST['title'], $_POST['contents'], $_POST['author'], $_POST['category']]);

    }