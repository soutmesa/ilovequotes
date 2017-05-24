<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Carbon\Carbon;
use Auth;
use Hash;

class userController extends Controller
{
    public function index()
    {
        $users = User::with('roles')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin.users.index', ['users' => $users]);
    }

    public function create()
    {
        $roles = DB::table('roles')->get();
        return view("admin.users.create", ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $dt = new Carbon();
        $before = $dt->subYears(13)->format('Y-m-d');
        $this->validate($request, [
            'user_name' => 'required|max:50|unique:users',
            'email' => 'required|email|max:100|unique:users',
            'date_of_birth' => 'required|before:'.$before,
            'phone' => 'required|unique:users'
        ]);
        $tmp = $request->all();
        $datas = array();
        $datas = [
            'user_name' => $tmp['user_name'],
            'first_name' => $tmp['first_name'],
            'last_name' => $tmp['last_name'],
            'gender' => $tmp['gender'],
            'email' => $tmp['email'],
            'marital_status' => $tmp['marital_status'],
            'date_of_birth' => $tmp['date_of_birth'],
            'phone' => $tmp['phone'],
            'password' => bcrypt($tmp['password']),
            'password_token' => bcrypt($tmp['password']),
            'remember_token' => $tmp['_token'],
            'place_of_birth' => $tmp['address']
        ];
        $user = User::create($datas);
        $user->roles()->sync($request->roles);
        return redirect('users')->with('created','User is created successfully');
    }

    public function show($id)
    {
        $user = User::with('roles')->findOrFail($id);
        return view('admin.users.profile', compact('user'));
    }

    public function edit($id)
    {
        $auth_id = Auth::user()->id;
        $auth = User::with('roles')->findOrFail($auth_id);
        $arr_roles = [];
        foreach ($auth->roles as $key => $value) {
            $arr_roles[] = $value['name'];
        }
        if($auth_id==$id || false !== (array_search('admin', $arr_roles)) || false !== (array_search('manager', $arr_roles)) || false !== (array_search('super user', $arr_roles))){
            $roles = DB::table('roles')->get();
            $user = User::with('roles')->findOrFail($id);
            return view('admin.users.edit', ['user' => $user, 'roles' => $roles]);
        }else{
            return redirect('users')->with('back','You are not allow to edit this user');
        }
    }

    public function update(Request $request, $id)
    {
        $dt = new Carbon();
        $before = $dt->subYears(13)->format('Y-m-d');
        $this->validate($request, [
            'user_name' => 'required|max:50',
            'email' => 'required|email|max:100',
            'date_of_birth' => 'required|before:'.$before
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
            'date_of_birth' => $data['date_of_birth'],
            'phone' => $data['phone'],
            'remember_token' => $data['_token'],
            'place_of_birth' => $data['address']
        ];

        $auth_id = Auth::user()->id;
        $auth = User::with('roles')->findOrFail($auth_id);
        $arr_roles = [];
        foreach ($auth->roles as $key => $value) {
            $arr_roles[] = $value['name'];
        }
        if($auth_id==$id || false !== (array_search('admin', $arr_roles)) || false !== (array_search('manager', $arr_roles)) || false !== (array_search('super user', $arr_roles))){
            $user = User::findOrFail($id);
            $user->update($datas);
            if(false !== (array_search('admin', $arr_roles)) || false !== (array_search('manager', $arr_roles)) || false !== (array_search('super user', $arr_roles))){
                $user->roles()->sync($request->roles);
            }
            return redirect('users')->with('updated','User is updated successfully');
        }else{
            return redirect('users')->with('back','You are not allow to  update this user');
        }
    }

    public function password(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return view('users.reset', compact('user'));
    }

    public function reset(Request $request, $id)
    {
        $data = $request->all();
        $password = [
            'password' => bcrypt($data['password'])
        ];
        $user = User::findOrFail($id);
        if(Hash::check(bcrypt($data['password']), $user->password))
        {
            dd('notgo');
        }
        $user->update($password);
        return redirect('users')->with('pwd','User password is updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $auth_id = Auth::user()->id;
        $auth = User::with('roles')->findOrFail($auth_id);
        $arr_roles = [];
        foreach ($auth->roles as $key => $value) {
            $arr_roles[] = $value['name'];
        }
        if($auth_id==$id || false !== (array_search('admin', $arr_roles)) || false !== (array_search('manager', $arr_roles)) || false !== (array_search('super user', $arr_roles))){
            $user->delete();
            return redirect('users')->with('deleted','User is deleted successfully');
        }else{
            return redirect('users')->with('back','You are not allow to delete this user');
        }
    }

    public function upload($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.upload', compact('user'));
    }

    public function imageUpload(Request $request, $id)
    {
        $this->validate($request, [
            'profile' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = $request->profile->getClientOriginalName();
        $user = User::findOrFail($id);
        $user->update(['profile' => $imageName]);
        $request->profile->move(public_path('img/uploads/'), $imageName);
        return redirect('users')->with('profile','User profile is updated successfully');
    }

    private function getRequest(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('photo'))
        {
            $photo       = $request->file('photo');
            $fileName    = $photo->getClientOriginalName();
            $destination = $this->upload_dir;
            $photo->move($destination, $fileName);

            $data['photo'] = $fileName;
        }

        return $data;
    }
}
