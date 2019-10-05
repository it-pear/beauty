<?php

return array(
    // продукт
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    // каталог
    'catalog' => 'catalog/index', // actionIndex в CatalogController
    // категории
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory 
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController  
    // корзина добавление
    'cart/add/([0-9]+)' => 'cart/add/$1', // добавление в корзину
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // добавление в корзину ajax
    // корзина удаление одной единицы
    'cart/remove/([0-9]+)' => 'cart/remove/$1', // удаление одного товара
    'cart/removeAjax/([0-9]+)' => 'cart/removeAjax/$1', // удаление одного товара
    // удаление товара
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // полное удаление товара
    // корзина
    'cart' => 'cart/index', // страница корзины
    'cart/checkout' => 'cart/checkout', // оформление заказа
    'cart/thanks' => 'cart/thanks', // страница благодарности
    // Пользователь
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    // админка
    'admin' => 'admin/index',
    // админка => продукты
    'admin/products' => 'adminProduct/index', 
    'admin/products/create' => 'adminProduct/create',
    'admin/products/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/products/delete/([0-9]+)' => 'adminProduct/delete/$1',
    // админка => категории
    'admin/categories' => 'adminCategory/index', 
    'admin/categories/create' => 'adminCategory/create',
    'admin/categories/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/categories/delete/([0-9]+)' => 'adminCategory/delete/$1',
    // админка => заказы
    'admin/orders' => 'adminOrder/index',
    'admin/orders/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/orders/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/orders/view/([0-9]+)' => 'adminOrder/view/$1',

    '' => 'site/index', // actionIndex в SiteController
);
