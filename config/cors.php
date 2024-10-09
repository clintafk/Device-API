<?php

return [
    'paths' => ['api/*', 'v1/tasks', 'v1/*', 'sanctum/*'], // Allow CORS on specific API paths

    'allowed_methods' => ['*'], // Allow all methods (GET, POST, PUT, DELETE)

    'allowed_origins' => ['http://localhost:5174', 'http://localhost:5173'], // Add the origin of your React app

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Allow all headers

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,
];