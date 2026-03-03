<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RateLimiter::for('contact-form', function (Request $request) {
            $ipKey = (string) $request->ip();
            $emailKey = mb_strtolower((string) $request->input('email', ''));
            $combinedKey = $ipKey.'|'.$emailKey;

            return [
                Limit::perMinute(5)->by($combinedKey)->response(function (Request $request, array $headers) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Trop de tentatives. Merci de réessayer dans une minute.',
                    ], 429, $headers);
                }),
                Limit::perHour(30)->by($ipKey),
            ];
        });

        RateLimiter::for('chatbot', function (Request $request) {
            $ipKey = (string) $request->ip();

            return [
                Limit::perMinute(25)->by($ipKey)->response(function (Request $request, array $headers) {
                    return response()->json([
                        'reply' => 'Trop de messages en peu de temps. Merci de patienter une minute.',
                    ], 429, $headers);
                }),
                Limit::perHour(300)->by($ipKey),
            ];
        });
    }
}
