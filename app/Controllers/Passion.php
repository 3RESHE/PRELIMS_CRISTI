<?php

namespace App\Controllers;

class Passion extends BaseController
{
    public function passion(): string
    {
        return view('passion');
    }
}
