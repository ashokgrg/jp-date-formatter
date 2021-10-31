<?php

namespace Ashokgrg\JpDateFormatter;
use Illuminate\Support\ServiceProvider;

class JpDateFormatterServiceProvider extends ServiceProvider
{

    public function boot()
    {
    }
    public function register()
    {
      $this->app->singleton(JpDateFormatter::class, function(){
          return new JpDateFormatter();
      });
    }

}
