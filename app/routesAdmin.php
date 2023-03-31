<?php
$routes = [
  '/' => [
    'controller' => 'AccountController',
    'action' => 'loginAdmin'
  ],
  'index' => [
    'controller' => 'HomeController',
    'action' => 'indexAdmin'
  ],
  'brand' => [
    'controller' => 'BrandController',
    'action' => 'index'
  ],
  'danh-sach-brand' => [
    'controller' => 'BrandController',
    'action' => 'showBrand'
  ],
  'create-brand' => [
    'controller' => 'BrandController',
    'action' => 'createBrand'
  ],
  'delete-brand' => [
    'controller' => 'BrandController',
    'action' => 'deleteBrand'
  ],
  'color' => [
    'controller' => 'ColorController',
    'action' => 'index'
  ],
  'danh-sach-color' => [
    'controller' => 'ColorController',
    'action' => 'showColor'
  ],
  'create-color' => [
    'controller' => 'ColorController',
    'action' => 'createColor'
  ],
  'delete-color' => [
    'controller' => 'ColorController',
    'action' => 'deleteColor'
  ],
  'size' => [
    'controller' => 'SizeController',
    'action' => 'index'
  ],
  'danh-sach-size' => [
    'controller' => 'SizeController',
    'action' => 'showSize'
  ],
  'create-size' => [
    'controller' => 'SizeController',
    'action' => 'createSize'
  ],
  'delete-size' => [
    'controller' => 'SizeController',
    'action' => 'deleteSize'
  ]  ,
  'product' => [
    'controller' => 'ProductController',
    'action' => 'index'
  ],
  'danh-sach-product' => [
    'controller' => 'ProductController',
    'action' => 'showProduct'
  ],
  'create-product' => [
    'controller' => 'ProductController',
    'action' => 'createProduct'
  ]
];