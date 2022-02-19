<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

use App\Http\Controllers\DocsController;

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

define('DEFAULT_VERSION', env('DEFAULT_VERSION', 'master'));

/**
 * Convert some text to Markdown...
 */
function markdown($text) {
	return (new ParsedownExtra)->text($text);
}

Route::get('/flush/{version?}', function($version = null) {

	Artisan::call('view:clear');
	
	if($version){
		
		if($version == 'dd'){
			dd(Cache::get());
		}
		
		if(! Cache::has($version)){
			dd('No cache '.$version);
		}

		Cache::forget($version);
		
		return redirect('docs/' . $version);
	}
	
	Cache::flush();
	
	return redirect('docs/'.DEFAULT_VERSION);
});

Route::get('/', [DocsController::class, 'showWelcomePage'] );
Route::get('docs', [DocsController::class, 'showRootPage'] );
Route::get('docs/{version}/{page?}', [DocsController::class, 'show'] );
