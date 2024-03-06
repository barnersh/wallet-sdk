<?php

namespace Elvis\WalletSdk\Models;

use Illuminate\Database\Eloquent\Model;

interface AuthorizedUser
{
    public function getAuthorizedUser(): Model;
}