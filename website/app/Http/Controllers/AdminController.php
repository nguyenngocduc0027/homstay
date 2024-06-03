<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(User $user)
    {
        $data_user = User::orderBy('id', 'DESC')->get();
        return view("admin.index", compact('data_user'));
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
            $image_citizen = [];
            if ($files = $request->file('image_citizen_id')) {
                $count = 1;
                foreach ($files as $file) {
                    $names = $request->name . '-' . $count++ . '.' . $file->getClientOriginalExtension();
                    $file->move('images/citizen_images/', $names);
                    $image_citizen[] = $names;
                }
            }
            if ($filess = $request->file('avatar')) {
                $namess = $request->name . 'avatar' . '.' . $filess->getClientOriginalExtension();
                $filess->move('images/avatar/', $namess);
                $paths = "/images/avatar/" . $namess;
            } else{
                $paths = "https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg";
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
                'image_citizen_id' => $image_citizen,
                'avatar' => $paths,
            ]);
            return redirect()->back()->with('success', 'Your account has been created successfully!');
        }
    }

    public function update_account(Request $request, $id)
    {
            $new_user = User::where('id', $id);

            $image_citizen = [];
            if ($files = $request->file('image_citizen_id')) {
                $count = 1;
                foreach ($files as $file) {
                    $names = $request->name . '-' . $count++ . '.' . $file->getClientOriginalExtension();
                    $file->move('images/citizen_images/', $names);
                    $image_citizen[] = $names;
                }
            }
            if ($filess = $request->file('avatar')) {
                $namess = $request->name . 'avatar' . '.' . $filess->getClientOriginalExtension();
                $filess->move('images/avatar/', $namess);
                $paths = "/images/avatar/" . $namess;
            } else{
                $paths = "https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg";
            }
            // User::create([
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'password' => Hash::make($request->password),
            //     'phone' => $request->phone,
            //     'citizen_id' => $request->citizen_id,
            //     'dob' => $request->dob,
            //     'address' => $request->address,
            //     'gender' => $request->gender,
            //     'type' => $request->type,
            //     'image_citizen_id' => $image_citizen,
            //     'avatar' => $paths,
            // ]);
            $saveData = [
                "name" => $request->name,
                'phone' => $request->phone,
                'citizen_id' => $request->citizen_id,
                'dob' => $request->dob,
                'address' => $request->address,
                'gender' => $request->gender,
                'type' => $request->type,
            ];
           User::updateOrCreate(['id' => $id], $saveData);
            return redirect()->back()->with('success', 'Your account has been update successfully!');
        }

}
