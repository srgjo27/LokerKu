<?php

namespace App\Http\Controllers\Web;

use Carbon\Carbon;
use App\Models\Locker;
use App\Models\History;
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
            // $now = Carbon::now();
            // $weekStartDate = $now->startOfWeek()->format('Y-m-d H:i');
            // $weekEndDate = $now->endOfWeek()->format('Y-m-d H:i');
            // $lockers = Locker::whereBetween('created_at', [$weekStartDate, $weekEndDate])->get();
            // $lockers = Locker::orderBy('created_at', 'desc')->paginate(8);
            $lockers = Locker::orderBy('created_at', 'desc')->paginate(8);
            return view('pages.web.locker.list', ['lockers' => $lockers]);
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
        return view('pages.web.locker.input', ['locker' => new Locker]);
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
            'name' => 'required',
        ]);

        if ($validators->fails()) {
            $errors = $validators->errors();
            if ($errors->has('name')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('name')
                ]);
            }
        }

        $locker = new Locker();

        if ($request->hasFile('file')) {
            $request->file('file')->storeAs('public/lockers', $request->file('file')->getClientOriginalName());
            $locker->file = $request->file('file')->getClientOriginalName();
        }

        $locker->user_id = auth()->user()->id;
        $locker->name = $request->name;
        $locker->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Barang berhasil ditambahkan'
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
        return view('pages.web.locker.show', compact('locker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Locker  $locker
     * @return \Illuminate\Http\Response
     */
    public function edit(Locker $locker)
    {
        return view('pages.web.locker.input', compact('locker'));
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
            'name' => 'required',
        ]);

        if ($validators->fails()) {
            $errors = $validators->errors();
            if ($errors->has('name')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('name')
                ]);
            }
        }

        if ($request->hasFile('file')) {
            $request->file('file')->storeAs('public/lockers', $request->file('file')->getClientOriginalName());
            $locker->file = $request->file('file')->getClientOriginalName();
        }

        $locker->user_id = auth()->user()->id;
        $locker->name = $request->name;
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
        // $file = public_path('storage/lockers/' . $locker->file);
        // if (file_exists($file)) {
        //     unlink($file);
        // }
        $locker->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Daftar barang berhasil dihapus',
        ]);
    }

    public function status($id)
    {
        $request = Locker::find($id);
        $request->status = 'taken';
        $request->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Barang berhasil di ambil',
        ]);
    }
}