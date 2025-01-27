<?php

return [

    'check_phone' => true,

    'domain' => config('domains.base.url'),
    
    'offer_domain_key' => 'book',
/**
 * Auth Views
 * The views that will be loaded to handle authentication and password reset logic.
 */
'auth_views' => [
    'login' => 'auth.login',
    'password_request' => 'auth.password-request',
    'password_success' => 'auth.password-success',
    'password_reset' => 'auth.password-reset',
],
];
