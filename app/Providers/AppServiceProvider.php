<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
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
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        $careerStartYear = (int) config('app.profile_career_start_year', 2016);
        $experienceYears = max(1, now()->year - $careerStartYear);

        View::share('profileCareerStartYear', $careerStartYear);
        View::share('profileExperienceYears', $experienceYears);
    }
}
