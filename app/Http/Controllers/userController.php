<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::table('users')
        //     ->orderBy('created_at', 'desc')
        //     ->get();
        $users = User::with('role')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = DB::table('roles')->get();
        return view("users.create", ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            // 'user_name' => 'required',
            // 'first_name' => 'required',
            // 'last_name' => 'required',
            'email' => 'required|email|max:100|unique:users',
            // 'password' => 'required',
            // 'gender' => 'required',
            // 'marital_status' => 'required',
            // 'role' => 'required',
            // 'place_of_birth' => 'required',
            // 'date_of_birth' => 'required',
            'phone' => 'required|unique:users'
        ]);
        $data = $request->all();
        $datas = array();
        $datas = [
            'user_name' => $data['user_name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'marital_status' => $data['marital_status'],
            'role_id' => $data['role'],
            'date_of_birth' => $data['date_of_birth'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
            'password_token' => bcrypt($data['password']),
            'remember_token' => $data['_token'],
            'place_of_birth' => $data['address'],
            'profile' => $data['profile']
        ];
        // dd($datas);
        User::create($datas);
        return redirect('users')->with('created','User is created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = DB::table('roles')->get();
        return view('users.edit', ['user' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $datas = array();
        $datas = [
            'user_name' => $data['user_name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'marital_status' => $data['marital_status'],
            'role_id' => $data['role'],
            'date_of_birth' => $data['date_of_birth'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
            'password_token' => bcrypt($data['password']),
            'remember_token' => $data['_token'],
            'place_of_birth' => $data['address'],
            'profile' => $data['profile']
        ];
        $user = User::findOrFail($id);
        $user->update($datas);
        return redirect('users')->with('updated','User is updated successfully');
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
