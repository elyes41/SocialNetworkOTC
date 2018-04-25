<?php

namespace App;

use Inani\Larapoll\Traits\Voter;
use Spatie\Permission\Traits\HasRoles;

class User extends \App\Models\User
{
use HasRoles;
}