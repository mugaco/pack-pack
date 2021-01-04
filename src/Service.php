<?php
namespace Mugaco\Pack;

class Service
{
    public function test()
    {
        return ['res'=> __('pack::messages.foo')];
    }
}
