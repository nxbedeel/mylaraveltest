<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Images;
use App\Album;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('_recent', function ($view){
        $data = Images::leftJoin('albums', 'images.album_id', '=', 'albums.id')
                     ->leftJoin('users', 'images.user_id', '=', 'users.id')
                ->select('images.*', 'albums.name as albumname', 'users.name as username')
                ->limit(4)
                 ->where("images.status","=",'Public')
                 ->orderBy('images.id', 'desc')
                ->get();
              
            $view->with("recent",$data);
            
        });
        view()->composer('_album', function ($view){
        $data = Album::leftJoin('album_types', 'albums.albumtype_id', '=', 'album_types.id')
                ->select('albums.*', 'album_types.name as typename')
                 ->orderBy('albums.id', 'desc')
                ->get();
              
            $view->with("albums",$data);
            
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
