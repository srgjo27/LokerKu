<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dormitory;

class LockerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->get('keywords');
            $lockers = User::leftJoin('dormitories', 'dormitories.id', '=', 'users.dormitory_id')
                ->select('dormitories.*', 'users.*', 'users.name as user_name', 'users.image as user_image', 'dormitories.name as dorm_name')
                ->where('dormitories.name', 'like', '%' . $keywords . '%')
                ->orWhere('users.name', 'like', '%' . $keywords . '%')
                ->where('users.role', '!=', 'admin')
                ->paginate(36);
            return view('pages.admin.locker.list', compact('lockers'));

            // $lockers = User::where('role', 'user')
            //     ->where('name', 'like', '%' . $keywords . '%')
            //     ->orWhere('dormitory_id', 'like', '%' . $keywords . '%')
            //     ->orderBy('created_at', 'desc')->paginate(36);
            // return view('pages.admin.locker.list', compact('lockers'));
        }
        return view('pages.admin.locker.main');
    }

    public function show(User $locker)
    {
        $lockers = $locker->lockers()->orderBy('created_at', 'desc')->get();
        $user = $locker;
        return view('pages.admin.locker.show', compact('lockers', 'user'));
    }
}
