<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserDataAccessRepositoryInterface as UserDataAccess;


class SampleController extends Controller
{
    protected $user;

    public function __construct(UserDataAccess $UserDataAccess)
    {
        $this->user = $UserDataAccess;
    }

    public function index()
    {
        $start = microtime(true);
        $memory = memory_get_usage();

        $data = $this->user->getAll();

        $result = [
            'name'    => get_class($this->user),

            'time'    => microtime(true) - $start,

            'memory'  => (memory_get_peak_usage() - $memory) / (1024 * 1024)
        ];

        dd($result);
    }
}
