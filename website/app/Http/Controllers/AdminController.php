<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

    public function account(User $user)
    {
        $data_user = User::orderBy('id', 'DESC')->get();
        return view("admin.account.index", compact('data_user'));
    }

    public function delete_account($id)
    {
        $account = User::find($id);
        $account->delete();
        return redirect()->route('account')->with('success', 'Deleted Successfully');
    }

    public function add_account(Request $request)
    {

        $users_mail = User::where('email', $request->email)->get();

        if (sizeof($users_mail) > 0) {
            $msg = 'Email đã được đăng ký, vui lòng nhập lại !';
            return redirect()->route('account')->with('userExistError', $msg);
        } else {
            $image_citizen = array();
            if ($files = $request->file('image_citizen_id')) {
                $count = 1;
                foreach ($files as $file) {
                    $names = $request->name . '-' . $count++ . '.' . $file->getClientOriginalExtension();
                    $file->move('images/citizen_images/', $names);
                    $path = '/images/citizen_id/' . $names;
                    $image_citizen[] = $path;
                }
            }

            $avatar = array();
            if ($filess = $request->file('avatar')) {
                $namess = $request->name . 'avatar' . '.' . $filess->getClientOriginalExtension();
                $filess->move('images/avatar/', $namess);
                $paths = '/images/avatar/' . $namess;
                $avatar = $paths;
            }
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'citizen_id' => $request->citizen_id,
                'dob' => $request->dob,
                'address' => $request->address,
                'gender' => $request->gender,
                'type' => $request->type,
                'image_citizen_id' => json_encode($image_citizen),
                'avatar' => json_encode($avatar),
            ]);
            return redirect()->back()->with('success', 'Your account has been created successfully!');
        }
    }
}
