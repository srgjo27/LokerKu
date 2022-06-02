<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Locker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenerateController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->get('keywords');
            $lockers = Locker::whereHas('user', function ($query) use ($keywords) {
                $query->where('name', 'like', '%' . $keywords . '%');
            })
                ->orderBy('created_at', 'desc')->paginate(30);
            $users = User::all();
            return view('pages.admin.generate.list', compact('lockers', 'users'));
        }
        return view('pages.admin.generate.main');
    }
}
