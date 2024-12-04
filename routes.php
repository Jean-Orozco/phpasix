<?php
//fitxer per definir les rutes
return [
    '/' => '../App/Controllers/HomeController.php@index',
    '/home' => '../App/Controllers/HomeController.php@index',
    '/index' => '../App/Controllers/HomeController.php@index',
    '/index.php' => '../App/Controllers/HomeController.php@index',

    '/books' => '../App/Controllers/BookController.php@index',
    '/books/create' => '../App/Controllers/BookController.php@create',
    '/books/store' => '../App/Controllers/BookController.php@store',
    '/books/edit/{id}' => '../App/Controllers/BookController.php@edit',
    '/books/update/{id}' => '../App/Controllers/BookController.php@update',
    '/books/delete/{id}' => '../App/Controllers/BookController.php@delete',
    '/books/destroy/{id}' => '../App/Controllers/BookController.php@destroy',
    '/books/confirm-delete/{id}' => '../App/Controllers/BookController.php@confirmDelete',
    '/books/show/{id}' => '../App/Controllers/BookController.php@show',

    '/videojoc' => '../App/Controllers/VideojocController.php@index',
    '/videojoc/create' => '../App/Controllers/VideojocController.php@create',
    '/videojoc/store' => '../App/Controllers/VideojocController.php@store',
    '/videojoc/edit/{id}' => '../App/Controllers/VideojocController.php@edit',
    '/videojoc/update/{id}' => '../App/Controllers/VideojocController.php@update',
    '/videojoc/delete/{id}' => '../App/Controllers/VideojocController.php@delete',
    '/videojoc/destroy/{id}' => '../App/Controllers/VideojocController.php@destroy',
    '/videojoc/confirm-delete/{id}' => '../App/Controllers/VideojocController.php@confirmDelete',
    '/videojoc/show/{id}' => '../App/Controllers/VideojocController.php@show',


];