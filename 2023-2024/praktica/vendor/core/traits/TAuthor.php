<?php
namespace traits;

trait TAuthor{
    public $author;

    function setAuthor($text){
        $this-> author = $text;
    }
    function getAuthor(){
        echo "<p>Автор книги: {$this-> author}</p>";
    }
}
