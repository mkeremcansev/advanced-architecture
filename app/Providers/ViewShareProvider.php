<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Slider;
use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->runningInConsole()) {
            view()->share('sliders', Slider::orderBy('id', 'DESC')->get());
            view()->share('categories', Category::with('getCategoryProjects')->orderBy('id', 'DESC')->get());
            view()->share('projects', Project::with('getProjectGalleryImages', 'getProjectCategory')->orderBy('id', 'DESC')->get());
        }
    }
}