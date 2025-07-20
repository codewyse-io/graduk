<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/internation-recurement', function () {
    return view('internation-recurement');
});
Route::get('/global-engagement', function () {
    return view('global-engagement');
});
Route::get('/language-assesment', function () {
    return view('language-assesment');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/visa', function () {
    return view('visa');
});
Route::get('/visa-details', function () {
    return view('visa-details');
});
Route::get('/blog', function () {
    return view('blog-grid');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});



$viewFiles = File::allFiles(resource_path('views'));
// Loop through each file in the views directory
foreach ($viewFiles as $viewFile) {
    // Get the relative path of the view file
    $viewName = str_replace(resource_path('views') . '/', '', $viewFile->getRealPath());
    
    
    // Remove the .blade.php extension from the view name
    // $viewName = pathinfo($viewName, PATHINFO_FILENAME);
    

    $viewName = str_replace('.blade.php', '', $viewName);

    
    // Skip directories (like any subdirectories you may have under 'views/')
    if ($viewFile->isDir()) {
        continue;
    }

    // Create a route for each view file, using the file name without extension
    Route::view( $viewName, $viewName);
}

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
