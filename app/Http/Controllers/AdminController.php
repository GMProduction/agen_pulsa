<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class AdminController extends CustomController
{

    public function index()
    {
        if (request()->isMethod('POST')) {
            return $this->create();
        }
        $admin = User::where('role', '=', 'admin')->get();

        return view('admin.admin', ['sidebar' => 'admin', 'data' => $admin]);

    }

    public function create()
    {
        //
        $field = \request()->validate(
            [
                'nama'     => 'required',
                'username' => 'required',
            ]
        );

        $fieldPass = \request()->validate(
            [
                'password' => 'required|confirmed',
            ]
        );
        if (\request('id')) {
            $cekUsername = User::where([['username', '=', \request('username')], ['id', '!=', \request('id')]])->first();
            if ($cekUsername) {
                return \request()->validate(
                    [
                        'username' => 'required|string|unique:users,username',
                    ]
                );
            }
            if (strpos($fieldPass['password'], '*') === false) {
                $password = Hash::make($fieldPass['password']);
                Arr::set($field, 'password', $password);
            }
            $user = User::find(\request('id'));
            $user->update($field);
        } else {
            \request()->validate(
                [
                    'username' => 'required|string|unique:users,username',
                ]
            );
            $user     = new User();
            $password = Hash::make($fieldPass['password']);
            Arr::set($field, 'password', $password);
            Arr::set($field, 'role', 'admin');
            $user = $user->create($field);
        }

        return 'berhasil';
    }

    public function destroy()
    {
        $user = User::find(\request('id'));
        $user->delete();

        return $this->jsonResponse('success');

    }
}
