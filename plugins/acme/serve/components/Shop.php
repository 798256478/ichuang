<?php namespace Acme\Serve\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Acme\Serve\Models\Shop as Shops;

class Shop extends ComponentBase
{
    public $shops;

    public function componentDetails()
    {
        return [
            'name'        => 'shop Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

}