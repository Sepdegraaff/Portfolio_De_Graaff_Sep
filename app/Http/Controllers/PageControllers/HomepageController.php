<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Interfaces\PageInterface;
use Illuminate\View\View;

class HomepageController implements PageInterface
{
    public function index(): View
    {
        return view('home');
    }
}
