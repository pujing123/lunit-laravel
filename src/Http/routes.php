<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/10 0010
 * Time: 8:06
 */
Route::get('/','LunitController@index');
Route::post('/','LunitController@store')->name('lunit.store');
// 测试路由
//Route::get('test', 'TestController@index');
