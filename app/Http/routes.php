<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'google-drive'], function () {
    Route::get('/', 'GoogleDriveController@index');

    Route::get('put', 'GoogleDriveController@put');

    Route::get('put-existing', 'GoogleDriveController@putExisting');

    Route::get('list', 'GoogleDriveController@listFolder');

    Route::get('list-folder-contents', 'GoogleDriveController@listFolderContents');

    Route::get('get', 'GoogleDriveController@get');

    Route::get('put-get-stream', 'GoogleDriveController@putGetStream');

    Route::get('create-dir', 'GoogleDriveController@createDir');

    Route::get('create-sub-dir', 'GoogleDriveController@createSubDir');

    Route::get('put-in-dir', 'GoogleDriveController@putInDir');

    Route::get('newest', 'GoogleDriveController@newest');

    Route::get('delete', 'GoogleDriveController@delete');

    Route::get('delete-dir', 'GoogleDriveController@deleteDir');

    Route::get('rename-dir', 'GoogleDriveController@renameDir');

    Route::get('share', 'GoogleDriveController@share');

    Route::get('export/{basename}', 'GoogleDriveController@export');
});