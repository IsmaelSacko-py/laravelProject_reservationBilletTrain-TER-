<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.accueil');
})->name("index");

Route::get("/rent-venue", function(){
    return view("pages.rent-venue");
})->name("rent-venue");

Route::get("/about", function(){
    return view("pages.about");
})->name("about");

Route::get("/shows-events", function(){
    return view("pages.shows-events");
})->name("shows-events");

Route::get("/tickets", function(){
    return view("pages.tickets");
})->name("tickets");

Route::get("/event-details", function(){
    return view("pages.event-details");
})->name("event-details");

Route::get("/ticket-details", function(){
    return view("pages.ticket-details");
})->name("ticket-details");


