<?php

use App\Http\Controllers\XmlToJsonController;
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

Route::get('/', function () {
   // $date1 = new DateTime('01-08-2022');
   // $date2 = new DateTime('08-10-2022');
   // //$date_diff = date_diff($date1, $date2);
   // $diff_time = $date1->diff($date2);
   // dd($diff_time->d);

   // $string = "hello india , how are you, hello hello";
   // dd(substr_count($string,'hello'));

   $date1 = date_create("2013-03-15");
   $date2 = date_create("2013-12-12");
   $diff = date_diff($date1, $date2);
   dd($diff->days);

   return view('welcome');
});

Route::resource('xml_to_json', XmlToJsonController::class);
