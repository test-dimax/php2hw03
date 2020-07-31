<?php

use App\Models\Article;
use App\View\View;

require __DIR__ . '/autoload.php';


if ( isset($_GET['id']) && !empty($_GET['id']) ) {
    $view = new View();

    //берем статью под соотвествующим id
    $view->article = Article::findById($_GET['id']);

    $content = $view->redner(__DIR__ . '/App/Templates/article.php');

    echo $content;
} else {
    echo 'Такой статьи не существует, вернитесь в <a href="/">список новостей</a>';
}
