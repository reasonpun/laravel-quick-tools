<?php
/**
 * Updated by Reasonpun
 * User: youxingxiang
 * Date: 2020/7/23
 * Time: 9:17 AM
 * Updated by Reasonpun
 */

namespace Reasonpun\LaravelQuickTools;

use Illuminate\Support\ServiceProvider;
use Reasonpun\LaravelQuickTools\Console\CreateRepositoryCommand;
use Reasonpun\LaravelQuickTools\Console\CreateServiceCommand;
use Reasonpun\LaravelQuickTools\Console\CreateTraitCommand;
use Reasonpun\LaravelQuickTools\Services\CacheService;

class LaravelQuickToolsServiceProvider extends ServiceProvider
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
