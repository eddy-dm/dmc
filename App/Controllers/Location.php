<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Location extends \Core\Controller
{
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Location/location.html',[
		    'name' => 'Test',
		    'colours' => ['red', 'green', 'blue'],
		]);
    }
}
