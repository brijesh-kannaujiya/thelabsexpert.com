<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\HttpFoundation\Response;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        if (Schema::hasTable('migrations')) {
            $languages = \App\Models\Language::select('iso')->where('active', true)->get();
            $info_settings = setting('info');

            view()->share([
                'languages' => $languages
            ]);

            if (session('locale')) {
                app()->setLocale(session('locale'));
            } else {
                app()->setLocale($info_settings['language']);
            }

            if (isset(setting('info')['timezone'])) {
                date_default_timezone_set(setting('info')['timezone']);
            } else {
                date_default_timezone_set('UTC');
            }

            //add transfile content to session if not exist
            if (!session()->has('trans')) {
                $trans = file_get_contents(resource_path('lang/' . app()->getLocale() . '.json'));
                $trans = json_decode($trans);
                $trans = json_encode($trans);

                session()->put('trans', $trans);
            }
        }

        return $next($request);
    }
}
