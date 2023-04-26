<?php
    use App\Model\Entity\Article;
?>

<p>Listing des articles</p>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Auteur</th>
            <th></th>
        </tr>
    </thead>
    <tbody><?php
    foreach($params['articles'] as $article) {
            /* @var Article $article */ ?>
            <tr>
                <td><?= $article->getId() ?></td>
                <td><?= $article->getTitle() ?></td>
                <td><?= $article->getContent() ?></td>
                <td><?= $article->getAuthor()->getPseudo() ?></td>
                <td><a href="#">Supprimer</a></td>
            </tr> <?php
        } ?>
    </tbody>
</table>
