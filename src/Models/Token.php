<?php

namespace Lakuko\FilamentSanctum\Models;

use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

class Token extends SanctumPersonalAccessToken
{
    protected $table = 'personal_access_tokens';
}
