<?php

// config for Lakuko/FilamentUserSanctum
return [
    'models' => [
        'Account' => \Lakuko\FilamentSanctum\Models\Account::class,
        'Token' => \Lakuko\FilamentSanctum\Models\Token::class,
    ],
    'resources' => [
        'AccountResource' => \Lakuko\FilamentSanctum\Resources\AccountResource::class,
    ],
];
