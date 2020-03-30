<?php

require("VideoStream.php");
$path = $_GET['video'];
$ref = $_SERVER['HTTP_REFERER'];
if(isset($ref)){
     
    if(strpos($ref, 'usmba.ac.ma')){
        $stream = new VideoStream($path);
        $stream->start();
    }else{
        exit("Erreur: Vous n'êtes pas autorisé a voir cette video");
    }
}
exit("Erreur: veuillez consulter le site: <a href='https://fpt.usmba.ac.ma/'>https://fpt.usmba.ac.ma</a>");
 
?>