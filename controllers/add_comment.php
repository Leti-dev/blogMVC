<?php

include '../models/add_comment.model.php';

    // Retour à l'article détaillé une fois que le nouveau commentaire a été ajouté.
    header('Location: show_post.php?id='.$_POST['postId']);
    exit();