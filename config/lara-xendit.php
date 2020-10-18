<?php

return [

    /*
     * --------------------------------------------
     * Laravel Xendit Configuration:
     * --------------------------------------------
     *
     * */

    'secret_key' => env('XENDIT_SECRET_KEY'),
    'base_api_url' => env('XENDIT_BASE_API_URL'),
    'callback_token' => env('XENDIT_CALLBACK_TOKEN'),
    'va_prefix' => env('XENDIT_VA_PREFIX',null)

];