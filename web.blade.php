Route event
Route::resource('/event','EventController');
Route::get('/event/create', 'EventController@create');
Route::post('/event/store', 'EventController@store');
Route::post('/event/edit/{id_event}', 'EventController@update');
Route::get('/event/show','EventController@show');
Route::get('/cetakevent','EventController@cetakEvent');
