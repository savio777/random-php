<?php

# fonte
# https://www.barattalo.it/coding/test-if-a-remote-url-exists-with-php-and-curl/

function teste_url($url) {
    $ch = @curl_init($url);
    @curl_setopt($ch, CURLOPT_HEADER, TRUE);
    @curl_setopt($ch, CURLOPT_NOBODY, TRUE);
    @curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $status = array();
    preg_match('/HTTP\/.* ([0-9]+) .*/', @curl_exec($ch) , $status);
    if($status[1] == 200){
    	echo "existe";
    }else{
    	echo "não existe";
    }
}


if($_GET['url']){
	teste_url($_GET['url']);
}elseif($_POST['url']){
	teste_url($_POST['url']);
}else{	
	echo "nenhuma url enviada";
}
