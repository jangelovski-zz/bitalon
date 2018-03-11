<?php

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

    $victims = DB::select('select * from bitalon_main_data', [1]);

    $crawler = Goutte::request('GET', 'https://collections.ushmm.org/search/catalog/pa1131963');
    $crawler->filter('.result__title .result__a')->each(function ($node) {
        //dump($node->text());
    });

    $data = $crawler->filter('#record-summary')->each(function ($node) {
        $data = $node->text();
        //dump($node);
    });

    return view('welcome',['victims' => $victims, 'html_data' => $data]);
});
