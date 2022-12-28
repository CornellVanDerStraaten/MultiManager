<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard', [
            'breadcrumb' => Breadcrumbs::render('dashboard'),
            'test' => 'test'
        ]);
    }
}
