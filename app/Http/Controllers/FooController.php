<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FooController extends Controller
{
    public function __invoke()
    {
        return 'hello';
    }
}
