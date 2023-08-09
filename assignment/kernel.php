<?php

protected $middlewareGroups = [
    'web' => [
        // ...
        \Illuminate\Auth\Middleware\Authenticate::class,
        // ...
    ],
];
