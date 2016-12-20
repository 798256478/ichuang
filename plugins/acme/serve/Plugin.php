<?php namespace Acme\Serve;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
            'Acme\Serve\Components\Shop'       => 'Shop',
        ];
    }

    public function registerSettings()
    {
    }
}
