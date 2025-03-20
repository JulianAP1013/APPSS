<?php

namespace App\Providers;

use App\Contracts\ListaServiceInterface;
use App\Services\ListaService;
use App\Services\UsuarioService;
use App\Contracts\UsuarioServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ListaServiceInterface::class, ListaService::class);
        $this->app->bind(UsuarioServiceInterface::class, UsuarioService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
