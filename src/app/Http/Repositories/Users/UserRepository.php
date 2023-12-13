<?php

namespace App\Http\Repositories\Users;

use App\Models\User;

class UserRepository
{



  public function createUser(array $userData)
  {
    return User::created([

    ]);
  }
}
