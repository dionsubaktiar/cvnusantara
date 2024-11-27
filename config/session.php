<?php

use Illuminate\Support\Str;
return [
    'driver' => env('SESSION_DRIVER', 'cookie'),
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'domain' => env('SESSION_DOMAIN', null), // Match frontend domain if needed
    'same_site' => 'lax', // Ensure compatibility with cross-origin requests
];
