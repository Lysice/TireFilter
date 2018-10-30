<?php
/**
 * Created by PhpStorm.
 * User: zhao
 * Date: 18-10-30
 * Time: 下午1:58
 */

namespace Lysice\TrieFilter;

use Illuminate\Support\ServiceProvider;
use Lysice\TrieFilter\TrieFilterService ;

class TrieFilterServiceProvider extends ServiceProvider {
    protected $defer = true;

    public function boot() {
        $this->pulishes([
            __DIR__ . '/../config/filter.php' => config_path('filter.php')
        ]);
    }

    public function register() {
        $this->app->singleton('triefilter', function ($app) {
            return new TrieFilterService();
        });
    }

    public function provides()
    {
        return ['triefilter'];
    }

}