<?php

return array(
    
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    
    'catalog' => 'catalog/index', // actionIndex в CatalogController
   
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory 
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController  

    'cart/add/([0-9]+)' => 'cart/add/$1', // добавление в корзину
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // добавление в корзину ajax

    'cart/remove/([0-9]+)' => 'cart/remove/$1', // удаление одного товара
    'cart/removeAjax/([0-9]+)' => 'cart/removeAjax/$1', // удаление одного товара

    'cart/delete/([0-9]+)' => 'cart/delete/$1', // полное удаление товара

    'cart' => 'cart/index', // страница корзины

    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',

    '' => 'site/index', // actionIndex в SiteController
    
);
