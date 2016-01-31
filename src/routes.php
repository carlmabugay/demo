<?php

Route::group(['namespace' => 'Carlmabugay\Demo\Controllers', 'prefix'=>'demo'], function() {
     Route::get('/', 'DemoController@index');
});