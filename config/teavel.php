<?php

return [

/**
 * Auth Views
 * The views that will be loaded to handle authentication and password reset logic.
 */
'auth_views' => [
    'login' => 'auth.login',
    'register' => '',
    'password_request_form' => 'auth.password-request',
    'password_request_success' => 'auth.password-success',
    'password_reset_form' => 'base::pwd-modify',
],
];
