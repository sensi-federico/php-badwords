<?php

$text = $_GET["text"];
$bad_word = $_GET["bad_word"];
echo $text .'<br>';
echo strlen($text) .'<br>';

$text = str_replace($bad_word,'***',$text);
echo $text .'<br>';
echo strlen($text) .'<br>';

?>