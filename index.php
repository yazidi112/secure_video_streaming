<?php

require("VideoStream.php");
$path = $_GET['video'];
$ref = $_SERVER['HTTP_REFERER'];
if(isset($ref)){
     
    if(strpos($ref, 'localhost')){
        $stream = new VideoStream($path);
        $stream->start();
    }else{
        exit("Erreur: Vous n'êtes pas autorisé a voir cette video");
    }
}
exit("Erreur: La source de cette vidéo est inconnu !");
 
?>