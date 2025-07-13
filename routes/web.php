<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/auth-logout', function (Request $request) {
    try {
        $email = Crypt::decryptString($request->token);
        $user = User::where('email', $email)->first();
        if ($user) {
            DB::table('sessions')->where('user_id', $user->id)->delete();
        }

        return response('logged out!');
    } catch (\Exception $e) {
        return response('Invalid token!', 403);
    }
})->withoutMiddleware([VerifyCsrfToken::class]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
