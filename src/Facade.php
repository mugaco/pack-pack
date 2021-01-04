<?php
namespace Mugaco\Pack;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pack';
    }
}
