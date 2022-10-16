<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Products extends \Core\Controller
{
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Products/products.html',[
		    'name' => 'Test',
		    'colours' => ['red', 'green', 'blue'],
            'articles' => [
                [
                'name' => 'Honda Model X',
                'price' => 3200,
                'img' => "/src/assets/img/articles/image-1.png",
                'description' => 'Nice and original Honda C90. Price VAT included'
                ],
                [
                'name' => 'Honda Model A',
                'price' => 5400,
                'img' => "/src/assets/img/articles/image-2.png",
                'description' => 'Nice and original Honda C90. Price VAT included'
                ],
                [
                'name' => 'Honda Model F',
                'price' => 6200,
                'img' => "/src/assets/img/articles/image-3.png",
                'description' => 'Nice and original Honda C90. Price VAT included'
                ]
            ]
		]);
    }
}
