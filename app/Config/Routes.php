<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\RESTful\ResourceController;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Todo::index'); // 首頁直接進入 todo 列表
$routes->resource('todo');        // 自動生成 CRUD 路由

