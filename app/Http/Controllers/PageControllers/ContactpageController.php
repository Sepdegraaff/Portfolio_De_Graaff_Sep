<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Interfaces\PageInterface;

class ContactpageController implements PageInterface
{
    public function index()
    {
        return view('contact');
    }
}
