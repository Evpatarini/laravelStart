<?php
namespace routes;
use Illuminate\Support\Facades\Route;
use app\myCustomStuff\CHTML;
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
    require_once(dirname(__FILE__) . '/../app/myCustomStuff/CHTML.php');
    $oHTML = new CHTML();
    echo $oHTML->divInputDate('Todays Date','saveDate','');
    return view('welcome');
});
