<?php

use Klein\Klein;
/**
 * @var Klein $router
 */

$router->get("/", function(){
   echo cnt('SiteController@index');
});