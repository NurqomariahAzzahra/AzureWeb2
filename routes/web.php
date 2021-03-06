<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatasController;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index']);
// Route::get('/data', [PagesController::class, 'data']);
Route::get('/info', [PagesController::class, 'info']);
Route::get('/about', [PagesController::class, 'about']);

Route::resource('Data', DataController::class);

/*
+--------+-----------+------------------+--------------+---------------------------------------------+------------+
| Domain | Method    | URI              | Name         | Action                                      | Middleware |
+--------+-----------+------------------+--------------+---------------------------------------------+------------+
|        | GET|HEAD  | /                |              | App\Http\Controllers\PagesController@index  | web        |
|        | GET|HEAD  | Data             | Data.index   | App\Http\Controllers\DataController@index   | web        |
|        | POST      | Data             | Data.store   | App\Http\Controllers\DataController@store   | web        |
|        | GET|HEAD  | Data/create      | Data.create  | App\Http\Controllers\DataController@create  | web        |
|        | GET|HEAD  | Data/{Data}      | Data.show    | App\Http\Controllers\DataController@show    | web        |
|        | PUT|PATCH | Data/{Data}      | Data.update  | App\Http\Controllers\DataController@update  | web        |
|        | DELETE    | Data/{Data}      | Data.destroy | App\Http\Controllers\DataController@destroy | web        |
|        | GET|HEAD  | Data/{Data}/edit | Data.edit    | App\Http\Controllers\DataController@edit    | web        |
|        | GET|HEAD  | about            |              | App\Http\Controllers\PagesController@about  | web        |
|        | GET|HEAD  | api/user         |              | Closure                                     | api        |
|        |           |                  |              |                                             | auth:api   |
|        | GET|HEAD  | info             |              | App\Http\Controllers\PagesController@info   | web        |
+--------+-----------+------------------+--------------+---------------------------------------------+------------+
*/
