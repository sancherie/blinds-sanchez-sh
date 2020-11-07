<?php
declare(strict_types=1);

use App\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;

Route::get('', [WebhookController::class, 'handle']);
