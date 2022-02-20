<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

use App\Services\Documentation\Indexer;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('docs', function (Indexer $indexer) {
    $indexer->indexAllDocuments([
        'main' => 'main',
        '13.0' => '13.0',
        '12.0' => '12.0',
        '9.0' => '9.0'
    ]);
    $this->comment('All documentation has been indexed.');
})->purpose('Generate docs indexes to algolia');
