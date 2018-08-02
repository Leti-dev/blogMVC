<?php

include '../application/bdd_connection.php';

    function editPost() {
        // Récupération d'un article du blog.
        $query =
        '
            SELECT
                Id,
                Title,
                Contents
            FROM
                Post
            WHERE
                Id = ?
        ';
        global $pdo;
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$_GET['id']]);
        $post = $resultSet->fetch();

        return $post;

    }
    function saving()
    {
        // Edition d'un article du blog.
        $query =
        '
            UPDATE
                Post
            SET
                Title = ?,
                Contents = ?
            WHERE
                Id = ?
        ';
        global $pdo;
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$_POST['title'], $_POST['contents'], $_POST['postId']]);

    }