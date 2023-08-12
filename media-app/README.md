**Backend for a media app In Laravel 9**
having different APIs
Such as 


Route::post('/insert',[MediaController::class, 'insert']);

Route::get('/getAll',[MediaController::class,'getAll']);

Route::get('/getbyCategory/{category}',[MediaController::class, 'getbyCategory']);

Route::get('/getbyChannel/{channel}',[MediaController::class, 'getbyChannel']);

Route::get('/getallchannel',[MediaController::class,'getallchannel']);

Route::get('/getallcategory',[MediaController::class,'getallcategory']);
