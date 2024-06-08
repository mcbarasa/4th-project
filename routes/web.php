<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PromoterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GigController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReportController;


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

// admin views start
Route::get('/admin/adm_gig', function () {
    return view('/admin/adm_gig');
});
Route::get('/admin/content', function () {
    return view('/admin/content');
});
Route::get('/admin/index', function () {
    return view('/admin/index');
});
Route::get('/admin/set', function () {
    return view('/admin/set');
});
Route::get('/admin/not', function () {
    return view('/admin/not');
});
Route::get('/admin/report', function () {
    return view('/admin/report');
});
// end
Route::get('/', function () {
    return view('dash/land');
});
Route::get('/navs/acc', function () {
    return view('navs/acc');
});
Route::get('/navs/art', function () {
    return view('navs/art');
});
Route::get('/navs/gig', function () {
    return view('navs/gig');
});
Route::get('/navs/cont', function () {
    return view('navs/cont');
});
Route::get('/navs/prof', function () {
    return view('navs/prof');
});
Route::get('/navs/add_gig', function () {
    return view('navs/add_gig');
});
Route::get('/navs/req', function () {
    return view('navs/req');
});
Route::get('/navs/art_reg', function () {
    return view('navs/art_reg');
});
Route::get('/navs/fan', function () {
    return view('navs/fan');
});
Route::get('/navs/client', function () {
    return view('navs/client');
});
Route::get('/navs/prom', function () {
    return view('navs/prom');
});

// rating routes
Route::get('/navs/art_rate', function () {
    return view('navs/art_rate');
});

Auth::routes();

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::POST('/artist_store', [ArtistController::class, 'artist_store']);
Route::POST('/promoter_store', [App\Http\Controllers\PromoterController::class, 'promoter_store']);
Route::POST('/gig_store', [App\Http\Controllers\GigController::class, 'gig_store']);
Route::POST('/contact_store', [App\Http\Controllers\ContactController::class, 'contact_store']);

// route to store rating and comment
Route::POST('/store_rating', [App\Http\Controllers\RatingController::class, 'store_rating']);
Route::POST('/store_comment', [App\Http\Controllers\CommentController::class, 'store_comment']);
Route::POST('/store_ratingPromoter', [App\Http\Controllers\RatingController::class, 'store_ratingPromoter']);

// route to show/display
Route::get('/navs.prof/{id}', [ArtistController::class, 'show'])->name('navs.prof.show');
Route::get('/showArtists', [ArtistController::class, 'showArtists'])->name('navs.art');
Route::get('/showPromoters', [PromoterController::class, 'showPromoters'])->name('navs.prom');
Route::get('/showMore', [GigController::class, 'showMore'])->name('navs.req');
Route::get('/showGigs', [GigController::class, 'showGigs','navs.reg'])->name('navs.gig');

// show profile
Route::get('/navs/req/{id}', [GigController::class, 'showGigs','navs.reg'])->name('navs.gig');
Route::get('/navs/req/{id}', function () {
    return view('navs/req');
});

// profile routes
Route::get('/showProfiles', [ProfileController::class, 'showProfiles'])->name('navs.prof');
Route::get('/showPromProfiles', [ProfileController::class, 'showPromProfiles'])->name('navs.prom_prof');

Route::get('/showArtistProfiles', [ProfileController::class, 'showArtistProfiles'])->name('navs.art_rate');
Route::get('/showPromoterProfiles', [ProfileController::class, 'showPromoterProfiles'])->name('navs.prom_rate');

// admin
Route::get('showDashboard', [AdminDashboardController::class, 'showDashboard'])->name('admin.index')->middleware('is_admin');
Route::get('/showUsers', [UserController::class, 'showUsers'])->name('admin.user')->middleware('is_admin');
Route::get('/showcontacts', [ContactController::class, 'showcontacts'])->name('admin.not')->middleware('is_admin');
Route::get('/showComments', [CommentController::class, 'showComments'])->name('admin.set')->middleware('is_admin');
Route::get('/showAdminGigs', [GigController::class, 'showAdminGigs'])->name('admin.gig')->middleware('is_admin');
Route::get('/showAdminArtists', [ArtistController::class, 'showAdminArtists'])->name('admin.ast')->middleware('is_admin');
Route::get('/showAdminPromoters', [PromoterController::class, 'showAdminPromoters'])->name('admin.content')->middleware('is_admin');
Route::POST('/gig_storeAdmin', [AdminDashboardController::class, 'gig_storeAdmin']);

// route to delete a gig in the adminController
Route::delete('/gigs/{id}', [AdminDashboardController::class, 'destroy'])->name('gigs.destroy');
Route::delete('/artists/{id}', [AdminDashboardController::class, 'destroyArtist'])->name('artists.destroyArtist');
Route::delete('/promoters/{id}', [AdminDashboardController::class, 'destroyPromoter'])->name('promoters.destroyPromoter');
Route::delete('/contacts/{id}', [AdminDashboardController::class, 'destroyContact'])->name('contacts.destroyContact');
Route::delete('/comments/{id}', [AdminDashboardController::class, 'destroyComments'])->name('comments.destroyComments');

// Route to implement search
Route::get('/search', [SearchController::class, 'search'])->name('results.search');

// Route to print the Systems report
Route::get('/report', [ReportController::class, 'generate'])->name('report.generate');