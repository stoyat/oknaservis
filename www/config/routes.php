<?php
return array (

    'product/([0-9]+)' => 'product/view/$1', // actionView � ProductController
    
    'news/([0-9]+)' => 'news/view/$1',
    
    'contacts' => 'contact/index',
    
    'catalog' => 'catalog/index',
    
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory � CatalogController   
    'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory � CatalogController
    
    //'contacts' => 'site/contact',
    ''=>'site/Index',//SiteController->actionIndex
);
