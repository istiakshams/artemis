<?php

use Istiakshams\Artemis\Controllers;
use Istiakshams\Artemis\Controllers\ArtemisController;

use Illuminate\Support\Facades\Route;

Route::get('inspire', [ArtemisController::class, 'index']);

