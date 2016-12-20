<?php namespace Acme\Guide\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Content extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'acme.guide.manage_content' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Acme.Guide', 'guide', 'contents');
    }
}