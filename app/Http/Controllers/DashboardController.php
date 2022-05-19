<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\Requests;


class DashboardController extends Controller
{
   public function index()
   {
       return view('dashboard.index');
   }
}