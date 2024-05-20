<?php

use App\Http\Controllers\ActivityLevelController;
use App\Http\Controllers\ActivityTypeController;
use App\Http\Controllers\LandscapeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\TourController;
use App\Models\ActivityType;
use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [IndexController::class, 'index']);
Route::post('/subscribe', [PostController::class, 'subscribe']);
Route::get('/blog', [PostController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/services', [IndexController::class, 'services']);
Route::get('/projects', [IndexController::class, 'projects']);
Route::get('/tour-listings', [TourController::class, 'index']);


Route::middleware('auth')->group(function () {
    Route::post('/blog', [PostController::class, 'store'])->name('post.create');
    Route::get('/blog/create', [PostController::class, 'create']);
    Route::get('/tour/create', [TourController::class, 'create']);
    Route::patch('/tour/{tour}/update', [TourController::class, 'update']);
    Route::delete('/tour/{tour}/delete', [TourController::class, 'destroy']);
    Route::post('/tour', [TourController::class, 'store']);
    Route::get('/tour/{tour}/edit', [TourController::class, 'edit']);
    Route::get('/tour/manage', [TourController::class, 'manage']);
    Route::get('/tour/region/create', [RegionController::class, 'create']);
    Route::get('/tour/activity/create', [ActivityTypeController::class, 'create']);
    Route::get('/tour/activity-level/create', [ActivityLevelController::class, 'create']);
    Route::get('/tour/landscape/create', [LandscapeController::class, 'create']);
    Route::post('/tour/activity-level', [ActivityLevelController::class, 'store']);
    Route::post('/tour/landscape', [LandscapeController::class, 'store']);
    Route::post('/tour/activity', [ActivityTypeController::class, 'store']);
    Route::get('/tour/activity-level/manage', [ActivityLevelController::class, 'manage']);
    Route::get('/tour/landscape/manage', [LandscapeController::class, 'manage']);
    Route::get('/tour/activity/manage', [ActivityTypeController::class, 'manage']);
    Route::delete('/tour/landscape/{landscape}/delete', [LandscapeController::class, 'destroy']);
    Route::delete('/tour/regions/{region}/delete', [RegionController::class, 'destroy']);
    Route::delete('/tour/activity-level/{level}/delete', [ActivityLevelController::class, 'destroy']);
    Route::delete('/tour/activity/{activity}/delete', [ActivityTypeController::class, 'destroy']);
    Route::post('/tour/region', [RegionController::class, 'store']);
    Route::get('/tour/region/manage', [RegionController::class, 'manage']);
    Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/blog/{post}/update', [PostController::class, 'update'])->name('post.update');
    Route::get('/blog/manage', [PostController::class, 'managePost'])->name('post.manage');
    Route::get('/blog/comment/manage', [CommentController::class, 'manageComment'])->name('post.comment.manage');
    Route::delete('/blog/{comment}/comment', [CommentController::class, 'destroy'])->name('comment.delete');
    Route::delete('/blog/{post}/delete', [PostController::class, 'destroy'])->name('post.delete');
    Route::get('/news', [PostController::class, 'createNews']);
    Route::post('/news', [PostController::class, 'sendNews'])->name('news.send');
    Route::get('/news/manage', [PostController::class, 'newsManage'])->name('news.manage');
    Route::delete('/news/{news}', [PostController::class, 'destroyNews'])->name('news.delete');
    Route::get('subscriber/manage', [PostController::class,'manageSubscribe'])->name('subscriber.manage');
    Route::patch('set-registration', function(Request $request){
        // dd($request->?is_open);
        $data = [
            'registration'=>$request->is_open
        ];
        $tokenFile = storage_path('web/settings.json');
        $fh = fopen($tokenFile, 'wb');

        $set = json_encode($data);
        // dd($set);
        $content =fwrite($fh ,$set);
        fclose($fh);
       
    })->name('set.registration');
});

Route::post('/blog/comment',[CommentController::class, 'store']);
Route::get('/blog/{post}', [PostController::class, 'show']);

Route::get('/contact', [IndexController::class, 'contact']);
Route::post('/contact', [IndexController::class, 'store']);

Route::get('/dashboard', function () {
    $tokenFile = storage_path('web/settings.json');
    $fh = fopen($tokenFile, 'r');
    $content = fread($fh ,filesize($tokenFile));
    fclose($fh);
    $set = json_decode($content);
    $post = Post::latest()->paginate(10);
    return Inertia::render('Dashboard',['is_open'=>$set->registration,'posts'=>$post]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
