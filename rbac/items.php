<?php
return [
    'createPost' => [
        'type' => 2,
        'description' => 'Create a post',
    ],
    'about' => [
        'type' => 2,
        'description' => 'About page',
    ],
    'updatePost' => [
        'type' => 2,
        'description' => 'Update post',
    ],
    'author' => [
        'type' => 1,
        'children' => [
            'about',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'updatePost',
            'author',
        ],
    ],
];
