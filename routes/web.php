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

Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);

Route::get('/', 'HomeController@index')->name('home');

Route::get('/o-nas', 'HomeController@about')->name('about');
Route::get('/sertifikaty', 'HomeController@sertifikaty')->name('sertifikaty');
Route::get('/stati', 'ArticleController@getArticles')->name('stati');
Route::get('/stati/{slug}', 'ArticleController@getArticleInfo')->name('articleInfo');
Route::get('/otzyvy', 'HomeController@otzyvy')->name('otzyvy');

Route::get('/kalkulyator-onlayn', 'HomeController@kalkulyatoronlayn')->name('kalkulyator-onlayn');

Route::get('/nashi-raboty', 'HomeController@nashiraboty')->name('nashi-raboty');
Route::get('/nashi-raboty/{slug}', 'HomeController@nashirabotyInfo')->name('rabotaInfo');
Route::get('/aktsii-i-skidki', 'HomeController@aktsii')->name('aktsii-i-skidki');

Route::group(['prefix' => 'kontakty'], function () {
	Route::get('/', 'HomeController@kontakty')->name('kontakty');
});

Route::group(['prefix' => 'plastikovyye-okna'], function () {
	Route::get('/', 'HomeController@plastikovyyeokna')->name('plastikovyyeokna');	
	Route::get('rehau-euro-60', 'HomeController@rehaueuro60')->name('rehaueuro60');
	Route::get('rehau-euro-70', 'HomeController@rehaueuro70')->name('rehaueuro70');
	Route::get('rehau-brillant', 'HomeController@brillant')->name('brillant');
	Route::get('rehau-synego', 'HomeController@synego')->name('synego');
	Route::get('rehau-geneo', 'HomeController@geneo')->name('geneo');
	Route::get('okna-s-laminatsiyey', 'HomeController@laminatsiyey')->name('laminatsiyey');
	Route::get('steklopakety', 'HomeController@steklopakety')->name('steklopakety');
	Route::get('moskitnyye-setki', 'HomeController@setki')->name('setki');
	Route::get('podokonniki', 'HomeController@podokonniki')->name('podokonniki');
	Route::get('otlivy', 'HomeController@otlivy')->name('otlivy');
	Route::get('furnitura', 'HomeController@furnitura')->name('furnitura');
});

Route::get('/derevyannyye-okna', 'HomeController@derevyannyyeokna')->name('derevyannyyeokna');

Route::get('/balkony-i-lodzhii', 'HomeController@balkonyilodzhii')->name('balkonyilodzhii');

Route::get('/okna-dlya-doma', 'HomeController@oknadlyadoma')->name('oknadlyadoma');

Route::group(['prefix' => 'dveri'], function () {
	Route::get('/', 'HomeController@dveri')->name('dveri');
	Route::get('vkhodnyye', 'HomeController@vkhodnyye')->name('vkhodnyye');
	Route::get('mezhkomnatnyye', 'HomeController@mezhkomnatnyye')->name('mezhkomnatnyye');
	Route::get('balkonnyye', 'HomeController@balkonnyye')->name('balkonnyye');
});

Route::group(['prefix' => 'uslugi-i-servis'], function () {
	Route::get('/', 'HomeController@uslugi')->name('uslugi');
	Route::get('vyzov-zamershchika', 'HomeController@vyzov')->name('vyzov');
	Route::get('ustanovka-okon', 'HomeController@ustanovka')->name('ustanovka');
	Route::get('dostavka-i-oplata', 'HomeController@dostavka')->name('dostavka');
	Route::get('garantiya-i-servis', 'HomeController@garantiya')->name('garantiya');
});

Route::group([
	'prefix'=>'admin', 
	'namespace'=>'Admin', 
	'middleware'=>['auth', 'admin']  
	], function(){
	
		Route::get('/', 'AdminController@index');
		Route::post('articles/changeDisplay', 'ArticleController@changeDisplay');
		Route::resource('/articles', 'ArticleController');
		Route::post('leads/changeStatus', 'LeadController@changeStatus');		
		Route::resource('/leads', 'LeadController');
		Route::resource('/works', 'WorkController');
});

Route::get('/clear', function() {
	Artisan::call('cache:clear');
	Artisan::call('config:cache');
	Artisan::call('view:clear');
	Artisan::call('route:clear');
	return "Кэш очищен";
});

Route::post('/form-ok', 'LeadController@addLead')->name('form-ok');
Route::post('/submit_modal', 'LeadController@submit_modal')->name('submit_modal');

