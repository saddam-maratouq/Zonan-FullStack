<?php
// config.php

// 1. Base URL Setup (adjust to match your folder name, e.g., '/store-admin/')
// If your files are running directly on localhost root, just leave it as '/'

define('BASE_URL', '/php-projects/php-all-projects/Task-30/Zonan%20project/Admin-Store-Dashboard/'); 


// 2. Dynamic Store Data (Just a dummy name for now)
$currentStore = [
    'name' => 'My Awesome Store',  // test only we add it from call api later ...
];

// base url 
// http://localhost/php-projects/php-all-projects/Task-30/Zonan%20project/Admin-Store-Dashboard/

// 3. The Sidebar Menu Array
$sidebarMenu = [
    [
        'title' => 'Store Info',
        'icon' => 'store', // Material Icon
        'link' => 'pages/store_info/store_info_form.php',
        'type' => 'single'
    ],
    [
        'title' => 'Products',
        'icon' => 'inventory_2',
        'type' => 'group',
        'submenu' => [
            ['title' => 'Add New', 'link' => 'pages/products/product_form.php'],
            ['title' => 'All Products', 'link' => 'pages/products/product_list.php'],
            ['title' => 'Views Number', 'link' => 'pages/products/product_views_list.php']
        ]
    ],
    [
        'title' => 'Orders',
        'icon' => 'shopping_cart',
        'link' => 'pages/orders/order_list.php',
        'type' => 'single'
    ],
    [
        'title' => 'Ads Sponsor',
        'icon' => 'campaign',
        'link' => 'pages/ads_sponsor/ads_form.php',
        'type' => 'single'
    ],
    [
        'title' => 'Views',
        'icon' => 'visibility',
        'link' => 'pages/views/views_list.php',
        'type' => 'single'
    ],
    [
        'title' => 'Logout',
        'icon' => 'logout',
        'link' => 'pages/logout/logout.php',
        'type' => 'single'
    ]
];


?>