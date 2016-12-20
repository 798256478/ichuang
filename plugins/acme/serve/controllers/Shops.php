<?php namespace Acme\Serve\Controllers;

use Backend\Classes\Controller;
use BackendMenu;


class Shops extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'acme.serve.manage_shop' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Acme.Serve', 'serve', 'shops');
    }

}