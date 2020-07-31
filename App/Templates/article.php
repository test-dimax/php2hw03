<ul>
    <li><a href="/">Страница новостей</a></li>
</ul>

<h1><?php echo $article->title; ?></h1>
<div>
    <p>Автор: <?php echo $article->author->name; ?></p>
    <p>Текст: <?php echo $article->contents; ?></p>
</div>
