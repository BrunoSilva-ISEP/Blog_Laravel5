<?php
return [
    'name' => "L5 Blog",
    'title' => "Laravel 5.1 - Bruno",
    'subtitle' => 'A blog written in Laravel 5.1',
    'description' => 'This is my meta description',
    'author' => 'Bruno Silva',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'contact_email' => env('MAIL_FROM'),
    'uploads' => [
        'storage' => 'local',
        'webpath' => '/uploads/',
    ],
];

