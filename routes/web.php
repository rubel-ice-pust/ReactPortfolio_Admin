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

$router->get('/ChartData', ['middleware'=>'auth','uses'=>'ChartDataController@onAllSelect']);
$router->get('/ClientReview', ['middleware'=>'auth','uses'=>'ClientReviewController@onAllSelect']);
$router->post('/ContactSend', ['middleware'=>'auth','uses'=>'ContactController@onContactSend']);
$router->get('/CourseHome', ['middleware'=>'auth','uses'=>'CourseController@onSelectFourData']);
$router->get('/CourseAll', ['middleware'=>'auth','uses'=>'CourseController@onSelectAllData']);
$router->post('/CourseDetails', ['middleware'=>'auth','uses'=>'CourseController@onSelectDetails']);
$router->get('/FooterData', ['middleware'=>'auth','uses'=>'FooterController@onSelectData']);
$router->get('/Information', ['middleware'=>'auth','uses'=>'InformationController@onSelectInformation']);
$router->get('/Services', ['middleware'=>'auth','uses'=>'ServiceController@onSelectService']);

$router->get('/ProjectData', ['middleware'=>'auth','uses'=>'ProjectController@onSelectThreeData']);
$router->get('/ProjectDataAll', ['middleware'=>'auth','uses'=>'ProjectController@onSelectAllData']);
$router->post('/ProjectDataDetails', ['middleware'=>'auth','uses'=>'ProjectController@onSelectDetailsData']);

$router->get('/VideoHome', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectVideo']);
$router->get('/TotallProjectClient', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectProjectClient']);
$router->get('/TechDesc', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectTechDEsc']);
$router->get('/HomeTopTitle', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectHomeTopTitle']);















