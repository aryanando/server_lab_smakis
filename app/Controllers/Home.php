<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        shell_exec('SSH admin@202.6.236.214 -p 1023 "ip hotspot user add name=Nandoi password=1234 server=all"');
        return view('welcome_message');
    }
}
