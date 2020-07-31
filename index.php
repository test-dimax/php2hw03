<?php

use App\Models\Article;
use App\Models\Item;
use App\View\View;

require __DIR__ . '/autoload.php';

$view = new View();

$view->news = Article::findAll();
$view->items = Item::findAll();

//для просмотра реализации интерфейса Iterator
/*
foreach($view as $key => $value) {
    echo $key . '=>' . $value;
    echo "\n";
}
*/

$content = $view->redner(__DIR__ . '/App/Templates/news.php');

echo $content;
