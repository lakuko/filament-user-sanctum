<?php

// config for Lakuko/FilamentUserSanctum
return [
    'models' => [
        'User' => \App\Models\User::class,
    ],
    'resources' => [
        'UserResource' => \Lakuko\FilamentUserSanctum\Resources\UserResource::class,
    ],
];
