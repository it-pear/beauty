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

    '' => 'site/index', // actionIndex в SiteController
    
);
