<?php

Route::group(['prefix' => 'admin/filemanager', 'middleware' => 'auth'], function() {

    Route::get('/', 'Infinety\FileManager\Controllers\FileManagerController@getIndex');
	Route::get('/dialog', 'Infinety\FileManager\Controllers\FileManagerController@getDialog');

	Route::post('/get_folder', 'Infinety\FileManager\Controllers\FileManagerController@ajaxGetFilesAndFolders');

	Route::post('/uploadFile', 'Infinety\FileManager\Controllers\FileManagerController@uploadFile');

	Route::post('/createFolder', 'Infinety\FileManager\Controllers\FileManagerController@createFolder');

	Route::post('/delete', 'Infinety\FileManager\Controllers\FileManagerController@delete');
	Route::get('/download', 'Infinety\FileManager\Controllers\FileManagerController@download');

});


