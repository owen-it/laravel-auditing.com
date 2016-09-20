<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Cache;

/**
 * Set the default documentation version...
 */
define('DEFAULT_VERSION', env('DEFAULT_VERSION', '2.4'));

/**
 * Convert some text to Markdown...
 */
function markdown($text) {
	return (new ParsedownExtra)->text($text);
}

Route::get('/flush/{version?}', function($version = null) {
	Artisan::call('view:clear');
	
	if($version){
		Cache::forget($version);
		return redirect('docs/' . $version);
	}
	
	Cache::flush();
	
	return redirect('docs/'.DEFAULT_VERSION);
});

Route::get('/', 'DocsController@showRootPage');
Route::get('docs', 'DocsController@showRootPage');
Route::get('docs/{version}/{page?}', 'DocsController@show');
