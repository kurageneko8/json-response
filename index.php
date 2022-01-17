<?php
require_once __DIR__ . "/vendor/autoload.php";

use Devscreencast\ResponseClass\JsonResponse;

$student = array(
	'name' => 'Jon D',	
	'course' => 'Soft Engineer',	
	'level' => '200',	
	'collections' => ['books' => 'Intro to URL','music' => 'rap']
);

new JsonResponse('unauthorized','', $student);






