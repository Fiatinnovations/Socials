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



Route::group(['middleware'=>['web']], function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Route::post('/signup',[
        'uses'=>'UserController@postSignUp',
        'as'=>'feelinglucky'
          ]);

    Route::post('/signIn', [
        'uses' => 'UserController@postSignIn',
        'as' =>'welcome'

    ]);

    Route::get('/loginplease', function(){
        return view('loginhere');
    });

    Route::get('/dashboard', [
        'uses' => 'PostsController@getDashboard',
        'as' => 'dashboard',
        'middleware'=>'auth'
    ]);

});

   Route::post('createpost',[
      'uses' => 'PostsController@createPost',
      'as'   => 'createpost',
      'middleware' => 'auth'
   ]);

  Route::get('delete-post/{post_id}', [
      'uses' => 'PostsController@getDelete',
      'as' => 'deletepost',
      'middleware' => 'auth'
  ]);



  Route::get('logout', [
     'uses'=> 'PostsController@logOut',
     'as' => 'logout'
  ]);

  Route::post('edit', function (\Illuminate\Http\Request $request){
      return response()->json(['message'=>$request['postId']]);

  })->name('edit');
