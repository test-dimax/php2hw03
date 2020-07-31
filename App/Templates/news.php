<h1>Новости</h1>

<a href="/admin.php">Панель администратора</a>

<?php foreach ($news as $article) : ?>

    <article>
        <h2>
            <a href="<?php echo '/article.php?id=' . $article->id; ?>"><?php echo $article->title ?></a>
        </h2>
        <p>Автор: <?php echo $article->author->name ?></p>
        <p>Текст: <?php echo $article->contents ?></p>
        <br>
    </article>
    <hr>

<?php endforeach; ?>
