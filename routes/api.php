<?php
/** @var \Laravel\Lumen\Routing\Router $router */


use Illuminate\Support\Facades\Auth;


$router->get('send_email' ,'MailController@mail');

$router->group(['prefix'=>'v1' ,'namespace' => 'v1'],function () use ($router){
        $router->get('courses','CourseController@index') ;
    $router->get('/courses/{id}' ,'CourseController@single');


    $router->post('register' , 'UserController@register');
    $router->post('login' , 'UserController@login');


    //get user information
    $router->group(['middleware'=> 'auth'],function () use ($router){
        $router->get('/user',function () {

            return Auth::user();
        });
    });
});



