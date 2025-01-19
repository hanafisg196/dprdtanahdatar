<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Backend\LinkController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FetchingDataControlller;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\Frontend\NewsPageController;
use App\Http\Controllers\ImageContentController;
use App\Http\Controllers\ImageSliderController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsPostController;
use App\Http\Controllers\PengumumanPostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SkpdLinkController;
use App\Http\Controllers\SlideLinkController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserManagerController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AuthenticateUser;
use App\Models\SlideLink;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dprdtd.page.home');
})->name('home');

Route::get('/berita', function () {
    return view('dprdtd.page.detail-blog');
})->name('berita');
Route::get('/member', function () {
    return view('dprdtd.page.detail-member');
})->name('member');


// Route::get('/home', [HomePageController::class, 'index'])->name('home');
// Route::get('/berita/{slug}', [NewsPageController::class,'detailNews'])->name('news.detail');
// // Route::post('/commen/{newsId}', [NewsPageController::class,'detailNews'])->name('news.detail');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'dologin'])->name('doLogin');
// Route::get('/fetching', [FetchingDataControlller::class, 'fetchData']);




Route::middleware(AuthenticateUser::class)->group(function () {

    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/profil', [ProfileController::class, 'index'])->name('profile');
    Route::get('/dashboard/content/berita/form', [NewsPostController::class, 'form'])->name('dashboard.news.post.form');
    Route::post('/dashboard/content/berita/store', [NewsPostController::class, 'store'])->name('dashboard.news.post.create');
    Route::get('/dashboard/content/berita/show/{id}', [NewsPostController::class, 'show'])->name('dashboard.news.post.show');
    Route::post('/dashboard/content/berita/update/{id}', [NewsPostController::class, 'update'])->name('dashboard.news.post.update');
    Route::post('/dashboard/content/berita/delete/{id}', [NewsPostController::class, 'delete'])->name('dashboard.news.post.delete');
    Route::get('/dashboard/content/berita/preview/{id}', [NewsPostController::class, 'preview'])->name('dashboard.news.post.preview');
    Route::post('/berita/upload/image', [ImageContentController::class, 'store'])->name('news.upload.images');
    Route::get('/dashboard/content/article/list', [ArticleController::class, 'index'])->name('dashboard.article.list');
    Route::get('/dashboard/content/article/form', [ArticleController::class, 'form'])->name('dashboard.article.form');
    Route::post('/dashboard/content/article/store', [ArticleController::class, 'store'])->name('dashboard.article.store');
    Route::get('/dashboard/content/article/show/{id}', [ArticleController::class, 'show'])->name('dashboard.article.show');
    Route::post('/dashboard/content/article/update/{id}', [ArticleController::class, 'update'])->name('dashboard.article.update');
    Route::get('/dashboard/content/article/preview/{id}', [ArticleController::class, 'preview'])->name('dashboard.article.preview');
    Route::post('/dashboard/content/article/delete/{id}', [ArticleController::class, 'delete'])->name('dashboard.article.delete');
    Route::get('/dashboard/content/pengumuman/list', [PengumumanPostController::class, 'index'])->name('dashboard.pengumuman.list');
    Route::get('/dashboard/content/pengumuman/form', [PengumumanPostController::class, 'form'])->name('dashboard.pengumuman.form');
    Route::post('/dashboard/content/pengumuman/create', [PengumumanPostController::class, 'create'])->name('dashboard.pengumuman.create');
    Route::get('/dashboard/content/pengumuman/show/{id}', [PengumumanPostController::class, 'show'])->name('dashboard.pengumuman.show');
    Route::post('/dashboard/content/pengumuman/update/{id}', [PengumumanPostController::class, 'update'])->name('dashboard.pengumuman.update');
    Route::post('/dashboard/content/pengumuman/delete/{id}', [PengumumanPostController::class, 'delete'])->name('dashboard.pengumuman.delete');
    Route::get('/dashboard/content/agenda/list', [AgendaController::class, 'index'])->name('dashboard.agenda.list');
    Route::get('/dashboard/content/agenda/form', [AgendaController::class, 'form'])->name('dashboard.agenda.form');
    Route::post('/dashboard/content/agenda/store', [AgendaController::class, 'store'])->name('dashboard.agenda.store');
    Route::post('/dashboard/content/agenda/update/{id}', [AgendaController::class, 'update'])->name('dashboard.agenda.update');
    Route::post('/dashboard/content/agenda/delete/{id}', [AgendaController::class, 'delete'])->name('dashboard.agenda.delete');
    Route::get('/dashboard/content/agenda/show/{id}', [AgendaController::class, 'show'])->name('dashboard.agenda.show');
    Route::post('/upload', [FileUploadController::class, 'filePondUpload']);
    Route::post('/editor/upload', [FileUploadController::class, 'editorFileUpload']);
    Route::get('/filemanager', [FileManagerController::class, 'index'])->name('filemanager');
    Route::post('/logout', [LoginController::class, 'doLogout'])->name('logout');

    //Dprd
    Route::get('/dashboard/konten/anggota/list', [MemberController::class, 'memberList'])
    ->name('dashboard.member.list');
    Route::get('/dashboard/konten/partai/list', [MemberController::class, 'getParties'])
    ->name('dashboard.party.list');
    Route::get('/dashboard/konten/partai/new', [MemberController::class, 'partyForm'])
    ->name('dashboard.party.new');

    Route::post('/dashboard/konten/partai/create', [MemberController::class, 'createParty'])
    ->name('dashboard.party.create');

    Route::get('/dashboard/konten/anggota/registrasi', [MemberController::class, 'memberRegister'])
    ->name('dashboard.member.register');
    
    Route::get('/dashboard/konten/postingan/list', [NewsPostController::class, 'index'])
    ->name('dashboard.news.post.list');

    Route::middleware(AdminMiddleware::class)->group(function(){

        Route::get('/dashboard/category/berita', [CategoryController::class, 'catNews'])->name('dashboard.category.berita');
        Route::get('/dashboard/category/article', [CategoryController::class, 'catArticle'])->name('dashboard.category.article');
        Route::get('/dashboard/category/pengumuman', [CategoryController::class, 'catPengumuman'])->name('dashboard.category.pengumuman');
        Route::get('/dashboard/category/agenda', [CategoryController::class, 'catAgenda'])->name('dashboard.category.agenda');

        Route::get('/dashboard/settings/slide-image/list', [SettingController::class,'slideImage'])->name('dashboard.settings.slide-image.list');
        Route::post('/dashboard/settings/slide-image/create', [ImageSliderController::class, 'createSlide'])->name('dashboard.settings.slide-image.create');
        Route::post('/dashboard/settings/slide-image/update/{id}', [ImageSliderController::class, 'updateSlide'])->name('dashboard.settings.slide-image.update');
        Route::post('/dashboard/settings/slide-image/delete/{id}', [ImageSliderController::class, 'deleteSlide'])->name('dashboard.settings.slide-image.delete');
        Route::get('/dashboard/settings/slide-link/list', [SettingController::class,'slideLink'])->name('dashboard.settings.slide-link.list');
        Route::post('/dashboard/settings/slide-link/create', [SlideLinkController::class,'createSlideLink'])->name('dashboard.settings.slide-link.create');
        Route::post('/dashboard/settings/slide-link/update/{id}', [SlideLinkController::class,'updateSlideLink'])->name('dashboard.settings.slide-link.update');
        Route::post('/dashboard/settings/slide-link/delete/{id}', [SlideLinkController::class,'deleteSlideLink'])->name('dashboard.settings.slide-link.delete');
        Route::get('/dashboard/settings/skpd-link/list', [SettingController::class,'skpdLink'])->name('dashboard.settings.skpd-link.list');
        Route::post('/dashboard/settings/skpd-link/create', [SkpdLinkController::class,'createSkpdLink'])->name('dashboard.settings.skpd-link.create');
        Route::post('/dashboard/settings/skpd-link/update/{id}', [SkpdLinkController::class,'updateSkpdLink'])->name('dashboard.settings.skpd-link.update');
        Route::post('/dashboard/settings/skpd-link/delete/{id}', [SkpdLinkController::class,'deleteSkpdLink'])->name('dashboard.settings.skpd-link.delete');

        Route::get('/dashboard/settings/menu/list', [MenuController::class,'index'])->name('dashboard.settings.menu.list');
        Route::post('/dashboard/settings/menu/create', [MenuController::class, 'createMenu'])->name('dashboard.settings.menu.create');
        Route::post('/dashboard/settings/menu/update/{id}', [MenuController::class, 'updateMenu'])->name('dashboard.settings.menu.update');
        Route::post('/dashboard/settings/menu/delete/{id}', [MenuController::class, 'deleteMenu'])->name('dashboard.settings.menu.delete');
        Route::post('/dashboard/settings/submenu/create/{id}', [MenuController::class, 'createSubMenu'])->name('dashboard.settings.submenu.create');
        Route::post('/dashboard/settings/submenu/update/{id}', [MenuController::class, 'updateSubMenu'])->name('dashboard.settings.submenu.update');
        Route::post('/dashboard/settings/submenu/delete/{id}', [MenuController::class, 'deleteSubMenu'])->name('dashboard.settings.submenu.delete');

        Route::get('/dashboard/settings/link/list', [LinkController::class, 'index'])->name('dashboard.settings.link.list');
        Route::get('/dashboard/settings/link/form', [LinkController::class, 'formAdd'])->name('dashboard.settings.link.addFrom');
        Route::post('/dashboard/settings/link/create', [LinkController::class, 'create'])->name('dashboard.settings.link.create');
        Route::post('/dashboard/settings/link/delete/{id}', [LinkController::class, 'delete'])->name('dashboard.settings.link.delete');
        Route::post('/dashboard/settings/link/update/{id}', [LinkController::class, 'update'])->name('dashboard.settings.link.update');
        Route::post('/dashboard/settings/link/category/create', [LinkController::class, 'createCategory'])->name('dashboard.settings.link.category.create');
        Route::post('/dashboard/settings/link/category/update/{id}', [LinkController::class, 'createCategory'])->name('dashboard.settings.link.category.update');
        Route::post('/dashboard/settings/link/category/delete/{id}', [LinkController::class, 'deleteCategory'])->name('dashboard.settings.link.category.delete');



        Route::get('/dashboard/user/manager/list', [UserManagerController::class, 'index'])->name('dashboard.usermanager.list');
        Route::post('/dashboard/user/manager/register', [UserManagerController::class, 'register'])->name('dashboard.usermanager.register');
        Route::get('/dashboard/user/manager/form', [UserManagerController::class, 'createForm'])->name('dashboard.usermanager.create.form');
        Route::post('/dashboard/user/manager/update/{id}', [UserManagerController::class, 'update'])->name('dashboard.usermanager.update');
        Route::post('/dashboard/user/manager/delete/{id}', [UserManagerController::class, 'delete'])->name('dashboard.usermanager.delete');

    });
});


Route::get('/test', [TestController::class, 'test']);
