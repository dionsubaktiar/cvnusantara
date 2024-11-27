<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Define which routes CORS should apply to.

    'allowed_methods' => ['*'], // Allow all HTTP methods (GET, POST, PUT, DELETE, etc.).

    'allowed_origins' => ['*'], // Allow all origins.

    'allowed_origins_patterns' => [], // Leave empty if not using regex for origins.

    'allowed_headers' => ['*'], // Allow all headers.

    'exposed_headers' => [], // Headers exposed to the browser (optional).

    'max_age' => 0, // Cache duration for preflight requests.

    'supports_credentials' => true, // Allow credentials like cookies or Authorization headers.
];

