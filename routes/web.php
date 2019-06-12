<?php
use App\Http\Controllers\RegistrationController;
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

//Trang dang nhap va dang ki
    //Trang chu
Route::get('/', 'UserController@index');
Route::get('/home', 'UserController@index');
    //Dang Ky Thanh Vien
Route::get('/register', 'Auth\RegistrationController@create');
Route::post('register', 'Auth\RegistrationController@store');
    //Dang nhap va xu ly dang nhap
Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin'])->middleware('locale');
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);
    //Dang Xuat
Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);

//Thay doi ngon ngu
Route::get('change-language/{language}', 'Auth\LoginController@changeLanguage')->name('change-language');

