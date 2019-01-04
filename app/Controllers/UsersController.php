<?php

namespace App\Controllers;

use App\Models\CustomerTagModel;

class UsersController extends BaseController
{
    public function index()
    {
        $res = CustomerTagModel::first();
        print_r($res->name);
    }
}