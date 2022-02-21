<?php 

require __DIR__."/../bootstrap.php";

$app->post('/',function(){
    echo 'home';
});

$app->run();