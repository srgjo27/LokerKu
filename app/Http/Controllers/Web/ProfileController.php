<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $user = auth()->user();
            return view('pages.web.profile.list', compact('user'));
        }
        return view('pages.web.profile.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.web.profile.input', ['data' => auth()->user()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->all());
        $user = User::find(auth()->user()->id);
        $validators = Validator::make($request->all(), [
            'name' => 'required|max:255,min:3|unique:users,name,' . $user->id,
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'required|max:13|unique:users,phone,' . $user->id,
            'dormitory_id' => 'required|exists:dormitories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validators->fails()) {
            $errors = $validators->errors();
            if ($errors->has('image')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('image')
                ]);
            } elseif ($errors->has('name')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('name')
                ]);
            } elseif ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email')
                ]);
            } elseif ($errors->has('phone')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('phone')
                ]);
            } elseif ($errors->has('dormitory_id')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('dormitory_id')
                ]);
            }
        }

        if ($request->hasFile('image')) {
            $request->file('image')
                ->move(public_path('public/profiles'), $request->file('image')->getClientOriginalName());
            $user->image = $request->file('image')->getClientOriginalName();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->dormitory_id = $request->dormitory_id;
        $user->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Profile berhasil diperbarui',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
