<?php

// config for Lakuko/FilamentUserSanctum
return [
    'models' => [
        'User' => \Lakuko\FilamentSanctum\Models\User::class,
        'Account' => \Lakuko\FilamentSanctum\Models\Account::class,
    ],
    'resources' => [
        'UserResource' => \Lakuko\FilamentSanctum\Resources\UserResource::class,
        'AccountResource' => \Lakuko\FilamentSanctum\Resources\AccountResource::class,
    ],
];
