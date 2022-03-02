<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $titles =[
        'title' => 'Hello World', 
        'subtitle' => 'First Laravel Project'
    ];
    $links =[
        'News'=>'/news',
        'About'=>'/about',
        'Contatti'=>'/contacts'
    ];
    return view('home',$titles,['links'=>$links]);
});

Route::get('/news', function () {
    $titles =[
        'title' => 'News Page', 
        'subtitle' => 'The news on my Project'
    ];
    $links =[
        'Home'=>'/',
        'About'=>'/about',
        'Contatti'=>'/contacts'
    ];
    return view('news',$titles,['links'=>$links]);
});

Route::get('/about', function () {
    $titles =[
        'title' => 'About us Page', 
        'subtitle' => 'A little description on us'
    ];
    $links =[
        'Home'=>'/',
        'News'=>'/news',
        'Contatti'=>'/contacts'
    ];
    return view('about',$titles,['links'=>$links]);
});

Route::get('/contacts', function () {
    $titles =[
        'title' => 'Contacts Page', 
        'subtitle' => 'Contact us'
    ];
    $links =[
        'Home'=>'/',
        'News'=>'/news',
        'About'=>'/about'
    ];
    return view('contacts',$titles,['links'=>$links]);
});
