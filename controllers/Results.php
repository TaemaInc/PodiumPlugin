<?php namespace Mathieutanguay\Podium\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Results Back-end Controller
 */
class Results extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Mathieutanguay.Podium', 'podium', 'results');
    }
}