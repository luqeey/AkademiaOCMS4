<?php 
namespace App\Project\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use App\Project\Models\Project;

/**
 * Projects Back-end Controller
 */
class Projects extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    /**
     * @var string Configuration file for the `FormController` behavior.
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string Configuration file for the `ListController` behavior.
     */
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('App.Project', 'project', 'projects');
    }
}
