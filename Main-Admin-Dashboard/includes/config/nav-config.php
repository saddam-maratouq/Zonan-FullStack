<?php
// includes/config/nav-config.php
// ONE source of truth. Base + relative paths.

$base = '/php-projects/php-all-projects/Task-30/Zonan project/Main-Admin-Dashboard';

return [
    ['title' => 'Dashboard', 'icon' => 'nc-grid-45', 'url' => $base . '/pages/dashboard.php'],

    ['title' => 'Header', 'icon' => 'nc-layout-11', 'children' => [
        ['title' => 'Header Form', 'url' => $base . '/pages/header/header-form.php'],
        ['title' => 'Header List', 'url' => $base . '/pages/header/header-list.php'],
    ]],

    ['title' => 'Footer', 'icon' => 'nc-sound-wave', 'children' => [
        ['title' => 'Footer Form', 'url' => $base . '/pages/footer/footer-form.php'],
        ['title' => 'Footer List', 'url' => $base . '/pages/footer/footer-list.php'],
    ]],

    ['title' => 'Slide Bar', 'icon' => 'nc-image', 'children' => [
        ['title' => 'Slide Bar Form', 'url' => $base . '/pages/slide-bar/slide-bar-form.php'],
        ['title' => 'Slide Bar List', 'url' => $base . '/pages/slide-bar/slide-bar-list.php'],
    ]],

    ['title' => 'Offer Section 1', 'icon' => 'nc-tag-content', 'children' => [
        ['title' => 'Offer 1 Form', 'url' => $base . '/pages/offer-section-1/offer-section-1-form.php'],
        ['title' => 'Offer 1 List', 'url' => $base . '/pages/offer-section-1/offer-section-1-list.php'],
    ]],

    ['title' => 'Offer Section 2', 'icon' => 'nc-tag-content', 'children' => [
        ['title' => 'Offer 2 Form', 'url' => $base . '/pages/offer-section-2/offer-section-2-form.php'],
        ['title' => 'Offer 2 List', 'url' => $base . '/pages/offer-section-2/offer-section-2-list.php'],
    ]],

    ['title' => 'Best Seller', 'icon' => 'nc-trophy', 'children' => [
        ['title' => 'Best Seller Form', 'url' => $base . '/pages/best-seller/best-seller-form.php'],
        ['title' => 'Best Seller List', 'url' => $base . '/pages/best-seller/best-seller-list.php'],
    ]],

    ['title' => 'All Inner Sliders', 'icon' => 'nc-album-2', 'children' => [
        ['title' => 'Inner Slider Form', 'url' => $base . '/pages/inner-slider/inner-slider-form.php'],
        ['title' => 'Inner Slider List', 'url' => $base . '/pages/inner-slider/inner-slider-list.php'],
    ]],

    ['title' => 'Feedback', 'icon' => 'nc-chat-33', 'children' => [
        ['title' => 'Feedback Form', 'url' => $base . '/pages/feedback/feedback-form.php'],
        ['title' => 'Feedback List', 'url' => $base . '/pages/feedback/feedback-list.php'],
    ]],

    ['title' => 'Contact Us', 'icon' => 'nc-email-85', 'children' => [
        ['title' => 'Contact Form', 'url' => $base . '/pages/contact-us/contact-us-form.php'],
        ['title' => 'Contact List', 'url' => $base . '/pages/contact-us/contact-us-list.php'],
    ]],

    ['title' => 'Users', 'icon' => 'nc-single-02', 'children' => [
        ['title' => 'User Form', 'url' => $base . '/pages/users/users-form.php'],
        ['title' => 'User List', 'url' => $base . '/pages/users/users-list.php'],
    ]],

    ['title' => 'Stores', 'icon' => 'nc-shop', 'children' => [
        ['title' => 'Store Form', 'url' => $base . '/pages/stores/stores-form.php'],
        ['title' => 'Store List', 'url' => $base . '/pages/stores/stores-list.php'],
    ]],

    ['title' => 'Orders', 'icon' => 'nc-bag-16', 'children' => [
        // ['title' => 'Order Form', 'url' => $base . '/pages/orders/orders-form.php'],
        ['title' => 'Order List', 'url' => $base . '/pages/orders/orders-list.php'],
    ]],

    ['title' => 'Intro Admin Store', 'icon' => 'nc-paper', 'children' => [
        ['title' => 'Intro Form', 'url' => $base . '/pages/intro/intro-form.php'],
        // ['title' => 'Intro List', 'url' => $base . '/pages/intro/intro-list.php'],
    ]],

    ['title' => 'Messages', 'icon' => 'nc-chat-33', 'children' => [
        ['title' => 'Message Form', 'url' => $base . '/pages/messages/message-form.php'],
        ['title' => 'Message List', 'url' => $base . '/pages/messages/messages-list.php'],
    ]],
];