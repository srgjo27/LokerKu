<?php

namespace App\Http\Controllers\Web;

use Carbon\Carbon;
use App\Models\Locker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LockerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $now = Carbon::now();
            $weekStartDate = $now->startOfWeek()->format('Y-m-d H:i');
            $weekEndDate = $now->endOfWeek()->format('Y-m-d H:i');
            $lockers = Locker::whereBetween('created_at', [$weekStartDate, $weekEndDate])->get();
            return view('pages.web.locker.list', compact('lockers'));
        }
        return view('pages.web.locker.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.web.locker.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'description' => 'required'
        ]);

        if ($validators->fails()) {
            $errors = $validators->errors();
            if ($errors->has('description')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('description')
                ]);
            }
        }

        $locker = new Locker();

        if ($request->hasFile('file')) {
            $request->file('file')->storeAs('public/lockers', $request->file('file')->getClientOriginalName());
            $locker->file = $request->file('file')->getClientOriginalName();
        }

        $locker->user_id = auth()->user()->id;
        $locker->description = $request->description;
        $locker->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Daftar barang berhasil ditambahkan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Locker  $locker
     * @return \Illuminate\Http\Response
     */
    public function show(Locker $locker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Locker  $locker
     * @return \Illuminate\Http\Response
     */
    public function edit(Locker $locker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Locker  $locker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locker $locker)
    {
        $validators = Validator::make($request->all(), [
            'description' => 'required',
        ]);

        if ($validators->fails()) {
            $errors = $validators->errors();
            if ($errors->has('description')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('description')
                ]);
            }
        }

        if ($request->hasFile('file')) {
            $request->file('file')->storeAs('public/lockers', $request->file('file')->getClientOriginalName());
            $locker->file = $request->file('file')->getClientOriginalName();
        }

        $locker->user_id = auth()->user()->id;
        $locker->description = $request->description;
        $locker->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Daftar barang berhasil diupdate',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locker  $locker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locker $locker)
    {
        $file = public_path('storage/lockers/' . $locker->file);
        if (file_exists($file)) {
            unlink($file);
        }
        $locker->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Daftar barang berhasil dihapus',
        ]);
    }
}
