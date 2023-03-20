<?php
$routes = [
  '/' => [
    'controller' => 'HomeController',
    'action' => 'index'
  ],
  'brand' => [
    'controller' => 'BrandController',
    'action' => 'showBrand'
  ],
  'register' => [
    'controller' => 'AccountController',
    'action' => 'register'
  ],
  'login' => [
    'controller' => 'AccountController',
    'action' => 'login'
  ],
  'logout' => [
    'controller' => 'AccountController',
    'action' => 'logout'
  ],
  'forgot-password' => [
    'controller' => 'AccountController',
    'action' => 'forgotPassword'
  ]
];