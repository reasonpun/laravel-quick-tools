<?php
/**
 * Updated by Reasonpun
 * User: youxingxiang
 * Date: 2020/7/23
 * Time: 9:17 AM
 * Updated by Reasonpun
 */

namespace Reasonpun\LaravelQuick;

use Illuminate\Support\ServiceProvider;
use Reasonpun\LaravelQuick\Console\CreateRepositoryCommand;
use Reasonpun\LaravelQuick\Console\CreateServiceCommand;
use Reasonpun\LaravelQuick\Console\CreateTraitCommand;
use Reasonpun\LaravelQuick\Services\CacheService;

class LaravelQuickServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $commands = [
        CreateTraitCommand::class,
        CreateServiceCommand::class,
        CreateRepositoryCommand::class,
    ];

    /**
     * @see 注册服务
     */
    public function register()
    {
        $this->registerServices();
        $this->commands($this->commands);
    }


    public function boot()
    {
        $this->registerPublishing();
    }

    protected function registerServices()
    {
        $this->app->singleton('quick.cache.service', CacheService::class);
    }

    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../config' => config_path()]);
            $this->publishes([__DIR__ . '/../resources/lang' => resource_path('lang')]);
        }
    }
}
