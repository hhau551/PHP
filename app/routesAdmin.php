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
  'user' => [
    'controller' => 'AccountController',
    'action' => 'showUser'
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
  'edit-brand' => [
    'controller' => 'BrandController',
    'action' => 'editBrand'
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
  'edit-color' => [
    'controller' => 'ColorController',
    'action' => 'editColor'
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
  'edit-size' => [
    'controller' => 'SizeController',
    'action' => 'editSize'
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
  ],
  'edit-product' => [
    'controller' => 'ProductController',
    'action' => 'editProduct'
  ],
  'delete-product' => [
    'controller' => 'ProductController',
    'action' => 'deleteProduct'
  ]
];