<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KirimPesanController extends Controller
{
    public function index()
    {
        return view('pages.admin.locker.kirimpesan');
    }
}
