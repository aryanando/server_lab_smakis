<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        shell_exec('SSH admin@10.10.10.1 "ip hotspot user add name=Nandooi password=1234 server=all"');
        return view('welcome_message');
    }
}
