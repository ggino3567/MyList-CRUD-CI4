<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// 首頁直接進入 todo 列表
$routes->get('/', 'Todo::index');

// CRUD routes
$routes->group('todo', function ($routes) {
    $routes->get('/', 'Todo::index');
    $routes->get('new', 'Todo::new');
    $routes->post('create', 'Todo::create');
    $routes->get('edit/(:num)', 'Todo::edit/$1');
    $routes->post('update/(:num)', 'Todo::update/$1');
    $routes->get('delete/(:num)', 'Todo::delete/$1');
});


// // 自動生成 CRUD 路由
// $routes->resource('todo');

