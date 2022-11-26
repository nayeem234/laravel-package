<?php

namespace Nayeem\LaravelPwa;
use illuminate\Support\Facades\Facade;
class LaravelPwa extends Facade{
   
    protected static function getFacadeAccessor()
    {
        return 'laravel-pwa';
    }
}
?>
