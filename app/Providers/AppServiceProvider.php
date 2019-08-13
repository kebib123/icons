<?php

namespace App\Providers;

use App\Repositories\Contracts\StyleRepository;
use App\Repositories\Eloquent\EloquentStyleRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ForumCategoryRepository;
use App\Repositories\Eloquent\EloquentForumCategoryRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(StyleRepository::class,EloquentStyleRepository::class);
        $this->app->singleton(ForumCategoryRepository::class,EloquentForumCategoryRepository::class);

    }
}
