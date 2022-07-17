<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function test($data)
    {
        echo "This is the data:".$data;
    }
}
