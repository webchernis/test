<?php
/**
 * Created by PhpStorm.
 * User: Encoder
 * Date: 26.06.15
 * Time: 16:25
 */

header("Content-type: text/html; charset=utf-8");
class Article
{
    public $title;
    public $text;

    public function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function view ()
    {
        echo "<h1>{$this->title}</h1>";
        echo "<div>{$this->text}</div><br />";
    }
}

$new1 = new Article("Новая статья", "Тут полный текст статьи");
$new1->view();
