<?php

namespace App\Repositories\User;

use Illuminate\Support\Facades\DB;

class UserDataAccessQBRepository implements UserDataAccessRepositoryInterface
{
    protected $table = 'users';

    public function getAll()
    {
        return DB::table($this->table)->get();
    }
}