<?php

// ===============================================
// STATIC PAGES ==================================
// ===============================================

// show a static view for your home page (app/resources/views/home.blade.php)
Route::resource('/', 'HomeController');

// about page (app/resources/views/skills.blade.php)
Route::get('questionnaire', function()
{
    return view('questionnaire');
});