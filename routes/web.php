<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/ChartData','ChartDataController@onAllSelect');
$router->get('/ClientReview','ClientReviewController@onAllSelect');
$router->post('/ContactSend','ContactController@onContactSend');
$router->get('/CourseHome','CourseController@onSelectFourData');
$router->get('/CourseAll','CourseController@onSelectAllData');
$router->post('/CourseDetails','CourseController@onSelectDetails');
$router->get('/FooterData','FooterController@onSelectData');
$router->get('/Information','InformationController@onSelectInformation');
$router->get('/Services','ServiceController@onSelectService');

$router->get('/ProjectData','ProjectController@onSelectThreeData');
$router->get('/ProjectDataAll','ProjectController@onSelectAllData');
$router->post('/ProjectDataDetails','ProjectController@onSelectDetailsData');









