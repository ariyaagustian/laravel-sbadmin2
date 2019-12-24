<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperadminController extends Controller
{
    function index()
    {
        return view('admin.dashboard.index');
    }
}
