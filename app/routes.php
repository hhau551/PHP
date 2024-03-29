<?php
$routes = [
  '/' => [
    'controller' => 'HomeController',
    'action' => 'index'
  ],
  'blog' => [
    'controller' => 'HomeController',
    'action' => 'blog'
  ],
  'contact' => [
    'controller' => 'HomeController',
    'action' => 'contact'
  ],
  'flash-sale' => [
    'controller' => 'HomeController',
    'action' => 'flashSale'
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
  ],
  'info-menu' => [
    'controller' => 'HomeController',
    'action' => 'infoMenu'
  ],
  'edit-info' => [
    'controller' => 'AccountController',
    'action' => 'editInfo'
  ],
  'product' => [
    'controller' => 'HomeController',
    'action' => 'indexProduct'
  ],
  'detail' => [
    'controller' => 'HomeController',
    'action' => 'detail'
  ],
  'add-cart' => [
    'controller' => 'ProductController',
    'action' => 'addCart'
  ],
  'view-cart' => [
    'controller' => 'ProductController',
    'action' => 'viewCart'
  ],
];