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



    // Homepage Route
    Route::get('/', 'BlogController@index')->name('home');

    // Authors Routes
    Route::get('/authors', 'BlogController@authors')->name('authors');
    Route::get('/author/{author}', 'BlogController@author')->name('author');

    // Contact Routes
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::post('/contactsend', 'ContactController@store')->name('contactSend');

    // RSS Feed Route
    Route::feeds();

    // Register, Login, and forget PW Routes
    Auth::routes();


// Super Admin only routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'permission:perms.super.admin', 'activity']], function () {
    //
});

// Writer and above routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'permission:perms.writer', 'activity']], function () {
    Route::resource('posts', 'Admin\PostController', [
        'names'    => [
            'create'    => 'posts.create',
            'index'     => 'admin.posts',
            'update'    => 'updatepost',
            'store'     => 'storepost',
            'edit'      => 'editpost',
            'destroy'   => 'destroypost',
        ],
        'except' => [
            'show',
        ],
        'parameters' => [
            'post' => 'id',
        ],
    ]);

    Route::resource('tags', 'Admin\TagController', [
        'names'    => [
            'create'    => 'createtag',
            'index'     => 'showtags',
            'update'    => 'updatetag',
            'store'     => 'storetag',
            'edit'      => 'edittag',
            'destroy'   => 'destroytag',
        ],
        'except' => [
            'show',
        ],
        'parameters' => [
            'tag' => 'id',
        ],
    ]);

    Route::get('/uploads', 'Admin\AdminController@uploads')->name('admin-uploads');

    Route::resource('themes', 'Admin\ThemesManagementController', [
        'names' => [
            'index'     => 'themes',
            'create'    => 'createtheme',
            'update'    => 'updatetheme',
            'store'     => 'storetheme',
            'edit'      => 'edittheme',
            'destroy'   => 'destroytheme',
            'show'      => 'showtheme',
        ],
    ]);
    Route::post('/update-blog-theme', 'Admin\ThemesManagementController@updateDefaultTheme')->name('update-blog-theme');
    Route::get('/band', 'Admin\BandController@index')->name('band');
    Route::get('/createband', 'Admin\BandController@create')->name('createband');
    Route::post('/storeband', 'Admin\BandController@store')->name('storeband');
    Route::post('/updateband', 'Admin\BandController@update')->name('updateband');
    Route::get('/deleteband/{id}', 'Admin\BandController@destroy')->name('destroyband');
    Route::get('/skill', 'Admin\SkillController@index')->name('skill');
    Route::get('/createskill', 'Admin\SkillController@create')->name('createskill');
    Route::post('/storeskill', 'Admin\SkillController@store')->name('storeskill');
    Route::get('/skills/{id}/edit', 'Admin\SkillController@edit')->name('editskill');
    Route::post('/updateskill', 'Admin\SkillController@update')->name('updateskill');
    Route::get('/deleteskill/{id}', 'Admin\skillController@destroy')->name('destroyskill');
    Route::get('/division', 'Admin\DivisionController@index')->name('division');
    Route::get('/createdivision', 'Admin\DivisionController@create')->name('createdivision');
    Route::post('/storedivision', 'Admin\DivisionController@store')->name('storedivision');
    Route::post('/updatedivision', 'Admin\DivisionController@update')->name('updatedivision');
    Route::get('/deletedivision/{id}', 'Admin\DivisionController@destroy')->name('destroydivision');
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/dashboarddata', 'Admin\DashboarddataController@index')->name('dashboarddata');
    Route::get('/dashboarddata/{id}/edit', 'Admin\DashboarddataController@edit')->name('editdashboarddata');
    Route::post('/updatedata', 'Admin\DashboarddataController@update')->name('updatedata');
});

// User and above routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'permission:perms.user', 'activity']], function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin');
    Route::get('/sitemap', 'Admin\AdminController@sitemap')->name('sitemap-admin');
    Route::post('/generate-sitemap', 'Admin\AdminController@generateSitemap')->name('generate-sitemap');
});

Route::group(['middleware' => ['activity']], function () {
    // Dynamic Pages Routes
    Route::get('/{slug}/', 'BlogController@showPost');
});
