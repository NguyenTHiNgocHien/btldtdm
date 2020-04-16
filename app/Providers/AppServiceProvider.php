<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $loai = DB::table('loai')->get();
        $demloai = DB::table('loai')->count();
        $congdung = DB::table('congdung')->get();
        View::share('loai', $loai); // <= Truyền dữ liệu
        View::share('congdung', $congdung);
        View::share('demloai', $demloai);

        Schema::defaultStringLength(191);
    }
}